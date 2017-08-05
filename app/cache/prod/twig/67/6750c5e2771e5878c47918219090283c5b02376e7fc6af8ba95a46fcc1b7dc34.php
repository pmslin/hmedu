<?php

/* question-manage/part/belong.html.twig */
class __TwigTemplate_5a4de9218acc036a096f2268002811517eddbeada8bd4dc3b6a75e03cd11e50e extends Twig_Template
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
        $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array()), array(), "array"), null)) : (null));
        // line 2
        $context["task"] = (($this->getAttribute((isset($context["courseTasks"]) ? $context["courseTasks"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseTasks"]) ? $context["courseTasks"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "lessonId", array()), array(), "array"), null)) : (null));
        // line 3
        echo "<small class=\"text-muted\">
  ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从属于"), "html", null, true);
        echo "
  ";
        // line 5
        if (((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        }
        // line 6
        echo "  ";
        if (((array_key_exists("task", $context)) ? (_twig_default_filter((isset($context["task"]) ? $context["task"] : null), (isset($context["task"]) ? $context["task"] : null))) : ((isset($context["task"]) ? $context["task"] : null)))) {
            echo " • ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
        }
        // line 7
        echo "  ";
        if (( !$this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array()) &&  !$this->getAttribute((isset($context["question"]) ? $context["question"] : null), "lessonId", array()))) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("本课程"), "html", null, true);
            echo "
  ";
        }
        // line 10
        echo "</small>";
    }

    public function getTemplateName()
    {
        return "question-manage/part/belong.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 8,  40 => 7,  34 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/part/belong.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\part\\belong.html.twig");
    }
}
