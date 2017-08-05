<?php

/* activity/video/preview.html.twig */
class __TwigTemplate_824955f8cfea524b5b828a91f0cf90038f097f8f72351432297d1915182d6767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/content-layout.html.twig", "activity/video/preview.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/activity/video/preview/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        if (((($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "mediaSource", array()), "self")) : ("self")) == "self")) {
            // line 6
            echo "    ";
            if ((($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array(), "any", false, true), "file", array()), null)) : (null))) {
                // line 7
                echo "      <div class=\"task-preview-modal-content\" id=\"task-preview-player\">
        <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"task-content\">
          ";
                // line 10
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Player:show", array("id" => $this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array()), "mediaId", array()), "context" => (isset($context["context"]) ? $context["context"] : null))));
                echo "
        </div>
      </div>
    ";
            } else {
                // line 14
                echo "      <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"lesson-content\">
        ";
                // line 15
                $this->loadTemplate("activity/file-not-found.html.twig", "activity/video/preview.html.twig", 15)->display(array_merge($context, array("type" => "video")));
                // line 16
                echo "      </div>
    ";
            }
            // line 18
            echo "  ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array()), "mediaSource", array()) == "iframe")) {
            // line 19
            echo "\t  <div id=\"task-preview-iframe\">
\t\t  <iframe src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array()), "mediaUri", array()), "html", null, true);
            echo "\" style=\"height:400px; width:100%; border:0px; overflow: hidden\"
\t\t          scrolling=\"no\"></iframe>
\t  </div>
  ";
        } else {
            // line 24
            echo "\t  <div class=\"task-preview-modal-content\">
\t\t  <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"task-content\"
\t\t       data-media-source=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array()), "mediaSource", array()), "html", null, true);
            echo "\">
\t\t\t  <div id=\"swf-player\" data-url=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "ext", array()), "mediaUri", array()), "html", null, true);
            echo "\"></div>
\t\t  </div>
\t  </div>
   
  ";
        }
        // line 32
        echo "
  <div class=\"js-time-limit-dev hidden\">
    <div style=\"height:400px;background-color:black;\" class=\"text-center\">
      <br><br><br><br>
      <br><br><br><br>
      <div style=\"font-size:20px;color:#fff;\">
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("立刻购买本课程，即可获得全部完整学习内容。"), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"js-buy-text hidden\">
    <span class=\"text-success\">
      ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您可以免费试看前%tryLookLength%分钟,购买后可完整观看。", array("%tryLookLength%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookLength", array()))), "html", null, true);
        echo "
    </span>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "activity/video/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  98 => 38,  90 => 32,  82 => 27,  78 => 26,  74 => 24,  67 => 20,  64 => 19,  61 => 18,  57 => 16,  55 => 15,  52 => 14,  44 => 10,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/video/preview.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\video\\preview.html.twig");
    }
}
