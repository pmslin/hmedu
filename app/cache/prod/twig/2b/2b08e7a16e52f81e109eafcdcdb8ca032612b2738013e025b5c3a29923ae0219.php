<?php

/* activity/testpaper/show.html.twig */
class __TwigTemplate_91e4ca160ebb1d6f2acb8d9e94df2c85b919e2ed37420fd102bc67c83358693b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "activity/testpaper/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"iframe-parent-content\">
  <div  class=\"modal show iframe-modal\">
\t  <div class=\"modal-dialog \">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-body task-state-modal\">
\t        <div class=\"title font-blod\">
\t          <i class=\"es-icon es-icon-xinxi color-info\"></i>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("考试说明"), "html", null, true);
        echo "
\t        </div>
\t        ";
        // line 11
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "open")) {
            // line 12
            echo "\t\t        <div class=\"content\">
\t\t        \t";
            // line 13
            if (((($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "testMode", array()) == "realTime") && $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "startTime", array())) && ($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "startTime", array()) > twig_date_format_filter($this->env, "now", "U")))) {
                // line 14
                echo "\t\t\t          <div class=\"text-16 \">
\t\t\t          \t考试未开始，请在";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "startTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "之后再来
\t\t\t          </div>
\t\t          ";
            } else {
                // line 18
                echo "\t\t\t\t\t\t\t\t<div class=\"text-16 \">
\t\t\t          \t本次考试共<span class=\"color-primary\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "itemCount", array()), "html", null, true);
                echo "题</span>，总分<span class=\"color-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "score", array()), "html", null, true);
                echo "分</span>
\t\t          \t\t";
                // line 20
                if (($this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array()), "type", array()) == "score")) {
                    // line 21
                    echo "\t\t          \t\t\t，及格为<span class=\"color-primary\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "finishCondition", array()), "finishScore", array()), "html", null, true);
                    echo "分</span>
\t\t          \t\t";
                }
                // line 22
                echo "；

\t\t\t          \t";
                // line 24
                if ($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "limitedTime", array())) {
                    // line 25
                    echo "\t\t\t          \t\t<div class=\"mt5\">请在<span class=\"color-primary\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "limitedTime", array()), "html", null, true);
                    echo "分钟</span>内作答。</div>
\t\t\t          \t";
                }
                // line 27
                echo "\t\t\t          \t";
                if ($this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "doTimes", array())) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t\t\t仅有<span class=\"color-danger\">一次</span>考试机会。
\t\t\t          \t";
                }
                // line 30
                echo "\t\t\t          </div>
\t\t          ";
            }
            // line 32
            echo "\t\t        </div>
\t\t        <div class=\"text-right mtl\">
\t\t        \t";
            // line 34
            if (( !$this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "startTime", array()) || ($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "startTime", array()) && ($this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "startTime", array()) <= twig_date_format_filter($this->env, "now", "U"))))) {
                // line 35
                echo "\t\t          \t<a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_do", array("lessonId" => $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array()), "testId" => $this->getAttribute((isset($context["testpaperActivity"]) ? $context["testpaperActivity"] : null), "mediaId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开始考试"), "html", null, true);
                echo "</a>
\t\t          ";
            }
            // line 37
            echo "\t\t        </div>
\t        ";
        } else {
            // line 39
            echo "\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"text-16 \">该考试已关闭，请联系教师！</div>
\t\t\t\t\t\t</div>
\t        ";
        }
        // line 43
        echo "\t      </div>
\t    </div>
\t  </div>
\t</div>
</div>
<div class=\"modal-backdrop in\"></div>
";
    }

    public function getTemplateName()
    {
        return "activity/testpaper/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  118 => 39,  114 => 37,  106 => 35,  104 => 34,  100 => 32,  96 => 30,  92 => 28,  89 => 27,  83 => 25,  81 => 24,  77 => 22,  71 => 21,  69 => 20,  63 => 19,  60 => 18,  54 => 15,  51 => 14,  49 => 13,  46 => 12,  44 => 11,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/testpaper/show.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\activity\\testpaper\\show.html.twig");
    }
}
