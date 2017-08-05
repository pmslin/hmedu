<?php

/* file-chooser/parts/import-video.html.twig */
class __TwigTemplate_ed7d3bf5bc49827c4cdbea1fda7b02bf3ede0a52ee4eea3ff71cbdbbd1dac217 extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"video-chooser-import-pane\">
  ";
        // line 2
        if (((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null))) {
            // line 3
            echo "    <div>原地址：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaUri", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"import-content\">
    <div class=\"input-group\">
      <input class=\"form-control border-gray mb0\" type=\"text\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持优酷、腾讯、网易公开课的视频页面地址导入"), "html", null, true);
        echo "\"
             data-role=\"import-url\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaUri", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaUri", array()), null)) : (null)), "html", null, true);
        echo "\">
      <span class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default js-video-import\" data-role=\"import\"
                data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_video_import", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\"
                data-loading-text=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在导入，请稍等"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导入"), "html", null, true);
        echo "</button>
      </span>
    </div>
    <div class=\"text-warning mts\">* ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("腾讯和网易的视频不支持手机端播放"), "html", null, true);
        echo "</div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "file-chooser/parts/import-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  48 => 12,  44 => 11,  38 => 8,  34 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/parts/import-video.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\file-chooser\\parts\\import-video.html.twig");
    }
}
