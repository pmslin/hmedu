<?php

/* order/order-table.html.twig */
class __TwigTemplate_7ea414ca0dc0e1184867eeaa022d2c4261f4831ff144e3fdbdfc6bbb063b875b extends Twig_Template
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
        // line 7
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "order/order-table.html.twig", 7);
        // line 8
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "order/order-table.html.twig", 8);
        // line 9
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "my"))) : (array(0 => "my")));
        // line 10
        echo "  <thead>
    <tr>
      <th width=\"20%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单名称"), "html", null, true);
        echo "</th>
      <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("实付(元)"), "html", null, true);
        echo "</th>
      ";
        // line 16
        if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "course", 1 => "admin"))) {
            // line 17
            echo "        <th width=\"10%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者"), "html", null, true);
            echo "</th>
      ";
        }
        // line 19
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"), "html", null, true);
        echo "
      <span data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-container=\"body\" data-content=\"
       <div>站外支付为该笔订单是通过导入或者手动添加的方式产生的，故为站外支付</div>\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-pay-way-popover\"></span>
      </th>
      <th style=\"min-width:100px\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 28
            echo "      ";
            $context["buyer"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array"), null)) : (null));
            // line 29
            echo "        <tr id=\"order-table-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\" style=\"word-break: break-all;word-wrap: break-word;\">
          <td>
            ";
            // line 31
            if (($this->getAttribute($context["order"], "targetType", array()) == "course")) {
                // line 32
                echo "              <a  class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 33
$context["order"], "targetType", array()) == "vip")) {
                // line 34
                echo "              <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 35
$context["order"], "targetType", array()) == "classroom")) {
                // line 36
                echo "              <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } else {
                // line 38
                echo "              <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong>
            ";
            }
            // line 40
            echo "            <br>
            <span class=\"color-gray text-sm\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号：%sn%", array("%sn%" => $this->getAttribute($context["order"], "sn", array()))), "html", null, true);
            echo "</span>
            ";
            // line 53
            echo "          </td>
          <td><span class=\"color-gray text-sm\">";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span></td>
          <td>";
            // line 55
            echo $context["dict_macro"]->getorderStatus($this->getAttribute($context["order"], "status", array()));
            echo "</td>
          <td><span class=\"color-warning\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
            echo "</span></td>
          ";
            // line 57
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "admin", 1 => "course"))) {
                // line 58
                echo "            <td>
              ";
                // line 59
                echo $context["web_macro"]->getuser_link((isset($context["buyer"]) ? $context["buyer"] : null));
                echo "
            </td>
          ";
            }
            // line 62
            echo "          <td>
            ";
            // line 63
            if (($this->getAttribute($context["order"], "paidTime", array()) > 0)) {
                // line 64
                echo "              ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("payment", $this->getAttribute($context["order"], "payment", array())), "--"), "html", null, true);
                echo "
              <br>
              <span class=\"color-gray text-sm\">";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "paidTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 68
                echo "              --
            ";
            }
            // line 70
            echo "          </td>
          <td>
            ";
            // line 72
            if (("admin" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 73
                echo "                <a class=\"link-primary\" href=\"javascript:;\"  data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
              ";
            }
            // line 75
            echo "            ";
            if (("course" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 76
                echo "            <a class=\"link-primary\" href=\"javascript:;\"  data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
            ";
            }
            // line 78
            echo "
            ";
            // line 79
            if (("my" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 80
                echo "              <div class=\"btn-group\">
                <a href=\"javascript:;\" class=\"link-primary\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_user_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
                ";
                // line 82
                if ((($this->getAttribute($context["order"], "status", array()) == "refunding") || ($this->getAttribute($context["order"], "status", array()) == "created"))) {
                    // line 83
                    echo "                  <a href=\"#\" type=\"button\" class=\"link-primary ml10 dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu pull-right ";
                    // line 86
                    echo "\" style=\"min-width: 120px;\" >

                  ";
                    // line 89
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "refunding")) {
                        // line 90
                        echo "                      <li><a href=\"javascript:;\" class=\"cancel-refund\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_cancel_refund", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消退款"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 92
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "created")) {
                        // line 93
                        echo "
                      <li>
                        <a href=\"";
                        // line 95
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_center_show", array("sn" => $this->getAttribute($context["order"], "sn", array()), "targetType" => $this->getAttribute($context["order"], "targetType", array()))), "html", null, true);
                        echo "\"  style=\"display:block\" >";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("去支付"), "html", null, true);
                        echo "</a>
                      </li>
                      <li><a href=\"javascript:;\" class=\" cancel\" style=\"display:block\" data-url=\"";
                        // line 97
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_cancel", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消订单"), "html", null, true);
                        echo "</a></li>

                    ";
                    }
                    // line 100
                    echo "                   ";
                    // line 101
                    echo "                  </ul>
                ";
                }
                // line 103
                echo "              </div>
            ";
            }
            // line 105
            echo "          </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "      <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无订单记录"), "html", null, true);
            echo "</div></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "  </tbody>
";
    }

    public function getTemplateName()
    {
        return "order/order-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 110,  269 => 108,  262 => 105,  258 => 103,  254 => 101,  252 => 100,  244 => 97,  237 => 95,  233 => 93,  230 => 92,  222 => 90,  219 => 89,  215 => 86,  210 => 83,  208 => 82,  202 => 81,  199 => 80,  197 => 79,  194 => 78,  186 => 76,  183 => 75,  175 => 73,  173 => 72,  169 => 70,  165 => 68,  160 => 66,  154 => 64,  152 => 63,  149 => 62,  143 => 59,  140 => 58,  138 => 57,  134 => 56,  130 => 55,  126 => 54,  123 => 53,  119 => 41,  116 => 40,  110 => 38,  102 => 36,  100 => 35,  93 => 34,  91 => 33,  84 => 32,  82 => 31,  76 => 29,  73 => 28,  68 => 27,  61 => 23,  53 => 19,  47 => 17,  45 => 16,  41 => 15,  37 => 14,  33 => 13,  29 => 12,  25 => 10,  23 => 9,  21 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "order/order-table.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\order\\order-table.html.twig");
    }
}
