<?php

/* my/teaching/course-sets.html.twig */
class __TwigTemplate_e0143ad1fefc87cb91275c11fa27185dc32a777f9c29c3cb43edd74f9a79f4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("my/layout.html.twig", "my/teaching/course-sets.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "my/teaching/course-sets.html.twig", 1);
        // line 6
        $context["side_nav"] = "my-teaching-courses";
        // line 8
        $context["type"] = "question";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "  <div class=\"panel panel-default\" role=\"my-teaching-course-sets\">
    <div class=\"panel-heading\">
      <span class=\"pull-right\">
        <a id=\"create-course\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
        echo "\" class=\"btn btn-info btn-sm\">
        <span class=\"es-icon es-icon-anonymous-iconfont\"></span> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建课程"), "html", null, true);
        echo "</a>
      </span>
      ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
        echo "
    </div>

    <div class=\"panel-body\">
      ";
        // line 21
        $this->loadTemplate("my/teaching/course-tab.html.twig", "my/teaching/course-sets.html.twig", 21)->display($context);
        // line 22
        echo "      <table class=\"table table-striped\" id=\"course-table\" style=\"word-break:break-all;\">
        <thead>
        <tr>
          <th width=\"45%\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
          ";
        // line 26
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            // line 27
            echo "            <th width=\"20%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</th>
          ";
        } else {
            // line 29
            echo "            <th>";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("数"), "html", null, true);
            echo "</th>
            <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格(元)"), "html", null, true);
            echo "</th>
          ";
        }
        // line 32
        echo "          <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
          <th width=\"20%\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 38
            echo "          <tr>
            <td>
              <a class=\"pull-left mrm link-primary\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
            echo "\">
                <img class=\"course-picture\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["courseSet"], "middle"), "courseSet.png"), "html", null, true);
            echo "\"
                     alt=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
            echo "\" width=\"100\">
              </a>
              <div class=\"mlm\">
                ";
            // line 45
            if (($this->getAttribute($context["courseSet"], "status", array()) == "published")) {
                // line 46
                echo "                  <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 48
                echo "                  <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()), "previewAs" => "member")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
                echo "</a>
                ";
            }
            // line 50
            echo "                <br/>
                ";
            // line 51
            if (($this->getAttribute($context["courseSet"], "courseNum", array()) > 1)) {
                // line 52
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_courses", array("courseSetId" => $this->getAttribute($context["courseSet"], "id", array()))), "html", null, true);
                echo "\">
                   <span class=\"label label-warning mr5\">";
                // line 53
                echo twig_escape_filter($this->env, ($this->getAttribute($context["courseSet"], "courseNum", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个教学计划")), "html", null, true);
                echo "</span>
                  </a>
                ";
            }
            // line 56
            echo "                ";
            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                // line 57
                echo "                  <span class=\"label label-success live-label mr5\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播"), "html", null, true);
                echo "</span>
                ";
            }
            // line 59
            echo "                ";
            if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
                // line 60
                echo "                  ";
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["courseSet"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["courseSet"], "id", array()), array(), "array"), null)) : (null));
                // line 61
                echo "                  ";
                if ( !(isset($context["classroom"]) ? $context["classroom"] : null)) {
                    // line 62
                    echo "                    <span class=\"label label-danger live-label mr5\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已移除"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 64
                echo "                ";
            }
            // line 65
            echo "              </div>
            </td>
            ";
            // line 67
            if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
                // line 68
                echo "            <td>
              ";
                // line 69
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["courseSet"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["courseSet"], "id", array()), array(), "array"), null)) : (null));
                // line 70
                echo "              ";
                if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                    // line 71
                    echo "                <a class=\"link-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomTitle", array()), "html", null, true);
                    echo "</a>
              ";
                }
                // line 73
                echo "            </td>
            ";
            } else {
                // line 75
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "studentNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 76
                echo twig_escape_filter($this->env, (($this->getAttribute($context["courseSet"], "minCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "minCoursePrice", array()), 0)) : (0)), "html", null, true);
                echo "</td>
            ";
            }
            // line 78
            echo "
            <td> ";
            // line 79
            echo $context["dict_macro"]->getcourseStatus($this->getAttribute($context["courseSet"], "status", array()));
            echo "</td>
            <td>
              <div class=\"btn-group\">
                <a class=\"mr10 link-primary\" target=\"_blank\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute($context["courseSet"], "id", array()))), "html", null, true);
            echo "\">
                  ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
            echo "
                </a>
                <a href=\"javascript:;\" type=\"button\" class=\"link-primary dropdown-toggle ml10\" data-toggle=\"dropdown\">
                  更多
                  <i class=\"es-icon es-icon-arrowdropdown\"></i>
                </a>
                <ul class=\"dropdown-menu pull-right\">
                  ";
            // line 90
            if (($this->getAttribute($context["courseSet"], "type", array()) != "live")) {
                // line 91
                echo "                    <li>
                      <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage", array("id" => $this->getAttribute($context["courseSet"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("计划管理"), "html", null, true);
                echo "
                      </a>
                    </li>
                  ";
            }
            // line 97
            echo "                  <li>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute($context["courseSet"], "id", array()))), "html", null, true);
            echo "\">
                      ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件管理"), "html", null, true);
            echo "
                    </a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 107
            echo "          <tr>
            <td class=\"text-center\" colspan=\"20\">
              <div class=\"empty\">
                <a class=\"link-primary\"  href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\" target=\"_blank\">
                  ";
            // line 111
            if ((((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) ? $context["filter"] : null), "normal")) : ("normal")) == "live")) {
                // line 112
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你还没有在教的直播课程哦, 赶快去创建吧!"), "html", null, true);
                echo "
                  ";
            } else {
                // line 114
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你还没有在教的课程哦, 赶快去创建吧!"), "html", null, true);
                echo "
                  ";
            }
            // line 116
            echo "                </a>
              </div>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </tbody>
      </table>
      <nav class=\"text-center\">
        ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
      </nav>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "my/teaching/course-sets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 124,  326 => 121,  316 => 116,  310 => 114,  304 => 112,  302 => 111,  298 => 110,  293 => 107,  280 => 99,  276 => 98,  273 => 97,  266 => 93,  262 => 92,  259 => 91,  257 => 90,  247 => 83,  243 => 82,  237 => 79,  234 => 78,  229 => 76,  224 => 75,  220 => 73,  212 => 71,  209 => 70,  207 => 69,  204 => 68,  202 => 67,  198 => 65,  195 => 64,  189 => 62,  186 => 61,  183 => 60,  180 => 59,  174 => 57,  171 => 56,  165 => 53,  160 => 52,  158 => 51,  155 => 50,  147 => 48,  139 => 46,  137 => 45,  131 => 42,  127 => 41,  123 => 40,  119 => 38,  114 => 37,  107 => 33,  102 => 32,  97 => 30,  87 => 29,  81 => 27,  79 => 26,  75 => 25,  70 => 22,  68 => 21,  61 => 17,  56 => 15,  52 => 14,  47 => 11,  44 => 10,  36 => 4,  32 => 2,  30 => 8,  28 => 6,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/teaching/course-sets.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\my\\teaching\\course-sets.html.twig");
    }
}
