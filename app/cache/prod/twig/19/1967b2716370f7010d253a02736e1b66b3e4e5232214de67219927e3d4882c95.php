<?php

/* course/header/header-for-guest-buy-btn.html.twig */
class __TwigTemplate_b70880e0dfc48e38787bd3cac370976f1cad28adb511d57bd63a919cc10cef0c extends Twig_Template
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
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), true)) : (true)) == false) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "vipLevelId", array()) == 0)))) {
            // line 2
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该课程为限制课程"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请联系客服"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "  ";
            if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") || ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array()) != "published"))) {
                // line 5
                echo "    课程还未发布，不允许加入和购买
  ";
            } else {
                // line 7
                echo "    ";
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()) < twig_date_format_filter($this->env, "now", "U")))) {
                    // line 8
                    echo "      超过加入截止日期，不允许加入和购买
    ";
                } elseif ((twig_in_filter($this->getAttribute(                // line 9
(isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), array(0 => "end_date", 1 => "date")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()) < twig_date_format_filter($this->env, "now", "U")))) {
                    // line 10
                    echo "      超过学习截止日期，不允许加入和购买
    ";
                } else {
                    // line 12
                    echo "      ";
                    echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.purchase.extension", array("course" => (isset($context["course"]) ? $context["course"] : null)));
                    echo "
      ";
                    // line 14
                    echo "      ";
                    if (twig_trim_filter($this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.buy-btn.extension", array("course" => (isset($context["course"]) ? $context["course"] : null))))) {
                        // line 15
                        echo "        ";
                        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.buy-btn.extension", array("course" => (isset($context["course"]) ? $context["course"] : null)));
                        echo "
      ";
                    } else {
                        // line 17
                        echo "        ";
                        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), true)) : (true))) {
                            // line 18
                            echo "          <a class=\"btn btn-primary btn-lg ";
                            if (((array_key_exists("previewAs", $context)) ? (_twig_default_filter((isset($context["previewAs"]) ? $context["previewAs"] : null))) : (""))) {
                                echo "disabled";
                            }
                            echo "\"
            ";
                            // line 19
                            if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isBuyCourseFromModal($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))) {
                                // line 20
                                echo "              href=\"#modal\"
              data-toggle=\"modal\"
              data-url=\"";
                                // line 22
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                                echo "\"
            ";
                            } else {
                                // line 24
                                echo "              href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                                echo "\"
            ";
                            }
                            // line 26
                            echo "          >
            ";
                            // line 27
                            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                                // line 28
                                echo "              ";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买课程"), "html", null, true);
                                echo "
            ";
                            } else {
                                // line 30
                                echo "              ";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入学习"), "html", null, true);
                                echo "
            ";
                            }
                            // line 32
                            echo "          </a>
        ";
                        }
                        // line 34
                        echo "      ";
                    }
                    // line 35
                    echo "
    ";
                }
                // line 37
                echo "  ";
            }
            // line 38
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "course/header/header-for-guest-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  117 => 37,  113 => 35,  110 => 34,  106 => 32,  100 => 30,  94 => 28,  92 => 27,  89 => 26,  83 => 24,  78 => 22,  74 => 20,  72 => 19,  65 => 18,  62 => 17,  56 => 15,  53 => 14,  48 => 12,  44 => 10,  42 => 9,  39 => 8,  36 => 7,  32 => 5,  29 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-guest-buy-btn.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\header\\header-for-guest-buy-btn.html.twig");
    }
}
