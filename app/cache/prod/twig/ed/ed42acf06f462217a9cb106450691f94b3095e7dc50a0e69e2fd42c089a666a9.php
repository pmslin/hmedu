<?php

/* settings/password.html.twig */
class __TwigTemplate_b26e805f632825d1ebefb244097aed797cfb13d2b0ee436fb15f03f623f0fae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("settings/layout.html.twig", "settings/password.html.twig", 1);
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
        $context["side_nav"] = "security";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/settings/password/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码修改"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全设置"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">

      <ul class=\"breadcrumb\">
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_security");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全设置"), "html", null, true);
        echo "</a></li>
        <li class=\"active\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录密码修改"), "html", null, true);
        echo "</li>
      </ul>

      ";
        // line 16
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array())) {
            // line 17
            echo "        <div class=\"alert alert-warning\">
          <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前帐号从第三方帐号直接登录时创建，尚未设置密码。"), "html", null, true);
            echo "</p>
          <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为了帐号的安全，请通过邮箱找回密码的方式，重设密码！"), "html", null, true);
            echo "</p>
          <p><a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("现在就去重设密码！"), "html", null, true);
            echo "</a></p>
        </div>
      ";
        }
        // line 23
        echo "
      <form id=\"settings-password-form\" class=\"form-horizontal\" method=\"post\" ";
        // line 24
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array())) {
            echo " style=\"display:none;\"";
        }
        echo ">

        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentPassword", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前密码")) ? array() : array("label" => $_label_)));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPassword", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新密码")) ? array() : array("label" => $_label_)));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPassword", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确认密码")) ? array() : array("label" => $_label_)));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button id=\"password-save-btn\" data-loading-text=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "settings/password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 57,  151 => 53,  147 => 52,  137 => 45,  132 => 43,  124 => 38,  119 => 36,  111 => 31,  106 => 29,  100 => 26,  93 => 24,  90 => 23,  82 => 20,  78 => 19,  74 => 18,  71 => 17,  69 => 16,  63 => 13,  57 => 12,  50 => 8,  47 => 7,  44 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/password.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\password.html.twig");
    }
}
