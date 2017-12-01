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
use Biz\Testpaper\Service\TestpaperService;
use Biz\Testpaper\Dao\TestpaperItemResultDao;
use Biz\Testpaper\Builder\TestpaperBuilderInterface;
use AppBundle\Common\Exception\ResourceNotFoundException;

class TestpaperServiceImpl extends BaseService implements TestpaperService
{
    public function getTestpaper($id)
    {
        return $this->getTestpaperDao()->get($id);
    }

    public function getTestpaperByIdAndType($id, $type)
    {
        return $this->getTestpaperDao()->getByIdAndType($id, $type);
    }

    //获取题库试卷
    public function getTestpaperByIsTest()
    {
        return $this->getTestpaperDao()->getByIsTest();
    }

    public function findTestpapersByIdsAndType($ids, $type)
    {
        return $this->getTestpaperDao()->findTestpapersByIdsAndType($ids, $type);
    }

    public function createTestpaper($fields)
    {
        $user = $this->getCurrentUser();

        $fields['createdUserId'] = $user['id'];
        $fields['createdTime'] = time();
        $fields['updatedUserId'] = $user['id'];
        $fields['updatedTime'] = time();

        $testpaper = $this->getTestpaperDao()->create($fields);

        //$this->getLogService()->info('course', 'add_testpaper', "新增试卷(#{$testpaper['id']})", $testpaper);

        return $testpaper;
    }

    public function updateTestpaper($id, $fields)
    {
        $testpaper = $this->getTestpaper($id);

        if (!$testpaper) {
            throw $this->createServiceException("Testpaper #{$id} is not found, update testpaper failure.");
        }

        $argument = $fields;

        $testpaperBuilder = $this->getTestpaperBuilder($testpaper['type']);
        $fields = $testpaperBuilder->filterFields($fields);

        $testpaper = $this->getTestpaperDao()->update($id, $fields);

        $this->dispatchEvent('exam.update', $testpaper, array('argument' => $argument));

        return $testpaper;
    }

    public function deleteTestpaper($id, $quietly = false)
    {
        $testpaper = $this->getTestpaper($id);
        if (!$testpaper) {
            if ($quietly) {
                return 0;
            }

            throw $this->createServiceException("Testpaper #{$id} is not found, delete testpaper failure.");
        }

        $result = $this->getTestpaperDao()->delete($testpaper['id']);
        $this->deleteItemsByTestId($testpaper['id']);

        $this->getLogService()->info('course', 'delete_testpaper', "删除试卷(#{$testpaper['id']})", $testpaper);
        $this->dispatchEvent('exam.delete', $testpaper);

        return $result;
    }

    public function deleteTestpapers($ids)
    {
        if (empty($ids)) {
            return false;
        }

        foreach ($ids as $id) {
            $this->deleteTestpaper($id);
        }

        return true;
    }

    public function getTestpaperByCopyIdAndCourseSetId($copyId, $courseSetId)
    {
        return $this->getTestpaperDao()->getTestpaperByCopyIdAndCourseSetId($copyId, $courseSetId);
    }

    public function findTestpapersByIds($ids)
    {
        $testpapers = $this->getTestpaperDao()->findTestpapersByIds($ids);

        return ArrayToolkit::index($testpapers, 'id');
    }

    public function findTestpapersByCopyIdAndLockedTarget($copyId, $lockedTarget)
    {
        return $this->getTestpaperDao()->findTestpapersByCopyIdAndLockedTarget($copyId, $lockedTarget);
    }

    public function searchTestpapers($conditions, $orderBy, $start, $limit)
    {
        return $this->getTestpaperDao()->search($conditions, $orderBy, $start, $limit);
    }

    public function searchTestpaperCount($conditions)
    {
        return $this->getTestpaperDao()->count($conditions);
    }

    /**
     * testpaper_item.
     */
    public function getItem($id)
    {
        return $this->getItemDao()->get($id);
    }

    public function createItem($fields)
    {
        $fields = ArrayToolkit::parts(
            $fields,
            array(
                'testId',
                'seq',
                'questionId',
                'questionType',
                'parentId',
                'score',
                'missScore',
                'type',
            )
        );

        return $this->getItemDao()->create($fields);
    }

