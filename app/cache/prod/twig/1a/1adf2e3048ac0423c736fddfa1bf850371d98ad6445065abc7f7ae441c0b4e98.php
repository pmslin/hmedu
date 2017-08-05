<?php

/* testpaper/manage/result-list.html.twig */
class __TwigTemplate_ce9b28b67f8882c1f18adb80478fec74e42d6fd051f71dad4bd05b81bfb226d6 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "testpaper/manage/result-list.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["resultStatus"] = array();
        // line 4
        $this->loadTemplate("testpaper/manage/result-list-search-form.html.twig", "testpaper/manage/result-list.html.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 6
        if ((isset($context["paperResults"]) ? $context["paperResults"] : null)) {
            // line 7
            echo "
<table class=\"table table-striped table-hover\">
  <thead>
    <tr>
      <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("姓名"), "html", null, true);
            echo "</th>
      <th>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("成绩"), "html", null, true);
            echo "</th>
      <th>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交时间"), "html", null, true);
            echo "</th>
      <th>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
            echo "</th>
      <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批阅人"), "html", null, true);
            echo "</th>
      <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
            echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paperResults"]) ? $context["paperResults"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paperResult"]) {
                // line 21
                echo "      ";
                $context["student"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["paperResult"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["paperResult"], "userId", array()), array(), "array"), null)) : (null));
                // line 22
                echo "      <tr>
        <td>";
                // line 23
                if ((isset($context["student"]) ? $context["student"] : null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "nickname", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无"), "html", null, true);
                }
                echo "</td>
        <td>
          ";
                // line 25
                if (($this->getAttribute($context["paperResult"], "status", array()) == "finished")) {
                    // line 26
                    echo "            ";
                    if (($this->getAttribute($context["paperResult"], "type", array()) == "testpaper")) {
                        // line 27
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["paperResult"], "score", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "score", array()), "html", null, true);
                        echo "
            ";
                    } elseif (($this->getAttribute(                    // line 28
$context["paperResult"], "type", array()) == "homework")) {
                        // line 29
                        echo "              ";
                        echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("passedStatus", $this->getAttribute($context["paperResult"], "passedStatus", array()));
                        echo "
            ";
                    }
                    // line 31
                    echo "          ";
                } else {
                    echo " -- ";
                }
                echo "</td>
        <td>";
                // line 32
                if (($this->getAttribute($context["paperResult"], "status", array()) != "doing")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["paperResult"], "endTime", array()), "Y-m-d H:i:s"), "html", null, true);
                } else {
                }
                echo "</td>
        <td>
          ";
                // line 34
                if (($this->getAttribute($context["paperResult"], "status", array()) == "doing")) {
                    // line 35
                    echo "            <span class=\"color-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进行中"), "html", null, true);
                    echo "</span>
          ";
                } elseif (($this->getAttribute(                // line 36
$context["paperResult"], "status", array()) == "reviewing")) {
                    // line 37
                    echo "            <span class=\"color-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("待批阅"), "html", null, true);
                    echo "</span>
          ";
                } else {
                    // line 39
                    echo "            <span class=\"color-primary\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已批阅"), "html", null, true);
                    echo "</span>
          ";
                }
                // line 41
                echo "        </td>
        ";
                // line 42
                if (($this->getAttribute($context["paperResult"], "status", array()) == "finished")) {
                    // line 43
                    echo "          ";
                    $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["paperResult"], "checkTeacherId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["paperResult"], "checkTeacherId", array()), array(), "array"), null)) : (null));
                    // line 44
                    echo "          <td>";
                    if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统批阅"), "html", null, true);
                    }
                    echo "</td>
        ";
                } else {
                    // line 46
                    echo "          <td> -- </td>
        ";
                }
                // line 48
                echo "
        <td>
          ";
                // line 50
                if (($this->getAttribute($context["paperResult"], "status", array()) == "finished")) {
                    // line 51
                    echo "            <a class=\"link-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($this->getAttribute($context["paperResult"], "type", array()) . "_result_show"), array("resultId" => $this->getAttribute($context["paperResult"], "id", array()), "action" => "check")), "html", null, true);
                    echo "\" id=\"show_testpaper_result\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看结果"), "html", null, true);
                    echo "</a>
          ";
                } elseif (($this->getAttribute(                // line 52
$context["paperResult"], "status", array()) == "reviewing")) {
                    // line 53
                    echo "            ";
                    if ((array_key_exists("isTeacher", $context) && (isset($context["isTeacher"]) ? $context["isTeacher"] : null))) {
                        // line 54
                        echo "              ";
                        if (((isset($context["source"]) ? $context["source"] : null) == "classroom")) {
                            // line 55
                            echo "                ";
                            $context["checkUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("classroom_manage_" . $this->getAttribute($context["paperResult"], "type", array())) . "_check"), array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "resultId" => $this->getAttribute($context["paperResult"], "id", array()), "action" => "check"));
                            // line 56
                            echo "              ";
                        } else {
                            // line 57
                            echo "                ";
                            $context["checkUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("course_manage_" . $this->getAttribute($context["paperResult"], "type", array())) . "_check"), array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "resultId" => $this->getAttribute($context["paperResult"], "id", array()), "action" => "check"));
                            // line 58
                            echo "              ";
                        }
                        // line 59
                        echo "              <a class=\"btn btn-default btn-sm \" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["checkUrl"]) ? $context["checkUrl"] : null), "html", null, true);
                        echo "\"  target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批阅"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 61
                        echo "              <a class=\"btn btn-default btn-sm disabled\" href=\"javascript;;\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批阅"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 63
                    echo "          ";
                }
                // line 64
                echo "        </td>
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paperResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "  </tbody>
</table>

";
        } else {
            // line 71
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无数据"), "html", null, true);
            echo "</div>
";
        }
        // line 73
        echo "
<nav class=\"text-center\">
  ";
        // line 75
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "
</nav>

";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/result-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 75,  233 => 73,  227 => 71,  221 => 67,  213 => 64,  210 => 63,  204 => 61,  196 => 59,  193 => 58,  190 => 57,  187 => 56,  184 => 55,  181 => 54,  178 => 53,  176 => 52,  169 => 51,  167 => 50,  163 => 48,  159 => 46,  149 => 44,  146 => 43,  144 => 42,  141 => 41,  135 => 39,  129 => 37,  127 => 36,  122 => 35,  120 => 34,  112 => 32,  105 => 31,  99 => 29,  97 => 28,  90 => 27,  87 => 26,  85 => 25,  76 => 23,  73 => 22,  70 => 21,  66 => 20,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/result-list.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\result-list.html.twig");
    }
}
