<?php

/* cloud-file/video-quality-switcher.html.twig */
class __TwigTemplate_1181f88d3a2d45f99663a3dd753751eb4410d00467f583563d5aa1393ce15020 extends Twig_Template
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
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud")) {
            // line 2
            echo "  
  <div class=\"video-quality-switcher\">
    <div>
      <label>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频转码类型："), "html", null, true);
            echo "</label>
      <span class=\"quality-switcher-bar\">
        <span class=\"color-gray quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
      </span>
    </div>

    <div class=\"quality-switcher-control\" style='display:none'>
      <div class=\"video-quality radios\">
        ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("画质："), "html", null, true);
            echo "
          ";
            // line 14
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("video_quality", array("low" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("流畅 <span class=\"color-gray\">(适合PPT讲解)</span>"), "normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标准 <span class=\"color-gray\">(适合屏幕录制、摄像头拍摄)</span>"), "high" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精细 <span class=\"color-gray\">(适合动态电影)</span>")), $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_quality", "normal"));
            echo "
      </div>

      <div class=\"audio-quality radios\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音质："), "html", null, true);
            echo "
          ";
            // line 19
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("video_audio_quality", array("low" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("流畅"), "normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标准"), "high" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("高品")), $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_audio_quality", "normal"));
            echo "
      </div>
      <input type=\"hidden\" name=\"support_mobile\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.support_mobile", 0), "html", null, true);
            echo "\" />
      <div class=\"quality-actions\">
        <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确定"), "html", null, true);
            echo "</a>
        <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
            echo "</a>
      </div>
    </div>
  </div>
  ";
            // line 28
            $this->loadTemplate("seajs_loader_compatible.html.twig", "cloud-file/video-quality-switcher.html.twig", 28)->display(array_merge($context, array("topxiawebbundle" => true)));
            // line 29
            echo "  <script>app.lazyPool.push(function() {app.load('cloud-file/cloud-video-quality-switcher');});</script>
";
        }
    }

    public function getTemplateName()
    {
        return "cloud-file/video-quality-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  73 => 28,  66 => 24,  62 => 23,  57 => 21,  52 => 19,  48 => 18,  41 => 14,  37 => 13,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cloud-file/video-quality-switcher.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\cloud-file\\video-quality-switcher.html.twig");
    }
}
