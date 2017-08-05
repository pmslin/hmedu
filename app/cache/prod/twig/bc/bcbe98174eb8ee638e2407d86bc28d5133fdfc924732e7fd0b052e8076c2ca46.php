<?php

/* question-manage/preview.html.twig */
class __TwigTemplate_a01e0a3208fbcfa64ff4bde8c3d47060522203e40247c319ba0a1e18f5e5e387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "question-manage/preview.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <style>
    body {
      background-color: #fff;
    }
  </style>
  <div style=\"padding:20px;\">

    ";
        // line 11
        $context["questionTemplate"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypeTemplate($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "do");
        // line 12
        echo "    ";
        if ((isset($context["questionTemplate"]) ? $context["questionTemplate"] : null)) {
            // line 13
            echo "      ";
            $this->loadTemplate((isset($context["questionTemplate"]) ? $context["questionTemplate"] : null), "question-manage/preview.html.twig", 13)->display($context);
            // line 14
            echo "    ";
        }
        // line 15
        echo "  
  </div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
";
    }

    public function getTemplateName()
    {
        return "question-manage/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  48 => 14,  45 => 13,  42 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/preview.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\preview.html.twig");
    }
}
