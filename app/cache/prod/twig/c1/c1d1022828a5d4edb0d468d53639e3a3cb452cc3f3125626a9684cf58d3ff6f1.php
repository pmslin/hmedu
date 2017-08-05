<?php

/* settings/profile.html.twig */
class __TwigTemplate_3d12e38adfe41d3e97b98f6b53fb65f6655417d0df13023e88f963693950cb17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("settings/layout.html.twig", "settings/profile.html.twig", 1);
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
        $context["side_nav"] = "profile";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/bootstrap-datetimepicker.js", 2 => "libs/jquery-validation.js", 3 => "app/js/settings/profile/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基础信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->loadTemplate("settings/profile.html.twig", "settings/profile.html.twig", 7, "1630534205")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "settings/profile.html.twig";
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
        return new Twig_Source("", "settings/profile.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\profile.html.twig");
    }
}


/* settings/profile.html.twig */
class __TwigTemplate_3d12e38adfe41d3e97b98f6b53fb65f6655417d0df13023e88f963693950cb17_1630534205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("bootstrap/panel.html.twig", "settings/profile.html.twig", 7);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基础信息"), "html", null, true);
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
\t\t\t";
        // line 11
        if ((isset($context["fromCourse"]) ? $context["fromCourse"] : null)) {
            // line 12
            echo "\t\t\t<div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置头衔、自我介绍并保存后，即可开始创建课程。"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 14
        echo "
\t\t\t<form id=\"user-profile-form\" class=\"form-horizontal\" method=\"post\">
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\" >";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t<div class=\"form-control-static\">
\t\t\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("user_partner.nickname_enabled")) {
            echo " <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setting_nickname");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("修改"), "html", null, true);
            echo "</a> ";
        }
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_truename\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("真实姓名"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t";
        // line 28
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 29
            echo "              <div class=\"form-control-static\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 31
            echo "            \t<div class=\"col-md-7 controls radios\">
              \t<input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "")) : ("")), "html", null, true);
            echo "\">
              \t<div class=\"help-block\" style=\"display:none;\"></div>
            \t</div>
            ";
        }
        // line 36
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("性别"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls radios\">
\t\t\t\t\t\t\t<div id=\"profile_gender\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_0\" name=\"profile[gender]\" value=\"male\" ";
        // line 42
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "male")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_0\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("男"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_1\" name=\"profile[gender]\" value=\"female\" ";
        // line 44
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "female")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_1\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("女"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_idcard\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("身份证号码"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t";
        // line 52
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 53
            echo "              <div class=\"col-md-7 controls\">
                <div class=\"form-control-static\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->blur_idcard_number($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array())), "html", null, true);
            echo "</div>
              </div>
            ";
        } else {
            // line 57
            echo "              <div class=\"col-md-7 controls radios\">
                <input type=\"text\" id=\"profile_idcard\" name=\"profile[idcard]\" class=\"form-control\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            ";
        }
        // line 62
        echo "\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 64
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) > 0)) {
            // line 65
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"profile_mobile\" class=\"col-md-2 control-label\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t\t<div class=\"form-control-static\">
\t\t\t\t\t\t\t\t\t";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->blur_phone_number((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "")) : (""))), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<small class=\"color-success\">(";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已绑定"), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"profile_mobile\" class=\"col-md-2 control-label\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_mobile\" name=\"profile[mobile]\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "")) : ("")), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none\"></div>
                ";
            // line 81
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled", "") == "1")) {
                // line 82
                echo "                  <div class=\"color-warning\">
                    ";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没绑定手机号码。"), "html", null, true);
                echo "<strong><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_bind_mobile");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("去绑定"), "html", null, true);
                echo "</a>
                    </strong>
                  </div>
                ";
            }
            // line 87
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 91
        echo "
