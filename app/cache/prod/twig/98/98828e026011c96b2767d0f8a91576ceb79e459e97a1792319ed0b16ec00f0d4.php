<?php

/* order/order-create.html.twig */
class __TwigTemplate_3b252a99fcb3f22fd311286d7806c0458a73d1fa7e946944545835d2f108d8f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "order/order-create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esBar' => array($this, 'block_esBar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/order/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单确认"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"order-pay\">
  <div class=\"es-section\">
    <ul class=\"es-step es-step-3 clearfix\">
      <li class=\"doing\"><span class=\"number\">1</span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单确认"), "html", null, true);
        echo "</li>
      <li><span class=\"number\">2</span>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单支付"), "html", null, true);
        echo "</li>
      <li><span class=\"number\">3</span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单完成"), "html", null, true);
        echo "</li>
    </ul>
    <div class=\"order-pay-body\">
      <form id=\"order-create-form\" method=\"post\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_create");
        echo "\">
        <input type=\"password\" style=\"display:none\">
      \t";
        // line 19
        if (((array_key_exists("order", $context)) ? (_twig_default_filter((isset($context["order"]) ? $context["order"] : null), null)) : (null))) {
            // line 20
            echo "        <input type=\"hidden\" name=\"orderId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
            echo "\"/>
        ";
        }
        // line 22
        echo "      \t<input type=\"hidden\" role=\"cash-rate\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("cashRate", $context)) ? (_twig_default_filter((isset($context["cashRate"]) ? $context["cashRate"] : null), null)) : (null)), "html", null, true);
        echo "\"
        data-price-type = \"";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")), "html", null, true);
        echo "\" data-cash-model='";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_model"), "none"), "html", null, true);
        echo "'/>
        <input type=\"hidden\" name=\"targetType\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"targetId\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"totalPrice\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"shouldPayMoney\" value=\"\"/>
        <input type=\"hidden\" name=\"sms_code\" value=\"\"/>
        <input type=\"hidden\" name=\"mobile\" data-role=\"mobile\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <div class=\"order-detail-bg\" style=\"border:none\">
          ";
        // line 32
        if ($this->env->getExtension('AppBundle\Twig\OrderExtension')->checkOrderType((isset($context["targetType"]) ? $context["targetType"] : null))) {
            // line 33
            echo "            ";
            $this->loadTemplate($this->env->getExtension('AppBundle\Twig\OrderExtension')->checkOrderType((isset($context["targetType"]) ? $context["targetType"] : null)), "order/order-create.html.twig", 33)->display($context);
            // line 34
            echo "          ";
        }
        // line 35
        echo "        </div>

        ";
        // line 37
        if ($this->env->getExtension('AppBundle\Twig\OrderExtension')->checkOrderType((isset($context["targetType"]) ? $context["targetType"] : null))) {
            // line 38
            echo "          <div class=\"order-detail-bg\">

            ";
            // line 40
            if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Coupon") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coupon.enabled")) || _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("invite.invite_code_setting"), false))) {
                // line 43
                echo "              ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:My/Card:availableCoupons", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "totalPrice" => (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "priceType" => ((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")))));
                echo "
            ";
            }
            // line 45
            echo "
            ";
            // line 46
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled")) {
                // line 47
                echo "            \t";
                $this->loadTemplate("order/order-item-coin.html.twig", "order/order-create.html.twig", 47)->display($context);
                // line 48
                echo "            ";
            }
            // line 49
            echo "
          </div>
        ";
        }
        // line 52
        echo "
        <div class=\"form-group\">
          <div class=\"total-price\">
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("应付金额："), "html", null, true);
        echo "
            ";
        // line 56
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin")) {
            // line 57
            echo "              <span role=\"pay-coin\">0</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%coin_name% ÷ 汇率(%cashRate%) = ", array("%coin_name%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "%cashRate%" => ((array_key_exists("cashRate", $context)) ? (_twig_default_filter((isset($context["cashRate"]) ? $context["cashRate"] : null), 1)) : (1)))), "html", null, true);
            echo "<span class=\"pay-rmb\">￥</span> <span role=\"pay-rmb\" class=\"pay-rmb\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 59
            echo "              <span class=\"pay-rmb\">￥</span><span role=\"pay-rmb\" class=\"pay-rmb\"></span>
            ";
        }
        // line 61
        echo "          </div>
        </div>
        <div class=\"form-group text-right\">
          <a
            ";
        // line 65
        if ((((isset($context["targetType"]) ? $context["targetType"] : null) == "course") && ((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : null), null)) : (null)))) {
            // line 66
            echo "              href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
            ";
        } elseif ((        // line 67
(isset($context["targetType"]) ? $context["targetType"] : null) == "vip")) {
            // line 68
            echo "              href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_renew");
            echo "\"
            ";
        } elseif ((        // line 69
(isset($context["targetType"]) ? $context["targetType"] : null) == "classroom")) {
            // line 70
            echo "              href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"
            ";
        }
        // line 72
        echo "            class=\"btn btn-link\" style=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</a>
          ";
        // line 73
        if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled"), "") == "1") && (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_user_pay"), "") == "on"))) {
            // line 74
            echo "            <a class=\"btn btn-primary\" id=\"js-order-create-sms-btn\" data-target=\"#modal\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_pay_sms_verification");
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交订单"), "html", null, true);
            echo "</a>
          ";
        } else {
            // line 76
            echo "            <button class=\"btn btn-primary\" id=\"order-create-btn\" type=\"button\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交..."), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交订单"), "html", null, true);
            echo "</button>
          ";
        }
        // line 78
        echo "        </div>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "order/order-create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 78,  224 => 76,  216 => 74,  214 => 73,  209 => 72,  203 => 70,  201 => 69,  196 => 68,  194 => 67,  189 => 66,  187 => 65,  181 => 61,  177 => 59,  169 => 57,  167 => 56,  163 => 55,  158 => 52,  153 => 49,  150 => 48,  147 => 47,  145 => 46,  142 => 45,  136 => 43,  134 => 40,  130 => 38,  128 => 37,  124 => 35,  121 => 34,  118 => 33,  116 => 32,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  87 => 23,  82 => 22,  76 => 20,  74 => 19,  69 => 17,  63 => 14,  59 => 13,  55 => 12,  50 => 9,  47 => 8,  42 => 6,  33 => 2,  29 => 1,  27 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "order/order-create.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\order\\order-create.html.twig");
    }
}
