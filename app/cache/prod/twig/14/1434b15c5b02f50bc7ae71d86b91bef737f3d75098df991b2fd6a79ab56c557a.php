<?php

/* admin/order/manage.html.twig */
class __TwigTemplate_e43e2951f3a403457464d74ec1580494b86d17027de8640721b5033618192f02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/order/manage.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["menu"] = (("admin_" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "_order");
        // line 9
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间:"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\"
          placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\"
          placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"mbm\">
      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("筛选条件:"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"status\">
          ";
        // line 28
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("orderStatus"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单状态"));
        echo "
        </select>

        <select class=\"form-control\" name=\"payment\">
          ";
        // line 32
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("payment"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"));
        echo "
        </select>
      </div>
      <div class=\"form-group\" style=\"display:none;\">
        <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\" , placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付款时间段"), "html", null, true);
        echo "\">
      </div>


      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词:"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"keywordType\">
          ";
        // line 43
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "vip")) {
            // line 44
            echo "            ";
            $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者用户名"), "title" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名")));
            // line 45
            echo "          ";
        } elseif (((isset($context["targetType"]) ? $context["targetType"] : null) == "course")) {
            // line 46
            echo "            ";
            $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者用户名"), "courseSetTitle" => "课程名称", "courseSetId" => " 课程编号", "title" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName",             // line 51
(isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名")), "mobile" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者绑定手机号"), "email" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者邮箱"));
            // line 54
            echo "          ";
        } else {
            // line 55
            echo "            ";
            $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者用户名"), "targetId" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号")), "title" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名")), "mobile" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者绑定手机号"), "email" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者邮箱"));
            // line 56
            echo "          ";
        }
        // line 57
        echo "          ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"));
        echo "
        </select>

        <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
      </div>

      <button class=\"btn btn-primary\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
      <a class=\"btn btn-primary btn-export-csv\"
        href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_manage_export_csv", array("targetType" =>         // line 66
(isset($context["targetType"]) ? $context["targetType"] : null), "startTime" => $this->getAttribute(        // line 67
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "endTime" => $this->getAttribute(        // line 68
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute(        // line 69
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "payment" => $this->getAttribute(        // line 70
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute(        // line 71
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute(        // line 72
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"))), "html", null, true);
        // line 73
        echo "\"
        data-export-count=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method"), "html", null, true);
        echo "\"
        data-export-count-format=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->numberFilter($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method")), "html", null, true);
        echo "\"
        data-export-allow-count=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.export_allow_count"), "html", null, true);
        echo "\"
        data-export-allow-count-format=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->numberFilter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.export_allow_count")), "html", null, true);
        echo "\"
      >";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出结果"), "html", null, true);
        echo "</a>
    </div>
  </form>

  <table class=\"table table-striped table-hover\" id=\"order-table\">
    ";
        // line 83
        $this->loadTemplate("order/order-table.html.twig", "admin/order/manage.html.twig", 83)->display(array_merge($context, array("mode" => "admin")));
        // line 84
        echo "  </table>
  <div class=\"paginator\">
    ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>

  <div class=\"alert alert-info\">
    站外支付为该笔订单是通过导入或者手动添加的方式产生的，故为站外支付
  </div>
";
    }

    public function getTemplateName()
    {
        return "admin/order/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 86,  178 => 84,  176 => 83,  168 => 78,  164 => 77,  160 => 76,  156 => 75,  152 => 74,  149 => 73,  147 => 72,  146 => 71,  145 => 70,  144 => 69,  143 => 68,  142 => 67,  141 => 66,  140 => 65,  135 => 63,  127 => 60,  120 => 57,  117 => 56,  114 => 55,  111 => 54,  109 => 51,  107 => 46,  104 => 45,  101 => 44,  99 => 43,  94 => 41,  86 => 36,  79 => 32,  72 => 28,  67 => 26,  59 => 21,  55 => 20,  50 => 18,  46 => 17,  42 => 16,  36 => 12,  33 => 11,  29 => 1,  27 => 9,  25 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/order/manage.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\admin\\order\\manage.html.twig");
    }
}
