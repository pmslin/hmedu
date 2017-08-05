<?php

/* task/plugin/base.html.twig */
class __TwigTemplate_18039b3e0ad056db2540c60bd18ddd7ba755ae2502fec394bf9c2a9dea9b6eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("js_loader_async.html.twig", "task/plugin/base.html.twig", 6)->display($context);
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    public function getTemplateName()
    {
        return "task/plugin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  28 => 6,  25 => 5,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/plugin/base.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task\\plugin\\base.html.twig");
    }
}