\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公司"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_company\" name=\"profile[company]\" class=\"form-control\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("职业"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_job\" name=\"profile[job]\" class=\"form-control\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头衔"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人签名"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea type=\"text\" rows=\"4\" maxlength=\"80\" id=\"profile_signature\" name=\"profile[signature]\" class=\"form-control\">";
        // line 119
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("自我介绍"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea name=\"profile[about]\" rows=\"10\" id=\"profile_about\" class=\"form-control\" data-image-upload-url=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("user"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人空间"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_site\" name=\"profile[site]\" class=\"form-control\" data-widget-cid=\"widget-4\" data-explain=\"\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t\t<label for=\"weibo\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微博"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"weibo\" name=\"profile[weibo]\" class=\"form-control\" data-widget-cid=\"widget-3\" data-explain=\"\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\">
              <label class=\"text-normal\">
                <input type=\"checkbox\" name=\"profile[isWeiboPublic]\" 
                ";
        // line 150
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isWeiboPublic", array())) {
            // line 151
            echo "                  checked=\"checked\" 
                ";
        }
        // line 152
        echo "/>
                ";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公开"), "html", null, true);
        echo "
              </label>
            </div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微信"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_weixin\" name=\"profile[weixin]\" class=\"form-control\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\">
              <label class=\"text-normal\">
                <input type=\"checkbox\" name=\"profile[isWeixinPublic]\" 
                ";
        // line 167
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isWeixinPublic", array())) {
            echo "checked=\"checked\" ";
        }
        echo "/>
                ";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公开"), "html", null, true);
        echo "
              </label>
            </div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"profile_qq\" class=\"col-md-2 control-label\">QQ</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_qq\" name=\"profile[qq]\" class=\"form-control\" data-widget-cid=\"widget-2\" data-explain=\"\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\">
              <label class=\"text-normal\">
               <input type=\"checkbox\" name=\"profile[isQQPublic]\"
               ";
        // line 182
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isQQPublic", array())) {
            // line 183
            echo "                checked=\"checked\"
                ";
        }
        // line 184
        echo "/>
                ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公开"), "html", null, true);
        echo "
              </label>
            </div>
\t\t\t\t\t</div>



\t\t\t\t\t";
        // line 192
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 193
            echo "\t\t\t\t\t<hr>
\t\t\t\t\t";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 195
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 196
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 197
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea id=\"";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 203
$context["field"], "type", array()) == "int")) {
                    // line 204
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最大值为9位整数"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 211
$context["field"], "type", array()) == "float")) {
                    // line 212
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 213
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保留到2位小数"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 219
$context["field"], "type", array()) == "date")) {
                    // line 220
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 221
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 223
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 227
$context["field"], "type", array()) == "varchar")) {
                    // line 228
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 229
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 231
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 236
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "\t\t\t\t\t";
        }
        // line 238
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7 col-md-offset-2\">
\t\t\t\t\t\t\t<button id=\"profile-save-btn\" data-submiting-text=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t\t\t</form>

\t\t";
    }

    public function getTemplateName()
    {
        return "settings/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 245,  638 => 241,  633 => 238,  630 => 237,  624 => 236,  612 => 231,  605 => 229,  602 => 228,  600 => 227,  585 => 223,  578 => 221,  575 => 220,  573 => 219,  558 => 215,  551 => 213,  548 => 212,  546 => 211,  531 => 207,  524 => 205,  521 => 204,  519 => 203,  506 => 199,  499 => 197,  496 => 196,  493 => 195,  489 => 194,  486 => 193,  484 => 192,  474 => 185,  471 => 184,  467 => 183,  465 => 182,  456 => 176,  445 => 168,  439 => 167,  430 => 161,  425 => 159,  416 => 153,  413 => 152,  409 => 151,  407 => 150,  398 => 144,  392 => 141,  382 => 134,  377 => 132,  367 => 127,  362 => 125,  353 => 119,  348 => 117,  339 => 111,  334 => 109,  325 => 103,  320 => 101,  311 => 95,  306 => 93,  302 => 91,  296 => 87,  285 => 83,  282 => 82,  280 => 81,  274 => 78,  269 => 76,  266 => 75,  258 => 70,  254 => 69,  248 => 66,  245 => 65,  243 => 64,  239 => 62,  232 => 58,  229 => 57,  223 => 54,  220 => 53,  218 => 52,  214 => 51,  205 => 45,  199 => 44,  195 => 43,  189 => 42,  183 => 39,  178 => 36,  171 => 32,  168 => 31,  162 => 29,  160 => 28,  156 => 27,  140 => 22,  134 => 19,  128 => 16,  124 => 14,  118 => 12,  116 => 11,  113 => 10,  110 => 9,  104 => 8,  45 => 7,  42 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/profile.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\profile.html.twig");
    }
}
