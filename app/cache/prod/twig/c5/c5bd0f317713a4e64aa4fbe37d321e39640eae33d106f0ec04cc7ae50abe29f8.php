<?php

/* task-manage/item/default-list-item.html.twig */
class __TwigTemplate_b359f7604f9ee58d463aa8b237183a26c931e1872cad4cd8d50ba440b8888023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["chapter"] = (isset($context["task"]) ? $context["task"] : null);
        // line 2
        echo "<li class=\"task-manage-item js-task-manage-item drag clearfix \" id=\"chapter-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $context["tasks"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayIndex($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "tasks", array()), "mode");
        // line 4
        echo "  ";
        $context["task"] = (($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "lesson", array()), null)) : (null));
        // line 5
        echo "  <div class=\"item-default-header clearfix\">
    <div class=\"item-line\"></div>
    <div class=\"item-content text-overflow js-item-content\">
      <i class=\"mrm es-icon 
        ";
        // line 9
        if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "mediaType", array()))) {
            echo " 
          ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "mediaType", array())), "icon", array()), "html", null, true);
            echo "  
        ";
        }
        // line 11
        echo "\">
      </i>

      ";
        // line 14
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()) == 0)) {
            // line 15
            echo "        <span class=\"label label-info mrm\">选修</span>
      ";
        } else {
            // line 17
            echo "        任务<span class=\"number\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()), "html", null, true);
            echo "</span>：
      ";
        }
        // line 19
        echo "
      ";
        // line 20
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), 30);
        echo "
      ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "mediaType", array()) === "live")) {
            // line 22
            echo "        ";
            if ( !(($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array(), "any", false, true), "ext", array(), "any", false, true), "roomCreated", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array(), "any", false, true), "ext", array(), "any", false, true), "roomCreated", array()), true)) : (true))) {
                // line 23
                echo "          <span class=\"color-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑以创建直播教室"), "html", null, true);
                echo "</span>
        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 24
