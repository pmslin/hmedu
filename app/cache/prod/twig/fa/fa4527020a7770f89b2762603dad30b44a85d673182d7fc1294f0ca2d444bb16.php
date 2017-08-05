<?php

/* importer/importer-layout.html.twig */
class __TwigTemplate_49ccf60411e50eca375b785c01f00b510b9610d8ba4b2bcd171295b61dad290d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("old-bootstrap-modal-layout.html.twig", "importer/importer-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'form_data' => array($this, 'block_form_data'),
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "old-bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "批量添加新用户";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"importer-app\"
       data-type=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["importerType"]) ? $context["importerType"] : null), "html", null, true);
        echo "\"
       data-check-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_check", array("type" => (isset($context["importerType"]) ? $context["importerType"] : null))), "html", null, true);
        echo "\"
       data-import-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_import", array("type" => (isset($context["importerType"]) ? $context["importerType"] : null))), "html", null, true);
        echo "\"
  >

  </div>

  <script type=\"text/template\" id=\"importer-template\">
    <div class=\"alert js-importer-message hidden\">
    </div>

    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">步骤1</h1>
    </div>

    <div class=\"row\">
      <form method=\"post\" id=\"importer-form\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        ";
        // line 26
        $this->displayBlock('form_data', $context, $blocks);
        // line 29
        echo "        <div class=\"form-group\">
          <div class=\"col-md-3 col-md-offset-1\"></div>
          <div class=\"col-md-8 controls\">
            <button type=\"submit\" class=\"btn btn-primary\" id=\"start-import-btn\">开始校验数据</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>
    </div>
  </script>
  ";
        // line 41
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 43
        echo "
  ";
        // line 44
        $this->loadTemplate("seajs_loader_compatible.html.twig", "importer/importer-layout.html.twig", 44)->display(array_merge($context, array("topxiawebbundle" => true)));
        // line 45
        echo "  <script> app.lazyLoad = function() { app.load('topxiawebbundle/controller/importer/importer') }; </script>

";
    }

    // line 26
    public function block_form_data($context, array $blocks = array())
    {
        // line 27
        echo "
        ";
    }

    // line 41
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 42
        echo "  ";
    }

    public function getTemplateName()
    {
        return "importer/importer-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  112 => 41,  107 => 27,  104 => 26,  98 => 45,  96 => 44,  93 => 43,  91 => 41,  83 => 36,  74 => 29,  72 => 26,  54 => 11,  50 => 10,  46 => 9,  43 => 8,  40 => 7,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "importer/importer-layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\importer\\importer-layout.html.twig");
    }
}
