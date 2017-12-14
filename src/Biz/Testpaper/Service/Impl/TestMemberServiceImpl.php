<?php

namespace Biz\Testpaper\Service\Impl;

use Biz\BaseService;
use Biz\Testpaper\Service\TestMemberService;

class TestMemberServiceImpl extends BaseService implements TestMemberService
{

    public function becomeStudentAndCreateOrder($userId, $testId, $data)
    {
        if (!ArrayToolkit::requireds($data, array('price', 'remark'))) { //检测是否缺少参数
            throw $this->createServiceException('parameter is invalid!');
        }

        //$this->getCourseService()->tryManageCourse($courseId);

        $user = $this->getUserService()->getUser($userId);

        if (empty($user)) {
            throw $this->createNotFoundException("没有该用户 user #{$userId} does not exist");
        }

//        $course = $this->getCourseService()->getCourse($courseId);
        $test = $this->getTestpaperService()->getTestpaper($testId);

        if (empty($test)) {
            throw $this->createNotFoundException("没有该试卷 testpaper #{$testId} does not exist ");
        }

        if ($this->isTestStudent($test['id'], $user['id'])) {
            throw $this->createNotFoundException('用户已经添加该试卷权限，不能重复添加！');
        }

        //$courseSet = $this->getCourseSetService()->getCourseSet($course['courseSetId']);
        $orderTitle = "购买（添加权限）题库试卷《{$test['name']}》";
        $orderPayment = '';
        if (isset($data['isAdminAdded']) && $data['isAdminAdded'] == 1) { //在订单标题标记为“管理员添加”
            $orderTitle = $orderTitle.'(管理员添加)';
            $orderPayment = 'outside';
        }

        if (empty($data['price'])) {
            $data['price'] = 0;
        }

        $systemOrder = array(
            'userId' => $userId,
            'title' => $orderTitle,
            'targetType' => 'test', //订单所属对象类型
            'targetId' => $testId, //订单所属对象ID
            'amount' => $data['price'], //订单实付金额
            'totalPrice' => 2, //订单总价
            'snPrefix' => "T", //订单标号前缀
            'payment' => $orderPayment, //订单支付方式
        );

        $order = $this->getOrderService()->createSystemOrder($systemOrder); //创建订单 orders表

        $info = array(
            'orderId' => $order['id'],
            'note' => $data['remark'],
            'becomeUseMember' => isset($data['becomeUseMember']) ? $data['becomeUseMember'] : false,
        );

        $this->becomeStudent($order['targetId'], $order['userId'], $info); //添加学员到课程

        $member = $this->getTestMemberDao()->getByTestIdAndUserId($testId['id'], $user['id']);

        if (isset($data['isAdminAdded']) && $data['isAdminAdded'] == 1) {
            //插入记录到notification表
            $this->getNotificationService()->notify(
                $member['userId'],
                'test-student-create',
                array(
                    'testId' => $testId,
                    'testName' => $test['name'],
                )
            );
        }

        //插入记录到log操作记录表
        $this->getLogService()->info(
            'test',
            'add_test-student',
            "题库试卷《{$test['name']}》(#{$test['id']})，添加学员{$user['nickname']}(#{$user['id']})题库权限，备注：{$data['remark']}"
        );

        return array($test, $member, $order);
    }



