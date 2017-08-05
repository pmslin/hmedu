<?php

/* @root\src\AppBundle\Extensions\StatusTemplate\become_student.tpl.html.twig */
class __TwigTemplate_ff2dbaad5ea7f8f75313dcde63ae848b222fbb9eb3d6ac0a86bde4d487c3f5ff extends Twig_Template
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
        $context["props"] = $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "properties", array());
        // line 2
        echo "
";
        // line 3
        if (((isset($context["mode"]) ? $context["mode"] : null) == "simple")) {
            // line 4
            echo "\t";
            if (($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "objectType", array()) == "course")) {
                // line 5
                echo "\t    ";
                $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSetByCourse", array("courseId" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "course", array()), "id", array())));
                // line 6
                echo "\t    ";
                if ((isset($context["courseSet"]) ? $context["courseSet"] : null)) {
                    // line 7
                    echo "\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入课程"), "html", null, true);
                    echo "
\t\t\t<a class=\"link-dark\" href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "course", array()), "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("来自《%props%》", array("%props%" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array()))), "html", null, true);
                    echo "\">
\t\t\t\t";
                    // line 9
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array()), 15);
                    echo "
\t\t\t</a>
\t\t";
                }
                // line 12
                echo "\t";
            } else {
                // line 13
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入%classroom%", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
                echo " <a  class=\"link-dark\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "classroom", array()), "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("来自《%props%》", array("%props%" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "classroom", array()), "title", array()))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "classroom", array()), "title", array()), 15);
                echo "</a>
\t";
            }
            // line 15
            echo "  
";
        } elseif ((        // line 16
(isset($context["mode"]) ? $context["mode"] : null) == "full")) {
            // line 17
            echo "\t";
            if (($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "objectType", array()) == "course")) {
                // line 18
                echo "\t\t
\t";
            } else {
                // line 20
                echo "\t\t
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@root\\src\\AppBundle\\Extensions\\StatusTemplate\\become_student.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  75 => 18,  72 => 17,  70 => 16,  67 => 15,  55 => 13,  52 => 12,  46 => 9,  40 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root\\src\\AppBundle\\Extensions\\StatusTemplate\\become_student.tpl.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\src\\AppBundle\\Extensions\\StatusTemplate\\become_student.tpl.html.twig");
    }
}
