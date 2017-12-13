<?php

namespace Biz\Testpaper\Service\Impl;

use Biz\BaseService;
use Biz\Activity\Type\Testpaper;
use AppBundle\Common\ArrayToolkit;
use Biz\Testpaper\Dao\TestpaperDao;
use Biz\Course\Service\CourseService;
use Biz\File\Service\UploadFileService;
use Biz\Testpaper\Dao\TestpaperItemDao;
use Codeages\Biz\Framework\Event\Event;
use Topxia\Service\Common\ServiceKernel;
use Biz\Question\Service\QuestionService;
use Biz\Testpaper\Dao\TestpaperResultDao;
use Biz\Testpaper\Dao\TestpaperItemResultDao;
use Biz\Testpaper\Builder\TestMemberBuilderInterface;
use AppBundle\Common\Exception\ResourceNotFoundException;
use Biz\Testpaper\Service\TestMemberService;

class TestMemberServiceImpl extends BaseService implements TestMemberService
{
	
	 public function getUser($id)
    {
        return $this->getUserDao()->get($id);
    }

    // ...

    protected function getUserDao()
    {
        return $this->biz->dao('Testpaper:TestMemberDao');
    }
   
}
