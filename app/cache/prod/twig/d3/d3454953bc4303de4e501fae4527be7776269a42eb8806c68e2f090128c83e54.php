<?php

/* testpaper/manage/result-list-search-form.html.twig */
class __TwigTemplate_345510310dcfda94e6ef99a02b008f88ed184ffdf63523abd8dbb9ff66ceeee5 extends Twig_Template
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
        $context["resultStatus"] = ((array_key_exists("resultStatus", $context)) ? (_twig_default_filter((isset($context["resultStatus"]) ? $context["resultStatus"] : null), null)) : (null));
        // line 2
        $context["status"] = ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), "all")) : ("all"));
        // line 3
        echo "
<form class=\"clearfix form-inline well well-sm testpaper-result-list-form\" method=\"get\">
  <div class=\"form-group\">
    <input class=\"form-control \" type=\"text\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请输入用户名"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <select name=\"status\" class=\"form-control\" >
      <option value=\"all\" ";
        // line 10
        if (((isset($context["status"]) ? $context["status"] : null) == "all")) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
        echo "</option>>
      <option value=\"finished\" ";
        // line 11
        if (((isset($context["status"]) ? $context["status"] : null) == "finished")) {
            echo " selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已批阅"), "html", null, true);
        echo "</option>
      <option value=\"reviewing\" ";
        // line 12
        if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
            echo " selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未批阅"), "html", null, true);
        echo "</option>
      <option value=\"doing\" ";
        // line 13
        if (((isset($context["status"]) ? $context["status"] : null) == "doing")) {
            echo " selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进行中"), "html", null, true);
        echo "</option>
    </select>
  </div>

  <button class=\"btn btn-primary\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

</form>";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/result-list-search-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  61 => 13,  53 => 12,  45 => 11,  37 => 10,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/result-list-search-form.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\result-list-search-form.html.twig");
    }
}
