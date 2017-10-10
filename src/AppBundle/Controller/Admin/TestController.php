<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Common\Paginator;
use AppBundle\Common\ExportHelp;
use AppBundle\Common\ArrayToolkit;
use Biz\System\Service\SettingService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class TestController extends BaseController
{
    //新增控制器

    public function indexAction(Request $request){
//        exit();
        $testPaper=$this->getTestpaperService()->getTestpaperByIsTest();
//        var_dump($testPaper);



        return $this->render(
            'admin/test-set/index.html.twig',
            array(
                'testPapers'=>$testPaper,
                'conditions' => '',
                'courseSets' => '',
                'users' => '',
                'categories' => '',
                'paginator' => '',
                'liveSetEnabled' => '',
                'default' => '',
                'classrooms' => '',
                'filter' => '',
                'searchCourseSetsNum' => '',
                'publishedCourseSetsNum' => '',
                'closedCourseSetsNum' => '',
                'unPublishedCourseSetsNum' => '',

            )
        );
    }

    //题库分类
    public function testcategoryAction(Request $request)
    {
        return $this->forward('AppBundle:Admin/Category:embed', array(
            'group' => 'test',
            'layout' => 'admin/layout.html.twig',
        ));
    }


    //copy...
    protected function getDifferentCourseSetsNum($conditions)
    {
        $courseSets = $this->getCourseSetService()->searchCourseSets(
            $conditions,
            array(),
            0,
            PHP_INT_MAX
        );

        $publishedCourseSetsNum = 0;
        $closedCourseSetsNum = 0;
        $unPublishedCourseSetsNum = 0;
        $searchCourseSetsNum = count($courseSets);

        foreach ($courseSets as $courseSet) {
            if ($courseSet['status'] == 'published') {
                ++$publishedCourseSetsNum;
            }

            if ($courseSet['status'] == 'closed') {
                ++$closedCourseSetsNum;
            }

            if ($courseSet['status'] == 'draft') {
                ++$unPublishedCourseSetsNum;
            }
        }

        return array($searchCourseSetsNum, $publishedCourseSetsNum, $closedCourseSetsNum, $unPublishedCourseSetsNum);
    }



    /**
     * @return SettingService
     */
    protected function getSettingService()
    {
        return $this->createService('System:SettingService');
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
     * @return CourseDeleteService
     */
    protected function getCourseSetDeleteService()
    {
        return $this->createService('Course:CourseSetDeleteService');
    }

    /**
     * @return CategoryService
     */
    protected function getCategoryService()
    {
        return $this->createService('Taxonomy:CategoryService');
    }

    /**
     * @return TestpaperService
     */
    protected function getTestpaperService()
    {
        return $this->createService('Testpaper:TestpaperService');
    }

    /**
     * @return AppService
     */
    protected function getAppService()
    {
        return $this->createService('CloudPlatform:AppService');
    }

    /**
     * @return ClassroomService
     */
    protected function getClassroomService()
    {
        return $this->createService('Classroom:ClassroomService');
    }

    /**
     * @return MessageDigestPasswordEncoder
     */
    protected function getPasswordEncoder()
    {
        return new MessageDigestPasswordEncoder('sha256');
    }

    /**
     * @return LevelService
     */
    protected function getVipLevelService()
    {
        return $this->createService('VipPlugin:Vip:LevelService');
    }

    /**
     * @return MemberService
     */
    protected function getMemberService()
    {
        return $this->createService('Course:MemberService');
    }

    /**
     * @return TaskService
     */
    protected function getTaskService()
    {
        return $this->createService('Task:TaskService');
    }

    /**
     * @return TaskResultService
     */
    protected function getTaskResultService()
    {
        return $this->createService('Task:TaskResultService');
    }

    /**
     * @return ThreadService
     */
    protected function getThreadService()
    {
        return $this->createService('Course:ThreadService');
    }

    /**
     * @return ActivityLearnLogService
     */
    protected function getActivityLearnLogService()
    {
        return $this->createService('Activity:ActivityLearnLogService');
    }

}