    public function updateItem($id, $fields)
    {
        return $this->getItemDao()->update($id, $fields);
    }

    public function deleteItem($id)
    {
        return $this->getItemDao()->delete($id);
    }

    public function deleteItemsByTestId($testpaperId)
    {
        return $this->getItemDao()->deleteItemsByTestpaperId($testpaperId);
    }

    public function getItemsCountByParams(array $conditions, $groupBy = '')
    {
        return $this->getItemDao()->getItemsCountByParams($conditions, $groupBy);
    }

    public function findItemsByTestId($testpaperId)
    {
        $testpaper = $this->getTestpaper($testpaperId);
        $items = $this->getItemDao()->findItemsByTestId($testpaperId, $testpaper['type']);

        return ArrayToolkit::index($items, 'questionId');
    }

    public function findItemsByTestIds($testpaperIds)
    {
        return $this->getItemDao()->findItemsByTestIds($testpaperIds);
    }

    public function searchItems($conditions, $orderBy, $start, $limit)
    {
        return $this->getItemDao()->search($conditions, $orderBy, $start, $limit);
    }

    public function searchItemCount($conditions)
    {
        return $this->getItemDao()->count($conditions);
    }

    public function publishTestpaper($id)
    {
        $testpaper = $this->getTestpaper($id);

        if (empty($testpaper)) {
            throw new ResourceNotFoundException('testpaper', $id);
        }

        if (!in_array($testpaper['status'], array('closed', 'draft'))) {
            throw $this->createServiceException($this->getKernel()->trans('试卷状态不合法!'));
        }

        $testpaper = $this->getTestpaperDao()->update($id, array('status' => 'open'));

        //$this->getLogService()->info('course', 'publish_testpaper', "发布试卷(#{$testpaper['id']})", $testpaper);
        $this->dispatchEvent('exam.publish', new Event($testpaper));

        return $testpaper;
    }

    public function closeTestpaper($id)
    {
        $testpaper = $this->getTestpaper($id);

        if (empty($testpaper)) {
            throw new ResourceNotFoundException('testpaper', $id);
        }

        if ('open' != $testpaper['status']) {
            throw $this->createAccessDeniedException($this->getKernel()->trans('试卷状态不合法!'));
        }

        $testpaper = $this->getTestpaperDao()->update($id, array('status' => 'closed'));

        //$this->getLogService()->info('course', 'close_testpaper', "发布试卷(#{$testpaper['id']})", $testpaper);
        $this->dispatchEvent('exam.close', new Event($testpaper));

        return $testpaper;
    }

    /**
     * testpaper_item_result.
     */
    public function getItemResult($id)
    {
        return $this->getItemResultDao()->get($id);
    }

    public function createItemResult($fields)
    {
        return $this->getItemResultDao()->create($fields);
    }

    public function updateItemResult($itemResultId, $fields)
    {
        return $this->getItemResultDao()->update($itemResultId, $fields);
    }

    public function findItemResultsByResultId($resultId, $showAttachment = false)
    {
        $result = $this->getTestpaperResult($resultId);

        $itemResults = $this->getItemResultDao()->findItemResultsByResultId($resultId, $result['type']);

        if ($showAttachment) {
            $itemResults = $this->findItemResultsAttachments($itemResults);
        }

        return $itemResults;
    }

    /**
     * testpaper_result.
     */
    public function getTestpaperResult($id)
    {
        return $this->getTestpaperResultDao()->get($id);
    }

    public function getUserUnfinishResult($testId, $courseId, $activityId, $type, $userId)
    {
        return $this->getTestpaperResultDao()->getUserUnfinishResult($testId, $courseId, $activityId, $type, $userId);
    }

    public function getUserFinishedResult($testId, $courseId, $activityId, $type, $userId)
    {
        return $this->getTestpaperResultDao()->getUserFinishedResult($testId, $courseId, $activityId, $type, $userId);
    }

    public function getUserLatelyResultByTestId($userId, $testId, $courseId, $activityId, $type)
    {
        return $this->getTestpaperResultDao()->getUserLatelyResultByTestId(
            $userId,
            $testId,
            $courseId,
            $activityId,
            $type
        );
    }

