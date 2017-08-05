<?php

/* attachment/form-fields.html.twig */
class __TwigTemplate_735c1d9a543c9f8344db722b7f79e816db6ca617b4e3d61b446d038def115508 extends Twig_Template
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
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_attachment.enable") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting(("cloud_attachment." . (isset($context["target"]) ? $context["target"] : null)))) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 2
            echo "  
  ";
            // line 3
            $context["ids_class"] = ((((isset($context["useType"]) ? $context["useType"] : null) == true)) ? (("js-attachment-ids-" . (isset($context["fileType"]) ? $context["fileType"] : null))) : ("js-attachment-ids"));
            // line 4
            echo "  ";
            $context["list_class"] = ((((isset($context["useType"]) ? $context["useType"] : null) == true)) ? (("js-attachment-list-" . (isset($context["fileType"]) ? $context["fileType"] : null))) : ("js-attachment-list"));
            // line 5
            echo "  ";
            $context["reupload"] = twig_length_filter($this->env, ((array_key_exists("attachments", $context)) ? (_twig_default_filter((isset($context["attachments"]) ? $context["attachments"] : null), null)) : (null)));
            // line 6
            echo "
  ";
            // line 7
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiawebbundle/controller/attachment/upload-form");
            // line 8
            echo "
  ";
            // line 9
            if ((((array_key_exists("bundle_namespace", $context)) ? (_twig_default_filter((isset($context["bundle_namespace"]) ? $context["bundle_namespace"] : null), null)) : (null)) == "admin")) {
                // line 10
                echo "    ";
                $this->loadTemplate("seajs_loader_compatible.html.twig", "attachment/form-fields.html.twig", 10)->display(array_merge($context, array("topxiaadminbundle" => true)));
                // line 11
                echo "  ";
            } else {
                // line 12
                echo "    ";
                $this->loadTemplate("seajs_loader_compatible.html.twig", "attachment/form-fields.html.twig", 12)->display(array_merge($context, array("topxiawebbundle" => true)));
                // line 13
                echo "  ";
            }
            echo "  
  
  <div class=\"form-group\">
    ";
            // line 16
            if (((array_key_exists("showLabel", $context)) ? (_twig_default_filter((isset($context["showLabel"]) ? $context["showLabel"] : null), false)) : (false))) {
                // line 17
                echo "      <label class=\"col-xs-2 control-label\" for=\"thread_title\">
        ";
                // line 18
                if (((isset($context["targetType"]) ? $context["targetType"] : null) == "question.stem")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题干附件"), "html", null, true);
                    echo "
        ";
                } elseif ((                // line 19
(isset($context["targetType"]) ? $context["targetType"] : null) == "question.analysis")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("解析附件"), "html", null, true);
                    echo "
        ";
                } elseif ((                // line 20
(isset($context["targetType"]) ? $context["targetType"] : null) == "question.answer")) {
                    // line 21
                    echo "        ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("附件"), "html", null, true);
                }
                // line 22
                echo "      </label>
      <div class=\"col-xs-7 controls\">
    ";
            } else {
                // line 25
                echo "      <div class=\"controls\"> 
    ";
            }
            // line 27
            echo "      <div class=\"js-attachment-list ";
            echo twig_escape_filter($this->env, (isset($context["list_class"]) ? $context["list_class"] : null), "html", null, true);
            echo "\" style=\"line-height:60px\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) ? $context["attachments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                if ($this->getAttribute($context["attachment"], "file", array())) {
                    // line 29
                    echo "          <div class=\"well well-sm\">
            <img class=\"mrm\" src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/img/default/cloud_" . $this->getAttribute($this->getAttribute($context["attachment"], "file", array()), "type", array())) . ".png")), "html", null, true);
                    echo "\" height=\"60px\" width=\"107px\">
            ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attachment"], "file", array()), "filename", array()), "html", null, true);
                    echo "
            <button class=\"btn btn-link js-attachment-delete pull-right\" data-url=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attachment_delete", array("id" => $this->getAttribute($context["attachment"], "id", array()))), "html", null, true);
                    echo "\" type=\"button\" style=\"margin-top:13px\" data-role=\"delte-item\" data-loading-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在删除..."), "html", null, true);
                    echo "\">删除</button> 
            <a class=\"btn btn-link pull-right\" style=\"margin-top:13px\" data-url=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attachment_preview", array("id" => $this->getAttribute($context["attachment"], "id", array()))), "html", null, true);
                    echo "\" href=\"#modal\"  data-toggle=\"modal\" >预览</a>
          </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </div>
      
      <a class=\"btn btn-primary js-upload-file\" ";
            // line 38
            if ((isset($context["reupload"]) ? $context["reupload"] : null)) {
                echo "style=\"display: none;\"";
            }
            echo " data-toggle=\"modal\" data-backdrop=\"static\"
         data-target=\"#attachment-modal\"
         data-url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attachment_upload", array("useSeajs" => ((array_key_exists("useSeajs", $context)) ? (_twig_default_filter((isset($context["useSeajs"]) ? $context["useSeajs"] : null), false)) : (false)), "idsClass" => (isset($context["ids_class"]) ? $context["ids_class"] : null), "listClass" => (isset($context["list_class"]) ? $context["list_class"] : null), "token" => $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken("attachment", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "private"), "currentTarget" => (isset($context["currentTarget"]) ? $context["currentTarget"] : null))), "html", null, true);
            echo "\"
         title=\"上传附件\" data-placement=\"bottom\" data-title=\"上传附件\">
         上传附件
      </a>
    </div>
    ";
            // line 46
            echo "    
    <input class=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["ids_class"]) ? $context["ids_class"] : null), "html", null, true);
            echo "\" 
      value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_join_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->arrayColumn((isset($context["attachments"]) ? $context["attachments"] : null), "fileId"), ","), "html", null, true);
            echo "\" 
      name=\"";
            // line 49
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo "attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][fileIds]";
            } else {
                echo "attachment[fileIds]";
            }
            echo "\" 
      type=\"hidden\" data-role=\"fileId\">

    <input class=\"js-file-target-type\" 
      value=\"";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
            echo "\" 
      name=\"";
            // line 54
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo "attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][targetType]";
            } else {
                echo "attachment[targetType]";
            }
            echo "\"
      type=\"hidden\">

    <input class=\"js-file-type\" 
      value=\"";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" 
      name=\"";
            // line 59
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo "attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][type]";
            } else {
                echo "attachment[type]";
            }
            echo "\"
      type=\"hidden\">
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "attachment/form-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  186 => 58,  173 => 54,  169 => 53,  156 => 49,  152 => 48,  148 => 47,  145 => 46,  137 => 40,  130 => 38,  126 => 36,  116 => 33,  110 => 32,  106 => 31,  102 => 30,  99 => 29,  94 => 28,  89 => 27,  85 => 25,  80 => 22,  75 => 21,  73 => 20,  68 => 19,  63 => 18,  60 => 17,  58 => 16,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  40 => 9,  37 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "attachment/form-fields.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\attachment\\form-fields.html.twig");
    }
}
