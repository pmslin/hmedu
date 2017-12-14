<?php

namespace Biz\Testpaper\Dao\Impl;

use Biz\Testpaper\Dao\TestMemberDao;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class TestMemberDaoImpl extends GeneralDaoImpl implements TestMemberDao
{
    protected $table = 'test_member';


    public function getByTestIdAndUserId($testId, $userId)
    {
        return $this->getByFields(array(
            'testId' => $testId,
            'userId' => $userId,
        ));
    }
   
   
    protected function _buildJoinQueryBuilder($conditions, $joinConnections = '')
    {
        $conditions = array_filter($conditions, function ($value) {
            if ($value === '' || $value === null) {
                return false;
            }

            return true;
        });

        $builder = new DynamicQueryBuilder($this->db(), $conditions);
        $builder->from($this->table(), 'm')
            ->join('m', 'testpaper_v8', 't', 'm.testId = t.id '.$joinConnections)
            ->andWhere('m.isLearned = :isLearned')
            ->andWhere('m.userId = :userId')
			->andWhere('m.testId = :testId')
			//->andWhere('m.courseId = :courseId')
            ->andWhere('m.role = :role')
            ->andWhere('m.courseId = :courseId')
            ->andWhere('m.joinedType =:joinedType')
            ->andWhere('m.noteNum > :noteNumGreaterThan');
            //->andWhere('c.type = :type')
            //->andWhere('c.parentId = :parentId')
            //->andWhere('c.serializeMode =  :serializeMode')
            //->andWhere('c.serializeMode IN ( :serializeModes)');

        return $builder;
    }

    public function declares()
    {
        return array(
            'timestamps' => array('createdTime', 'updatedTime'),
            'orderbys' => array(
                'createdTime',
                'lastLearnTime',
                'classroomId',
                'id',
                'updatedTime',
                'lastViewTime',
                'seq',
            ),
            'conditions' => array(
                'id NOT IN (:excludeIds)',
                'userId = :userId',
				'testId = :testId',
                //'courseSetId = :courseSetId',
                //'courseId = :courseId',
                'isLearned = :isLearned',
                'joinedType = :joinedType',
                'role = :role',
                'isVisible = :isVisible',
                'classroomId = :classroomId',
                'noteNum > :noteNumGreaterThan',
                'createdTime >= :startTimeGreaterThan',
                'createdTime < :startTimeLessThan',
				'testId IN (:testId)',
                //'courseId IN (:courseIds)',
                //'courseSetId IN (:courseSetIds)',
                'userId IN (:userIds)',
                'learnedNum >= :learnedNumGreaterThan',
                'learnedNum < :learnedNumLessThan',
                'deadline >= :deadlineGreaterThan',
                'lastViewTime >= :lastViewTime_GE',
                'lastLearnTime >= :lastLearnTimeGreaterThan',
                'updatedTime >= :updatedTime_GE',
                'finishedTime >= :finishedTime_GE',
                'finishedTime <= :finishedTime_LE',
            ),
        );
    }

    /**
     * @param  $conditions
     * @param  $sql
     *
     * @return array
     */
    protected function applySqlParams($conditions, $sql)
    {
        $params = array();
        $conditions = array_filter($conditions, function ($value) {
            return !empty($value);
        });
        foreach ($conditions as $key => $value) {
            $sql .= $key.' = ? AND ';
            array_push($params, $value);
        }

        return array($sql, $params);
    }
	
	
}
