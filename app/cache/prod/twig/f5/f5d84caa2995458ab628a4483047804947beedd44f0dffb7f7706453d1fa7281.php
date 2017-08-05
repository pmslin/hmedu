<?php

/* question-manage/question-form-layout.html.twig */
class __TwigTemplate_8f53a27b0af5e6147a3e89038a3e2dab5bbc1d1f0c29515648948ed106514a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "question-manage/question-form-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
            'question_buttons' => array($this, 'block_question_buttons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["side_nav"] = "question";
        // line 8
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "app/js/question-manage/form/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (((array_key_exists("question", $context)) ? (_twig_default_filter((isset($context["question"]) ? $context["question"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑题目"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加题目"), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $context["parentQuestion"] = ((array_key_exists("parentQuestion", $context)) ? (_twig_default_filter((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), null)) : (null));
        // line 13
        $context["questionTypesDict"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 14
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading clearfix\">
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目管理"), "html", null, true);
        echo "
  </div>
  <div class=\"panel-body\">

    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目管理"), "html", null, true);
        echo "</a></li>
      ";
        // line 23
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 24
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "parentId" => $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "type", array()), array(), "array"), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 26
        echo "      <li>";
        if (((array_key_exists("question", $context)) ? (_twig_default_filter((isset($context["question"]) ? $context["question"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑题目"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加题目"), "html", null, true);
        }
        echo " </li>
      <li class=\"active\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
        echo "</li>
    </ol>

    <div id=\"question-creator-widget\">
      <form id=\"question-create-form\" data-role=\"question-form\" class=\"form-horizontal quiz-question\" method=\"post\" action=\"";
        // line 31
        if (((array_key_exists("question", $context)) ? (_twig_default_filter((isset($context["question"]) ? $context["question"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_update", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "goto" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "goto"), "method"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_create", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "type" => (isset($context["type"]) ? $context["type"] : null), "parentId" => (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)), "goto" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "goto"), "method"))), "html", null, true);
        }
        echo "\">

        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        ";
        // line 35
        if ( !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 36
            echo "          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从属"), "html", null, true);
            echo "</label></div>
            <div class=\"col-md-8 controls\">
              <select class=\"form-control width-150\" name=\"courseId\" data-role=\"courseId\" data-url=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_show_tasks", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
            echo "\">
                <option value=\"0\" ";
            // line 40
            if ( !(($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array()), 0)) : (0))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("本课程"), "html", null, true);
            echo "</option>
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                if ($context["course"]) {
                    // line 42
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                    echo "\" ";
                    if (((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array()), 0)) : (0)) == $this->getAttribute($context["course"], "id", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "</option>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "              </select>
              <select class=\"form-control width-150\" ";
            // line 45
            if ((( !(($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), 0)) : (0)) > 0) ||  !(($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array()), 0)) : (0)))) {
                echo "style=\"display:none;\"";
            }
            echo " name=\"lessonId\" data-role=\"lessonId\">
                <option value=\"0\" ";
            // line 46
            if ( !(($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "lessonId", array()), 0)) : (0))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请选择"), "html", null, true);
            echo "</option>
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("courseTasks", $context)) ? (_twig_default_filter((isset($context["courseTasks"]) ? $context["courseTasks"] : null), array())) : (array())));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                if ($context["task"]) {
                    // line 48
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                    echo "\" ";
                    if (((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "lessonId", array()), 0)) : (0)) == $this->getAttribute($context["task"], "id", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                    echo "</option>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "              </select>
              <div class=\"help-block\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("可以针对本课程、某个教学计划或者某个学习任务出题"), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 55
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("难度"), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 59
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("difficulty", array("simple" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("简单"), "normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("一般"), "difficulty" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("困难")), (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "difficulty", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "difficulty", array()), "normal")) : ("normal")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label for=\"question-stem-field\" class=\"control-label-required\">";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("question_stem_label", $context)) ? (_twig_default_filter((isset($context["question_stem_label"]) ? $context["question_stem_label"] : null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题干"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题干"))), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls\">
            <textarea class=\"form-control\" id=\"question-stem-field\" data-image-upload-url=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\"  data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" name=\"stem\" style=\"height:180px;\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            ";
        // line 67
        $context["question_stem_help"] = ((array_key_exists("question_stem_help", $context)) ? (_twig_default_filter((isset($context["question_stem_help"]) ? $context["question_stem_help"] : null), "")) : (""));
        // line 68
        echo "            ";
        if ((isset($context["question_stem_help"]) ? $context["question_stem_help"] : null)) {
            echo "<div class=\"help-block\">";
            echo (isset($context["question_stem_help"]) ? $context["question_stem_help"] : null);
            echo "</div>";
        }
        // line 69
        echo "          </div>
        </div>
        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:File/Attachment:formFields", array("targetType" => "question.stem", "useType" => true, "targetId" => (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), 0)) : (0))), array("useType" => true)));
        echo "


        ";
        // line 74
        $this->displayBlock('question_extra_fields', $context, $blocks);
        // line 75
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-8 col-md-offset-2 controls \">
              <a href=\"javascript:;\" data-toggle=\"collapse\" data-role=\"advanced-collapse\" data-target=\"#advanced-collapse\" class=\"color-success collapsed\">&raquo; ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("显示/隐藏 高级选项"), "html", null, true);
        echo " ...</a>
          </div>
        </div>

        <div id=\"advanced-collapse\" class=\"advanced-collapse collapse\">
          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"question-analysis-field\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("解析"), "html", null, true);
        echo "</label></div>
            <div class=\"col-md-8 controls\">
                <textarea class=\"form-control\" id=\"question-analysis-field\" data-image-upload-url=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" name=\"analysis\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            </div>
          </div>
           ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:File/Attachment:formFields", array("targetType" => "question.analysis", "targetId" => (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), 0)) : (0))), array("useType" => true)));
        echo "
          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"question-score-field\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分值"), "html", null, true);
        echo "</label></div>
            <div class=\"col-md-4 controls\">
              <input class=\"form-control\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()), 2)) : (2)), "html", null, true);
        echo "\" type=\"text\" id=\"question-score-field\" name=\"score\" />
            </div>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-8 col-md-offset-2 controls\">
            ";
        // line 100
        $this->displayBlock('question_buttons', $context, $blocks);
        // line 106
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "parentId" => (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\" class=\"btn btn-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("返回"), "html", null, true);
        echo "</a>
          </div>
        </div>

        <input type=\"hidden\" name=\"submission\">
        <input type=\"hidden\" name=\"type\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"parentId\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>
    </div>

  </div>
</div>


";
    }

    // line 74
    public function block_question_extra_fields($context, array $blocks = array())
    {
    }

    // line 100
    public function block_question_buttons($context, array $blocks = array())
    {
        // line 101
        echo "              ";
        if ( !((array_key_exists("question", $context)) ? (_twig_default_filter((isset($context["question"]) ? $context["question"] : null), null)) : (null))) {
            // line 102
            echo "                <button type=\"button\" data-role=\"submit\" class=\"btn btn-primary submit-btn\" data-submission=\"continue\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
            echo "...\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存并继续添加"), "html", null, true);
            echo "</button>
              ";
        }
        // line 104
        echo "              <button type=\"button\" data-role=\"submit\" class=\"btn btn-primary submit-btn\" data-submission=\"submit\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
        echo "...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
            ";
    }

    public function getTemplateName()
    {
        return "question-manage/question-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 104,  358 => 102,  355 => 101,  352 => 100,  347 => 74,  333 => 113,  329 => 112,  325 => 111,  314 => 106,  312 => 100,  302 => 93,  297 => 91,  292 => 89,  282 => 86,  277 => 84,  268 => 78,  263 => 75,  261 => 74,  255 => 71,  251 => 69,  244 => 68,  242 => 67,  234 => 66,  229 => 64,  221 => 59,  216 => 57,  212 => 55,  205 => 51,  202 => 50,  186 => 48,  181 => 47,  173 => 46,  167 => 45,  164 => 44,  148 => 42,  143 => 41,  135 => 40,  131 => 39,  126 => 37,  123 => 36,  121 => 35,  116 => 33,  107 => 31,  100 => 27,  91 => 26,  83 => 24,  81 => 23,  75 => 22,  67 => 17,  62 => 14,  60 => 13,  58 => 12,  55 => 11,  52 => 10,  39 => 4,  36 => 3,  32 => 1,  30 => 8,  28 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/question-form-layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\question-form-layout.html.twig");
    }
}