    /***学员添加题库权限，插入课程学员记录表 test_member表
     * @param $testId 试卷id
     * @param $userId 用户id
     * @param array $info 需要插入表的参数
     * @return mixed
     * @throws \Codeages\Biz\Framework\Service\Exception\NotFoundException
     * @throws \Codeages\Biz\Framework\Service\Exception\ServiceException
     */
    public function becomeStudent($testId, $userId, $info = array())
    {
        //$course = $this->getCourseService()->getCourse($courseId);
        $test = $this->getTestpaperService()->getTestpaper($testId);

        if (empty($test)) {
            throw $this->createNotFoundException();
        }

//        if (!in_array($course['status'], array('published'))) {
//            throw $this->createServiceException('不能加入未发布教学计划');
//        }

        $user = $this->getUserService()->getUser($userId);

        if (empty($user)) {
            throw $this->createServiceException("用户(#{$userId})不存在，添加权限失败！");
        }

        $member = $this->getTestMemberDao()->getByTestIdAndUserId($testId, $userId);

        if ($member) {
            if ($member['role'] == 'teacher') {
                return $member;
            } else {
                throw $this->createServiceException("用户(#{$userId})已添加过该试题权限！");
            }
        }

        //按照教学计划有效期模式计算学员有效期
//        $deadline = 0;
//        if ($course['expiryMode'] == 'days' && $course['expiryDays'] > 0) {
//            $endTime = strtotime(date('Y-m-d', time())); //从第二天零点开始计算
//            $deadline = $course['expiryDays'] * 24 * 60 * 60 + $endTime;
//        } elseif ($course['expiryMode'] == 'date' || $course['expiryMode'] == 'end_date') {
//            $deadline = $course['expiryEndDate'];
//        }

        //检测订单是否已经生成（添加记录前需要先生成订单）
        if (!empty($info['orderId'])) {
            $order = $this->getOrderService()->getOrder($info['orderId']);

            if (empty($order)) { //没有订单，不能加入
                throw $this->createServiceException("订单(#{$info['orderId']}})不存在，加入教学计划失败！");
            }
        } else {
            $order = null;
        }

        //已学课时
//        $conditions = array(
//            'userId' => $userId,
//            'status' => 'finish',
//            'courseId' => $courseId,
//        );
//        $count = $this->getTaskResult()->countTaskResults($conditions);

        //准备需要插入test_member表的数据
        $fields = array(
            'testId' => $testId,
            'userId' => $userId,
            //'courseSetId' => $course['courseSetId'],
            'orderId' => empty($order) ? 0 : $order['id'],
            //'deadline' => $deadline,
            'levelId' => empty($info['levelId']) ? 0 : $info['levelId'],
            'role' => 'student',
            'remark' => empty($order['note']) ? '' : $order['note'],
            //'learnedNum' => $count,
            'createdTime' => time(),
        );

        if (empty($fields['remark'])) {
            $fields['remark'] = empty($info['note']) ? '' : $info['note'];
        }

        $member = $this->getTestMemberDao()->create($fields); //课程添加学员记录插入course_member表

        //$this->refreshMemberNoteNumber($courseId, $userId); //更新笔记

//        $this->dispatchEvent(
//            'course.join',
//            $course,
//            array('userId' => $member['userId'], 'member' => $member)
//        );

        return $member;
    }


    /**检测当前用户是否已经添加了当前试卷权限（根据testId和userId查test_member表是否有记录）
     * @param $testId 试卷id
     * @param $userId 用户id
     * @return bool
     */
    public function isTestStudent($testId, $userId)
    {
        $member = $this->getTestMemberDao()->getByTestIdAndUserId($testId, $userId);

        if (!$member) {
            return false;
        } else {
            return empty($member) || $member['role'] != 'student' ? false : true;
        }
    }






    /**
     * @return LogService
     */
    protected function getLogService()
    {
        return $this->createService('System:LogService');
    }

    /**
     * @return NotificationService
     */
    private function getNotificationService()
    {
        return $this->createService('User:NotificationService');
    }

    /**
     * @return UserService
     */
    protected function getUserService()
    {
        return $this->createService('User:UserService');
    }

    /**
     * @return TestpaperService
     */
    protected function getTestpaperService()
    {
        return $this->createService('Testpaper:TestpaperService');
    }

    /**
     * @return CourseMemberDao
     */
    protected function getTestMemberDao()
    {
        return $this->createDao('Testpaper:TestMemberDao');
    }

    /**
     * @return OrderService
     */
    protected function getOrderService()
    {
        return $this->createService('Order:OrderService');
    }



}
