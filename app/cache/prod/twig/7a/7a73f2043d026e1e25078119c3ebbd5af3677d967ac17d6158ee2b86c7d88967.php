<?php

/* course-manage/student/index.html.twig */
class __TwigTemplate_222671e4964abbe2e42c8995a7c1221a71a0afe8dbc4709ce87490830dcc3753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/student/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/course-manage/students/index.js"));
        // line 5
        $context["side_nav"] = "students";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员管理"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"panel panel-default\" role=\"course-manage-student-index\">
    ";
        // line 9
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/student/index.html.twig", 9)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null), "btnGroup" => 1)));
        // line 10
        echo "
    <div class=\"panel-body\">
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <ul class=\"nav nav-pills mbl\">
        <li class=\"active\">
          <a href=\"javascript:;\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正式学员"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"\">
          <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_quit_records", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出记录"), "html", null, true);
        echo "</a>
        </li>
      </ul>
      <form class=\"form-inline well well-sm\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"get\" novalidate>
        <div class=\"form-group col-md-7\">
          <input class=\"form-control \" type=\"text\" style=\"width:45%\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请输入用户名/邮箱/手机号"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
        </div>
        <div class=\"clearfix\"></div>
      </form>
      <table class=\"table table-middle table-striped\" id=\"course-student-list\">
        <thead>
          <tr>
            <th width=\"40%\">";
        // line 31
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        }
        echo "</th>
            ";
        // line 33
        echo "            <th width=\"30%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习进度"), "html", null, true);
        echo "</th>
            <th width=\"30%\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            if ($context["student"]) {
                // line 39
                echo "            ";
                $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array"), null)) : (null));
                // line 40
                echo "            <tr id=\"student-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
                echo "-tr\" class=\"students-item js-students-item\">
              <td class=\"media media-middle\" >
                <a class=\"pull-left js-user-card\" href=\"/user/";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "userId", array()), "html", null, true);
                echo "\" data-card-url=\"/user/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "userId", array()), "html", null, true);
                echo "/card/show\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "userId", array()), "html", null, true);
                echo "\">
                  ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "pull-left", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
                </a>
                <a target=\"_blank\" href=\"/user/";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "userId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>

                ";
                // line 47
                if ($this->getAttribute($context["student"], "remark", array())) {
                    // line 48
                    echo "                  <span class=\"color-gray text-sm\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "remark", array()), "html", null, true);
                    echo "\">(";
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["student"], "remark", array()), 16);
                    echo ")</span>
                ";
                }
                // line 50
                echo "                <div class=\"color-gray text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入时间：%createdTime%", array("%createdTime%" => twig_date_format_filter($this->env, $this->getAttribute($context["student"], "createdTime", array()), "Y-n-d H:i"))), "html", null, true);
                echo "</div>
                ";
                // line 51
                if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array()) > 0) && ($this->getAttribute($context["student"], "deadline", array()) > 0))) {
                    // line 52
                    echo "                  <div class=\"color-gray text-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("有效期至：%deadline%", array("%deadline%" => twig_date_format_filter($this->env, $this->getAttribute($context["student"], "deadline", array()), "Y-n-d H:i"))), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->timeDiffFilter($this->getAttribute($context["student"], "deadline", array())), "html", null, true);
                    echo "天)</div>
                ";
                }
                // line 54
                echo "              </td>
              <td>
                ";
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["processes"]) ? $context["processes"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["processes"]) ? $context["processes"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array"), 0)) : (0)), "html", null, true);
                echo "%<a class=\"\" href=\"javascript:;\"  data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_process", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute($context["student"], "userId", array()))), "html", null, true);
                echo "\">（查看详情）</a>
              </td>
              <td>
                <a class=\"mrm link-primary\" href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"/message/create/";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "userId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发私信"), "html", null, true);
                echo "</a>
                ";
                // line 60
                if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method")) {
                    // line 61
                    echo "                <a class=\"mrm link-primary\" href=\"javascript:;\"  data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_show", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute($context["student"], "userId", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看资料"), "html", null, true);
                    echo "</a>
                ";
                } elseif ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.buy_fill_userinfo")) {
                    // line 63
                    echo "                   <a class=\"mrm link-primary\" href=\"javascript:;\"  data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_defined_show", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute($context["student"], "userId", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看资料"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 65
                echo "                <div class=\"btn-group vertical-top\">
                  <a href=\"#\" class=\"mrm link-primary dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "
                    <span class=\"caret mls\"></span>
                  </a>
                  <ul class=\"dropdown-menu pull-right\">
                    <li>
                      <a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_remark", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute($context["student"], "userId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("备注"), "html", null, true);
                echo "</a>
                    </li>
                    <li>
                      <a class=\"unfollow-student-btn\" href=\"javascript:;\" data-url=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute($context["student"], "userId", array()))), "html", null, true);
                echo "\" ";
                if ( !(($this->getAttribute((isset($context["followings"]) ? $context["followings"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["followings"]) ? $context["followings"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array"), null)) : (null))) {
                    echo " style=\"display: none;\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消关注"), "html", null, true);
                echo "</a>
                      <a class=\"follow-student-btn\" href=\"javascript:;\" data-url=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute($context["student"], "userId", array()))), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute((isset($context["followings"]) ? $context["followings"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["followings"]) ? $context["followings"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array"), null)) : (null))) {
                    echo " style=\"display: none;\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
                echo "</a>
                    </li>
                    ";
                // line 78
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method"))) {
                    // line 79
                    echo "                      <li>
                          ";
                    // line 80
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()) == "days") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array()) > 0))) {
                        // line 81
                        echo "                            <a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_expiryday", array("courseSetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute($context["student"], "userId", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("增加有效期"), "html", null, true);
                        echo "</a>

                          ";
                    } else {
                        // line 84
                        echo "                            <a class=\"js-expiry-days\" href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("增加有效期"), "html", null, true);
                        echo "</a>
                          ";
                    }
                    // line 86
                    echo "                      </li>
                    ";
                }
                // line 88
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_manage_student", 0))) {
                    // line 89
                    echo "                      <li>
                        <a class=\"js-remove-student\" href=\"javascript:;\" data-url=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_remove", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute($context["student"], "userId", array()))), "html", null, true);
                    echo "\" data-user=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移除"), "html", null, true);
                    echo "</a>
                      </li>
                    ";
                }
                // line 93
                echo "
                  </ul>
                </div>
              </td>
            </tr>
          ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 99
            echo "            <tr class=\"empty\"><td colspan=\"20\">暂无学员记录</td></tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
        </tbody>
      </table>
      <nav class=\"text-center\">
        ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
      </nav>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 105,  313 => 101,  306 => 99,  295 => 93,  285 => 90,  282 => 89,  279 => 88,  275 => 86,  269 => 84,  260 => 81,  258 => 80,  255 => 79,  253 => 78,  242 => 76,  232 => 75,  224 => 72,  216 => 67,  212 => 65,  204 => 63,  196 => 61,  194 => 60,  188 => 59,  180 => 56,  176 => 54,  168 => 52,  166 => 51,  161 => 50,  153 => 48,  151 => 47,  144 => 45,  139 => 43,  131 => 42,  125 => 40,  122 => 39,  116 => 38,  109 => 34,  104 => 33,  96 => 31,  86 => 24,  80 => 23,  75 => 21,  67 => 18,  61 => 15,  55 => 12,  51 => 10,  49 => 9,  46 => 8,  43 => 7,  33 => 3,  29 => 1,  27 => 5,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/student/index.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\student\\index.html.twig");
    }
}
