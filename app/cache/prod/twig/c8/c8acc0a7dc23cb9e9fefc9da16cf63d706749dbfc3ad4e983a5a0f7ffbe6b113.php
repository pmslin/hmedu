<?php

/* testpaper/manage/question.html.twig */
class __TwigTemplate_38ef8c0d704197757663c5acf6971225cb1058fd29538b82cf82823e0fa5724c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "testpaper/manage/question.html.twig", 1);
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
        // line 5
        $context["side_nav"] = "testpaper";
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/testpaper-manage/questions/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷题目管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<style>
tr.placeholder {
  display: block;
  background: red;
  position: relative;
  margin: 0;
  padding: 0;
  border: none;
}
tr.placeholder:before {
    content: \"\";
    position: absolute;
    width: 0;
    height: 0;
    border: 5px solid transparent;
    border-left-color: red;
    margin-top: -5px;
    left: -5px;
    border-right: none;
}
</style>
";
        // line 32
        $context["questionTypesDict"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 33
        echo "<div class=\"panel panel-default panel-col\" id=\"testpaper-items-manager\">
  <div class=\"panel-heading\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
        echo "
  </div>
  <div class=\"panel-body clearfix\">
    ";
        // line 37
        $this->loadTemplate("testpaper/manage/form-breadcrumb.html.twig", "testpaper/manage/question.html.twig", 37)->display(array_merge($context, array("title" => "试卷题目管理")));
        // line 38
        echo "    <div class=\"clearfix mbm\">
      <button data-url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_picker", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm pull-right\" data-role=\"pick-item\"><span class=\"es-icon es-icon-anonymous-iconfont\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增试题"), "html", null, true);
        echo "</button>
      <ul class=\"nav nav-pills nav-mini\" id=\"testpaper-question-nav\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "metas", array(), "array"), "counts", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            if (($context["count"] > 0)) {
                // line 42
                echo "          <li ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"javascript:\" data-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "\" class=\"testpaper-nav-link\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionTypesDict"]) ? $context["questionTypesDict"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "</a></li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </ul>
    </div>
    <form  method=\"post\" id=\"question-checked-form\" class=\"form-horizontal\" action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_questions", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\">
      <div id=\"testpaper-stats\" class=\"color-success\"></div>
      <table class=\"table table-striped table-hover tab-content\" id=\"testpaper-table\">
        <thead>
          <tr>
            <th></th>
            <th><input type=\"checkbox\" data-role=\"batch-select\"></th>
            <th width=\"8%\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题号"), "html", null, true);
        echo "</th>
            <th width=\"35%\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题干"), "html", null, true);
        echo "</th>
            <th width=\"10%\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("类型"), "html", null, true);
        echo "</th>
            <th width=\"10%\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("难度"), "html", null, true);
        echo "</th>
            <th width=\"10%\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分值"), "html", null, true);
        echo "</th>
            <th width=\"20%\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "metas", array(), "array"), "counts", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            if (($context["count"] > 0)) {
                // line 62
                echo "          <tbody data-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" id=\"testpaper-items-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" class=\"testpaper-table-tbody ";
                if (($this->getAttribute($context["loop"], "index", array()) != 1)) {
                    echo "hide";
                }
                echo "\" data-role=\"question-body\">
            ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array"), null)) : (null)));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    if ($context["question"]) {
                        // line 64
                        echo "              ";
                        if ( !(($this->getAttribute($context["question"], "isDeleted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "isDeleted", array()), null)) : (null))) {
                            // line 65
                            echo "                ";
                            $this->loadTemplate("question-manage/question-picked-tr.html.twig", "testpaper/manage/question.html.twig", 65)->display($context);
                            // line 66
                            echo "                ";
                            if ((($this->getAttribute($context["question"], "subs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "subs", array()), null)) : (null))) {
                                // line 67
                                echo "                  ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "subs", array()));
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
                                    // line 68
                                    echo "                    ";
                                    $this->loadTemplate("question-manage/question-picked-tr.html.twig", "testpaper/manage/question.html.twig", 68)->display($context);
                                    // line 69
                                    echo "                  ";
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
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 70
                                echo "                ";
                            }
                            // line 71
                            echo "              ";
                        }
                        // line 72
                        echo "            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "          </tbody>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      </table>
      <p>
        <label class=\"inline-block vertical-top checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
        <button type=\"button\" class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete-btn\"  data-name=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      </p>
      <p class=\"js-subjective-remask ";
        // line 80
        if ((isset($context["hasEssay"]) ? $context["hasEssay"] : null)) {
            echo " hidden ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这是一份纯客观题的试卷, 达到"), "html", null, true);
        echo "
        <input type=\"text\" name=\"passedScore\" class=\"form-control width-150 mhs\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["passedScoreDefault"]) ? $context["passedScoreDefault"] : null), "html", null, true);
        echo "\" data-score-total=\"0\" />";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分（含）可以自动审阅通过考试。"), "html", null, true);
        echo "
      </p>
      <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary js-request-save\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存试卷"), "html", null, true);
        echo "</button></p>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>

  <div id=\"testpaper-confirm-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确认试卷题目信息"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目类型"), "html", null, true);
        echo "</th>
                <th>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目数量"), "html", null, true);
        echo "</th>
                <th>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总分值"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody class=\"detail-tbody\"></tbody>
          </table>

        </div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-link\" data-dismiss=\"modal\" type=\"button\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-primary js-confirm-submit\" data-loading-text=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
        echo "...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确定"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 110,  342 => 109,  331 => 101,  327 => 100,  323 => 99,  314 => 93,  302 => 84,  298 => 83,  291 => 81,  283 => 80,  276 => 78,  272 => 77,  268 => 75,  257 => 73,  247 => 72,  244 => 71,  241 => 70,  227 => 69,  224 => 68,  206 => 67,  203 => 66,  200 => 65,  197 => 64,  186 => 63,  175 => 62,  164 => 61,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  138 => 53,  128 => 46,  124 => 44,  103 => 42,  92 => 41,  85 => 39,  82 => 38,  80 => 37,  74 => 34,  71 => 33,  69 => 32,  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/question.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\question.html.twig");
    }
}
