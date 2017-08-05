<?php

/* course/header/header-for-guest.html.twig */
class __TwigTemplate_b95fccee9c24b175d070c4a520a336d6ffc797f0b7cf6098d05674246aa3a420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/header/header-layout.html.twig", "course/header/header-for-guest.html.twig", 1);
        $this->blocks = array(
            'course_header_subtitle' => array($this, 'block_course_header_subtitle'),
            'course_header_people_num' => array($this, 'block_course_header_people_num'),
            'course_member_count' => array($this, 'block_course_member_count'),
            'course_heard_content' => array($this, 'block_course_heard_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/header/header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (((isset($context["previewAs"]) ? $context["previewAs"] : null) == "guest")) {
            // line 4
            $context["member"] = null;
            // line 5
            $context["courses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CoursesByCourseSetId", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array())));
        }
        // line 8
        $context["page_type"] = "guest";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_course_header_subtitle($context, array $blocks = array())
    {
        // line 11
        echo "  <p class=\"text-overflow subtitle\" data-toggle=\"popover\" data-placement=\"bottom\"  
    data-trigger=\"hover\"  data-content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "subtitle", array()), "html", null, true);
        echo "\">
    <a class=\"color-gray\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "subtitle", array()), "html", null, true);
        echo "
    </a>
  </p>
";
    }

    // line 19
    public function block_course_header_people_num($context, array $blocks = array())
    {
    }

    // line 21
    public function block_course_member_count($context, array $blocks = array())
    {
        // line 22
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "studentNum", array()), "html", null, true);
        echo "人
