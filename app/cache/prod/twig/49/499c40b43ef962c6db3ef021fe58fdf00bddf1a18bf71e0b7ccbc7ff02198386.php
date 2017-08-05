<?php

/* category/explore-nav.html.twig */
class __TwigTemplate_4b2e63002b7c0594bfc9e0e548fd1231780aeae78aeea0885c3f6a5ab20d4141 extends Twig_Template
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
        $context["tagMarks"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("TagMarks", array("tags" => (isset($context["tags"]) ? $context["tags"] : null)));
        // line 2
        $context["categoryMarks"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CategoryMarks", array("selectedCategory" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "selectedSubCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "selectedthirdLevelCategory" => (isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null)));
        // line 3
        $context["selectedTagGroups"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("SelectedTagGroups", array("tags" => (isset($context["tags"]) ? $context["tags"] : null)));
        // line 4
        echo "
<div class=\"tabs-wrapper\">
  <div class=\"tabs-mark-group plm ptm\">
    <div class=\"title\">所有分类：</div>

    <ul class=\"content list-unstyled list-inline\">
      <li class=\"classify\">
        ";
        // line 11
        if ((($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 0, array(), "array"), "")) : (""))) {
            // line 12
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 0, array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 0, array(), "array", false, true), "name", array()), "")) : ("")), "html", null, true);
            echo "<i class=\"es-icon es-icon-chevronright\"></i></a>
        ";
        }
        // line 14
        echo "      </li>

      <li class=\"classify\">
        ";
        // line 17
        if ((($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 1, array(), "array"), "")) : (""))) {
            // line 18
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 1, array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 1, array(), "array", false, true), "name", array()), "")) : ("")), "html", null, true);
            echo "<i class=\"es-icon es-icon-chevronright\"></i></a>
        ";
        }
        // line 20
        echo "      </li>

      <li class=\"classify\">
        ";
        // line 23
        if ((($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 2, array(), "array"), "")) : (""))) {
            // line 24
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 2, array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 2, array(), "array", false, true), "name", array()), "")) : ("")), "html", null, true);
            echo "<i class=\"es-icon es-icon-chevronright\"></i></a>
        ";
        }
        // line 26
        echo "      </li>

      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("tagMarks", $context)) ? (_twig_default_filter((isset($context["tagMarks"]) ? $context["tagMarks"] : null), "")) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["tagMark"]) {
            // line 29
            echo "        <li class=\"tabs-mark\">
          <a class=\"btn btn-link\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "selectedthirdLevelCategory" => (isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null), "selectedTag" => array("group" => $this->getAttribute($context["tagMark"], "groupId", array()), "tag" => $this->getAttribute($context["tagMark"], "tagId", array()))), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tagMark"], "tagName", array()), "html", null, true);
            echo "<i class=\"glyphicon glyphicon-remove\"></i></a>
        </li>     
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagMark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>

  </div>

  <div class=\"tabs-group\">
    <div class=\"title\">分类:</div>
      <ul class=\"content clearfix\">
        <li class=\"";
        // line 40
        if ( !(isset($context["selectedCategory"]) ? $context["selectedCategory"] : null)) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
        echo "\">全部</a></li>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            echo "          <li class=\"";
            if (($this->getAttribute($context["category"], "code", array()) == (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null))) {
                echo "active";
            }
            echo "\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => $this->getAttribute($context["category"], "code", array()), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </ul>
  </div>

  ";
        // line 47
        if (((array_key_exists("subCategories", $context)) ? (_twig_default_filter((isset($context["subCategories"]) ? $context["subCategories"] : null), null)) : (null))) {
            // line 48
            echo "    <div class=\"tabs-group\" >
     <div class=\"title\"></div>
      <ul class=\"content clearfix\">
        <li class=\"";
            // line 51
            if ( !(isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null)) {
                echo "active";
            }
            echo "\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">全部</a></li>   
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subCategories"]) ? $context["subCategories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 53
                echo "          <li class=\"";
                if (($this->getAttribute($context["subCategory"], "code", array()) == (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null))) {
                    echo "active";
                }
                echo "\"><a class=\"nav-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => $this->getAttribute($context["subCategory"], "code", array()), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "      </ul>
    </div>
  ";
        }
        // line 58
        echo "

  ";
        // line 60
        if (((array_key_exists("thirdLevelCategories", $context)) ? (_twig_default_filter((isset($context["thirdLevelCategories"]) ? $context["thirdLevelCategories"] : null), null)) : (null))) {
            // line 61
            echo "    <div class=\"tabs-group\" >
     <div class=\"title\"></div>
      <ul class=\"content clearfix\">
        <li class=\"";
            // line 64
            if ( !(isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null)) {
                echo "active";
            }
            echo "\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">全部</a></li>   
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["thirdLevelCategories"]) ? $context["thirdLevelCategories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 66
                echo "          <li class=\"";
                if (($this->getAttribute($context["category"], "code", array()) == (isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null))) {
                    echo "active";
                }
                echo "\"><a class=\"nav-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "selectedthirdLevelCategory" => $this->getAttribute($context["category"], "code", array()), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "      </ul>
    </div>
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tagGroups"]) ? $context["tagGroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tagGroup"]) {
            // line 73
            echo "    ";
            if (twig_in_filter((isset($context["group"]) ? $context["group"] : null), $this->getAttribute($context["tagGroup"], "scope", array()))) {
                // line 74
                echo "      ";
                if (!twig_in_filter($this->getAttribute($context["tagGroup"], "id", array()), (isset($context["selectedTagGroups"]) ? $context["selectedTagGroups"] : null))) {
                    // line 75
                    echo "        <div class=\"tabs-group\">
          <div class=\"title\">";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tagGroup"], "name", array()), "html", null, true);
                    echo ":</div>
          <ul class=\"content clearfix\">
            ";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tagGroup"], "subs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 79
                        echo "              <li class=\"";
                        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->tagEqual((isset($context["tags"]) ? $context["tags"] : null), $this->getAttribute($context["sub"], "id", array()), $this->getAttribute($context["tagGroup"], "id", array()))) {
                            echo "active";
                        }
                        echo "\" ><a class=\"nav-link tag\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "selectedthirdLevelCategory" => (isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null), "selectedTag" => array("group" => $this->getAttribute($context["tagGroup"], "id", array()), "tag" => $this->getAttribute($context["sub"], "id", array()))), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "name", array()), "html", null, true);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "          </ul>
        </div>
      ";
                }
                // line 84
                echo "    ";
            }
            // line 85
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "category/explore-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 86,  267 => 85,  264 => 84,  259 => 81,  244 => 79,  240 => 78,  235 => 76,  232 => 75,  229 => 74,  226 => 73,  222 => 72,  219 => 71,  214 => 68,  199 => 66,  195 => 65,  187 => 64,  182 => 61,  180 => 60,  176 => 58,  171 => 55,  156 => 53,  152 => 52,  144 => 51,  139 => 48,  137 => 47,  132 => 44,  117 => 42,  113 => 41,  105 => 40,  96 => 33,  85 => 30,  82 => 29,  78 => 28,  74 => 26,  66 => 24,  64 => 23,  59 => 20,  51 => 18,  49 => 17,  44 => 14,  36 => 12,  34 => 11,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "category/explore-nav.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\category\\explore-nav.html.twig");
    }
}
