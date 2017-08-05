<?php

/* course-manage/teachers.html.twig */
class __TwigTemplate_8c9635c734953c9798d87d4da53cca768b588db4d148335fa3c9fb0f0f68e719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/teachers.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "teachers";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/course-manage/teachers/index.js"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师设置"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"panel panel-default\">
    ";
        // line 9
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/teachers.html.twig", 9)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null))));
        // line 10
        echo "    <div class=\"panel-body\">

      <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\" >
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group\" id=\"teachers-form-group\">
          <div class=\"col-md-2 control-label\"><label>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已添加教师"), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls\">
            <div id=\"course-teachers\" data-field-name=\"teachers\" data-init-value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["teacherIds"]) ? $context["teacherIds"] : null)), "html", null, true);
        echo "\" data-query-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_teachers_match", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"></div>
            <div class=\"help-block\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("只能添加有教师权限的用户"), "html", null, true);
        echo "</div>
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <button type=\"button\" class=\"btn btn-fat btn-primary js-btn-save\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
          </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  80 => 23,  72 => 18,  66 => 17,  61 => 15,  56 => 13,  51 => 10,  49 => 9,  46 => 8,  43 => 7,  33 => 3,  29 => 1,  27 => 5,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/teachers.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\teachers.html.twig");
    }
}
