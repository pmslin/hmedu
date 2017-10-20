<?php

namespace AppBundle\Extension;

use Biz\Question\Type\Choice;
use Biz\Question\Type\Determine;
use Biz\Question\Type\Essay;
use Biz\Question\Type\Fill;
use Biz\Question\Type\Material;
use Biz\Question\Type\SingleChoice;
use Biz\Question\Type\UncertainChoice;
use Biz\Testpaper\Pattern\QuestionTypePattern;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class QuestionExtension extends Extension implements ServiceProviderInterface
{
    public function getQuestionTypes()
    {
        return array(
            'single_choice' => array(
                'name' => '单选题',
                'actions' => array(
                    'create' => 'AppBundle:Question/SingleChoiceQuestion:create',
                    'edit' => 'AppBundle:Question/SingleChoiceQuestion:edit',
                    'show' => 'AppBundle:Question/SingleChoiceQuestion:show',
                ),
				'testActions' => array(
                    'create' => 'AppBundle:TestQuestion/SingleChoiceQuestion:create',
                    'edit' => 'AppBundle:TestQuestion/SingleChoiceQuestion:edit',
                    'show' => 'AppBundle:TestQuestion/SingleChoiceQuestion:show',
                ),
                'templates' => array(
                    'do' => 'question/single-choice-do.html.twig',
                ),
                'hasMissScore' => 0,
            ),
            'choice' => array(
                'name' => '多选题',
                'actions' => array(
                    'create' => 'AppBundle:Question/ChoiceQuestion:create',
                    'edit' => 'AppBundle:Question/ChoiceQuestion:edit',
                    'show' => 'AppBundle:Question/ChoiceQuestion:show',
                ),
				'testActions' => array(
                    'create' => 'AppBundle:TestQuestion/ChoiceQuestion:create',
                    'edit' => 'AppBundle:TestQuestion/ChoiceQuestion:edit',
                    'show' => 'AppBundle:TestQuestion/ChoiceQuestion:show',
                ),
                'templates' => array(
                    'do' => 'question/choice-do.html.twig',
                ),
                'hasMissScore' => 1,
            ),
            'essay' => array(
                'name' => '问答题',
                'actions' => array(
                    'create' => 'AppBundle:Question/EssayQuestion:create',
                    'edit' => 'AppBundle:Question/EssayQuestion:edit',
                    'show' => 'AppBundle:Question/EssayQuestion:show',
                ),
				'testActions' => array(
                    'create' => 'AppBundle:TestQuestion/EssayQuestion:create',
                    'edit' => 'AppBundle:TestQuestion/EssayQuestion:edit',
                    'show' => 'AppBundle:TestQuestion/EssayQuestion:show',
                ),
                'templates' => array(
                    'do' => 'question/essay-do.html.twig',
                ),
                'hasMissScore' => 0,
            ),
            'uncertain_choice' => array(
                'name' => '不定项选择题',
                'actions' => array(
                    'create' => 'AppBundle:Question/UncertainChoiceQuesiton:create',
                    'edit' => 'AppBundle:Question/UncertainChoiceQuesiton:edit',
                    'show' => 'AppBundle:Question/UncertainChoiceQuesiton:show',
                ),
				'testActions' => array(
                    'create' => 'AppBundle:TestQuestion/UncertainChoiceQuesiton:create',
                    'edit' => 'AppBundle:TestQuestion/UncertainChoiceQuesiton:edit',
                    'show' => 'AppBundle:TestQuestion/UncertainChoiceQuesiton:show',
                ),
                'templates' => array(
                    'do' => 'question/uncertain-choice-do.html.twig',
                ),
                'hasMissScore' => 1,
            ),
            'determine' => array(
                'name' => '判断题',
                'actions' => array(
                    'create' => 'AppBundle:Question/DetermineQuestion:create',
                    'edit' => 'AppBundle:Question/DetermineQuestion:edit',
                    'show' => 'AppBundle:Question/DetermineQuestion:show',
                ),
				'testActions' => array(
                    'create' => 'AppBundle:TestQuestion/DetermineQuestion:create',
                    'edit' => 'AppBundle:TestQuestion/DetermineQuestion:edit',
                    'show' => 'AppBundle:TestQuestion/DetermineQuestion:show',
                ),
                'templates' => array(
                    'do' => 'question/determine-do.html.twig',
                ),
                'hasMissScore' => 0,
            ),
            'fill' => array(
                'name' => '填空题',
                'actions' => array(
                    'create' => 'AppBundle:Question/FillQuestion:create',
                    'edit' => 'AppBundle:Question/FillQuestion:edit',
                    'show' => 'AppBundle:Question/FillQuestion:show',
                ),
				'testActions' => array(
                    'create' => 'AppBundle:TestQuestion/FillQuestion:create',
                    'edit' => 'AppBundle:TestQuestion/FillQuestion:edit',
                    'show' => 'AppBundle:TestQuestion/FillQuestion:show',
                ),
                'templates' => array(
                    'do' => 'question/fill-do.html.twig',
                ),
                'hasMissScore' => 0,
            ),
            'material' => array(
                'name' => '材料题',
                'actions' => array(
                    'create' => 'AppBundle:Question/MaterialQuestion:create',
                    'edit' => 'AppBundle:Question/MaterialQuestion:edit',
                    'show' => 'AppBundle:Question/MaterialQuestion:show',
                ),
				'testActions' => array(
                    'create' => 'AppBundle:TestQuestion/MaterialQuestion:create',
                    'edit' => 'AppBundle:TestQuestion/MaterialQuestion:edit',
                    'show' => 'AppBundle:TestQuestion/MaterialQuestion:show',
                ),
                'templates' => array(
                    'do' => 'question/material-do.html.twig',
                ),
                'hasMissScore' => 0,
            ),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function register(Container $container)
    {
        $container['question_type.choice'] = function ($biz) {
            $obj = new Choice();
            $obj->setBiz($biz);

            return $obj;
        };
        $container['question_type.single_choice'] = function ($biz) {
            $obj = new SingleChoice();
            $obj->setBiz($biz);

            return $obj;
        };
        $container['question_type.uncertain_choice'] = function ($biz) {
            $obj = new UncertainChoice();
            $obj->setBiz($biz);

            return $obj;
        };
        $container['question_type.determine'] = function ($biz) {
            $obj = new Determine();
            $obj->setBiz($biz);

            return $obj;
        };
        $container['question_type.essay'] = function ($biz) {
            $obj = new Essay();
            $obj->setBiz($biz);

            return $obj;
        };
        $container['question_type.fill'] = function ($biz) {
            $obj = new Fill();
            $obj->setBiz($biz);

            return $obj;
        };
        $container['question_type.material'] = function ($biz) {
            $obj = new Material();
            $obj->setBiz($biz);

            return $obj;
        };

        $container['testpaper_pattern.questionType'] = function ($container) {
            return new QuestionTypePattern($container);
        };
    }
}
