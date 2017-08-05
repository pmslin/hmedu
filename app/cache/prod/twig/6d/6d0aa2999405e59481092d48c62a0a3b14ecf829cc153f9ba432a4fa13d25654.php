<?php

/* question-manage/question-tr.html.twig */
class __TwigTemplate_1d2256824ff8251f658341d1a770be71a1cfaaa9551c0d477f9ba46118cae05c extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("macro.html.twig", "question-manage/question-tr.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["questionTypesDict"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 4
        echo "
<tr data-role='item'>
  <td><input value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-item\" ></td>
  <td>
    <a class=\"link-primary\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_preview", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 9
        if ((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array()), null)) : (null))) {
            echo "<span class=\"glyphicon glyphicon-picture\"></span>";
        }
        // line 10
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->env->getExtension('AppBundle\Twig\WebExtension')->fillQuestionStemTextFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())), 40);
        echo "
    </a>
    <div>
      ";
        // line 13
        $this->loadTemplate("question-manage/part/belong.html.twig", "question-manage/question-tr.html.twig", 13)->display(array_merge($context, array("question" => (isset($context["question"]) ? $context["question"] : null), "courses" => (isset($context["courses"]) ? $context["courses"] : null), "courseTasks" => (isset($context["courseTasks"]) ? $context["courseTasks"] : null))));
        // line 14
        echo "
      ";
        // line 15
        if ((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material") &&  !$this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()))) {
            // line 16
            echo "        <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未完成"), "html", null, true);
            echo "</span>
      ";
        }
        // line 18
        echo "    </div>

  </td>
  <td>
    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), array(), "array"), "html", null, true);
        echo "
    ";
        // line 23
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            // line 24
            echo "      <br><small class=\"color-gray\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("子题"), "html", null, true);
            echo ")</small>
    ";
        }
        // line 26
        echo "  </td>
  <td>
    ";
        // line 28
        echo $context["macro"]->getuser_link($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "updatedUserId", array()), array(), "array"));
        echo "
    <br />
    <span class=\"color-gray text-sm\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "updatedTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"mrm link-primary\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_preview", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
        echo "</a>
      <a class=\"dropdown-toggle link-primary\" href=\"javascript:;\"  data-toggle=\"dropdown\">
        更多<i class=\"es-icon es-icon-arrowdropdown\"></i>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        ";
        // line 39
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            // line 40
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "parentId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list mrm\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理子题"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 42
        echo "        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_update", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit mrm\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</a></li>
        <li><a href=\"javascript:\" data-name='";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目"), "html", null, true);
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("含子题"), "html", null, true);
            echo ")";
        }
        echo "' data-role='item-delete' data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_delete", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\"><span class=\"es-icon es-icon-delete mrm\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "question-manage/question-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  118 => 42,  110 => 40,  108 => 39,  98 => 34,  91 => 30,  86 => 28,  82 => 26,  75 => 24,  73 => 23,  69 => 22,  63 => 18,  57 => 16,  55 => 15,  52 => 14,  50 => 13,  43 => 10,  39 => 9,  35 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/question-tr.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\question-tr.html.twig");
    }
}
