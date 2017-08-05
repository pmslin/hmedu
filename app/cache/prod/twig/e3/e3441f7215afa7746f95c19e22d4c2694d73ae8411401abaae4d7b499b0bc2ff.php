<?php

/* file-chooser/parts/upload-file.html.twig */
class __TwigTemplate_4688402139b61d66a0325a3f0519360fa1e83f90a5d71e181cad4af309c7e540 extends Twig_Template
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
        $context["targetType"] = ((array_key_exists("targetType", $context)) ? (_twig_default_filter((isset($context["targetType"]) ? $context["targetType"] : null), "course-activity")) : ("course-activity"));
        // line 2
        $context["token"] = $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["courseId"]) ? $context["courseId"] : null), "private");
        // line 3
        $context["storageSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage");
        // line 4
        echo "<div class=\"uploader-content\">
  <div class=\"uploader-container\" id=\"uploader-container\"
  data-init-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploader_init_v2", array("token" => (isset($context["token"]) ? $context["token"] : null)), true), "html", null, true);
        echo "\"
  data-finish-url=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploader_finished_v2", array("token" => (isset($context["token"]) ? $context["token"] : null)), true), "html", null, true);
        echo "\"
  data-accept=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), ((array_key_exists("fileType", $context)) ? (_twig_default_filter((isset($context["fileType"]) ? $context["fileType"] : null), "")) : ("")))), "html", null, true);
        echo "\"
  data-process=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\">
  </div>
  ";
        // line 11
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter((isset($context["mediaType"]) ? $context["mediaType"] : null), null)) : (null)) == "video") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 12
            echo "    <div class=\"uploader-bottom\">
      <div class=\"row\">
        <div class=\"col-xs-8\">
          转码画质
          <select class=\"form-control border-gray mrl js-upload-params\" name=\"videoQuality\">
            ";
            // line 17
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("low" => "流畅", "normal" => "标准", "high" => "精细"), $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_quality"));
            echo "
          </select>
          转码音质
          <select class=\"form-control border-gray js-upload-params\" name=\"audioQuality\">
            ";
            // line 21
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("low" => "流畅", "normal" => "标准", "high" => "高品"), $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_audio_quality"));
            echo "
          </select>
        </div>
        <input type=\"hidden\" name=\"support_mobile\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.support_mobile", 0), "html", null, true);
            echo "\" />
        <div class=\"col-xs-4 text-xs text-center\">
          <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-trigger=\"hover\" data-content=\"上传后将会自动转码成兼容性更好的格式，以便学员观看，建议您在转码完成后再发布相应的课时。\">什么是转码</a>
          ｜
          <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"支持mp4, avi, flv, wmv, mov, m4v格式的视频文件上传，文件大小不能超过2GB。<br/>支持断点续传（仅在Chrome、IE9及以上等支持HTML5的浏览器中可用）。\">上传说明</a>
        </div>
      </div>
    </div>
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter((isset($context["mediaType"]) ? $context["mediaType"] : null), null)) : (null)) == "audio") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 35
            echo "    <div class=\"uploader-bottom text-right\">
      <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"支持mp3格式的音频文件上传，且文件大小不能超过 500M 。</br>支持断点续传（仅支持HTML5浏览器）。</br>
      音频将上传到云服务器\">上传说明
    </a>
    </div>
  ";
        }
        // line 41
        echo "  
  ";
        // line 42
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter((isset($context["mediaType"]) ? $context["mediaType"] : null), null)) : (null)) == "flash") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 43
            echo "    <div class=\"uploader-bottom text-right\">
      <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"支持swf格式的文件上传，且文件大小不能超过 100 MB。<br/>  
      Flash将上传到云服务器\">上传说明
    </a>
    </div>
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter((isset($context["mediaType"]) ? $context["mediaType"] : null), null)) : (null)) == "document") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 51
            echo "    <div class=\"uploader-bottom text-right\">
      <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"支持pdf,doc,docx,xls,xlsx格式的文档上传，且文件大小不能超过 100 MB。<br/>文档将上传到云服务器\">上传说明
    </a>
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter((isset($context["mediaType"]) ? $context["mediaType"] : null), null)) : (null)) == "ppt") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 58
            echo "    <div class=\"uploader-bottom text-right\">
      <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"支持ppt, pptx格式的PPT文件上传，且文件大小不能超过100 MB。<br/>PPT将上传到云服务器\">上传说明</a>
    </div>
  ";
        }
        // line 62
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "file-chooser/parts/upload-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 62,  123 => 58,  121 => 57,  118 => 56,  111 => 51,  109 => 50,  106 => 49,  98 => 43,  96 => 42,  93 => 41,  85 => 35,  83 => 34,  80 => 33,  68 => 24,  62 => 21,  55 => 17,  48 => 12,  46 => 11,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/parts/upload-file.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\file-chooser\\parts\\upload-file.html.twig");
    }
}
