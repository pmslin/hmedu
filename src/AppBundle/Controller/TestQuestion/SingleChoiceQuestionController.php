<?php

namespace AppBundle\Controller\TestQuestion;

use Symfony\Component\HttpFoundation\Request;

class SingleChoiceQuestionController extends BaseQuestionController
{
    //PS:注意namespace命名空间要改过来，还有继承的控制器要复制过来



    public function showAction(Request $request, $id, $courseId)
    {
        // TODO: Implement showAction() method.
    }

    //在用。。。
    /*** 修改独立题库题目--单选题
     * @param Request $request
     * @param $courseSetId
     * @param $questionId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, $courseSetId, $questionId)
    {
        list($courseSet, $question) = $this->tryGetCourseSetAndQuestion($courseSetId, $questionId);
        $user = $this->getUser();

        $parentQuestion = array();
        if ($question['parentId'] > 0) {
            $parentQuestion = $this->getQuestionService()->get($question['parentId']);
        }

        $manageCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSetId);
        $courseTasks = $this->getTaskService()->findTasksByCourseId($question['courseId']);

        return $this->render('test-question-manage/test-single-choice-form.html.twig', array(
            'courseSet' => $courseSet,
            'question' => $question,
            'parentQuestion' => $parentQuestion,
            'type' => $question['type'],
            'courseTasks' => $courseTasks,
            'courses' => $manageCourses,
        ));
    }


    //在用....
    /**创建独立题库页面--单选题
     * @param Request $request
     * @param $testPaperId 独立试卷id
     * @param $type 题型
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request, $testPaperId, $type)
    {
//        $user = $this->getUser();

        $TestpaperInfo = $this->getTestpaperService()->getTestpaper($testPaperId);  //试卷

//        $courseSet = $this->getCourseSetService()->getCourseSet($courseSetId);
//        $manageCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSetId);

        $parentId = $request->query->get('parentId', 0);
        $parentQuestion = $this->getQuestionService()->get($parentId);//上一级题目，用于页面返回按钮

//        print_r($testPaperId);
//        exit();


        return $this->render('test-question-manage/test-single-choice-form.html.twig', array(
//            'courseSet' => $courseSet,
            'TestpaperInfo'=>$TestpaperInfo,
            'parentQuestion' => $parentQuestion,
            'type' => $type,
//            'courses' => $manageCourses,
        ));
    }
}
