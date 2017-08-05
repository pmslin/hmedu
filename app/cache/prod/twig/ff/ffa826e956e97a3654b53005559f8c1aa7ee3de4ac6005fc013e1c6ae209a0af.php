<?php

/* testpaper/testpaper-card.html.twig */
class __TwigTemplate_c39f2fd5e2af1459186d0e7faa5fbc405c2f5c3a1895139f8d0a15c4deb4b864 extends Twig_Template
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
        $context["questionTypeDict"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 2
        if ((((($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "limitedTime", array()), 0)) : (0)) > 0) && ((array_key_exists("showTimer", $context)) ? (_twig_default_filter((isset($context["showTimer"]) ? $context["showTimer"] : null), 1)) : (1)))) {
            // line 3
            echo "\t<div class=\"testpaper-timer\">
\t\t<span class=\"pull-left\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("倒计时"), "html", null, true);
            echo "：</span><span class=\"timer js-testpaper-timer\" data-time=\"";
            echo twig_escape_filter($this->env, (isset($context["limitedTime"]) ? $context["limitedTime"] : null), "html", null, true);
            echo "\">00:00:00</span>
\t\t<a class=\"btn-pause js-btn-pause\" href=\"javascript:;\">
\t\t\t<i class=\"es-icon es-icon-zanting pause\"></i>
\t\t\t<i class=\"es-icon es-icon-bofang play\"></i>
\t\t</a>
\t</div>
";
        }
        // line 11
        echo "
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答题卡"), "html", null, true);
        echo "
\t\t";
        // line 15
        if ((((array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) ? $context["target"] : null), null)) : (null)) && (($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "doTimes", array()), "0")) : ("0")))) {
            // line 16
            echo "\t\t\t<span class=\"color-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("本次考试仅一次机会"), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 18
        echo "\t\t<a class=\"pull-right link-medium\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"bottom\" data-trigger=\"hover\" data-content='<div>本次考试共<span class=\"color-primary\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "itemCount", array()), "html", null, true);
        echo "题</span>，总分<span class=\"color-primary\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "score", array()), "html", null, true);
        echo "分</span>
\t\t";
        // line 19
        if (((($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array(), "any", false, true), "type", array()), null)) : (null)) == "score")) {
            // line 20
            echo "\t\t\t，及格为<span class=\"color-primary\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array(), "any", false, true), "finishScore", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array(), "any", false, true), "finishScore", array()), 0)) : (0)), "html", null, true);
            echo "</span>分
\t\t";
        }
        // line 21
        echo "。
\t\t";
        // line 22
        if (((($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "limitedTime", array()), 0)) : (0)) > 0)) {
            echo "请在<span class=\"color-primary\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "limitedTime", array()), 0)) : (0)), "html", null, true);
            echo "分钟</span>内作答。
\t\t";
        }
        // line 23
        echo "</div>'><i class=\"es-icon es-icon-info\"></i></a>
\t</div>
\t<div class=\"panel-body\">
\t\t<div class=\"js-panel-card panel-card\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("questionTypes", $context)) ? (_twig_default_filter((isset($context["questionTypes"]) ? $context["questionTypes"] : null), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            if ((($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array"), null)) : (null))) {
                // line 28
                echo "\t\t\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypeDict"]) ? $context["questionTypeDict"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "</p>
\t\t\t";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array"), null)) : (null)));
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
                    // line 30
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["question"], "type", array()) == "material")) {
                        // line 31
                        echo "\t\t\t\t\t";
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
                        foreach ($context['_seq'] as $context["_key"] => $context["subQuestion"]) {
                            // line 32
                            echo "\t\t\t\t\t\t";
                            $this->loadTemplate("testpaper/part/paper-card-choice.html.twig", "testpaper/testpaper-card.html.twig", 32)->display(array_merge($context, array("paperResult" => (isset($context["paperResult"]) ? $context["paperResult"] : null), "question" => $context["subQuestion"], "seq" => (($this->getAttribute($context["question"], "seq", array()) + $this->getAttribute($context["loop"], "index", array())) - 1))));
                            // line 33
                            echo "\t\t\t\t\t";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subQuestion'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "\t\t\t\t";
                    } else {
                        // line 35
                        echo "\t\t\t\t\t";
                        $this->loadTemplate("testpaper/part/paper-card-choice.html.twig", "testpaper/testpaper-card.html.twig", 35)->display(array_merge($context, array("paperResult" => (isset($context["paperResult"]) ? $context["paperResult"] : null), "question" => $context["question"], "seq" => $this->getAttribute($context["question"], "seq", array()))));
                        // line 36
                        echo "\t\t\t\t";
                    }
                    // line 37
                    echo "\t\t\t";
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
                // line 38
                echo "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</div>
\t</div>
\t<div class=\"panel-footer text-right\">
\t\t";
        // line 42
        if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)) > 0)) {
            // line 43
            echo "\t\t\t<input type=\"hidden\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_do_suspend", array("resultId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()))), "html", null, true);
            echo "\" data-role=\"test-suspend\">

\t\t\t<button class=\"btn btn-primary do-test\" id=\"finishPaper\" data-ajax=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_result_submit", array("resultId" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)))), "html", null, true);
            echo "\"  data-toggle=\"modal\" data-target=\"#testpaper-finished-dialog\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("马上交卷"), "html", null, true);
            echo "</button>
\t\t";
        } else {
            // line 47
            echo "\t\t\t<button class=\"btn btn-primary\" disabled=\"disabled\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("马上交卷"), "html", null, true);
            echo "</button>
\t\t";
        }
        // line 49
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "testpaper/testpaper-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 49,  210 => 47,  203 => 45,  197 => 43,  195 => 42,  190 => 39,  180 => 38,  166 => 37,  163 => 36,  160 => 35,  157 => 34,  143 => 33,  140 => 32,  122 => 31,  119 => 30,  102 => 29,  97 => 28,  86 => 27,  80 => 23,  73 => 22,  70 => 21,  64 => 20,  62 => 19,  55 => 18,  49 => 16,  47 => 15,  43 => 14,  38 => 11,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/testpaper-card.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\testpaper-card.html.twig");
    }
}
