<?php

/* question-manage/picker-search-form.html.twig */
class __TwigTemplate_8183b9eb9f7772792e7195a8bc311276dc7d6647570132a2a46963a834e3c511 extends Twig_Template
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
        echo "<form id=\"question-search-form\" class=\"form-inline well well-sm\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_picker", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "targetType" => "testpaper", "replace" => (isset($context["replace"]) ? $context["replace"] : null))), "html", null, true);
        echo "\" novalidate>
  <div class=\"form-group\">
    <select class=\"form-control width-150\" name=\"courseId\" data-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_show_tasks", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\">
      <option value=\"0\" ";
        // line 4
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "courseId", 1 => 0), "method")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("按课程"), "html", null, true);
        echo "</option>
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($context["course"]) {
                // line 6
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "courseId", 1 => ""), "method") == $this->getAttribute($context["course"], "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</option>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </select>
    <select class=\"form-control width-150\" ";
        // line 9
        if ( !((array_key_exists("courseTasks", $context)) ? (_twig_default_filter((isset($context["courseTasks"]) ? $context["courseTasks"] : null), null)) : (null))) {
            echo "style=\"display:none;\"";
        }
        echo " name=\"lessonId\">
      <option value=\"0\" ";
        // line 10
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lessonId", 1 => 0), "method")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请选择"), "html", null, true);
        echo "</option>
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("courseTasks", $context)) ? (_twig_default_filter((isset($context["courseTasks"]) ? $context["courseTasks"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if ($context["task"]) {
                // line 12
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
        // line 14
        echo "    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
  </div>

  <input type=\"hidden\" name=\"excludeIds\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter((($this->getAttribute((isset($context["conditions"]) ? $context["conditions"] : null), "excludeIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["conditions"]) ? $context["conditions"] : null), "excludeIds", array()), "")) : ("")), ","), null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["conditions"]) ? $context["conditions"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["conditions"]) ? $context["conditions"] : null), "type", array()), null)) : (null)), "html", null, true);
        echo "\">

  <button class=\"btn btn-primary btn-sm search-question-btn\" data-role=\"search-btn\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

</form>";
    }

    public function getTemplateName()
    {
        return "question-manage/picker-search-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  114 => 22,  110 => 21,  102 => 18,  96 => 14,  80 => 12,  75 => 11,  67 => 10,  61 => 9,  58 => 8,  42 => 6,  37 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/picker-search-form.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\picker-search-form.html.twig");
    }
}
