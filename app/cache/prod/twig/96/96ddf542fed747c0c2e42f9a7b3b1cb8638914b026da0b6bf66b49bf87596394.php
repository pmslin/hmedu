<?php

/* courseset-manage/file/index.html.twig */
class __TwigTemplate_280a3d5caa8224c28823df93b0061d6c951bc16d369aedceef1d39dfe925a12d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : null), "courseset-manage/file/index.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "open") || ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "liveOpen"))) {
            // line 2
            $context["layout"] = "open-course-manage/layout.html.twig";
        } else {
            // line 4
            $context["layout"] = "courseset-manage/layout.html.twig";
        }
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/course-manage-file/index/index.js"));
        // line 11
        $context["side_nav"] = "files";
        // line 12
        $context["tab"] = "courseLesson";
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程文件"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        // line 17
        echo "
  <style type=\"text/css\">
  .tooltip-inner{
  max-width: 600px;
  }
  </style>
  ";
        // line 23
        if (twig_in_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 24
            echo "    ";
            $context["targetType"] = "opencoursematerial";
            // line 25
            echo "  ";
        } else {
            // line 26
            echo "    ";
            $context["targetType"] = "coursematerial";
            // line 27
            echo "  ";
        }
        // line 28
        echo "  <div class=\"panel panel-default\" role=\"courseset-manage-file\">
    <div class=\"panel-heading\">
      <a class=\"btn btn-info btn-sm pull-right\"
        data-toggle=\"modal\" data-target=\"#modal\"
        data-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_batch_upload", array("token" => $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "private"))), "html", null, true);
        echo "\"
      >
        <i class=\"glyphicon glyphicon-cloud-upload\"></i>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加课程文件"), "html", null, true);
        echo "
      </a>
      ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程文件"), "html", null, true);
        echo "
    </div>

    <div class=\"panel-body\" id=\"file-manage-panel\" data-file-status-url=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_file_status");
        echo "\">
      <table class=\"table table-striped table-hover\" id=\"course-lesson-table\">
        <thead>
          <tr>
            <th width=\"5%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
            <th width=\"30%\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件名"), "html", null, true);
        echo "</th>
            <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("类型"), "html", null, true);
        echo "</th>
            <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("大小"), "html", null, true);
        echo "</th>
            <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用"), "html", null, true);
        echo "</th>
            <th>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最后更新"), "html", null, true);
        echo "</th>
            <th>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody>

          ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["uploadFile"]) {
            if ($context["uploadFile"]) {
                // line 55
                echo "            ";
                $this->loadTemplate("courseset-manage/file/tbody-tr.html.twig", "courseset-manage/file/index.html.twig", 55)->display($context);
                // line 56
                echo "          ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无文件记录"), "html", null, true);
            echo "</td></tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uploadFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "          
        </tbody>
      </table>

      <label class=\"checkbox-inline mrm mbm\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>

      <div class=\"btn-group mbm\">
        ";
        // line 66
        if ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "normal") || ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "live"))) {
            // line 67
            echo "          <button class=\"btn btn-danger btn-sm\" data-role=\"batch-delete\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件记录"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_delete_materials_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "type" => (isset($context["tab"]) ? $context["tab"] : null))), "html", null, true);
            echo "\">
        ";
        } elseif ((($this->getAttribute(        // line 68
(isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "open") || ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "liveOpen"))) {
            // line 69
            echo "          <button class=\"btn btn-danger btn-sm\" data-role=\"batch-delete\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件记录"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_delete_materials_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "type" => (isset($context["tab"]) ? $context["tab"] : null))), "html", null, true);
            echo "\">
        ";
        }
        // line 71
        echo "        <i class=\"glyphicon glyphicon-trash\"></i>
        ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移除"), "html", null, true);
        echo "</button>
      </div>

      <nav class=\"text-center\">
        ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
      </nav>

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/file/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 76,  201 => 72,  198 => 71,  190 => 69,  188 => 68,  181 => 67,  179 => 66,  173 => 63,  167 => 59,  158 => 57,  149 => 56,  146 => 55,  134 => 54,  126 => 49,  122 => 48,  118 => 47,  114 => 46,  110 => 45,  106 => 44,  98 => 39,  92 => 36,  87 => 34,  82 => 32,  76 => 28,  73 => 27,  70 => 26,  67 => 25,  64 => 24,  62 => 23,  54 => 17,  51 => 16,  43 => 9,  39 => 6,  37 => 12,  35 => 11,  33 => 7,  30 => 4,  27 => 2,  25 => 1,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/file/index.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\courseset-manage\\file\\index.html.twig");
    }
}
