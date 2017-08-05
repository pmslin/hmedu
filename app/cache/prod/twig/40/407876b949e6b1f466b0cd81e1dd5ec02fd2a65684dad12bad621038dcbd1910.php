<?php

/* pay-center/show.html.twig */
class __TwigTemplate_f77ca0aebc621610c8f1b50b095c79865a5181eb02ad607c7d1d1dad6090e72e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "pay-center/show.html.twig", 1);
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
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/pay/select/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付中心"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"order-pay\">

    <div class=\"es-section\">
      <ul class=\"es-step es-step-3 clearfix\">
        <li class=\"done\"><span class=\"number\"><i class=\"es-icon es-icon-done\"></i></span>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单确认"), "html", null, true);
        echo "</li>
        <li class=\"doing\"><span class=\"number\">2</span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单支付"), "html", null, true);
        echo "</li>
        <li><span class=\"number\">3</span>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单完成"), "html", null, true);
        echo "</li>
      </ul>
      <div class=\"order-pay-body\">
        <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
          </button>
          ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单已提交，请在４８小时内完成支付！逾期订单将被取消。"), "html", null, true);
        echo "
        </div>

        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller((isset($context["template"]) ? $context["template"] : null), array("sn" => (isset($context["sn"]) ? $context["sn"] : null))));
        echo "

        <div class=\"es-piece\" style=\"margin-bottom:20px;\">
          <div class=\"piece-header\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 35
        echo "        <form class=\"form-paytype\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_center_pay");
        echo "\">
          <input type=\"hidden\" name=\"targetType\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array()), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"orderId\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "\"/>
          ";
        // line 38
        $context["activePayment"] = (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payment", array()), (($this->getAttribute((isset($context["firstEnabledPayment"]) ? $context["firstEnabledPayment"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["firstEnabledPayment"]) ? $context["firstEnabledPayment"] : null), "name", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["firstEnabledPayment"]) ? $context["firstEnabledPayment"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["firstEnabledPayment"]) ? $context["firstEnabledPayment"] : null), "name", array()), "")) : (""))));
        // line 39
        echo "          ";
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payment", array()) == "none")) {
            // line 40
            echo "            ";
            $context["activePayment"] = (($this->getAttribute((isset($context["firstEnabledPayment"]) ? $context["firstEnabledPayment"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["firstEnabledPayment"]) ? $context["firstEnabledPayment"] : null), "name", array()), "")) : (""));
            // line 41
            echo "          ";
        }
        // line 42
        echo "
          <input type=\"hidden\" name=\"payment\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["activePayment"]) ? $context["activePayment"] : null), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          ";
        // line 45
        $context["cbpay"] = false;
        // line 46
        echo "          ";
        $context["alipay"] = false;
        // line 47
        echo "          ";
        $context["wxpay"] = false;
        // line 48
        echo "
          <div class=\"form-group order-detail-bg\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) ? $context["payments"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 51
            echo "              ";
            if ((twig_in_filter($this->getAttribute($context["payment"], "name", array()), array(0 => "heepay", 1 => "llcbpay")) && ($this->getAttribute($context["payment"], "enabled", array()) == 0))) {
                // line 52
                echo "                ";
                $context["cbpay"] = true;
                // line 53
                echo "              ";
            } elseif ((($this->getAttribute($context["payment"], "name", array()) == "alipay") && ($this->getAttribute($context["payment"], "enabled", array()) == 0))) {
                // line 54
                echo "                ";
                $context["alipay"] = true;
                // line 55
                echo "              ";
            } elseif ((($this->getAttribute($context["payment"], "name", array()) == "wxpay") && ($this->getAttribute($context["payment"], "enabled", array()) == 0))) {
                // line 56
                echo "                ";
                $context["wxpay"] = true;
                // line 57
                echo "              ";
            }
            // line 58
            echo "              ";
            if ((twig_in_filter((isset($context["activePayment"]) ? $context["activePayment"] : null), array(0 => "none", 1 => "")) && $this->getAttribute($context["payment"], "enabled", array()))) {
                // line 59
                echo "                ";
                $context["activePayment"] = $this->getAttribute($context["payment"], "name", array());
                // line 60
                echo "              ";
            }
            // line 61
            echo "
              <div
                class=\"check ";
            // line 63
            if ( !$this->getAttribute($context["payment"], "enabled", array())) {
                echo "disabled";
            }
            echo " ";
            if (((isset($context["activePayment"]) ? $context["activePayment"] : null) == $this->getAttribute($context["payment"], "name", array()))) {
                echo "active";
            }
            echo "\"
                id=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "name", array()), "html", null, true);
            echo "\">
                ";
            // line 65
            $context["picture"] = (("assets/img/order/" . $this->getAttribute($context["payment"], "name", array())) . ".png");
            // line 66
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["picture"]) ? $context["picture"] : null)), "html", null, true);
            echo "\"/>
                <span class=\"icon\"></span>
              </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "              <div class=\"pay-type-label text-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式未开启，请联系管理员。"), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            ";
        if ( !twig_test_empty((isset($context["payAgreements"]) ? $context["payAgreements"] : null))) {
            // line 73
            echo "              <div class=\"js-pay-agreement\" style=\"display:none\">
                <ul class=\"pay-agreement-list row\">
                  ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payAgreements"]) ? $context["payAgreements"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["payAgreement"]) {
                // line 76
                echo "                    <li id=\"unbind-bank-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payAgreement"], "id", array()), "html", null, true);
                echo "\"
                      class=\"col-md-6 js-pay-bank ";
                // line 77
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked";
                }
                echo "\">
                      <div class=\"pay-bank clearfix\">
                        <input class=\"hidden\" type=\"radio\" name='payAgreementId' value=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["payAgreement"], "id", array()), "html", null, true);
                echo "\"
                          ";
                // line 80
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked";
                }
                echo " />
                        <span class=\"name\">";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["payAgreement"], "bankName", array()), "html", null, true);
                echo "</span>
                        <span class=\"number\">***";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["payAgreement"], "bankNumber", array()), "html", null, true);
                echo "</span>
                        <span
                          class=\"hidden-xs\">";
                // line 84
                if (($this->getAttribute($context["payAgreement"], "type", array()) == 0)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("储蓄卡"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("信用卡"), "html", null, true);
                }
                echo "</span>
                        <a href=\"javascript:;\" class=\"closed visible-lg\"
                          data-url=\"";
                // line 86
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_unbind_mobile_show");
                echo "\"><i
                            class=\"es-icon es-icon-icon_close_circle\"></i></a>
                      </div>
                    </li>
                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payAgreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                  <li class=\"col-md-6 js-pay-bank\">
                    <div class=\"pay-bank\">
                      <input class=\"hidden\" type=\"radio\" name='payAgreementId' value=\"\"/>
                      <span class=\"color-gray\">";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用新的银行卡"), "html", null, true);
            echo "</span>
                    </div>
                  </li>
                </ul>
              </div>
            ";
        }
        // line 100
        echo "            ";
        if ((((array_key_exists("alipay", $context)) ? (_twig_default_filter((isset($context["alipay"]) ? $context["alipay"] : null), "")) : ("")) || ((array_key_exists("cbpay", $context)) ? (_twig_default_filter((isset($context["cbpay"]) ? $context["cbpay"] : null), "")) : ("")))) {
            // line 101
            echo "              ";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isMicroMessenger()) {
                // line 102
                echo "                <p class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您正在使用微信浏览，暂不支持其他支付方式"), "html", null, true);
                echo "</p>
              ";
            } else {
                // line 104
                echo "                <p class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("若需使用网银支付，请使用IE浏览器"), "html", null, true);
                echo "</p>
              ";
            }
            // line 106
            echo "            ";
        }
        // line 107
        echo "            ";
        if (((array_key_exists("wxpay", $context)) ? (_twig_default_filter((isset($context["wxpay"]) ? $context["wxpay"] : null), "")) : (""))) {
            // line 108
            echo "              <p class=\"color-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您正在使用手机浏览，暂不支持微信支付方式"), "html", null, true);
            echo "</p>
            ";
        }
        // line 110
        echo "          </div>
          <div class=\"form-group\">
            <div class=\"total-price\">
              ";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("应付金额："), "html", null, true);
        echo "
              <span role=\"pay-rmb\" class=\"pay-rmb\">￥";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"form-group text-right\">
            ";
        // line 118
        if (twig_in_filter((isset($context["targetType"]) ? $context["targetType"] : null), array(0 => "course", 1 => "classroom", 2 => "vip"))) {
            // line 119
            echo "              ";
            $this->loadTemplate((("pay-center/" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "-cancelled.html.twig"), "pay-center/show.html.twig", 119)->display($context);
            // line 120
            echo "            ";
        }
        // line 121
        echo "            <button class=\"pay-button btn btn-primary\" ";
        if (((isset($context["activePayment"]) ? $context["activePayment"] : null) == "")) {
            echo "disabled=\"disabled\"
              ";
        } else {
            // line 122
            echo "type=\"submit\"";
        }
        echo " >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确认支付"), "html", null, true);
        echo "</button>
          </div>

        </form>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "pay-center/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 122,  363 => 121,  360 => 120,  357 => 119,  355 => 118,  348 => 114,  344 => 113,  339 => 110,  333 => 108,  330 => 107,  327 => 106,  321 => 104,  315 => 102,  312 => 101,  309 => 100,  300 => 94,  295 => 91,  276 => 86,  267 => 84,  262 => 82,  258 => 81,  252 => 80,  248 => 79,  241 => 77,  236 => 76,  219 => 75,  215 => 73,  212 => 72,  203 => 70,  193 => 66,  191 => 65,  187 => 64,  177 => 63,  173 => 61,  170 => 60,  167 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  152 => 54,  149 => 53,  146 => 52,  143 => 51,  138 => 50,  134 => 48,  131 => 47,  128 => 46,  126 => 45,  122 => 44,  118 => 43,  115 => 42,  112 => 41,  109 => 40,  106 => 39,  104 => 38,  100 => 37,  96 => 36,  91 => 35,  86 => 28,  80 => 25,  74 => 22,  64 => 15,  60 => 14,  56 => 13,  50 => 9,  47 => 8,  42 => 5,  33 => 2,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pay-center/show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\pay-center\\show.html.twig");
    }
}