    public function findPaperResultsStatusNumGroupByStatus($testId, $courseIds)
    {
        $numInfo = $this->getTestpaperResultDao()->findPaperResultsStatusNumGroupByStatus($testId, $courseIds);
        if (!$numInfo) {
            return array();
        }

        $statusInfo = array();
        foreach ($numInfo as $info) {
            $statusInfo[$info['status']] = $info['num'];
        }

        return $statusInfo;
    }

    public function addTestpaperResult($fields)
    {
        return $this->getTestpaperResultDao()->create($fields);
    }

    public function updateTestpaperResult($id, $fields)
    {
        $fields['updateTime'] = time();

        return $this->getTestpaperResultDao()->update($id, $fields);
    }

    public function searchTestpaperResultsCount($conditions)
    {
        if (isset($conditions['courseIds']) && empty($conditions['courseIds'])) {
            return 0;
        }

        return $this->getTestpaperResultDao()->count($conditions);
    }

    public function searchTestpaperResults($conditions, $sort, $start, $limit)
    {
        if (isset($conditions['courseIds']) && empty($conditions['courseIds'])) {
            return array();
        }

        return $this->getTestpaperResultDao()->search($conditions, $sort, $start, $limit);
    }

    public function searchTestpapersScore($conditions)
    {
        return $this->getTestpaperResultDao()->sumScoreByParames($conditions);
    }

    public function buildTestpaper($fields, $type)
    {
        $testpaperBuilder = $this->getTestpaperBuilder($type);

        return $testpaperBuilder->build($fields);
    }


    public function finishTest($resultId, $formData)
    {
        $user = $this->getCurrentUser();

        $result = $this->getTestpaperResult($resultId);

        if ($result['userId'] != $user['id']) {
            throw $this->createAccessDeniedException($this->getKernel()->trans('无权修改其他学员的试卷！'));
        }

        if (in_array($result['status'], array('reviewing', 'finished'))) {
            throw $this->createServiceException($this->getKernel()->trans('已经交卷的试卷不能修改!'));
        }

        $answers = empty($formData['data']) ? array() : $formData['data'];
        $attachments = empty($formData['attachments']) ? array() : $formData['attachments'];

        $this->submitAnswers($result['id'], $answers, $attachments); //系统评卷
//        exit();
        $paperResult = $this->getTestpaperBuilder($result['type'])->updateSubmitedResult(
            $result['id'],
            $formData['usedTime']
        );

        $this->dispatchEvent('exam.finish', new Event($paperResult));

        return $paperResult;
    }

    public function countQuestionTypes($testpaper, $items)
    {
        $total = array();

        if ($testpaper['type'] == 'homework') {
            return $total;
        }

        foreach ($testpaper['metas']['counts'] as $type => $count) {
            $total[$type]['score'] = empty($items[$type]) ? 0 : array_sum(ArrayToolkit::column($items[$type], 'score'));
            $total[$type]['number'] = empty($items[$type]) ? 0 : count($items[$type]);
            $total[$type]['missScore'] = empty($items[$type]) ? 0 : array_sum(
                ArrayToolkit::column($items[$type], 'missScore')
            );
        }

        return $total;
    }

    public function canBuildTestpaper($type, $options)
    {
        $builder = $this->getTestpaperBuilder($type);

        return $builder->canBuild($options);
    }

    public function startTestpaper($id, $fields)
    {
        if (!ArrayToolkit::parts($fields, array('lessonId', 'courseId'))) {
            throw $this->createInvalidArgumentException(' Invalid Argument');
        }

        $testpaper = $this->getTestpaper($id);
        $user = $this->getCurrentUser();
//echo $fields['test'];
        if (isset($fields['test'])){
            $testpaperResult = $this->getUserUnfinishResult(
                $testpaper['id'],
                0,
                0,
                $testpaper['type'],
                $user['id']
            );
        }else{
            $testpaperResult = $this->getUserUnfinishResult(
                $testpaper['id'],
                $fields['courseId'],
                $fields['lessonId'],
                $testpaper['type'],
                $user['id']
            );
        }

//        var_dump($testpaperResult);exit();


        if (!$testpaperResult) {
            $fields = array(
                'paperName' => $testpaper['name'],
                'testId' => $id,
                'userId' => $user['id'],
                'limitedTime' => isset($fields['limitedTime']) ? $fields['limitedTime'] : 0,
                'beginTime' => time(),
                'status' => 'doing',
                'usedTime' => 0,
                'courseId' => empty($fields['courseId']) ? 0 : $fields['courseId'],
                'courseSetId' => $testpaper['courseSetId'],
                'lessonId' => empty($fields['lessonId']) ? 0 : $fields['lessonId'],
                'type' => $testpaper['type'],
            );

            $testpaperResult = $this->addTestpaperResult($fields);
        }

        return $testpaperResult;
    }

