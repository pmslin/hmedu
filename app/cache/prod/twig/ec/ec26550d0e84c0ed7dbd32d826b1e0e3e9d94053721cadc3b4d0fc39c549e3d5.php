<?php

/* es-bar/left-list/study-center.html.twig */
class __TwigTemplate_dbccd894da35b2531c355a5b6f5d39e5bdf9e99f47d4d36c9312b633a38dc170 extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  ";
            $context["RecentLiveTasks"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecentLiveTasks", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "count" => 2));
            // line 3
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学<br>习<br>中<br>心");
            echo "
      ";
            // line 5
            if ((isset($context["RecentLiveTasks"]) ? $context["RecentLiveTasks"] : null)) {
                // line 6
                echo "        <span class=\"dot\"></span>
      ";
            }
            // line 8
            echo "    </a>
  </li>
";
        } else {
            // line 11
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学<br>习<br>中<br>心");
            echo "</a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/left-list/study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  44 => 11,  39 => 8,  35 => 6,  33 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/left-list/study-center.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\es-bar\\left-list\\study-center.html.twig");
    }
}
