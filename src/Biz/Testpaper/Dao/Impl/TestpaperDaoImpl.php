<?php

namespace Biz\Testpaper\Dao\Impl;

use Biz\Testpaper\Dao\TestpaperDao;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class TestpaperDaoImpl extends GeneralDaoImpl implements TestpaperDao
{
    protected $table = 'testpaper_v8';

    public function getByIdAndType($id, $type)
    {
        return $this->getByFields(array('id' => $id, 'type' => $type));
    }

    //获取题库试卷
    public function getByIsTest()
    {
        $sql = "SELECT * FROM {$this->table} WHERE  isTest=1";

        return $this->db()->fetchAll($sql);
    }

    //获取展示在首页的试卷列表，9条模拟题或真题
    public function getPageTest()
    {
        $sql = "SELECT * FROM {$this->table} WHERE isTest=1 AND TestType IN (1,2) LIMIT 0,9";
        return $this->db()->fetchAll($sql);
    }

    //根据题库分类id获取对应的所有题库试卷
    public function getByIsTestANDTestCategoryId($testCategoryId)
    {

        $sql = "SELECT * FROM {$this->table} WHERE  isTest=1 AND testCategoryId = {$testCategoryId} ";

        return $this->db()->fetchAll($sql);
    }

    public function findTestpapersByIds(array $ids)
    {
        return $this->findInField('id', $ids);
    }

    public function findTestpapersByIdsAndType($ids, $type)
    {
        $marks = str_repeat('?,', count($ids) - 1).'?';

        $sql = "select * from {$this->table()} where id in ({$marks}) and type = ?";
        $params = $ids;
        $params[] = $type;

        return $this->db()->fetchAll($sql, $params);
    }

    public function findTestpapersByCopyIdAndCourseSetIds($copyId, $courseSetIds)
    {
        if (empty($courseSetIds)) {
            return array();
        }

        $marks = str_repeat('?,', count($courseSetIds) - 1).'?';

        $parmaters = array_merge(array($copyId), $courseSetIds);

        $sql = "SELECT * FROM {$this->table()} WHERE copyId= ? AND courseSetId IN ({$marks})";

        return $this->db()->fetchAll($sql, $parmaters) ?: array();
    }

    public function findTestpapersByCopyIdAndLockedTarget($copyId, $lockedTarget)
    {
        $sql = "SELECT * FROM {$this->table} WHERE copyId = ?  AND target IN {$lockedTarget}";

        return $this->db()->fetchAll($sql, array($copyId));
    }

    public function getTestpaperByCopyIdAndCourseSetId($copyId, $courseSetId)
    {
        return $this->getByFields(array('copyId' => $copyId, 'courseSetId' => $courseSetId));
    }

    public function deleteByCourseSetId($courseSetId)
    {
        return $this->db()->delete($this->table(), array('courseSetId' => $courseSetId));
    }

    public function declares()
    {
        $declares['orderbys'] = array(
            'createdTime',
            'TestSort',
        );

        $declares['conditions'] = array(
            'name LIKE (:name)',
            'courseSetId = :courseSetId',
            'courseId = :courseId',
            'courseId IN (:courseIds)',
            'status = :status',
            'type = :type',
            'type IN (:types)',
            'id IN (:ids)',
            'copyId = :copyId',
            'copyId > :copyIdGT',
            'isTest = :isTest',
            'testCategoryId = :testCategoryId',
            'TestYear = :TestYear',
            'TestType = :TestType',
        );

        $declares['serializes'] = array(
            'metas' => 'json',
            'passedCondition' => 'json',
        );

        return $declares;
    }
}
