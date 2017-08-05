<?php

/* testpaper/manage/teacher-check.html.twig */
class __TwigTemplate_cd2e1c3bfa13d10980db0ad90e2747937a9a5d3032eee252e696296f202de2ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("testpaper/testpaper-layout.html.twig", "testpaper/manage/teacher-check.html.twig", 1);
        $this->blocks = array(
            'paper_result_bar' => array($this, 'block_paper_result_bar'),
            'paper_warning' => array($this, 'block_paper_warning'),
            'paper_sidebar' => array($this, 'block_paper_sidebar'),
            'testpaper_checked_dialog' => array($this, 'block_testpaper_checked_dialog'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testpaper/testpaper-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/es-ckeditor/ckeditor.js", 2 => "app/js/testpaper-manage/check/index.js"));
        // line 5
        $context["role"] = "teacher";
        // line 6
        $context["showHeader"] = 1;
        // line 7
        $context["isIframeBody"] = 0;
        // line 8
        $context["isTeacher"] = 1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_paper_result_bar($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        $this->loadTemplate("testpaper/part/paper-result-objective.html.twig", "testpaper/manage/teacher-check.html.twig", 11)->display($context);
    }

    // line 14
    public function block_paper_warning($context, array $blocks = array())
    {
        // line 15
        echo "  <div class=\"alert alert-warning\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请完成以下题目的批阅。"), "html", null, true);
        echo "</div>
";
    }

    // line 18
    public function block_paper_sidebar($context, array $blocks = array())
    {
        // line 19
        echo "
  <div class=\"testpaper-card ";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("testpaperCardClass", $context)) ? (_twig_default_filter((isset($context["testpaperCardClass"]) ? $context["testpaperCardClass"] : null), "")) : ("")), "html", null, true);
        echo "\" data-spy=\"affix\" data-offset-top=\"200\">
    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("questionTypes", $context)) ? (_twig_default_filter((isset($context["questionTypes"]) ? $context["questionTypes"] : null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            if ($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array", true, true)) {
                // line 24
                echo "
          ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["type"], array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 26
                    echo "            ";
                    if (($this->getAttribute($context["question"], "type", array()) == "material")) {
                        // line 27
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["question"], "subs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "subs", array()), array())) : (array())));
                        foreach ($context['_seq'] as $context["_key"] => $context["questionSub"]) {
                            // line 28
                            echo "                <a href=\"javascript:;\" data-anchor=\"#question";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["questionSub"], "id", array()), "html", null, true);
                            echo "\" class=\"js-btn-index color-lump lump-card\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["questionSub"], "seq", array()), "html", null, true);
                            echo "</a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionSub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 30
                        echo "            ";
                    } else {
                        // line 31
                        echo "              <a href=\"javascript:;\" data-anchor=\"#question";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                        echo "\" class=\"js-btn-index color-lump lump-card\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "seq", array()), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 33
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        
      </div>
      <div class=\"panel-footer\">
        <button class=\"btn btn-success btn-block\" data-role=\"check-submit\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成批阅"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>

";
    }

    // line 45
    public function block_testpaper_checked_dialog($context, array $blocks = array())
    {
        // line 46
        echo "  <div id=\"testpaper-checked-dialog\" class=\"modal in\" aria-hidden=\"false\" style=\"display: none;\">
    <div class=\"modal-dialog modal-dialog-small\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
          <h4 class=\"modal-title\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成批阅"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body\">

          <div class=\"form-group\">
            <div class=\"controls\">
              <textarea class=\"form-control\" rows='4' id=\"testpaper-teacherSay-input\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请输入评语"), "html", null, true);
        echo "\"></textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"controls\">
              <select class=\"form-control\" id=\"teacher-say-select\" data-role=\"teacher-say\">
                <option value=\"\">---";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("常用评语"), "html", null, true);
        echo "---</option>
                <option value=\"1\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("继续努力，继续进步！"), "html", null, true);
        echo "</option>
                <option value=\"2\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不错，有进步，再努力些就会更棒！"), "html", null, true);
        echo "</option>
                <option value=\"3\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你真棒！我为你骄傲！"), "html", null, true);
        echo "</option>
                <option value=\"4\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("有点松懈了吧？继续加油吧！"), "html", null, true);
        echo "</option>
                <option value=\"5\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用心、专注、坚持，你能做的更好的！"), "html", null, true);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-md-4 controls\">
              ";
        // line 74
        if (((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null))) {
            // line 75
            echo "                <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "objectiveScore", array()), "html", null, true);
            echo "\" name=\"objectiveScore\" />
                ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷得分"), "html", null, true);
            echo ":<span id=\"totalScore\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "objectiveScore", array()), "html", null, true);
            echo "</span>
              ";
        }
        // line 78
        echo "            </div>
            <div class=\"col-md-8 controls radios\">
              ";
        // line 80
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("passedStatus", $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("passedStatus"), "passed");
        echo "
            </div>
          </div>
        </div>
        <div class=\"modal-footer\">
          ";
        // line 85
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), "course")) : ("course")) == "classroom")) {
            // line 86
            echo "            ";
            $context["postUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_testpaper_check", array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "resultId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array())));
            // line 87
            echo "          ";
        } else {
            // line 88
            echo "            ";
            $context["postUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_testpaper_check", array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "resultId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array())));
            // line 89
            echo "          ";
        }
        // line 90
        echo "          <a href=\"javascript:;\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</a>
          <button type=\"button\" class=\"btn btn-info\" id=\"testpaper-teacher-say-btn\" data-post-url=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["postUrl"]) ? $context["postUrl"] : null), "html", null, true);
        echo "\" data-goto=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "HTTP_REFERER"), "method"), "html", null, true);
        echo "\" data-role=\"finish-check\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交, 请稍等"), "html", null, true);
        echo "...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成批阅"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/teacher-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 91,  239 => 90,  236 => 89,  233 => 88,  230 => 87,  227 => 86,  225 => 85,  217 => 80,  213 => 78,  206 => 76,  201 => 75,  199 => 74,  190 => 68,  186 => 67,  182 => 66,  178 => 65,  174 => 64,  170 => 63,  161 => 57,  152 => 51,  145 => 46,  142 => 45,  132 => 38,  127 => 35,  120 => 34,  114 => 33,  106 => 31,  103 => 30,  92 => 28,  87 => 27,  84 => 26,  80 => 25,  77 => 24,  72 => 23,  66 => 20,  63 => 19,  60 => 18,  53 => 15,  50 => 14,  45 => 11,  42 => 10,  38 => 1,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/teacher-check.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\testpaper\\manage\\teacher-check.html.twig");
    }
}
