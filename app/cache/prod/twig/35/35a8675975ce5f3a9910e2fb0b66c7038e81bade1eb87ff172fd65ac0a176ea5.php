<?php

/* course-manage/panel-header/course-publish-header.html.twig */
class __TwigTemplate_4c55a070726de0276e77ecfe32a03dc4ecd2cb5165aa1881bc05bb2fc2e7618e extends Twig_Template
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
        $context["side_navs"] = array("tasks" => "计划任务", "info" => "计划设置", "marketing" => "营销设置", "teachers" => "教师设置", "students" => "学员管理", "testpaper-check" => "试卷批阅", "homework-check" => "作业批阅", "dashboard" => "学习数据", "orders" => "订单查询");
        // line 4
        $context["menuType"] = "course";
        // line 5
        if (twig_in_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), array(0 => "base", 1 => "detail", 2 => "cover", 3 => "question", 4 => "testpaper", 5 => "files", 6 => "plan"))) {
            // line 6
            echo "    ";
            $context["menuType"] = "courseSet";
        }
        // line 8
        echo "
";
        // line 10
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) != "live")) {
            // line 11
            echo "  <div class=\"panel-heading\">
    ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["side_navs"]) ? $context["side_navs"] : null), (isset($context["code"]) ? $context["code"] : null), array(), "array")), "html", null, true);
            echo "

   ";
            // line 24
            echo "    ";
            // line 27
            echo "    ";
            if (((array_key_exists("btnGroup", $context)) ? (_twig_default_filter((isset($context["btnGroup"]) ? $context["btnGroup"] : null))) : (""))) {
                // line 28
                echo "      ";
                $this->loadTemplate((("course-manage/panel-header/" . (isset($context["code"]) ? $context["code"] : null)) . "-btn-group.html.twig"), "course-manage/panel-header/course-publish-header.html.twig", 28)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null))));
                // line 29
                echo "    ";
            }
            // line 30
            echo "  </div>
";
        } else {
            // line 32
            echo "  <div class=\"panel-heading\">
    ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["side_navs"]) ? $context["side_navs"] : null), (isset($context["code"]) ? $context["code"] : null), array(), "array")), "html", null, true);
            echo "
    ";
            // line 34
            if (((array_key_exists("btnGroup", $context)) ? (_twig_default_filter((isset($context["btnGroup"]) ? $context["btnGroup"] : null))) : (""))) {
                // line 35
                echo "      ";
                $this->loadTemplate((("course-manage/panel-header/" . (isset($context["code"]) ? $context["code"] : null)) . "-btn-group.html.twig"), "course-manage/panel-header/course-publish-header.html.twig", 35)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null))));
                // line 36
                echo "    ";
            }
            // line 37
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/panel-header/course-publish-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 37,  69 => 36,  66 => 35,  64 => 34,  60 => 33,  57 => 32,  53 => 30,  50 => 29,  47 => 28,  44 => 27,  42 => 24,  37 => 12,  34 => 11,  32 => 10,  29 => 8,  25 => 6,  23 => 5,  21 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/panel-header/course-publish-header.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\panel-header\\course-publish-header.html.twig");
    }
}
