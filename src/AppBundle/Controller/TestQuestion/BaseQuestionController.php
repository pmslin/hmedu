<?php

namespace AppBundle\Controller\TestQuestion;

use Biz\Task\Service\TaskService;
use Biz\Course\Service\CourseService;
use AppBundle\Controller\BaseController;
use Biz\Course\Service\CourseSetService;
use Biz\Question\Service\QuestionService;
use Topxia\Service\Common\ServiceKernel;
use Codeages\Biz\Framework\Service\Exception\NotFoundException;

class BaseQuestionController extends BaseController
{
    protected function tryGetCourseSetAndQuestion($courseSetId, $questionId)
    {
        $courseSet = $this->getCourseSetService()->getCourseSet($courseSetId);
        $question = $this->getQuestionService()->get($questionId);

        if ($question['courseSetId'] != $courseSetId) {
            throw new NotFoundException('question#{$questionId} not found');
        }

        return array($courseSet, $question);
    }

    //获取试卷和题目，返回这两个数组
    protected function tryGetTestAndQuestion($testId, $questionId)
    {
        $testPaper = $this->getTestpaperService()->getTestpaper($testId);
        $question = $this->getQuestionService()->get($questionId);

        if ($question['testCategoryId'] != $testId) {
            throw new NotFoundException('试卷id和该题目id不一致，question#{$questionId} not found');
        }

        return array($testPaper, $question);
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
     * @return TaskService
     */
    protected function getTaskService()
    {
        return $this->createService('Task:TaskService');
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
     * @return ServiceKernel
     */
    protected function getServiceKernel()
    {
        return ServiceKernel::instance();
    }
}
