<?php

/* course/widgets/course-order.html.twig */
class __TwigTemplate_ccb7b6cf41e2eff740f94a15e627bf9626b132471788b5a8d38f8777f3bfd030 extends Twig_Template
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
        echo "<div class=\"order-detail-bg  checkout\" style=\"border:none\">
  <div class=\"order-detail  clearfix\">
    <div class=\"order-img hidden-xs\">
      <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
        <img class=\"img-responsive\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover((isset($context["courseSet"]) ? $context["courseSet"] : null), "middle"), "courseSet.png"), "html", null, true);
        echo "\"alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收费"), "html", null, true);
        echo "\"></a>
    </div>
    <div class=\"order-info\">
      <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单名称：%title%", array("%title%" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()))), "html", null, true);
        echo "</p>
      <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号：%sn%", array("%sn%" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "sn", array()))), "html", null, true);
        echo "</p>
      <p>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单价格："), "html", null, true);
        echo "
        <span class=\"pay-rmb\">￥";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "</span>
      </p>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "course/widgets/course-order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  45 => 11,  40 => 9,  36 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/course-order.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\widgets\\course-order.html.twig");
    }
}
