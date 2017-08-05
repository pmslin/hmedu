<?php

/* settings/security.html.twig */
class __TwigTemplate_456ea0677ba1fc230014a03dbdc0f6158a7d2590839e5f0449ebccfab043360c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("settings/layout.html.twig", "settings/security.html.twig", 1);
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
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo " ";
        $this->loadTemplate("settings/security.html.twig", "settings/security.html.twig", 6, "1436412258")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "settings/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  32 => 2,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/security.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\security.html.twig");
    }
}


/* settings/security.html.twig */
class __TwigTemplate_456ea0677ba1fc230014a03dbdc0f6158a7d2590839e5f0449ebccfab043360c_1436412258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("bootstrap/panel.html.twig", "settings/security.html.twig", 6);
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

    // line 7
    public function block_heading($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全设置"), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"row safety-setting\" style=\"margin-top:10px;\">
        <div class=\"col-xs-2 tar\">
          <span class=\"glyphicon glyphicon-info-sign ";
        // line 13
        if (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 67)) {
            echo "color-success";
        } elseif (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 34)) {
            echo "text-warning";
        } else {
            echo "color-danger";
        }
        echo "\" style=\"font-size:20px;\"></span>
        </div>
      <div class=\"col-sm-6 col-xs-5\">
        <div class=\"progress mbs\">
          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["progressScore"]) ? $context["progressScore"] : null), "html", null, true);
        echo "%;\"></div>
        </div>
      </div>
      <div class=\"col-sm-4 col-xs-5\">
        ";
        // line 21
        if (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 67)) {
            // line 22
            echo "          <span class=\"color-success\" style=\"display:block;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全等级：高"), "html", null, true);
            echo "</span>
        ";
        } elseif ((        // line 23
(isset($context["progressScore"]) ? $context["progressScore"] : null) > 34)) {
            // line 24
            echo "        <span class=\"text-warning\" style=\"display:block;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全等级：中"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 26
            echo "          <span class=\"color-danger\" style=\"display:block;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全等级：低"), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        echo "      </div>
    </div>

    <hr>

    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 35
        if ((isset($context["hasLoginPassword"]) ? $context["hasLoginPassword"] : null)) {
            // line 36
            echo "          color-success
        ";
        } else {
            // line 38
            echo "          color-danger
        ";
        }
        // line 40
        echo "      \" style=\"font-size:20px\">
        ";
        // line 41
        if ((isset($context["hasLoginPassword"]) ? $context["hasLoginPassword"] : null)) {
            // line 42
            echo "          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 44
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 46
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录密码"), "html", null, true);
        echo "</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录网校时需要输入的密码。"), "html", null, true);
        echo "</span>

      <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_password");
        echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("修改"), "html", null, true);
        echo "</a>
    </div>
    <hr>

    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 58
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            // line 59
            echo "          color-success
        ";
        } else {
            // line 61
            echo "          color-danger
        ";
        }
        // line 63
        echo "      \" style=\"font-size:20px\">
        ";
        // line 64
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            // line 65
            echo "          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 67
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 69
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付密码"), "html", null, true);
        echo "</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在网校进行消费行为时需要输入的密码。"), "html", null, true);
        echo "</span>

      ";
        // line 75
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            // line 76
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_reset_pay_password");
            echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重置"), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 78
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_pay_password");
            echo "\" class=\"col-xs-offset-1  btn btn-primary\" style=\"margin-top: -3px;\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
            echo "</a>
      ";
        }
        // line 80
        echo "
    </div>
    <hr>

    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 86
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            // line 87
            echo "          color-success
        ";
        } else {
            // line 89
            echo "          color-danger
        ";
        }
        // line 90
        echo " \"
        style=\"font-size:20px\">

        ";
        // line 93
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            // line 94
            echo "          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 96
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 98
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全问题"), "html", null, true);
        echo "</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通过设置并且验证安全问题，保护帐号密码安全。"), "html", null, true);
        echo "</span>

      <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_security_questions");
        echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >
      ";
        // line 105
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            // line 106
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看"), "html", null, true);
            echo "
      ";
        } else {
            // line 108
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
            echo "
      ";
        }
        // line 110
        echo "
      </a>
    </div>

    ";
        // line 114
        if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled"), "") == "1") && (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_bind"), "") == "on"))) {
            // line 115
            echo "      <hr>

      <div class=\"row\">
        <div class=\"col-xs-2 tar
          ";
            // line 119
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                // line 120
                echo "            color-success
          ";
            } else {
                // line 122
                echo "            color-danger
          ";
            }
            // line 123
            echo " \"
          style=\"font-size:20px\">

          ";
            // line 126
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                // line 127
                echo "            <span class=\"glyphicon glyphicon-ok\"></span>
          ";
            } else {
                // line 129
                echo "            <span class=\"glyphicon glyphicon-warning-sign\"></span>
          ";
            }
            // line 131
            echo "        </div>

        <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机绑定"), "html", null, true);
            echo "</span>

        <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("增加账户登录、购买课程时的安全性，同时还可以找回登录密码，支付密码。"), "html", null, true);
            echo "</span>

        <a href=\"";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_bind_mobile");
            echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >
        ";
            // line 138
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                // line 139
                echo "          ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("修改"), "html", null, true);
                echo "
        ";
            } else {
                // line 141
                echo "          ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("绑定"), "html", null, true);
                echo "
        ";
            }
            // line 143
            echo "        </a>
      </div>
    ";
        }
        // line 146
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "settings/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 146,  408 => 143,  402 => 141,  396 => 139,  394 => 138,  390 => 137,  385 => 135,  380 => 133,  376 => 131,  372 => 129,  368 => 127,  366 => 126,  361 => 123,  357 => 122,  353 => 120,  351 => 119,  345 => 115,  343 => 114,  337 => 110,  331 => 108,  325 => 106,  323 => 105,  319 => 104,  314 => 102,  309 => 100,  305 => 98,  301 => 96,  297 => 94,  295 => 93,  290 => 90,  286 => 89,  282 => 87,  280 => 86,  272 => 80,  264 => 78,  256 => 76,  254 => 75,  249 => 73,  244 => 71,  240 => 69,  236 => 67,  232 => 65,  230 => 64,  227 => 63,  223 => 61,  219 => 59,  217 => 58,  206 => 52,  201 => 50,  196 => 48,  192 => 46,  188 => 44,  184 => 42,  182 => 41,  179 => 40,  175 => 38,  171 => 36,  169 => 35,  160 => 28,  154 => 26,  148 => 24,  146 => 23,  141 => 22,  139 => 21,  132 => 17,  119 => 13,  111 => 9,  108 => 8,  102 => 7,  43 => 6,  40 => 5,  32 => 2,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/security.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\security.html.twig");
    }
}
