<?php

/* question/part/flag.html.twig */
class __TwigTemplate_739b1acb71ef950fba51a30f6421969ea0d7bc5ea1c6f59422ced463c1cf26e3 extends Twig_Template
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
        $context["favorites"] = ((array_key_exists("favorites", $context)) ? (_twig_default_filter((isset($context["favorites"]) ? $context["favorites"] : null), array())) : (array()));
        // line 2
        $context["resultStatus"] = ((array_key_exists("resultStatus", $context)) ? (_twig_default_filter((isset($context["resultStatus"]) ? $context["resultStatus"] : null), null)) : (null));
        // line 3
        echo "
";
        // line 4
        if ((twig_in_filter("mark", (isset($context["flags"]) ? $context["flags"] : null)) && ((isset($context["resultStatus"]) ? $context["resultStatus"] : null) == "doing"))) {
            // line 5
            echo "  <a class=\"link-gray js-marking\">
    <i class=\"glyphicon glyphicon-bookmark mr5\"></i>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标记"), "html", null, true);
            echo "
  </a>
  <a class=\"link-gray js-marking hidden\">
    <i class=\"glyphicon glyphicon-bookmark mr5\"></i>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消标记"), "html", null, true);
            echo "
  </a>
";
        }
        // line 12
        echo "
";
        // line 13
        if (((twig_in_filter("favorite", (isset($context["flags"]) ? $context["flags"] : null)) && (isset($context["resultStatus"]) ? $context["resultStatus"] : null)) && ((isset($context["resultStatus"]) ? $context["resultStatus"] : null) == "finished"))) {
            // line 14
            echo "  <a class=\"link-gray js-favorite ";
            if (twig_in_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), (isset($context["favorites"]) ? $context["favorites"] : null))) {
                echo " hidden ";
            }
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_question_favorite", array("questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\" data-target-type=\"testpaper\" data-target-id=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()), 0)) : (0)), "html", null, true);
            echo "\" data-question-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "\">
    <span class=\"glyphicon glyphicon-star-empty\"></span>
     ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收藏"), "html", null, true);
            echo "
  </a>
  <a class=\"link-gray js-favorite ";
            // line 18
            if (!twig_in_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), (isset($context["favorites"]) ? $context["favorites"] : null))) {
                echo " hidden ";
            }
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_question_unfavorite", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\" data-target-type=\"testpaper\" data-target-id=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()), 0)) : (0)), "html", null, true);
            echo "\" data-question-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "\">
    <span class=\"glyphicon glyphicon-star\"></span>
    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消收藏"), "html", null, true);
            echo "
  </a>
";
        }
        // line 23
        echo "
";
        // line 24
        if (twig_in_filter("analysis", (isset($context["flags"]) ? $context["flags"] : null))) {
            // line 25
            echo "  ";
            if (( !$this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()) == "")) {
                // line 26
                echo "  <span class=\"view-toggle js-analysis-toggle\">
    <a class=\"btn link-gray view-show js-analysis\"><span class=\"glyphicon glyphicon-chevron-down\"></span> ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展开解析"), "html", null, true);
                echo "</a>
    <a class=\"btn link-gray view-hide js-analysis hidden\"><span class=\"glyphicon glyphicon-chevron-up\"></span> ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起解析"), "html", null, true);
                echo "</a>
  </span>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "question/part/flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  97 => 27,  94 => 26,  91 => 25,  89 => 24,  86 => 23,  80 => 20,  67 => 18,  62 => 16,  48 => 14,  46 => 13,  43 => 12,  37 => 9,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/part/flag.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question\\part\\flag.html.twig");
    }
}
