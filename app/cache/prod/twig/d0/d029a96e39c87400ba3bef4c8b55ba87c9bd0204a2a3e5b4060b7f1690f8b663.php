<?php

/* testpaper/part/paper-card-choice.html.twig */
class __TwigTemplate_0fffe87d8ee386a42f0f67f07a532b0364efb9ef062f58a01c9a653d62f26a20 extends Twig_Template
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
        echo "<span href=\"javascript:;\" data-anchor=\"#question";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" class=\"js-btn-index color-lump mrm mbm
  ";
        // line 2
        if ((((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), "null")) : ("null")) == "reviewing") && ($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "essay"))) {
            // line 3
            echo "    bg-warning js-answer-notwrong
  ";
        } elseif ((((($this->getAttribute(        // line 4
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), "null")) : ("null")) == "doing") && (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array()), null)) : (null)))) {
            // line 5
            echo "    lump-card
    ";
            // line 6
            if (!twig_in_filter((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array()), "noAnswer")) : ("noAnswer")), array(0 => "none", 1 => "noAnswer"))) {
                // line 7
                echo "      done  
    ";
            }
            // line 9
            echo "    js-answer-notwrong
  ";
        } elseif (((($this->getAttribute($this->getAttribute(        // line 10
(isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array()), "noAnswer")) : ("noAnswer")) == "right")) {
            // line 11
            echo "    bg-success js-answer-notwrong
  ";
        } elseif (((($this->getAttribute($this->getAttribute(        // line 12
(isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "status", array()), "noAnswer")) : ("noAnswer")) == "noAnswer")) {
            // line 13
            echo "    lump-card js-answer-notwrong
  ";
        } else {
            // line 15
            echo "    bg-danger 
  ";
        }
        // line 17
        echo "\" ><i class=\"text-12 glyphicon glyphicon-bookmark marking-card js-marking-card hidden\"></i>";
        echo twig_escape_filter($this->env, ((array_key_exists("seq", $context)) ? (_twig_default_filter((isset($context["seq"]) ? $context["seq"] : null), 0)) : (0)), "html", null, true);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "testpaper/part/paper-card-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  54 => 15,  50 => 13,  48 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 7,  34 => 6,  31 => 5,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/part/paper-card-choice.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\part\\paper-card-choice.html.twig");
    }
}