    protected function completeQuestion($items, $questions)
    {
        foreach ($items as $item) {
            if (!in_array($item['questionId'], ArrayToolkit::column($questions, 'id'))) {
                $questions[$item['questionId']] = array(
                    'id' => $item['questionId'],
                    'isDeleted' => true,
                    'stem' => $this->getKernel()->trans('此题已删除'),
                    'score' => 0,
                    'answer' => '',
                    'type' => $item['questionType'],
                );
            }
        }

        return $questions;
    }

    public function showTestpaperItems($testId, $resultId = 0)
    {
        $testpaper = $this->getTestpaper($testId);
        $testpaperBuilder = $this->getTestpaperBuilder($testpaper['type']);

        return $testpaperBuilder->showTestItems($testId, $resultId);
    }

    public function makeAccuracy($resultId)
    {
        $testpaperResult = $this->getTestpaperResult($resultId);
        $items = $this->findItemsByTestId($testpaperResult['testId']);

        $itemResults = $this->findItemResultsByResultId($resultId);
        $itemResults = ArrayToolkit::index($itemResults, 'questionId');

        $accuracy = array();

        foreach ($items as $item) {
            $itemResult = empty($itemResults[$item['questionId']]) ? array() : $itemResults[$item['questionId']];

            if ($item['parentId'] > 0 || $item['questionType'] == 'material') {
                $accuracy['material'] = empty($accuracy['material']) ? array() : $accuracy['material'];

                $accuracy['material'] = $this->countItemResultStatus($accuracy['material'], $item, $itemResult);
            } else {
                $accuracy[$item['questionType']] = empty($accuracy[$item['questionType']]) ? array() : $accuracy[$item['questionType']];

                $accuracyResult = $this->countItemResultStatus($accuracy[$item['questionType']], $item, $itemResult);

                $accuracy[$item['questionType']] = $accuracyResult;
            }
        }

        return $accuracy;
    }

    public function checkFinish($resultId, $fields)
    {
        $paperResult = $this->getTestpaperResult($resultId);

        $user = $this->getCurrentUser();

        $checkData = $fields['result'];
        unset($fields['result']);

        $items = $this->findItemsByTestId($paperResult['testId']);

        $userAnswers = $this->findItemResultsByResultId($paperResult['id']);
        $userAnswers = ArrayToolkit::index($userAnswers, 'questionId');

        foreach ($items as $questionId => $item) {
            $checkedFields = empty($checkData[$questionId]) ? array() : $checkData[$questionId];
            if (!$checkedFields) {
                continue;
            }

            $userAnswer = empty($userAnswers[$questionId]) ? array() : $userAnswers[$questionId];
            if (!$userAnswer) {
                continue;
            }

            if (!empty($userAnswer['answer'])) {
                $answerFilter = str_replace('""', '', $userAnswer['answer'][0]);

                if (!empty($answerFilter)) {
                    if ($paperResult['type'] == 'homework') {
                        $checkedFields['status'] = 'right';
                    } else {
                        $checkedFields['status'] = $checkedFields['score'] == $item['score'] ? 'right' : 'wrong';
                    }
                }
            }
            $this->updateItemResult($userAnswer['id'], $checkedFields);
        }
        $fields['checkTeacherId'] = $user['id'];
        $fields['checkedTime'] = time();
        $fields['subjectiveScore'] = array_sum(ArrayToolkit::column($checkData, 'score')); //主观题得分
        $fields['score'] = $paperResult['objectiveScore'] + $fields['subjectiveScore']; //总得分
        $fields['status'] = 'finished';

        $paperResult = $this->updateTestpaperResult($paperResult['id'], $fields);

        $this->dispatchEvent('exam.reviewed', new Event($paperResult));

        return $paperResult;
    }

