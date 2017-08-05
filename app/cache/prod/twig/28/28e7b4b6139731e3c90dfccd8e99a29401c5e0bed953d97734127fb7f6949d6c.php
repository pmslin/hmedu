<?php

/* course-manage/dashboard/course.html.twig */
class __TwigTemplate_e44390b728c8d28bbd1ea15be88b1a76bbf07b51dafc13179cad3319c960077a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/dashboard/layout.html.twig", "course-manage/dashboard/course.html.twig", 1);
        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/dashboard/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["submenu"] = "course_dashboard";
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echarts.js", 1 => "app/js/course-manage/dashboard/course/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_dashboard($context, array $blocks = array())
    {
        // line 6
        echo "  <ul class=\"course-dashboard-header course-dashboard-ul\">
    <li>
      <div class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员数"), "html", null, true);
        echo "</div>
      <span class=\"number js-student-num\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["summary"]) ? $context["summary"] : null), "studentNum", array()), "html", null, true);
        echo "</span>
    </li>
    <li>
      <div class=\"title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成人数"), "html", null, true);
        echo "</div>
      <span class=\"number js-finished-num\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["summary"]) ? $context["summary"] : null), "finishedNum", array()), "html", null, true);
        echo "</span>
    </li>
    <li>
      <div class=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完课率"), "html", null, true);
        echo "
        <span class=\"link-medium es-icon es-icon-help ml5\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"top\"
              data-content=\"学完整个教学计划的人数 ÷ 该教学计划学员总数\">
        </span>
      </div>
      <span class=\"number js-finished-rate\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["summary"]) ? $context["summary"] : null), "finishedRate", array()), "html", null, true);
        echo "%</span>
    </li>
  </ul>

  <ul class=\"course-dashboard-footer course-dashboard-ul\">
    <li>
      <div class=\"title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("笔记数"), "html", null, true);
        echo "</div>
      <span class=\"number js-note-num\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["summary"]) ? $context["summary"] : null), "noteNum", array()), "html", null, true);
        echo "</span>
    </li>
    <li>
      <div class=\"title\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提问数"), "html", null, true);
        echo "</div>
      <span class=\"number js-ask-num\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["summary"]) ? $context["summary"] : null), "askNum", array()), "html", null, true);
        echo "</span>
    </li>
    <li>
      <div class=\"title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("话题数"), "html", null, true);
        echo "</div>
      <span class=\"number js-discussion-num\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["summary"]) ? $context["summary"] : null), "discussionNum", array()), "html", null, true);
        echo "</span>
    </li>
  </ul>

  <div id=\"course-dashboard-container\" style=\"height:400px;\"
       data-days=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["days"]) ? $context["days"] : null)), "html", null, true);
        echo "\"
       data-student-num=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["studentNum"]) ? $context["studentNum"] : null)), "html", null, true);
        echo "\"
       data-finished-num=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["finishedNum"]) ? $context["finishedNum"] : null)), "html", null, true);
        echo "\"
       data-finished-rate=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["finishedRate"]) ? $context["finishedRate"] : null)), "html", null, true);
        echo "\"
       data-note-num=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["noteNum"]) ? $context["noteNum"] : null)), "html", null, true);
        echo "\"
       data-ask-num=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["askNum"]) ? $context["askNum"] : null)), "html", null, true);
        echo "\"
       data-discussion-num=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["discussionNum"]) ? $context["discussionNum"] : null)), "html", null, true);
        echo "\">
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/dashboard/course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  133 => 50,  129 => 49,  125 => 48,  121 => 47,  117 => 46,  113 => 45,  105 => 40,  101 => 39,  95 => 36,  91 => 35,  85 => 32,  81 => 31,  72 => 25,  60 => 16,  54 => 13,  50 => 12,  44 => 9,  40 => 8,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/dashboard/course.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\dashboard\\course.html.twig");
    }
}
