<?php

/* question/material-do.html.twig */
class __TwigTemplate_b7f8d3e7e2675dcc2c6d04f485d97cb309cce08cf0565267b12faf355a04bf89 extends Twig_Template
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
        echo "<div class=\"material\">
\t<div class=\"well testpaper-question-stem-material\" id=\"question";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t";
        // line 3
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->env->getExtension('AppBundle\Twig\WebExtension')->fillQuestionStemHtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())));
        echo "
\t\t";
        // line 4
        $this->loadTemplate("attachment/widget/list.html.twig", "question/material-do.html.twig", 4)->display(array_merge($context, array("targetType" => "question.stem", "targetId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))));
        // line 5
        echo "\t</div>

\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subs", array()), array())) : (array())));
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
            // line 8
            echo "    ";
            $context["questionTemplate"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypeTemplate($this->getAttribute($context["subQuestion"], "type", array()), "do");
            // line 9
            echo "    ";
            if ((isset($context["questionTemplate"]) ? $context["questionTemplate"] : null)) {
                // line 10
                echo "      ";
                $this->loadTemplate((isset($context["questionTemplate"]) ? $context["questionTemplate"] : null), "question/material-do.html.twig", 10)->display(array_merge($context, array("question" => $context["subQuestion"], "parentQuestion" => (isset($context["question"]) ? $context["question"] : null))));
                // line 11
                echo "    ";
            }
            // line 12
            echo "\t";
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
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "question/material-do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  36 => 7,  32 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/material-do.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question\\material-do.html.twig");
    }
}
