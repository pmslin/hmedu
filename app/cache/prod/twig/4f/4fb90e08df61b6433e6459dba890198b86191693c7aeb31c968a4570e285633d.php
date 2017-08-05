<?php

/* question-manage/index.html.twig */
class __TwigTemplate_a6c345be89ac3deeb763cdefb1546bf82d4bed818a98a8d11d9230f5f8130361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "question-manage/index.html.twig", 1);
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
        $context["macro"] = $this->loadTemplate("macro.html.twig", "question-manage/index.html.twig", 2);
        // line 6
        $context["parentId"] = (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0));
        // line 8
        $context["side_nav"] = "question";
        // line 9
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/question-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
 ";
        // line 13
        $context["questionTypes"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 14
        echo "
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">
      <div class=\"pull-right\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questionTypes"]) ? $context["questionTypes"] : null));
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
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 19
            echo "          ";
            if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                // line 20
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_create", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "type" => $context["type"], "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\"><span class=\"es-icon es-icon-anonymous-iconfont\"></span> ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
          ";
            }
            // line 22
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <div class=\"btn-group\">
        <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu pull-right\">
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questionTypes"]) ? $context["questionTypes"] : null));
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
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 27
            echo "            ";
            if ((($this->getAttribute($context["loop"], "index", array()) > 3) && ((($context["type"] == "material") &&  !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) || ($context["type"] != "material")))) {
                // line 28
                echo "              <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_create", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "type" => $context["type"], "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
                echo "\"><span class=\"es-icon es-icon-anonymous-iconfont\"></span> ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a></li>
            ";
            }
            // line 30
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
      </div>

      </div>
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目管理"), "html", null, true);
        echo "
    </div>

    <div class=\"panel-body \" id=\"quiz-table-container\">

      ";
        // line 40
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 41
            echo "        <ol class=\"breadcrumb\">
          <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目管理"), "html", null, true);
            echo "</a></li>
          <li class=\"active\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("材料题"), "html", null, true);
            echo "</li>
        </ol>
      ";
        }
        // line 46
        echo "
      ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      ";
        // line 49
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 50
            echo "        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"well well-sm short-long-text\">
              <div class=\"short-text\">";
            // line 53
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "stem", array()), 100);
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展开"), "html", null, true);
            echo ")</span></div>
              <div class=\"long-text\">";
            // line 54
            echo $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "stem", array());
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
            echo ")</span></div>
            </div>
          </div>
        </div>
      ";
        }
        // line 59
        echo "
      ";
        // line 60
        if ( !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 61
            echo "        ";
            $this->loadTemplate("question-manage/search-form.html.twig", "question-manage/index.html.twig", 61)->display($context);
            // line 62
            echo "      ";
        }
        // line 63
        echo "
      <table class=\"table table-striped table-hover\" id=\"quiz-table\">
        <thead>
        <tr>
          <th><input type=\"checkbox\"  autocomplete=\"off\"  data-role=\"batch-select\"></th>
          <th width=\"45%\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题干"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("类型"), "html", null, true);
        echo "</th>
          <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最后更新"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
          ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 76
            echo "            ";
            $this->loadTemplate("question-manage/question-tr.html.twig", "question-manage/index.html.twig", 76)->display($context);
            // line 77
            echo "          ";
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
            // line 78
            echo "            <tr>
              <td colspan=\"20\"><div class=\"empty\">";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("一道题都没有，请点击右上角按钮，按不同的题型录入题目"), "html", null, true);
            echo "</div></td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
      </table>
      <div>
        <label class=\"checkbox-inline\"><input type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-select\"> ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_deletes", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\" data-loading-text=\"正在删除...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
        <span class=\"pull-right color-gray\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共%getItemCount()%题", array("%getItemCount()%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method"))), "html", null, true);
        echo "</span>
      </div>
      <nav class=\"text-center\">
        ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
      </nav>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "question-manage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 90,  311 => 87,  303 => 86,  299 => 85,  294 => 82,  285 => 79,  282 => 78,  269 => 77,  266 => 76,  248 => 75,  241 => 71,  237 => 70,  233 => 69,  229 => 68,  222 => 63,  219 => 62,  216 => 61,  214 => 60,  211 => 59,  201 => 54,  195 => 53,  190 => 50,  188 => 49,  183 => 47,  180 => 46,  174 => 43,  168 => 42,  165 => 41,  163 => 40,  155 => 35,  149 => 31,  135 => 30,  127 => 28,  124 => 27,  107 => 26,  102 => 23,  88 => 22,  80 => 20,  77 => 19,  60 => 18,  54 => 14,  52 => 13,  49 => 12,  46 => 11,  38 => 4,  34 => 1,  32 => 9,  30 => 8,  28 => 6,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/index.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\question-manage\\index.html.twig");
    }
}
