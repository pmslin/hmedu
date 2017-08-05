<?php

/* admin/layout.html.twig */
class __TwigTemplate_c4a20e8f99831b25d36ec281f7db01b94283ba7cc12cbd84f7f66a53b0c5a85c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_flash_message' => array($this, 'block_page_flash_message'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'tabs' => array($this, 'block_tabs'),
            'capsule' => array($this, 'block_capsule'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "admin/layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode((isset($context["menu"]) ? $context["menu"] : null));
        // line 7
        $context["cloudSmsInfo"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getOldSmsUserStatus(), false);
        // line 8
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
";
        // line 15
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "    ";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 28
        echo "  </title>

  ";
        // line 30
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 31
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 34
        echo "  
  ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
  ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body ";
        // line 50
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
  <!--[if lt IE 9]>
    ";
        // line 52
        $this->loadTemplate("default/ie8-alert.html.twig", "admin/layout.html.twig", 52)->display($context);
        // line 53
        echo "  <![endif]-->

  <div class=\"navbar navbar-inverse navbar-fixed-top\">
  ";
        // line 56
        if ((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null)) {
            // line 57
            echo "    <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>您好，ES云短信发送机制升级优化，网站目前短信剩余";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null), "remainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null), "remainCount", array()), 0)) : (0)), "html", null, true);
            echo "条，为保证继续使用，请开通教育云，点击 <a href=\"http://open.edusoho.com/cloud/access\" target=\"_blank\"> 立即开通</a></strong></div></div>
  ";
        }
        // line 59
        echo "    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
        echo "</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        ";
        // line 69
        $this->loadTemplate("admin/role/templates/navigation.html.twig", "admin/layout.html.twig", 69)->display(array_merge($context, array("parentCode" => "admin")));
        // line 70
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("常用"), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回首页"), "html", null, true);
        echo "</a></li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu main-list\">
              <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
        echo "</a></li>
            </ul>
          </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container ";
        // line 92
        if ((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null)) {
            echo "es-admin-container-down";
        }
        echo "\">

    ";
        // line 94
        $this->loadTemplate("admin/plugin-upgrade-notify-modal.html.twig", "admin/layout.html.twig", 94)->display($context);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('container', $context, $blocks);
        // line 145
        echo "
  </div>

  ";
        // line 148
        $this->displayBlock('footer', $context, $blocks);
        // line 151
        echo "
  ";
        // line 152
        $this->loadTemplate("old-script_boot.html.twig", "admin/layout.html.twig", 152)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 153
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  <div id=\"attachment-modal\" class=\"modal\" ></div>
  ";
        // line 155
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 156
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 157
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("产品"), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("反馈"), "html", null, true);
            echo "</span>
      </a>
    </div>
  ";
        }
        // line 163
        echo "</body>
</html>

";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array())), "name", array())), "html", null, true);
        echo "
    ";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/admin/educloud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 96
    public function block_container($context, array $blocks = array())
    {
        // line 97
        echo "      <div class=\"row\">  
        ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "      </div>
    ";
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "          <div class=\"col-md-2\">
            ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "          </div>

          <div class=\"col-md-10\">
            <div class=\"page-header clearfix\">
              ";
        // line 107
        $this->displayBlock('page_flash_message', $context, $blocks);
        // line 110
        echo "              <h1 class=\"pull-left\">
                ";
        // line 111
        $this->displayBlock('page_title', $context, $blocks);
        // line 114
        echo "              </h1>
              <div class=\"pull-right\">

                ";
        // line 117
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 129
        echo "
              </div>
            </div>

            ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 134
        echo "            
            ";
        // line 135
        $this->displayBlock('tabs', $context, $blocks);
        // line 136
        echo "
            ";
        // line 137
        $this->displayBlock('capsule', $context, $blocks);
        // line 138
        echo "
            ";
        // line 139
        $this->displayBlock('main', $context, $blocks);
        // line 140
        echo "          </div>

        ";
    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        // line 101
        echo "              ";
        $this->loadTemplate("admin/role/templates/side-bar.html.twig", "admin/layout.html.twig", 101)->display($context);
        // line 102
        echo "            ";
    }

    // line 107
    public function block_page_flash_message($context, array $blocks = array())
    {
        // line 108
        echo "
              ";
    }

    // line 111
    public function block_page_title($context, array $blocks = array())
    {
        // line 112
        echo "                  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "code", array())), "name", array())), "html", null, true);
        echo "
                ";
    }

    // line 117
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 118
        echo "
                  ";
        // line 119
        if ((((($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter((isset($context["capsule"]) ? $context["capsule"] : null), false)) : (false)))) {
            // line 120
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode((isset($context["capsule"]) ? $context["capsule"] : null)), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 121
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                  ";
        } else {
            // line 124
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 125
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                  ";
        }
        // line 128
        echo "                ";
    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 135
    public function block_tabs($context, array $blocks = array())
    {
        $this->loadTemplate("admin/role/templates/tabs.html.twig", "admin/layout.html.twig", 135)->display($context);
    }

    // line 137
    public function block_capsule($context, array $blocks = array())
    {
    }

    // line 139
    public function block_main($context, array $blocks = array())
    {
    }

    // line 148
    public function block_footer($context, array $blocks = array())
    {
        // line 149
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 166
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 167
            echo "  <a 
  ";
            // line 168
            if ((isset($context["class"]) ? $context["class"] : null)) {
                // line 169
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
  ";
            }
            // line 171
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 172
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 176
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
  ";
            }
            // line 178
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 179
                echo "    target=\"blank\"
  ";
            }
            // line 181
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array())), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 181,  535 => 179,  532 => 178,  526 => 176,  518 => 172,  515 => 171,  509 => 169,  507 => 168,  504 => 167,  490 => 166,  483 => 149,  480 => 148,  475 => 139,  470 => 137,  464 => 135,  459 => 133,  455 => 128,  452 => 127,  443 => 125,  438 => 124,  435 => 123,  426 => 121,  421 => 120,  419 => 119,  416 => 118,  413 => 117,  406 => 112,  403 => 111,  398 => 108,  395 => 107,  391 => 102,  388 => 101,  385 => 100,  379 => 140,  377 => 139,  374 => 138,  372 => 137,  369 => 136,  367 => 135,  364 => 134,  362 => 133,  356 => 129,  354 => 117,  349 => 114,  347 => 111,  344 => 110,  342 => 107,  336 => 103,  334 => 100,  331 => 99,  328 => 98,  323 => 143,  321 => 98,  318 => 97,  315 => 96,  310 => 44,  304 => 41,  300 => 40,  296 => 39,  292 => 38,  288 => 37,  283 => 36,  280 => 35,  269 => 25,  266 => 24,  259 => 163,  250 => 159,  245 => 157,  242 => 156,  240 => 155,  236 => 153,  234 => 152,  231 => 151,  229 => 148,  224 => 145,  222 => 96,  219 => 95,  217 => 94,  210 => 92,  196 => 83,  191 => 81,  183 => 78,  177 => 75,  172 => 73,  168 => 72,  164 => 70,  162 => 69,  151 => 66,  142 => 59,  136 => 57,  134 => 56,  129 => 53,  127 => 52,  118 => 50,  112 => 47,  108 => 46,  105 => 45,  103 => 44,  100 => 43,  98 => 35,  95 => 34,  90 => 32,  85 => 31,  83 => 30,  79 => 28,  74 => 27,  72 => 24,  66 => 21,  56 => 15,  48 => 8,  46 => 7,  44 => 6,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\admin\\layout.html.twig");
    }
}
