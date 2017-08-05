<?php

/* question/choice-do.html.twig */
class __TwigTemplate_7f766cb48dc5b3a0df19abe1db69742dd8ead4f46f40e5d992e1b0aa119808c0 extends Twig_Template
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
        echo "<div class=\"testpaper-question testpaper-question-choice  js-testpaper-question ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.testpaper_watermark")) {
            echo "js-testpaper-watermark";
        }
        echo "\" data-watermark-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cloud_testpaper_watermark");
        echo "\" id=\"question";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\">
\t";
        // line 2
        $context["keys"] = array();
        // line 3
        echo "\t";
        $context["keys_answer"] = array();
        // line 4
        echo "\t<div class=\"testpaper-question-body\">
    ";
        // line 5
        $this->loadTemplate("question/part/question-stem.html.twig", "question/choice-do.html.twig", 5)->display($context);
        // line 6
        echo "
\t\t<ul class=\"testpaper-question-choices js-testpaper-question-list\">
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array()))) : ("")));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 9
            echo "\t\t\t  ";
            $context["itemClass"] = (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && twig_in_filter($context["key"], $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array())))) ? ("testpaper-question-choice-right") : (""));
            // line 10
            echo "\t\t\t  ";
            $context["choiceIndex"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->chrFilter((65 + $context["key"]));
            // line 11
            echo "
\t\t\t\t<li class=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : null), "html", null, true);
            echo "\"><span class=\"testpaper-question-choice-index\">";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo ".</span> ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($context["choice"]);
            echo "</li>
\t\t\t\t";
            // line 13
            if (twig_in_filter($context["key"], $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()))) {
                // line 14
                echo "\t\t\t\t\t";
                $context["keys"] = twig_array_merge((isset($context["keys"]) ? $context["keys"] : null), array(0 => (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null)));
                // line 15
                echo "\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t";
            if (twig_in_filter($context["key"], (($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array()), array())) : (array())))) {
                // line 17
                echo "\t\t\t\t\t";
                $context["keys_answer"] = twig_array_merge((isset($context["keys_answer"]) ? $context["keys_answer"] : null), array(0 => (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null)));
                // line 18
                echo "\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</ul>
\t</div>
\t";
        // line 22
        if (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "submitted")) || (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")))) {
            // line 23
            echo "\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-result\">
\t\t  \t";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正确答案是"), "html", null, true);
            echo " <strong class=\"color-success\">";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
            echo "</strong>，
\t\t\t\t";
            // line 26
            if (((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array()), "noAnswer")) : ("noAnswer")) == "right")) {
                // line 27
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回答正确"), "html", null, true);
                echo "
\t\t\t\t";
            } elseif (((($this->getAttribute($this->getAttribute(            // line 28
(isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array()), "noAnswer")) : ("noAnswer")) == "partRight")) {
                // line 29
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你的答案是"), "html", null, true);
                echo " <strong class=\"color-danger\">";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys_answer"]) ? $context["keys_answer"] : null), ","), "html", null, true);
                echo "</strong>
\t\t\t\t\t";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。回答部分正确。"), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 31
                if (((array_key_exists("showScore", $context)) ? (_twig_default_filter((isset($context["showScore"]) ? $context["showScore"] : null), 1)) : (1))) {
                    // line 32
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("得分：%testResult.score%分", array("%testResult.score%" => $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array()), "score", array()))), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t";
            } elseif (((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array()), "noAnswer")) : ("noAnswer")) == "wrong")) {
                // line 35
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你的答案是"), "html", null, true);
                echo " <strong class=\"color-danger\">";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys_answer"]) ? $context["keys_answer"] : null), ","), "html", null, true);
                echo "</strong>。";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你答错了"), "html", null, true);
                echo "
\t\t\t\t";
            } elseif (((($this->getAttribute($this->getAttribute(            // line 36
(isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array()), "noAnswer")) : ("noAnswer")) == "noAnswer")) {
                // line 37
                echo "\t\t\t\t  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你未答题"), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 39
            echo "\t\t  </div>

\t\t\t<div class=\"testpaper-question-actions pull-right mts\">
\t\t\t\t";
            // line 42
            $this->loadTemplate("question/part/flag.html.twig", "question/choice-do.html.twig", 42)->display(array_merge($context, array("flags" => array(0 => "favorite", 1 => "analysis"))));
            // line 43
            echo "\t\t\t</div>
\t\t</div>
\t\t";
            // line 45
            $this->loadTemplate("question/part/show-analysis.html.twig", "question/choice-do.html.twig", 45)->display(array_merge($context, array("showAnalysis" => 1)));
            // line 46
            echo "
\t";
        } else {
            // line 48
            echo "\t\t<div class=\"testpaper-question-footer clearfix\">

\t\t  <div class=\"testpaper-question-choice-inputs js-testpaper-question-label\">
\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array()))) : ("")));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 52
                echo "\t\t\t\t\t";
                $context["choiceIndex"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->chrFilter((65 + $context["key"]));
                // line 53
                echo "
\t\t\t\t\t<label class=\"";
                // line 54
                if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "single_choice")) {
                    echo "radio";
                } else {
                    echo "checkbox";
                }
                echo "-inline ";
                if (twig_in_filter((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), (isset($context["keys_answer"]) ? $context["keys_answer"] : null))) {
                    echo "active";
                }
                echo "\">
