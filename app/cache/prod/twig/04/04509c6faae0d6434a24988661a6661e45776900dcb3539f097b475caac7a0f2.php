<?php

/* order/order-course.html.twig */
class __TwigTemplate_c69a9c40ca872149f0968e7b112bfd8799350e7469fe0043463931548aa0b803 extends Twig_Template
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
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())));
        // line 2
        echo "<div class=\"order-detail clearfix\">
  <div class=\"order-img hidden-xs\">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"img-responsive\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCover((isset($context["course"]) ? $context["course"] : null), "middle"), "courseSet.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "\"></a>
  </div>

  <div class=\"order-info text-overflow\">《";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array()), "html", null, true);
        echo "》- ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</div>
  <div class=\"order-price\">
    ";
        // line 10
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            // line 11
            echo "      <span class=\"pay-rmb\">￥</span>
    ";
        }
        // line 13
        echo "    <span role=\"total-price\" class=\"pay-rmb\">";
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
        echo "</span>
    ";
        // line 14
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            // line 15
            echo "    ";
        } elseif ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin")) {
            // line 16
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "order/order-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  60 => 16,  57 => 15,  55 => 14,  50 => 13,  46 => 11,  44 => 10,  37 => 8,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "order/order-course.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\order\\order-course.html.twig");
    }
}
