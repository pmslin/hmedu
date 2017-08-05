<?php

/* task/task-finished-prompt.html.twig */
class __TwigTemplate_d4faca956ae00a3d776dae8f6b1d326c45b994b22e1a273036ee34d84e1c71df extends Twig_Template
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
        echo "<div class=\"task-state-modal task-state-modal-xs\">
  <div class=\"title\">
    <i class=\"es-icon es-icon-iccheckcircleblack24px color-success\"></i>完成任务
  </div>
  <div class=\"content\">
    <div class=\"content-title\">《 任务：";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
        echo " 》</div>
    学习进度
    <div class=\"content-progress\">
      <div class=\"progress progress-radius mts mb0\">
        <div class=\"progress-bar  progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["finishedRate"]) ? $context["finishedRate"] : null), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
        echo twig_escape_filter($this->env, (isset($context["finishedRate"]) ? $context["finishedRate"] : null), "html", null, true);
        echo "%;min-width: 20%\">";
        echo twig_escape_filter($this->env, (isset($context["finishedRate"]) ? $context["finishedRate"] : null), "html", null, true);
        echo "%</div>
      </div>

    </div>
  </div>

  ";
        // line 16
        if ((isset($context["nextTask"]) ? $context["nextTask"] : null)) {
            // line 17
            echo "  <div class=\"text-right mt20\">
    <a class=\"btn btn-primary btn-sm\"
    href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["nextTask"]) ? $context["nextTask"] : null), "id", array()))), "html", null, true);
            echo "\"
    >下一任务</a>
  </div>
  ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "task/task-finished-prompt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  52 => 19,  48 => 17,  46 => 16,  33 => 10,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/task-finished-prompt.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task\\task-finished-prompt.html.twig");
    }
}
