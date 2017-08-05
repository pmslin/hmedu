<?php

/* question-manage/material-form.html.twig */
class __TwigTemplate_a18b4563547b71a0c5d783c2fc6a2e7be33d292e72d3ab1a7ae9e77b053bab5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("question-manage/question-form-layout.html.twig", "question-manage/material-form.html.twig", 1);
        $this->blocks = array(
            'question_buttons' => array($this, 'block_question_buttons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "question-manage/question-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["question_stem_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("材料");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_question_buttons($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if ( !((array_key_exists("question", $context)) ? (_twig_default_filter((isset($context["question"]) ? $context["question"] : null), null)) : (null))) {
            // line 7
            echo "    <button type=\"button\" data-role=\"submit\" class=\"btn btn-primary\" data-submission=\"continue_sub\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
            echo "...\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存并添加子题"), "html", null, true);
            echo "</button>
  ";
        } else {
            // line 9
            echo "    <button type=\"button\" data-role=\"submit\" class=\"btn btn-primary\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
            echo "...\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
            echo "</button>
  ";
        }
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "question-manage/material-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  45 => 9,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/material-form.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\material-form.html.twig");
    }
}
