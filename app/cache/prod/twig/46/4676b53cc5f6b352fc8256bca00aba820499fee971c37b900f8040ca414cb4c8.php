<?php

/* course-manage/chapter/chapter-modal.html.twig */
class __TwigTemplate_5174ffdb37d52af42f9e40a1bc78c222d153ac22c27e1ccce61e6c6885256224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "course-manage/chapter/chapter-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/course-chapter-manage/index.js"));
        // line 5
        $context["chapter"] = ((array_key_exists("chapter", $context)) ? (_twig_default_filter((isset($context["chapter"]) ? $context["chapter"] : null), null)) : (null));
        // line 41
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ((isset($context["chapter"]) ? $context["chapter"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
        }
        if (((isset($context["type"]) ? $context["type"] : null) == "unit")) {
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节"), "html", null, true);
            }
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "lesson")) {
            echo "任务";
        } else {
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章"), "html", null, true);
            }
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<form id=\"course-chapter-form\" class=\"form-horizontal\" method=\"post\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : null), "html", null, true);
            echo "\" ";
        }
        // line 13
        echo "  ";
        if ((isset($context["chapter"]) ? $context["chapter"] : null)) {
            // line 14
            echo "\t  action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\"
\t";
        } else {
            // line 16
            echo "\t  action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 18
        echo "  >
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      ";
        // line 21
        if (((isset($context["type"]) ? $context["type"] : null) == "unit")) {
            // line 22
            echo "        <label for=\"chapter-title-field\">";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
            echo "</label>
      ";
        } elseif ((        // line 23
(isset($context["type"]) ? $context["type"] : null) == "lesson")) {
            // line 24
            echo "        <label for=\"chapter-title-field\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务"), "html", null, true);
            echo "</label>
      ";
        } else {
            // line 26
            echo "        <label for=\"chapter-title-field\">";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
            echo "</label>
      ";
        }
        // line 28
        echo "    </div>
    <div class=\"col-md-8 controls\"><input id=\"chapter-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 29
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue((isset($context["chapter"]) ? $context["chapter"] : null), "title");
        echo "\" class=\"form-control\"></div>
  </div>
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
</form>

";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</button>
    <button id=\"course-chapter-btn\" data-loading-text=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-chapter-form\" data-chapter=\"";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")), "html", null, true);
        echo "\" data-part=\"";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
        echo "\">";
        if ((isset($context["chapter"]) ? $context["chapter"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "course-manage/chapter/chapter-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  144 => 37,  141 => 36,  133 => 31,  128 => 29,  125 => 28,  114 => 26,  108 => 24,  106 => 23,  96 => 22,  94 => 21,  89 => 18,  83 => 16,  77 => 14,  74 => 13,  67 => 12,  64 => 11,  40 => 8,  37 => 7,  33 => 1,  31 => 41,  29 => 5,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/chapter/chapter-modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\chapter\\chapter-modal.html.twig");
    }
}
