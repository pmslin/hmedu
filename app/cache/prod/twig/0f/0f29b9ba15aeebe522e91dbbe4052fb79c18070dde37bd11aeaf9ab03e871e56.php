<?php

/* testpaper/manage/check-list-item.html.twig */
class __TwigTemplate_5e38c86f61f3eb0ec243125fc8ef8036b81cfbfec9ae63e8c614267dd3792587 extends Twig_Template
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
        $context["testpaper"] = ((array_key_exists("testpaper", $context)) ? (_twig_default_filter((isset($context["testpaper"]) ? $context["testpaper"] : null), null)) : (null));
        // line 2
        $context["targetResultInfo"] = ((array_key_exists("targetResultInfo", $context)) ? (_twig_default_filter((isset($context["targetResultInfo"]) ? $context["targetResultInfo"] : null), null)) : (null));
        // line 3
        $context["resultListRout"] = ((array_key_exists("resultListRout", $context)) ? (_twig_default_filter((isset($context["resultListRout"]) ? $context["resultListRout"] : null), "course_manage_testpaper_result_list")) : ("course_manage_testpaper_result_list"));
        // line 4
        echo "
<style>
  .testpaper-list{
    border-radius: 5px;
    padding-bottom: 0px;
    border: 0;
    overflow:hidden;
    margin-bottom: 20px
  }
  .testpaper-list a{
    color: #272a41;
  }

  .testpaper-meta{
    color: #9496a1;
  }
  .testpaper-info{
    background-color: #fafafa;
    padding: 0 15px;
  }
  .testpaper-describe{
    color: #9496a1;
    height: 40px;
    overflow:hidden;
  }
  .result-info{
    background-color: #f4f4f4;
    height: 129px;
    border-left: 1px dashed #dcdcdc;
    padding: 40px 11px 35px 11px;
  }
  .count-info a{
    color: inherit;
  }
  .testpaper-span{
    padding-bottom: 10px;
    border-bottom: 1px solid;
  }
  .panel-default {
    padding:  0 20px;
  }
</style>

<div class=\"clearfix testpaper-list\">
  <div class=\" testpaper-info col-md-9\"> 
    <div>
      <h3>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["resultListRout"]) ? $context["resultListRout"] : null), array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "status" => "all")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
        echo "</a>
      </h3>
    </div>
    <div class=\"testpaper-describe\">";
        // line 54
        echo $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array());
        echo "</div>
    <div class=\"mvm testpaper-meta\">             
      <span class=\"mrl\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开始日期"), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "createdTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</span>
    </div>
  </div>

  <div class=\"result-info col-md-3 text-center\">
    <div class=\"row\">
      <div class=\"count-info pull-left color-primary col-md-4\">
        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["resultListRout"]) ? $context["resultListRout"] : null), array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "status" => "finished")), "html", null, true);
        echo "\">  
          <span class=\"testpaper-span \">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已批"), "html", null, true);
        echo "</span><br>
          <p class=\"mtm pts\">";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["targetResultInfo"]) ? $context["targetResultInfo"] : null), "finished", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targetResultInfo"]) ? $context["targetResultInfo"] : null), "finished", array()), 0)) : (0)), "html", null, true);
        echo "</p>
        </a>
      </div>
      <div class=\"count-info pull-left  color-warning col-md-4\">
        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["resultListRout"]) ? $context["resultListRout"] : null), array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\"> 
          <span class=\"testpaper-span\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未批"), "html", null, true);
        echo "</span><br>
          <p class=\"mtm pts\">";
        // line 71
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["targetResultInfo"]) ? $context["targetResultInfo"] : null), "reviewing", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targetResultInfo"]) ? $context["targetResultInfo"] : null), "reviewing", array()), 0)) : (0)), "html", null, true);
        echo "</p>
        </a>
      </div>
      <div class=\"count-info pull-left color-danger col-md-4\">
      <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["resultListRout"]) ? $context["resultListRout"] : null), array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "status" => "doing")), "html", null, true);
        echo "\"> 
        <span class=\"testpaper-span\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未交"), "html", null, true);
        echo "</span><br>
        <p class=\"mtm pts\">";
        // line 77
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["targetResultInfo"]) ? $context["targetResultInfo"] : null), "doing", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targetResultInfo"]) ? $context["targetResultInfo"] : null), "doing", array()), 0)) : (0)), "html", null, true);
        echo "</p>
      </a>
      </div> 
    </div>             
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/check-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 77,  133 => 76,  129 => 75,  122 => 71,  118 => 70,  114 => 69,  107 => 65,  103 => 64,  99 => 63,  87 => 56,  82 => 54,  74 => 51,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/check-list-item.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\check-list-item.html.twig");
    }
}
