<?php

/* activity/video/show.html.twig */
class __TwigTemplate_9d6ddd54e42fef777fbbace9c37867d742dec77c3bbe9a0faea1d42ffd1b5037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/content-layout.html.twig", "activity/video/show.html.twig", 1);
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
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/activity/video/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t";
        // line 7
        if (((($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "mediaSource", array()), "self")) : ("self")) == "self")) {
            // line 8
            echo "\t\t";
            if ((($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "file", array()), null)) : (null))) {
                // line 9
                echo "\t\t\t<div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\"
\t\t\t     data-role=\"lesson-content\"
\t\t\t     data-watch-url=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_acitvity_watch", array("courseId" => $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "fromCourseId", array()), "id" => $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array()))), "html", null, true);
                echo "\"
\t\t\t     data-id=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 14
                echo "\t\t\t\t";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Player:show", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "mediaId", array()))));
                echo "
\t\t\t</div>
\t\t";
            } else {
                // line 17
                echo "\t\t\t<div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"lesson-content\">
\t\t\t\t";
                // line 18
                $this->loadTemplate("activity/file-not-found.html.twig", "activity/video/show.html.twig", 18)->display(array_merge($context, array("type" => "video")));
                // line 19
                echo "\t\t\t</div>
\t\t";
            }
            // line 21
            echo "\t";
        } elseif (((($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "mediaSource", array()), "self")) : ("self")) == "iframe")) {
            // line 22
            echo "\t\t<div id=\"task-preview-iframe\" class=\"iframe-parent-content iframe-parent-full\">
\t\t\t<iframe src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "mediaUri", array()), "html", null, true);
            echo "\" style=\"height:100%; width:100%; border:0px; overflow: hidden\"
\t\t\t        scrolling=\"no\"></iframe>
\t\t</div>
\t";
        } else {
            // line 27
            echo "\t\t<div class=\"dashboard-body\">
\t\t\t<div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"lesson-content\"
\t\t\t     data-media-source=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "mediaSource", array()), "html", null, true);
            echo "\">
\t\t\t\t<div id=\"swf-player\" data-url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "mediaUri", array()), "html", null, true);
            echo "\"></div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "activity/video/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  91 => 30,  87 => 29,  83 => 27,  76 => 23,  73 => 22,  70 => 21,  66 => 19,  64 => 18,  61 => 17,  54 => 14,  50 => 12,  46 => 11,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/video/show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\video\\show.html.twig");
    }
}
