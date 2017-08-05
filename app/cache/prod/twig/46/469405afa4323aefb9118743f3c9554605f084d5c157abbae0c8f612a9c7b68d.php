<?php

/* question/single-choice-do.html.twig */
class __TwigTemplate_c0e2f74a97255c40abe673101c70d9d20ddef5e581a98bef018fa6e7dabb76f1 extends Twig_Template
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
        $this->loadTemplate("question/choice-do.html.twig", "question/single-choice-do.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "question/single-choice-do.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/single-choice-do.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question\\single-choice-do.html.twig");
    }
}
