<?php

/* activity/homework/modal.html.twig */
class __TwigTemplate_6e5bbe10c52a778989c9a3ac72a9140b769838b34f196c3e6d31d2401fbcc8d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-form-layout.html.twig", "activity/homework/modal.html.twig", 1);
        $this->blocks = array(
            'activity_content' => array($this, 'block_activity_content'),
            'activity_finish' => array($this, 'block_activity_finish'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/activity-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-sortable.js", 2 => "app/js/activity-manage/homework/index.js"), 300);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_activity_content($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"step2-form\" class=\"form-horizontal homework-activity-form\" method=\"post\">

    <div class=\"form-group\">
      <div class=\"col-sm-2 control-label\"><label for=\"homework-about-field\" class=\"control-label-required\">作业说明</label></div>
      <div class=\"col-sm-10 controls\">
        <textarea name=\"description\" rows=\"10\" id=\"homework-about-field\" class=\"form-control\" data-image-upload-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "description", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
      </div>
    </div>

    ";
        // line 15
        if ( !((array_key_exists("activity", $context)) ? (_twig_default_filter((isset($context["activity"]) ? $context["activity"] : null), null)) : (null))) {
            // line 16
            echo "      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\"><label for=\"homework-about-field\" class=\"control-label-required\">选择题目</label></div>
        <div class=\"col-sm-8\">
          <a id=\"picker_homework_items\" data-url=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_homework_question_picker", array("id" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null), "targetType" => "homework")), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\" data-role=\"pick-item\"　><i class=\"es-icon es-icon-anonymous-iconfont\"></i>
          选择题目
          </a>
          <input type=\"hidden\" name=\"questionLength\" value=\"";
            // line 22
            if (((array_key_exists("questions", $context)) ? (_twig_default_filter((isset($context["questions"]) ? $context["questions"] : null), null)) : (null))) {
                echo " questionItems.lenght ";
            }
            echo "\">
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-10 col-sm-offset-2\">
          <table class=\"table\" id=\"question-table\">
            <thead>
              <tr>
                <th></th>
                <th><input type=\"checkbox\" data-role=\"batch-select\"></th>
                <th width=\"10%\">题号</th>
                <th width=\"25%\">题干</th>
                <th width=\"15%\">类型</th>
                <th width=\"10%\">难度</th>
                <th width=\"25%\">操作</th>
              </tr>
            </thead>
            <tbody id=\"question-table-tbody\" >
            ";
            // line 40
            if (((array_key_exists("questions", $context)) ? (_twig_default_filter((isset($context["questions"]) ? $context["questions"] : null), null)) : (null))) {
                // line 41
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["questionItems"]) ? $context["questionItems"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["questionItem"]) {
                    // line 42
                    echo "                ";
                    $context["questionId"] = $this->getAttribute($context["questionItem"], "questionId", array());
                    // line 43
                    echo "                ";
                    $context["question"] = $this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), (isset($context["questionId"]) ? $context["questionId"] : null), array(), "array");
                    // line 44
                    echo "                ";
                    $this->loadTemplate("WebBundle:QuestionManage:question-tr.html.twig", "activity/homework/modal.html.twig", 44)->display($context);
                    // line 45
                    echo "              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['questionItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            ";
            }
            // line 47
            echo "            </tbody>
          </table>
          <div class=\"mbl\">
            <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
            <button type=\"button\" class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete-btn\"  data-name=\"题目\">删除</button>
          </div>
          <span class=\"color-danger js-help-redmine\"></span>
          <p class=\"js-subjective-remask\" data-type=\"homework\">
          </p>
          <p class=\"help-block color-warning\">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示：保存后题目将不能再添加或移除。"), "html", null, true);
            echo "</p>
        </div>
      </div>
    ";
        }
        // line 60
        echo "  </form>
";
    }

    // line 63
    public function block_activity_finish($context, array $blocks = array())
    {
        // line 64
        echo "
  <div class=\"row form-group\">
    <div class=\"col-sm-2 control-label\">
      <label for=\"condition-select\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成条件"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-xs-4 form-control-static\">
      提交作业
      <select class=\"form-control hidden\" id=\"condition-select\" name=\"finishCondition\">
        ";
        // line 72
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("submit" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交作业")), (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "array"), "score")) : ("score")));
        echo "
      </select>
      <input type=\"hidden\" name=\"finishScore\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "score", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "score", array(), "array"), "0")) : ("0")), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"mediaType\" value=\"homework\" />

    </div>
  </div>
  
";
    }

    public function getTemplateName()
    {
        return "activity/homework/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 74,  174 => 72,  166 => 67,  161 => 64,  158 => 63,  153 => 60,  146 => 56,  135 => 47,  132 => 46,  118 => 45,  115 => 44,  112 => 43,  109 => 42,  91 => 41,  89 => 40,  66 => 22,  60 => 19,  55 => 16,  53 => 15,  42 => 11,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/homework/modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\homework\\modal.html.twig");
    }
}
