<?php

/* question/essay-do.html.twig */
class __TwigTemplate_ebed2fd7947bb07425711cf103baeed8a7a44d6c0643842b1bb8abda7cb1a9ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"testpaper-question testpaper-question-essay js-testpaper-question ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.testpaper_watermark")) {
            echo "js-testpaper-watermark";
        }
        echo "\" data-watermark-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cloud_testpaper_watermark");
        echo "\" id=\"question";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\">
\t<div class=\"testpaper-question-body\">
\t  ";
        // line 3
        $this->loadTemplate("question/part/question-stem.html.twig", "question/essay-do.html.twig", 3)->display($context);
        // line 4
        echo "  </div>
\t";
        // line 5
        if (twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished"))) {
            // line 6
            echo "
\t\t";
            // line 7
            if ((((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : null), null)) : (null)) == "teacher")) {
                // line 8
                echo "
\t\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t\t  <div class=\"testpaper-question-result\">
\t\t\t\t\t<ul class=\"nav nav-pills nav-mini mbm\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#studentAnswer";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回答"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#teacherAnswer";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("参考答案"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content mbl\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"studentAnswer";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 17
                if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), "")) : ("")) ||  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array()), "attachment", array())))) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), "")) : ("")));
                    echo "

\t\t\t\t\t\t\t\t";
                    // line 20
                    $this->loadTemplate("attachment/question-answer-attachment.html.twig", "question/essay-do.html.twig", 20)->display(array_merge($context, array("targetType" => "question.answer", "targetId" => (($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "id", array()), 0)) : (0)), "showList" => 1)));
                    // line 21
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t<span class=\"color-gray\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回答"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"teacherAnswer";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 27
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), 0, array(), "array"));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t\t";
                // line 33
                $this->loadTemplate("question/part/show-teacher-comment.html.twig", "question/essay-do.html.twig", 33)->display(array_merge($context, array("showScore" => ((array_key_exists("showScore", $context)) ? (_twig_default_filter((isset($context["showScore"]) ? $context["showScore"] : null), 1)) : (1)))));
                // line 34
                echo "\t\t\t\t</div>
\t\t\t</div>

\t\t";
            } elseif ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("questions.testpaper_answers_show_mode") == "submitted") || twig_in_filter($this->getAttribute(            // line 37
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), array(0 => "finished", 1 => "reviewing")))) {
                // line 38
                echo "\t\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t\t  <div class=\"testpaper-question-result\">
\t\t\t    <div class=\"testpaper-question-result-suggested\">
\t\t\t\t    <div class=\"testpaper-question-result-title\">";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("参考答案："), "html", null, true);
                echo "</div>
\t\t\t\t    <div>";
                // line 42
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), 0, array(), "array"));
                echo "</div>
\t\t\t    </div>
\t\t\t    <div class=\"testpaper-question-result-your\">
\t\t\t\t    <div class=\"testpaper-question-result-title\">";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你的回答："), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
                // line 47
                if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), "")) : ("")) ||  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array()), "attachment", array())))) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), "")) : ("")));
                    echo "

\t\t\t\t\t\t\t\t";
                    // line 50
                    $this->loadTemplate("attachment/question-answer-attachment.html.twig", "question/essay-do.html.twig", 50)->display(array_merge($context, array("targetType" => "question.answer", "targetId" => (($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "id", array()), 0)) : (0)), "showList" => 1)));
                    // line 51
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回答"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t</div>
\t\t\t    </div>
\t\t\t    
\t\t\t  ";
                // line 57
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 58
                    echo "\t\t\t  \t<div class=\"testpaper-question-result-score mtl\">
\t\t\t  \t\t";
                    // line 59
                    if (((array_key_exists("showScore", $context)) ? (_twig_default_filter((isset($context["showScore"]) ? $context["showScore"] : null), 1)) : (1))) {
                        // line 60
                        echo "\t\t\t  \t\t\t<div class=\"testpaper-question-result-title\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("得分："), "html", null, true);
                        echo "<strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%testResult.score% 分", array("%testResult.score%" => (($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "score", array()), 0)) : (0)))), "html", null, true);
                        echo "</strong></div>
\t\t\t  \t\t";
                    }
                    // line 62
                    echo "\t\t\t  \t</div>