";
    }

    // line 25
    public function block_course_heard_content($context, array $blocks = array())
    {
        // line 26
        echo "  <div class=\"course-detail-bottom\">
    <div class=\"course-detail-img\">
      <img class=\"img-responsive\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover((isset($context["courseSet"]) ? $context["courseSet"] : null), "large"), "courseSet.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " \">
      <div class=\"image-overlay\"></div>
      ";
        // line 30
        if (((array_key_exists("previewTask", $context)) ? (_twig_default_filter((isset($context["previewTask"]) ? $context["previewTask"] : null), null)) : (null))) {
            // line 31
            echo "        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["previewTask"]) ? $context["previewTask"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"course-img-cover\">
          <i class=\"es-icon es-icon-playcircleoutline\"></i>
        </a>
      ";
        }
        // line 35
        echo "
      <div class=\"course-detail-remask\">
        ";
        // line 37
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 38
            echo "          <i class=\"es-icon es-icon-people\"></i>
          <span class=\"mhs\">";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "studentNum", array()), 0)) : (0)), "html", null, true);
            echo "</span>人加入学习
        ";
        }
        // line 41
        echo "        <div class=\"score pull-right mb0\">
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "star", array(0 => (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "rating", array()), 0)) : (0))), "method"), "html", null, true);
        echo "
          <span class=\"vertical-middle\">(";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "ratingNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "ratingNum", array()), 0)) : (0)), "html", null, true);
        echo "人评价)</span>
        </div>
      </div>
    </div>
    <div class=\"course-detail-info\">

      ";
        // line 50
        echo "      ";
        if (((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "discountId", array()) > 0) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) < $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()))) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Discount"))) {
            // line 51
            echo "        ";
            $context["onDiscount"] = true;
            // line 52
            echo "      ";
        } else {
            // line 53
            echo "        ";
            $context["onDiscount"] = false;
            // line 54
            echo "      ";
        }
        // line 55
        echo "
      <div class=\"";
        // line 56
        if ((isset($context["onDiscount"]) ? $context["onDiscount"] : null)) {
            echo " mb10  ";
        } else {
            echo " mb15 ";
        }
        echo "\">
        ";
        // line 57
        $this->loadTemplate("course/header/header-for-price.html.twig", "course/header/header-for-guest.html.twig", 57)->display($context);
        // line 58
        echo "      </div>

      ";
        // line 60
        if ((isset($context["onDiscount"]) ? $context["onDiscount"] : null)) {
            echo " 
        <div class=\"mb15 \">
          <span class=\"course-detail-title\">活动</span>
          <span class=\"text-12 color-warning\">
            <b class=\"mr20 hidden-xs\">";
            // line 64
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), "name", array()), 10);
            echo "</b>
            <i class=\"es-icon es-icon-accesstime text-14  mr10\"></i>
            <span id=\"discount-endtime-countdown\" data-remaintime=";
            // line 66
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), "endTime", array()) - $this->env->getExtension('AppBundle\Twig\WebExtension')->timestamp()), "html", null, true);
            echo ">
            </span>
          <span>
        </div>
      ";
        }
        // line 71
        echo "      <div class=\"course-detail-gray ";
        if ( !(isset($context["onDiscount"]) ? $context["onDiscount"] : null)) {
            echo " not-activity ";
        }
        echo "\">
        ";
        // line 72
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) != "live")) {
            // line 73
            echo "          <div class=\"course-detail-content\">
            <span class=\"course-detail-title vertical-middle mb10\">教学计划</span>
            <ul class=\"nav nav-pills nav-pills-sm nav-pills-transparent course-detail-nav\">
              ";
            // line 76
            $context["current_course"] = (isset($context["course"]) ? $context["course"] : null);
            // line 77
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                if ((($this->getAttribute($context["course"], "status", array()) == "published") || (isset($context["previewAs"]) ? $context["previewAs"] : null))) {
                    // line 78
                    echo "                <li class=\"mb10 mr10 ";
                    if (($this->getAttribute((isset($context["current_course"]) ? $context["current_course"] : null), "id", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        echo " active ";
                    }
                    echo "\">
                  <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()), "previewAs" => (isset($context["previewAs"]) ? $context["previewAs"] : null))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["course"], "title", array()), 10);
                    echo "
                  </a>
                  <i class=\"es-icon es-icon-done done-icon\"></i>
                </li>
              ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "            </ul>
          </div>
        ";
        }
        // line 87
        echo "
        <div class=\"mb15 hidden-xs\">
          <span class=\"course-detail-title \">学习有效期</span>
          ";
        // line 90
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()) == "days")) {
            // line 91
            echo "            <span class=\"gray-dark\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array()), "html", null, true);
            echo " 天（随到随学）</span>
          ";
        } elseif (($this->getAttribute(        // line 92
(isset($context["course"]) ? $context["course"] : null), "expiryMode", array()) == "end_date")) {
            // line 93
            echo "            <span class=\"gray-dark\">
             截止：";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), "Y-m-d "), "html", null, true);
            echo "（随到随学）
            </span>
          ";
        } elseif (($this->getAttribute(        // line 96
(isset($context["course"]) ? $context["course"] : null), "expiryMode", array()) == "date")) {
            // line 97
            echo "            <span class=\"gray-dark\">
              开始：";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array()), "Y-m-d "), "html", null, true);
            echo " &nbsp;
              截止：";
            // line 99
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), "Y-m-d "), "html", null, true);
            echo "
            </span>
          ";
        } elseif (($this->getAttribute(        // line 101
(isset($context["course"]) ? $context["course"] : null), "expiryMode", array()) == "forever")) {
            // line 102
            echo "            <span class=\"gray-dark mrl\">永久有效</span>
          ";
        }
        // line 104
        echo "        </div>

        ";
        // line 106
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) != 0) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()) != 0))) {
            // line 107
            echo "        <div class=\"mb15 hidden-xs\">
          <span class=\"course-detail-title \">购买截止日期</span>
          <span class=\"gray-dark mrl\">";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()), "Y-m-d "), "html", null, true);
            echo " 23:59</span>
        </div>
        ";
        }
        // line 112
        echo "
        ";
        // line 113
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "showServices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "showServices", array()), 1)) : (1))) {
            // line 114
            echo "          <span class=\"course-detail-title\">承诺服务</span>
          ";
            // line 115
            $context["serviceTags"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->buildServiceTags((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array()), array())) : (array())));
            // line 116
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["serviceTags"]) ? $context["serviceTags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 117
                echo "            <span
              class=\"lump-sm color-lump ";
                // line 118
                if ($this->getAttribute($context["tag"], "active", array())) {
                    echo "bg-primary";
                }
                echo " mr5 hidden-xs\"
              data-container=\"body\"
              data-trigger=\"hover\"
              data-placement=\"top\"
              data-toggle=\"popover\"
              title=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "fullName", array()), "html", null, true);
                if ( !$this->getAttribute($context["tag"], "active", array())) {
                    echo "<span class='text-12 color-gray'>(暂未提供)</span>";
                }
                echo "\"
              data-content=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "summary", array()), "html", null, true);
                echo "\">
              ";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "shortName", array()), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "        ";
        }
        // line 129
        echo "        
      </div>
      <div class=\"course-detail-section-responsive visible-xs visible-sm clearfix\">
        <ul class=\"clearfix\">
          <!--营销页显示-->
          ";
        // line 134
        if ((isset($context["marketingPage"]) ? $context["marketingPage"] : null)) {
            // line 135
            echo "          <li class=\"js-unfavorite-btn\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()))), "html", null, true);
            echo "\"
            ";
            // line 136
            if ( !(isset($context["isUserFavorite"]) ? $context["isUserFavorite"] : null)) {
                echo "style=\"display: none\" ";
            }
            echo ">
            <a class=\"color-primary\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"已收藏\"
              data-trigger=\"hover\">
              <i class=\"es-icon es-icon-bookmark color-primary\"></i>
              <br/>
              已收藏
            </a>
          </li>
          <li class=\"js-favorite-btn\" id=\"favorite-btn\" data-url=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()))), "html", null, true);
            echo "\"
          ";
            // line 145
            if ((isset($context["isUserFavorite"]) ? $context["isUserFavorite"] : null)) {
                echo "style=\"display: none\"";
            }
            echo ">
          <a class=\"\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"收藏\"
              data-trigger=\"hover\">
              <i class=\"es-icon es-icon-bookmarkoutline\"></i>
              <br/>
              收藏
          </a>
          </li>
          ";
        }
        // line 154
        echo "
          <li class=\"es-share top\">
            <a class=\" dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"课程分享\">
              <i class=\"es-icon es-icon-share\"></i>
              <br/>
              分享
            </a>
            ";
        // line 161
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-guest.html.twig", 161)->display(array_merge($context, array("type" => "courseSet")));
        // line 162
        echo "          </li>
        </ul>
      </div>
      <div class=\"text-right buy-btn-group\">
        ";
        // line 166
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), false)) : (false))) {
            // line 167
            echo "          ";
            if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()) == "date") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array()) >= $this->env->getExtension('AppBundle\Twig\WebExtension')->timestamp()))) {
                // line 168
                echo "            课程将于";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array()), "Y年m月d日"), "html", null, true);
                echo "开始授课，请耐心等待
          ";
            } else {
                // line 170
                echo "            <a class=\"btn btn-primary btn-lg\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">
              去学习
            </a>
          ";
            }
            // line 174
            echo "        ";
        } else {
            // line 175
            echo "          ";
            if (((array_key_exists("classroom", $context)) ? (_twig_default_filter((isset($context["classroom"]) ? $context["classroom"] : null), null)) : (null))) {
                // line 176
                echo "            ";
                $this->loadTemplate("course/header/header-for-classroom-info.html.twig", "course/header/header-for-guest.html.twig", 176)->display($context);
                // line 177
                echo "          ";
            } else {
                // line 178
                echo "            ";
                $this->loadTemplate("course/header/header-for-guest-buy-btn.html.twig", "course/header/header-for-guest.html.twig", 178)->display($context);
                // line 179
                echo "          ";
            }
            // line 180
            echo "        ";
        }
        // line 181
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course/header/header-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 181,  439 => 180,  436 => 179,  433 => 178,  430 => 177,  427 => 176,  424 => 175,  421 => 174,  413 => 170,  407 => 168,  404 => 167,  402 => 166,  396 => 162,  394 => 161,  385 => 154,  371 => 145,  367 => 144,  354 => 136,  349 => 135,  347 => 134,  340 => 129,  337 => 128,  328 => 125,  324 => 124,  317 => 123,  307 => 118,  304 => 117,  299 => 116,  297 => 115,  294 => 114,  292 => 113,  289 => 112,  283 => 109,  279 => 107,  277 => 106,  273 => 104,  269 => 102,  267 => 101,  262 => 99,  258 => 98,  255 => 97,  253 => 96,  248 => 94,  245 => 93,  243 => 92,  238 => 91,  236 => 90,  231 => 87,  226 => 84,  210 => 79,  203 => 78,  197 => 77,  195 => 76,  190 => 73,  188 => 72,  181 => 71,  173 => 66,  168 => 64,  161 => 60,  157 => 58,  155 => 57,  147 => 56,  144 => 55,  141 => 54,  138 => 53,  135 => 52,  132 => 51,  129 => 50,  120 => 43,  116 => 42,  113 => 41,  108 => 39,  105 => 38,  103 => 37,  99 => 35,  91 => 31,  89 => 30,  82 => 28,  78 => 26,  75 => 25,  68 => 22,  65 => 21,  60 => 19,  52 => 14,  47 => 12,  44 => 11,  41 => 10,  37 => 1,  35 => 8,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-guest.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\header\\header-for-guest.html.twig");
    }
}
