<?php

/* homework/manage/question-picker.html.twig */
class __TwigTemplate_8d13373c9ae23f984e7cf75c8dba3671383d71bf3c29403498326ec95abc31c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "homework/manage/question-picker.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 5
        $context["replaceFor"] = ((array_key_exists("replaceFor", $context)) ? (_twig_default_filter((isset($context["replaceFor"]) ? $context["replaceFor"] : null), null)) : (null));
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/activity-manage/homework/picker/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["replaceFor"]) ? $context["replaceFor"] : null)) {
            echo "替换";
        } else {
            echo "选择";
        }
        echo "题目";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<div id=\"question-picker-body\">
  
  ";
        // line 14
        $this->loadTemplate("homework/manage/picker-search-form.html.twig", "homework/manage/question-picker.html.twig", 14)->display(array_merge($context, array("targetType" => "homework")));
        // line 15
        echo "
  <table class=\"table table-condensed\" id=\"item-picker-table\">
    <thead>
    <tr>
      ";
        // line 19
        if ( !((array_key_exists("replace", $context)) ? (_twig_default_filter((isset($context["replace"]) ? $context["replace"] : null), null)) : (null))) {
            // line 20
            echo "        <th><input type=\"checkbox\" data-role=\"batch-select\"></th>
      ";
        }
        // line 22
        echo "      <th width=\"45%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题干"), "html", null, true);
        echo "</th>
      <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("类型"), "html", null, true);
        echo "</th>
      <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            if ((($this->getAttribute($context["question"], "type", array()) != "material") || ($this->getAttribute($context["question"], "subCount", array()) > 0))) {
                // line 29
                echo "        ";
                $this->loadTemplate("homework/manage/question-picker-tr.html.twig", "homework/manage/question-picker.html.twig", 29)->display($context);
                // line 30
                echo "      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <tr>
          <td colspan=\"20\"><div class=\"empty\">无题目记录,请先去<a class=\"link-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
            echo "\">创建题目</a></div>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
  </table>
  ";
        // line 38
        if ( !(isset($context["replace"]) ? $context["replace"] : null)) {
            // line 39
            echo "    <div id=\"item-operate\">
      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" data-role=\"batch-select\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
            echo "
      </label>
    </div>
  ";
        }
        // line 45
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
</div>

";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "    <span class=\"color-danger pull-left js-choice-notice\" style=\"display:none;\">请选择题目</span>
    <button type=\"button\" class=\"btn btn-primary\" type=\"button\" class=\"btn btn-primary pull-right\" data-role=\"batch-select-save\" data-toggle=\"form-submit\" data-target=\"#block-form\" data-url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_homework_question_picked", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\">确定
    </button>

    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "homework/manage/question-picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 52,  151 => 51,  148 => 50,  139 => 45,  132 => 41,  128 => 39,  126 => 38,  122 => 36,  112 => 32,  109 => 31,  100 => 30,  97 => 29,  85 => 28,  78 => 24,  74 => 23,  69 => 22,  65 => 20,  63 => 19,  57 => 15,  55 => 14,  51 => 12,  48 => 11,  37 => 9,  33 => 1,  31 => 7,  29 => 5,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homework/manage/question-picker.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\homework\\manage\\question-picker.html.twig");
    }
}