    //阅卷给功能 系统评卷
    public function submitAnswers($id, $answers, $attachments)
    {
        $answers = is_array($answers) ? $answers : json_decode($answers, true);
        if (empty($answers)) {
            return array();
        }

        $user = $this->getCurrentUser(); //考试人信息
        $testpaperResult = $this->getTestpaperResult($id);
        $questionIds = array_keys($answers);

        $paperItems = $this->findItemsByTestId($testpaperResult['testId']);

        $itemResults = $this->findItemResultsByResultId($testpaperResult['id']);
        $itemResults = ArrayToolkit::index($itemResults, 'questionId');

        $questions = $this->getQuestionService()->findQuestionsByIds($questionIds); //根据问题id数组读取每个问题的信息

        $this->getItemResultDao()->db()->beginTransaction(); //开始事务

        //核对答案评分
        try {
            foreach ($answers as $questionId => $answer) {
                $fields = array('answer' => $answer);

                $question = empty($questions[$questionId]) ? array() : $questions[$questionId];
                $paperItem = empty($paperItems[$questionId]) ? array() : $paperItems[$questionId];

                if (!$question) {
                    $fields['status'] = 'notFound';
                    $fields['score'] = 0;
                } else {
                    $question['score'] = empty($paperItem['score']) ? 0 : $paperItem['score'];
                    $question['missScore'] = empty($paperItem['missScore']) ? 0 : $paperItem['missScore'];

                    $answerStatus = $this->getQuestionService()->judgeQuestion($question, $answer);
                    $fields['status'] = $answerStatus['status'];
                    $fields['score'] = $answerStatus['score'];
                }

                if (!empty($itemResults[$questionId])) {
                    $this->updateItemResult($itemResults[$questionId]['id'], $fields);
                } else {
                    $fields['testId'] = $testpaperResult['testId'];
                    $fields['resultId'] = $testpaperResult['id'];
                    $fields['userId'] = $user['id'];
                    $fields['questionId'] = $questionId;
                    $fields['answer'] = $answer;
                    $fields['type'] = $testpaperResult['type'];

                    $this->createItemResult($fields);
                }
            }

            $this->submitAttachment($testpaperResult['id'], $attachments);

            $this->getItemResultDao()->db()->commit();//提交事务
        } catch (\Exception $e) {
            $this->getItemResultDao()->db()->rollback();//回滚事务
            throw $e;
        }
//        exit();
        return $this->findItemResultsByResultId($testpaperResult['id']);
    }

    protected function submitAttachment($testpaperResultId, $attachments)
    {
        if (empty($attachments)) {
            return;
        }

        $itemResults = $this->findItemResultsByResultId($testpaperResultId);
        $itemResults = ArrayToolkit::index($itemResults, 'questionId');

        foreach ($attachments as $questionId => $fileIds) {
            if (!empty($itemResults[$questionId]) && !empty($fileIds)) {
                $this->getUploadFileService()->createUseFiles($fileIds, $itemResults[$questionId]['id'], 'question.answer', 'attachment');
            }
        }
    }

    public function sumScore($itemResults)
    {
        $score = 0;
        $rightItemCount = 0;

        foreach ($itemResults as $itemResult) {
            $score += $itemResult['score'];

            if ($itemResult['status'] == 'right') {
                ++$rightItemCount;
            }
        }

        return array(
            'sumScore' => $score,
            'rightItemCount' => $rightItemCount,
        );
    }

