<?php

namespace AppBundle\Controller\Test;

use AppBundle\Common\Paginator;
use Biz\Task\Service\TaskService;
use Biz\User\Service\UserService;
use AppBundle\Common\ArrayToolkit;
use Biz\Course\Service\CourseService;
use AppBundle\Controller\BaseController;
use Biz\Course\Service\CourseSetService;
use Topxia\Service\Common\ServiceKernel;
use Biz\Question\Service\QuestionService;
use Biz\Classroom\Service\ClassroomService;
use Biz\Testpaper\Service\TestpaperService;
use Symfony\Component\HttpFoundation\Request;
use Biz\Activity\Service\TestpaperActivityService;
use Codeages\Biz\Framework\Service\Exception\NotFoundException;

class ManageController extends BaseController
{

    //在用。。。
    //创建题库试卷
    public function createAction(Request $request)
    {

//        $courseSet = $this->getCourseSetService()->tryManageCourseSet($id);

        if ($request->getMethod() === 'POST') {
            $fields = $request->request->all();

//            $this->show_print($fields);exit();

            $fields['courseId'] = 0;
            $fields['pattern'] = 'questionType';
            $fields['counts']['single_choice'] = 0;
            $fields['isTest'] = 1;

//            $this->show_print($fields);exit();

            $testpaper = $this->getTestpaperService()->buildTestpaper($fields, 'testpaper');

//            $this->show_print($testpaper);exit();

            if ($testpaper['id']>0){
                return $this->createMessageResponse('info', '页面正在跳转...', '新增试卷成功', 2,
                    $this->generateUrl('test_set_manage_question', array('id' => $testpaper['id']))


                );
//                return $this->redirect(
//                    $this->generateUrl(
//                        'test_set_manage_question',
//                        array('id' => $testpaper['id'])
//                    )
//                );
            }else{
                return $this->createMessageResponse('error', '新建试卷失败！');
            }
        }

//        $types = $this->getQuestionTypes();
//
//        $conditions = array(
//            'types' => array_keys($types),
//            'courseSetId' => $courseSet['id'],
//            'parentId' => 0,
//        );
//
//        $questionNums = $this->getQuestionService()->getQuestionCountGroupByTypes($conditions);
//        $questionNums = ArrayToolkit::index($questionNums, 'type');
//
//        $user = $this->getUser();
//        $ranges = $this->getTaskService()->findUserTeachCoursesTasksByCourseSetId($user['id'], $courseSet['id']);
//
//        $manageCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSet['id']);

        return $this->render('test/create.html.twig', array(
            'courseSet' => '',
            'ranges' => '',
            'types' => '',
            'questionNums' => '',
            'courses' => '',
        ));
    }

    //创建题库试卷，检测字段
    public function buildCheckAction(Request $request)
    {
//        $courseSet = $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $data = $request->request->all();
//        $data['courseSetId'] = $courseSet['id'];
        $type='testpaper';

        $this->show_print($type);
        exit();

        $result = $this->getTestpaperService()->canBuildTestpaper($type, $data);

        return $this->createJsonResponse($result);
    }


    //在用
    /***独立题库试卷修改
     * @param Request $request
     * @param $testpaperId 试卷id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function updateAction(Request $request, $testpaperId)
    {
//        $courseSet = $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $testpaper = $this->getTestpaperService()->getTestpaper($testpaperId);

//        if (empty($testpaper) || $testpaper['courseSetId'] != $courseSetId) {
//            return $this->createMessageResponse('error', 'testpaper not found');
//        }

        if ($request->getMethod() === 'POST') {
            $data = $request->request->all();
            $this->getTestpaperService()->updateTestpaper($testpaper['id'], $data);

            $this->setFlashMessage('success', $this->getServiceKernel()->trans('试卷信息保存成功！'));

            return $this->redirect($this->generateUrl('admin_test'));
        }


        $category=$this->getCategoryService()->getGroupByCode('test');//根据试卷（test）大类分类code获取category_group数据
        $categoryList=$this->getCategoryService()->getCategoryTree($category['id']);//根据大类分组id获得试卷分类数据

        return $this->render('test/update.html.twig', array(
//            'courseSet' => $courseSet,
            'testpaper' => $testpaper,
            'categoryList' =>  $categoryList,
        ));
    }


    /**
     * @return CourseService
     */
    protected function getCourseService()
    {
        return $this->createService('Course:CourseService');
    }

    /**
     * @return CourseSetService
     */
    protected function getCourseSetService()
    {
        return $this->createService('Course:CourseSetService');
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
     * @return QuestionService
     */
    protected function getQuestionService()
    {
        return $this->createService('Question:QuestionService');
    }

    /**
     * @return TaskService
     */
    public function getTaskService()
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
     * @return ClassroomService
     */
    protected function getClassroomService()
    {
        return $this->createService('Classroom:ClassroomService');
    }

    /**
     * @return ClassroomService
     */
    protected function getCategoryService()
    {
        return $this->createService('Taxonomy:CategoryService');
    }

    /**
     * @return ServiceKernel
     */
    protected function getServiceKernel()
    {
        return ServiceKernel::instance();
    }
}
