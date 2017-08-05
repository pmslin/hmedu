<?php

/* task/show.html.twig */
class __TwigTemplate_41fa6a56a945492fbd7923b737010d898f1fff809cc7cc2a92f8d5faf56baeae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "task/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "";
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/perfect-scrollbar.js", 1 => "libs/es-ckeditor/ckeditor.js", 2 => "app/js/task/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务学习"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $context["preview"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "preview"), "method");
        // line 10
        echo "
  ";
        // line 11
        if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "student")) : ("student")) == "teacher")) {
            // line 12
            echo "    ";
            $context["preview"] = true;
            // line 13
            echo "  ";
        }
        // line 14
        echo "
  <div id=\"js-hidden-data\">
    <input type=\"hidden\" name=\"course-id\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"task-id\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"task-result-status\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taskResult"]) ? $context["taskResult"] : null), "status", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"mode\" value=\"";
        // line 19
        if ((isset($context["preview"]) ? $context["preview"] : null)) {
            echo "preview";
        } else {
            echo "learn";
        }
        echo "\">
    <input type=\"hidden\" name=\"plugins_url\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show_plugins", array("courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "taskId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\">
  </div>

  <div class=\"task-dashboard-page js-task-dashboard-page\">
    <div class=\"dashboard-content\" id=\"dashboard-content\">
      <div class=\"dashboard-header\">
        <a class=\"back-link\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
          <i class=\"es-icon es-icon-chevronleft\"></i>返回课程
        </a>
        任务";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "number", array()), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
        echo "
      </div>
      <div class=\"dashboard-body\">
        <div class=\"";
        // line 32
        if (twig_in_filter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()), array(0 => "exercise", 1 => "homework", 2 => "testpaper"))) {
            echo " mobile-scroll-wrapper ";
        }
        echo " all-wrapper\">
          <iframe id=\"task-content-iframe\" class=\"task-content-iframe\"
                  data-event-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_trigger", array("courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\"
                  data-last-time=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo "\"
                  src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_activity_show", array("courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "preview" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "preview"), "method"))), "html", null, true);
        echo "\"
                  style=\"width:100%;height:100%;border:0px\"
                  allowfullscreen webkitallowfullscreen>
          </iframe>
        </div>
      </div>

      <div class=\"dashboard-footer\">
        <div class=\"btn-group pull-left visible-xs js-mobile-btn\" role=\"group\">
          <a class=\"btn btn-default  ";
        // line 45
        if ( !((array_key_exists("previousTask", $context)) ? (_twig_default_filter((isset($context["previousTask"]) ? $context["previousTask"] : null), null)) : (null))) {
            echo " disabled ";
        }
        echo "\"
             ";
        // line 46
        if (((array_key_exists("previousTask", $context)) ? (_twig_default_filter((isset($context["previousTask"]) ? $context["previousTask"] : null), null)) : (null))) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["previousTask"]) ? $context["previousTask"] : null), "id", array()))), "html", null, true);
            echo "\" ";
        }
        echo "><strong class=\"es-icon es-icon-chevronleft text-xlg\"></strong></a>
         ";
        // line 47
        $context["task_disable"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learnMode", array()) == "lockMode") && ($this->getAttribute((isset($context["taskResult"]) ? $context["taskResult"] : null), "status", array()) != "finish"));
        // line 48
        echo "          <a class=\"btn btn-default js-next-mobile-btn  ";
        if ( !((array_key_exists("nextTask", $context)) ? (_twig_default_filter((isset($context["nextTask"]) ? $context["nextTask"] : null), null)) : (null))) {
            echo " disabled  ";
        }
        echo "\"
             ";
        // line 49
        if ((isset($context["task_disable"]) ? $context["task_disable"] : null)) {
            // line 50
            echo "               data-toggle=\"popover\"
               data-trigger=\"hover\"
               data-placement=\"top\"
               data-content='请先学完当前课程'
             ";
        }
        // line 55
        echo "              ";
        if (((array_key_exists("nextTask", $context)) ? (_twig_default_filter((isset($context["nextTask"]) ? $context["nextTask"] : null), null)) : (null))) {
            // line 56
            echo "                ";
            if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learnMode", array()) == "lockMode") && ($this->getAttribute((isset($context["taskResult"]) ? $context["taskResult"] : null), "status", array()) != "finish"))) {
                // line 57
                echo "                  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["nextTask"]) ? $context["nextTask"] : null), "id", array()))), "html", null, true);
                echo "\"
                ";
            } else {
                // line 59
                echo "                  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["nextTask"]) ? $context["nextTask"] : null), "id", array()))), "html", null, true);
                echo "\"
                ";
            }
            // line 61
            echo "              ";
        }
        echo "><strong class=\"es-icon es-icon-chevronright text-xlg\"></strong></a>
        </div>
        <div class=\"state-opration js-state-opration\" data-learnmode=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learnMode", array()), "freeMode")) : ("freeMode")), "html", null, true);
        echo "\">
          <a class=\"btn btn-gray text-sm ";
        // line 64
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()) == "video")) {
            echo " hidden-xs";
        }
        echo " js-learn-prompt ";
        if (($this->getAttribute((isset($context["taskResult"]) ? $context["taskResult"] : null), "status", array()) != "finish")) {
            echo "open";
        }
        echo "\"
            href=\"javascript:;\"
            data-toggle=\"popover\"
            data-trigger=\"hover\"
            data-placement=\"top\"
            data-content='";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Task:finishCondition", array("task" => (isset($context["task"]) ? $context["task"] : null))));
        echo "'>
            <i class=\"es-icon es-icon-help mrs text-md\"></i>任务完成条件
          </a>
          <span class=\"btn text-sm";
        // line 72
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()) == "video")) {
            echo " hidden-xs";
        }
        echo " js-learned-prompt color-primary ";
        if (($this->getAttribute((isset($context["taskResult"]) ? $context["taskResult"] : null), "status", array()) == "finish")) {
            echo "open";
        }
        echo "\"
              href=\"javascript:;\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"top\"
              data-container=\".js-learned-prompt\"
              data-content='";
        // line 78
        $this->loadTemplate("task/task-finished-prompt.html.twig", "task/show.html.twig", 78)->display($context);
        echo "'
              data-url=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_finished_prompt", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-iccheckcircleblack24px mrs text-md\"></i>任务完成
          </span>
        </div>
        ";
        // line 83
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array()), 0)) : (0)) == 1)) {
            // line 84
            echo "          <a type=\"button\" href=\"javascript:;\"
            ";
            // line 85
            if (($this->getAttribute((isset($context["taskResult"]) ? $context["taskResult"] : null), "status", array()) != "finish")) {
                // line 86
                echo "              class=\"btn btn-transparent btn-learn js-btn-learn\"
              id='learn-btn'
              data-url='";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_finish", array("courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
                echo "'
            ";
            } else {
                // line 90
                echo "              class=\"btn btn-transparent btn-learn js-btn-learn active\"
            ";
            }
            // line 91
            echo ">
              <i class=\"es-icon es-icon--check-circle done\"></i>
              <i class=\"es-icon es-icon-undone-check doing\"></i>
            学过了
          </a>
        ";
        }
        // line 97
        echo "
      </div>
    </div>
    <div class=\"dashboard-sidebar hidden-xs\" id=\"dashboard-sidebar\">

    </div>
  </div>

  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
    ";
        // line 108
        $this->loadTemplate("event_report.html.twig", "task/show.html.twig", 108)->display(array_merge($context, array("eventName" => "task.view", "subjectType" => "courseMember", "subjectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "eventReportParams" => array())));
    }

    public function getTemplateName()
    {
        return "task/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 108,  277 => 105,  267 => 97,  259 => 91,  255 => 90,  250 => 88,  246 => 86,  244 => 85,  241 => 84,  239 => 83,  232 => 79,  228 => 78,  213 => 72,  207 => 69,  193 => 64,  189 => 63,  183 => 61,  177 => 59,  171 => 57,  168 => 56,  165 => 55,  158 => 50,  156 => 49,  149 => 48,  147 => 47,  139 => 46,  133 => 45,  121 => 36,  117 => 35,  113 => 34,  106 => 32,  98 => 29,  92 => 26,  83 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 14,  56 => 13,  53 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task\\show.html.twig");
    }
}
