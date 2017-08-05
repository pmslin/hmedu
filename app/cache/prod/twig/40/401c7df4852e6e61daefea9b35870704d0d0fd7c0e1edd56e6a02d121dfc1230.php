<?php

/* course/task-list/parts/list-li-title.html.twig */
class __TwigTemplate_8112e0f1a838bc85de8177295d19cc130011177142e494b822b24a25d4485510 extends Twig_Template
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
        if ((twig_test_empty((isset($context["member"]) ? $context["member"] : null)) && $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "isFree", array()))) {
            // line 2
            echo "  <span class=\"label label-success mr10\">免费</span>
";
        } elseif ((((twig_test_empty(        // line 3
(isset($context["member"]) ? $context["member"] : null)) && $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array())) && ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()) == "video")) && ((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 4
            echo "  <span class=\"label label-warning mrm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试看"), "html", null, true);
            echo "</span>
";
        } elseif ((        // line 5
(isset($context["member"]) ? $context["member"] : null) && ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "isOptional", array()) == 1))) {
            // line 6
            echo "  <span class=\"label label-info mr10\">选修</span>
";
        }
        // line 8
        echo "任务";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "number", array()), "html", null, true);
        echo "： ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "course/task-list/parts/list-li-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/parts/list-li-title.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\task-list\\parts\\list-li-title.html.twig");
    }
}
