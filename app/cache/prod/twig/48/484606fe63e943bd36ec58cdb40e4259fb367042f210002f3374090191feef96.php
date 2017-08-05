<?php

/* testpaper/manage/check-list.html.twig */
class __TwigTemplate_9cef0eaf4f8a56a93724b2ee243736aacd6fe5b7c461a7d3b8b7ed35703c499e extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "testpaper/manage/check-list.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testpapers"]) ? $context["testpapers"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["testpaper"]) {
            if ($context["testpaper"]) {
                // line 4
                echo "  ";
                $context["resultListRout"] = (((array_key_exists("targetType", $context)) ? (_twig_default_filter((isset($context["targetType"]) ? $context["targetType"] : null), "course")) : ("course")) . "_manage_testpaper_result_list");
                // line 5
                echo "
  ";
                // line 6
                $this->loadTemplate("testpaper/manage/check-list-item.html.twig", "testpaper/manage/check-list.html.twig", 6)->display(array_merge($context, array("testpaper" => $context["testpaper"], "targetResultInfo" => $this->getAttribute($context["testpaper"], "resultStatusNum", array()), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))));
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 8
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无数据"), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testpaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<nav class=\"text-center\">
  ";
        // line 12
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "
</nav>
";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/check-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  60 => 10,  51 => 8,  42 => 6,  39 => 5,  36 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/check-list.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\check-list.html.twig");
    }
}
