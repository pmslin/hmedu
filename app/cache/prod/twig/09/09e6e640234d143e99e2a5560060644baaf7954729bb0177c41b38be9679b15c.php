<?php

/* course/header/header-for-price.html.twig */
class __TwigTemplate_18a9fa0d743dbc77c7fb15bee3abb40e77946f3c6af59dee746a588459275fbd extends Twig_Template
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
        $context["coinSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin");
        // line 2
        echo "<span class=\"course-detail-title\">价格</span>

";
        // line 4
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) == 0) && ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "discountId", array()) <= 0))) {
            // line 5
            echo "  <span class=\"gray-darker mrm vertical-middle inline-block\"><b class=\"pirce-num\">免费</b></span>
";
        } else {
            // line 7
            echo "\t";
            if (((($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_enabled", array()), false)) : (false)) && ($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "price_type", array()) == "Coin"))) {
                // line 8
                echo "\t\t<span class=\"gray-darker mrm\"><b class=\"pirce-num\">";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) * $this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "cash_rate", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币"))), "html", null, true);
                echo "</b></span>
\t\t";
                // line 9
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) < $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()))) {
                    // line 10
                    echo "\t\t\t<span class=\"original-price\"><span class=\"price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()) * $this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "cash_rate", array())), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币"))), "html", null, true);
                    echo "</span></span>
\t\t\t";
                    // line 11
                    if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "discount", array()) != 0)) {
                        // line 12
                        echo "\t\t\t\t<span class=\"tag-discount \">
\t\t\t\t\t<span class=\"discount-font\">
\t\t\t\t\t\t";
                        // line 14
                        echo twig_escape_filter($this->env, sprintf("%d", $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "discount", array())), "html", null, true);
                        echo "折
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t";
                    }
                    // line 18
                    echo "\t\t";
                }
                // line 19
                echo "\t";
            } else {
                // line 20
                echo "\t\t<span class=\"gray-darker mrm\">¥<b class=\"pirce-num\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                echo "</b></span>
\t\t";
                // line 21
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) < $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()))) {
                    // line 22
                    echo "\t\t\t<span class=\"original-price\">¥<span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                    echo "</span></span>
\t\t\t";
                    // line 23
                    if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "discount", array()) != 0)) {
                        // line 24
                        echo "\t\t\t\t<span class=\"tag-discount \">
\t\t\t\t\t<span class=\"discount-font\">
\t\t\t\t\t\t";
                        // line 26
                        echo twig_escape_filter($this->env, sprintf("%d", $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "discount", array())), "html", null, true);
                        echo "折
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t";
                    }
                    // line 30
                    echo "\t\t";
                }
                // line 31
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "course/header/header-for-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  94 => 30,  87 => 26,  83 => 24,  81 => 23,  76 => 22,  74 => 21,  69 => 20,  66 => 19,  63 => 18,  56 => 14,  52 => 12,  50 => 11,  43 => 10,  41 => 9,  34 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-price.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\header\\header-for-price.html.twig");
    }
}
