<?php

/* activity/testpaper/finish-condition.html.twig */
class __TwigTemplate_2d3fc94ce8117595272e6d031dd1dbba1a2c7cdb961577f035c5d34e7400c975 extends Twig_Template
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
        echo "<p class=\"gray-darker mbs\">满足以下条件:</p>
";
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array()), "type", array()) == "score")) {
            // line 3
            echo "  考试分数通过";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array()), "finishScore", array()), "html", null, true);
            echo "分
";
        } else {
            // line 5
            echo "  提交试卷
";
        }
    }

    public function getTemplateName()
    {
        return "activity/testpaper/finish-condition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/testpaper/finish-condition.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\testpaper\\finish-condition.html.twig");
    }
}
