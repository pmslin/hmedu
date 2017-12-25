<?php

namespace Biz\Testpaper\Dao;

use Codeages\Biz\Framework\Dao\GeneralDaoInterface;

interface TestMemberDao extends GeneralDaoInterface
{

    public function getByTestIdAndUserId($testId, $userId);

    public function getByUserIdGroupByTestCategory($userId);

    public function deleteByUserIdAndTestCategoryId($userId,$TestCategoryId);
   
}
