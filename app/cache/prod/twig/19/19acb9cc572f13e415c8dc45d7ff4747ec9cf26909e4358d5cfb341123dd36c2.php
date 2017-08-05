<?php

/* file-chooser/parts/course-file-choose.html.twig */
class __TwigTemplate_2ae47fb7dc6ffb9281da0dc70bd09d0c3f602b869b4d1be0baf119ce1dd0ba18 extends Twig_Template
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
        echo "<span class=\"input-group js-file-name-group mb10\">
  <input name=\"file-filter-by-file-name\" class=\"form-control js-course-file-name\" type=\"text\" placeholder=\"输入";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("placeholder", $context)) ? (_twig_default_filter((isset($context["placeholder"]) ? $context["placeholder"] : null), null)) : (null)), "html", null, true);
        echo "标题关键字\">
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default js-course-browser-search\" data-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_course_file_choose", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null), "type" => ((array_key_exists("fileType", $context)) ? (_twig_default_filter((isset($context["fileType"]) ? $context["fileType"] : null), "")) : ("")), "courseType" => "course")), "html", null, true);
        echo "\" data-loading-text=\"正在加载，请稍等\">搜索</button>
  </span>
</span>


<div class=\"course-file-browser \" data-role=\"course-file-browser\"
     data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_course_file_choose", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null), "type" => ((array_key_exists("fileType", $context)) ? (_twig_default_filter((isset($context["fileType"]) ? $context["fileType"] : null), "")) : ("")), "courseType" => "course")), "html", null, true);
        echo "\">
       
</div>

<div class=\"js-course-file-search-form\">
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ((array_key_exists("fileType", $context)) ? (_twig_default_filter((isset($context["fileType"]) ? $context["fileType"] : null), "")) : ("")), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"keyword\" value=\"\">
  <input type=\"hidden\" name=\"page\" value=\"1\">
</div>


";
    }

    public function getTemplateName()
    {
        return "file-chooser/parts/course-file-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  36 => 10,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/parts/course-file-choose.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\file-chooser\\parts\\course-file-choose.html.twig");
    }
}
