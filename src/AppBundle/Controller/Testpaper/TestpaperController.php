<?php

namespace AppBundle\Controller\Testpaper;

use Biz\Task\Service\TaskService;
use Biz\User\Service\UserService;
use AppBundle\Common\ArrayToolkit;
use Biz\Course\Service\CourseService;
use Biz\System\Service\SettingService;
use AppBundle\Controller\BaseController;
use Topxia\Service\Common\ServiceKernel;
use Biz\Activity\Service\ActivityService;
use Biz\Question\Service\QuestionService;
use Biz\Testpaper\Service\TestpaperService;
use Symfony\Component\HttpFoundation\Request;
use Biz\Activity\Service\TestpaperActivityService;
use AppBundle\Common\Exception\AccessDeniedException;

class TestpaperController extends BaseController
{
    //独立题库开始考试按钮，如果是已做完试卷显示结果页面，如果该试卷未做或未交卷则显示做题页面
    public function doTestBankAction(Request $request, $testId)
    {
        $user = $this->getUser();

        //根据试卷id和用户id检测用户是否拥有该题库的权限
        $testMember = $this->getTestMemberService()->getByTestIdAndUserId($testId, $user['id']);
        if (empty($testMember)){
            return $this->createMessageResponse('info', $this->getServiceKernel()->trans('未拥有该题库权限！'));
        }

        $testpaper = $this->getTestpaperService()->getTestpaperByIdAndType($testId, 'testpaper');

        if (empty($testpaper)) {
            throw $this->createResourceNotFoundException('testpaper', $testId);
        }

        if ($testpaper['status'] === 'draft') {
            return $this->createMessageResponse('info', $this->getServiceKernel()->trans('该试卷未发布，如有疑问请联系老师！'));
        }

        if ($testpaper['status'] === 'closed') {
            return $this->createMessageResponse('info', $this->getServiceKernel()->trans('该试卷已关闭，如有疑问请联系老师！'));
        }

//        $result = $this->testpaperActivityCheck($lessonId, $testpaper);
//        if (!$result['result']) {
//            return $this->createMessageResponse('info', $result['message']);
//        }

        //*******

        $activityTestpaper = $this->getTestpaperActivityService()->findActivitiesByMediaId($testpaper['id']); //activity_testpaper 数据
        rsort($activityTestpaper);//数组倒序，由此拿到表中最新记录

        $activity = $this->getActivityService()->findActivitiesByMediaId($activityTestpaper[0]['id']); //activity 数据
        rsort($activity); //数组倒序，由此拿到表中最新记录

        $fields = $this->getTestpaperFields($activity[0]['id']);
        $fields['test']=1; //标记为题库，传到下面的方法，来筛选不同的


        //往考试记录表testpaper_result_v8表插入记录(有记录返回记录，没有记录新增记录)
        $testpaperResult = $this->getTestpaperService()->startTestpaper($testpaper['id'], $fields);
        //以此来判断当前用户是否做过这个题目，如果做过则显示考试结果页面，未做过则进入考试页面

        //如果试卷是还在做题状态，则显示做题页面
        if ('doing' === $testpaperResult['status']) {
            return $this->redirect($this->generateUrl('testpaper_show', array('resultId' => $testpaperResult['id'])));
        }

        //如果其他状态，如已经交卷，finished 则显示结果页面
        return $this->redirect(
            $this->generateUrl('testpaper_result_show', array('resultId' => $testpaperResult['id']))
        );

    }



