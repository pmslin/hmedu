<?php

/* testpaper/part/paper-result-objective.html.twig */
class __TwigTemplate_be8aba88265a5d5ed50a7fe05a9c1acbbf3963012d949cad6c386b5c88c8c374 extends Twig_Template
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
        $context["questionTypesDict"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 2
        echo "
<div class=\"media testpaper-result\">
  <div class=\"testpaper-result-total\">
    <div class=\"well\">
      <div class=\"testpaper-result-total-score\">
        ";
        // line 7
        if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
            // line 8
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "score", array()), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "?
        ";
        }
        // line 11
        echo "        <small>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
        echo "</small>
      </div>
      <small class=\"color-gray\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总分%score%分", array("%score%" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "score", array()))), "html", null, true);
        echo "</small>
    </div>
  </div>
  <div class=\"media-body\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-condensed testpaper-result-table\">
        <thead>
          <th></th>
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("questionTypes", $context)) ? (_twig_default_filter((isset($context["questionTypes"]) ? $context["questionTypes"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            if ((($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), null)) : (null))) {
                // line 22
                echo "            <th>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), $context["type"], array(), "array"), "html", null, true);
                echo " <small class=\"color-gray\">(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "all", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("道"), "html", null, true);
                echo ")</small></th>
          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </thead>
        <tbody>
          <tr>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答对"), "html", null, true);
        echo "</th>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("questionTypes", $context)) ? (_twig_default_filter((isset($context["questionTypes"]) ? $context["questionTypes"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            if ((($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), null)) : (null))) {
                // line 29
                echo "              ";
                if (($context["type"] == "essay")) {
                    // line 30
                    echo "                ";
                    if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                        // line 31
                        echo "                  <td><span class=\"color-success\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "right", array()), "html", null, true);
                        echo " <small>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("道"), "html", null, true);
                        echo "</small></span></td>
                ";
                    } else {
                        // line 33
                        echo "                  <td rowspan=\"4\" style=\"vertical-align:middle\"><span class=\"color-success\" style=\"font-size:40px\">?</span></td>
                ";
                    }
                    // line 35
                    echo "              ";
                } else {
                    // line 36
                    echo "                ";
                    if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                        // line 37
                        echo "                  <td><span class=\"color-success\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "right", array()), "html", null, true);
                        echo " <small>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("道"), "html", null, true);
                        echo "</small></span></td>
                ";
                    } else {
                        // line 39
                        echo "                  <td rowspan=\"4\" style=\"vertical-align:middle\"><span class=\"color-success\" style=\"font-size:40px\">?</span></td>
                ";
                    }
                    // line 41
                    echo "              ";
                }
                // line 42
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "          </tr>
          <tr>
            <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答错"), "html", null, true);
        echo "</th>
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("questionTypes", $context)) ? (_twig_default_filter((isset($context["questionTypes"]) ? $context["questionTypes"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            if ((($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), null)) : (null))) {
                // line 47
                echo "              ";
                if (($context["type"] == "essay")) {
                    // line 48
                    echo "                ";
                    if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                        // line 49
                        echo "                  <td><span class=\"color-danger\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "wrong", array()) + $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array())), "html", null, true);
                        echo " <small>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("道"), "html", null, true);
                        echo "</small></span></td>
                ";
                    }
                    // line 51
                    echo "              ";
                } else {
                    // line 52
                    echo "                ";
                    if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                        // line 53
                        echo "                  <td>
                    <span class=\"color-danger\">
                      ";
                        // line 55
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "wrong", array()) + $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array())), "html", null, true);
                        echo "
                      <small>
                        ";
                        // line 57
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("道"), "html", null, true);
                        echo "
                        ";
                        // line 58
                        if ((twig_in_filter($context["type"], array(0 => "choice", 1 => "uncertain_choice")) && ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array()) != 0))) {
                            // line 59
                            echo "                          ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("（其中有%partRightNum%道漏选）", array("%partRightNum%" => $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array()))), "html", null, true);
                            echo "
                        ";
                        }
                        // line 61
                        echo "                      </small>
                    </span>
                  </td>
                ";
                    }
                    // line 65
                    echo "              ";
                }
                // line 66
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "          </tr>
          <tr>
            <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未答"), "html", null, true);
        echo "</th>
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("questionTypes", $context)) ? (_twig_default_filter((isset($context["questionTypes"]) ? $context["questionTypes"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            if ((($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), null)) : (null))) {
                // line 71
                echo "              ";
                if (($context["type"] == "essay")) {
                    // line 72
                    echo "                ";
                    if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                        // line 73
                        echo "                  <td><span class=\"color-gray\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "noAnswer", array()), "html", null, true);
                        echo " <small>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("道"), "html", null, true);
                        echo "</small></span></td>
                ";
                    }
                    // line 75
                    echo "              ";
                } else {
                    // line 76
                    echo "                ";
                    if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                        // line 77
                        echo "                  <td><span class=\"color-gray\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "noAnswer", array()), "html", null, true);
                        echo " <small>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("道"), "html", null, true);
                        echo "</small></span></td>
                ";
                    }
                    // line 79
                    echo "              ";
                }
                // line 80
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "          </tr>
          <tr>
            <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("得分"), "html", null, true);
        echo "</th>
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("questionTypes", $context)) ? (_twig_default_filter((isset($context["questionTypes"]) ? $context["questionTypes"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            if ((($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), null)) : (null))) {
                // line 85
                echo "              ";
                if (($context["type"] == "essay")) {
                    // line 86
                    echo "                ";
                    if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                        // line 87
                        echo "                  <td><span class=\"text-score\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "score", array()), "html", null, true);
                        echo " <small>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
                        echo "</small></span></td>
                ";
                    }
                    // line 89
                    echo "              ";
                } else {
                    // line 90
                    echo "                ";
                    if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                        // line 91
                        echo "                  <td><span class=\"text-score\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "score", array()), "html", null, true);
                        echo " <small>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
                        echo "</small></span></td>
                ";
                    }
                    // line 93
                    echo "              ";
                }
                // line 94
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "testpaper/part/paper-result-objective.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 95,  300 => 94,  297 => 93,  289 => 91,  286 => 90,  283 => 89,  275 => 87,  272 => 86,  269 => 85,  264 => 84,  260 => 83,  256 => 81,  249 => 80,  246 => 79,  238 => 77,  235 => 76,  232 => 75,  224 => 73,  221 => 72,  218 => 71,  213 => 70,  209 => 69,  205 => 67,  198 => 66,  195 => 65,  189 => 61,  183 => 59,  181 => 58,  177 => 57,  172 => 55,  168 => 53,  165 => 52,  162 => 51,  154 => 49,  151 => 48,  148 => 47,  143 => 46,  139 => 45,  135 => 43,  128 => 42,  125 => 41,  121 => 39,  113 => 37,  110 => 36,  107 => 35,  103 => 33,  95 => 31,  92 => 30,  89 => 29,  84 => 28,  80 => 27,  75 => 24,  62 => 22,  57 => 21,  46 => 13,  40 => 11,  36 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/part/paper-result-objective.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\part\\paper-result-objective.html.twig");
    }
}
