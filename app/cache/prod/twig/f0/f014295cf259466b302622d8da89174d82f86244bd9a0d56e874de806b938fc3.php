<?php

/* course-manage/dashboard/layout.html.twig */
class __TwigTemplate_fb2a10b16edf95dcedaa01eb8ec5390d90ae818adbb3d894db22df61a62172fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'dashboard' => array($this, 'block_dashboard'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/dashboard/layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "dashboard";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程学习数据"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"panel panel-default\">
    ";
        // line 8
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/dashboard/layout.html.twig", 8)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null))));
        // line 9
        echo "    <div class=\"panel-body dashboard-panel\">
      <ul class=\"nav nav-pills mbl\">
        <li class=\"";
        // line 11
        if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : null))) : ("")) == "course_dashboard")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_dashboard", array("courseSetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "tab" => "course")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("数据概览"), "html", null, true);
        echo "
          </a>
        </li>

        <li class=\"";
        // line 16
        if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : null))) : ("")) == "task_dashboard")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_dashboard", array("courseSetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "tab" => "task")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务完成率"), "html", null, true);
        echo "
          </a>
        </li>

        <li class=\"";
        // line 21
        if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : null))) : ("")) == "task_learn_dashboard")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_dashboard", array("courseSetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "tab" => "task-detail")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务学习详情"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      ";
        // line 27
        $this->displayBlock('dashboard', $context, $blocks);
        // line 28
        echo "    </div>
  </div>
";
    }

    // line 27
    public function block_dashboard($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course-manage/dashboard/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  102 => 28,  100 => 27,  90 => 22,  84 => 21,  75 => 17,  69 => 16,  60 => 12,  54 => 11,  50 => 9,  48 => 8,  45 => 7,  42 => 6,  32 => 3,  28 => 1,  26 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/dashboard/layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\dashboard\\layout.html.twig");
    }
}
