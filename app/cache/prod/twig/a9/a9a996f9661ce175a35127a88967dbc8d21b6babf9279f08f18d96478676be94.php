<?php

/* admin/system/pay/alipay.html.twig */
class __TwigTemplate_8710182ac8fc886cfa1aeb5aaa089ba6004d71e04a1a5f729c9f4be92094122b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<fieldset>
  <legend>支付宝</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 8
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("alipay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_enabled", array()));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_key\">接口类型</label>
    </div>
    <div class=\"controls col-md-8 radios\">
 ";
        // line 17
        echo "      <label><input type=\"radio\" name=\"alipay_type\" value=\"direct\" ";
        if (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_type", array()) == "direct")) {
            echo "checked=\"checked\"";
        }
        echo " > 电脑网站支付</label>
      <label><input type=\"radio\" name=\"alipay_type\" value=\"escow\" ";
        // line 18
        if (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_type", array()) == "escow")) {
            echo "checked=\"checked\"  ";
        } else {
            echo " disabled";
        }
        echo " > 担保交易接口</label>
      <label><input type=\"radio\" name=\"alipay_type\" value=\"dualfun\" ";
        // line 19
        if (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_type", array()) == "dualfun")) {
            echo "checked=\"checked\" ";
        } else {
            echo " disabled";
        }
        echo " > 标准双接口</label>
      <div class=\"help-block\">
        PID和Key可在申请支付宝接口后获取，
        <a href=\"https://b.alipay.com/signing/productDetail.htm?productId=I1011000290000001000\" target=\"_blank\">如何申请？</a>
        <br>
        \"立即到账接口\"如需在移动客户端使用，请开通<a href=\"https://b.alipay.com/signing/productDetail.htm?productId=I1011000290000001001\" target=\"blank\">手机网站支付</a>
        <br>
        “标准双接口”和“担保交易接口”分别在2014-12-29、2016-1-21停止签约，已生效合同继续有效至合同结束，使用这两个接口的用户请在合同到期前改签电脑网站支付。
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_key\">PID</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_key\" name=\"alipay_key\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_key", array()), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_secret\">MD5密钥</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_secret\" name=\"alipay_secret\" class=\"form-control\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_secret", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">
        登录【支付宝商家服务】-【我的商家服务】-【签约管理】，可<a href=\"https://b.alipay.com/index.htm\" target=\"_blank\">查看PID和MD5秘钥</a>。
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_account\">支付宝账户</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_account\" name=\"alipay_account\" class=\"form-control\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_account", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">如需开启移动客户端支付，需填写支付宝账户。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>启用支付宝交易关闭接口</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 63
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("close_trade_enabled", array(1 => "是", 0 => "否"), (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "close_trade_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "close_trade_enabled", array()), 0)) : (0)));
        echo "
      <div class=\"help-block\">该配置用于取消订单后，同步关闭支付宝的交易订单。如需使用该配置，需向支付宝客服申请开通“交易关闭接口”，审核通过后，方可使用。</div>
    </div>
  </div>
</fieldset>";
    }

    public function getTemplateName()
    {
        return "admin/system/pay/alipay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 63,  102 => 54,  88 => 43,  77 => 35,  54 => 19,  46 => 18,  39 => 17,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/pay/alipay.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\admin\\system\\pay\\alipay.html.twig");
    }
}
