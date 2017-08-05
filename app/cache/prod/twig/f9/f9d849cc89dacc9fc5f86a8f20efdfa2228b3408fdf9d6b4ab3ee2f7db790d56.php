<?php

/* question/part/show-analysis.html.twig */
class __TwigTemplate_aa30698d456af399e9bd9a82023ebd3eef0f0286f68daa54ab33f01dbe48d4ed extends Twig_Template
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
        if (((array_key_exists("showAnalysis", $context)) ? (_twig_default_filter((isset($context["showAnalysis"]) ? $context["showAnalysis"] : null), 0)) : (0))) {
            // line 2
            echo "\t<div class=\"testpaper-question-analysis js-testpaper-question-analysis\" ";
            if (((array_key_exists("analysisCssHide", $context)) ? (_twig_default_filter((isset($context["analysisCssHide"]) ? $context["analysisCssHide"] : null), 1)) : (1))) {
                echo "style=\"display: none;\"";
            }
            echo ">
    <div class=\"well mb0\">
\t\t";
            // line 4
            echo nl2br($this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无解析"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无解析")))));
            echo "
\t\t";
            // line 5
            $this->loadTemplate("attachment/widget/list.html.twig", "question/part/show-analysis.html.twig", 5)->display(array_merge($context, array("targetType" => "question.analysis", "targetId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))));
            // line 6
            echo "    </div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "question/part/show-analysis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  33 => 5,  29 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/part/show-analysis.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question\\part\\show-analysis.html.twig");
    }
}
