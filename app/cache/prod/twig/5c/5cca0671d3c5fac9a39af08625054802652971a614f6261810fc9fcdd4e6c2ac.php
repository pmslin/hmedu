<?php

/* course-manage/panel-header/orders-btn-group.html.twig */
class __TwigTemplate_fd476311263214ba0e10c332636b42f2a900a2fbdf7eadfbcda631becb4e593e extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_search_order") == 1))) {
            // line 2
            echo "    <a class=\"btn btn-info btn-sm pull-right mr5\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_orders_export_csv", array("courseSetId" => $this->getAttribute(            // line 3
(isset($context["course"]) ? $context["course"] : null), "courseSetId", array()), "courseId" => $this->getAttribute(            // line 4
(isset($context["course"]) ? $context["course"] : null), "id", array()), "startDateTime" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 5
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "endDateTime" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 6
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute(            // line 7
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "payment" => $this->getAttribute(            // line 8
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute(            // line 9
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute(            // line 10
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出订单"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/panel-header/orders-btn-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  29 => 9,  28 => 8,  27 => 7,  26 => 6,  25 => 5,  24 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/panel-header/orders-btn-group.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\panel-header\\orders-btn-group.html.twig");
    }
}
