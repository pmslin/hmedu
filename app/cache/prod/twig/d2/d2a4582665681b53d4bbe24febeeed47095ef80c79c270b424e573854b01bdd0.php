<?php

/* question-manage/search-form.html.twig */
class __TwigTemplate_8c7bc55a1286027dabaf3a0f510f1b6db22d85418b2fbcf1dc73cd509a617474 extends Twig_Template
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
        echo "<form class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"type\">
      ";
        // line 4
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("questionType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--按题型--"));
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <select class=\"form-control width-150\" name=\"courseId\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_show_tasks", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\">
      <option value=\"0\" ";
        // line 10
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "courseId", 1 => 0), "method")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("按课程"), "html", null, true);
        echo "</option>
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchCourses"]) ? $context["searchCourses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["selectCourse"]) {
            if ($context["selectCourse"]) {
                // line 12
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["selectCourse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "courseId", 1 => ""), "method") == $this->getAttribute($context["selectCourse"], "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["selectCourse"], "title", array()), "html", null, true);
                echo "</option>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectCourse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </select>
    <select class=\"form-control width-150\" ";
        // line 15
        if ( !((array_key_exists("showTasks", $context)) ? (_twig_default_filter((isset($context["showTasks"]) ? $context["showTasks"] : null), null)) : (null))) {
            echo "style=\"display:none;\"";
        }
        echo " name=\"lessonId\">
      <option value=\"0\" ";
        // line 16
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lessonId", 1 => 0), "method")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请选择"), "html", null, true);
        echo "</option>
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("showTasks", $context)) ? (_twig_default_filter((isset($context["showTasks"]) ? $context["showTasks"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if ($context["task"]) {
                // line 18
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lessonId", 1 => ""), "method") == $this->getAttribute($context["task"], "id", array()))) {
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
        // line 20
        echo "    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
  </div>

  <button class=\"btn btn-primary btn-sm\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
</form>";
    }

    public function getTemplateName()
    {
        return "question-manage/search-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  109 => 24,  103 => 20,  87 => 18,  82 => 17,  74 => 16,  68 => 15,  65 => 14,  49 => 12,  44 => 11,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/search-form.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\search-form.html.twig");
    }
}
