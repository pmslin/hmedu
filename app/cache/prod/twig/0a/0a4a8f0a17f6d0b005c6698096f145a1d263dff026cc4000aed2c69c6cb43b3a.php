<?php

/* activity/exercise/modal.html.twig */
class __TwigTemplate_fe17f80c2ca1cd8528269a98e43866fd478e7e0ec4d62d48542466c0cab22541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-form-layout.html.twig", "activity/exercise/modal.html.twig", 1);
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/activity-manage/exercise/index.js"), 300);
        // line 4
        $context["optionalDefault"] = 1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_activity_content($context, array $blocks = array())
    {
        // line 7
        echo "  <form id=\"#step2-form\" class=\"form-horizontal lesson-form\" method=\"post\">

    <div class=\"form-group\">
      <div class=\"col-sm-2 control-label\">
      <label for=\"questionCount\" class=\"control-label-required\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目个数"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-sm-10 controls\">
        <input type=\"text\" id=\"itemCount\" name=\"itemCount\" required=\"required\" class=\"form-control width-input width-input-large\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "itemCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "itemCount", array()), 1)) : (1)), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目来源"), "html", null, true);
        echo "</label>
      <div class=\"col-sm-10 controls radios\">
        <select class=\"form-control width-150\" name=\"range[courseId]\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_show_tasks", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null))), "html", null, true);
        echo "\" data-check-num-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_check_num", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null))), "html", null, true);
        echo "\">
          <option value=\"0\" ";
        // line 22
        if ( !(($this->getAttribute((isset($context["range"]) ? $context["range"] : null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["range"]) ? $context["range"] : null), "courseId", array()), 0)) : (0))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("按课程"), "html", null, true);
        echo "</option>
          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["manageCourse"]) {
            if ($context["manageCourse"]) {
                // line 24
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["manageCourse"], "id", array()), "html", null, true);
                echo "\" ";
                if (((($this->getAttribute((isset($context["range"]) ? $context["range"] : null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["range"]) ? $context["range"] : null), "courseId", array()), 0)) : (0)) == $this->getAttribute($context["manageCourse"], "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["manageCourse"], "title", array()), "html", null, true);
                echo "</option>
          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manageCourse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </select>
        <select class=\"form-control width-150\" ";
        // line 27
        if ( !((array_key_exists("courseTasks", $context)) ? (_twig_default_filter((isset($context["courseTasks"]) ? $context["courseTasks"] : null), null)) : (null))) {
            echo "style=\"display:none;\"";
        }
        echo " name=\"range[lessonId]\" data-check-num-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_check_num", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null))), "html", null, true);
        echo "\">
          <option value=\"0\" ";
        // line 28
        if ( !(($this->getAttribute((isset($context["range"]) ? $context["range"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["range"]) ? $context["range"] : null), "lessonId", array()), 0)) : (0))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请选择"), "html", null, true);
        echo "</option>
          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("courseTasks", $context)) ? (_twig_default_filter((isset($context["courseTasks"]) ? $context["courseTasks"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if ($context["task"]) {
                // line 30
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\" ";
                if (((($this->getAttribute((isset($context["range"]) ? $context["range"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["range"]) ? $context["range"] : null), "lessonId", array()), 0)) : (0)) == $this->getAttribute($context["task"], "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                echo "</option>
          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </select>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-sm-2 control-label\"><label>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("难度"), "html", null, true);
        echo "</label></div>
      <div class=\"col-sm-10 controls\">
        <select id=\"course_categoryId\" class=\"form-control width-input width-input-large\" name=\"difficulty\"  data-url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_show_tasks", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null))), "html", null, true);
        echo "\" data-check-num-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_check_num", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null))), "html", null, true);
        echo "\">
          ";
        // line 40
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("difficulty"), (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "metas", array(), "any", false, true), "difficulty", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "metas", array(), "any", false, true), "difficulty", array()), "0")) : ("0")), array("0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不限")));
        echo "
        </select>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-sm-2 control-label\">
      <label class=\"control-label-required\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题型范围"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-sm-10 controls\">
        ";
        // line 50
        $context["range"] = (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "metas", array(), "any", false, true), "questionTypes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "metas", array(), "any", false, true), "questionTypes", array()), null)) : (null));
        // line 51
        echo "        ";
        $context["questionTypes"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 52
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questionTypes"]) ? $context["questionTypes"] : null));
        foreach ($context['_seq'] as $context["questionType"] => $context["name"]) {
            // line 53
            echo "          ";
            $context["questionNum"] = (($this->getAttribute((isset($context["questionNums"]) ? $context["questionNums"] : null), $context["questionType"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["questionNums"]) ? $context["questionNums"] : null), $context["questionType"], array(), "array"), null)) : (null));
            // line 54
            echo "          <label class=\"checkbox-inline ml0 width-200 js-question-type\">
            <input type=\"checkbox\" class=\"questionTypes\" name=\"questionTypes[]\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $context["questionType"], "html", null, true);
            echo "\" ";
            if (twig_in_filter($context["questionType"], (isset($context["range"]) ? $context["range"] : null))) {
                echo " checked=checked ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
            （<span class=\"color-gray text-sm\">
              共<span role=\"questionNum\" type=\"";
            // line 57
            echo twig_escape_filter($this->env, $context["questionType"], "html", null, true);
            echo "\" >";
            if ((isset($context["questionNum"]) ? $context["questionNum"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionNum"]) ? $context["questionNum"] : null), "questionNum", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo "</span>题
            </span>）
          </label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['questionType'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        <input type=\"hidden\" name=\"checkQuestion\" value=\"false\" data-check-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_exercise_check", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\" />
        <p class=\"help-block mtl\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示：练习为随机出题，只需填写题目个数和选择题型范围即可。"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </form>
";
    }

    // line 68
    public function block_activity_finish($context, array $blocks = array())
    {
        // line 69
        echo "  <div class=\"row form-group\">
    <div class=\"col-sm-2 control-label\">
      <label for=\"condition-select\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成条件"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-xs-4 form-control-static\">
      提交练习
      <select class=\"form-control hidden\" id=\"condition-select\" name=\"finishCondition\">
        ";
        // line 76
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("submit" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交练习")), (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "array"), "score")) : ("score")));
        echo "
      </select>
      <input type=\"hidden\" name=\"mediaType\" value=\"exercise\" />
      <input type=\"hidden\" name=\"courseSetId\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["courseSetId"]) ? $context["courseSetId"] : null), "html", null, true);
        echo "\" />
    </div>
  </div>
  
  
";
    }

    public function getTemplateName()
    {
        return "activity/exercise/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 79,  243 => 76,  235 => 71,  231 => 69,  228 => 68,  219 => 62,  214 => 61,  198 => 57,  187 => 55,  184 => 54,  181 => 53,  176 => 52,  173 => 51,  171 => 50,  165 => 47,  155 => 40,  149 => 39,  144 => 37,  137 => 32,  121 => 30,  116 => 29,  108 => 28,  100 => 27,  97 => 26,  81 => 24,  76 => 23,  68 => 22,  62 => 21,  57 => 19,  49 => 14,  43 => 11,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/exercise/modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\exercise\\modal.html.twig");
    }
}
