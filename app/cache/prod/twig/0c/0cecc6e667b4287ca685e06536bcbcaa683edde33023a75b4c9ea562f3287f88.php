<?php

/* org/course-create-org-tree-select.html.twig */
class __TwigTemplate_bb716820840dddc5f0aec0f5ba424a3a28bb75766ef5d5f04eb64fe3a0c430a0 extends Twig_Template
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
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            echo " 
  
  ";
            // line 4
            echo "  ";
            // line 5
            echo "
  ";
            // line 6
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : null), null)) : (null));
            // line 7
            echo "
  ";
            // line 8
            if (((isset($context["modal"]) ? $context["modal"] : null) == "modal")) {
                // line 9
                echo "    ";
                $this->loadTemplate("seajs_loader_compatible.html.twig", "org/course-create-org-tree-select.html.twig", 9)->display(array_merge($context, array("topxiawebbundle" => true)));
                // line 10
                echo "    <script>app.lazyLoad = function() { app.load('topxiawebbundle/controller/widget/category-select') };</script>
  ";
            } else {
                // line 12
                echo "    ";
                $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiawebbundle/controller/widget/category-select");
                // line 13
                echo "    ";
                $this->loadTemplate("seajs_loader_compatible.html.twig", "org/course-create-org-tree-select.html.twig", 13)->display(array_merge($context, array("topxiawebbundle" => true)));
                // line 14
                echo "  ";
            }
            // line 15
            echo "
  ";
            // line 16
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter((isset($context["colmd"]) ? $context["colmd"] : null), 8)) : (8));
            // line 17
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter((isset($context["lablecolmd"]) ? $context["lablecolmd"] : null), 2)) : (2));
            // line 18
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter((isset($context["nocolmd"]) ? $context["nocolmd"] : null), false)) : (false));
            // line 19
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter((isset($context["inputClass"]) ? $context["inputClass"] : null), "")) : (""));
            echo " 

  ";
            // line 21
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter((isset($context["orgCode"]) ? $context["orgCode"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "orgCode", array())));
            // line 22
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) ? (null) : ((isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : null)))));
            // line 23
            echo "
    <div class=\"course-title form-group\">
      <div class=\"col-md-2 controls-label text-lg\">
        <div class=\"course-piece title\">
          ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("组织机构"), "html", null, true);
            echo "
        </div>
      </div>
      <div class=\"col-md-10\">
        <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select ";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["inputClass"]) ? $context["inputClass"] : null), "html", null, true);
            echo "\">
          <option value=";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : null), 0, array()), "orgCode", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : null), 0, array()), "name", array()), "html", null, true);
            echo "</option>
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 34
                echo "            <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "orgCode", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["org"], "orgCode", array()) == (isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : null))) {
                    echo "selected";
                }
                echo ">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["org"], "depth", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($this->getAttribute($context["org"], "depth", array()) > 1)) {
                        echo "　";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "name", array()), "html", null, true);
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </select>
      </div>
    </div>

 ";
        }
    }

    public function getTemplateName()
    {
        return "org/course-create-org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  101 => 34,  97 => 33,  91 => 32,  87 => 31,  80 => 27,  74 => 23,  71 => 22,  69 => 21,  63 => 19,  60 => 18,  57 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  39 => 10,  36 => 9,  34 => 8,  31 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/course-create-org-tree-select.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\org\\course-create-org-tree-select.html.twig");
    }
}
