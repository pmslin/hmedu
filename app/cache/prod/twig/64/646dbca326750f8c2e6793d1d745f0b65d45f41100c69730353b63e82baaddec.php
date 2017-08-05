<?php

/* uploader/batch-upload-modal.html.twig */
class __TwigTemplate_5f783ac294e29b4d91e476584942d3b198d8d47834bbafb351bba890d97d7805 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("old-bootstrap-modal-layout.html.twig", "uploader/batch-upload-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "old-bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["modal_class"] = "modal-lg";
        // line 4
        $context["topxiawebbundle"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传文件"), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<style>
.webuploader-container {
  position: relative;
}
.webuploader-element-invisible {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px,1px,1px,1px);
}
.webuploader-pick {
  position: relative;
  display: inline-block;
  cursor: pointer;
  background: #fff;
  padding: 5px 10px;
  color: #333;
  text-align: center;
  border-radius: 3px;
  border: 1px solid #ccc;
  overflow: hidden;
}
.webuploader-pick-hover {
  background: #e6e6e6;
  border-color: #adadad;
}

.webuploader-pick-disable {
  opacity: 0.6;
  pointer-events:none;
}

.balloon-uploader {
  border: 1px solid #ddd;
  border-radius: 4px;
}

.balloon-uploader-heading {
  background-color: #f5f5f5;
  color: #333;
  padding: 10px 15px;
  border-bottom: 1px solid #ddd;
  display: none;
}

.balloon-uploader-footer {
  background-color: #f5f5f5;
  color: #333;
  padding: 10px 15px;
  border-top: 1px solid #ddd;
  text-align: right;
}

.balloon-filelist {
  width: 100%;
}

.balloon-filelist-heading {
  padding: 8px 10px;
  font-weight: bold;
  border-bottom: 2px solid #ddd;
}

.balloon-uploader-body {
  position: relative;
  
}

.balloon-filelist .file-name,
.balloon-filelist .file-size,
.balloon-filelist .file-status,
.balloon-filelist .file-manage {
  position: relative;
  z-index: 1;
}

.balloon-filelist .file-name {
  display: inline-block;
  width: 40%;
}

.balloon-filelist .file-size {
  display: inline-block;
  width: 20%;
}

.balloon-filelist .file-status {
  display: inline-block;
  width: 18%;
}
.balloon-filelist .file-manage {
  display: inline-block;
  z-index: 9999;
  position: absolute;
}


.balloon-filelist ul {
  list-style: none;
  margin: 0;
  padding: 0;
  min-height: 200px;
  max-height: 300px;
  overflow-y: scroll;
}

.balloon-filelist ul li {
  position: relative;
  border-bottom: 1px solid #ddd;
  padding: 8px 10px;
}

.balloon-dnd {
  visibility: hidden;
}

.balloon-uploader-none .balloon-uploader-footer,
.balloon-uploader-none .balloon-uploader-body {
  visibility: hidden;
}

.balloon-uploader-none .balloon-dnd {
  visibility: visible;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  text-align: center;
  vertical-align: middle;
}

.balloon-nofile {
  position: absolute;
  top: 40px;
  left: 0;
  right: 0;
  bottom: 0;
  line-height: 200px;
  text-align: center;
  color: #999;
}

.balloon-uploader .file-pick-btn {
  display: inline-block;
}

.balloon-uploader .pause-btn{
  display: inline-block;
  margin-top: -25px;
}

.balloon-uploader .start-upload-btn {
  position: relative;
  display: inline-block;
  cursor: pointer;
  background: #5bc0de;
  padding: 5px 10px;
  color: #fff;
  text-align: center;
  border-radius: 3px;
  border: 1px solid #46b8da;
  overflow: hidden;
}

.balloon-uploader .start-upload-btn:hover {
  background: #31b0d5;
  border-color: #269abc;
}

.balloon-filelist .file-progress {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.balloon-filelist .file-progress-bar {
  background: rgb(219,242,215);
  background: rgba(59, 181, 33, 0.18);
  float: left;
  height: 100%;
}

</style>

  ";
        // line 195
        $this->loadTemplate("cloud-file/video-quality-switcher.html.twig", "uploader/batch-upload-modal.html.twig", 195)->display($context);
        // line 196
        echo "  <div class=\"balloon-uploader\" id=\"batch-uploader\"
    data-init-url=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
    data-finish-url=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
    data-upload-auth-url = \"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
    data-accept=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null))), "html", null, true);
        echo "\"
    data-process=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
  >
    <div class=\"balloon-uploader-heading\">";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传文件"), "html", null, true);
        echo "</div>
    <div class=\"balloon-uploader-body\">
      <div class=\"balloon-nofile\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请将文件拖到这里，或点击添加文件按钮"), "html", null, true);
        echo "</div>
      <div class=\"balloon-filelist\">
        <div class=\"balloon-filelist-heading\">
          <div class=\"file-name\">";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件名"), "html", null, true);
        echo "</div>
          <div class=\"file-size\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("大小"), "html", null, true);
        echo "</div>
          <div class=\"file-status\">";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</div>
        </div>
        <ul>
        </ul>
      </div>
    </div>
    <div class=\"balloon-uploader-footer\">
      <div class=\"file-pick-btn\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加文件"), "html", null, true);
        echo "</div>
      <div class=\"start-upload-btn\"><i class=\"glyphicon glyphicon-upload\"></i> ";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开始上传"), "html", null, true);
        echo "</div>
    </div>
  </div>

  ";
        // line 222
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud")) {
            // line 223
            echo "    <div class=\"alert alert-info\">
      <ul>
        <li>";
            // line 225
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资料库支持多种文件格式上传分享下载，单个文件大小上限<strong>2GB</strong>。");
            echo "</li>
        <li>";
            // line 226
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频将上传到<strong>云视频服务器</strong>，并转换为云视频为创建ES视频课时备用，如需修改云视频转码类型，请先设置转码类型后再进行上传视频。转换过程需要等待，转换过程中视频将无法播放。");
            echo "</li>
        <li>";
            // line 227
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持<strong>断点续传</strong>（仅支持HTML5浏览器）。");
            echo "</li>
      </ul>
    </div>
  ";
        } else {
            // line 231
            echo "    <div class=\"alert alert-info\">
      <ul>
        <li>";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持<strong>mp4, mp3</strong>格式的文件上传，且文件大小不能超过<strong>2.0GB</strong>。<br>MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。");
            echo "</li>
        <li>";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频将上传到<strong>网站服务器</strong>，如需使用云视频,点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。");
            echo "</li>
      </ul>
    </div>
  ";
        }
        // line 238
        echo "  ";
        $this->loadTemplate("seajs_loader_compatible.html.twig", "uploader/batch-upload-modal.html.twig", 238)->display(array_merge($context, array("topxiawebbundle" => true)));
        // line 239
        echo "  <script>app.lazyPool.push(function() { app.load('uploader/batch-upload-modal') }); </script>
";
    }

    // line 241
    public function block_footer($context, array $blocks = array())
    {
        // line 242
        echo "    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "uploader/batch-upload-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 242,  342 => 241,  337 => 239,  334 => 238,  327 => 234,  323 => 233,  319 => 231,  312 => 227,  308 => 226,  304 => 225,  300 => 223,  298 => 222,  291 => 218,  287 => 217,  277 => 210,  273 => 209,  269 => 208,  263 => 205,  258 => 203,  253 => 201,  249 => 200,  245 => 199,  241 => 198,  237 => 197,  234 => 196,  232 => 195,  44 => 9,  41 => 8,  35 => 6,  31 => 1,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "uploader/batch-upload-modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\uploader\\batch-upload-modal.html.twig");
    }
}
