<?php

/* question-manage/question-pick-tr.html.twig */
class __TwigTemplate_f3bb96094b79edc98c2e2f550a8d02dd59226a4c9dfdb3d43199dcae4b1e87f1 extends Twig_Template
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
        $context["questionTypesDict"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 2
        echo "
<tr data-type=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo "\">
  ";
        // line 4
        if ( !((array_key_exists("replace", $context)) ? (_twig_default_filter((isset($context["replace"]) ? $context["replace"] : null), null)) : (null))) {
            // line 5
            echo "    <th><input type=\"checkbox\" data-role=\"batch-item\" data-replace=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("replace", $context)) ? (_twig_default_filter((isset($context["replace"]) ? $context["replace"] : null), "")) : ("")), "html", null, true);
            echo "\" data-question-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "\" ></th>
  ";
        }
        // line 7
        echo "  <td>
    ";
        // line 8
        if ((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array()), "")) : (""))) {
            echo "<span class=\"glyphicon glyphicon-picture\"></span>";
        }
        // line 9
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->env->getExtension('AppBundle\Twig\WebExtension')->fillQuestionStemTextFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())), 40);
        echo "
    ";
        // line 10
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            // line 11
            echo "      <small class=\"color-gray\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("子题"), "html", null, true);
            echo ")</small>
    ";
        }
        // line 13
        echo "    <br>
    ";
        // line 14
        $this->loadTemplate("question-manage/part/belong.html.twig", "question-manage/question-pick-tr.html.twig", 14)->display(array_merge($context, array("question" => (isset($context["question"]) ? $context["question"] : null), "courses" => (isset($context["courses"]) ? $context["courses"] : null), "courseTasks" => (isset($context["courseTasks"]) ? $context["courseTasks"] : null))));
        // line 15
        echo "  </td>
  <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), array(), "array"), "html", null, true);
        echo "</td>
  ";
        // line 17
        if ((((array_key_exists("targetType", $context)) ? (_twig_default_filter((isset($context["targetType"]) ? $context["targetType"] : null), "testpaper")) : ("testpaper")) == "testpaper")) {
            // line 18
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()), "html", null, true);
            echo "</td>
  ";
        }
        // line 20
        echo "  <td>
    <button data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_preview", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "isNew" => true)), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm question-preview\" data-role=\"preview-btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
        echo "</button>
    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-role=\"picked-item\" data-replace=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "replace"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "replace"), "method"), null)) : (null)), "html", null, true);
        echo "\" data-question-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_picked", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\">";
        if (((array_key_exists("replace", $context)) ? (_twig_default_filter((isset($context["replace"]) ? $context["replace"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("替换"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选择"), "html", null, true);
        }
        echo "</button>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "question-manage/question-pick-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  82 => 21,  79 => 20,  73 => 18,  71 => 17,  67 => 16,  64 => 15,  62 => 14,  59 => 13,  52 => 11,  50 => 10,  45 => 9,  41 => 8,  38 => 7,  30 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/question-pick-tr.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\question-pick-tr.html.twig");
    }
}
