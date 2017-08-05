<?php

/* task/plugin/task-list.html.twig */
class __TwigTemplate_5f582031f514d88165ab973904393fec1250d76c406d703f04f4582843ada17b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("task/plugin/base.html.twig", "task/plugin/task-list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "task/plugin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
  ";
        // line 6
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "isDefault", array())) {
            // line 7
            echo "    ";
            $this->loadTemplate("task/plugin/list/free-mode-list.html.twig", "task/plugin/task-list.html.twig", 7)->display($context);
            // line 8
            echo "  ";
        } else {
            // line 9
            echo "    ";
            $this->loadTemplate("task/plugin/list/lock-mode-list.html.twig", "task/plugin/task-list.html.twig", 9)->display($context);
            // line 10
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "task/plugin/task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  42 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/plugin/task-list.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task\\plugin\\task-list.html.twig");
    }
}
