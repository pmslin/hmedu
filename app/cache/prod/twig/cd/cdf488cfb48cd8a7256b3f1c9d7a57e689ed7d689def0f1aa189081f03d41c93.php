<?php

/* course/order/payments-disabled.html.twig */
class __TwigTemplate_6d9206ae8af1a7ff5ad0d3622b95fc3bd1f4ce7c5738154d0ab7c0a04ae16ebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("old-bootstrap-modal-layout.html.twig", "course/order/payments-disabled.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "old-bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买课程"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入学习"), "html", null, true);
        }
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"alert alert-info\">";
        echo _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("payment.disabled_message"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未开启支付模块，无法购买课程。"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "course/order/payments-disabled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/order/payments-disabled.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\order\\payments-disabled.html.twig");
    }
}
