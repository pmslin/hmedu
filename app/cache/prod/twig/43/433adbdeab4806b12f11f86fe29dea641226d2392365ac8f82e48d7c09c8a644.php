<?php

/* testpaper/part/card-choice-explain.html.twig */
class __TwigTemplate_d0746a17817c7c70a63ea2aef094ffcfe2f06169b95a1ee9dfc66f9c97495294 extends Twig_Template
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
        echo "<div class=\"testpaper-card-explain clearfix\">
  <a href=\"javascript:;\" class=\"color-lump lump-xs bg-success\"></a><small class=\"color-gray mls\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正确"), "html", null, true);
        echo "</small>
  <a href=\"javascript:;\" class=\"color-lump lump-xs bg-danger\"></a><small class=\"color-gray mls\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("错误"), "html", null, true);
        echo "</small>
  <a href=\"javascript:;\" class=\"color-lump lump-xs bg-warning\"></a><small class=\"color-gray mls\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("待批阅"), "html", null, true);
        echo "</small>
  <a href=\"javascript:;\" class=\"color-lump lump-xs lump-card\"></a><small class=\"color-gray mls\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未做"), "html", null, true);
        echo "</small>
</div>";
    }

    public function getTemplateName()
    {
        return "testpaper/part/card-choice-explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/part/card-choice-explain.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\part\\card-choice-explain.html.twig");
    }
}
