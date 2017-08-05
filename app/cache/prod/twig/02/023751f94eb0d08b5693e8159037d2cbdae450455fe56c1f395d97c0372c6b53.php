<?php

/* course-manage/chapter/list-item.html.twig */
class __TwigTemplate_0efc2719c4c3591439ae0b312929e91714f9fdf9102145fbbda3a4e3d5368c6b extends Twig_Template
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
        echo "<li id=\"chapter-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()), "html", null, true);
        echo "\" class=\"task-manage-item drag task-manage-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()), "html", null, true);
        echo " js-task-manage-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()), "html", null, true);
        echo " clearfix\">
  <div class=\"item-content\">
    </i>第<span class=\"number\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()), "html", null, true);
        echo "</span>";
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "chapter")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")), "html", null, true);
        } elseif (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
        } elseif (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "lesson")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务"), "html", null, true);
        }
        echo "：";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), 30);
        echo "
  </div>
  <div class=\"item-actions\">
    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more btn gray-darker\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-anonymous-iconfont mrs\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
        echo "
      </a>
      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">
        ";
        // line 10
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "chapter")) {
            // line 11
            echo "          <li>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "unit", "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 15
        echo "        ";
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) != "lesson")) {
            // line 16
            echo "          <li>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lesson", "chapterId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 20
        echo "      </ul>
    </span>

    <a class=\"btn gray-darker\" href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_edit", array("chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
      <i class=\"es-icon es-icon-edit mrs\"></i>  
      ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "
    </a>
    <a href=\"javascript:;\" class=\"btn gray-darker delete-item\" data-type=\"chapter\" data-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_delete", array("chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
      <i class=\"es-icon es-icon-delete mrs\"></i>
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "
    </a>
    ";
        // line 31
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "chapter")) {
            // line 32
            echo "      <a href=\"javascript:;\" class=\"btn gray-darker js-chapter-toggle-show\">
        <i class=\"es-icon  es-icon-keyboardarrowup mr5 js-remove-icon\"></i>
        <span class=\"js-remove-text\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
            echo "</span>
      </a>
    ";
        }
        // line 37
        echo "  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "course-manage/chapter/list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  112 => 34,  108 => 32,  106 => 31,  101 => 29,  96 => 27,  91 => 25,  86 => 23,  81 => 20,  72 => 17,  69 => 16,  66 => 15,  57 => 12,  54 => 11,  52 => 10,  46 => 7,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/chapter/list-item.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\chapter\\list-item.html.twig");
    }
}
