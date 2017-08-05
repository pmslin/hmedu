<?php

/* course-manage/info.html.twig */
class __TwigTemplate_7799478bb954878dcc19edc81d871552bf0604f49b13978f426d9000877bfbd9 extends Twig_Template
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
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/info.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "info";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "libs/bootstrap-datetimepicker.js", 3 => "app/js/course-manage/info/index.js"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("计划设置"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"panel panel-default\" role=\"course-manage-info\">
    ";
        // line 9
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/info.html.twig", 9)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null))));
        // line 10
        echo "    <div class=\"panel-body\">
      ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <form class=\"form-horizontal\" role=\"form\" id=\"course-info-form\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\">
          <label for=\"title\" class=\"control-label-required\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("计划名称"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-sm-8\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"courseSetId\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\">
            <input class=\"form-control\" type=\"text\" id=\"title\" name=\"title\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-sm-2 control-label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习模式"), "html", null, true);
        echo "</label>
          <div class=\"col-sm-8 form-control-static\"> 
             ";
        // line 27
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learnMode", array()), "freeMode")) : ("freeMode")) == "freeMode")) {
            // line 28
            echo "               ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("自由式学习"), "html", null, true);
            echo "<a class=\"es-icon es-icon-help ml5 link-gray\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习过程自由安排"), "html", null, true);
            echo "\"></a>
             ";
        } else {
            // line 30
            echo "               ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("解锁式学习"), "html", null, true);
            echo "<a class=\"es-icon es-icon-help ml5 link-gray\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("根据既定顺序逐个解锁学习"), "html", null, true);
            echo "\"></a>
               <p class=\"help-block\" id=\"learnLockModeHelp\" data-role=\"tab-content\" >";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(""), "html", null, true);
            echo "</p>
             ";
        }
        // line 33
        echo "          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-sm-2 control-label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务完成规则"), "html", null, true);
        echo "</label>
          <div class=\"col-sm-8 radios\"> 
            <label>
              <input type=\"radio\" name=\"enableFinish\" value=\"0\" ";
        // line 39
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array()), "0")) : ("0")) == 0)) {
            echo "checked";
        }
        echo "> 由任务完成条件决定
              <a class=\"es-icon es-icon-help ml5 link-gray\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须达到完成条件，任务才算完成"), "html", null, true);
        echo "\"></a>
            </label>
            <label>
              <input type=\"radio\" name=\"enableFinish\" value=\"1\" ";
        // line 43
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array()), "0")) : ("0")) == 1)) {
            echo "checked";
        }
        echo "> 无限制
            </label>
          </div>
        </div>
        ";
        // line 48
        echo "        ";
        // line 90
        echo "        ";
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "live")) {
            // line 91
            echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\" for=\"maxStudentNum-field\">课程人数</label>
            <div class=\"col-md-10 controls\">
              <input type=\"text\" id=\"maxStudentNum-field\" name=\"maxStudentNum\" class=\"form-control width-input width-input-large\"
                value=\"";
            // line 95
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()), "")) : ("")), "html", null, true);
            echo "\" data-live-capacity-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_live_capacity", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-explain=\"\"> 人
              <div class=\"help-block\" style=\"display:none;\"></div></div>
            <div class=\"col-md-offset-2 col-md-10 js-course-rule\">
              <p class=\"alert-warning\"></p>
              <a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("content_course_rule");
            echo "\" target=\"_blank\">【查看直播课程细则】</a>
            </div>
          </div>
        ";
        }
        // line 103
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">
            <label>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("计划简介"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-md-8 controls\">
            <textarea class=\"form-control invisible\" name=\"summary\" rows=\"10\" id=\"summary\" data-image-upload-url=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue((isset($context["course"]) ? $context["course"] : null), "summary");
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group dynamic-collection\" id=\"course-goals-form-group\">
          <div class=\"col-md-2 control-label\">
            <label>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程目标"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-md-8 controls\">
            <div id=\"course-goals\" data-field-name=\"goals\" data-init-value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array()), array())) : (array()))), "html", null, true);
        echo "\"></div>
          </div>
        </div>
        <div class=\"form-group\" id=\"course-audiences-form-group\">
          <div class=\"col-md-2 control-label\">
            <label>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适应人群"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-md-8 controls\">
            <div id=\"intended-students\" data-field-name=\"audiences\" data-init-value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array()), array())) : (array()))), "html", null, true);
        echo "\"></div>
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"col-sm-offset-2 col-sm-8\">
            <button id=\"course-submit\" type=\"button\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存..."), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
            <div id=\"test\"></div>
          </div>
        </div>
      </form>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 130,  216 => 125,  210 => 122,  202 => 117,  196 => 114,  186 => 109,  180 => 106,  175 => 103,  168 => 99,  159 => 95,  153 => 91,  150 => 90,  148 => 48,  139 => 43,  133 => 40,  127 => 39,  121 => 36,  116 => 33,  111 => 31,  104 => 30,  96 => 28,  94 => 27,  89 => 25,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  64 => 15,  58 => 12,  54 => 11,  51 => 10,  49 => 9,  46 => 8,  43 => 7,  33 => 3,  29 => 1,  27 => 5,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/info.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\info.html.twig");
    }
}
