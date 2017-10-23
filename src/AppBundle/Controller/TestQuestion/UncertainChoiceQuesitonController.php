<?php

namespace AppBundle\Controller\TestQuestion;

use Symfony\Component\HttpFoundation\Request;

class UncertainChoiceQuesitonController extends BaseQuestionController
{
    //PS:注意namespace命名空间要改过来，还有继承的控制器要复制过来



    public function showAction(Request $request, $id, $courseId)
    {
        // TODO: Implement showAction() method.
    }



    //在用。。。
    /*** 修改独立题库题目--不定项选择题
     * @param Request $request
     * @param $testId 试卷id
     * @param $questionId 题目id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, $testId, $questionId)
    {
//        list($courseSet, $question) = $this->tryGetCourseSetAndQuestion($courseSetId, $questionId);

        //获取试卷和题目，返回这两个数组
        list($testPaper, $question) = $this->tryGetTestAndQuestion($testId, $questionId);

//        $user = $this->getUser();

        $parentQuestion = array();
        if ($question['parentId'] > 0) {
            $parentQuestion = $this->getQuestionService()->get($question['parentId']);
        }

//        $manageCourses = $this->getCourseService()->findUserManageCoursesByCourseSetId($user['id'], $courseSetId);
//        $courseTasks = $this->getTaskService()->findTasksByCourseId($question['courseId']);

        return $this->render('test-question-manage/test-uncertain-choice-form.html.twig', array(
//            'courseSet' => $courseSet,
            'TestpaperInfo'    =>  $testPaper,
            'question' => $question,
            'parentQuestion' => $parentQuestion,
            'type' => $question['type'],
//            'courseTasks' => $courseTasks,
//            'courses' => $manageCourses,
        ));
    }

    //在用....
    /**创建独立题库页面--不单项选择题
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
        $parentQuestion = $this->getQuestionService()->get($parentId);

        return $this->render('test-question-manage/test-uncertain-choice-form.html.twig', array(
//            'courseSet' => $courseSet,
            'TestpaperInfo'=>$TestpaperInfo,
            'parentQuestion' => $parentQuestion,
            'type' => $type,
//            'courses' => $manageCourses,
        ));
    }
}
