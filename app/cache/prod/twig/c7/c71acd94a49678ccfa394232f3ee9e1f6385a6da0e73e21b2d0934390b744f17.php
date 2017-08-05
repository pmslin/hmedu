<?php

/* course-manage/homework-check/check-list.html.twig */
class __TwigTemplate_3048cd10da7c4836cfb94e6d60b6a9993dc12ad7408b8ae23b4bbd7b52d21e8f extends Twig_Template
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
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/homework-check/check-list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "homework-check";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作业批阅"), "html", null, true);
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
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/homework-check/check-list.html.twig", 8)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null))));
        // line 9
        echo "    <div class=\"panel-body\">
      ";
        // line 10
        if ((array_key_exists("isTeacher", $context) &&  !(isset($context["isTeacher"]) ? $context["isTeacher"] : null))) {
            // line 11
            echo "        <span class=\"color-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前用户不是本课程教师，没有批阅作业的权限。"), "html", null, true);
            echo "</span>
      ";
        }
        // line 13
        echo "
      ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Testpaper/Manage:checkList", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course", "type" => "homework", "testpaperIds" => (isset($context["homeworkIds"]) ? $context["homeworkIds"] : null))));
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/homework-check/check-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  60 => 13,  54 => 11,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  41 => 6,  31 => 3,  27 => 1,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/homework-check/check-list.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\homework-check\\check-list.html.twig");
    }
}
