<?php

/* testpaper/manage/create-base-info.html.twig */
class __TwigTemplate_bf3b772d7d1571b41237e9200b9d82461cc1e45eafb1a561687c7b221365e4a0 extends Twig_Template
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
        echo "<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"name-field\" class=\"control-label-required\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷名称"), "html", null, true);
        echo "</label></div>
  <div class=\"col-md-8 controls\">
    <input class=\"form-control\" value=\"";
        // line 4
        if ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
        }
        echo "\" name=\"name\" id=\"name-field\"/>
  </div>
</div>

<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"description-field\" class=\"control-label-required\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷说明"), "html", null, true);
        echo "</label></div>
  <div class=\"col-md-8 controls\">
    <textarea class=\"form-control\" id=\"description-field\" name=\"description\" data-image-upload-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        if ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array()), "html", null, true);
        }
        echo "</textarea>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/create-base-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  37 => 9,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/create-base-info.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\create-base-info.html.twig");
    }
}
