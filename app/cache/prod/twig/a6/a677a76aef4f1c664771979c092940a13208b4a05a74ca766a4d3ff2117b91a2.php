<?php

/* activity/text/modal.html.twig */
class __TwigTemplate_938b247ff616d53b3a5d0a76f41c7a00f541e21013491aad503217218a9f2d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-form-layout.html.twig", "activity/text/modal.html.twig", 1);
        $this->blocks = array(
            'activity_content' => array($this, 'block_activity_content'),
            'activity_finish' => array($this, 'block_activity_finish'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/activity-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "app/js/activity-manage/text/index.js"), 300);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_activity_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"form-group\">

    <div class=\"col-sm-2 control-label\">
      <label for=\"text-content-field\" class=\"control-label-required\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-10\">
      ";
        // line 12
        if ((isset($context["draft"]) ? $context["draft"] : null)) {
            // line 13
            echo "        <a id=\"see-draft-btn\" class=\"link-primary text-12 js-continue-edit\" data-content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "content", array()), "html", null, true);
            echo "\">
          ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您有一段自动保存内容，请点击继续编辑"), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 17
        echo "      <textarea class=\"form-control type-hidden js-text\" id=\"text-content-field\" name=\"content\"
        data-image-upload-url=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
        data-flash-upload-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\"
        data-image-download-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
        data-save-draft-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_text_activity_auto_save", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null), "activityId" => (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\"
      >
        ";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "
      </textarea>
    </div>
  </div>
";
    }

    // line 29
    public function block_activity_finish($context, array $blocks = array())
    {
        // line 30
        echo "  <div class=\" form-group\">
    <div class=\"col-sm-2 control-label\">
      <label for=\"condition-select\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成条件"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-4 form-control-static\">
      观看时长
      <input type=\"hidden\" id=\"condition-select\" name=\"finishType\">
      ";
        // line 40
        echo "    </div>
  </div>
  <div class=\" form-group\" id=\"condition-group\">
    <div class=\"col-sm-2 control-label\">
      <label for=\"finishDetail\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("至少观看"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-4\">
      <input id=\"finishDetail\" class=\"form-control\" type=\"text\" name=\"finishDetail\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "finishDetail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "finishDetail", array()), 1)) : (1)), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-sm-4\">
      <p class=\"form-control-static\">分钟</p>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "activity/text/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  109 => 44,  103 => 40,  95 => 32,  91 => 30,  88 => 29,  79 => 23,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  59 => 17,  53 => 14,  48 => 13,  46 => 12,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/text/modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\text\\modal.html.twig");
    }
}