    //将题目加入到试卷 testpaper_item_v8表
    public function updateTestpaperItems($testpaperId, $fields)
    {
        $newItems = $fields['questions'];
        $newItems = ArrayToolkit::index($newItems, 'id');

        if (!$newItems) {
            return false;
        }

        $testpaper = $this->getTestpaper($testpaperId);
        $argument = $fields;

        if (empty($testpaperId)) {
            throw $this->createServiceException();
        }

        $existItems = $this->findItemsByTestId($testpaperId);
        $questionIds = array_keys($newItems);
        $questions = $this->getQuestionService()->findQuestionsByIds($questionIds);

        try {
            $this->beginTransaction(); //开始事务

            $this->deleteItemsByTestId($testpaper['id']); //根据试卷id先将所有旧记录删除
            $this->createItems($newItems, $questions, $testpaper['id']); //再增加新记录，绑定试卷和题目

            $testpaper = $this->updateTestpaperByItems($testpaper['id'], $fields);  //更新试卷信息
            $this->commit(); //提交事务

            return $testpaper;
        } catch (\Exception $e) {
            $this->rollback(); //回滚事务
            throw $e;
        }
    }

    protected function createItems($newItems, $questions, $testpaperId)
    {
        if (!$questions) {
            return array();
        }

        $index = 1;
        foreach ($newItems as $questionId => $item) {
            $question = !empty($questions[$questionId]) ? $questions[$questionId] : array();
            if (!$question) {
                continue;
            }

            $filter['seq'] = $index;

            if ($question['type'] != 'material') {
                ++$index;
            }

            $filter['questionId'] = $question['id'];
            $filter['questionType'] = $question['type'];
            $filter['testId'] = $testpaperId;
            $filter['score'] = empty($item['score']) ? 0 : floatval($item['score']);
            $filter['missScore'] = empty($item['missScore']) ? 0 : floatval($item['missScore']);
            $filter['parentId'] = $question['parentId'];
            $items[] = $this->createItem($filter);
        }

        return $items;
    }


    //试卷和题目关联时，修改试卷表信息
    protected function updateTestpaperByItems($testpaperId, $fields)
    {
        $testpaper = $this->getTestpaper($testpaperId);
//var_dump($fields);exit();
        $items = $this->findItemsByTestId($testpaperId);
        $conditions = array(
            'testId' => $testpaperId,
            'parentIdDefault' => 0,
        );
        $fields['itemCount'] = $this->searchItemCount($conditions);
        $fields['metas'] = $testpaper['metas'];

        $totalScore = 0;
        if ($items) {
            $type = array();
            foreach ($items as $item) {
                if ($item['questionType'] != 'material') {
                    $totalScore += $item['score'];
                }

                if (!in_array($item['questionType'], $type) && $item['parentId'] != 0) {
                    $type[] = $item['questionType'];
                }
            }
            $fields['metas']['question_type_seq'] = $type;
        }

        $fields['score'] = $totalScore;

        $testpaper = $this->updateTestpaper($testpaperId, $fields);

        return $testpaper;
    }

    protected function countItemResultStatus($resultStatus, $item, $questionResult)
    {
        $resultStatus = array(
            'score' => empty($resultStatus['score']) ? 0 : $resultStatus['score'],
            'totalScore' => empty($resultStatus['totalScore']) ? 0 : $resultStatus['totalScore'],
            'all' => empty($resultStatus['all']) ? 0 : $resultStatus['all'],
            'right' => empty($resultStatus['right']) ? 0 : $resultStatus['right'],
            'partRight' => empty($resultStatus['partRight']) ? 0 : $resultStatus['partRight'],
            'wrong' => empty($resultStatus['wrong']) ? 0 : $resultStatus['wrong'],
            'noAnswer' => empty($resultStatus['noAnswer']) ? 0 : $resultStatus['noAnswer'],
        );

        $score = empty($questionResult['score']) ? 0 : $questionResult['score'];
        $status = empty($questionResult['status']) ? 'noAnswer' : $questionResult['status'];
        $resultStatus['score'] += $score;
        $resultStatus['totalScore'] += $item['score'];

        if (!$item['parentId']) {
            ++$resultStatus['all'];
        }

        if ($item['questionType'] == 'material') {
            return $resultStatus;
        }

        if ($status == 'right') {
            ++$resultStatus['right'];
        }

        if ($status == 'partRight') {
            ++$resultStatus['partRight'];
        }

        if ($status == 'wrong') {
            ++$resultStatus['wrong'];
        }

        if ($status == 'noAnswer') {
            ++$resultStatus['noAnswer'];
        }

        return $resultStatus;
    }

