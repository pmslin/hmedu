<?php

/* question/part/question-stem.html.twig */
class __TwigTemplate_eb9e0d7d0e1c0ecbdc11c80f84546ecd0e8918f8973d9feaa58a2c3636d01641 extends Twig_Template
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
        $context["showScore"] = ((array_key_exists("showScore", $context)) ? (_twig_default_filter((isset($context["showScore"]) ? $context["showScore"] : null), 1)) : (1));
        // line 2
        echo "<div class=\"testpaper-question-stem-wrap clearfix\">
  <div class=\"testpaper-question-seq-wrap\">
    <div class=\"testpaper-question-seq\">
      ";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "seq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "seq", array()), null)) : (null)), "html", null, true);
        echo "
    </div>
    ";
        // line 7
        if ((isset($context["showScore"]) ? $context["showScore"] : null)) {
            // line 8
            echo "      <div class=\"testpaper-question-score\">
        ";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()), "0.0")) : ("0.0")), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 12
        echo "  </div>
    <div class=\"testpaper-question-stem\">
      ";
        // line 14
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "fill")) {
            // line 15
            echo "        ";
            echo nl2br($this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->env->getExtension('AppBundle\Twig\WebExtension')->fillQuestionStemHtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()))));
            echo "
      ";
        } else {
            // line 17
            echo "        ";
            echo nl2br($this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())));
            echo "
      ";
        }
        // line 19
        echo "    \t
      ";
        // line 20
        $this->loadTemplate("attachment/widget/list.html.twig", "question/part/question-stem.html.twig", 20)->display(array_merge($context, array("targetType" => "question.stem", "targetId" => (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), null)) : (null)))));
        // line 21
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "question/part/question-stem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  64 => 20,  61 => 19,  55 => 17,  49 => 15,  47 => 14,  43 => 12,  36 => 9,  33 => 8,  31 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/part/question-stem.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question\\part\\question-stem.html.twig");
    }
}
