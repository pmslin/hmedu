<?php

/* testpaper/manage/index.html.twig */
class __TwigTemplate_b34d3c6ff90cf14cf2d372f5ee178c3bde1b8ae3e4eb2f5623dd137a2d9edc46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "testpaper/manage/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "testpaper/manage/index.html.twig", 2);
        // line 6
        $context["side_nav"] = "testpaper";
        // line 7
        $context["parentId"] = ((array_key_exists("parentId", $context)) ? (_twig_default_filter((isset($context["parentId"]) ? $context["parentId"] : null), null)) : (null));
        // line 9
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/testpaper-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">
      <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_create", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\"
         class=\"btn btn-info btn-sm pull-right mls\"><span class=\"es-icon es-icon-anonymous-iconfont\"></span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建试卷"), "html", null, true);
        echo "</a>
      ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷管理"), "html", null, true);
        echo "
    </div>

    <div class=\"panel-body \" id=\"quiz-table-container\">

      <table class=\"table table-striped table-hover\" id=\"quiz-table\">
        ";
        // line 23
        echo $context["web_macro"]->getflash_messages();
        echo "
        <thead>
        <tr>
          <th><input type=\"checkbox\" autocomplete=\"off\" data-role=\"batch-select\"></th>
          <th width=\"20%\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
          <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
          <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目统计"), "html", null, true);
        echo "</th>
          <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("时间限制"), "html", null, true);
        echo "</th>
          <th >";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更新人/时间"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testpapers"]) ? $context["testpapers"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["testpaper"]) {
            // line 37
            echo "          ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["testpaper"], "updatedUserId", array()), array(), "array");
            // line 38
            echo "          ";
            $this->loadTemplate("testpaper/manage/testpaper-list-tr.html.twig", "testpaper/manage/index.html.twig", 38)->display($context);
            // line 39
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 40
            echo "          <tr>
            <td colspan=\"20\">
              <div class=\"empty\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有试卷，请点击右上角按钮，"), "html", null, true);
            echo "
                <a class=\"link-primary\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_create", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建一个新试卷"), "html", null, true);
            echo "</a>
              </div>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testpaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
      </table>
      <div>
        <label class=\"checkbox-inline\"><input type=\"checkbox\" autocomplete=\"off\" data-role=\"batch-select\"> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_deletes", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      </div>

      ";
        // line 55
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "

      <div class=\"color-gray mtl\">
        ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示：试卷一旦发布不能修改，发布后的试卷需要"), "html", null, true);
        echo "
        <strong class=\"color-warning\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加到任务"), "html", null, true);
        echo "</strong>
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中才能正常使用。"), "html", null, true);
        echo "
      </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 60,  192 => 59,  188 => 58,  182 => 55,  172 => 52,  168 => 51,  163 => 48,  150 => 43,  146 => 42,  142 => 40,  129 => 39,  126 => 38,  123 => 37,  105 => 36,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  71 => 23,  62 => 17,  58 => 16,  54 => 15,  49 => 12,  46 => 11,  38 => 4,  34 => 1,  32 => 9,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/index.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\index.html.twig");
    }
}
