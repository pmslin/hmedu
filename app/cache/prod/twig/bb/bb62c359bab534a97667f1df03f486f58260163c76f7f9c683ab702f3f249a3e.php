<?php

/* admin/system/pay/heepay.html.twig */
class __TwigTemplate_e2923062db54db945057980d428f2b42249c48460bb1acde21298bee840251f4 extends Twig_Template
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
  <legend>汇付宝－网银支付</legend>
  ";
        // line 3
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.quickpay", false)) {
            // line 4
            echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-3 radios\">
        ";
            // line 9
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("heepay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "heepay_enabled", array()));
            echo "
      </div>
      <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/heepay.zip\">下载接口申请说明文档</a>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"heepay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"heepay_key\" name=\"heepay_key\" class=\"form-control\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "heepay_key", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"heepay_secret\">商户平台Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"heepay_secret\" name=\"heepay_secret\" class=\"form-control\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "heepay_secret", array()), "html", null, true);
            echo "\">
      </div>
    </div>
  ";
        } else {
            // line 34
            echo "    <div class=\"alert alert-info text-center\" role=\"alert\">
      因汇付宝公司事务引起网银支付申请暂停，对此造成不便，请您谅解，如有疑问，请联系EduSoho官方
    </div>
  ";
        }
        // line 38
        echo "</fieldset>";
    }

    public function getTemplateName()
    {
        return "admin/system/pay/heepay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 38,  66 => 34,  59 => 30,  47 => 21,  32 => 9,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/pay/heepay.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\admin\\system\\pay\\heepay.html.twig");
    }
}
