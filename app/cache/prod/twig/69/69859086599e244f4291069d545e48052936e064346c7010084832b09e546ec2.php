<?php

/* task/plugin/list/free-mode-list.html.twig */
class __TwigTemplate_22a055209ccd37e0d911f75a225d2113bd628d1891c6d2e440dc7508ea03d20f extends Twig_Template
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
        echo "<ul class=\"task-list task-show\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseItems"]) ? $context["courseItems"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute($context["item"], "type", array()) == "chapter")) {
                // line 4
                echo "      <li class=\"task-item bg-gray-lighter js-task-chapter\">
        <i class=\"es-icon es-icon-menu left-menu\"></i>
        <span class=\"title\">第";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "number", array()), "html", null, true);
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</span>
        <i class=\"right-menu es-icon es-icon-remove js-remove-icon\"></i>
      </li>
    ";
            } elseif (($this->getAttribute(            // line 9
$context["item"], "type", array()) == "unit")) {
                // line 10
                echo "      <li class=\"task-item color-gray bg-gray-lighter\">
        <span class=\"title\">第";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "number", array()), "html", null, true);
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</span>
      </li>
    ";
            } elseif (($this->getAttribute(            // line 13
$context["item"], "type", array()) == "lesson")) {
                // line 14
                echo "      ";
                $context["tasks"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayIndex($this->getAttribute($context["item"], "tasks", array()), "mode");
                // line 15
                echo "      ";
                $context["index"] = (($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "lesson", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), "lesson", array(), "any", false, true), "number", array()), null)) : (null));
                // line 16
                echo "
      ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "tasks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 18
                    echo "
        ";
                    // line 19
                    $context["task_lock"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learnMode", array()) == "lockMode") && ($this->getAttribute($context["task"], "lock", array()) && ($this->getAttribute($context["task"], "number", array()) != 1)));
                    // line 20
                    echo "        <li class=\"task-item task-content ";
                    if (($this->getAttribute($context["task"], "activityId", array()) == $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "id", array()))) {
                        echo " active ";
                    }
                    echo " mouse-control\">
          <i class=\"es-icon
          ";
                    // line 22
                    if ((isset($context["task_lock"]) ? $context["task_lock"] : null)) {
                        // line 23
                        echo "          es-icon-lock
          ";
                    } elseif ( !(($this->getAttribute(                    // line 24
$context["task"], "result", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["task"], "result", array()), null)) : (null))) {
                        // line 25
                        echo "          es-icon-undone-check
          ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 26
$context["task"], "result", array()), "status", array()) == "start")) {
                        // line 27
                        echo "          es-icon-doing color-primary
          ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 28
$context["task"], "result", array()), "status", array()) == "finish")) {
                        // line 29
                        echo "          es-icon-iccheckcircleblack24px color-primary
          ";
                    }
                    // line 31
                    echo "          left-menu\"></i>

          ";
                    // line 33
                    if (( !(isset($context["task_lock"]) ? $context["task_lock"] : null) && ($this->getAttribute($context["task"], "status", array()) == "published"))) {
                        // line 34
                        echo "            <a class=\"title\"
              href=\"";
                        // line 35
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("id" => $this->getAttribute($context["task"], "id", array()), "courseId" => $this->getAttribute($context["task"], "courseId", array()))), "html", null, true);
                        echo "\">
              ";
                        // line 36
                        if ($this->getAttribute($context["task"], "isOptional", array())) {
                            echo "<span class=\"label label-info mrm\">选修</span>";
                        } else {
                            echo "任务";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
                            echo ":";
                        }
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                        echo "
            </a>
          ";
                    } else {
                        // line 39
                        echo "            <div class=\"title\"
              data-url=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("id" => $this->getAttribute($context["task"], "id", array()), "courseId" => $this->getAttribute($context["task"], "courseId", array()))), "html", null, true);
                        echo "\">
              ";
                        // line 41
                        if ($this->getAttribute($context["task"], "isOptional", array())) {
                            echo "<span class=\"label label-info mrm\">选修</span>";
                        } else {
                            echo "任务";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
                            echo ":";
                        }
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                        echo "
            </div>
          ";
                    }
                    // line 44
                    echo "
          ";
                    // line 45
                    if (($this->getAttribute($context["task"], "status", array()) != "published")) {
                        // line 46
                        echo "            ";
                        // line 49
                        echo "            <span class=\"right-menu \">敬请期待</span>
          ";
                    } elseif (                    // line 50
(isset($context["task_lock"]) ? $context["task_lock"] : null)) {
                        // line 51
                        echo "            <span class=\"right-menu mouse-leave\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ActivityExtension')->lengthFormat($this->getAttribute($this->getAttribute($context["task"], "activity", array()), "length", array())), "html", null, true);
                        echo "
              <i class=\"es-icon ";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute($context["task"], "activity", array()), "mediaType", array())), "icon", array()), "html", null, true);
                        echo " ml5\"></i>
          </span>
            <span class=\"right-menu mouse-enter color-warning\">任务未解锁</span>
          ";
                    } else {
                        // line 56
                        echo "            <span class=\"right-menu\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ActivityExtension')->lengthFormat($this->getAttribute($this->getAttribute($context["task"], "activity", array()), "length", array())), "html", null, true);
                        echo "
              <i class=\"es-icon ";
                        // line 57
                        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute($context["task"], "activity", array()), "mediaType", array())), "icon", array()), "html", null, true);
                        echo " ml5\" data-toggle=\"tooltip\"
                data-placement=\"top\" title=\"";
                        // line 58
                        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute($context["task"], "activity", array()), "mediaType", array())), "name", array()), "html", null, true);
                        echo "任务\"></i></span>
          ";
                    }
                    // line 60
                    echo "        </li>

      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "    ";
            }
            // line 64
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "task/plugin/list/free-mode-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 65,  201 => 64,  198 => 63,  190 => 60,  185 => 58,  181 => 57,  176 => 56,  169 => 52,  164 => 51,  162 => 50,  159 => 49,  157 => 46,  155 => 45,  152 => 44,  138 => 41,  134 => 40,  131 => 39,  117 => 36,  113 => 35,  110 => 34,  108 => 33,  104 => 31,  100 => 29,  98 => 28,  95 => 27,  93 => 26,  90 => 25,  88 => 24,  85 => 23,  83 => 22,  75 => 20,  73 => 19,  70 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  55 => 13,  47 => 11,  44 => 10,  42 => 9,  33 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/plugin/list/free-mode-list.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\task\\plugin\\list\\free-mode-list.html.twig");
    }
}
