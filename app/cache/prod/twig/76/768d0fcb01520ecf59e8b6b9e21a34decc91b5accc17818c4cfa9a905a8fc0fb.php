<?php

/* player/stylesheet.html.twig */
class __TwigTemplate_50417923d1eca3cb1fa7d1f7588ad7f6d661be5f925f1cd1364ef0954ecfb71f extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/main.css"), "html", null, true);
        echo "\" />

";
        // line 5
        if (((isset($context["player"]) ? $context["player"] : null) == "balloon-cloud-video-player")) {
            // line 6
            echo "<link rel=\"stylesheet\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/balloon-video-player/1.3.0/src/skin/video-js.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" media=\"screen\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/balloon-video-player/1.3.0/src/skin/pluck.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        }
        // line 9
        echo "
<style type=\"text/css\">
  .lesson-content-audio {
    padding-top: 10%;
    text-align: center;
  }
</style>

";
    }

    public function getTemplateName()
    {
        return "player/stylesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 7,  35 => 6,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "player/stylesheet.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\player\\stylesheet.html.twig");
    }
}
