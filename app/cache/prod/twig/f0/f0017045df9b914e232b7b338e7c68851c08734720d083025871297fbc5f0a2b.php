<?php

/* css_loader.html.twig */
class __TwigTemplate_0cd676d7d93aa03b0d9f7980af91df529e5c4ab87adceaffb9cd43f87de72084 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_1b38b6d8a82ed54daa0934375e2a438c9112a8f2fb62ceff5e47a5cb93efa92b = $context["path"]) && is_string($__internal_0a0ddc9183629bd223ee7cb768bd997cf871608a96e1686e95e2f7324d1d19e6 = "http://") && ('' === $__internal_0a0ddc9183629bd223ee7cb768bd997cf871608a96e1686e95e2f7324d1d19e6 || 0 === strpos($__internal_1b38b6d8a82ed54daa0934375e2a438c9112a8f2fb62ceff5e47a5cb93efa92b, $__internal_0a0ddc9183629bd223ee7cb768bd997cf871608a96e1686e95e2f7324d1d19e6)))) {
                // line 3
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 5
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "css_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "css_loader.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\css_loader.html.twig");
    }
}
