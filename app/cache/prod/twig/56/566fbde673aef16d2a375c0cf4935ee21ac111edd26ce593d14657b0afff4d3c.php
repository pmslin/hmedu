<?php

/* question/part/show-teacher-comment.html.twig */
class __TwigTemplate_01dfe521cbf63438d208009df18e535c35806112e3287aba69f688fab33294df extends Twig_Template
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
        echo "<div class=\"form-horizontal\">
\t
\t<div class=\"form-group ";
        // line 3
        if ( !((array_key_exists("showScore", $context)) ? (_twig_default_filter((isset($context["showScore"]) ? $context["showScore"] : null), 1)) : (1))) {
            echo "hidden";
        }
        echo "\">
\t\t<label class=\"col-sm-2 control-label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("得分"), "html", null, true);
        echo "</label>
\t\t<div class=\"col-sm-8 controls\">
\t\t\t<input type=\"text\" class=\"form-control width-150\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("得分"), "html", null, true);
        echo "\" name=\"score_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-score=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" value=\"";
        if (twig_test_empty((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null)))) {
            echo "0";
        }
        echo "\">
\t\t</div>
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-2 control-label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评语"), "html", null, true);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"testpaper-result-essay-teacherSay\">
\t\t\t  <textarea class=\"form-control essay-teacher-say-short\" rows=\"1\" style=\"overflow:hidden;line-height:20px;\"></textarea>

\t\t\t\t<textarea id=\"essay-teacher-say-long-";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control essay-teacher-say-long\" name=\"teacherSay_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-role=\"teacher-say\" style=\"display:none;\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\"></textarea>

\t\t\t\t<a class=\"btn btn-link btn-muted btn-sm essay-teacher-say-btn\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up color-gray\"></span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "question/part/show-teacher-comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  62 => 16,  54 => 11,  34 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/part/show-teacher-comment.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question\\part\\show-teacher-comment.html.twig");
    }
}
