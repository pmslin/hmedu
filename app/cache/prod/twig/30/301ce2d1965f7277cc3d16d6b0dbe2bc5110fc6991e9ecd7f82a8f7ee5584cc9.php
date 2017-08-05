<?php

/* attachment/widget/list.html.twig */
class __TwigTemplate_bbcbb28c49f233aad8556943206fdb80540995b71fb715b0db09fc55c742795f extends Twig_Template
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
        if (((array_key_exists("attachments", $context)) ? (_twig_default_filter((isset($context["attachments"]) ? $context["attachments"] : null), null)) : (null))) {
            // line 2
            echo "\t";
            $context["attachments"] = (($this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), ((isset($context["targetType"]) ? $context["targetType"] : null) . (isset($context["targetId"]) ? $context["targetId"] : null)), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), ((isset($context["targetType"]) ? $context["targetType"] : null) . (isset($context["targetId"]) ? $context["targetId"] : null)), array(), "array"), null)) : (null));
        } else {
            // line 4
            echo "\t";
            $context["attachments"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("AttachmentList", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null)));
        }
        // line 6
        $this->loadTemplate("attachment/list.html.twig", "attachment/widget/list.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "attachment/widget/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "attachment/widget/list.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\attachment\\widget\\list.html.twig");
    }
}
