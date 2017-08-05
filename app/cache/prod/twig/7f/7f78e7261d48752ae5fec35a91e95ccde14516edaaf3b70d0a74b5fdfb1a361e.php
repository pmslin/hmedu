<?php

/* course/thread/form.html.twig */
class __TwigTemplate_4acadc8e12125b45b73cab75016996df76a0231d5f40bc39454453d3db03e5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/course-show.html.twig", "course/thread/form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'detail_content' => array($this, 'block_detail_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/course-show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "app/js/course/thread-form/index.js"));
        // line 6
        $context["nav"] = "threads";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑话题"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发表话题"), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_detail_content($context, array $blocks = array())
    {
        // line 9
        echo "  <ul class=\"breadcrumb\">
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "tab" => "threads")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("讨论区"), "html", null, true);
        echo "</a></li>
    ";
        // line 11
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 12
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), 10);
            echo "</a></li>
      <li class=\"active\">";
            // line 13
            if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑问题"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑话题"), "html", null, true);
            }
            echo "</li>
    ";
        } else {
            // line 15
            echo "      <li class=\"active\">";
            if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提问题"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发表话题"), "html", null, true);
            }
            echo "</li>
    ";
        }
        // line 17
        echo "  </ul>

  <form id=\"thread-form\" class=\"form-vertical\" method=\"post\"
    ";
        // line 20
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 21
            echo "      action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"
    ";
        } else {
            // line 23
            echo "      action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 25
        echo "    >

    <div class=\"form-group\">
      <div class=\"controls\">
        ";
        // line 29
        $context["placeholder"] = ((((isset($context["type"]) ? $context["type"] : null) == "question")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题，用一句话说清你的问题")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题")));
        // line 30
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => (isset($context["placeholder"]) ? $context["placeholder"] : null), "data-display" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"))));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"controls\">
        ";
        // line 36
        echo         // line 37
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(        // line 38
(isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 15, "data-display" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "data-image-upload-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "data-image-download-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))))));
        // line 56
        echo "
      </div>
    </div>
    ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:File/Attachment:formFields", array("targetType" => "course.thread", "targetId" => (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), 0)) : (0))), array("showLabel" => false)));
        echo "
    <div class=\"form-group clearfix\">
      <div class=\"controls pull-right\">
        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        ";
        // line 63
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 64
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
            echo "</a>
          <button type=\"button\" class=\"btn btn-primary js-btn-thread-save\" data-loading-text=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
            echo "...\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
            echo "</button>
        ";
        } else {
            // line 67
            echo "          ";
            // line 68
            echo "          ";
            // line 87
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "tab" => "threads")), "html", null, true);
            echo "\" class=\"btn btn-link\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
            echo "</a>
          <button type=\"button\" class=\"btn btn-primary js-btn-thread-save\" data-loading-text=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
            echo "...\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发表"), "html", null, true);
            echo "</button>
        ";
        }
        // line 90
        echo "      </div>
    </div>
    <input type=\"hidden\" name=\"courseSetId\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "course/thread/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 93,  184 => 92,  180 => 90,  173 => 88,  166 => 87,  164 => 68,  162 => 67,  155 => 65,  148 => 64,  146 => 63,  142 => 62,  136 => 59,  131 => 56,  129 => 38,  128 => 37,  127 => 36,  117 => 30,  115 => 29,  109 => 25,  103 => 23,  97 => 21,  95 => 20,  90 => 17,  80 => 15,  71 => 13,  62 => 12,  60 => 11,  54 => 10,  51 => 9,  48 => 8,  36 => 2,  32 => 1,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/thread/form.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\thread\\form.html.twig");
    }
}
