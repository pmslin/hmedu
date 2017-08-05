<?php

/* settings/layout.html.twig */
class __TwigTemplate_f5c4e5a016c14460b3f6a03a0ae061cd5a1e9ce9890f65e0089729efdf8c9503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "settings/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 8
        $this->displayBlock('side', $context, $blocks);
        // line 51
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 53
        $this->displayBlock('main', $context, $blocks);
        // line 54
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_side($context, array $blocks = array())
    {
        // line 9
        echo "      <div class=\"sidenav\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人设置"), "html", null, true);
        echo "</li>
          ";
        // line 12
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 13
        echo "
          <li class=\"list-group-item ";
        // line 14
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "profile")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基础信息"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item ";
        // line 17
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "avatar")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_avatar");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头像设置"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item ";
        // line 20
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "approval")) {
            echo "active";
        }
        echo "\">
           <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setting_approval_submit");
        echo "\"><i class=\"glyphicon glyphicon-registration-mark\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("实名认证"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item ";
        // line 23
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "security")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_security");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全设置"), "html", null, true);
        echo "</a>
          </li>


          ";
        // line 31
        echo "
          <li class=\"list-group-item ";
        // line 32
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "email")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_email");
        echo "\"><i class=\"glyphicon glyphicon-envelope\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱设置"), "html", null, true);
        echo "</a>
          </li>
          
          ";
        // line 36
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("TeacherAudit")) {
            echo "   
          <li class=\"list-group-item ";
            // line 37
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "teacheraudit")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_audit_submit");
            echo "\"><i class=\"glyphicon glyphicon-bookmark\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师资格申请"), "html", null, true);
            echo "</a>
          </li>
          ";
        }
        // line 41
        echo "          
          ";
        // line 42
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind", array()), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind", array()), "enabled", array()), false)) : (false))) {
            // line 43
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "binds")) {
                echo "active";
            }
            echo "\" >
              <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_binds");
            echo "\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("第三方登录"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 47
        echo "
        </ul>
      </div>
    ";
    }

    // line 53
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "settings/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 53,  185 => 47,  177 => 44,  170 => 43,  168 => 42,  165 => 41,  157 => 38,  151 => 37,  147 => 36,  139 => 33,  133 => 32,  130 => 31,  121 => 24,  115 => 23,  108 => 21,  102 => 20,  95 => 18,  89 => 17,  82 => 15,  76 => 14,  73 => 13,  71 => 12,  67 => 11,  63 => 9,  60 => 8,  54 => 54,  52 => 53,  48 => 51,  46 => 8,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\settings\\layout.html.twig");
    }
}
