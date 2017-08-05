<?php

/* activity/text/show.html.twig */
class __TwigTemplate_a257e9ca685f3e5f8ac40a6d5b40c13bc74323c970902fc4e3393d91c5df1f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/content-layout.html.twig", "activity/text/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/perfect-scrollbar.js", 1 => "app/js/activity/text/index.js"));
        // line 3
        $context["enableCopy"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo " 
  <div class=\"iframe-parent-content iframe-parent-full\" id=\"text-activity\" data-finish-time=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "finishDetail", array()), "html", null, true);
        echo "\" data-disable-copy=\"";
        echo twig_escape_filter($this->env, (isset($context["enableCopy"]) ? $context["enableCopy"] : null), "html", null, true);
        echo "\">
    <div class=\"text-activity-content\">";
        // line 6
        echo $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "content", array());
        echo "</div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "activity/text/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  38 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/text/show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\text\\show.html.twig");
    }
}