(isset($context["task"]) ? $context["task"] : null), "activity", array()), "endTime", array()) < $this->getAttribute(twig_date_converter($this->env), "timestamp", array()))) {
                // line 25
                echo "          <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播已经结束"), "html", null, true);
                echo "</span>
        ";
            } else {
                // line 27
                echo "          <span class=\"color-success mls\">
          ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "startTime", array()), "Y-n-j H:i")), "html", null, true);
                echo " ~ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "endTime", array()), "H:i")), "html", null, true);
                echo "</span>
        ";
            }
            // line 30
            echo "      ";
        } else {
            // line 31
            echo "        ";
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->lengthFormat($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "length", array()))) {
                echo "<span class=\"color-gray mls\">
          （";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ActivityExtension')->lengthFormat($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "length", array())), "html", null, true);
                echo "）</span>";
            }
            // line 33
            echo "      ";
        }
        // line 34
        echo "      <span class=\"color-warning publish-status 
        ";
        // line 35
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "status", array()) == "published")) {
            // line 36
            echo "          hidden 
        ";
        }
        // line 37
        echo "\">
         (未发布)
      </span>
    </div>
    <div class=\"item-actions\">
      <a class=\"btn gray-darker\" data-role='update-task' href=\"javascript:;\" 
        data-toggle=\"modal\" data-target=\"#modal\"
        data-url=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "type" => "lesson")), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-edit mrs\"></i>编辑
      </a>
      <a class=\"btn gray-darker\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "preview" => 1)), "html", null, true);
        echo "\"
        target=\"_blank\"><i class=\"es-icon es-icon-removeredeye mrs\"></i>预览</a>
      <span class=\"dropdown\">
        <a class=\"dropdown-toggle dropdown-more btn gray-darker\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"es-icon es-icon-keyboardarrowdown mrs\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "
        </a>
        <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\"
          aria-labelledby=\"dLabel\" style=\"display:none;\">
          ";
        // line 55
        if ((($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()) == "video") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 56
            echo "            ";
            $context["file"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array(), "any", false, true), "ext", array(), "any", false, true), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array(), "any", false, true), "ext", array(), "any", false, true), "file", array()), null)) : (null));
            // line 57
            echo "
            ";
            // line 58
            if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), null)) : (null)) == "cloud")) {
                // line 59
                echo "              <li class=\"mark-manage\">
            <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_marker_manage", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "taskId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" class=\"manage-lesson-marker-btn\" >
            <span class=\"glyphicon glyphicon-list prs\"></span>";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("弹题管理"), "html", null, true);
                echo "
            </a>
            </li>
              <li class=\"divider mark-manage-divider\" style=\"display:none;\"></li>
            ";
            }
            // line 66
            echo "          ";
        }
        // line 67
        echo "
          ";
        // line 68
        if (((($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "status", array()), "create")) : ("create")) == "published")) {
            // line 69
            echo "            ";
            $context["status"] = 1;
            // line 70
            echo "          ";
        } else {
            // line 71
            echo "            ";
            $context["status"] = 0;
            // line 72
            echo "          ";
        }
        // line 73
        echo "            <li>
            <a class='unpublish-item ";
        // line 74
        if (((isset($context["status"]) ? $context["status"] : null) != 1)) {
            echo "hidden";
        }
        echo "' href=\"javascript:;\" data-type=\"task\"
              data-url=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_unpublish", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-close01 mrm\"></i>取消发布
            </a>
          </li>
            <li>
              <a class='publish-item ";
        // line 80
        if (((isset($context["status"]) ? $context["status"] : null) == 1)) {
            echo "hidden";
        }
        echo "' href=\"javascript:;\" data-type=\"task\"
                data-url=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_publish", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()))), "html", null, true);
        echo "\">
                <i class=\"es-icon es-icon--check-circle mrm\"></i>发布
              </a>
            </li>
            <li>
            <a class='delete-item ";
        // line 86
        if (((isset($context["status"]) ? $context["status"] : null) == 1)) {
            echo "hidden";
        }
        echo "' href=\"javascript:;\" data-type=\"task\"
              data-url=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_delete", array("taskId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-delete mrm\"></i>删除
            </a>
          </li>
        </ul>
      </span>
    </div>
  </div>
  <div class=\"settings-list js-settings-list clearfix\">
    <div class=\"settings-item ";
        // line 96
        if ((($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array()), null)) : (null))) {
            echo " active ";
        }
        echo "\">
      <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" 
        data-backdrop=\"static\" data-keyboard=\"false\"
        data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\" 
        ";
        // line 100
        if ( !(($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array()), null)) : (null))) {
            // line 101
            echo "          data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员可通过看视频、阅读资料等预习任务，导入学习。"), "html", null, true);
            echo "\"
          data-url=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "preparation", "categoryId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\">
        ";
        } else {
            // line 104
            echo "          data-content=\"<i class='mr10 es-icon 
            ";
            // line 105
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array()), "type", array()))) {
                echo " 
              ";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array()), "type", array())), "icon", array()), "html", null, true);
                echo "  
            ";
            }
            // line 107
            echo "'></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array()), "title", array())), "html", null, true);
            echo "\"
          data-url= \"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array()), "id", array()), "courseId" => $this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array()), "courseId", array()), "type" => "preparation", "categoryId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\">
        ";
        }
        // line 110
        echo "        <i class=\"mrm es-icon es-icon-yulan \" 
          ";
        // line 111
        if ((($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "preparation", array(), "any", false, true), "id", array()), null)) : (null))) {
            // line 112
            echo "            data-role=\"task\"
          ";
        }
        // line 113
        echo ">
        </i>
        预习
      </a>
      <i class=\"es-icon es-icon-angledoubleright after\"></i>
    </div>
    <div class=\"settings-item js-settings-item active\">
      <a href=\"javascript:;\" data-role='update-task' 
        data-url=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "type" => "lesson")), "html", null, true);
        echo "\"
        data-toggle=\"modal\" data-target=\"#modal\"
        data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\"
        data-content=\"<i class='mr10 es-icon 
          ";
        // line 125
        if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "mediaType", array()))) {
            echo " 
            ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "mediaType", array())), "icon", array()), "html", null, true);
            echo "  
          ";
        }
        // line 127
        echo " '></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array())), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-book mrm\" data-role=\"task\"></i>
        任务学习
      </a>
      <i class=\"es-icon es-icon-angledoubleright after\"></i>
    </div>
    <div class=\"settings-item ";
        // line 133
        if ((($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array()), null)) : (null))) {
            echo " active ";
        }
        echo "\">
      <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
        data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\"  
        ";
        // line 136
        if ( !(($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array()), null)) : (null))) {
            // line 137
            echo "          data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("练习的设置包括做题在内的多种形式。"), "html", null, true);
            echo "\"
          data-url=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "exercise", "categoryId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\">
        ";
        } else {
            // line 140
            echo "          data-content=\"<i class='mr10 es-icon 
            ";
            // line 141
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array()), "type", array()))) {
                // line 142
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array()), "type", array())), "icon", array()), "html", null, true);
                echo "  
            ";
            }
            // line 144
            echo "          '></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array()), "title", array())), "html", null, true);
            echo "\"
          data-url=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array()), "id", array()), "courseId" => $this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array()), "courseId", array()), "type" => "exercise", "categoryId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\">
        ";
        }
        // line 147
        echo "        <i class=\"es-icon es-icon-mylibrarybooks mrm\" ";
        if ((($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "exercise", array(), "any", false, true), "id", array()), null)) : (null))) {
            echo "data-role=\"task\"";
        }
        echo "></i>
        练习
      </a>
      <i class=\"es-icon es-icon-angledoubleright after\"></i>
    </div>
    <div class=\"settings-item ";
        // line 152
        if ((($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array()), null)) : (null))) {
            echo " active ";
        }
        echo "\">
      <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" 
        data-backdrop=\"static\" data-keyboard=\"false\"
        data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\" 
        ";
        // line 156
        if ( !(($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array()), null)) : (null))) {
            // line 157
            echo "          data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作业的设置包括做题在内的多种形式。"), "html", null, true);
            echo "\"
          data-url=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "homework", "categoryId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\">
        ";
        } else {
            // line 160
            echo "          data-content=\"<i class='mr10 es-icon 
            ";
            // line 161
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array()), "type", array()))) {
                // line 162
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array()), "type", array())), "icon", array()), "html", null, true);
                echo "
            ";
            }
            // line 164
            echo "          '></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array()), "title", array())), "html", null, true);
            echo "\"
          data-url=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array()), "id", array()), "courseId" => $this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array()), "courseId", array()), "type" => "homework", "categoryId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\">
        ";
        }
        // line 167
        echo "        <i class=\"es-icon es-icon-zuoye mrm\" ";
        if ((($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "homework", array(), "any", false, true), "id", array()), null)) : (null))) {
            echo "data-role=\"task\"";
        }
        echo "></i>
        作业
      </a>
      <i class=\"es-icon es-icon-angledoubleright after\"></i>
    </div>
    <div class=\"settings-item ";
        // line 172
        if ((($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array()), null)) : (null))) {
            echo " active ";
        }
        echo "\">
      <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" 
        data-backdrop=\"static\" data-keyboard=\"false\"
        data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\" 
        ";
        // line 176
        if ( !(($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array()), null)) : (null))) {
            // line 177
            echo "          data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员可通过课外阅读、课外作业等，扩展学习。"), "html", null, true);
            echo "\"
          data-url=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "extraClass", "categoryId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\">
        ";
        } else {
            // line 180
            echo "          data-content=\"<i class='mr10 es-icon 
          ";
            // line 181
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array()), "type", array()))) {
                // line 182
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array()), "type", array())), "icon", array()), "html", null, true);
                echo " 
          ";
            }
            // line 184
            echo "          '></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array()), "title", array())), "html", null, true);
            echo "\"
          data-url=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array()), "id", array()), "courseId" => $this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array()), "courseId", array()), "type" => "extraClass", "categoryId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\">
        ";
        }
        // line 187
        echo "        <i class=\"es-icon es-icon-sun mrm\" ";
        if ((($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "extraClass", array(), "any", false, true), "id", array()), null)) : (null))) {
            echo "data-role=\"task\"";
        }
        echo "></i>
        课外
      </a>
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "task-manage/item/default-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 187,  475 => 185,  470 => 184,  464 => 182,  462 => 181,  459 => 180,  454 => 178,  449 => 177,  447 => 176,  438 => 172,  427 => 167,  422 => 165,  417 => 164,  411 => 162,  409 => 161,  406 => 160,  401 => 158,  396 => 157,  394 => 156,  385 => 152,  374 => 147,  369 => 145,  364 => 144,  358 => 142,  356 => 141,  353 => 140,  348 => 138,  343 => 137,  341 => 136,  333 => 133,  323 => 127,  318 => 126,  314 => 125,  307 => 121,  297 => 113,  293 => 112,  291 => 111,  288 => 110,  283 => 108,  278 => 107,  273 => 106,  269 => 105,  266 => 104,  261 => 102,  256 => 101,  254 => 100,  245 => 96,  233 => 87,  227 => 86,  219 => 81,  213 => 80,  205 => 75,  199 => 74,  196 => 73,  193 => 72,  190 => 71,  187 => 70,  184 => 69,  182 => 68,  179 => 67,  176 => 66,  168 => 61,  164 => 60,  161 => 59,  159 => 58,  156 => 57,  153 => 56,  151 => 55,  144 => 51,  137 => 47,  131 => 44,  122 => 37,  118 => 36,  116 => 35,  113 => 34,  110 => 33,  106 => 32,  101 => 31,  98 => 30,  91 => 28,  88 => 27,  82 => 25,  80 => 24,  75 => 23,  72 => 22,  70 => 21,  66 => 20,  63 => 19,  57 => 17,  53 => 15,  51 => 14,  46 => 11,  41 => 10,  37 => 9,  31 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task-manage/item/default-list-item.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task-manage\\item\\default-list-item.html.twig");
    }
}