    /***开始考试（未做过的试卷）
     * @param Request $request
     * @param $testId
     * @param $lessonId activity表id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function doTestpaperAction(Request $request, $testId, $lessonId)
    {
        $user = $this->getUser();

        $testpaper = $this->getTestpaperService()->getTestpaperByIdAndType($testId, 'testpaper');

        if (empty($testpaper)) {
            throw $this->createResourceNotFoundException('testpaper', $testId);
        }

        if ($testpaper['status'] === 'draft') {
            return $this->createMessageResponse('info', $this->getServiceKernel()->trans('该试卷未发布，如有疑问请联系老师！'));
        }

        if ($testpaper['status'] === 'closed') {
            return $this->createMessageResponse('info', $this->getServiceKernel()->trans('该试卷已关闭，如有疑问请联系老师！'));
        }


        //查找activity表，看是否是独立题库试卷
        $activity = $this->getActivityService()->getActivity($lessonId);
        if ($activity['fromCourseId'] != 0){
            //一个检测方法，课程试卷可能可用。  在独立题库走到这里时过不去，所以在这里做个判断，如果课程id不为零（即课程试卷）再去做检测。课程id为零（即独立题库试卷）不做检测
            $result = $this->testpaperActivityCheck($lessonId, $testpaper);
            if (!$result['result']) {
                return $this->createMessageResponse('info', $result['message']);
            }
        }



        $fields = $this->getTestpaperFields($lessonId);

        $testpaperResult = $this->getTestpaperService()->startTestpaper($testpaper['id'], $fields); //往考试记录表testpapet_result_v8表插入记录(有记录返回记录，没有记录新增记录)

        if ('doing' === $testpaperResult['status']) {
            return $this->redirect($this->generateUrl('testpaper_show', array('resultId' => $testpaperResult['id'])));
        }

        return $this->redirect(
            $this->generateUrl('testpaper_result_show', array('resultId' => $testpaperResult['id']))
        );
    }

    /***试卷  考试页面，继续做题或显示考试结果提示页面，做题来到的页面
     * @param Request $request
     * @param $resultId 做题记录表id  testpaper_result_v8
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function doTestAction(Request $request, $resultId)
    {
        $testpaperResult = $this->getTestpaperService()->getTestpaperResult($resultId);

        //判断试卷是否是finished评卷结束，reviewing评卷中。是的话显示试卷结果提示页面
        if (in_array($testpaperResult['status'], array('reviewing', 'finished'))) {
            return $this->redirect(
                $this->generateUrl('testpaper_result_show', array('resultId' => $testpaperResult['id']))
            );
        }

        $canLookTestpaper = $this->getTestpaperService()->canLookTestpaper($testpaperResult['id']);
        if (!$canLookTestpaper) {
            return $this->createMessageResponse('info', 'access denied');
        }

        $testpaper = $this->getTestpaperService()->getTestpaperByIdAndType($testpaperResult['testId'], $testpaperResult['type']); //根据试卷id和试卷类型找到试卷

        $questions = $this->getTestpaperService()->showTestpaperItems($testpaper['id'], $testpaperResult['id']); //根据试卷id和试卷做题记录id，找到题目

        $total = $this->getTestpaperService()->countQuestionTypes($testpaper, $questions); //根据试卷和题目，计算题数和总分

        $favorites = $this->getQuestionService()->findUserFavoriteQuestions($testpaperResult['userId']); //最爱  标记？收藏？

        $activity = $this->getActivityService()->getActivity($testpaperResult['lessonId']); //根据testpaper_result_v8表的lessonId获取acticity表数据 主键查询
        $testpaperActivity = $this->getTestpaperActivityService()->getActivity($activity['mediaId']);  //根据activity表的mediaId获取activity_testpaper表数据  主键查询

        if ($testpaperActivity['testMode'] === 'realTime') {
            $testpaperResult['usedTime'] = time() - $activity['startTime'];
        }

        $attachments = $this->getTestpaperService()->findAttachments($testpaper['id']);
        $limitedTime = $testpaperActivity['limitedTime'] * 60 - $testpaperResult['usedTime'];
        $limitedTime = $limitedTime > 0 ? $limitedTime : 1;
//var_dump($activity);
        return $this->render('testpaper/start-do-show.html.twig', array(
            'questions' => $questions,
            'limitedTime' => $limitedTime,
            'paper' => $testpaper,
            'paperResult' => $testpaperResult,
            'activity' => $activity,
            'testpaperActivity' => $testpaperActivity,
            'favorites' => ArrayToolkit::column($favorites, 'questionId'),
            'total' => $total,
            'attachments' => $attachments,
            'questionTypes' => $this->getCheckedQuestionType($testpaper),
            'showTypeBar' => 1,
            'showHeader' => 0,
            'isDone' => true,
        ));
    }

    //查看考试结果页面
    public function showResultAction(Request $request, $resultId)
    {
        $testpaperResult = $this->getTestpaperService()->getTestpaperResult($resultId);

        $testpaper = $this->getTestpaperService()->getTestpaperByIdAndType($testpaperResult['testId'], $testpaperResult['type']);

        if (!$testpaper) {
            return $this->createMessageResponse('info', '该试卷已删除，不能查看结果');
        }

        if ($testpaperResult['status'] === 'doing') {
            return $this->redirect($this->generateUrl('testpaper_show', array('resultId' => $testpaperResult['id'])));
        }

        $canLookTestpaper = $this->getTestpaperService()->canLookTestpaper($testpaperResult['id']);
        if (!$canLookTestpaper) {
            return $this->createMessageResponse('info', 'access denied');
        }

        $builder = $this->getTestpaperService()->getTestpaperBuilder($testpaper['type']);
        $questions = $builder->showTestItems($testpaper['id'], $testpaperResult['id']);
//        echo $testpaperResult['id'];exit();
//        $this->show_print($questions);exit();

        //试题数据
        $accuracy = $this->getTestpaperService()->makeAccuracy($testpaperResult['id']);

        //题目数量和分数
        $total = $this->makeTestpaperTotal($testpaper, $questions);

        $favorites = $this->getQuestionService()->findUserFavoriteQuestions($testpaperResult['userId']);

        $student = $this->getUserService()->getUser($testpaperResult['userId']);

        $attachments = $this->getTestpaperService()->findAttachments($testpaper['id']);

        $activity = $this->getActivityService()->getActivity($testpaperResult['lessonId']);
        $testpaperActivity = $this->getTestpaperActivityService()->getActivity($activity['mediaId']);
        $task = $this->getTaskService()->getTaskByCourseIdAndActivityId($activity['fromCourseId'], $activity['id']);
//$this->show_print($testpaperResult);

        return $this->render('testpaper/result.html.twig', array(
            'questions' => $questions,
            'accuracy' => $accuracy,
            'paper' => $testpaper,
            'paperResult' => $testpaperResult,
            'favorites' => ArrayToolkit::column($favorites, 'questionId'),
            'total' => $total,
            'student' => $student,
            'source' => $request->query->get('source', 'course'),
            'attachments' => $attachments,
            'questionTypes' => $this->getCheckedQuestionType($testpaper),
            'task' => $task,
            'action' => $request->query->get('action', ''),
            'target' => $testpaperActivity,
        ));
    }

    public function realTimeCheckAction(Request $request)
    {
        $testId = $request->query->get('value');

        $testPaper = $this->getTestpaperService()->getTestpaper($testId);

        if (empty($testPaper)) {
            $response = array('success' => false, 'message' => $this->getServiceKernel()->trans('试卷不存在'));

            return $this->createJsonResponse($response);
        }

        if ($testPaper['limitedTime'] == 0) {
            $response = array(
                'success' => false,
                'message' => $this->getServiceKernel()->trans('该试卷考试时间未限制,请选择其他限制时长的试卷'),
            );
        } else {
            $response = array('success' => true, 'message' => '');
        }

        return $this->createJsonResponse($response);
    }

    protected function getCheckedQuestionType($testpaper)
    {
        $questionTypes = array();
        if (!empty($testpaper['metas']['counts'])) {
            foreach ($testpaper['metas']['counts'] as $type => $count) {
                if ($count > 0) {
                    $questionTypes[] = $type;
                }
            }
        }

        return $questionTypes;
    }

    public function testSuspendAction(Request $request, $resultId)
    {
        $testpaperResult = $this->getTestpaperService()->getTestpaperResult($resultId);

        if (!$testpaperResult) {
            throw $this->createResourceNotFoundException('testpaperResult', $resultId);
        }

        $user = $this->getUser();
        if ($testpaperResult['userId'] != $user['id']) {
            throw new AccessDeniedException($this->getServiceKernel()->trans('不可以访问其他学生的试卷哦~'));
        }

        if ($request->getMethod() === 'POST') {
            $data = $request->request->all();
            $answers = !empty($data['data']) ? $data['data'] : array();
            $attachments = empty($data['attachments']) ? array() : $data['attachments'];
            $usedTime = $data['usedTime'];

            $this->getTestpaperService()->submitAnswers($testpaperResult['id'], $answers, $attachments);

            $this->getTestpaperService()->updateTestpaperResult($testpaperResult['id'], array('usedTime' => ($testpaperResult['usedTime'] + $usedTime)));

            return $this->createJsonResponse(true);
        }
    }

    public function submitTestAction(Request $request, $resultId)
    {
        if ($request->getMethod() === 'POST') {
            $data = $request->request->all();
            $answers = !empty($data['data']) ? $data['data'] : array();
            $usedTime = $data['usedTime'];
            $attachments = empty($formData['attachments']) ? array() : $formData['attachments'];

            $this->getTestpaperService()->submitAnswers($resultId, $answers, $attachments);

            $this->getTestpaperService()->updateTestpaperResult($resultId, $usedTime);

            return $this->createJsonResponse(true);
        }
    }

    //交卷 “马上交卷”
    public function finishTestAction(Request $request, $resultId)
    {
        $testpaperResult = $this->getTestpaperService()->getTestpaperResult($resultId);

        if (!empty($testpaperResult) && !in_array($testpaperResult['status'], array('doing', 'paused'))) {
            return $this->createJsonResponse(array('result' => false, 'message' => '试卷已提交，不能再修改答案！'));
        }

        if ($request->getMethod() === 'POST') {
            $activity = $this->getActivityService()->getActivity($testpaperResult['lessonId']);
            $testpaperActivity = $this->getTestpaperActivityService()->getActivity($activity['mediaId']);

            if ($activity['startTime'] && $activity['startTime'] > time()) {
                return $this->createJsonResponse(array('result' => false, 'message' => '考试未开始，不能提交！'));
            }

            if ($activity['endTime'] && time() > $activity['endTime']) {
                return $this->createJsonResponse(array('result' => false, 'message' => '考试时间已过，不能再提交！'));
            }

            $formData = $request->request->all();

            $paperResult = $this->getTestpaperService()->finishTest($testpaperResult['id'], $formData); //评卷

            if ($testpaperActivity['finishCondition']['type'] === 'submit') {
                $response = array('result' => true, 'message' => '');
            } elseif ($testpaperActivity['finishCondition']['type'] === 'score'
                && $paperResult['status'] === 'finished'
                && $paperResult['score'] > $testpaperActivity['finishCondition']['finishScore']) {
                $response = array('result' => true, 'message' => '');
            } else {
                $response = array('result' => false, 'message' => '');
            }

            return $this->createJsonResponse($response);
        }
    }

    protected function makeTestpaperTotal($testpaper, $items)
    {
        $total = array();
        if (empty($testpaper['metas']['counts'])) {
            return $total;
        }
        foreach ($testpaper['metas']['counts'] as $type => $count) {
            if (empty($items[$type])) {
                $total[$type]['score'] = 0;
                $total[$type]['number'] = 0;
                $total[$type]['missScore'] = 0;
            } else {
                $total[$type]['score'] = array_sum(ArrayToolkit::column($items[$type], 'score'));
                $total[$type]['number'] = count($items[$type]);

                if (array_key_exists('missScore', $testpaper['metas'])
                    && array_key_exists($type, $testpaper['metas']['missScore'])) {
                    $total[$type]['missScore'] = $testpaper['metas']['missScore'][$type];
                } else {
                    $total[$type]['missScore'] = 0;
                }
            }
        }

        return $total;
    }

    protected function testpaperActivityCheck($activityId, $testpaper)
    {
        $user = $this->getUser();

        $activity = $this->getActivityService()->getActivity($activityId);

        $canTakeCourse = $this->getCourseService()->canTakeCourse($activity['fromCourseId']);
        if (!$canTakeCourse) {
            return array('result' => false, 'message' => $this->getServiceKernel()->trans('access denied!'));
        }

        $result = array('result' => true, 'message' => '');
        if (!$activity) {
            return $result;
        }

        if ($activity['startTime'] && $activity['startTime'] > time()) {
            return array(
                'result' => false,
                'message' => $this->getServiceKernel()->trans('考试未开始，请在'.date('Y-m-d H:i:s', $activity['startTime']).'之后再来！'),
            );
        }

        $testpaperActivity = $this->getTestpaperActivityService()->getActivity($activity['mediaId']);
        $testpaperResult = $this->getTestpaperService()->getUserLatelyResultByTestId(
            $user['id'],
            $testpaper['id'],
            $activity['fromCourseSetId'],
            $activityId,
            $testpaper['type']
        );

        if ($testpaperActivity['doTimes'] && $testpaperResult && $testpaperResult['status'] === 'finished') {
            return array('result' => false, 'message' => $this->getServiceKernel()->trans('该试卷只能考一次，不能再考！'));
        }

        if ($testpaperActivity['redoInterval']) {
            $nextDoTime = $testpaperResult['checkedTime'] + $testpaperActivity['redoInterval'] * 3600;
            if ($nextDoTime > time()) {
                return array(
                    'result' => false,
                    'message' => $this->getServiceKernel()->trans('教师设置了重考间隔，请在'.date('Y-m-d H:i:s', $nextDoTime).'之后再考！'),
                );
            }
        }

        return $result;
    }

    protected function getTestpaperFields($activityId)
    {
        //activity表
        $activity = $this->getActivityService()->getActivity($activityId);
        $testpaperActivity = $this->getTestpaperActivityService()->getActivity($activity['mediaId']);

        if (!$activity || !$testpaperActivity) {
            return array();
        }

        return array(
            'lessonId' => $activityId,
            'courseId' => $activity['fromCourseId'],
            'limitedTime' => $testpaperActivity['limitedTime'],
        );
    }

    /**
     * @return SettingService
     */
    protected function getSettingService()
    {
        return $this->createService('System:SettingService');
    }

