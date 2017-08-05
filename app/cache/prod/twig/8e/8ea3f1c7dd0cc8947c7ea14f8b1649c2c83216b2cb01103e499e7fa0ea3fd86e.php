<?php

/* question-manage/choice-form.html.twig */
class __TwigTemplate_3ccd24d9d62297db9fb178cd15b79202968de1bd390fa63448d987b9386e2356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("question-manage/question-form-layout.html.twig", "question-manage/choice-form.html.twig", 1);
        $this->blocks = array(
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "question-manage/question-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_question_extra_fields($context, array $blocks = array())
    {
        // line 4
        echo "  <div data-role=\"choices\"></div>
  
  <div class=\"question-options\" id=\"question-options\"  data-image-upload-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" 
    data-choices=\"";
        // line 7
        if ((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array()), null)) : (null))) {
            // line 8
            echo "      ";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array())), "html", null, true);
            echo "
    ";
        }
        // line 9
        echo "\"  data-answer= \"
    ";
        // line 10
        if ((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), null)) : (null))) {
            // line 11
            echo "      ";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array())), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "\">
  </div>
  <div id=\"choices-group\"></div>
  ";
        // line 15
        if ((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array()), null)) : (null))) {
            // line 16
            echo "    <script type=\"text/plain\" data-role=\"choices-data\">
      ";
            // line 17
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
            echo "
    </script>
    <script type=\"text/plain\" data-role=\"answers-data\">
      ";
            // line 20
            echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()));
            echo "
    </script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "question-manage/choice-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  70 => 17,  67 => 16,  65 => 15,  60 => 12,  54 => 11,  52 => 10,  49 => 9,  43 => 8,  41 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/choice-form.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\choice-form.html.twig");
    }
}
