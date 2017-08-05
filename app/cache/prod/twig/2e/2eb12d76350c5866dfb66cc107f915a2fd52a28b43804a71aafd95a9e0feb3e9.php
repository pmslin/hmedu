<?php

/* attachment/question-answer-attachment.html.twig */
class __TwigTemplate_22bf8d897e6f4c85df4cc8743710fd5804d65aadec31402cd9364295be89655b extends Twig_Template
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
        $context["target"] = twig_split_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), ".");
        // line 2
        echo "
";
        // line 3
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_attachment.enable") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting(("cloud_attachment." . $this->getAttribute((isset($context["target"]) ? $context["target"] : null), 0, array(), "array")))) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 4
            echo "
  ";
            // line 5
            $context["attachments"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("AttachmentList", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null)));
            // line 6
            echo "
  ";
            // line 7
            if (((array_key_exists("showList", $context)) ? (_twig_default_filter((isset($context["showList"]) ? $context["showList"] : null), 0)) : (0))) {
                // line 8
                echo "    ";
                $this->loadTemplate("attachment/list.html.twig", "attachment/question-answer-attachment.html.twig", 8)->display($context);
                // line 9
                echo "  ";
            } else {
                // line 10
                echo "    ";
                $this->loadTemplate("attachment/form-fields.html.twig", "attachment/question-answer-attachment.html.twig", 10)->display(array_merge($context, array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "target" => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), 0, array(), "array"), "fileType" => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), 1, array(), "array"), "showLabel" => (isset($context["showLabel"]) ? $context["showLabel"] : null), "useType" => (isset($context["useType"]) ? $context["useType"] : null), "currentTarget" => (isset($context["currentTarget"]) ? $context["currentTarget"] : null), "attachments" => (isset($context["attachments"]) ? $context["attachments"] : null), "type" => "attachment")));
                // line 11
                echo "  ";
            }
            // line 12
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "attachment/question-answer-attachment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "attachment/question-answer-attachment.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\attachment\\question-answer-attachment.html.twig");
    }
}
