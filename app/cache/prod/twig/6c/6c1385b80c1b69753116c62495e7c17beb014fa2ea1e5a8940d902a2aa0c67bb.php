<?php

/* courseset-manage/sidebar.html.twig */
class __TwigTemplate_9a322b4c85b7112634c2b279d15c19d69fe03a36eb134ecc01b88bb9b92a1ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'side' => array($this, 'block_side'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('side', $context, $blocks);
    }

    public function block_side($context, array $blocks = array())
    {
        // line 2
        echo "  ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 3
        echo "  ";
        $context["menuType"] = "course";
        // line 4
        echo "  ";
        if (twig_in_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), array(0 => "base", 1 => "detail", 2 => "cover", 3 => "question", 4 => "testpaper", 5 => "files", 6 => "plan", 7 => "question_plus"))) {
            // line 5
            echo "    ";
            $context["menuType"] = "courseSet";
            // line 6
            echo "  ";
        }
        // line 7
        echo "  ";
        $context["coursesLength"] = twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null));
        // line 8
        echo "  ";
        $context["courseListIntroCookie"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "cookies", array(), "any", false, true), "get", array(0 => "COURSE_LIST_INTRO_COOKIE"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "cookies", array(), "any", false, true), "get", array(0 => "COURSE_LIST_INTRO_COOKIE"), "method"), null)) : (null));
        // line 9
        echo "  ";
        $context["isShowCourseMenu"] = ((isset($context["curCourse"]) ? $context["curCourse"] : null) && ((((isset($context["menuType"]) ? $context["menuType"] : null) != "courseSet") || ((isset($context["coursesLength"]) ? $context["coursesLength"] : null) <= 1)) || (isset($context["courseListIntroCookie"]) ? $context["courseListIntroCookie"] : null)));
        // line 10
        echo "  ";
        $context["isShowCourseList"] = ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) != "live") && ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "parentId", array()), 0)) : (0)) <= 0)) && ((((isset($context["menuType"]) ? $context["menuType"] : null) == "courseSet") || ((isset($context["coursesLength"]) ? $context["coursesLength"] : null) <= 1)) || ((array_key_exists("courseListIntroCookie", $context)) ? (_twig_default_filter((isset($context["courseListIntroCookie"]) ? $context["courseListIntroCookie"] : null), null)) : (null))));
        // line 11
        echo "
  ";
        // line 13
        echo "  <div class=\"sidenav locked js-sidenav\" data-course-length=\"";
        echo twig_escape_filter($this->env, (isset($context["coursesLength"]) ? $context["coursesLength"] : null), "html", null, true);
        echo "\">
    <ul class=\"list-group\">
      ";
        // line 16
        echo "      ";
        if ((((isset($context["menuType"]) ? $context["menuType"] : null) == "courseSet") || ((isset($context["coursesLength"]) ? $context["coursesLength"] : null) <= 1))) {
            // line 17
            echo "        <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
                echo "active";
            }
            echo "\">
          ";
            // line 18
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 19
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "base")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 23
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 27
            echo "        </li>
        <li class=\"list-group-item ";
            // line 28
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "detail")) {
                echo "active";
            }
            echo "\">
          ";
            // line 29
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 30
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "detail")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详细信息"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 34
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_detail", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详细信息"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 38
            echo "        </li>
        <li class=\"list-group-item ";
            // line 39
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "cover")) {
                echo "active";
            }
            echo "\">
          ";
            // line 40
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 41
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "cover")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程封面"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 45
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_cover", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("封面图片"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 49
            echo "        </li>
        <hr class=\"mv5 mh10 bg-border-color\"/>
        <li class=\"list-group-item ";
            // line 51
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "files")) {
                echo "active";
            }
            echo "\">
          ";
            // line 52
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 53
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "files")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程文件"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 57
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程文件"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 61
            echo "        </li>
        <li class=\"list-group-item ";
            // line 62
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testpaper")) {
                echo "active";
            }
            echo "\">
          ";
            // line 63
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 64
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "testpaper")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷管理"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 68
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷管理"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 72
            echo "        </li>
        <li class=\"list-group-item ";
            // line 73
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question")) {
                echo "active";
            }
            echo "\">
          ";
            // line 74
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 75
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "question")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目管理"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 79
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目管理"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 83
            echo "        </li>
        ";
            // line 84
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course_set.menu.extension", array("courseSet" => (isset($context["courseSet"]) ? $context["courseSet"] : null), "sideNav" => (isset($context["side_nav"]) ? $context["side_nav"] : null)));
            echo "
      ";
        }
        // line 86
        echo "      ";
        // line 87
        echo "      ";
        if ((isset($context["isShowCourseMenu"]) ? $context["isShowCourseMenu"] : null)) {
            // line 88
            echo "      <div class=\"js-sidenav-course-menu \">
        ";
            // line 89
            if ((((isset($context["coursesLength"]) ? $context["coursesLength"] : null) > 1) &&  !(isset($context["courseListIntroCookie"]) ? $context["courseListIntroCookie"] : null))) {
                // line 90
                echo "          <li class=\"list-group-heading\">
            ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "title", array()), "html", null, true);
                echo "
          </li>
        ";
            } else {
                // line 94
                echo "          <hr class=\"mv5 mh10 bg-border-color\"/>
        ";
            }
            // line 96
            echo "        <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "tasks")) {
                echo "active";
            }
            echo "\" id=\"step-1\">
          ";
            // line 97
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 98
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "tasks")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("计划任务"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 102
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("计划任务"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 106
            echo "        </li>
        <li class=\"list-group-item ";
            // line 107
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "info")) {
                echo "active";
            }
            echo "\">
          ";
            // line 108
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 109
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "info")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("计划设置"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 113
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("计划设置"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 117
            echo "        </li>
        ";
            // line 118
            if (((isset($context["hasLiveTasks"]) ? $context["hasLiveTasks"] : null) || ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "live"))) {
                // line 119
                echo "          <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "replay")) {
                    echo "active";
                }
                echo "\">
          ";
                // line 120
                if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                    // line 121
                    echo "            <a class=\"pl10\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "replay")), "html", null, true);
                    echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("录播管理"), "html", null, true);
                    echo "
            </a>
          ";
                } else {
                    // line 125
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_replay", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
                    echo "\">
              ";
                    // line 126
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("录播管理"), "html", null, true);
                    echo "
            </a>
          ";
                }
                // line 129
                echo "        ";
            }
            // line 130
            echo "        </li>
        <li class=\"list-group-item ";
            // line 131
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "marketing")) {
                echo "active";
            }
            echo "\" id=\"step-2\">
          ";
            // line 132
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 133
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "marketing")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("营销设置"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 137
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_marketing", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("营销设置"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 141
            echo "        </li>
        <li class=\"list-group-item ";
            // line 142
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "teachers")) {
                echo "active";
            }
            echo "\">
          ";
            // line 143
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "locked", array())) {
                // line 144
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "sideNav" => "teachers")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师设置"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 148
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_teachers", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师设置"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 152
            echo "        </li>
        <li class=\"list-group-item ";
            // line 153
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "students")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 155
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
            echo "
          </a>
        </li>
        <hr class=\"mv5 mh10 bg-border-color\"/>
        <li class=\"list-group-item ";
            // line 159
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testpaper-check")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_testpaper_check_list", array("id" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷批阅"), "html", null, true);
            echo "
          </a>
        </li>
        <li class=\"list-group-item ";
            // line 163
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "homework-check")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_homework_check_list", array("id" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作业批阅"), "html", null, true);
            echo "
          </a>
        </li>
        <hr class=\"mv5 mh10 bg-border-color\"/>
        <li class=\"list-group-item ";
            // line 168
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "dashboard")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_dashboard", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习数据"), "html", null, true);
            echo "</a>
        </li>

        ";
            // line 174
            echo "          ";
            // line 175
            echo "            ";
            // line 176
            echo "        ";
            // line 177
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_search_order") == 1))) {
                // line 178
                echo "          <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "orders")) {
                    echo "active";
                }
                echo "\">
            <a href=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_orders", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单查询"), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            // line 183
            echo "      </div>
      ";
        }
        // line 185
        echo "      ";
        // line 186
        echo "      ";
        if ((isset($context["isShowCourseList"]) ? $context["isShowCourseList"] : null)) {
            // line 187
            echo "        <div class=\"js-sidenav-course-list\">
          <hr class=\"mv5 mh10 bg-border-color\"/>
          <li class=\"list-group-item ";
            // line 189
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "plan")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_courses", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教学计划管理"), "html", null, true);
            echo "
            </a>
          </li>
        </div>
      ";
        }
        // line 196
        echo "    </ul>
  </div>


