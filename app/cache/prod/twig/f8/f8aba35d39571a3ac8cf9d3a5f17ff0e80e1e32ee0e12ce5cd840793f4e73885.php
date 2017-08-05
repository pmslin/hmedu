<?php

/* courseset-manage/layout.html.twig */
class __TwigTemplate_173cace94a3d8245fce5393e3b7838f7c38743e1b1603ea66877335f8068eac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "courseset-manage/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'course_header' => array($this, 'block_course_header'),
            'main' => array($this, 'block_main'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["use_webapck_loader"] = true;
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-intro.js", 1 => "app/js/courseset-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $this->displayBlock('course_header', $context, $blocks);
        // line 12
        echo "  ";
        // line 19
        echo "  ";
        // line 20
        echo "  <div class=\"intro-fixed-group js-intro-btn-group hidden\">
    <a type=\"button\" class=\"intro-btn\" href=\"http://www.qiqiuyu.com/\" target=\"_blank\">
    编辑帮助
    </a>
  </div>
  <div class=\"row\">
    <div class=\"col-md-3\">
      ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:sidebar", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "curCourse" => ((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : null), null)) : (null)), "sideNav" => ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null)))));
        echo "
    </div>
    <div class=\"col-md-9\">
      ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 31
        echo "    </div>
  </div>
  ";
    }

    // line 9
    public function block_course_header($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:header", array("courseSet" => (isset($context["courseSet"]) ? $context["courseSet"] : null), "course" => ((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : null), null)) : (null)), "manage" => true)));
        echo "
  ";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
    }

    // line 35
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "courseset-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  88 => 30,  81 => 10,  78 => 9,  72 => 31,  70 => 30,  64 => 27,  55 => 20,  53 => 19,  51 => 12,  48 => 9,  45 => 8,  37 => 3,  33 => 1,  31 => 6,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\courseset-manage\\layout.html.twig");
    }
}
