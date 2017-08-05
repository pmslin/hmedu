<?php

/* testpaper/testpaper-layout.html.twig */
class __TwigTemplate_625b69af0866083b20d0a62e04ce559cf002bf7df00542b84184fa7d056a420c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "testpaper/testpaper-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'paper_content' => array($this, 'block_paper_content'),
            'paper_header' => array($this, 'block_paper_header'),
            'paper_description' => array($this, 'block_paper_description'),
            'paper_result_bar' => array($this, 'block_paper_result_bar'),
            'paper_warning' => array($this, 'block_paper_warning'),
            'paper_question_type_bar' => array($this, 'block_paper_question_type_bar'),
            'paper_body' => array($this, 'block_paper_body'),
            'paper_sidebar' => array($this, 'block_paper_sidebar'),
            'testpaper_finished_dialog' => array($this, 'block_testpaper_finished_dialog'),
            'finish_dialog_btn' => array($this, 'block_finish_dialog_btn'),
            'timeout_dialog' => array($this, 'block_timeout_dialog'),
            'testpaper_checked_dialog' => array($this, 'block_testpaper_checked_dialog'),
            'time_pause_dialog' => array($this, 'block_time_pause_dialog'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        if (((array_key_exists("isIframeBody", $context)) ? (_twig_default_filter((isset($context["isIframeBody"]) ? $context["isIframeBody"] : null), 1)) : (1))) {
            // line 5
            $context["bodyClass"] = "task-testpaper-body-iframe js-task-testpaper-body js-task-testpaper-body-iframe";
            // line 6
            $context["testpaperCardClass"] = "js-testpaper-card affix mt20";
            // line 7
            $context["testpaperBodyClass"] = "mt20";
        } else {
            // line 9
            $context["bodyClass"] = "js-task-testpaper-body";
            // line 10
            $context["containerClass"] = "mt20";
            // line 11
            $context["testpaperCardClass"] = "js-testpaper-card";
        }
        // line 14
        $context["isDone"] = ((array_key_exists("isDone", $context)) ? (_twig_default_filter((isset($context["isDone"]) ? $context["isDone"] : null), false)) : (false));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if (((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "paperName", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "name", array()), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "  
  ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "
  ";
        // line 22
        if ((isset($context["isDone"]) ? $context["isDone"] : null)) {
            // line 23
            echo "    <div class=\"iframe-parent-content\">
  ";
        }
        // line 25
        echo "
    <div class=\"container ";
        // line 26
        echo twig_escape_filter($this->env, ((array_key_exists("containerClass", $context)) ? (_twig_default_filter((isset($context["containerClass"]) ? $context["containerClass"] : null), "")) : ("")), "html", null, true);
        echo "\">
      ";
        // line 27
        $this->displayBlock('paper_content', $context, $blocks);
        // line 74
        echo "      ";
        $this->displayBlock('testpaper_finished_dialog', $context, $blocks);
        // line 100
        echo "      ";
        $this->displayBlock('timeout_dialog', $context, $blocks);
        // line 126
        echo "      ";
        $this->displayBlock('testpaper_checked_dialog', $context, $blocks);
        // line 127
        echo "      ";
        $this->displayBlock('time_pause_dialog', $context, $blocks);
        // line 148
        echo "    </div>

  ";
        // line 150
        if ((isset($context["isDone"]) ? $context["isDone"] : null)) {
            // line 151
            echo "    </div>
  ";
        }
        // line 153
        echo "
  ";
        // line 154
        $this->displayBlock('footer', $context, $blocks);
        // line 157
        echo "
  ";
        // line 158
        if ((((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)) > 0) && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "doing"))) {
            // line 159
            echo "    <input type=\"hidden\" name=\"testSuspend\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_do_suspend", array("resultId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()))), "html", null, true);
            echo "\" />
  ";
        }
        // line 161
        echo "  ";
        if ( !(($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0))) {
            // line 162
            echo "    <input type=\"hidden\" name=\"preview\" value=\"1\" />
  ";
        }
        // line 164
        echo "  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (((array_key_exists("showHeader", $context)) ? (_twig_default_filter((isset($context["showHeader"]) ? $context["showHeader"] : null), 1)) : (1))) {
            $this->displayParentBlock("header", $context, $blocks);
        }
        // line 20
        echo "  ";
    }

    // line 27
    public function block_paper_content($context, array $blocks = array())
    {
        // line 28
        echo "        <div class=\"row\">
          <div class=\"col-md-9 prevent-copy\">
            <div class=\"testpaper-body js-testpaper-body ";
        // line 30
        echo twig_escape_filter($this->env, ((array_key_exists("testpaperBodyClass", $context)) ? (_twig_default_filter((isset($context["testpaperBodyClass"]) ? $context["testpaperBodyClass"] : null), "")) : ("")), "html", null, true);
        echo " \" data-copy=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.testpaperCopy_enabled", 0), "html", null, true);
        echo "\">
              ";
        // line 31
        $this->displayBlock('paper_header', $context, $blocks);
        // line 63
        echo "
              ";
        // line 64
        $this->displayBlock('paper_body', $context, $blocks);
        // line 67
        echo "            </div>
          </div>
          <div class=\"col-md-3\">
            ";
        // line 70
        $this->displayBlock('paper_sidebar', $context, $blocks);
        // line 71
        echo "          </div>
        </div>
      ";
    }

    // line 31
    public function block_paper_header($context, array $blocks = array())
    {
        // line 32
        echo "                <div class=\"es-section testpaper-heading js-testpaper-heading\">
                  <div class=\"testpaper-titlebar clearfix\">
                    <h1 class=\"testpaper-title\">
                      ";
        // line 35
        if (((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "paperName", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "name", array()), "html", null, true);
        }
        echo " <br>
                      <small class=\"text-sm\">
                        ";
        // line 37
        if (twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), "doing")) : ("doing")), array(0 => "reviewing", 1 => "finished"))) {
            // line 38
            echo "                          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答题人："), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "nickname", array()), "html", null, true);
            echo " 
                          ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("交卷时间："), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "endTime", array()), "Y-n-d H:i"), "html", null, true);
            echo " 
                          ";
            // line 40
            if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "beginTime", array()) != $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array()))) {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用时："), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->durationTextFilter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array())), "html", null, true);
                echo "
                          ";
            }
            // line 43
            echo "                        ";
        }
        // line 44
        echo "                      </small>
                    </h1>
                    <div class=\"testpaper-status\">
                      ";
        // line 47
        if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), "doing")) : ("doing")) == "doing")) {
            // line 48
            echo "                        <div class=\"label label-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答题中"), "html", null, true);
            echo "</div>
                      ";
        } elseif (((($this->getAttribute(        // line 49
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), "doing")) : ("doing")) == "reviewing")) {
            // line 50
            echo "                        <div class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批阅中"), "html", null, true);
            echo "</div>
                      ";
        } else {
            // line 52
            echo "                        <div class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批阅完成"), "html", null, true);
            echo "</div>
                      ";
        }
        // line 54
        echo "                    </div>
                  </div>

                  ";
        // line 57
        $this->displayBlock('paper_description', $context, $blocks);
        // line 58
        echo "                  ";
        $this->displayBlock('paper_result_bar', $context, $blocks);
        // line 59
        echo "                  ";
        $this->displayBlock('paper_warning', $context, $blocks);
        // line 60
        echo "                  ";
        $this->displayBlock('paper_question_type_bar', $context, $blocks);
        // line 61
        echo "                </div>
              ";
    }

    // line 57
    public function block_paper_description($context, array $blocks = array())
    {
    }

    // line 58
    public function block_paper_result_bar($context, array $blocks = array())
    {
    }

    // line 59
    public function block_paper_warning($context, array $blocks = array())
    {
    }

    // line 60
    public function block_paper_question_type_bar($context, array $blocks = array())
    {
    }

    // line 64
    public function block_paper_body($context, array $blocks = array())
    {
        // line 65
        echo "                ";
        $this->loadTemplate("testpaper/do-test.html.twig", "testpaper/testpaper-layout.html.twig", 65)->display($context);
        // line 66
        echo "              ";
    }

    // line 70
    public function block_paper_sidebar($context, array $blocks = array())
    {
    }

    // line 74
    public function block_testpaper_finished_dialog($context, array $blocks = array())
    {
        // line 75
        echo "        <div id=\"testpaper-finished-dialog\" class=\"modal in\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-body task-state-modal\">
                <div class=\"title font-blod\">
                  <i class=\"es-icon es-icon-zanting1 color-warning\"></i>
                  ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确认交卷"), "html", null, true);
        echo "
                </div>
                <div class=\"content\">
                  <div class=\"text-16\">
                    ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您真的要交卷吗？"), "html", null, true);
        echo "
                  </div>
                </div>
                <div class=\"text-right mt20\">
                  <a href=\"javascript:;\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</a>
                  ";
        // line 90
        $this->displayBlock('finish_dialog_btn', $context, $blocks);
        // line 94
        echo "                </div>
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 90
    public function block_finish_dialog_btn($context, array $blocks = array())
    {
        // line 91
        echo "                    <button class=\"btn btn-primary\" id=\"testpaper-finish-btn\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在交卷, 请稍等"), "html", null, true);
        echo "...\" data-role=\"paper-submit\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_finish", array("resultId" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\" data-goto=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_result_show", array("resultId" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\">
                    ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确认交卷"), "html", null, true);
        echo "</button>
                  ";
    }

    // line 100
    public function block_timeout_dialog($context, array $blocks = array())
    {
        // line 101
        echo "        <div id=\"time-finish-dialog\" class=\"modal fade\" data-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-body task-state-modal\">
                <div class=\"title font-blod\">
                  <i class=\"es-icon es-icon-zanting1 color-warning\"></i>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("考试结束"), "html", null, true);
        echo "
                </div>
                <div class=\"content\">
                  <div class=\"text-16\">
                    ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("考试已结束，您的试卷已提交，请点击下面的按钮查看结果！"), "html", null, true);
        echo "
                  </div>
                </div>
                <div class=\"text-right mt20\">
                  ";
        // line 114
        if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)) > 0)) {
            // line 115
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_result_show", array("resultId" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)))), "html", null, true);
            echo "\" class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看结果"), "html", null, true);
            echo "</a>
                  ";
        } else {
            // line 117
            echo "                    <a href=\"javascript:;\" class=\"btn btn-info\" disabled=\"disabled\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看结果"), "html", null, true);
            echo "</a>
                  ";
        }
        // line 119
        echo "                  
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 126
    public function block_testpaper_checked_dialog($context, array $blocks = array())
    {
    }

    // line 127
    public function block_time_pause_dialog($context, array $blocks = array())
    {
        // line 128
        echo "        <div id=\"time-pause-dialog\" class=\"modal fade\" data-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-body task-state-modal\">
                <div class=\"title font-blod\">
                  <i class=\"es-icon es-icon-zanting1 color-warning\"></i>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂停"), "html", null, true);
        echo "
                </div>
                <div class=\"content\">
                  <div class=\"text-16\">
                    ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("考试已暂停，请尽快回来哦！"), "html", null, true);
        echo "
                  </div>
                </div>
                <div class=\"text-right mt20\">
                  <a class=\"btn btn-primary js-btn-resume\" href=\"javascript:;\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("继续考试"), "html", null, true);
        echo "</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        if (((array_key_exists("showHeader", $context)) ? (_twig_default_filter((isset($context["showHeader"]) ? $context["showHeader"] : null), 1)) : (1))) {
            $this->displayParentBlock("footer", $context, $blocks);
        }
        // line 156
        echo "  ";
    }

    public function getTemplateName()
    {
        return "testpaper/testpaper-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 156,  475 => 155,  472 => 154,  461 => 141,  454 => 137,  447 => 133,  440 => 128,  437 => 127,  432 => 126,  422 => 119,  416 => 117,  408 => 115,  406 => 114,  399 => 110,  392 => 106,  385 => 101,  382 => 100,  376 => 92,  367 => 91,  364 => 90,  355 => 94,  353 => 90,  349 => 89,  342 => 85,  335 => 81,  327 => 75,  324 => 74,  319 => 70,  315 => 66,  312 => 65,  309 => 64,  304 => 60,  299 => 59,  294 => 58,  289 => 57,  284 => 61,  281 => 60,  278 => 59,  275 => 58,  273 => 57,  268 => 54,  262 => 52,  256 => 50,  254 => 49,  249 => 48,  247 => 47,  242 => 44,  239 => 43,  232 => 41,  230 => 40,  225 => 39,  219 => 38,  217 => 37,  208 => 35,  203 => 32,  200 => 31,  194 => 71,  192 => 70,  187 => 67,  185 => 64,  182 => 63,  180 => 31,  174 => 30,  170 => 28,  167 => 27,  163 => 20,  158 => 19,  155 => 18,  146 => 164,  142 => 162,  139 => 161,  133 => 159,  131 => 158,  128 => 157,  126 => 154,  123 => 153,  119 => 151,  117 => 150,  113 => 148,  110 => 127,  107 => 126,  104 => 100,  101 => 74,  99 => 27,  95 => 26,  92 => 25,  88 => 23,  86 => 22,  83 => 21,  81 => 18,  78 => 17,  75 => 16,  63 => 2,  59 => 1,  57 => 14,  54 => 11,  52 => 10,  50 => 9,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/testpaper-layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\testpaper-layout.html.twig");
    }
}
