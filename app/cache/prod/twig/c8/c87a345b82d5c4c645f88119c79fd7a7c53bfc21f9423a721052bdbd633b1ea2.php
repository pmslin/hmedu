<?php

/* es-bar/left-list/my-notification.html.twig */
class __TwigTemplate_f0f7612c98300f9edfaa64f24db050624c65c39e5ef2c3024e913116e041e8b7 extends Twig_Template
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
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "\" data-trigger=\"hover\" data-container=\".es-bar\">
    <a href=\"javascript:;\" data-url=\"";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_notify");
            echo "\">
      ";
            // line 4
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                // line 5
                echo "        <i class=\"es-icon es-icon-notificationson\"></i>
        <span class=\"dot\"></span>
      ";
            } else {
                // line 8
                echo "        <i class=\"es-icon es-icon-notifications\"></i>
      ";
            }
            // line 10
            echo "    </a>
  </li>
";
        } else {
            // line 13
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "\">
    <a href=\"javascript:;\">
      <i class=\"es-icon es-icon-notifications\"></i>
    </a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/left-list/my-notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  41 => 10,  37 => 8,  32 => 5,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/left-list/my-notification.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\es-bar\\left-list\\my-notification.html.twig");
    }
}
