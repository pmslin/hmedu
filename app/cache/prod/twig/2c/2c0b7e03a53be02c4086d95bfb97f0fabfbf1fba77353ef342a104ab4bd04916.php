<?php

/* course-manage/orders.html.twig */
class __TwigTemplate_f5648d9c888256622935f51bfb5a33165284ea48293774df4b9975854a5c249a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/orders.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "orders";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程订单查询"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
        // line 8
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("course-manage/order");
        // line 9
        echo "  ";
        $this->loadTemplate("seajs_loader_compatible.html.twig", "course-manage/orders.html.twig", 9)->display(array_merge($context, array("topxiawebbundle" => true)));
        // line 10
        echo "
  <div class=\"panel panel-default\">
    ";
        // line 12
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/orders.html.twig", 12)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null), "btnGroup" => 1)));
        // line 13
        echo "    <div class=\"panel-body\">
      <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
        <div class=\"mbm\">
          ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间"), "html", null, true);
        echo " :
          <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">-</div>
          <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
          </div>
        </div>
        <div>
          ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("筛选条件"), "html", null, true);
        echo " :
          <div class=\"form-group\">
            <select class=\"form-control\" name=\"status\">
              ";
        // line 29
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("orderStatus"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单状态"));
        echo "
            </select>
          </div>

          <div class=\"form-group\">
            <select class=\"form-control\" name=\"payment\">
              ";
        // line 35
        $context["options"] = array("" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"), "alipay" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付宝"), "wxpay" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微信支付"), "none" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("其他支付"));
        // line 36
        echo "              ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"));
        echo "
            </select>
          </div>

          <span class=\"divider\"></span>

            <div class=\"form-group\">
                <select class=\"form-control\" name=\"keywordType\">
                  ";
        // line 44
        $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者用户名"));
        // line 45
        echo "                  ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"));
        echo "
                </select>
            </div>

            <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
            </div>

          <button class=\"btn btn-primary\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
        </div>
      </form>
      <table class=\"table table-striped table-hover\" id=\"order-table\">
          ";
        // line 57
        $this->loadTemplate("order/order-table.html.twig", "course-manage/orders.html.twig", 57)->display(array_merge($context, array("mode" => "course")));
        // line 58
        echo "      </table>
      ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  143 => 58,  141 => 57,  134 => 53,  126 => 50,  117 => 45,  115 => 44,  103 => 36,  101 => 35,  92 => 29,  86 => 26,  77 => 22,  68 => 18,  63 => 16,  58 => 13,  56 => 12,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  41 => 6,  31 => 3,  27 => 1,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/orders.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\orders.html.twig");
    }
}
