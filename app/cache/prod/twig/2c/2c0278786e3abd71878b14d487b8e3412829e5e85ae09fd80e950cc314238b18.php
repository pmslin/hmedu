<?php

/* course-manage/marketing.html.twig */
class __TwigTemplate_b868780fa249ab3840fa19927e5c49f5d8bdb44a900e0344d042d23aa1671099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'course' => array($this, 'block_course'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/marketing.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["side_nav"] = "marketing";
        // line 10
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/perfect-scrollbar.js", 2 => "libs/bootstrap-datetimepicker.js", 3 => "app/js/course-manage/marketing/index.js"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("营销设置"), "html", null, true);
        echo "
  -
  ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "
  -
  ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "  <div class=\"panel panel-default\">
    ";
        // line 15
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/marketing.html.twig", 15)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null))));
        // line 16
        echo "    <div class=\"panel-body\">
      ";
        // line 17
        if (((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array())) || twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) || (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array())) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_manage_marketing", 0) == 1)))) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
        <form id=\"course-marketing-form\" class=\"form-horizontal\"
              action=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_marketing", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
              method=\"post\">

          <div class=\"es-piece\">
            <div class=\"piece-header\">加入设置</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("可加入"), "html", null, true);
            echo "<a class=\"es-icon es-icon-help text-normal link-gray\" data-container=\"body\"
                                    data-toggle=\"popover\" data-trigger=\"hover\"
                                    data-placement=\"top\"
                                    data-content=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭后，前台显示为“限制课程”，学员自己无法加入，需要由老师手动添加学员。常用于封闭型教学。"), "html", null, true);
            echo "\"></a>
              </label>
              <div class=\"col-sm-8 radios\">
                ";
            // line 33
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("buyable", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)));
            echo "
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"col-sm-2 control-label\">
                <label class=\"control-label-required\" for=\"course_price\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格"), "html", null, true);
            echo "</label>
              </div>
              <div class=\"col-sm-8 radios\">
                ";
            // line 41
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("isFree", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收费")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "isFree", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "isFree", array()), 0)) : (0)));
            echo "
              </div>
            </div>
            <div class=\"form-group js-is-free ";
            // line 44
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "isFree", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "isFree", array()), 0)) : (0)) == 1)) {
                echo "hidden";
            }
            echo "\"
                 data-role=\"tab-content\">
              <div class=\"col-sm-8 col-sm-offset-2\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
                <input class=\"form-control width-150 mrs\" id=\"course_price\" type=\"text\" name=\"originPrice\"
                       value=\"";
            // line 49
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), 0)) : (0)), "html", null, true);
            echo "\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
            echo "
                <span
                  class=\"js-course-add-close-show ";
            // line 52
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)) == 1)) {
                echo " hidden ";
            }
            echo " \">仅作展示用</span>
              </div>
            </div>
            ";
            // line 55
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.marketing.setting", array("course" => (isset($context["course"]) ? $context["course"] : null)));
            echo "

            <div class=\"js-course-add-open-show ";
            // line 57
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)) == 0)) {
                echo " hidden ";
            }
            echo "\">
              <div class=\"form-group \">
                <div class=\"col-sm-2 control-label\">
                  <label class=\"control-label-required\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入截止日期"), "html", null, true);
            echo "</label>
                </div>
                <div class=\"col-sm-8 radios\">
                  ";
            // line 63
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("enableBuyExpiryTime", array("1" => "自定义", "0" => "不限时间"), ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()), 0)) : (0)) > 0)) ? (1) : (0)));
            echo "
                </div>
              </div>
              <div class=\"form-group ";
            // line 66
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()) == 0)) {
                echo "hidden";
            }
            echo " \" id=\"buyExpiryTime\">
                <div class=\"col-sm-8 col-sm-offset-2\">
                  <input type=\"text\" class=\"form-control width-150 mr10\" name=\"buyExpiryTime\"
                         value=\"";
            // line 69
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->dateformatFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()), "Y-m-d"), "html", null, true);
            }
            echo "\">
                  在此日期前，学员可加入。
                </div>
              </div>
              ";
            // line 74
            echo "              ";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.buy_before_approval")) {
                // line 75
                echo "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">
                    ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("实名认证"), "html", null, true);
                echo "
                    <a class=\"es-icon es-icon-help text-normal link-gray\"
                       data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\"
                       data-placement=\"top\" data-content=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置该值后，学员购买课程前，必须先去申请实名认证。"), "html", null, true);
                echo "\"></a></label>
                  <div class=\"col-sm-8 radios\">
                    ";
                // line 82
                echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("approval", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()), 0)) : (0)));
                echo "
                  </div>
                </div>
              ";
            }
            // line 86
            echo "            </div>
          </div>
          <hr class=\"mb30  bg-border-color\">

          ";
            // line 91
            echo "          ";
            // line 112
            echo "
          <div class=\"es-piece\">
            <div class=\"piece-header\">学习规则</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">
                ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习有效期"), "html", null, true);
            echo "
                <a class=\"es-icon es-icon-help ml5 link-gray text-normal\" data-trigger=\"hover\" data-toggle=\"popover\"
                   data-container=\"body\" data-placement=\"top\"
                   data-content=\"<ul class='pl10 ul-list-none'>
                  <li class='mb10'>";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("<b>随到随学：</b>有效期从学员加入的当天开始算起，截至到期当天的晚上24点整"), "html", null, true);
            echo "</li>
                  <li class='mb10'>";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("<b>固定周期：</b>有固定的学习开始日期和结束日期"), "html", null, true);
            echo "</li>
                  <li>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("过期后无法继续学习，系统会在到期前10天提醒学员。"), "html", null, true);
            echo "</li>
                </ul>\">
                </a>
              </label>
              <div class=\"col-sm-8 radios\">
                ";
            // line 128
            $context["coursePublished"] = ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()), "draft")) : ("draft")) == "published");
            // line 129
            echo "                ";
            $context["courseClosed"] = ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()), "draft")) : ("draft")) == "closed");
            // line 130
            echo "                ";
            $context["courseSetPublished"] = ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array()), "draft")) : ("draft")) == "published");
            // line 131
            echo "                ";
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("expiryMode", array("days" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("随到随学"), "date" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("固定周期"), "forever" => "永久有效"), (($this->getAttribute(            // line 133
(isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")), ((((isset($context["coursePublished"]) ? $context["coursePublished"] : null) || (isset($context["courseClosed"]) ? $context["courseClosed"] : null))) ? ("disabled") : ("")));
            // line 134
            echo "
                ";
            // line 135
            if (((isset($context["coursePublished"]) ? $context["coursePublished"] : null) || (isset($context["courseClosed"]) ? $context["courseClosed"] : null))) {
                echo "<input type=\"hidden\" name=\"expiryMode\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")), "html", null, true);
                echo "\">";
            }
            // line 136
            echo "                ";
            // line 137
            echo "                <div
                  class=\"mb20 mt20 ";
            // line 138
            if (twig_in_filter((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")), array(0 => "date", 1 => "forever"))) {
                echo "hidden";
            }
            echo "\"
                  id=\"expiry-days\">
                  ";
            // line 140
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("deadlineType", array("end_date" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("按截止日期"), "days" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("按有效天数")), (($this->getAttribute(            // line 143
(isset($context["course"]) ? $context["course"] : null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array()), "days")) : ("days")), ((((isset($context["coursePublished"]) ? $context["coursePublished"] : null) || (isset($context["courseClosed"]) ? $context["courseClosed"] : null))) ? ("disabled") : ("")));
            // line 144
            echo "
                  ";
            // line 145
            if (((isset($context["coursePublished"]) ? $context["coursePublished"] : null) || (isset($context["courseClosed"]) ? $context["courseClosed"] : null))) {
                echo "<input type=\"hidden\" name=\"deadlineType\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array()), "days")) : ("days")), "html", null, true);
                echo "\">";
            }
            // line 146
            echo "                  <div class=\"mb20 mt20 ";
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array()), "days")) : ("days")) != "end_date")) {
                echo "hidden";
            }
            echo "\"
                       id=\"deadlineType-date\">
                    <input class=\"form-control width-150 mr10\" id=\"deadline\" name=\"deadline\"
                           value=\"";
            // line 149
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), 0)) : (0)) != 0)) {
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), 0)) : (0)), "html", null, true);
            }
            echo "\" ";
            if ((isset($context["courseSetPublished"]) ? $context["courseSetPublished"] : null)) {
                echo " disabled ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在此日期前，学员可进行学习。"), "html", null, true);
            echo "
                  </div>
                  <div class=\"mb20 mt20 ";
            // line 151
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array()), "days")) : ("days")) != "days")) {
                echo "hidden";
            }
            echo "\"
                       id=\"deadlineType-days\">
                    <input class=\"form-control mhs width-150\" type=\"text\" id=\"expiryDays\" name=\"expiryDays\"
                           value=\"";
            // line 154
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array()), 1)) : (1)), "html", null, true);
            echo "\" ";
            if ((isset($context["courseSetPublished"]) ? $context["courseSetPublished"] : null)) {
                echo " disabled ";
            }
            echo ">
                    ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从加入当天起，在几天内可进行学习。"), "html", null, true);
            echo "
                  </div>
                </div>
                ";
            // line 159
            echo "                <div
                  class=\"mb20 mt20 ";
            // line 160
            if (twig_in_filter((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")), array(0 => "days", 1 => "forever"))) {
                echo "hidden";
            }
            echo "\"
                  id=\"expiry-date\">
                  ";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开始日期"), "html", null, true);
            echo "
                  <input class=\"form-control mh10 width-150 \" id=\"expiryStartDate\" type=\"text\" name=\"expiryStartDate\"
                         value=\"";
            // line 164
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array()), 0)) : (0)) == 0)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array()), twig_date_format_filter($this->env, "now", "Y-m-d"))) : (twig_date_format_filter($this->env, "now", "Y-m-d"))), "html", null, true);
            }
            echo "\" ";
            if ((isset($context["courseSetPublished"]) ? $context["courseSetPublished"] : null)) {
                echo " disabled ";
            }
            echo ">
                  ";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束日期"), "html", null, true);
            echo "
                  <input class=\"form-control ml5 width-150 \" type=\"text\" id=\"expiryEndDate\" name=\"expiryEndDate\"
                         value=\"";
            // line 167
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), 0)) : (0)) != 0)) {
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), 0)) : (0)), "html", null, true);
            }
            echo "\" ";
            if ((isset($context["courseSetPublished"]) ? $context["courseSetPublished"] : null)) {
                echo " disabled  ";
            }
            echo " >
                </div>
                <div class=\"color-warning\">";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教学计划首次发布后“学习有效期”不能更改模式。要调整日期，请先关闭本课程。"), "html", null, true);
            echo "</div>
              </div>
            </div>
            ";
            // line 172
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.lesson_watch_limit")) {
                // line 173
                echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  ";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频观看时长限制"), "html", null, true);
                echo "
                </label>
                <div class=\"col-sm-8\">
                  <input class=\"form-control width-150 mrs\" type=\"text\" name=\"watchLimit\"
                         value=\"";
                // line 179
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()), 0)) : (0)), "html", null, true);
                echo "\">
                  ";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("倍总时长"), "html", null, true);
                echo "
                  <a class=\"es-icon es-icon-help text-normal link-gray\" data-container=\"body\"
                     data-toggle=\"popover\"
                     data-trigger=\"hover\"
                     data-placement=\"top\"
                     data-content=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("例：课程视频总时长为100分钟，设置为5倍，则学员总共可观看500分钟，超出时长将提示不能学习。0表示无限制。<br/>
                     对于手动上传的回放视频，可限制其观看时长。但对于直接录制、跳转到第三方直播平台回放的视频，无法限制。"), "html", null, true);
                // line 186
                echo "\">
                  </a>
                </div>
              </div>
            ";
            }
            // line 191
            echo "          </div>
          <hr class=\"mb30  bg-border-color\">

          ";
            // line 194
            if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) != "live")) {
                // line 195
                echo "            <div class=\"es-piece \">
              <div class=\"piece-header\">预览试看</div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置免费学习任务"), "html", null, true);
                echo "</label>
                <div class=\"col-sm-8\">
                  <ul class=\"list-group mb0 pb0 task-price-setting-group js-task-price-setting\">
                    ";
                // line 201
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["canFreeTasks"]) ? $context["canFreeTasks"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 202
                    echo "
                      <li class=\"list-group-item ";
                    // line 203
                    if ((($this->getAttribute((isset($context["freeTasks"]) ? $context["freeTasks"] : null), $this->getAttribute($context["task"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["freeTasks"]) ? $context["freeTasks"] : null), $this->getAttribute($context["task"], "id", array()), array(), "array"), null)) : (null))) {
                        echo " open ";
                    }
                    echo " ";
                    if (($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["canFreeTasks"]) ? $context["canFreeTasks"] : null)))) {
                        echo " mb5 ";
                    }
                    echo "\">
                        <input type=\"checkbox\" class=\"mr10\" name=\"freeTaskIds[]\"
                               value=\"";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                    echo "\" ";
                    if ((($this->getAttribute((isset($context["freeTasks"]) ? $context["freeTasks"] : null), $this->getAttribute($context["task"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["freeTasks"]) ? $context["freeTasks"] : null), $this->getAttribute($context["task"], "id", array()), array(), "array"), null)) : (null))) {
                        echo " checked ";
                    }
                    echo ">
                        ";
                    // line 206
                    $context["meta"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($context["task"], "type", array()));
                    // line 207
                    echo "                        <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "icon", array()), "html", null, true);
                    echo " color-gray\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                           data-container=\"body\" data-original-title=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "name", array()), "html", null, true);
                    echo "任务\"></i>
                        <span class=\"inline-block vertical-middle text-overflow title\">
                              任务 ";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                    echo "
                              </span>
                        <span class=\"label label-warning pull-right price\">免费</span>
                      </li>

                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                echo "                  </ul>
                  <div class=\"help-block \">免费任务仅支持图文、视频、音频、flash、文档、PPT
                  </div>
                </div>
              </div>
              ";
                // line 221
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local")) {
                    // line 222
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  ";
                    // line 224
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频试看"), "html", null, true);
                    echo "
                  <a class=\"es-icon es-icon-help text-normal link-gray\" data-container=\"body\"
                     data-toggle=\"popover\"
                     data-trigger=\"hover\"
                     data-placement=\"top\"
                     data-content=\"";
                    // line 229
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("常用于收费视频内容的前几分钟免费试看"), "html", null, true);
                    echo "\">
                  </a>
                </label>
                <div class=\"col-sm-8 radios\">
                  ";
                    // line 233
                    echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("tryLookable", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()), 0)) : (0)));
                    echo "
                </div>
              </div>
              ";
                }
                // line 237
                echo "              <div class=\"form-group js-enable-try-look ";
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()), 0)) : (0)) == 0)) {
                    echo "hidden";
                }
                echo "\">
                <div class=\"col-sm-8 col-sm-offset-2\">
                  <select class=\"form-control width-150 mh5\" id=\"tryLookLength\" name=\"tryLookLength\">
                    ";
                // line 240
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 241
                    echo "                      ";
                    if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookLength", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookLength", array()), 1)) : (1)) == $context["i"])) {
                        // line 242
                        echo "                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
                      ";
                    } else {
                        // line 244
                        echo "                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
                      ";
                    }
                    // line 246
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "                  </select>分钟
                </div>
              </div>
            </div>
            <hr class=\"mb30  bg-border-color\">
          ";
            }
            // line 253
            echo "

          <div class=\"es-piece\">
            <div class=\"piece-header\">增值服务</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展示承诺服务"), "html", null, true);
            echo "</label>
              <div class=\"col-sm-8 radios\">
                ";
            // line 260
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("showServices", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "showServices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "showServices", array()), 1)) : (1)));
            echo "
              </div>
            </div>
            <div class=\"form-group js-services ";
            // line 263
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "showServices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "showServices", array()), 1)) : (1)) == 0)) {
                echo "hidden";
            }
            echo "\">
              <label class=\"col-sm-2 control-label\">";
            // line 264
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("承诺提供服务"), "html", null, true);
            echo "</label>
              <div class=\"col-sm-8 form-control-static\">
                ";
            // line 266
            $context["serviceTags"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->buildServiceTags((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array()), array())) : (array())));
            // line 267
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["serviceTags"]) ? $context["serviceTags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 268
                echo "                  <a
                    class=\"label label-md js-service-item mr10 mb10 inline-block ";
                // line 269
                if ($this->getAttribute($context["tag"], "active", array())) {
                    echo "label-primary";
                } else {
                    echo "label-default";
                }
                echo "\"
                    data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\"
                    data-content=\"";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "summary", array()), "html", null, true);
                echo "\" data-code=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "fullName", array()), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "                <input type=\"hidden\" id=\"course_services\" name=\"services\"
                       value=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array()), array())) : (array()))), "html", null, true);
            echo "\">
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-8\">
                <button id=\"course-submit\" type=\"button\" class=\"btn btn-primary\"
                        data-loading-text=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存..."), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
            echo "</button>
              </div>
            </div>
          </div>

        </form>
      ";
        } else {
            // line 287
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("抱歉，您无权管理课程营销，如有需要请联系网站管理员！"), "html", null, true);
            echo "</div>
      ";
        }
        // line 289
        echo "    </div>
  </div>
