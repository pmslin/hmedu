<?php

/* testpaper/result.html.twig */
class __TwigTemplate_6762253b01b6e35ae9a4b34d5af8ad630fbd981c9cbdbcacea9909e2c9e91644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("testpaper/testpaper-layout.html.twig", "testpaper/result.html.twig", 1);
        $this->blocks = array(
            'paper_result_bar' => array($this, 'block_paper_result_bar'),
            'paper_warning' => array($this, 'block_paper_warning'),
            'paper_sidebar' => array($this, 'block_paper_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testpaper/testpaper-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/perfect-scrollbar.js", 2 => "libs/jquery-timer.js", 3 => "app/js/testpaper/result/index.js"));
        // line 9
        $context["questionTypeDict"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 10
        if ( !twig_test_empty(((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) ? $context["action"] : null), "")) : ("")))) {
            // line 11
            $context["showHeader"] = 1;
            // line 12
            $context["isIframeBody"] = 0;
        } else {
            // line 14
            $context["showHeader"] = 0;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_paper_result_bar($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("testpaper/part/paper-result-objective.html.twig", "testpaper/result.html.twig", 6)->display($context);
    }

    // line 17
    public function block_paper_warning($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "userId", array())))) {
            // line 19
            echo "    ";
            if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing")) {
                // line 20
                echo "      <div class=\"alert alert-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("老师正在批阅试卷，批阅完成后会以站内私信通知您批阅结果，请稍等。"), "html", null, true);
                echo "</div>
    ";
            } elseif (($this->getAttribute(            // line 21
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                // line 22
                echo "      ";
                if ($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "teacherSay", array())) {
                    // line 23
                    echo "        <div class=\"alert alert-success\">
          <div class=\"\"><strong>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评语："), "html", null, true);
                    echo "</strong></div>
          <div class=\"mtm\">";
                    // line 25
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "teacherSay", array()));
                    echo "</div>
        </div>
      ";
                }
                // line 28
                echo "      ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "passedStatus", array()) == "unpassed") && ((array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) ? $context["target"] : null), null)) : (null)))) {
                    // line 29
                    echo "        ";
                    if ((($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "doTimes", array()), "0")) : ("0"))) {
                        // line 30
                        echo "          <div class=\"alert alert-danger\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您未通过考试"), "html", null, true);
                        echo "</div>
        ";
                    } elseif (((($this->getAttribute(                    // line 31
(isset($context["target"]) ? $context["target"] : null), "redoInterval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "redoInterval", array()), "0")) : ("0")) && (twig_date_format_filter($this->env, "now", "U") < ($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "checkedTime", array()) + ($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "redoInterval", array()) * 3600))))) {
                        // line 32
                        echo "          ";
                        $context["countTime"] = twig_date_format_filter($this->env, ($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "checkedTime", array()) + ($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "redoInterval", array()) * 3600)), "Y-m-d H:i:s");
                        // line 33
                        echo "          <div class=\"alert alert-danger\">
            ";
                        // line 34
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您未通过考试，%countTime%后可重考，请复习", array("%countTime%" => (("<span class=\"color-success\">" . (isset($context["countTime"]) ? $context["countTime"] : null)) . " </span>")));
                        echo "
          </div>
        ";
                    } else {
                        // line 37
                        echo "          <div class=\"alert alert-danger\">
            您未通过考试，请<a href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_do", array("lessonId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "lessonId", array()), "testId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "testId", array()))), "html", null, true);
                        echo "\">重新参加考试</a>，或者重新学习课程。
          </div>
        ";
                    }
                    // line 41
                    echo "      ";
                } elseif (twig_in_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "passedStatus", array()), array(0 => "passed", 1 => "good", 2 => "excellent"))) {
                    // line 42
                    echo "        <div class=\"alert alert-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("恭喜您已通过本次考试。"), "html", null, true);
                    echo "</div>
      ";
                }
                // line 44
                echo "    ";
            }
            // line 45
            echo "  ";
        }
    }

    // line 48
    public function block_paper_sidebar($context, array $blocks = array())
    {
        // line 49
        echo "
";
        // line 50
        if (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "submitted")) || (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")))) {
            // line 51
            echo "
  <div class=\"testpaper-card ";
            // line 52
            echo twig_escape_filter($this->env, ((array_key_exists("testpaperCardClass", $context)) ? (_twig_default_filter((isset($context["testpaperCardClass"]) ? $context["testpaperCardClass"] : null), "")) : ("")), "html", null, true);
            echo " ";
            if (twig_test_empty(((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) ? $context["action"] : null), "")) : ("")))) {
                echo "affix";
            }
            echo "\" >
    ";
            // line 53
            if ((((((array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) ? $context["target"] : null), null)) : (null)) &&  !(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "doTimes", array()), "0")) : ("0"))) && ($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) && ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)) == $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "userId", array())))) {
                // line 54
                echo "      ";
                if ((twig_date_format_filter($this->env, "now", "U") < ($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "checkedTime", array()) + ($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "redoInterval", array()) * 3600)))) {
                    // line 55
                    echo "        <div class=\"testpaper-timer\">
          ";
                    // line 56
                    $context["redoTime"] = (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "checkedTime", array()) + ($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "redoInterval", array()) * 3600)) - twig_date_format_filter($this->env, "now", "U"));
                    // line 57
                    echo "          重考倒计时:
          <span class=\"timer js-testpaper-redo-timer\" data-time=\"";
                    // line 58
                    echo twig_escape_filter($this->env, (isset($context["redoTime"]) ? $context["redoTime"] : null), "html", null, true);
                    echo "\">00:00:00</span>
          <a class=\"btn btn-success do-test\" id=\"finishPaper\" href=\"";
                    // line 59
                    if (( !twig_test_empty(((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) ? $context["action"] : null), "")) : (""))) && ((array_key_exists("task", $context)) ? (_twig_default_filter((isset($context["task"]) ? $context["task"] : null), null)) : (null)))) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_do", array("lessonId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "lessonId", array()), "testId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "testId", array()))), "html", null, true);
                    }
                    echo "\" disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("再考一次"), "html", null, true);
                    echo "</a>
        </div>
      ";
                } else {
                    // line 62
                    echo "        <div class=\"testpaper-timer\">
          <a class=\"btn btn-success do-test\" id=\"finishPaper\" href=\"";
                    // line 63
                    if (( !twig_test_empty(((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) ? $context["action"] : null), "")) : (""))) && ((array_key_exists("task", $context)) ? (_twig_default_filter((isset($context["task"]) ? $context["task"] : null), null)) : (null)))) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_do", array("lessonId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "lessonId", array()), "testId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "testId", array()))), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("再考一次"), "html", null, true);
                    echo "</a>
        </div>
      ";
                }
                // line 66
                echo "    ";
            }
            // line 67
            echo "
    <div class=\"panel panel-default \">
      <div class=\"panel-heading\">
        ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答题卡"), "html", null, true);
            echo "
        ";
            // line 71
            if ((((array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) ? $context["target"] : null), null)) : (null)) && (($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "doTimes", array()), "0")) : ("0")))) {
                // line 72
                echo "          <span class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("本次考试仅一次机会"), "html", null, true);
                echo "</span>
        ";
            }
            // line 74
            echo "        ";
            if (((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null))) {
                // line 75
                echo "          <a class=\"pull-right link-medium\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"bottom\" data-trigger=\"hover\" data-content='<div>本次考试共<span class=\"color-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "itemCount", array()), "html", null, true);
                echo "题</span>，总分<span class=\"color-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "score", array()), "html", null, true);
                echo "分</span>";
                if (((($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array(), "any", false, true), "type", array()), null)) : (null)) == "score")) {
                    echo "，及格为<span class=\"color-primary\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array(), "any", false, true), "finishScore", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array(), "any", false, true), "finishScore", array()), 0)) : (0)), "html", null, true);
                    echo "</span>分";
                }
                echo "。";
                if (((($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "limitedTime", array()), (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), 0)) : (0)))) : ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), 0)) : (0)))) > 0)) {
                    echo "请在<span class=\"color-primary\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "limitedTime", array()), (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), 0)) : (0)))) : ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), 0)) : (0)))), "html", null, true);
                    echo "分钟</span>内作答。";
                }
                echo "</div>'><i class=\"es-icon es-icon-info\"></i></a>
        ";
            }
            // line 77
            echo "      </div>
      <div class=\"panel-body\">
        <div class=\"js-panel-card panel-card\">
          ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("questionTypes", $context)) ? (_twig_default_filter((isset($context["questionTypes"]) ? $context["questionTypes"] : null), array())) : (array())));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 81
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypeDict"]) ? $context["questionTypeDict"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "</p>
            ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 83
                    echo "              ";
                    if (($this->getAttribute($context["question"], "type", array()) == "material")) {
                        // line 84
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["question"], "subs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "subs", array()), array())) : (array())));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["questionSub"]) {
                            // line 85
                            echo "                  ";
                            $this->loadTemplate("testpaper/part/paper-card-choice.html.twig", "testpaper/result.html.twig", 85)->display(array_merge($context, array("paperResult" => (isset($context["paperResult"]) ? $context["paperResult"] : null), "question" => $context["questionSub"], "seq" => $this->getAttribute($context["questionSub"], "seq", array()))));
                            // line 86
                            echo "                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionSub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 87
                        echo "              ";
                    } else {
                        // line 88
                        echo "                ";
                        $this->loadTemplate("testpaper/part/paper-card-choice.html.twig", "testpaper/result.html.twig", 88)->display(array_merge($context, array("paperResult" => (isset($context["paperResult"]) ? $context["paperResult"] : null), "question" => $context["question"], "seq" => $this->getAttribute($context["question"], "seq", array()))));
                        // line 89
                        echo "              ";
                    }
                    // line 90
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "          ";
            $this->loadTemplate("testpaper/part/card-choice-explain.html.twig", "testpaper/result.html.twig", 92)->display($context);
            // line 93
            echo "        </div>
      </div>
      <div class=\"panel-footer\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" id=\"showWrong\" />
            <span class=\"text-info\">";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("只看错题"), "html", null, true);
            echo "</span>
          </label>
        </div>
      </div>

    </div>
  </div>
";
        }
        // line 107
        echo "
";
    }

    public function getTemplateName()
    {
        return "testpaper/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 107,  372 => 99,  364 => 93,  361 => 92,  347 => 91,  333 => 90,  330 => 89,  327 => 88,  324 => 87,  310 => 86,  307 => 85,  289 => 84,  286 => 83,  269 => 82,  264 => 81,  247 => 80,  242 => 77,  222 => 75,  219 => 74,  213 => 72,  211 => 71,  207 => 70,  202 => 67,  199 => 66,  187 => 63,  184 => 62,  172 => 59,  168 => 58,  165 => 57,  163 => 56,  160 => 55,  157 => 54,  155 => 53,  147 => 52,  144 => 51,  142 => 50,  139 => 49,  136 => 48,  131 => 45,  128 => 44,  122 => 42,  119 => 41,  113 => 38,  110 => 37,  104 => 34,  101 => 33,  98 => 32,  96 => 31,  91 => 30,  88 => 29,  85 => 28,  79 => 25,  75 => 24,  72 => 23,  69 => 22,  67 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  48 => 6,  45 => 5,  41 => 1,  38 => 14,  35 => 12,  33 => 11,  31 => 10,  29 => 9,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/result.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\result.html.twig");
    }
}
