<?php

/* course/widgets/characteristic.html.twig */
class __TwigTemplate_f5c7fa5e013ce5ae4ad6bd879a3955f9c8d94c25e39790ebcbd3404561b958ed extends Twig_Template
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
        if ( !twig_test_empty((isset($context["characteristicData"]) ? $context["characteristicData"] : null))) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">课程特色</h3>
    </div>
    <div class=\"panel-body pt0\">
      <div class=\"course-features pl0\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["characteristicData"]) ? $context["characteristicData"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 9
                echo "          ";
                if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                    // line 10
                    echo "            <div class=\"course-features-item clearfix\">
          ";
                }
                // line 12
                echo "          <div class=\"media\">
            <div class=\"media-left prm\">
                <span class=\"color-lump bg-primary\"> <i class=\"es-icon ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "icon", array()), "html", null, true);
                echo " media-logo\"></i>
                </span>
            </div>
            <div class=\"media-body media-middle\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "num", array()), "html", null, true);
                echo ")</div>
          </div>
          ";
                // line 19
                if (((($this->getAttribute($context["loop"], "index", array()) % 2) == 0) || ($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["characteristicData"]) ? $context["characteristicData"] : null))))) {
                    // line 20
                    echo "            </div>
          ";
                }
                // line 22
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course/widgets/characteristic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  76 => 22,  72 => 20,  70 => 19,  63 => 17,  57 => 14,  53 => 12,  49 => 10,  46 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/characteristic.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\course\\widgets\\characteristic.html.twig");
    }
}
