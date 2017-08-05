<?php

/* article/popular-articles-block.html.twig */
class __TwigTemplate_3f8b159da669ede82f58c8adb4662154e06baba110ae250f4de8d0918de455d9 extends Twig_Template
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
        echo "<div class=\"panel panel-default hot-article\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot\"></i>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("热门%article_name%", array("%article_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("article.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯")))), "html", null, true);
        echo "
  </div>
  <div class=\"panel-body\">
    ";
        // line 6
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 7
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["article"]) {
                // line 8
                echo "          <div class=\"media media-number\">
            <div class=\"media-left\">
              <span class=\"num\">";
                // line 10
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</span>
            </div>
            <div class=\"media-body\">
              <a class=\"link-dark\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["article"], "title", array()), 20);
                echo "</a>
            </div>
          </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无热门资讯"), "html", null, true);
            echo "</div>
    ";
        }
        // line 20
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "article/popular-articles-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  63 => 18,  60 => 17,  46 => 13,  40 => 10,  36 => 8,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/popular-articles-block.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\article\\popular-articles-block.html.twig");
    }
}