    public function findAttachments($testId)
    {
        $items = $this->findItemsByTestId($testId);
        $questionIds = ArrayToolkit::column($items, 'questionId');

        return $this->getQuestionService()->findAttachments($questionIds);
    }

    public function canLookTestpaper($resultId)
    {
        $user = $this->getCurrentUser();

        if (!$user->isLogin()) {
            throw $this->createAccessDeniedException('未登录用户，无权操作！');
        }

        $paperResult = $this->getTestpaperResult($resultId);

        if (!$paperResult) {
            throw $this->createNotFoundException($this->getKernel()->trans('试卷结果不存在!'));
        }

        $paper = $this->getTestpaper($paperResult['testId']);

        if (!$paper) {
            throw $this->createNotFoundException($this->getKernel()->trans('试卷不存在!'));
        }

        if ($paperResult['status'] === 'doing' && ($paperResult['userId'] != $user['id'])) {
            throw $this->createNotFoundException('无权查看此试卷');
        }

        if ($user->isAdmin()) {
            return true;
        }

        $course = $this->getCourseService()->getCourse($paperResult['courseId']);
        $member = $this->getCourseMemberService()->getCourseMember($course['id'], $user['id']);

        if ($member['role'] === 'teacher') {
            return true;
        }

        if ($paperResult['userId'] == $user['id']) {
            return true;
        }

        if ($course['parentId'] > 0) {
            $classroom = $this->getClassroomService()->getClassroomByCourseId($course['id']);
            $member = $this->getClassroomService()->getClassroomMember($classroom['id'], $user['id']);

            if ($member && (in_array('teacher', $member['role']) || in_array('headTeacher', $member['role']))) {
                return true;
            }
        }

        return false;
    }

    protected function findItemResultsAttachments($itemResults)
    {
        if (empty($itemResults)) {
            return array();
        }

        $itemResultIds = ArrayToolkit::column($itemResults, 'id');

        $conditions = array(
            'targetIds' => $itemResultIds,
            'targetType' => 'question.answer',
            'type' => 'attachment',
        );
        $attachments = $this->getUploadFileService()->searchUseFiles($conditions, false);
        $attachments = ArrayToolkit::index($attachments, 'targetId');

        foreach ($itemResults as $key => $itemResult) {
            $itemResults[$key]['attachment'] = array();
            if (!empty($attachments[$itemResult['id']])) {
                $itemResults[$key]['attachment'] = $attachments[$itemResult['id']];
            }
        }

        return $itemResults;
    }

    /**
     * @param  $type
     *
     * @return TestpaperBuilderInterface
     */
    public function getTestpaperBuilder($type)
    {
        return $this->biz["testpaper_builder.{$type}"];
    }

    public function getTestpaperPattern($pattern)
    {
        return $this->biz["testpaper_pattern.{$pattern}"];
    }

    /**
     * @return TestpaperDao
     */
    protected function getTestpaperDao()
    {
        return $this->createDao('Testpaper:TestpaperDao');
    }

    /**
     * @return TestpaperResultDao
     */
    protected function getTestpaperResultDao()
    {
        return $this->createDao('Testpaper:TestpaperResultDao');
    }

    /**
     * @return TestpaperItemDao
     */
    protected function getItemDao()
    {
        return $this->createDao('Testpaper:TestpaperItemDao');
    }

    /**
     * @return TestpaperItemResultDao
     */
    protected function getItemResultDao()
    {
        return $this->createDao('Testpaper:TestpaperItemResultDao');
    }

    /**
     * @return QuestionService
     */
    protected function getQuestionService()
    {
        return $this->createService('Question:QuestionService');
    }

    /**
     * @return CourseService
     */
    protected function getCourseService()
    {
        return $this->createService('Course:CourseService');
    }

    protected function getCourseMemberService()
    {
        return $this->createService('Course:MemberService');
    }

    protected function getClassroomService()
    {
        return $this->createService('Classroom:ClassroomService');
    }

    /**
     * @return UploadFileService
     */
    protected function getUploadFileService()
    {
        return $this->createService('File:UploadFileService');
    }

    protected function getLogService()
    {
        return $this->createService('System:LogService');
    }

    /**
     * @return ServiceKernel
     */
    protected function getKernel()
    {
        return ServiceKernel::instance();
    }
}
