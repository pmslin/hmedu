<?php

/* testpaper/manage/testpaper-list-tr.html.twig */
class __TwigTemplate_5afb46f32c7a585748485a14862a4b362a3d6b8b395631c7efe36f450292611a extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("macro.html.twig", "testpaper/manage/testpaper-list-tr.html.twig", 1);
        // line 2
        echo "<tr data-role='item'>
  <td><input value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" ></td>
  <td>
    <a class=\"link-primary\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_preivew", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), 40);
        echo "</a>
  </td>
  <td>
    ";
        // line 8
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "draft")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("草稿"), "html", null, true);
        }
        // line 9
        echo "    ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "open")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
        }
        // line 10
        echo "    ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "closed")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
        }
        // line 11
        echo "  </td>
  <td>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%itemCount%题", array("%itemCount%" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "itemCount", array()))), "html", null, true);
        echo " <span class=\"color-gray\">/</span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%score%分", array("%score%" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "score", array()))), "html", null, true);
        echo "
    ";
        // line 14
        if (((($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedCondition", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedCondition", array(), "any", false, true), 0, array(), "array"), 0)) : (0)) > 0)) {
            // line 15
            echo "      <div class=\"color-gray\"><small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("及格%passedCondition%分", array("%passedCondition%" => (($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedCondition", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedCondition", array(), "any", false, true), 0, array(), "array"), 0)) : (0)))), "html", null, true);
            echo "</small></div>
    ";
        }
        // line 17
        echo "  </td>
  <td>
    ";
        // line 19
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%limitedTime%分钟", array("%limitedTime%" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无限制"), "html", null, true);
        }
        // line 20
        echo "  </td>
  <td>
    ";
        // line 22
        echo $context["macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "
    <br />
    <span class=\"color-gray text-sm\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "updatedTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"link-primary\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_preivew", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\"  target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
        echo "</a>
      <a class=\"ml10 link-primary\" href=\"#\" type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        更多<i class=\"es-icon es-icon-arrowdropdown\"></i>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        ";
        // line 33
        if (twig_in_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()), array(0 => "draft", 1 => "closed"))) {
            // line 34
            echo "          <li><a class=\"open-testpaper\" href=\"javascript:\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("真的要发布%name%吗？ 试卷发布后无论是否关闭都将无法修改。", array("%name%" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()))), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_publish", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"es-icon es-icon--check-circle mrm\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布试卷"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 36
        echo "        ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "open")) {
            // line 37
            echo "          <li><a class=\"close-testpaper\" href=\"javascript:\" title=\"";
            if ((($this->getAttribute((isset($context["testpaperActivities"]) ? $context["testpaperActivities"] : null), $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaperActivities"]) ? $context["testpaperActivities"] : null), $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), array(), "array"), null)) : (null))) {
                echo "该试卷已被任务引用，真的要关闭吗？";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("真的要关闭试卷%name%吗？", array("%name%" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()))), "html", null, true);
            }
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_close", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"es-icon es-icon-close01 mrm\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭试卷"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 39
        echo "
        ";
        // line 40
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "draft")) {
            // line 41
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_update", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit mrm\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑试卷信息"), "html", null, true);
            echo "</a></li>
          <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_questions", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list mrm\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理题目"), "html", null, true);
            echo "</a></li>
          ";
            // line 44
            echo "          <li><a href=\"javascript:\" data-name='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷"), "html", null, true);
            echo "' data-role='item-delete' data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_delete", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"es-icon es-icon-delete mrm\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除试卷"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 46
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/testpaper-list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 46,  152 => 44,  146 => 42,  139 => 41,  137 => 40,  134 => 39,  120 => 37,  117 => 36,  107 => 34,  105 => 33,  95 => 28,  88 => 24,  83 => 22,  79 => 20,  73 => 19,  69 => 17,  63 => 15,  61 => 14,  55 => 13,  51 => 11,  46 => 10,  41 => 9,  37 => 8,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/testpaper-list-tr.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\testpaper-list-tr.html.twig");
    }
}
