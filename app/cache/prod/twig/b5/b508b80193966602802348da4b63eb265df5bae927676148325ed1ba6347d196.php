<?php

/* exercise/part/paper-card.html.twig */
class __TwigTemplate_863967afc8b88df671939edfdca51cb7476e2beaea3310ec85f3ba462d90160c extends Twig_Template
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
        echo "<div class=\"testpaper-card ";
        echo twig_escape_filter($this->env, ((array_key_exists("testpaperCardClass", $context)) ? (_twig_default_filter((isset($context["testpaperCardClass"]) ? $context["testpaperCardClass"] : null), "")) : ("")), "html", null, true);
        echo "\">
  ";
        // line 2
        if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")) {
            // line 3
            echo "    <div class=\"mbl\">
      <a class=\"btn btn-primary btn-block btn-lg border-radius-none\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exercise_start_do", array("lessonId" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "lessonId", array()), 0)) : (0)), "exerciseId" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "testId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "testId", array()), 0)) : (0)))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("再做%itemCount%题", array("%itemCount%" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "itemCount", array()))), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 7
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答题卡"), "html", null, true);
        echo " 
    </div>
    <div class=\"panel-body\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 13
            echo "        ";
            $context["loopIndex"] = $this->getAttribute($context["loop"], "index", array());
            // line 14
            echo "        ";
            if (($this->getAttribute($context["question"], "type", array()) == "material")) {
                // line 15
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["question"], "subs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "subs", array()), null)) : (null)));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subQuestion"]) {
                    // line 16
                    echo "            ";
                    $this->loadTemplate("testpaper/part/paper-card-choice.html.twig", "exercise/part/paper-card.html.twig", 16)->display(array_merge($context, array("paperResult" => (isset($context["paperResult"]) ? $context["paperResult"] : null), "question" => $context["subQuestion"], "seq" => $this->getAttribute($context["subQuestion"], "seq", array()))));
                    // line 17
                    echo "          ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subQuestion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        ";
            } else {
                // line 19
                echo "          ";
                $this->loadTemplate("testpaper/part/paper-card-choice.html.twig", "exercise/part/paper-card.html.twig", 19)->display(array_merge($context, array("paperResult" => (isset($context["paperResult"]) ? $context["paperResult"] : null), "question" => $context["question"], "seq" => $this->getAttribute($context["question"], "seq", array()))));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        
      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
      ";
        // line 24
        if (twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished"))) {
            // line 25
            echo "        ";
            $this->loadTemplate("testpaper/part/card-choice-explain.html.twig", "exercise/part/paper-card.html.twig", 25)->display($context);
            // line 26
            echo "      ";
        }
        // line 27
        echo "    </div>
    
    <div class=\"panel-footer text-right mt20\">
      ";
        // line 30
        if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)) > 0)) {
            // line 31
            echo "        ";
            if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "doing")) {
                // line 32
                echo "          <a id=\"paper-finish\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#testpaper-finished-dialog\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交练习"), "html", null, true);
                echo "</a>
          <input type=\"hidden\" data-url=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_do_suspend", array("resultId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"test-suspend\">
        ";
            }
            // line 35
            echo "      ";
        } else {
            // line 36
            echo "        <a id=\"paper-finish\" class=\"btn btn-primary\" disabled=\"disabled\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交练习"), "html", null, true);
            echo "</a>
      ";
        }
        // line 38
        echo "    </div>
    
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "exercise/part/paper-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 38,  163 => 36,  160 => 35,  155 => 33,  150 => 32,  147 => 31,  145 => 30,  140 => 27,  137 => 26,  134 => 25,  132 => 24,  129 => 23,  114 => 21,  111 => 20,  108 => 19,  105 => 18,  91 => 17,  88 => 16,  70 => 15,  67 => 14,  64 => 13,  47 => 12,  41 => 9,  37 => 7,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "exercise/part/paper-card.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\exercise\\part\\paper-card.html.twig");
    }
}
