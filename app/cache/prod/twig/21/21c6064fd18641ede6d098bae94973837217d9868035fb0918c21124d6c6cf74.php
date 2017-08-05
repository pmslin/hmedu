<?php

/* course/course-show.html.twig */
class __TwigTemplate_c8fd75f8dac77c721a7d5d40880c52f344236dc68d15da981b7d49a06b68cdca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "course/course-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
            'detail_content' => array($this, 'block_detail_content'),
            'member_expired' => array($this, 'block_member_expired'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/easy-pie-chart/dist/jquery.easypiechart.js", 1 => "libs/excanvas-compiled.js", 2 => "libs/echo-js.js", 3 => "libs/jquery-countdown.js", 4 => "app/js/courseset/show/index.js"));
        // line 5
        $context["course_set"] = twig_array_merge($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()))), array("tags" => "tags"));
        // line 6
        $context["bodyClass"] = "course-dashboard-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), "tags", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            $this->displayParentBlock("keywords", $context, $blocks);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 17
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())), ""), 100);
    }

    // line 19
    public function block_full_content($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $context["eventReportParams"] = array("user-id" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)));
        // line 21
        echo "    ";
        $this->loadTemplate("event_report.html.twig", "course/course-show.html.twig", 21)->display(array_merge($context, array("eventName" => "course.view", "subjectType" => "course", "subjectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "eventReportParams" => (isset($context["eventReportParams"]) ? $context["eventReportParams"] : null))));
        // line 22
        echo "
  ";
        // line 23
        $context["previewAs"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "previewAs"), "method");
        // line 24
        echo "  ";
        $context["metas"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseShowMetas(((((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null))) ? ("member") : ("guest")));
        // line 25
        echo "  ";
        $context["route_params"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
        // line 26
        echo "
  ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute((isset($context["metas"]) ? $context["metas"] : null), "header", array()), array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "course" => (isset($context["course"]) ? $context["course"] : null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null)))));
        echo "

  ";
        // line 29
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("marketing.tool", array("type" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
        echo "

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-9 col-md-8 course-detail-content\">
        ";
        // line 34
        $this->loadTemplate("course/announcement/block.html.twig", "course/course-show.html.twig", 34)->display(array_merge($context, array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        // line 35
        echo "        <section class=\"es-section\">
          <div class=\"nav-btn-tab\">

\t          ";
        // line 38
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null))) {
            // line 39
            echo "\t\t          ";
            $this->loadTemplate("course/header/nav-tab-for-member.html.twig", "course/course-show.html.twig", 39)->display($context);
            // line 40
            echo "\t          ";
        } else {
            // line 41
            echo "\t\t          ";
            $this->loadTemplate("course/header/nav-tab-for-guest.html.twig", "course/course-show.html.twig", 41)->display($context);
            // line 42
            echo "\t          ";
        }
        // line 43
        echo "
            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((array_key_exists("isCourseTeacher", $context)) ? (_twig_default_filter((isset($context["isCourseTeacher"]) ? $context["isCourseTeacher"] : null), false)) : (false)))) {
            // line 45
            echo "              <div class=\"btnbar hidden-xs\">
                <a href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
                  class=\"btn btn-link\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公告"), "html", null, true);
            echo "
                </a>
              </div>
            ";
        }
        // line 54
        echo "
          </div>
          ";
        // line 56
        $this->displayBlock('detail_content', $context, $blocks);
        // line 59
        echo "        </section>

        ";
        // line 61
        $this->loadTemplate("course/block/related-courses.html.twig", "course/course-show.html.twig", 61)->display(array_merge($context, array("courseSetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()))));
        // line 62
        echo "
      </div>

      <div class=\"col-lg-3 col-md-4 course-sidebar\">
        ";
        // line 67
        echo "        ";
        // line 70
        echo "        ";
        // line 71
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["metas"]) ? $context["metas"] : null), "widgets", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["widget"]) {
            // line 72
            echo "          ";
            if ((((((($this->getAttribute($context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "classroom") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) > 0)) || (((($this->getAttribute(            // line 73
$context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "course") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0))) || ((($this->getAttribute(            // line 74
$context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "all"))) {
                // line 75
                echo "            ";
                if (($this->getAttribute($context["widget"], "renderType", array()) == "render")) {
                    // line 76
                    echo "              ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($context["widget"], "uri", array()), array("course" => (isset($context["course"]) ? $context["course"] : null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), array())) : (array())))));
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 77
$context["widget"], "renderType", array()) == "include")) {
                    // line 78
                    echo "              ";
                    $this->loadTemplate($this->getAttribute($context["widget"], "uri", array()), "course/course-show.html.twig", 78)->display(array_merge($context, array("course" => (isset($context["course"]) ? $context["course"] : null))));
                    // line 79
                    echo "            ";
                }
                // line 80
                echo "          ";
            }
            // line 81
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "      </div>

    </div>
  </div>

  ";
        // line 87
        $this->displayBlock('member_expired', $context, $blocks);
        // line 94
        echo "
    ";
        // line 95
        $this->loadTemplate("common/weixin-share.html.twig", "course/course-show.html.twig", 95)->display(array_merge($context, array("title" => $this->getAttribute(        // line 96
(isset($context["course_set"]) ? $context["course_set"] : null), "title", array()), "desc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 97
(isset($context["course_set"]) ? $context["course_set"] : null), "summary", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 98
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl((($this->getAttribute($this->getAttribute(        // line 99
(isset($context["course_set"]) ? $context["course_set"] : null), "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), "cover", array(), "any", false, true), "large", array()))) : ("")), "course.png"))));
        // line 101
        echo "
  ";
        // line 102
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.bottom.extension", array("course" => (isset($context["course"]) ? $context["course"] : null)));
        echo "
";
    }

    // line 56
    public function block_detail_content($context, array $blocks = array())
    {
        // line 57
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["metas"]) ? $context["metas"] : null), "tabs", array()), (isset($context["tab"]) ? $context["tab"] : null), array(), "array"), "content", array()), array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "course" => (isset($context["course"]) ? $context["course"] : null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null)))));
        echo "
          ";
    }

    // line 87
    public function block_member_expired($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isMemberExpired(((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : null), null)) : (null)), ((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null)))) {
            // line 89
            echo "      <div class=\"member-expire\">
        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_member_expired", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"></a>
      </div>
    ";
        }
        // line 93
        echo "  ";
    }

    public function getTemplateName()
    {
        return "course/course-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 93,  305 => 90,  302 => 89,  299 => 88,  296 => 87,  289 => 57,  286 => 56,  280 => 102,  277 => 101,  275 => 99,  274 => 98,  273 => 97,  272 => 96,  271 => 95,  268 => 94,  266 => 87,  259 => 82,  245 => 81,  242 => 80,  239 => 79,  236 => 78,  234 => 77,  229 => 76,  226 => 75,  224 => 74,  223 => 73,  221 => 72,  203 => 71,  201 => 70,  199 => 67,  193 => 62,  191 => 61,  187 => 59,  185 => 56,  181 => 54,  174 => 50,  168 => 47,  164 => 45,  162 => 44,  159 => 43,  156 => 42,  153 => 41,  150 => 40,  147 => 39,  145 => 38,  140 => 35,  138 => 34,  130 => 29,  125 => 27,  122 => 26,  119 => 25,  116 => 24,  114 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 19,  96 => 17,  55 => 14,  52 => 13,  43 => 10,  40 => 9,  36 => 1,  34 => 6,  32 => 5,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/course-show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\course-show.html.twig");
    }
}
