<?php

/* question-manage/single-choice-form.html.twig */
class __TwigTemplate_6e37c37510a4ae938be63ba46b2579d6b4adb6d1f4d7da4d769c67ae34d9a572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("question-manage/choice-form.html.twig", "question-manage/single-choice-form.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "question-manage/choice-form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "question-manage/single-choice-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/single-choice-form.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\single-choice-form.html.twig");
    }
}
