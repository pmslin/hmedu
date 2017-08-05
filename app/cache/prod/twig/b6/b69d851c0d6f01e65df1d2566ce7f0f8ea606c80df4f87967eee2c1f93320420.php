<?php

/* course-manage/student/add-modal.html.twig */
class __TwigTemplate_f57fcb2c76a17ae42348e00270cf85946e9104cdcf3da46971b0ff7744432318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "course-manage/student/add-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["modal_class"] = "modal-lg";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/course-manage/students/add/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
        echo "
  ";
        // line 9
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
            // line 10
            echo "    ";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            echo "
  ";
        } else {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            echo "
  ";
        }
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
<form id=\"student-add-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_add", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 18
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 19
            echo "  \t<div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-nickname\">";
            // line 21
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-nickname\" name=\"queryfield\" class=\"form-control\"
        data-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_check", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱/手机/用户名"), "html", null, true);
            echo "' >
      \t<div class=\"help-block\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("只能添加系统中已注册的用户"), "html", null, true);
            echo "</div>
    \t</div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"buy-price\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买价格"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <div class=\"input-group\">
          <input type=\"text\" id=\"buy-price\" name=\"price\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->currency($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array())), "html", null, true);
            echo "\" class=\"form-control\">
          <div class=\"input-group-addon\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"help-block\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("本课程的价格为"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
            echo "</div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-remark\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("备注"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-remark\" name=\"remark\" class=\"form-control\">
        <div class=\"help-block\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选填"), "html", null, true);
            echo "</div>
      </div>
    </div>
  ";
        } else {
            // line 53
            echo "    <div class=\"empty\">";
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("courseStatus", $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()));
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程不能添加"), "html", null, true);
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo "，";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请课程发布后再添加。"), "html", null, true);
            echo "</div>
  ";
        }
        // line 55
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "  ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 64
            echo "    <button id=\"student-add-submit\" type=\"button\" class=\"btn btn-primary pull-right\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
            echo "...\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
            echo "</button>
  ";
        }
        // line 66
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "course-manage/student/add-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 66,  174 => 64,  171 => 63,  168 => 62,  159 => 56,  156 => 55,  142 => 53,  135 => 49,  128 => 45,  117 => 39,  112 => 37,  108 => 36,  101 => 32,  92 => 26,  86 => 25,  75 => 21,  71 => 19,  69 => 18,  65 => 17,  62 => 16,  59 => 15,  51 => 12,  45 => 10,  43 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/student/add-modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\student\\add-modal.html.twig");
    }
}
