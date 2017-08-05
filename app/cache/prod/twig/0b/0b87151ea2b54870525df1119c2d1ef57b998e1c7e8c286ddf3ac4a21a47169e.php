<?php

/* article/index.html.twig */
class __TwigTemplate_3af6859d3bac955b018f62d8acacc1554feb55e6be95abab838b68ed730a6b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "article/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "artcile-list-page";
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/article/list/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%article_name%频道", array("%article_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("article.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
  <div class=\"es-tabs article-list-header\">
    <div class=\"tab-header\">
      ";
        // line 12
        $this->loadTemplate("article/part/list-header-nav.html.twig", "article/index.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
  </div>

  <!-- 资讯头部 -->
  ";
        // line 17
        $this->loadTemplate("article/part/list-header.html.twig", "article/index.html.twig", 17)->display($context);
        // line 18
        echo "
  <div class=\"article-list-body row\">
    <!-- list主内容-->
    <div class=\"col-md-8 article-list-main\">
      ";
        // line 22
        $this->loadTemplate("article/part/list-main.html.twig", "article/index.html.twig", 22)->display(array_merge($context, array("articles" => (isset($context["latestArticles"]) ? $context["latestArticles"] : null))));
        // line 23
        echo "    </div>

    <aside class=\"col-md-4 article-sidebar\">
      ";
        // line 26
        $this->loadTemplate("article/widget/sidebar.html.twig", "article/index.html.twig", 26)->display($context);
        // line 27
        echo "    </aside>
  </div>


";
    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  73 => 26,  68 => 23,  66 => 22,  60 => 18,  58 => 17,  52 => 13,  50 => 12,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/index.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\article\\index.html.twig");
    }
}
