<?php

/* player/show.html.twig */
class __TwigTemplate_31c6b266d117b33e6cdcff6e4a1ce1a02bde5e1effa677ca54c0affb18e485a1 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "player/show.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
    <meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />
    <meta content=\"black\" name=\"apple-mobile-web-app-status-bar-style\" />
    <meta content=\"telephone=no\" name=\"format-detection\" />
    <meta content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
    ";
        // line 13
        $this->loadTemplate("player/stylesheet.html.twig", "player/show.html.twig", 13)->display($context);
        // line 14
        echo "  </head>
  <body style=\"overflow:hidden;border:0px;\">
    ";
        // line 16
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient() && (isset($context["isEncryptionPlus"]) ? $context["isEncryptionPlus"] : null))) {
            // line 17
            echo "      <div class=\"\"><br>&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂不支持当前浏览器播放，请"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"parent\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下载APP"), "html", null, true);
            echo "</a>观看。</div>
    ";
        } else {
            // line 19
            echo "      ";
            if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
                // line 20
                echo "        ";
                if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()) == "cloud") && twig_in_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()), array(0 => "ppt", 1 => "document", 2 => "video"))) && ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertStatus", array()) == "error"))) {
                    // line 21
                    echo "          <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("转码失败，请联系管理员。"), "html", null, true);
                    echo "</div>
          ";
                } elseif (((($this->getAttribute(                // line 22
(isset($context["file"]) ? $context["file"] : null), "storage", array()) == "cloud") && twig_in_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()), array(0 => "ppt", 1 => "document", 2 => "video"))) && ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertStatus", array()) != "success"))) {
                    // line 23
                    echo "          <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在转码，请稍后尝试。"), "html", null, true);
                    echo "</div>
        ";
                } else {
                    // line 25
                    echo "          <div style=\"position:absolute;top:0;bottom:0;left:0;right:0;text-align:center;\">
            <div id=\"lesson-video-content\"
              data-user-id=\"";
                    // line 27
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)), "html", null, true);
                    echo "\"
              data-user-name=\"";
                    // line 28
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), "")) : ("")), "html", null, true);
                    echo "\"
              data-file-global-id=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "globalId", array()), "html", null, true);
                    echo "\"
              data-file-id=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()), "html", null, true);
                    echo "\"
              data-file-type=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()), "html", null, true);
                    echo "\"
              data-url=\"";
                    // line 32
                    echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                    echo "\"
              data-video-header-length=\"";
                    // line 33
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "videoHeaderLength", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "videoHeaderLength", array()), 0)) : (0)), "html", null, true);
                    echo "\"
              data-enable-playback-rates=\"";
                    // line 34
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.enable_playback_rates"), false), "html", null, true);
                    echo "\"
              data-player=\"";
                    // line 35
                    echo twig_escape_filter($this->env, (isset($context["player"]) ? $context["player"] : null), "html", null, true);
                    echo "\"
              data-agentInWhiteList=\"";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["agentInWhiteList"]) ? $context["agentInWhiteList"] : null), "html", null, true);
                    echo "\"
              ";
                    // line 37
                    if ((( !(($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "hasVideoWatermark", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "hasVideoWatermark", array()), 0)) : (0)) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark") > 0)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark_image"))) {
                        // line 38
                        echo "                data-watermark=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark_image"), null), "html", null, true);
                        echo "\"
              ";
                    }
                    // line 40
                    echo "              ";
                    if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.cloud_access_key")) {
                        // line 41
                        echo "                data-access-key=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.cloud_access_key"), "html", null, true);
                        echo "\"
              ";
                    }
                    // line 43
                    echo "              ";
                    if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_auto_play")) {
                        // line 44
                        echo "                data-autoplay=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_auto_play"), "html", null, true);
                        echo "\"
              ";
                    }
                    // line 46
                    echo "              ";
                    if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                        // line 47
                        echo "                data-fingerprint=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFingerprint(), "html", null, true);
                        echo "\"
                data-fingerprint-src=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                        echo "\"
                data-fingerprint-time=\"";
                        // line 49
                        echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_fingerprint_time"), 0.5) * 1000), "html", null, true);
                        echo "\"
              ";
                    }
                    // line 51
                    echo "              ";
                    if (((isset($context["player"]) ? $context["player"] : null) == "balloon-cloud-video-player")) {
                        // line 52
                        echo "                class=\"ballon-video-player\"
              ";
                    } else {
                        // line 54
                        echo "                class=\"local-video-player\"
              ";
                    }
                    // line 56
                    echo "              ";
                    if (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "hideQuestion", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "hideQuestion", array()), 0)) : (0)) == 0)) {
                        // line 57
                        echo "                data-markerurl=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_question_markers_show", array("mediaId" => $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()))), "html", null, true);
                        echo "\"
                data-finish-question-marker-url=\"";
                        // line 58
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_question_marker_finish");
                        echo "\"
              ";
                    }
                    // line 60
                    echo "              ";
                    if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "subtitles", array(), "any", true, true) && ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "hideSubtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "hideSubtitle", array()), 0)) : (0)) == 0))) {
                        // line 61
                        echo "                data-subtitles=\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "subtitles", array())), "html", null, true);
                        echo "\"
              ";
                    }
                    // line 63
                    echo "              data-timelimit=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "watchTimeLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "watchTimeLimit", array()), "")) : ("")), "html", null, true);
                    echo "\"
              data-starttime=\"";
                    // line 64
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "starttime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "starttime", array()), "")) : ("")), "html", null, true);
                    echo "\"
              data-lesson-id=\"";
                    // line 65
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "lessonId", array()), 0)) : (0)), "html", null, true);
                    echo "\"
              style=\"height:100%\"
            ></div>
          </div>
          ";
                    // line 69
                    $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/vendor.js", 1 => "app/js/common.js", 2 => "app/js/main.js"), 1000);
                    // line 70
                    echo "          ";
                    if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_sdk_cdn")) {
                        // line 71
                        echo "            ";
                        $context["cdnUrl"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_sdk_cdn");
                        // line 72
                        echo "          ";
                    } else {
                        // line 73
                        echo "            ";
                        $context["cdnUrl"] = "//service-cdn.qiqiuyun.net";
                        // line 74
                        echo "          ";
                    }
                    // line 75
                    echo "          <script src=\"";
                    echo twig_escape_filter($this->env, (isset($context["cdnUrl"]) ? $context["cdnUrl"] : null), "html", null, true);
                    echo "/js-sdk/video-player/sdk-v1.js?";
                    echo twig_escape_filter($this->env, twig_round(($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) / 100)), "html", null, true);
                    echo "\"></script>
          ";
                    // line 76
                    $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/player/index.js"));
                    // line 77
                    echo "        ";
                }
                // line 78
                echo "      ";
                $this->loadTemplate("script_boot.html.twig", "player/show.html.twig", 78)->display($context);
                // line 79
                echo "      ";
            } else {
                // line 80
                echo "          <div class=\"\"><br>&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件不存在。"), "html", null, true);
                echo "</div>
      ";
            }
            // line 82
            echo "    ";
        }
        // line 83
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "player/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 83,  251 => 82,  245 => 80,  242 => 79,  239 => 78,  236 => 77,  234 => 76,  227 => 75,  224 => 74,  221 => 73,  218 => 72,  215 => 71,  212 => 70,  210 => 69,  203 => 65,  199 => 64,  194 => 63,  188 => 61,  185 => 60,  180 => 58,  175 => 57,  172 => 56,  168 => 54,  164 => 52,  161 => 51,  156 => 49,  152 => 48,  147 => 47,  144 => 46,  138 => 44,  135 => 43,  129 => 41,  126 => 40,  120 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 25,  68 => 23,  66 => 22,  61 => 21,  58 => 20,  55 => 19,  45 => 17,  43 => 16,  39 => 14,  37 => 13,  33 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "player/show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\player\\show.html.twig");
    }
}
