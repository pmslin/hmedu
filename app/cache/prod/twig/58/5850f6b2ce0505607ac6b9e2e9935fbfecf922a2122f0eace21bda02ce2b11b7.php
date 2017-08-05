<?php

/* course-manage/testpaper-check/result-list.html.twig */
class __TwigTemplate_76c22cb215fbe84907c6d741167603d3969f27c58ea17a824f3ae7466fd6c53f extends Twig_Template
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
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/testpaper-check/result-list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["macro"] = $this->loadTemplate("macro.html.twig", "course-manage/testpaper-check/result-list.html.twig", 4);
        // line 6
        $context["side_nav"] = "testpaper-check";
        // line 7
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "type", array()) == "homework")) {
            // line 8
            $context["side_nav"] = "homework-check";
            // line 9
            $context["typeName"] = "作业";
        } else {
            // line 11
            $context["side_nav"] = "testpaper-check";
            // line 12
            $context["typeName"] = "试卷";
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷批阅"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "<span class=\"mh5\">／</span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
        echo "
      ";
        // line 19
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published")) {
            // line 20
            echo "        <button class=\"btn btn-success btn-sm pull-right js-publish-course\" 
          data-url=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_publish", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布计划"), "html", null, true);
            echo "
        </button>
      ";
        }
        // line 25
        echo "      ";
        // line 28
        echo "    </div>
    <div class=\"panel-body\">
      ";
        // line 30
        if ((array_key_exists("isTeacher", $context) &&  !(isset($context["isTeacher"]) ? $context["isTeacher"] : null))) {
            // line 31
            echo "        <span class=\"color-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前用户不是本课程教师，没有批阅%typeName%的权限。", array("%typeName%" => (isset($context["typeName"]) ? $context["typeName"] : null))), "html", null, true);
            echo "</span>
      ";
        }
        // line 33
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Testpaper/Manage:resultList", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "source" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/testpaper-check/result-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  93 => 31,  91 => 30,  87 => 28,  85 => 25,  79 => 22,  75 => 21,  72 => 20,  70 => 19,  64 => 18,  60 => 16,  57 => 15,  45 => 3,  41 => 1,  38 => 12,  36 => 11,  33 => 9,  31 => 8,  29 => 7,  27 => 6,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/testpaper-check/result-list.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\testpaper-check\\result-list.html.twig");
    }
}
