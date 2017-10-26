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
    //创建独立题库试卷页面  和  创建独立题库试卷功能
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

            $fields['mode'] = "rand"; //题目生成规则，题库写定为默认生成

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

        $types = $this->getQuestionTypes();  //用于
//
        $conditions = array(
            'types' => array_keys($types),
            'isTest' => 1,
            'parentId' => 0,
        );

        $questionNums = $this->getQuestionService()->getQuestionCountGroupByTypes($conditions);
        $questionNums = ArrayToolkit::index($questionNums, 'type');
//
//        $user = $this->getUser();
//        $ranges = $this->getTaskService()->findUserTeachCoursesTasksByCourseSetId($user['id'], $courseSet['id']);
//
//        $manageCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSet['id']);

        return $this->render('test/create.html.twig', array(
            'courseSet' => '',
            'ranges' => '',
            'types' => $types,
            'questionNums' =>$questionNums,
            'courses' => '',
        ));
    }

    protected function getQuestionTypes()
    {
        $typesConfig = $this->get('extension.manager')->getQuestionTypes();

        $types = array();
        foreach ($typesConfig as $type => $typeConfig) {
            $types[$type] = array(
                'name' => $typeConfig['name'],
                'hasMissScore' => $typeConfig['hasMissScore'],
            );
        }

        return $types;
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


    //在用。。。
    /***独立题库试卷“管理题目”页面。POST是新增、修改、删除题目到试卷功能
     * @param Request $request
     * @param $testpaperId 试卷id
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function questionsAction(Request $request, $testpaperId)
    {
//        $courseSet = $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $testpaper = $this->getTestpaperService()->getTestpaper($testpaperId);


        //限制已发布或已关闭的试卷不能再修改题目
//        if ($testpaper['status'] != 'draft') {
//            return $this->createMessageResponse('error', '已发布或已关闭的试卷不能再修改题目');
//        }

        if ($request->getMethod() === 'POST') { //新增、修改、删除题目到试卷功能
            $fields = $request->request->all();

            if (empty($fields['questions'])) {
                return $this->createMessageResponse('error', '试卷题目不能为空！');
            }

            if (!empty($fields['passedScore'])) {
                $fields['passedCondition'] = array($fields['passedScore']);
            }

            $this->getTestpaperService()->updateTestpaperItems($testpaper['id'], $fields);

            $this->setFlashMessage('success', $this->getServiceKernel()->trans('试卷题目保存成功！'));

            return $this->createJsonResponse(array(
                'goto' => $this->generateUrl('admin_test'),
            ));
        }

        $items = $this->getTestpaperService()->findItemsByTestId($testpaper['id']); //试卷题目关联信息
        $questions = $this->getTestpaperService()->showTestpaperItems($testpaper['id']); //题型题目数组

        $hasEssay = $this->getQuestionService()->hasEssay(ArrayToolkit::column($items, 'questionId'));

        $passedScoreDefault = empty($testpaper['passedCondition']) ? ceil($testpaper['score'] * 0.6) : $testpaper['passedCondition'][0];

//        $user = $this->getUser();
//        $manageCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSet['id']);

//        $courseTasks = $this->getQuestionRanges($testpaper['id']);

        return $this->render('test/manage/question.html.twig', array(
//            'courseSet' => $courseSet,
            'testpaper' => $testpaper,
            'questions' => $questions,
            'hasEssay' => $hasEssay,
            'passedScoreDefault' => $passedScoreDefault,
//            'courseTasks' => $courseTasks,
//            'courses' => $manageCourses,
        ));
    }


    //在用。。
    /***独立题库试卷  预览试卷
     * @param Request $request
     * @param $testpaperId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function previewAction(Request $request, $testpaperId)
    {
//        $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $testpaper = $this->getTestpaperService()->getTestpaper($testpaperId);
//        if (!$testpaper || $testpaper['courseSetId'] != $courseSetId) {
//            return $this->createMessageResponse('error', 'testpaper not found');
//        }

        if ($testpaper['status'] === 'closed') {
            return $this->createMessageResponse('warning', 'testpaper already closed  该试卷已关闭');
        }

        $questions = $this->getTestpaperService()->showTestpaperItems($testpaper['id']);
//        print_r($questions);

        $total = $this->getTestpaperService()->countQuestionTypes($testpaper, $questions);

        $attachments = $this->getTestpaperService()->findAttachments($testpaper['id']);

        return $this->render('testpaper/manage/preview.html.twig', array(
            'questions' => $questions,
            'limitedTime' => $testpaper['limitedTime'],
            'paper' => $testpaper,
            'paperResult' => array(),
            'total' => $total,
            'attachments' => $attachments,
            'questionTypes' => $this->getCheckedQuestionType($testpaper),
        ));
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
