<?php

/* activity/video/finish-condition.html.twig */
class __TwigTemplate_574d4e4e0b8e0816cc142c17dc85b108b33d97497cd7a77921e21137a87795ad extends Twig_Template
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
        echo "<p class=\"gray-darker mbs\">满足以下条件:</p> ";
        if (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "finishType", array()) == "time")) {
            echo " 至少学习";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "finishDetail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "finishDetail", array()), 0)) : (0)), "html", null, true);
            echo "分钟。 ";
        } else {
            echo " 学习到最后。";
        }
    }

    public function getTemplateName()
    {
        return "activity/video/finish-condition.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "activity/video/finish-condition.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\video\\finish-condition.html.twig");
    }
}
