<?php

/* testpaper/start-do-show.html.twig */
class __TwigTemplate_72e12bbf0da8e415aeb1b111ddcab5e5b01f45d7601e0e7820ba7ecc29ab7121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("testpaper/testpaper-layout.html.twig", "testpaper/start-do-show.html.twig", 1);
        $this->blocks = array(
            'paper_description' => array($this, 'block_paper_description'),
            'paper_sidebar' => array($this, 'block_paper_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testpaper/testpaper-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-timer.js", 2 => "libs/perfect-scrollbar.js", 3 => "app/js/testpaper/do-test/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_paper_description($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"testpaper-description\">";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->bbCode2HtmlFilter($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "description", array()));
        echo "</div>
";
    }

    // line 13
    public function block_paper_sidebar($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        if (((array_key_exists("showCard", $context)) ? (_twig_default_filter((isset($context["showCard"]) ? $context["showCard"] : null), 1)) : (1))) {
            // line 15
            echo "    <div class=\"testpaper-card ";
            echo twig_escape_filter($this->env, ((array_key_exists("testpaperCardClass", $context)) ? (_twig_default_filter((isset($context["testpaperCardClass"]) ? $context["testpaperCardClass"] : null), "")) : ("")), "html", null, true);
            echo "\" >
      ";
            // line 16
            $this->loadTemplate("testpaper/testpaper-card.html.twig", "testpaper/start-do-show.html.twig", 16)->display($context);
            // line 17
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "testpaper/start-do-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  53 => 16,  48 => 15,  45 => 14,  42 => 13,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/start-do-show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\start-do-show.html.twig");
    }
}
