<?php

namespace AppBundle\Controller\TestQuestion;

use Symfony\Component\HttpFoundation\Request;

class DetermineQuestionController extends BaseQuestionController
{
    public function showAction(Request $request, $id, $courseId)
    {
        // TODO: Implement showAction() method.
    }

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

        return $this->render('test-question-manage/test-determine-form.html.twig', array(
            'courseSet' => $courseSet,
            'question' => $question,
            'parentQuestion' => $parentQuestion,
            'type' => $question['type'],
            'courseTasks' => $courseTasks,
            'courses' => $manageCourses,
        ));
    }

    //在用....
    /**创建独立题库页面--判断题
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

        return $this->render('test-question-manage/test-determine-form.html.twig', array(
//            'courseSet' => $courseSet,
            'TestpaperInfo'=>$TestpaperInfo,
            'parentQuestion' => $parentQuestion,
            'type' => $type,
//            'courses' => $manageCourses,
        ));
    }
}