\t\t\t  \t";
                    // line 63
                    if (((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "teacherSay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "teacherSay", array()), "")) : ("")) != "")) {
                        // line 64
                        echo "\t\t\t  \t\t<div class=\"testpaper-question-teacherSay mtl\">
\t\t\t\t\t\t\t<div class=\"testpaper-question-result-title\">";
                        // line 65
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评语："), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t<div>";
                        // line 66
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "teacherSay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "teacherSay", array()), "")) : ("")));
                        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 69
                    echo "\t\t\t  ";
                } else {
                    // line 70
                    echo "\t\t\t  \t<div class=\"testpaper-question-score mtl\">
\t\t\t  \t\t<div class=\"testpaper-question-result-title\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("老师正在批阅！"), "html", null, true);
                    echo "</div>
\t\t\t  \t</div>
\t\t\t  ";
                }
                // line 74
                echo "\t\t\t  </div>

\t\t\t\t<div class=\"testpaper-question-actions pull-right mts\">
\t\t\t\t\t";
                // line 77
                $this->loadTemplate("question/part/flag.html.twig", "question/essay-do.html.twig", 77)->display(array_merge($context, array("flags" => array(0 => "favorite", 1 => "analysis"))));
                // line 78
                echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
                // line 81
                $this->loadTemplate("question/part/show-analysis.html.twig", "question/essay-do.html.twig", 81)->display(array_merge($context, array("showAnalysis" => 1)));
                // line 82
                echo "\t\t";
            }
            // line 83
            echo "
\t";
        } else {
            // line 85
            echo "
\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-essay-inputs\" data-role='js-answer-div-";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "'>
\t\t  \t<textarea class=\"form-control essay-input-short\" rows=\"1\" style=\"overflow:hidden;line-height:20px;\">";
            // line 88
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null))) {
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array()), "answer", array()), 0, array(), "array"));
            }
            echo "</textarea>

\t\t\t\t<textarea id=\"question-input-long-";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "\" class=\"form-control essay-input-long\" data-type=\"essay\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "\" style=\"display:none;\" data-image-upload-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
            echo "\">";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null))) {
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null)));
            }
            echo "</textarea>

\t\t\t\t<a class=\"btn btn-link btn-muted btn-sm essay-input-btn\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up color-gray\"></span> ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
            echo "</a>

\t\t\t\t<br/>

\t\t\t\t";
            // line 96
            if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)) > 0)) {
                // line 97
                echo "\t\t\t\t\t";
                $this->loadTemplate("attachment/question-answer-attachment.html.twig", "question/essay-do.html.twig", 97)->display(array_merge($context, array("targetType" => "question.answer", "targetId" => (($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "id", array()), 0)) : (0)), "showLabel" => false, "useType" => true, "currentTarget" => ("js-answer-div-" . $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array())))));
                // line 98
                echo "\t\t\t\t";
            }
            // line 99
            echo "
\t\t  </div>

\t\t  <div class=\"testpaper-question-actions pull-right mts\">
\t\t  \t";
            // line 103
            $this->loadTemplate("question/part/flag.html.twig", "question/essay-do.html.twig", 103)->display(array_merge($context, array("flags" => array(0 => "mark", 1 => "favorite"), "resultStatus" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)))));
            // line 104
            echo "\t\t  </div>
\t  </div>

\t  ";
            // line 107
            if (((array_key_exists("showAnswer", $context)) ? (_twig_default_filter((isset($context["showAnswer"]) ? $context["showAnswer"] : null), 0)) : (0))) {
                // line 108
                echo "\t\t  <div class=\"testpaper-preview-answer clearfix mtl mbl\">
\t\t  \t<div class=\"testpaper-question-result\">
\t\t\t    <div class=\"testpaper-question-result-suggested\">
\t\t\t\t    <div class=\"testpaper-question-result-title\">";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("参考答案："), "html", null, true);
                echo "</div>
\t\t\t\t    <div>";
                // line 112
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), 0, array(), "array"));
                echo "</div>
\t\t\t    </div>
\t\t\t\t</div>
\t\t  </div>
\t  ";
            }
            // line 117
            echo "
\t\t";
            // line 118
            $this->loadTemplate("question/part/show-analysis.html.twig", "question/essay-do.html.twig", 118)->display(array_merge($context, array("showAnalysis" => ((array_key_exists("showAnalysis", $context)) ? (_twig_default_filter((isset($context["showAnalysis"]) ? $context["showAnalysis"] : null), 0)) : (0)))));
            // line 119
            echo "\t  
\t";
        }
        // line 121
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "question/essay-do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 121,  309 => 119,  307 => 118,  304 => 117,  296 => 112,  292 => 111,  287 => 108,  285 => 107,  280 => 104,  278 => 103,  272 => 99,  269 => 98,  266 => 97,  264 => 96,  257 => 92,  242 => 90,  235 => 88,  231 => 87,  227 => 85,  223 => 83,  220 => 82,  218 => 81,  213 => 78,  211 => 77,  206 => 74,  200 => 71,  197 => 70,  194 => 69,  188 => 66,  184 => 65,  181 => 64,  179 => 63,  176 => 62,  168 => 60,  166 => 59,  163 => 58,  161 => 57,  156 => 54,  150 => 52,  147 => 51,  145 => 50,  139 => 48,  137 => 47,  132 => 45,  126 => 42,  122 => 41,  117 => 38,  115 => 37,  110 => 34,  108 => 33,  99 => 27,  95 => 26,  92 => 25,  86 => 23,  82 => 21,  80 => 20,  74 => 18,  72 => 17,  68 => 16,  60 => 13,  49 => 12,  43 => 8,  41 => 7,  38 => 6,  36 => 5,  33 => 4,  31 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/essay-do.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question\\essay-do.html.twig");
    }
}