    /**
     * @return TestpaperService
     */
    protected function getTestpaperService()
    {
        return $this->createService('Testpaper:TestpaperService');
    }

    protected function getTestMemberService(){
        return $this->createService('Testpaper:TestMemberService');
    }

    protected function getTestpaperResultService(){
        return $this->createService('Testpaper:TestpaperRedultService');
    }

    /**
     * @return QuestionService
     */
    protected function getQuestionService()
    {
        return $this->createService('Question:QuestionService');
    }

    /**
     * @return ActivityService
     */
    protected function getActivityService()
    {
        return $this->createService('Activity:ActivityService');
    }

    /**
     * @return TaskService
     */
    protected function getTaskService()
    {
        return $this->createService('Task:TaskService');
    }

    /**
     * @return TestpaperActivityService
     */
    protected function getTestpaperActivityService()
    {
        return $this->createService('Activity:TestpaperActivityService');
    }

    /**
     * @return CourseService
     */
    protected function getCourseService()
    {
        return $this->createService('Course:CourseService');
    }

    /**
     * @return UserService
     */
    protected function getUserService()
    {
        return $this->createService('User:UserService');
    }

    /**
     * @return ServiceKernel
     */
    protected function getServiceKernel()
    {
        return ServiceKernel::instance();
    }
}
