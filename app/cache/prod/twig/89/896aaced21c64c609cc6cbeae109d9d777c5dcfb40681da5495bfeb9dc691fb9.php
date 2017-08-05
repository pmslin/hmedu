<?php

/* courseset-manage/detail.html.twig */
class __TwigTemplate_1a8f7b18ae358b890238e137f71b794bdeaebe467ba2ffb4eeebc765208f00e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "courseset-manage/detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "detail";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "app/js/courseset-manage/detail/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程详细信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"panel panel-default\" role=\"courseSet-manage-detail\">
  <div class=\"panel-heading\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详细信息"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    <form id=\"courseset-detail-form\" class=\"form-horizontal\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_detail", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程简介"), "html", null, true);
        echo "</label></div>
        <div class=\"col-md-8 controls\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          <textarea name=\"summary\" rows=\"10\" id=\"courseset-summary-field\" class=\"form-control\" data-image-upload-url=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue((isset($context["courseSet"]) ? $context["courseSet"] : null), "summary");
        echo "</textarea>
        </div>
      </div>

      <div class=\"form-group dynamic-collection\" id=\"courseset-goals-form-group\">
        <div class=\"col-md-2 control-label\"><label>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程目标"), "html", null, true);
        echo "</label></div>
        <div class=\"col-md-8 controls\">
          <div id=\"course-goals\" data-field-name=\"goals\" data-init-value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "goals", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "goals", array()), array())) : (array()))), "html", null, true);
        echo "\"></div>
        </div>
      </div>

      <div class=\"form-group\" id=\"courseset-audiences-form-group\">
        <div class=\"col-md-2 control-label\"><label>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适应人群"), "html", null, true);
        echo "</label></div>
        <div class=\"col-md-8 controls\">
          <div id=\"intended-students\" data-field-name=\"audiences\" data-init-value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "audiences", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "audiences", array()), array())) : (array()))), "html", null, true);
        echo "\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-8 col-md-offset-2 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"courseset-submit\" type=\"button\" data-loading-text=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存..."), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  100 => 32,  95 => 30,  87 => 25,  82 => 23,  72 => 18,  68 => 17,  63 => 15,  57 => 12,  53 => 11,  48 => 9,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/detail.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\courseset-manage\\detail.html.twig");
    }
}
