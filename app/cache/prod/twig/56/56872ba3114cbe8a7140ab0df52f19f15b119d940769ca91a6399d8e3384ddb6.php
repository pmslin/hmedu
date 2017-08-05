<?php

/* question-manage/question-picked-tr.html.twig */
class __TwigTemplate_c63d7bc55c831acc0cc1ec4f7e327386a3438f65a1e534a0cfa6e89d96effb90 extends Twig_Template
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
<tr id=\"testpaper-item-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo "\" ";
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "parentId", array()) > 0)) {
            echo "data-parent-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "parentId", array()), "html", null, true);
            echo "\"";
        }
        echo " class=\"";
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()) > 0)) {
            echo " have-sub-questions";
        }
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "parentId", array()) > 0)) {
            echo " is-sub-question";
        } else {
            echo " is-question";
        }
        echo "\">
  <td>";
        // line 4
        if ( !$this->getAttribute((isset($context["question"]) ? $context["question"] : null), "parentId", array())) {
            echo "<span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>";
        }
        echo "</td>
  <td>
    <input ";
        // line 6
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "parentId", array()) != 0)) {
            echo " class=\"hidden\" ";
        }
        echo " class=\"notMoveHandle\" type=\"checkbox\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-role=\"batch-item\" >
    <input type=\"hidden\" name=\"questionIds[]\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\">
  </td>
  <td class=\"seq\">";
        // line 9
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()) > 0)) {
            echo "<span class=\"color-gray\">~</span>";
        } else {
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "seq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "seq", array()), " ")) : (" ")), "html", null, true);
        }
        echo "</td>
  <td>
    ";
        // line 11
        if ((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array()), "")) : (""))) {
            echo "<span class=\"glyphicon glyphicon-picture\"></span>";
        }
        // line 12
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array(), "array"), 40);
        echo "
    <div>
      ";
        // line 14
        $this->loadTemplate("question-manage/part/belong.html.twig", "question-manage/question-picked-tr.html.twig", 14)->display(array_merge($context, array("question" => (isset($context["question"]) ? $context["question"] : null), "courses" => (isset($context["courses"]) ? $context["courses"] : null), "courseTasks" => (isset($context["courseTasks"]) ? $context["courseTasks"] : null))));
        // line 15
        echo "    </div>
  </td>
  <td>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), array(), "array"), "--")) : ("--")), "html", null, true);
        echo "</td>
  <td>";
        // line 18
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("difficulty", $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "difficulty", array()));
        echo "</td>
  <td>
    <input name=\"scores[]\" class=\"notMoveHandle form-control input-sm\"
      ";
        // line 21
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()) > 0)) {
            echo "type=\"hidden\"";
        } else {
            echo "type=\"text\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->scoreTextFilter((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()))) : ($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array())))), "html", null, true);
        echo "\" ";
        if (((array_key_exists("testpaper", $context)) ? (_twig_default_filter((isset($context["testpaper"]) ? $context["testpaper"] : null), null)) : (null))) {
            echo "data-miss-score=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "metas", array(), "any", false, true), "missScore", array(), "any", false, true), (isset($context["type"]) ? $context["type"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "metas", array(), "any", false, true), "missScore", array(), "any", false, true), (isset($context["type"]) ? $context["type"] : null), array(), "array"), 0)) : (0)), "html", null, true);
            echo "\"";
        }
        echo " >
  </td>

  <td>
    <div class=\"btn-group\">
      ";
        // line 26
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "parentId", array()) == 0)) {
            // line 27
            echo "        <a class=\"link-primary\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_preview", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"notMoveHandle mrm \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
            echo "</a>
        <a class=\"link-primary\" href=\"javascript:\" class=\"notMoveHandle mrm\" data-role=\"item-delete-btn\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</a>
        <a class=\"link-primary\" href=\"javascript:\" class=\"notMoveHandle\" data-role=\"replace-item\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_picker", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "replace" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("替换"), "html", null, true);
            echo "</a>
      ";
        }
        // line 31
        echo "    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "question-manage/question-picked-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 31,  135 => 29,  131 => 28,  124 => 27,  122 => 26,  102 => 21,  96 => 18,  92 => 17,  88 => 15,  86 => 14,  80 => 12,  76 => 11,  67 => 9,  62 => 7,  54 => 6,  47 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/question-picked-tr.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\question-picked-tr.html.twig");
    }
}
