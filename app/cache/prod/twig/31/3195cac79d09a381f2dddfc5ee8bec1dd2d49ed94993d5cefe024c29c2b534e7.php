<?php

/* settings/avatar-crop-modal.html.twig */
class __TwigTemplate_cbd187f9cff979d73fca2222a8ab7be2463c8ab7baf44f9b269db403e36c343c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "settings/avatar-crop-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/settings/avatar-crop-modal/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头像图片"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  <form id=\"avatar-crop-form\" method=\"post\">
    <div class=\"form-group clearfix\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        <img class=\"img-responsive\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\"
          id=\"avatar-crop\"
          width=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
        echo "\"
          data-natural-width=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
        echo "\"/>
        <div class=\"help-block\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示：请选择图片裁剪区域。"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </form>
";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "  <button type=\"button\" class=\"btn btn-primary pull-right\" id=\"upload-avatar-btn\"
    data-url=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_avatar_crop_modal");
        echo "\" data-toggle=\"form-submit\"
    data-target=\"#avatar-crop-form\" data-loading-text=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "settings/avatar-crop-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  85 => 23,  81 => 22,  78 => 21,  75 => 20,  66 => 14,  60 => 13,  54 => 12,  49 => 10,  44 => 7,  41 => 6,  35 => 2,  31 => 1,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/avatar-crop-modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\avatar-crop-modal.html.twig");
    }
}
