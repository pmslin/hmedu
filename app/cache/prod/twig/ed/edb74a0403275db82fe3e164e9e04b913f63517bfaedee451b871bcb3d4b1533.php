<?php

/* activity/discuss/show.html.twig */
class __TwigTemplate_a98d25b0f27dcc04d68e623c3631ffa23b08fca475098a858063e1a7074a57ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/content-layout.html.twig", "activity/discuss/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"iframe-parent-content ph20 pv20\">
    <div class=\"lesson-content-text-body\">
      <div class=\"live-show-item\">
        <p class=\"title\">
          讨论主题
        </p>
        ";
        // line 10
        echo $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "content", array());
        echo "
      </div>
      <div class=\"live-show-item\">
        <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_create", array("courseId" => $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "fromCourseId", array()), "type" => "discussion")), "html", null, true);
        echo "\" target=\"_blank\">前往课程讨论区</a>
      </div>
    </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "activity/discuss/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/discuss/show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\discuss\\show.html.twig");
    }
}
