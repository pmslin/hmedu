<?php

/* course-manage/tasks/default-tasks.html.twig */
class __TwigTemplate_6cb1419507e878110b30709ebd75939679f8d10d8dc6e72f345a54f8b65e2ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/tasks/layout.html.twig", "course-manage/tasks/default-tasks.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/tasks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-sortable.js", 1 => "app/js/course-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"panel panel-default\">
    ";
        // line 6
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/tasks/default-tasks.html.twig", 6)->display(array_merge($context, array("code" => (isset($context["side_nav"]) ? $context["side_nav"] : null))));
        // line 7
        echo "    <div class=\"panel-body\">
      <div class=\"task-list-header clearfix js-task-list-header\">
        任务总数：<span class=\"color-warning space\" id=\"task-num\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "taskNum", array()), "html", null, true);
        echo "</span>  ";
        if (((array_key_exists("taskPerDay", $context)) ? (_twig_default_filter((isset($context["taskPerDay"]) ? $context["taskPerDay"] : null), false)) : (false))) {
            echo "日均约需完成：<span class=\"color-warning\">";
            echo twig_escape_filter($this->env, (isset($context["taskPerDay"]) ? $context["taskPerDay"] : null), "html", null, true);
            echo "</span> 个任务";
        }
        // line 10
        echo "        <div class=\"pull-right\">
          <button class=\"btn btn-primary btn-sm\" id=\"step-3\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lesson")), "html", null, true);
        echo "\"> <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
            任务
          </button>
          ";
        // line 14
        if (((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()), "")) : ("")) == "normal")) {
            // line 15
            echo "          <button class=\"btn btn-info btn-sm js-batch-add
            ";
            // line 16
            if ( !(((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()), "")) : ("")) == "normal") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
                // line 17
                echo "            disabled
            ";
            }
            // line 18
            echo "\"
            ";
            // line 19
            if ( !(((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()), "")) : ("")) == "normal") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
                // line 20
                echo "              data-toggle=\"popover\" data-placement=\"top\" data-trigger=\"hover\" data-container=\".js-batch-add\"
              data-content='批量创建课时需要开通云视频服务，点击<a target=\"__blank\" href=\"http://open.edusoho.com/show/cloud/video\">这里</a>了解详情'
            ";
            } else {
                // line 23
                echo "              data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
              data-url=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_batch_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "mode" => "lesson", "token" => $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken("course-task", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "private"))), "html", null, true);
                echo "\"
            ";
            }
            // line 25
            echo ">
            <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
            批量添加
          </button>
          ";
        }
        // line 30
        echo "          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
              ";
        // line 33
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
        echo "
              <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li>
                <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"
                  data-keyboard=\"false\" data-url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加%chapter_name%", array("%chapter_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")))), "html", null, true);
        echo "
                </a>
              </li>
              <li>
                <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"
                  data-keyboard=\"false\" data-url=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "unit")), "html", null, true);
        echo "\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加%part_name%", array("%part_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), "节"))), "html", null, true);
        echo "
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul id=\"sortable-list\" class=\"task-manage-list sortable-list\"
          data-sort-url='";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_items_sort", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "'>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 58
            echo "          ";
            if (($this->getAttribute($context["item"], "type", array()) == "lesson")) {
                // line 59
                echo "            ";
                $this->loadTemplate("task-manage/item/default-list-item.html.twig", "course-manage/tasks/default-tasks.html.twig", 59)->display(array_merge($context, array("task" => $context["item"])));
                // line 60
                echo "          ";
            } else {
                // line 61
                echo "            ";
                $this->loadTemplate("course-manage/chapter/list-item.html.twig", "course-manage/tasks/default-tasks.html.twig", 61)->display(array_merge($context, array("chapter" => $context["item"], "course" => (isset($context["course"]) ? $context["course"] : null))));
                // line 62
                echo "          ";
            }
            // line 63
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "      </ul>
      <div class=\"empty task-empty js-task-empty ";
        // line 65
        if ((isset($context["items"]) ? $context["items"] : null)) {
            echo "  hidden ";
        }
        echo "\">
        <i class=\"es-icon es-icon-book task-empty-icon\"></i>
        什么都没有，快去添加一个学习任务!
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/tasks/default-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 65,  191 => 64,  177 => 63,  174 => 62,  171 => 61,  168 => 60,  165 => 59,  162 => 58,  145 => 57,  141 => 56,  130 => 48,  125 => 46,  117 => 41,  112 => 39,  101 => 33,  96 => 30,  89 => 25,  84 => 24,  81 => 23,  76 => 20,  74 => 19,  71 => 18,  67 => 17,  65 => 16,  62 => 15,  60 => 14,  54 => 11,  51 => 10,  43 => 9,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/tasks/default-tasks.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course-manage\\tasks\\default-tasks.html.twig");
    }
}
