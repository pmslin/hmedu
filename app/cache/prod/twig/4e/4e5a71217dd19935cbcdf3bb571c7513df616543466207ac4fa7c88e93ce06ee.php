<?php

/* activity/video/modal.html.twig */
class __TwigTemplate_45fb563623eab542e6c2436306a6a9967ff910672f35ccce70850c156c5d757b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-form-layout.html.twig", "activity/video/modal.html.twig", 1);
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "//service-cdn.qiqiuyun.net/js-sdk/uploader/sdk-v1.js", 1 => "libs/perfect-scrollbar.js", 2 => "app/js/activity-manage/video/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_activity_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\">
      <label for=\"ext_mediaSource\" class=\"style control-label-required\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-10\">
      ";
        // line 11
        $this->loadTemplate("file-chooser/file-choose.html.twig", "activity/video/modal.html.twig", 11)->display(array_merge($context, array("mediaType" => "video", "fileType" => "video", "file" => (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "file", array()), null)) : (null)), "link" => (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaSource", array()), null)) : (null)))));
        // line 12
        echo "      <input type=\"hidden\" id=\"ext_mediaSource\" name=\"ext[mediaSource]\"
             value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaSource", array()), null)) : (null)), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"form-group for-video-type\" id=\"lesson-length-form-group\">
    <div class=\"col-sm-2 control-label for-video-type\">
      <label class=\"control-label-required\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频时长"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-10\">
      <input id=\"mediaId\" class=\"form-control\" type=\"hidden\" name=\"mediaId\" value=";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "mediaId", array()), null)) : (null)), "html", null, true);
        echo ">
      <input class=\"form-control width-150 js-length\" id=\"minute\" type=\"text\" name=\"minute\"
             value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "minute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "minute", array()), null)) : (null)), "html", null, true);
        echo "\"><span class=\"mhs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
        echo "</span><input
          class=\"form-control width-150 js-length\" id=\"second\" type=\"text\" name=\"second\"
          value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "second", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "second", array()), null)) : (null)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("秒"), "html", null, true);
        echo "
      <input type=\"hidden\" id=\"ext_mediaId\" name=\"ext[mediaId]\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaId", array()), null)) : (null)), "html", null, true);
        echo "\">
      <input type=\"hidden\" id=\"ext_mediaUri\" name=\"ext[mediaUri]\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaUri", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaUri", array()), null)) : (null)), "html", null, true);
        echo "\">
      <input type=\"hidden\" id=\"length\" name=\"length\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "length", array()), 0)) : (0)), "html", null, true);
        echo "\">
    </div>
  </div>

  ";
        // line 32
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud") && ((($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaSource", array()), "self")) : ("self")) == "self"))) {
            // line 33
            echo "    <div class=\"form-group for-video-subtitle\" id=\"video-subtitle-form-group\">
      <div class=\"col-sm-2 control-label for-video-subtitle\">
        <label class=\"control-label\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频字幕"), "html", null, true);
            echo "</label>
      </div>

      <div class=\"col-sm-10 controls js-subtitle-list\" data-dialog-url=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_subtitle_manage_dialog");
            echo "\">
        <p style=\"margin-top:6px;color:#a1a1a1\">请等待视频上传完之后再添加字幕</p>
      </div>
      <div class=\"col-sm-offset-2 help-block\">
        <p style=\"margin-left:10px;\">字幕文件暂时仅支持UTF-8编码的srt文件，点击<a href=\"http://www.qiqiuyu.com/article/883\" target=\"__blank\">查看</a>编码转换说明。</p>
      </div>

      <input id=\"ext_mediaId_for_subtitle\" class=\"form-control\" type=\"hidden\" value=";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaId", array()), null)) : (null)), "html", null, true);
            echo ">
    </div>
  ";
        }
        // line 48
        echo "
";
    }

    // line 51
    public function block_activity_finish($context, array $blocks = array())
    {
        // line 52
        echo "  <div class=\" form-group\">
    <div class=\"col-sm-2 control-label\">
      <label>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成条件"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-4\">
      <select id=\"finish-condition\" name=\"ext[finishType]\" class=\"form-control\">
        ";
        // line 58
        $context["finishType"] = (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "finishType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "finishType", array()), "end")) : ("end"));
        // line 59
        echo "        <option value=\"end\" ";
        if (((isset($context["finishType"]) ? $context["finishType"] : null) == "end")) {
            echo " selected ";
        }
        echo ">学习到最后</option>
        <option value=\"time\" ";
        // line 60
        if (((isset($context["finishType"]) ? $context["finishType"] : null) == "time")) {
            echo " selected ";
        }
        echo ">学习时长</option>
      </select>
    </div>
  </div>

  <div class=\" form-group hidden viewLength\">
    <div class=\"col-sm-2 control-label\">
      <label>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("至少学习"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-4 controls\">
      <input id=\"condition-detail\" class=\"form-control\" type=\"text\" name=\"ext[finishDetail]\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "finishDetail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "finishDetail", array()), 1)) : (1)), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-sm-4 controls\">
      <p class=\"form-control-static\">分钟</p>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "activity/video/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 70,  165 => 67,  153 => 60,  146 => 59,  144 => 58,  137 => 54,  133 => 52,  130 => 51,  125 => 48,  119 => 45,  109 => 38,  103 => 35,  99 => 33,  97 => 32,  90 => 28,  86 => 27,  82 => 26,  76 => 25,  69 => 23,  64 => 21,  58 => 18,  50 => 13,  47 => 12,  45 => 11,  39 => 8,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/video/modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\video\\modal.html.twig");
    }
}
