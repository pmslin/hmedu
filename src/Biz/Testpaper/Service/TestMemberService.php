<?php

namespace Biz\Testpaper\Service;

use Biz\Testpaper\Builder\TestMemberBuilder;

interface TestMemberService
{
    //添加学员题库权限：创建订单，添加学员到题库
    public function becomeStudentAndCreateOrder($userId, $testId, $data);
}
