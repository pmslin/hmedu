<?php

/* activity/activity-form-layout.html.twig */
class __TwigTemplate_391c55f896389c5a6b61c0b82d0415e8f143c06ef3d8d155ec9026492b412429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "activity/activity-form-layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'activity_content' => array($this, 'block_activity_content'),
            'activity_finish' => array($this, 'block_activity_finish'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/iframe-resizer-contentWindow.js"), 500);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"tab-content\" id=\"iframe-content\">
    <div class=\"tab-pane js-course-tasks-pane active js-step2-view\">
      <form class=\"form-horizontal\" id=\"step2-form\" >
        <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\">
          <label for=\"title\" class=\"control-label-required\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题名称"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-sm-10\">
            <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\" >
          </div>
        </div>
        ";
        // line 16
        $this->displayBlock('activity_content', $context, $blocks);
        // line 18
        echo "      </form>
    </div>
    <div class=\"tab-pane js-course-tasks-pane js-step3-view\">
      <form class=\"form-horizontal\" id=\"step3-form\" >
        ";
        // line 22
        $this->displayBlock('activity_finish', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $context["task"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("TaskByActivity", array("courseId" => (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "fromCourseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "fromCourseId", array()), 0)) : (0)), "activityId" => (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array()), 0)) : (0))));
        // line 26
        echo "        <div class=\"form-group\">
          <div class=\"col-sm-10 col-sm-offset-2 radios\">
            <label>
              <input type=\"checkbox\" name=\"isOptional\" value=\"1\" ";
        // line 29
        if (((($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "isOptional", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "isOptional", array()), false)) : (false)) || (twig_test_empty((isset($context["task"]) ? $context["task"] : null)) && ((array_key_exists("optionalDefault", $context)) ? (_twig_default_filter((isset($context["optionalDefault"]) ? $context["optionalDefault"] : null), 0)) : (0))))) {
            echo " checked ";
        }
        echo ">
              设为选修
            </label>
              <span class=\"color-gray\">选修任务是否学习，不会影响下一任务的解锁，学习结果不会计入学习进度、学习统计中。在课程页面的目录中，将不会显示选修任务。</span>
          </div>
        </div>
      </form>
    </div>
  </div>
";
    }

    // line 16
    public function block_activity_content($context, array $blocks = array())
    {
        // line 17
        echo "        ";
    }

    // line 22
    public function block_activity_finish($context, array $blocks = array())
    {
        // line 23
        echo "        ";
    }

    public function getTemplateName()
    {
        return "activity/activity-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  98 => 22,  94 => 17,  91 => 16,  75 => 29,  70 => 26,  68 => 25,  65 => 24,  63 => 22,  57 => 18,  55 => 16,  49 => 13,  43 => 10,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/activity-form-layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\activity-form-layout.html.twig");
    }
}
