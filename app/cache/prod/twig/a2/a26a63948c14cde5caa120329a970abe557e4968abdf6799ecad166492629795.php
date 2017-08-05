<?php

/* my/user/avatar-alert.html.twig */
class __TwigTemplate_054a4cd5bf0ea5ca2f900f77a096f73ba5e73b43a7606256972dcf724803d45b extends Twig_Template
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
        if ((isset($context["avatarAlert"]) ? $context["avatarAlert"] : null)) {
            // line 2
            echo " <div class=\"alert alert-warning alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您还没有头像"), "html", null, true);
            echo "</strong>。";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("拥有一个独有的头像，老师和同学们能更容易关注到你哦"), "html", null, true);
            echo "～～ <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_avatar");
            echo "\" class=\"alert-link\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击设置"), "html", null, true);
            echo "</a>
 </div>
";
        }
    }

    public function getTemplateName()
    {
        return "my/user/avatar-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/user/avatar-alert.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\my\\user\\avatar-alert.html.twig");
    }
}
