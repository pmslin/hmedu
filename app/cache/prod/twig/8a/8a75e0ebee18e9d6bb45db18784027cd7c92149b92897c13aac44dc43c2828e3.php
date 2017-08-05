<?php

/* exercise/do.html.twig */
class __TwigTemplate_0b1763b96e832be16c691f51a5577d1a818db2340a0b065d527e0b26a0822f2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("testpaper/testpaper-layout.html.twig", "exercise/do.html.twig", 1);
        $this->blocks = array(
            'paper_header' => array($this, 'block_paper_header'),
            'paper_body' => array($this, 'block_paper_body'),
            'testpaper_finished_dialog' => array($this, 'block_testpaper_finished_dialog'),
            'paper_sidebar' => array($this, 'block_paper_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testpaper/testpaper-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-timer.js", 2 => "libs/perfect-scrollbar.js", 3 => "app/js/testpaper/do-test/index.js"));
        // line 7
        if ( !twig_test_empty(((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) ? $context["action"] : null), "")) : ("")))) {
            // line 8
            $context["showHeader"] = 1;
            // line 9
            $context["isIframeBody"] = 0;
        } else {
            // line 11
            $context["showHeader"] = 0;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_paper_header($context, array $blocks = array())
    {
    }

    // line 14
    public function block_paper_body($context, array $blocks = array())
    {
        // line 15
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("练习"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目"), "html", null, true);
        echo " <small class=\"color-gray\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共%itemCount%题", array("%itemCount%" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "itemCount", array()))), "html", null, true);
        echo "</small>
    </div>

    <div class=\"panel-body\">
      <div class=\"question-set-items\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
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
            // line 23
            echo "          ";
            if ((($this->getAttribute($context["question"], "isDelete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "isDelete", array()), false)) : (false))) {
                // line 24
                echo "            ";
                $this->loadTemplate("question/part/question-delete.html.twig", "exercise/do.html.twig", 24)->display(array_merge($context, array("showScore" => 0, "question" => $context["question"])));
                // line 25
                echo "          ";
            } else {
                // line 26
                echo "            ";
                $context["questionTemplate"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypeTemplate($this->getAttribute($context["question"], "type", array()), "do");
                // line 27
                echo "            ";
                if ((isset($context["questionTemplate"]) ? $context["questionTemplate"] : null)) {
                    // line 28
                    echo "              ";
                    $this->loadTemplate((isset($context["questionTemplate"]) ? $context["questionTemplate"] : null), "exercise/do.html.twig", 28)->display(array_merge($context, array("showScore" => 0)));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "          ";
            }
            // line 31
            echo "
        ";
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
        // line 33
        echo "      </div>
    </div>

  </div>
";
    }

    // line 39
    public function block_testpaper_finished_dialog($context, array $blocks = array())
    {
        // line 40
        echo "  <div id=\"testpaper-finished-dialog\" class=\"modal in\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-body task-state-modal\">
          <div class=\"title font-blod\">
            <i class=\"es-icon es-icon-zanting1 color-warning\"></i>
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确认提交"), "html", null, true);
        echo "
          </div>
          <div class=\"content\">
            <div class=\"text-16\">
              ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您真的要提交吗？"), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"text-right mt20\">
            <a href=\"javascript:;\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</a>
            <button class=\"btn btn-primary\" id=\"testpaper-finish-btn\" data-loading-text=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交, 请稍等"), "html", null, true);
        echo "...\" data-role=\"paper-submit\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exercise_finish", array("resultId" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\" data-goto=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exercise_result_show", array("resultId" => (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\">
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确认提交"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 65
    public function block_paper_sidebar($context, array $blocks = array())
    {
        // line 66
        echo "  ";
        $this->loadTemplate("exercise/part/paper-card.html.twig", "exercise/do.html.twig", 66)->display($context);
    }

    public function getTemplateName()
    {
        return "exercise/do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 66,  179 => 65,  168 => 56,  160 => 55,  156 => 54,  149 => 50,  142 => 46,  134 => 40,  131 => 39,  123 => 33,  108 => 31,  105 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  67 => 22,  56 => 17,  52 => 15,  49 => 14,  44 => 3,  40 => 1,  37 => 11,  34 => 9,  32 => 8,  30 => 7,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "exercise/do.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\exercise\\do.html.twig");
    }
}
