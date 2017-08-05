<?php

/* question-manage/essay-form.html.twig */
class __TwigTemplate_1fbf0c33e8f5fda70b6423fe8c254f659da94edd4310002f9df0f4f616f1da74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("question-manage/question-form-layout.html.twig", "question-manage/essay-form.html.twig", 1);
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
        echo "
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label for=\"question-answer-field\" class=\"control-label-required\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答案"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-8 controls\">
      <textarea class=\"form-control\" id=\"question-answer-field\" name=\"answer[]\" data-image-upload-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" style=\"height:150px;\">";
        echo twig_escape_filter($this->env, twig_join_filter((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), "")) : (""))), "html", null, true);
        echo "</textarea>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "question-manage/essay-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/essay-form.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\essay-form.html.twig");
    }
}
