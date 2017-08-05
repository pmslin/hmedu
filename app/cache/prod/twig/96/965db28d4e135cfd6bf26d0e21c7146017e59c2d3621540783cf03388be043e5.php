<?php

/* pay-center/course-cancelled.html.twig */
class __TwigTemplate_3546a40bb8c4b9ccb23178b3ccbb71a7a949b359ddcce91c232ebfd25f696674 extends Twig_Template
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
        echo "<a href=\"javascript:;\"  class=\"js-order-cancel btn btn-link\" data-goto=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetId", array()))), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_cancel", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "pay-center/course-cancelled.html.twig";
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
        return new Twig_Source("", "pay-center/course-cancelled.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\pay-center\\course-cancelled.html.twig");
    }
}
