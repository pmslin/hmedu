<?php

/* course-manage/panel-header/students-btn-group.html.twig */
class __TwigTemplate_8f68604660488fa04002174485c58644933f1e87123a3f360a3c46b7c52d7218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"pull-right\">
";
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_manage_student", 0))) {
            // line 3
            echo "  <button class=\"btn btn-info btn-sm mhs \" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_add", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-anonymous-iconfont\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加学员"), "html", null, true);
            echo "</button>
  ";
            // line 4
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
                // line 5
                echo "    <a class=\"btn btn-info  btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_index", array("type" => "course-member", "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批量导入"), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 7
                echo "    <a class=\"btn btn-info  btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程未发布,不可导入学员"), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批量导入"), "html", null, true);
                echo "</a>
  ";
            }
        }
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_export_student", false))) {
            // line 11
            echo "  <a class=\"btn btn-info btn-sm  mhs\" id=\"export-students-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_student_export_csv", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-datas-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_student_export_datas", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-loading-text=\"正在导出\">
    <i class=\"glyphicon glyphicon-export\"></i> ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出"), "html", null, true);
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            // line 13
            echo "  </a>
";
        }
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "course-manage/panel-header/students-btn-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  66 => 13,  59 => 12,  52 => 11,  50 => 10,  41 => 7,  33 => 5,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/panel-header/students-btn-group.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\panel-header\\students-btn-group.html.twig");
    }
}
