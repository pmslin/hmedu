<?php

/* testpaper/manage/item-get-table.html.twig */
class __TwigTemplate_8d5f435b6989fb7547d68919bfef39fa29f7f0bf084cba66716035efbd50198f extends Twig_Template
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
        echo "<table class=\"table table-bordered mb0\">
  <th>

    <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("单选题"), "html", null, true);
        echo "</td>
    <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("多选题"), "html", null, true);
        echo "</td>
    <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不定向选择题"), "html", null, true);
        echo "</td>
    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填空题"), "html", null, true);
        echo "</td>
    <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("判断题"), "html", null, true);
        echo "</td>
    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问答题"), "html", null, true);
        echo "</td>
    <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("材料题"), "html", null, true);
        echo "</td>
  </th>
  <tr>
    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题数"), "html", null, true);
        echo "</td>
    <td class=\"single_choice_num\">";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "single_choice", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "single_choice", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"choice_num\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "choice", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "choice", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"uncertain_choice_num\">";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "uncertain_choice", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "uncertain_choice", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"fill_num\">";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "fill", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "fill", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"determine_num\">";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "determine", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "determine", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"essay_num\">";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "essay", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "essay", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"material_num\">";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "material", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "material", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分数"), "html", null, true);
        echo "</td>
    <td>";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "single_choice", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "single_choice", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "choice", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "choice", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "uncertain_choice", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "uncertain_choice", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "fill", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "fill", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "determine", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "determine", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "essay", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "essay", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "material", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "material", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
  </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/item-get-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/item-get-table.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\item-get-table.html.twig");
    }
}
