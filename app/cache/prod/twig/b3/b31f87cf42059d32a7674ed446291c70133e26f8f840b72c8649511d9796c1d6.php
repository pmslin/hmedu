<?php

/* testpaper/manage/create.html.twig */
class __TwigTemplate_8d25014d3b104b506fa8afc839f9854d4535e616d2d4116c5ba085326712280c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "testpaper/manage/create.html.twig", 1);
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
        // line 2
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "testpaper/manage/create.html.twig", 2);
        // line 6
        $context["side_nav"] = "testpaper";
        // line 8
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/es-ckeditor/ckeditor.js", 2 => "libs/jquery-nouislider.js", 3 => "app/js/testpaper-manage/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建试卷"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"panel panel-default panel-col test-creator\">
  <div class=\"panel-heading clearfix\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建试卷"), "html", null, true);
        echo "</div>

  <div class=\"panel-body\">

    ";
        // line 17
        $this->loadTemplate("testpaper/manage/form-breadcrumb.html.twig", "testpaper/manage/create.html.twig", 17)->display(array_merge($context, array("title" => "创建试卷")));
        // line 18
        echo "
    ";
        // line 20
        echo "    <form id=\"testpaper-form\" class=\"form-horizontal\" method=\"post\" data-auto-submit=\"false\" data-have-base-fields=\"true\" data-have-build-fields=\"true\" data-course-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "html", null, true);
        echo "\">
      ";
        // line 21
        echo $context["web_macro"]->getflash_messages();
        echo "

      <div id=\"colorpicker\">
        <div class=\"sliders\" id=\"red\"></div>
        <div class=\"sliders\" id=\"green\"></div>
        <div class=\"sliders\" id=\"blue\"></div>
        <div class=\"result\"></div>
      </div>

      ";
        // line 30
        $this->loadTemplate("testpaper/manage/create-base-info.html.twig", "testpaper/manage/create.html.twig", 30)->display($context);
        // line 31
        echo "      ";
        $this->loadTemplate("testpaper/manage/create-build-info.html.twig", "testpaper/manage/create.html.twig", 31)->display($context);
        // line 32
        echo "      
      <div class=\"form-group mbm\">
        <div class=\"col-md-8 col-md-offset-2 controls\">
          <button id=\"testpaper-create-btn\" data-loading-text=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\" data-role=\"submit\" data-check-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_build_check", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "type" => "testpaper")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存，下一步"), "html", null, true);
        echo "</button>
          <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-link  \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("返回"), "html", null, true);
        echo "</a>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  98 => 36,  90 => 35,  85 => 32,  82 => 31,  80 => 30,  68 => 21,  63 => 20,  60 => 18,  58 => 17,  51 => 13,  47 => 11,  44 => 10,  36 => 4,  32 => 1,  30 => 8,  28 => 6,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/create.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\create.html.twig");
    }
}
