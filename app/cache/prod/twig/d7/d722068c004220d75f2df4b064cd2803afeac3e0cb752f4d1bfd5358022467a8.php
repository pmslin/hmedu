<?php

/* activity/exercise/show.html.twig */
class __TwigTemplate_bc1b9ab20a399eb6b65063c56656aa8b072a7ab9db0a41b3f3d948e2a0d22e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "activity/exercise/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div  class=\"modal show iframe-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body task-state-modal\">
        <div class=\"title font-blod\">
          <i class=\"es-icon es-icon-xinxi color-info\"></i>
          ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("练习说明"), "html", null, true);
        echo "
        </div>
        <div class=\"content\">
          <div class=\"text-16\">
            本次练习随机生成<span class=\"color-success\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exercise"]) ? $context["exercise"] : null), "itemCount", array()), "html", null, true);
        echo "题</span>
          </div>
        </div>
        <div class=\"text-right mt20\">
          <a class=\"btn btn-primary\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exercise_start_do", array("lessonId" => $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array()), "exerciseId" => $this->getAttribute((isset($context["exercise"]) ? $context["exercise"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开始做题"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"modal-backdrop in\"></div>
";
    }

    public function getTemplateName()
    {
        return "activity/exercise/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/exercise/show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\exercise\\show.html.twig");
    }
}