\t\t\t\t\t\t<input type=\"";
                // line 55
                if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "single_choice")) {
                    echo "radio";
                } else {
                    echo "checkbox";
                }
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), (isset($context["keys_answer"]) ? $context["keys_answer"] : null))) {
                    echo "checked";
                }
                echo " >
\t\t\t\t\t\t";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
                echo "
\t\t\t\t\t</label>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t  </div>

\t\t  <div class=\"testpaper-question-actions pull-right mts\">
\t\t\t\t";
            // line 62
            $this->loadTemplate("question/part/flag.html.twig", "question/choice-do.html.twig", 62)->display(array_merge($context, array("flags" => array(0 => "mark", 1 => "favorite"), "resultStatus" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)))));
            // line 63
            echo "\t\t  </div>
\t\t</div>

\t\t";
            // line 66
            if (((array_key_exists("showAnswer", $context)) ? (_twig_default_filter((isset($context["showAnswer"]) ? $context["showAnswer"] : null), 0)) : (0))) {
                // line 67
                echo "\t\t\t<div class=\"testpaper-preview-answer clearfix mtl mbl\">
\t\t\t\t<div class=\"testpaper-question-result\">
\t\t\t\t";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正确答案是"), "html", null, true);
                echo " <strong class=\"color-success\">";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
                echo "</strong>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 73
            echo "\t";
        }
        // line 74
        echo "
\t";
        // line 75
        $this->loadTemplate("question/part/show-analysis.html.twig", "question/choice-do.html.twig", 75)->display(array_merge($context, array("showAnalysis" => ((array_key_exists("showAnalysis", $context)) ? (_twig_default_filter((isset($context["showAnalysis"]) ? $context["showAnalysis"] : null), 0)) : (0)))));
        // line 76
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "question/choice-do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 76,  256 => 75,  253 => 74,  250 => 73,  241 => 69,  237 => 67,  235 => 66,  230 => 63,  228 => 62,  223 => 59,  214 => 56,  196 => 55,  184 => 54,  181 => 53,  178 => 52,  174 => 51,  169 => 48,  165 => 46,  163 => 45,  159 => 43,  157 => 42,  152 => 39,  146 => 37,  144 => 36,  135 => 35,  132 => 34,  126 => 32,  124 => 31,  120 => 30,  113 => 29,  111 => 28,  106 => 27,  104 => 26,  98 => 25,  94 => 23,  92 => 22,  88 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  44 => 8,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/choice-do.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question\\choice-do.html.twig");
    }
}
