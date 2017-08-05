<?php

/* task-manage/modal-layout.html.twig */
class __TwigTemplate_667d430eb03b3ca2284604634208c35f7e46a24bcb8667b9d67e08a8f0bae177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "task-manage/modal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'task_create_type' => array($this, 'block_task_create_type'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        if (((array_key_exists("task", $context)) ? (_twig_default_filter((isset($context["task"]) ? $context["task"] : null), false)) : (false))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("修改任务"), "html", null, true);
            echo "
  ";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加任务"), "html", null, true);
            echo "
  ";
        }
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"task-create-editor\" id=\"task-create-editor\">
    <ul class=\"es-step es-step-3 clearfix\" id=\"task-create-step\">
      <li class=\"doing\">
        <span class=\"number\">1</span>
        选择教学手段
      </li>
      <li>
        <span class=\"number\">2</span>
        设置内容
      </li>
      <li>
        <span class=\"number\">3</span>
        设置完成条件
      </li>
    </ul>
    ";
        // line 28
        $this->displayBlock('task_create_type', $context, $blocks);
        // line 29
        echo "    <div id=\"task-create-content\" class=\"task-create-content hidden\"></div>
  </div>
";
    }

    // line 28
    public function block_task_create_type($context, array $blocks = array())
    {
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "  ";
        if (((((array_key_exists("task", $context)) ? (_twig_default_filter((isset($context["task"]) ? $context["task"] : null), false)) : (false)) && ((array_key_exists("taskMode", $context)) ? (_twig_default_filter((isset($context["taskMode"]) ? $context["taskMode"] : null), "")) : (""))) && ((isset($context["taskMode"]) ? $context["taskMode"] : null) != "lesson"))) {
            // line 34
            echo "    <button id=\"course-tasks-delete\" type=\"submit\" class=\"btn btn-danger pull-left delete-task\"
            data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_delete", array("taskId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "courseId", array()))), "html", null, true);
            echo "\">
      <i class=\"es-icon es-icon-delete\"></i>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
  ";
        }
        // line 38
        echo "  <button id=\"course-tasks-prev\" type=\"submit\" class=\"btn btn-default hidden\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上一步"), "html", null, true);
        echo "</button>
  <button id=\"course-tasks-next\" type=\"submit\" class=\"btn btn-default hidden\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一步"), "html", null, true);
        echo "</button>
  <button id=\"course-tasks-submit\" type=\"submit\" class=\"btn btn-primary hidden\"
          data-loading-text=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存..."), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "task-manage/modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  110 => 39,  105 => 38,  100 => 36,  96 => 35,  93 => 34,  90 => 33,  87 => 32,  82 => 28,  76 => 29,  74 => 28,  57 => 13,  54 => 12,  46 => 8,  40 => 6,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task-manage/modal-layout.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task-manage\\modal-layout.html.twig");
    }
}
