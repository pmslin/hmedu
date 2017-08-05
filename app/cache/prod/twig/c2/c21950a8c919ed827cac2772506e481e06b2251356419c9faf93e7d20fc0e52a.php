<?php

/* admin/system/pay/wxpay.html.twig */
class __TwigTemplate_9c9c51bdfd6c45086334a7f879198a6fb288ac5e33c7295a0c31f9bcba88ce41 extends Twig_Template
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
  <legend>微信支付</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      ";
        // line 8
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("wxpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_enabled", array()));
        echo "
    </div>
    <div class=\"controls col-md-4 radios\">
      <a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">简单申请介绍</a>
    </div>
  </div>

  <div class=\"form-group\" style=\"margin-top: -15px;\">
     <div class=\"col-md-3 help-block\">
    </div>
    <div class=\"col-md-9 help-block\">
      仅支持配置微信<a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">公众号支付</a>，配置后，可在PC端和微信APP内选择微信支付。
      <div class=\"alert alert-info text-left\" role=\"alert\">
        使用前提：
        <p>1、填写支付授权目录，路径：微信公众平台【微信支付】-【开发配置】-【支付授权目录】，目录地址为：网站域名/pay/center/  ；</p>
        <p>2、绑定网页授权域名，路径：微信公众平台【接口权限】-【网页授权】-【修改】-【网页授权域名】。<br><a target=\"_blank\" href=\"http://www.qiqiuyu.com/article/892\">【查看教程】</a></p>
      </div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_appid\">AppID</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_appid\" name=\"wxpay_appid\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_appid", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">AppID来自<a target=\"_blank\" href=\"https://mp.weixin.qq.com/\">微信公众平台</a>内左侧栏【开发】-【基本配置】</div>
    </div>
  </div>
   <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_secret\">AppSecret</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_secret\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_secret", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">
        <div class=\"help-block\">如需支持微信内购买，必须填写。AppSecret来自<a target=\"_blank\" href=\"https://mp.weixin.qq.com/\">微信公众平台</a>内左侧栏【开发】-【基本配置】</div>
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_secret\">MP文件验证码</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_mp_secret\" class=\"form-control\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_mp_secret", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_mp_secret", array()))) : ("")), "html", null, true);
        echo "\">
      <div class=\"help-block\">
        <div class=\"help-block\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写微信提供的MP_verify文件中的内容"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_account\">商户号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_account\" name=\"wxpay_account\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_account", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">商户号来自<a target=\"_blank\" href=\"https://mp.weixin.qq.com/\">微信公众平台</a>内左侧栏【微信支付】-【商户信息】</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_key\">微信商户平台API密钥</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_key\" name=\"wxpay_key\" class=\"form-control\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_key", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">
        微信商户平台API密钥需要登录<a href=\"https://pay.weixin.qq.com/service_provider/index.shtml\" target=\"_blank\">微信商户平台</a>，在【账户设置】-【API安全】中设置密匙。
      </div>
    </div>
  </div>
 

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "admin/system/pay/wxpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 73,  99 => 64,  87 => 55,  82 => 53,  68 => 42,  56 => 33,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/pay/wxpay.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\admin\\system\\pay\\wxpay.html.twig");
    }
}
