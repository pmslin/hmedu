<?php

namespace Biz\Activity\Dao\Impl;

use Biz\Activity\Dao\TestpaperActivityDao;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class TestpaperActivityDaoImpl extends GeneralDaoImpl implements TestpaperActivityDao
{
    protected $table = 'activity_testpaper';

    public function findByIds($ids)
    {
        return $this->findInField('id', $ids);
    }

    //根据试卷id查找
    public function findByMediaId($mediaId)
    {
        $sql = "SELECT * FROM {$this->table()} WHERE mediaId = ?";

        return $this->db()->fetchAll($sql, array($mediaId)) ?: array();
    }

    public function findByMediaIds($mediaIds)
    {
        return $this->findInField('mediaId', $mediaIds);
    }

    public function declares()
    {
        $declares['conditions'] = array(
            'id = :id',
            'id IN (:ids)',
        );

        $declares['serializes'] = array(
            'finishCondition' => 'json',
        );

        return $declares;
    }
}
