<?php

/* courseset-manage/cover-crop.html.twig */
class __TwigTemplate_5056ba19f195d170c7e189a2b2ed0b568444d52b5a26127826cb1ec275b4aea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "courseset-manage/cover-crop.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "cover";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/courseset-manage/cover-crop/index.js"));
        // line 6
        $context["token"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("tmp", "image");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("封面图片"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("封面图片"), "html", null, true);
        echo "
  </div>

  <div id=\"courseset-picture-crop-form\" class=\"panel-body\">

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img class=\"img-responsive\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\"
          id=\"courseset-picture-crop\"
          width=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
        echo "\" data-natural-width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
        echo "\" />
          <div class=\"help-block\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示：请选择图片裁剪区域。"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
        ";
        // line 27
        if ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "open") || ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "liveOpen"))) {
            // line 28
            echo "       ";
            // line 32
            echo "        ";
        } else {
            // line 33
            echo "         <button class=\"btn btn-fat btn-primary upload-picture-btn\"
          data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_cover_crop", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_cover", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
            echo "\"
          id=\"upload-picture-btn\" data-loading-text=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存..."), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
            echo "</button>
        ";
        }
        // line 38
        echo "          <a href=\"javascript:;\" class=\"go-back btn btn-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新选择图片"), "html", null, true);
        echo "</a>
        </div>
      </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "courseset-manage/cover-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  104 => 36,  100 => 35,  96 => 34,  93 => 33,  90 => 32,  88 => 28,  86 => 27,  77 => 21,  67 => 20,  62 => 18,  52 => 11,  47 => 8,  44 => 7,  36 => 3,  32 => 1,  30 => 6,  28 => 5,  26 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/cover-crop.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\courseset-manage\\cover-crop.html.twig");
    }
}
