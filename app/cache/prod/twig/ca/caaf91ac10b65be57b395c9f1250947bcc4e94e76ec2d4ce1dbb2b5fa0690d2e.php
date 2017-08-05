<?php

/* my/layout.html.twig */
class __TwigTemplate_dd421e58e389d1151806e7cbce0a32932329933d18ec6e2549422a53effa6f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "my/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'main_mobile' => array($this, 'block_main_mobile'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (twig_in_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), array(0 => "my-teaching-courses", 1 => "my-teaching-classroom", 2 => "my-teaching-questions", 3 => "my-teaching-discussions", 4 => "my-teaching-check", 5 => "my-teaching-homework-check", 6 => "material-lib"))) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
  ";
        }
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:My/User:avatarAlert"));
        echo "

  <div class=\"row row-3-9 my-layout\">
    <div class=\"col-md-3\">
      <div class=\"sidenav\">
        ";
        // line 18
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Point")) {
            // line 19
            echo "          <ul class=\"list-group\">
            <li class=\"list-group-heading\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的网校"), "html", null, true);
            echo "</li>
            <li class=\"list-group-item
           ";
            // line 22
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "growth")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的成长"), "html", null, true);
            echo "</a>
            </li>
          </ul>
        ";
        }
        // line 27
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method")) {
            // line 28
            echo "          <ul class=\"list-group\">
            <li class=\"list-group-heading\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
            echo "</li>
            <li class=\"list-group-item ";
            // line 30
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-courses")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
            echo "</a>
            </li>

            <li class=\"list-group-item ";
            // line 34
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-classroom")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_classrooms");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所教"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
            echo "
              </a>
            </li>

            <li class=\"list-group-item ";
            // line 39
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-questions")) {
                echo "active ";
            }
            echo "\">
              <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_threads", array("type" => "question"));
            echo "\">
                ";
            // line 41
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问答"), "html", null, true);
            echo "
              </a>
            </li>
            <li class=\"list-group-item ";
            // line 44
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-discussions")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_threads", array("type" => "discussion"));
            echo "\">";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("话题"), "html", null, true);
            echo "</a>
            </li>

            <li class=\"list-group-item ";
            // line 48
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-testpaper-check")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_testpaper_check_list", array("status" => "reviewing"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷批阅"), "html", null, true);
            echo "</a>
            </li>

            <li class=\"list-group-item ";
            // line 52
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-homework-check")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homework_check_list", array("status" => "reviewing"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作业批阅"), "html", null, true);
            echo "</a>
            </li>

            <li class=\"list-group-item ";
            // line 56
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "material-lib")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_browsing");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教学资料库"), "html", null, true);
            echo "</a>
            </li>
          </ul>
        ";
        }
        // line 61
        echo "
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 64
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-learning")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的课程"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 68
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-classroom")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_classrooms");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "</a>
          </li>

          ";
        // line 72
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 73
            echo "            <li class=\"list-group-item
          ";
            // line 74
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-learning-live")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_live_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的直播"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 78
        echo "
          <li class=\"list-group-item
        ";
        // line 80
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-questions")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_questions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的问答"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 84
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-discussions")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的话题"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 88
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-notes")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_notebooks");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的笔记"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 92
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-homework")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homework_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的作业"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 96
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-testpaper")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_testpaper_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 100
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-group")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_group_member_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的小组"), "html", null, true);
        echo "</a>
          </li>
        </ul>
      </div>
    </div>
    <div class=\"col-md-9\">";
        // line 106
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
  </div>

  ";
        // line 109
        $this->displayBlock('main_mobile', $context, $blocks);
        // line 110
        echo "
";
    }

    // line 106
    public function block_main($context, array $blocks = array())
    {
    }

    // line 109
    public function block_main_mobile($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "my/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 109,  371 => 106,  366 => 110,  364 => 109,  358 => 106,  348 => 101,  342 => 100,  334 => 97,  328 => 96,  320 => 93,  314 => 92,  306 => 89,  300 => 88,  292 => 85,  286 => 84,  278 => 81,  272 => 80,  268 => 78,  260 => 75,  254 => 74,  251 => 73,  249 => 72,  241 => 69,  235 => 68,  227 => 65,  221 => 64,  217 => 63,  213 => 61,  204 => 57,  198 => 56,  190 => 53,  184 => 52,  176 => 49,  170 => 48,  157 => 45,  151 => 44,  144 => 41,  140 => 40,  134 => 39,  124 => 35,  118 => 34,  110 => 31,  104 => 30,  100 => 29,  97 => 28,  94 => 27,  85 => 23,  79 => 22,  74 => 20,  71 => 19,  69 => 18,  61 => 13,  58 => 12,  55 => 11,  45 => 7,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\my\\layout.html.twig");
    }
}