";
    }

    // line 293
    public function block_course($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course-manage/marketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 293,  681 => 289,  675 => 287,  663 => 280,  654 => 274,  651 => 273,  639 => 271,  630 => 269,  627 => 268,  622 => 267,  620 => 266,  615 => 264,  609 => 263,  603 => 260,  598 => 258,  591 => 253,  583 => 247,  577 => 246,  569 => 244,  561 => 242,  558 => 241,  554 => 240,  545 => 237,  538 => 233,  531 => 229,  523 => 224,  519 => 222,  517 => 221,  510 => 216,  488 => 210,  483 => 208,  478 => 207,  476 => 206,  468 => 205,  457 => 203,  454 => 202,  437 => 201,  431 => 198,  426 => 195,  424 => 194,  419 => 191,  412 => 186,  409 => 185,  401 => 180,  397 => 179,  390 => 175,  386 => 173,  384 => 172,  378 => 169,  367 => 167,  362 => 165,  350 => 164,  345 => 162,  338 => 160,  335 => 159,  329 => 155,  321 => 154,  313 => 151,  300 => 149,  291 => 146,  285 => 145,  282 => 144,  280 => 143,  279 => 140,  272 => 138,  269 => 137,  267 => 136,  261 => 135,  258 => 134,  256 => 133,  254 => 131,  251 => 130,  248 => 129,  246 => 128,  238 => 123,  234 => 122,  230 => 121,  223 => 117,  216 => 112,  214 => 91,  208 => 86,  201 => 82,  196 => 80,  190 => 77,  186 => 75,  183 => 74,  174 => 69,  166 => 66,  160 => 63,  154 => 60,  146 => 57,  141 => 55,  133 => 52,  128 => 50,  124 => 49,  119 => 47,  111 => 44,  105 => 41,  99 => 38,  91 => 33,  85 => 30,  79 => 27,  69 => 20,  63 => 18,  61 => 17,  58 => 16,  56 => 15,  53 => 14,  50 => 13,  46 => 7,  41 => 5,  34 => 3,  30 => 1,  28 => 10,  26 => 9,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/marketing.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\marketing.html.twig");
    }
}
