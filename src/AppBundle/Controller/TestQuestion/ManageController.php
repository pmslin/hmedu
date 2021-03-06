<?php

namespace AppBundle\Controller\TestQuestion;

use AppBundle\Common\Paginator;
use Biz\Task\Service\TaskService;
use Biz\User\Service\UserService;
use AppBundle\Common\ArrayToolkit;
use Biz\Course\Service\CourseService;
use AppBundle\Controller\BaseController;
use Biz\Course\Service\CourseSetService;
use Topxia\Service\Common\ServiceKernel;
use Biz\Question\Service\QuestionService;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Common\Exception\ResourceNotFoundException;

class ManageController extends BaseController
{
    //....在用
    /** 独立题库的题目列表页面
     * @param Request $request
     * @param $id 独立题库试卷id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $id)
    {
        //检测权限，如果不是老师或者管理员权限，不允许访问
        $currentUser = $this->getUser();
        if (!$currentUser->isTeacher() && !$currentUser->isAdmin()) {
            throw $this->createAccessDeniedException('没有这个页面');
        }


//        $courseSet = $this->getCourseSetService()->tryManageCourseSet($id);

        $testPaerInfo=$this->getTestpaperService()->getTestpaper($id);  //试卷信息

        //课程是否上锁
//        if ($courseSet['locked']) {
//            return $this->redirectToRoute('course_set_manage_sync', array(
//                'id' => $id,
//                'sideNav' => 'question',
//            ));
//        }

        $conditions = $request->query->all();

//        $conditions['courseSetId'] = $courseSet['id'];
        $conditions['testCategoryId'] = $id;  //试卷所属分类id
        $conditions['parentId'] = empty($conditions['parentId']) ? 0 : $conditions['parentId'];  //有传材料题父级id的，是用于材料题的题目管理

        $parentQuestion = array();
        $orderBy = array('createdTime' => 'DESC');
        if ($conditions['parentId'] > 0) {
            $parentQuestion = $this->getQuestionService()->get($conditions['parentId']);
            $orderBy = array('createdTime' => 'ASC');
        }

        //传couserID和父级id获取统计数据
        $paginator = new Paginator(
            $this->get('request'),
            $this->getQuestionService()->searchCount($conditions),
            10
        );


        //试卷数据
        $questions = $this->getQuestionService()->search(
            $conditions,
            $orderBy,
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );


        //题目更新人信息？
        $users = $this->getUserService()->findUsersByIds(ArrayToolkit::column($questions, 'updatedUserId'));


        //课程任务？
//        $taskIds = ArrayToolkit::column($questions, 'lessonId');
//        $courseTasks = $this->getTaskService()->findTasksByIds($taskIds);
//        $courseTasks = ArrayToolkit::index($courseTasks, 'id');


        //根据课程ids，查找所有课程
//        $courseIds = ArrayToolkit::column($questions, 'courseId');
//        $courses = $this->getCourseService()->findCoursesByIds($courseIds);


        $user = $this->getUser();
        //搜索，传入用户id和课程id，用于搜索
        //$searchCourses根据课程id到的课程信息，找course_v8表
//        $searchCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSet['id']);

//        var_dump($id);
//        exit();

        $showTasks = $this->getTaskService()->findTasksByCourseId($request->query->get('courseId', 0));
        $showTasks = ArrayToolkit::index($showTasks, 'id');

        return $this->render('test-question-manage/index.html.twig', array(
            'testPaerInfo'    => $testPaerInfo,
//            'courseSet' => $courseSet,
            'questions' => $questions,
            'users' => $users,
            'paginator' => $paginator,
            'parentQuestion' => $parentQuestion,
            'conditions' => $conditions,
//            'courseTasks' => $courseTasks,
//            'courses' => $courses,
//            'searchCourses' => $searchCourses,
            'showTasks' => $showTasks,
        ));
    }

    //在用
    /**创建独立题库题目
     * @param Request $request
     * @param $id 试卷id
     * @param $type 要创建的题型
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request, $id, $type)
    {
        //检测权限，如果不是老师或者管理员权限，不允许访问
        $currentUser = $this->getUser();
        if (!$currentUser->isTeacher() && !$currentUser->isAdmin()) {
            throw $this->createAccessDeniedException('没有这个页面');
        }


        $TestpaperInfo = $this->getTestpaperService()->getTestpaper($id);

        if ($request->getMethod() === 'POST') { //提交题目

            $data = $request->request->all();

            $data['isTest']=1;
            $data['testCategoryId']=$id;

//            var_dump($data);
//            exit();

//            $data['courseSetId'] = $courseSet['id'];

            $question = $this->getQuestionService()->create($data); //创建题目

            if ($data['submission'] === 'continue') {   //添加题目（出材料题外）
                $urlParams = ArrayToolkit::parts($question, array('target', 'difficulty', 'parentId'));
                $urlParams['type'] = $type;
                $urlParams['id'] = $TestpaperInfo['id'];
                $urlParams['goto'] = $request->query->get('goto', null);
                $this->setFlashMessage('success', $this->getServiceKernel()->trans('题目添加成功，请继续添加。'));

                return $this->redirect($this->generateUrl('test_set_manage_question_create', $urlParams));
            }
            if ($data['submission'] === 'continue_sub') {   //添加材料题
                $this->setFlashMessage('success', $this->getServiceKernel()->trans('题目添加成功，请继续添加子题。'));

                return $this->redirect(
                    $request->query->get(
                        'goto',
                        $this->generateUrl(
                            'test_set_manage_question',
                            array('id' => $TestpaperInfo['id'], 'parentId' => $question['id'])
                        )
                    )
                );
            }

            $this->setFlashMessage('success', $this->getServiceKernel()->trans('题目添加成功。'));

//            exit();
            return $this->redirect(
                $request->query->get(
                    'goto',
                    $this->generateUrl(
                        'test_set_manage_question',
                        array('id' => $TestpaperInfo['id'], 'parentId' => $question['parentId'])
                    )
                )
            );
        }

        $questionConfig = $this->getQuestionConfig();
        $createController = $questionConfig[$type]['testActions']['create'];  //testActions是独立题库的控制器地址，根据传过来的type值来获取对应的题型控制器
        //例如：创建，修改，显示控制器  控制器在同目录下 （控制器包含新增修改要跳转的页面等）
//        'create' => 'AppBundle:TestQuestion/SingleChoiceQuestion:create',
//        'edit' => 'AppBundle:TestQuestion/SingleChoiceQuestion:edit',
//        'show' => 'AppBundle:TestQuestion/SingleChoiceQuestion:show',

//        print_r($createController);
//        exit();

        return $this->forward($createController, array(
            'request' => $request,
            'testPaperId' => $TestpaperInfo['id'],
            'type' => $type,

        ));
    }

    //在用...
    /***编辑独立题库题目，页面和编辑功能
     * @param Request $request
     * @param $testId 试卷id
     * @param $questionId  题目id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function updateAction(Request $request, $testId, $questionId)
    {
        //检测权限，如果不是老师或者管理员权限，不允许访问
        $currentUser = $this->getUser();
        if (!$currentUser->isTeacher() && !$currentUser->isAdmin()) {
            throw $this->createAccessDeniedException('没有这个页面');
        }


//        $courseSet = $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $testPaper = $this->getTestpaperService()->getTestpaper($testId);

        $question = $this->getQuestionService()->get($questionId);
        if (!$question || $question['testCategoryId'] != $testId) {
            throw new ResourceNotFoundException('question', $questionId);
        }

        if ($request->getMethod() === 'POST') {
            $fields = $request->request->all();
            $this->getQuestionService()->update($question['id'], $fields);

            $this->setFlashMessage('success', $this->getServiceKernel()->trans('题目修改成功！'));

            return $this->redirect(
                $request->query->get(
                    'goto',
                    $this->generateUrl(
                        'test_set_manage_question',
                        array('id' => $testPaper['id'], 'parentId' => $question['parentId'])
                    )
                )
            );
        }

        $questionConfig = $this->getQuestionConfig();
        $createController = $questionConfig[$question['type']]['testActions']['edit'];//testActions是独立题库的控制器地址，根据传过来的type值来获取对应的题型控制器
        //例如：创建，修改，显示控制器  控制器在同目录下 （控制器包含新增修改要跳转的页面等）
//        'create' => 'AppBundle:TestQuestion/SingleChoiceQuestion:create',
//        'edit' => 'AppBundle:TestQuestion/SingleChoiceQuestion:edit',
//        'show' => 'AppBundle:TestQuestion/SingleChoiceQuestion:show',

        return $this->forward($createController, array(
            'request' => $request,
            'testId' => $testId,
//            'courseSetId' => $courseSet['id'],
            'questionId' => $question['id'],
        ));
    }


    //在用。。。。
    /***删除独立题库题目
     * @param Request $request
     * @param $testId 试卷id
     * @param $questionId 题目id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteAction(Request $request, $testId, $questionId)
    {
        //检测权限，如果不是老师或者管理员权限，不允许访问
        $currentUser = $this->getUser();
        if (!$currentUser->isTeacher() && !$currentUser->isAdmin()) {
            throw $this->createAccessDeniedException('没有这个页面');
        }


//        $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $question = $this->getQuestionService()->get($questionId);
        if (!$question || $question['testCategoryId'] != $testId) {
            throw new ResourceNotFoundException('question', $questionId);
        }
        $this->getQuestionService()->delete($questionId);

        return $this->createJsonResponse(true);
    }



    public function deletesAction(Request $request, $courseSetId)
    {
        $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $ids = $request->request->get('ids', array());
        $questions = $this->getQuestionService()->findQuestionsByIds($ids);
        if (empty($questions)) {
            throw new ResourceNotFoundException('questions', 0);
        }
        foreach ($questions as $question) {
            if ($question['courseSetId'] != $courseSetId) {
                throw new ResourceNotFoundException('question', $question['id']);
            }
        }
        $this->getQuestionService()->batchDeletes($ids);

        return $this->createJsonResponse(true);
    }

    public function previewAction(Request $request, $courseSetId, $questionId)
    {
        $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $isNewWindow = $request->query->get('isNew');

        $question = $this->getQuestionService()->get($questionId);

        if (!$question || $question['courseSetId'] != $courseSetId) {
            throw new ResourceNotFoundException('question', $questionId);
        }

        if (!empty($question['matas']['mediaId'])) {
            $questionTypeObj = $this->getQuestionService()->getQuestionConfig($question['type']);
            $questionExtends = $questionTypeObj->get($question['matas']['mediaId']);
            $question = array_merge_recursive($question, $questionExtends);
        }

        if ($question['subCount'] > 0) {
            $questionSubs = $this->getQuestionService()->findQuestionsByParentId($question['id']);

            $question['subs'] = $questionSubs;
        }

        $template = 'question-manage/preview-modal.html.twig';
        if ($isNewWindow) {
            $template = 'question-manage/preview.html.twig';
        }

        return $this->render($template, array(
            'question' => $question,
            'showAnswer' => 1,
            'showAnalysis' => 1,
        ));
    }

    public function checkAction(Request $request, $id)
    {
        $courseSet = $this->getCourseSetService()->tryManageCourseSet($id);
        $conditions = $request->request->all();
        $conditions['courseSetId'] = $courseSet['id'];

        if (!empty($conditions['types'])) {
            $conditions['types'] = explode(',', $conditions['types']);
        }

        $count = $this->getQuestionService()->searchCount($conditions);

        $result = false;
        if (!empty($conditions['itemCount']) && $count >= $conditions['itemCount']) {
            $result = true;
        }

        return $this->createJsonResponse($result);
    }

    //在用。。。 未完成  可用
    /***独立题库试卷“题目管理”--“新增试题”
     * @param Request $request
     * @param $testpaperId 试卷id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function questionPickerAction(Request $request, $testpaperId)
    {
        //检测权限，如果不是老师或者管理员权限，不允许访问
        $currentUser = $this->getUser();
        if (!$currentUser->isTeacher() && !$currentUser->isAdmin()) {
            throw $this->createAccessDeniedException('没有这个页面');
        }


//        $courseSet = $this->getCourseSetService()->tryManageCourseSet($id);

        $testPaper = $this->getTestpaperService()->getTestpaper($testpaperId);

        $conditions = $request->query->all();

        $conditions['parentId'] = 0;
        $conditions['isTest'] = 1;
        $conditions['testCategoryId'] = $testpaperId;

//        unset($conditions['type']);

        $paginator = new Paginator(
            $request,
            $this->getQuestionService()->searchCount($conditions),
            999
        );



        $questions = $this->getQuestionService()->search(
            $conditions,
            array('createdTime' => 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

//        var_dump($conditions);
//        exit();

//        $user = $this->getUser();
//        $manageCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSet['id']);

        return $this->render('test-question-manage/question-picker.html.twig', array(
//            'courseSet' => $courseSet,
            'questions' => $questions,
            'replace' => empty($conditions['replace']) ? '' : $conditions['replace'],
            'paginator' => $paginator,
            'courseTasks' => $this->getQuestionRanges($request->query->get('courseId', 0)),
            'conditions' => $conditions,
            'targetType' => $request->query->get('targetType', 'testpaper'),
//            'courses' => $manageCourses,
            'testPaper' => $testPaper,
        ));
    }

    //在用。。未完成。 选中题目后题目无法显示在列表
    /**
     * 独立题库试卷新增题目时，选中题目（只是选中并未保存）
     * @param Request $request
     * @param $testpaperId 试卷id
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function pickedQuestionAction(Request $request, $testpaperId)
    {
//        $courseSet = $this->getCourseSetService()->tryManageCourseSet($courseSetId);
//echo 123;exit();
        $testPaper = $this->getTestpaperService()->getTestpaper($testpaperId);

        $questionIds = $request->request->get('questionIds', array(0));

        if (!$questionIds) {
            return $this->createJsonResponse(array('result' => 'error', 'message' => '请先选择题目'));
        }

        $questions = $this->getQuestionService()->findQuestionsByIds($questionIds);
//        var_dump($questions);exit();

        foreach ($questions as &$question) {
            if ($question['testCategoryId'] != $testpaperId) {
                throw new ResourceNotFoundException('question', $question['id']);
            }
            if ($question['subCount'] > 0) {
                $question['subs'] = $this->getQuestionService()->findQuestionsByParentId($question['id']);
            }
        }

//        $user = $this->getUser();
//        $manageCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSet['id']);
//        $taskIds = ArrayToolkit::column($questions, 'lessonId');
//        $courseTasks = $this->getTaskService()->findTasksByIds($taskIds);
//        $courseTasks = ArrayToolkit::index($courseTasks, 'id');


        return $this->render('test-question-manage/question-picked.html.twig', array(
//            'courseSet' => $courseSet,
            'questions' => $questions,
            'targetType' => $request->query->get('targetType', 'testpaper'),
//            'courseTasks' => $courseTasks,
//            'courses' => $manageCourses,
            'testPaper' => $testPaper,
        ));
    }

    public function showTasksAction(Request $request, $courseSetId)
    {
        $courseId = $request->request->get('courseId', 0);
        if (empty($courseId)) {
            return $this->createJsonResponse(array());
        }

        $this->getCourseService()->tryManageCourse($courseId);

        $courseTasks = $this->getTaskService()->findTasksByCourseId($courseId);

        return $this->createJsonResponse($courseTasks);
    }

    public function showQuestionTypesNumAction(Request $request, $courseSetId)
    {
        $this->getCourseSetService()->tryManageCourseSet($courseSetId);

        $conditions = $request->request->all();
        $conditions['courseSetId'] = $courseSetId;
        $conditions['parentId'] = 0;

        $typesNum = $this->getQuestionService()->getQuestionCountGroupByTypes($conditions);
        $typesNum = ArrayToolkit::index($typesNum, 'type');

        return $this->createJsonResponse($typesNum);
    }

    protected function getQuestionConfig()
    {
        //AppBundle/Extension/QuestionExtension
        return $this->get('extension.manager')->getQuestionTypes();
    }

    protected function getQuestionRanges($courseId)
    {
        if (empty($courseId)) {
            return array();
        }

        $courseTasks = $this->getTaskService()->findTasksByCourseId($courseId);

        return ArrayToolkit::index($courseTasks, 'id');
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
     * @return QuestionService
     */
    protected function getQuestionService()
    {
        return $this->createService('Question:QuestionService');
    }

    /**
     * @return QuestionService
     */
    protected function getTestpaperService()
    {
        return $this->createService('Testpaper:TestpaperService');
    }

    /**
     * @return UserService
     */
    protected function getUserService()
    {
        return $this->createService('User:UserService');
    }

    /**
     * @return TaskService
     */
    protected function getTaskService()
    {
        return $this->createService('Task:TaskService');
    }

    /**
     * @return ServiceKernel
     */
    protected function getServiceKernel()
    {
        return ServiceKernel::instance();
    }
}
