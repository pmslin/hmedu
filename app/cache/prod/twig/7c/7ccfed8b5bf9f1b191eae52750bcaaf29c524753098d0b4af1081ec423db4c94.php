<?php

/* task/preview.html.twig */
class __TwigTemplate_9eb99f8ca6463c708d77fd3c5e86d09bcd994d78481743d0e4e0908e735463fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "task/preview.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["modal_class"] = "modal-lg";
        // line 8
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/task/preview/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "<span class=\"color-gray\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务预览"), "html", null, true);
        echo ":</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        $context["eventReportParams"] = array("user-id" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)));
        // line 12
        echo "  ";
        $this->loadTemplate("event_report.html.twig", "task/preview.html.twig", 12)->display(array_merge($context, array("eventName" => "course.preview", "subjectType" => "course", "subjectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "eventReportParams" => (isset($context["eventReportParams"]) ? $context["eventReportParams"] : null), "eventId" => "modal-event-report")));
        // line 13
        echo "  <iframe src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_content_preview", array("courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\" id=\"viewerIframe\" width=\"100%\" allowfullscreen=\"\" webkitallowfullscreen=\"\" height=\"400px\" style=\"border:0px\"></iframe>
";
    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        // line 17
        echo "  <span class=\"es-qrcode bottom mrl\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_qrcode", array("courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\">
    <i class=\"es-icon es-icon-qrcode\"></i>
    <span class=\"qrcode-popover\">
      <img src=\"\" alt=\"\">
      ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("扫二维码继续学习"), "html", null, true);
        echo "
      ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("二维码时效为半小时"), "html", null, true);
        echo "
    </span>
  </span>
  ";
        // line 25
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array())) {
            // line 26
            echo "    ";
            if ((($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "status", array()) == "published") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == "0"))) {
                // line 27
                echo "
      ";
                // line 28
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) == "0.00")) {
                    // line 29
                    echo "        <a id=\"js-buy-btn\" type=\"button\" class=\"btn btn-primary js-buy-btn\"
            ";
                    // line 30
                    if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.buy_fill_userinfo"), false) || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved")))) {
                        // line 31
                        echo "              href=\"#login-modal\"
              data-toggle=\"modal\"
              data-url=\"";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
            ";
                    } else {
                        // line 35
                        echo "              href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
            ";
                    }
                    // line 37
                    echo "
        >
          ";
                    // line 39
                    if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), null)) : (null))) {
                        // line 40
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费加入学习"), "html", null, true);
                        echo "
          ";
                    } else {
                        // line 42
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录后加入学习"), "html", null, true);
                        echo "
          ";
                    }
                    // line 44
                    echo "        </a>
      ";
                } else {
                    // line 46
                    echo "        <a id=\"js-buy-btn\" type=\"button\" class=\"btn btn-primary js-buy-btn\"
            ";
                    // line 47
                    if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.buy_fill_userinfo"), false) || (((array_key_exists("vipStatus", $context)) ? (_twig_default_filter((isset($context["vipStatus"]) ? $context["vipStatus"] : null), null)) : (null)) == "ok")) || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved")))) {
                        // line 48
                        echo "              href=\"#login-modal\"
              data-toggle=\"modal\"
              data-url=\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
            ";
                    } else {
                        // line 52
                        echo "              href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
            ";
                    }
                    // line 54
                    echo "        >
          ";
                    // line 55
                    if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), null)) : (null))) {
                        // line 56
                        echo "            ";
                        if ((((array_key_exists("vipStatus", $context)) ? (_twig_default_filter((isset($context["vipStatus"]) ? $context["vipStatus"] : null), null)) : (null)) == "ok")) {
                            // line 57
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("觉得不错？点击加入此课程"), "html", null, true);
                            echo "
            ";
                        } else {
                            // line 59
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("觉得不错？点击购买此课程"), "html", null, true);
                            echo "（";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()))), "html", null, true);
                            echo "）
            ";
                        }
                        // line 61
                        echo "          ";
                    } else {
                        // line 62
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录后购买学习完整的课程"), "html", null, true);
                        echo "
          ";
                    }
                    // line 64
                    echo "        </a>
      ";
                }
                // line 66
                echo "    ";
            }
            // line 67
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "task/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 67,  188 => 66,  184 => 64,  178 => 62,  175 => 61,  167 => 59,  161 => 57,  158 => 56,  156 => 55,  153 => 54,  147 => 52,  142 => 50,  138 => 48,  136 => 47,  133 => 46,  129 => 44,  123 => 42,  117 => 40,  115 => 39,  111 => 37,  105 => 35,  100 => 33,  96 => 31,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  83 => 26,  81 => 25,  75 => 22,  71 => 21,  63 => 17,  60 => 16,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  35 => 6,  31 => 1,  29 => 8,  27 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/preview.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task\\preview.html.twig");
    }
}
