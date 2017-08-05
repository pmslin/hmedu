<?php

/* activity/testpaper/modal.html.twig */
class __TwigTemplate_7e5b01d96a9122e6ad24341f94389d87ce8880d70b3166f42acc5e0202eaf9c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-form-layout.html.twig", "activity/testpaper/modal.html.twig", 1);
        $this->blocks = array(
            'activity_content' => array($this, 'block_activity_content'),
            'activity_finish' => array($this, 'block_activity_finish'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/activity-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/bootstrap-datetimepicker.js", 1 => "libs/jquery-nouislider.js", 2 => "app/js/activity-manage/testpaper/index.js"), 300);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_activity_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\">
      <label for=\"testpaper-media\" class=\"control-label-required\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-10 controls\">
      <select id=\"testpaper-media\" class=\"form-control\" name=\"mediaId\"  data-get-testpaper-items=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()))), "html", null, true);
        echo "\">
      
        <option value=\"\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请选择试卷"), "html", null, true);
        echo "</option>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testpapers"]) ? $context["testpapers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["testpaper"]) {
            if ($context["testpaper"]) {
                // line 15
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testpaper"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["testpaper"], "id", array()) == (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "testpaperMediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "testpaperMediaId", array()), "")) : ("")))) {
                    echo "selected";
                }
                echo " data-score=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testpaper"], "score", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testpaper"], "name", array()), "html", null, true);
                echo "</option>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testpaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </select>
      ";
        // line 18
        if (twig_test_empty((isset($context["testpapers"]) ? $context["testpapers"] : null))) {
            // line 19
            echo "        <div class=\"help-block color-danger\">还没有试卷，请先去<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()))), "html", null, true);
            echo "\" target=\"_parent\">创建</a></div>
      ";
        } else {
            // line 21
            echo "        <div class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如果找不到试卷，请先确定该试卷已经发布"), "html", null, true);
            echo "</div>
      ";
        }
        // line 23
        echo "    </div>
  </div>

  <div class=\"form-group\" id=\"questionItemShowDiv\" style=\"display:none;\">
    <div class=\"col-sm-2 control-label\"></div>
    <div class=\"col-sm-10 controls\" id=\"questionItemShowTable\"></div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\"><label for=\"length\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("考试时长"), "html", null, true);
        echo "</label></div>
    <div class=\"col-sm-10 controls radios\">
      <input id=\"length\" class=\"form-control inline-block width-150\" type=\"text\" name=\"length\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "length", array()), 0)) : (0)), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
        echo "
      <div class=\"help-block\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("0分钟，表示无限制。"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\"><label>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("考试次数"), "html", null, true);
        echo "</label></div>
    <div class=\"col-sm-10 controls radios\">
      ";
        // line 42
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("doTimes", array("0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不限"), "1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("单次")), (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "doTimes", array()), "normal")) : ("normal")));
        echo "
    </div>
  </div>

  <div class=\"form-group\" ";
        // line 46
        if (((($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "doTimes", array()), "0")) : ("0")) == 1)) {
            echo "style=\"display:none;\" ";
        }
        echo ">
    <div class=\"col-sm-2 control-label\"><label for=\"lesson-redo-interval-field\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重考间隔"), "html", null, true);
        echo "</label></div>
    <div class=\"col-sm-10 controls\">
      <input id=\"lesson-redo-interval-field\" class=\"form-control inline-block width-150\" type=\"text\" name=\"redoInterval\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "redoInterval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "redoInterval", array()), "0")) : ("0")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("小时"), "html", null, true);
        echo "
      <i class=\"es-icon es-icon-help color-gray\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重考时间间隔：完成批阅后开始计时，计时结束后才可再次考试。"), "html", null, true);
        echo "\"></i>
      <div class=\"help-block\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("0小时，表示无限制。"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"form-group starttime-check-div\" ";
        // line 55
        if (((($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "doTimes", array()), "0")) : ("0")) == 0)) {
            echo "style=\"display:none;\" ";
        }
        echo ">
    <div class=\"col-sm-2 control-label\">
      <label for=\"startTime\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("考试开始时间"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-10 controls radios\">
      ";
        // line 60
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("testMode", array("normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不限"), "realTime" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("指定")), (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "testMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "testMode", array()), "normal")) : ("normal")));
        echo "
    </div>
    <div class=\"col-sm-10 mtm starttime-input pull-right ";
        // line 62
        if (((($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "testMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "testMode", array()), "normal")) : ("normal")) == "normal")) {
            echo " hidden ";
        }
        echo "\">
    <input class=\"form-control width-input width-input-large mr0\" id=\"startTime\" type=\"text\" name=\"startTime\" value=\"";
        // line 63
        if ((((array_key_exists("activity", $context)) ? (_twig_default_filter((isset($context["activity"]) ? $context["activity"] : null), null)) : (null)) && ($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "startTime", array()) != 0))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "startTime", array()), "Y-m-d H:i"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\" >
      ";
        // line 67
        echo "    </div>
  </div>

  ";
        // line 70
        if (twig_in_filter("lesson_credit", (isset($context["features"]) ? $context["features"] : null))) {
            // line 71
            echo "    <div class=\"form-group\">
      <div class=\"col-sm-2 control-label\"><label for=\"lesson-title-field\">";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("限制学分"), "html", null, true);
            echo "</label></div>
      <div class=\"col-sm-10 controls\">
        <input class=\"form-control widt-input width-150\" type=\"text\" name=\"requireCredit\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()), 0)) : (0)), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
            echo "
        <div class=\"help-block\">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("参加此次考试所需的学分，０分则不限制。"), "html", null, true);
            echo "</div>
      </div>
    </div>
  ";
        }
        // line 79
        echo "
";
    }

    // line 82
    public function block_activity_finish($context, array $blocks = array())
    {
        // line 83
        echo "  ";
        // line 93
        echo "  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\">
      <label for=\"condition-select\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成条件"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-xs-4 controls\">
      <select class=\"form-control\" id=\"condition-select\" name=\"condition\">
        ";
        // line 99
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("score" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分数达标"), "submit" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交答卷")), (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "array"), "score")) : ("score")));
        echo "
      </select>
      <input type=\"hidden\" name=\"finishScore\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "finishScore", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "finishScore", array(), "array"), "0")) : ("0")), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"mediaType\" value=\"testpaper\" />
    </div>
  </div>

  <div class=\"form-group js-score-form-group ";
        // line 106
        if (((($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "finishCondition", array(), "any", false, true), "type", array()), null)) : (null)) == "submit")) {
            echo "hidden";
        }
        echo "\">
    <div class=\"col-sm-offset-2 col-sm-8 color-gray\">
      <span>0</span>
      <div class=\"js-slider-content inline-block vertical-middle mlm mrl\" id=\"score-slider\">
      </div>
      <span class=\"js-score-total\"></span>分
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "activity/testpaper/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 106,  250 => 101,  245 => 99,  238 => 95,  234 => 93,  232 => 83,  229 => 82,  224 => 79,  217 => 75,  211 => 74,  206 => 72,  203 => 71,  201 => 70,  196 => 67,  188 => 63,  182 => 62,  177 => 60,  171 => 57,  164 => 55,  157 => 51,  153 => 50,  147 => 49,  142 => 47,  136 => 46,  129 => 42,  124 => 40,  116 => 35,  110 => 34,  105 => 32,  94 => 23,  88 => 21,  82 => 19,  80 => 18,  77 => 17,  59 => 15,  54 => 14,  50 => 13,  45 => 11,  39 => 8,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/testpaper/modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\testpaper\\modal.html.twig");
    }
}
