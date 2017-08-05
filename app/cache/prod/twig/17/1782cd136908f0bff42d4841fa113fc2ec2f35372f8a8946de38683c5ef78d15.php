<?php

/* @Twig/Exception/error403.html.twig */
class __TwigTemplate_a2943dcf52920ea6e78ddda65d8e19696f880a80301a73810b616f1ad4d382b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle:Exception:layout.html.twig", "@Twig/Exception/error403.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "访问被拒绝 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container\">
    <div class=\"panel panel-default error-panel\">
      <div class=\"panel-heading\">
        <span class=\"error-title\">403</span>访问被拒绝
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <p>
            ";
        // line 13
        if ((($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "")) : (""))) {
            // line 14
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 16
            echo "               你没有权限访问该页面！
            ";
        }
        // line 18
        echo "          </p>
          <p>请确认您的来源链接是否正确？是否拥有该权限？</p>
          <p><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("ref" => 403));
        echo "\">返回首页 ></a></p>
          <span class=\"error-403-icon hidden-xs\"></span>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  61 => 18,  57 => 16,  51 => 14,  49 => 13,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error403.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\TwigBundle\\views\\Exception\\error403.html.twig");
    }
}
