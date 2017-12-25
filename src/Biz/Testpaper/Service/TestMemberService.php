<?php

namespace Biz\Testpaper\Service;

use Biz\Testpaper\Builder\TestMemberBuilder;

interface TestMemberService
{
    //添加学员题库权限：创建订单，添加学员到题库
    public function becomeStudentAndCreateOrder($userId, $testId, $data);

    //根据用户id。   group by testCategoryId 获取数据
    public function getByUserId($userId);

    //根据用户id和试卷分类id删除权限（test_member表数据）
    public function deleteByUserIdAndTestCategoryId($userId,$TestCategoryId);
}
