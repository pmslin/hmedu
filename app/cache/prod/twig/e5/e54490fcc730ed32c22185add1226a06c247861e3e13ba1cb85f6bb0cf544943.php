<?php

/* testpaper/do-test.html.twig */
class __TwigTemplate_ca479cf1b010f2b87bac987ce725f5195de3bb9649095e5abf484a5a4454cdff extends Twig_Template
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
        echo "
";
        // line 2
        $context["questionTypeDict"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 3
        $context["resultStatus"] = (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null));
        // line 4
        echo "

";
        // line 6
        if (((((((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null)) && twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "finished", 1 => "reviewing"))) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "hide")) || (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "reviewing"))) &&  !((array_key_exists("isTeacher", $context)) ? (_twig_default_filter((isset($context["isTeacher"]) ? $context["isTeacher"] : null), 0)) : (0)))) {
        } else {
            // line 8
            echo "
  <form id='teacherCheckForm' autocomplete=\"off\">

    ";
            // line 11
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
                    // line 12
                    echo "      <div class=\"panel panel-default js-testpaper-question-block\" id=\"testpaper-questions-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
        <div class=\"panel-heading\">
          <strong class=\"\">";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypeDict"]) ? $context["questionTypeDict"] : null), $context["type"], array(), "array"), "html", null, true);
                    echo "</strong>
          <small class=\"color-gray\">
            ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共%total.number%题，共%total.score%分", array("%total.number%" => $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "number", array()), "%total.score%" => $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "score", array()))), "html", null, true);
                    if (($this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "missScore", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，漏选得%total.missScore%分", array("%total.missScore%" => $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "missScore", array()))), "html", null, true);
                    }
                    // line 17
                    echo "          </small>
        </div>
        <div class=\"panel-body\">
          ";
                    // line 20
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
                        // line 21
                        echo "            ";
                        if ((($this->getAttribute($context["question"], "isDeleted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "isDeleted", array()), null)) : (null))) {
                            // line 22
                            echo "              ";
                            $this->loadTemplate("question/part/question-delete.html.twig", "testpaper/do-test.html.twig", 22)->display(array_merge($context, array("showScore" => 1, "question" => $context["question"])));
                            // line 23
                            echo "            ";
                        } else {
                            // line 24
                            echo "              ";
                            $context["questionTemplate"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypeTemplate($this->getAttribute($context["question"], "type", array()), "do");
                            // line 25
                            echo "              ";
                            if ((isset($context["questionTemplate"]) ? $context["questionTemplate"] : null)) {
                                // line 26
                                echo "                ";
                                $this->loadTemplate((isset($context["questionTemplate"]) ? $context["questionTemplate"] : null), "testpaper/do-test.html.twig", 26)->display($context);
                                // line 27
                                echo "              ";
                            }
                            // line 28
                            echo "            ";
                        }
                        // line 29
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "        </div>
      </div>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
    ";
            // line 34
            if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "reviewing")) {
                // line 35
                echo "      <textarea name=\"teacherSay\" id=\"teacherSay\" style=\"display:none\"></textarea>
      <input type=\"hidden\" id=\"passedStatus\" name=\"passedStatus\" value=\"\" />
    ";
            }
            // line 38
            echo "
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "testpaper/do-test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  147 => 38,  142 => 35,  140 => 34,  137 => 33,  125 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  70 => 20,  65 => 17,  60 => 16,  55 => 14,  49 => 12,  38 => 11,  33 => 8,  30 => 6,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/do-test.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\do-test.html.twig");
    }
}
