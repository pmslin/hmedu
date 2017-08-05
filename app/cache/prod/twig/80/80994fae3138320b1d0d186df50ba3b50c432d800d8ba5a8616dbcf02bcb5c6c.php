<?php

/* task-manage/modal.html.twig */
class __TwigTemplate_db17d47289a1f047562777d812ef3c00e7ecf719f603e5437845d9b97f82eca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("task-manage/modal-layout.html.twig", "task-manage/modal.html.twig", 1);
        $this->blocks = array(
            'task_create_type' => array($this, 'block_task_create_type'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "task-manage/modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/iframe-resizer.js", 2 => "app/js/task-manage/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_task_create_type($context, array $blocks = array())
    {
        // line 6
        echo "  <div id=\"task-create-type\" class=\"hidden\" data-editor-mode=\"";
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "\"
      ";
        // line 7
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 8
            echo "    data-editor-type=\"";
            echo twig_escape_filter($this->env, (isset($context["currentType"]) ? $context["currentType"] : null), "html", null, true);
            echo "\"
    data-editor-step2-url=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_fields", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "mode" => "edit", "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
            echo "\"
    data-save-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } elseif ((        // line 11
(isset($context["mode"]) ? $context["mode"] : null) == "create")) {
            // line 12
            echo "    data-save-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 13
        echo ">
    <form class=\"form-horizontal\" id=\"step1-form\">
      <ul class=\"form-group task-create-type-list \">
        ";
        // line 16
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) . "-create-task-activity-metas-") . $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local")), 1000        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 17
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta());
                foreach ($context['_seq'] as $context["type"] => $context["meta"]) {
                    if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->isActivityVisible($context["type"], (isset($context["courseSet"]) ? $context["courseSet"] : null), (isset($context["course"]) ? $context["course"] : null))) {
                        // line 18
                        echo "            <li class=\"col-xs-3 task-create-type-item js-course-tasks-item ";
                        if (((($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()), null)) : (null)) == $context["type"])) {
                            echo " active ";
                        }
                        echo "\"
                data-role=\"activityType\" data-type=\"";
                        // line 19
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\"
                data-content-url=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_fields", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "mode" => "create", "type" => $context["type"])), "html", null, true);
                        echo "\">
              <a href=\"javascript:;\" ";
                        // line 21
                        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
                            echo " disabled ";
                        }
                        echo ">
                <i class=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "icon", array()), "html", null, true);
                        echo "\"></i>
                ";
                        // line 23
                        echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "name", array()), "html", null, true);
                        echo "
              </a>
            </li>
          ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['meta'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 28
        echo "        <li class=\"col-xs-12\">
          <label for=\"mediaType\" class=\"hidden\">分类</label>
          <input name=\"mediaType\" id=\"mediaType\" class=\"type-hidden\">
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"mode\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("taskMode", $context)) ? (_twig_default_filter((isset($context["taskMode"]) ? $context["taskMode"] : null), "")) : ("")), "html", null, true);
        echo "\">
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"categoryId\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), null)) : (null)), "html", null, true);
        echo "\">
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"chapterId\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("chapterId", $context)) ? (_twig_default_filter((isset($context["chapterId"]) ? $context["chapterId"] : null), null)) : (null)), "html", null, true);
        echo "\">
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"fromCourseId\" value='";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "'>
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"courseSetType\" id=\"courseSetType\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()), "html", null, true);
        echo "\">
          <input type=\"hidden\" id=\"courseExpiryMode\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "html", null, true);
        echo "\">
        </li>
      </ul>
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "task-manage/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 36,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  122 => 28,  115 => 27,  104 => 23,  100 => 22,  94 => 21,  90 => 20,  86 => 19,  79 => 18,  73 => 17,  67 => 16,  62 => 13,  56 => 12,  54 => 11,  50 => 10,  46 => 9,  41 => 8,  39 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task-manage/modal.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task-manage\\modal.html.twig");
    }
}
