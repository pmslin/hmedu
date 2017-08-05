<?php

/* course-set/explore.html.twig */
class __TwigTemplate_69eb7a05342241cefdf65dba87cd8867bc955d8d3c725441ae312ef00b1a4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "course-set/explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 4
        $context["bodyClass"] = "course-list-page ";
        // line 5
        $context["siteNav"] = "course/explore";
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "app/js/course/explore/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo "全部";
        }
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
        // line 12
        echo "    ";
    }

    // line 14
    public function block_top_content($context, array $blocks = array())
    {
        // line 15
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程列表"), "html", null, true);
        echo "
      </div>

      ";
        // line 22
        $context["classrooms"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Classrooms", array("count" => 1));
        // line 23
        echo "      <div class=\"more\">
        ";
        // line 24
        if (((array_key_exists("classrooms", $context)) ? (_twig_default_filter((isset($context["classrooms"]) ? $context["classrooms"] : null), null)) : (null))) {
            // line 25
            echo "          <a class=\"btn btn-primary btn-lg\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
            echo "\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 29
        echo "        <a class=\"btn btn-primary btn-lg\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_explore");
        echo "\">
          ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看公开课"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>

  ";
        // line 36
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 37
            echo "    ";
            $this->loadTemplate("course-set/search-mobile.html.twig", "course-set/explore.html.twig", 37)->display($context);
            // line 38
            echo "  ";
        }
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "  ";
        $context["type"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array()), "all")) : ("all"));
        // line 43
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array()), "all")) : ("all"));
        // line 44
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest"));
        // line 45
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 46
        echo "  ";
        $context["path"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method");
        // line 47
        echo "
  ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Category:treeNav", array("tags" => (isset($context["tags"]) ? $context["tags"] : null), "path" => (isset($context["path"]) ? $context["path"] : null), "category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null), "group" => "course")));
        echo "

  <div class=\"es-filter\">
    <ul class=\"nav nav-sort clearfix\">
      <li>
        <a
          href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "latest")), "html", null, true);
        echo "\"
          class=\"";
        // line 55
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "latest")) {
            echo "active";
        }
        echo "\">
          ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新"), "html", null, true);
        echo "
        </a>
      </li>
      <li>
        <a
          href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
        echo "\"
          class=\"";
        // line 62
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            echo "active";
        }
        echo "\">
          ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热"), "html", null, true);
        echo "
        </a>
      </li>
      <li>
        <a
          href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\"
          class=\"";
        // line 69
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            echo "active";
        }
        echo "\">
          ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐"), "html", null, true);
        echo "
        </a>
      </li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 75
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("vip")) {
            // line 76
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i
              class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 79
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
            }
            // line 80
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["level"], "name", array()), 4);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li role=\"presentation\" class=\"";
            // line 83
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a
                href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
            echo "</a>
            </li>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 87
                echo "              <li role=\"presentation\" class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a
                  href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "          </ul>
        </div>
      ";
        }
        // line 94
        echo "      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 95
        if (((isset($context["type"]) ? $context["type"] : null) == "live")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"live\" value=\"
        ";
        // line 96
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            // line 97
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => "live", "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 99
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => "all", "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 100
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播课程"), "html", null, true);
        echo "
      </label>
      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 103
        if (((isset($context["price"]) ? $context["price"] : null) == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 104
        if (((isset($context["price"]) ? $context["price"] : null) == "all")) {
            // line 105
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "free", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 107
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "all", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 109
        echo "        \"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课程"), "html", null, true);
        echo "
      </label>
    </div>
  </div>

  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 116
        if ((isset($context["courseSets"]) ? $context["courseSets"] : null)) {
            // line 117
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
                // line 118
                echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
                // line 119
                $this->loadTemplate("course/widgets/course-grid.html.twig", "course-set/explore.html.twig", 119)->display(array_merge($context, array("courseSet" => $context["courseSet"])));
                // line 120
                echo "          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "      ";
        } else {
            // line 123
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该分类下无课程"), "html", null, true);
            echo "</div>
      ";
        }
        // line 125
        echo "    </div>
  </div>
  ";
        // line 127
        if ( !(isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 128
            echo "    <nav class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "</nav>
  ";
        }
    }

    // line 132
    public function block_bottom($context, array $blocks = array())
    {
        // line 133
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "course-set/explore.html.twig", 133)->display(array_merge($context, array("mobile_tool_bar" => "course")));
    }

    public function getTemplateName()
    {
        return "course-set/explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 133,  411 => 132,  403 => 128,  401 => 127,  397 => 125,  391 => 123,  388 => 122,  373 => 120,  371 => 119,  368 => 118,  350 => 117,  348 => 116,  337 => 109,  331 => 107,  325 => 105,  323 => 104,  317 => 103,  310 => 100,  304 => 99,  298 => 97,  296 => 96,  290 => 95,  287 => 94,  282 => 91,  271 => 88,  264 => 87,  260 => 86,  253 => 84,  247 => 83,  243 => 81,  231 => 80,  227 => 79,  222 => 76,  220 => 75,  212 => 70,  206 => 69,  202 => 68,  194 => 63,  188 => 62,  184 => 61,  176 => 56,  170 => 55,  166 => 54,  157 => 48,  154 => 47,  151 => 46,  148 => 45,  145 => 44,  142 => 43,  139 => 42,  136 => 41,  131 => 38,  128 => 37,  126 => 36,  117 => 30,  112 => 29,  106 => 26,  101 => 25,  99 => 24,  96 => 23,  94 => 22,  88 => 19,  82 => 15,  79 => 14,  75 => 12,  62 => 11,  56 => 10,  42 => 9,  38 => 1,  36 => 7,  34 => 5,  32 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-set/explore.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-set\\explore.html.twig");
    }
}
