<?php

/* file-chooser/file-choose.html.twig */
class __TwigTemplate_826a1f46f6d3e689dbce524e5d79954b79780c9ff99292de0b93776faa3eae4e extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"media\" id=\"media\">
<div class=\"file-chooser-bar ";
        // line 2
        if ( !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
            echo "hidden ";
        }
        echo "\">
  <span data-role=\"placeholder\">";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "filename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "filename", array()), null)) : (null)), "html", null, true);
        echo "</span>
  <button class=\"btn btn-link btn-sm js-choose-trigger\" type=\"button\">
    <i class=\"glyphicon glyphicon-edit\"></i>
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "
  </button>

  <div class=\"alert alert-warning\" data-role=\"waiting-tip\"
       style=\"display:none;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。"), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("转换完成后将以站内消息通知您。"), "html", null, true);
        echo "
  </div>
</div>
<div class=\"file-chooser-main ";
        // line 13
        if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
            echo "hidden ";
        }
        echo "\">
  <div class=\"file-chooser-nav\">
    <ul class=\"nav nav-pills nav-pills-sm  nav-pills-gray mb0\" id=\"material\">
      <li role=\"presentation\" class=\"active\"><a
            href=\"#chooser-upload-panel\">上传资料</a></li>
      <li role=\"presentation\"><a href=\"#chooser-material-panel\">从资料库中选择</a></li>
      <li role=\"presentation\"><a href=\"#chooser-course-panel\">从课程中选择文件</a></li>
      ";
        // line 20
        if ((((isset($context["mediaType"]) ? $context["mediaType"] : null) == "video") &&  !((array_key_exists("hideImportVideo", $context)) ? (_twig_default_filter((isset($context["hideImportVideo"]) ? $context["hideImportVideo"] : null), false)) : (false)))) {
            // line 21
            echo "        <li role=\"presentation\" >
          <a class=\"js-import-video\" href=\"#import-video-panel\" data-link=\"";
            // line 22
            if ((((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) ? $context["link"] : null), null)) : (null)) && ((isset($context["link"]) ? $context["link"] : null) != "self"))) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            }
            echo "\">导入网络视频</a>
        </li>
      ";
        }
        // line 25
        echo "      ";
        if (((isset($context["mediaType"]) ? $context["mediaType"] : null) == "download")) {
            // line 26
            echo "        <li role=\"presentation\"><a href=\"#import-link-panel\">网络连接</a>
        </li>
      ";
        }
        // line 29
        echo "    </ul>
  </div>
  <div class=\"tab-content \">
    <div class=\"tab-pane file-chooser-tab active\" id=\"chooser-upload-panel\">
      ";
        // line 33
        $this->loadTemplate("file-chooser/parts/upload-file.html.twig", "file-chooser/file-choose.html.twig", 33)->display($context);
        // line 34
        echo "    </div>

    <div class=\"tab-pane \" id=\"chooser-material-panel\">
      ";
        // line 37
        $this->loadTemplate("file-chooser/parts/materiallib-choose.html.twig", "file-chooser/file-choose.html.twig", 37)->display($context);
        // line 38
        echo "    </div>

    <div class=\"tab-pane file-chooser-tab\" id=\"chooser-course-panel\">
      ";
        // line 41
        $this->loadTemplate("file-chooser/parts/course-file-choose.html.twig", "file-chooser/file-choose.html.twig", 41)->display($context);
        // line 42
        echo "    </div>

    ";
        // line 44
        if ((((isset($context["mediaType"]) ? $context["mediaType"] : null) == "video") &&  !((array_key_exists("hideImportVideo", $context)) ? (_twig_default_filter((isset($context["hideImportVideo"]) ? $context["hideImportVideo"] : null), false)) : (false)))) {
            // line 45
            echo "      <div class=\"tab-pane file-chooser-tab\" id=\"import-video-panel\">
        ";
            // line 46
            $this->loadTemplate("file-chooser/parts/import-video.html.twig", "file-chooser/file-choose.html.twig", 46)->display($context);
            // line 47
            echo "      </div>
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if (((isset($context["mediaType"]) ? $context["mediaType"] : null) == "download")) {
            // line 51
            echo "      <div class=\"tab-pane file-chooser-tab\" id=\"import-link-panel\">
        ";
            // line 52
            $this->loadTemplate("file-chooser/parts/import-link.html.twig", "file-chooser/file-choose.html.twig", 52)->display($context);
            // line 53
            echo "      </div>
    ";
        }
        // line 55
        echo "  </div>

</div>

";
        // line 59
        if (((isset($context["mediaType"]) ? $context["mediaType"] : null) == "download")) {
            // line 60
            echo "  <p class=\"mbl mtl\"><label>资料名称：</label><span class=\"js-current-file\">(请上传或选择资料)</span></p>
  <div class=\"row\">
    <div class=\"col-sm-10\"><input class=\"form-control \" type=\"text\" id=\"file-summary\" placeholder=\"填写资料简介（可选）\"></div>
    <div class=\"col-sm-2\"><a class=\"btn btn-primary btn-block js-add-file-list\">添加资料</a></div>
  </div>
  <span class=\"color-success js-success-redmine\"></span>
  <span class=\"color-danger js-danger-redmine\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "file-chooser/file-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  140 => 59,  134 => 55,  130 => 53,  128 => 52,  125 => 51,  123 => 50,  120 => 49,  116 => 47,  114 => 46,  111 => 45,  109 => 44,  105 => 42,  103 => 41,  98 => 38,  96 => 37,  91 => 34,  89 => 33,  83 => 29,  78 => 26,  75 => 25,  66 => 22,  63 => 21,  61 => 20,  49 => 13,  41 => 10,  34 => 6,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/file-choose.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\file-chooser\\file-choose.html.twig");
    }
}
