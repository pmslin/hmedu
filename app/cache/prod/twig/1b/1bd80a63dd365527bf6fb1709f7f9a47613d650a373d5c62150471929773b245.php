<?php

/* my/teaching/course-tab.html.twig */
class __TwigTemplate_1dbb314340a2313597ec1a34f0f75615e32674521c08042f249dcc5a57f505cb extends Twig_Template
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
        echo "<ul class=\"nav nav-pills mb15\">

\t<li class=\"";
        // line 3
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets", array("filter" => "normal"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("普通课程"), "html", null, true);
        echo "</a></li>
\t<li class=\"";
        // line 4
        if (((isset($context["filter"]) ? $context["filter"] : null) == "live")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets", array("filter" => "live"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播课程"), "html", null, true);
        echo "</a></li>

\t";
        // line 7
        echo "\t<li class=\"";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets", array("filter" => "classroom"));
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "</a></li>
\t<li class=\"";
        // line 8
        if (((isset($context["filter"]) ? $context["filter"] : null) == "open")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_open_courses", array("filter" => "open"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("录播公开课"), "html", null, true);
        echo "</a></li>
\t<li class=\"";
        // line 9
        if (((isset($context["filter"]) ? $context["filter"] : null) == "liveOpen")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_open_courses", array("filter" => "liveOpen"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播公开课"), "html", null, true);
        echo "</a></li>

</ul>
";
    }

    public function getTemplateName()
    {
        return "my/teaching/course-tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  56 => 8,  44 => 7,  33 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/teaching/course-tab.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\my\\teaching\\course-tab.html.twig");
    }
}
