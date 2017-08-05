<?php

/* settings/avatar.html.twig */
class __TwigTemplate_aa2b52f037f05d3f7d0f308078c4f11b806e89479ab7429122a9f3ed69f6fac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("settings/layout.html.twig", "settings/avatar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "settings/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "avatar";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/settings/avatar/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头像设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $this->loadTemplate("settings/avatar.html.twig", "settings/avatar.html.twig", 7, "1211264706")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "settings/avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  42 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/avatar.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\avatar.html.twig");
    }
}


/* settings/avatar.html.twig */
class __TwigTemplate_aa2b52f037f05d3f7d0f308078c4f11b806e89479ab7429122a9f3ed69f6fac3_1211264706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("bootstrap/panel.html.twig", "settings/avatar.html.twig", 7);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap/panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头像设置"), "html", null, true);
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
      ";
        // line 11
        if ((isset($context["fromCourse"]) ? $context["fromCourse"] : null)) {
            // line 12
            echo "      <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请设置自定义头像。"), "html", null, true);
            echo "</div>
      ";
        }
        // line 14
        echo "
      <form id=\"settings-avatar-form\" class=\"form-horizontal\" method=\"post\">

        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><b>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前头像"), "html", null, true);
        echo "</b></div>
          <div class=\"controls col-md-8 controls\">
          \t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">
          </div>
          <div class=\"controls col-md-8 controls\">
            <p class=\"help-block\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过");
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2M"), "html", null, true);
        echo "</strong>。</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            <a id=\"upload-picture-btn\"
            class=\"btn btn-primary upload-picture-btn\"
            data-upload-token=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
            data-goto-url=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_avatar_crop", array("goto" => (isset($context["goto"]) ? $context["goto"] : null))), "html", null, true);
        echo "\"
            >";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传新头像"), "html", null, true);
        echo "</a>
          </div>
        </div>

        ";
        // line 45
        if ((isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null)) {
            // line 46
            echo "          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><b>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("论坛头像"), "html", null, true);
            echo "</b></div>
            <div class=\"controls col-md-8 controls\">
              <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null), "html", null, true);
            echo "\" class=\"mrm\">
              <button class=\"btn btn-default use-partner-avatar\" type=\"button\" data-url=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_avatar_fetch_partner");
            echo "\" data-goto=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_avatar");
            echo "\" data-img-url=\"";
            echo twig_escape_filter($this->env, (isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用该头像"), "html", null, true);
            echo "</button>
            </div>
          </div>
        ";
        }
        // line 54
        echo "
      </form>

    ";
    }

    public function getTemplateName()
    {
        return "settings/avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 54,  194 => 50,  190 => 49,  185 => 47,  182 => 46,  180 => 45,  173 => 41,  169 => 40,  165 => 39,  151 => 30,  140 => 22,  135 => 20,  129 => 17,  124 => 14,  118 => 12,  116 => 11,  113 => 10,  110 => 9,  104 => 8,  45 => 7,  42 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/avatar.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\avatar.html.twig");
    }
}
