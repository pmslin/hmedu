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
                return $this->redirect(
                    $this->generateUrl(
                        'test_set_manage_question',
                        array('id' => $testpaper['id'])
                    )
                );
            }else{
                echo "新建试卷失败！";
                exit();
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
     * @return ServiceKernel
     */
    protected function getServiceKernel()
    {
        return ServiceKernel::instance();
    }
}