";
    }

    public function getTemplateName()
    {
        return "courseset-manage/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  584 => 196,  576 => 191,  572 => 190,  566 => 189,  562 => 187,  559 => 186,  557 => 185,  553 => 183,  544 => 179,  537 => 178,  534 => 177,  532 => 176,  530 => 175,  528 => 174,  522 => 170,  518 => 169,  512 => 168,  503 => 164,  497 => 163,  489 => 160,  483 => 159,  475 => 155,  471 => 154,  465 => 153,  462 => 152,  456 => 149,  451 => 148,  445 => 145,  440 => 144,  438 => 143,  432 => 142,  429 => 141,  423 => 138,  418 => 137,  412 => 134,  407 => 133,  405 => 132,  399 => 131,  396 => 130,  393 => 129,  387 => 126,  382 => 125,  376 => 122,  371 => 121,  369 => 120,  362 => 119,  360 => 118,  357 => 117,  351 => 114,  346 => 113,  340 => 110,  335 => 109,  333 => 108,  327 => 107,  324 => 106,  318 => 103,  313 => 102,  307 => 99,  302 => 98,  300 => 97,  293 => 96,  289 => 94,  283 => 91,  280 => 90,  278 => 89,  275 => 88,  272 => 87,  270 => 86,  265 => 84,  262 => 83,  256 => 80,  251 => 79,  245 => 76,  240 => 75,  238 => 74,  232 => 73,  229 => 72,  223 => 69,  218 => 68,  212 => 65,  207 => 64,  205 => 63,  199 => 62,  196 => 61,  190 => 58,  185 => 57,  179 => 54,  174 => 53,  172 => 52,  166 => 51,  162 => 49,  156 => 46,  151 => 45,  145 => 42,  140 => 41,  138 => 40,  132 => 39,  129 => 38,  123 => 35,  118 => 34,  112 => 31,  107 => 30,  105 => 29,  99 => 28,  96 => 27,  90 => 24,  85 => 23,  79 => 20,  74 => 19,  72 => 18,  65 => 17,  62 => 16,  56 => 13,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/sidebar.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\courseset-manage\\sidebar.html.twig");
    }
}
