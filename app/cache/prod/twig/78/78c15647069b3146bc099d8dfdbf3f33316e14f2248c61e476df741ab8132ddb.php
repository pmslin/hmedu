<?php

/* user/course-sets.html.twig */
class __TwigTemplate_7c54e9f1b337e042b2307ba92264f9247c7e1532ff56c9c112e6d1c572cc389d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/course-sets.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = (isset($context["type"]) ? $context["type"] : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        if ((isset($context["courseSets"]) ? $context["courseSets"] : null)) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSet:courseSetsBlock", array("courseSets" => (isset($context["courseSets"]) ? $context["courseSets"] : null), "view" => "list")));
            echo "
    <nav class=\"text-center\">
      ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
    </nav>
  ";
        } else {
            // line 15
            echo "    ";
            if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "teach")) {
                // line 16
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无在教课程！"), "html", null, true);
                echo "</div>
    ";
            } elseif ((            // line 17
(isset($context["pageNav"]) ? $context["pageNav"] : null) == "learn")) {
                // line 18
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无在学课程！"), "html", null, true);
                echo "</div>
    ";
            } elseif ((            // line 19
(isset($context["pageNav"]) ? $context["pageNav"] : null) == "favorited")) {
                // line 20
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无收藏课程！"), "html", null, true);
                echo "</div>
    ";
            }
            // line 22
            echo "  ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/course-sets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  81 => 22,  75 => 20,  73 => 19,  68 => 18,  66 => 17,  61 => 16,  58 => 15,  52 => 12,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/course-sets.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\user\\course-sets.html.twig");
    }
}
