<?php

/* courseset-manage/courses.html.twig */
class __TwigTemplate_49eaf4287a1c01d3ac8fa0d08c19f4a613deb2df1f79a95eb80a75c4f3e875fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "courseset-manage/courses.html.twig", 1);
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
        // line 4
        $context["side_nav"] = "plan";
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/course-manage/index.js", 1 => "app/js/course-manage/list/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教学计划管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"panel panel-default\" role=\"courseset-manage-courses\" >
    <div class=\"panel-heading\">
      ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教学计划管理"), "html", null, true);
        echo "
      <button class=\"btn btn-success btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#modal\"
        data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_create", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()))), "html", null, true);
        echo "\"><i
          class=\"es-icon es-icon-anonymous-iconfont\"></i>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建教学计划"), "html", null, true);
        echo "</button>
    </div>
    <div class=\"panel-body\">
      <table id=\"courses-list-table\" class=\"table table-striped\">
      \t<thead>
      \t  <th width=\"30%\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
          <th>
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习模式"), "html", null, true);
        echo "
            <a class=\"link-medium es-icon es-icon-help ml5 text-normal\" 
              data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" 
              data-placement=\"top\" data-content=\"<ul class='pl20 ul-list-none'>
              <li class='mb10'><b>自由式学习：</b>学员自由安排学习过程</li>
              <li><b>解锁式学习：</b>学员根据既定顺序逐个解锁学习</li></ul>\">
            </a>
          </th>
          <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务数"), "html", null, true);
        echo "</th>
          <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格（元）"), "html", null, true);
        echo "</th>
          <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
          <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
      \t</thead>
      \t<tbody>
      \t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 37
            echo "      \t\t<tr>
      \t\t\t<td><a class=\"link-primary\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute($context["course"], "id", array()), "previewAs" => "member")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</a></td>
            <td>
              ";
            // line 40
            if (((($this->getAttribute($context["course"], "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "learnMode", array()), "freeMode")) : ("freeMode")) == "freeMode")) {
                // line 41
                echo "                自由式学习
              ";
            } else {
                // line 43
                echo "                解锁式学习
              ";
            }
            // line 45
            echo "            </td>
      \t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "taskNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "taskNum", array()), 0)) : (0)), "html", null, true);
            echo "</td>
      \t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "studentNum", array()), 0)) : (0)), "html", null, true);
            echo "</td>
      \t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
            // line 49
            echo "                <br>
\t\t\t          ";
            // line 50
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.marketing.extension", array("course" => $context["course"]));
            echo "
      \t\t\t</td>
\t\t\t      <td>
             ";
            // line 53
            if (($this->getAttribute($context["course"], "status", array()) == "published")) {
                // line 54
                echo "                <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
                echo "</span>
              ";
            } elseif (($this->getAttribute(            // line 55
$context["course"], "status", array()) == "closed")) {
                echo "             
                <span class=\"color-danger\">";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
                echo "</span>
              ";
            } else {
                // line 58
                echo "                <span class=\"color-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                echo "</span>
              ";
            }
            // line 60
            echo "            </td>
            <td>
            ";
            // line 62
            if (((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "canManage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "canManage", array()))) : ("")) || (($this->getAttribute($context["course"], "canManage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "canManage", array()))) : ("")))) {
                // line 63
                echo "              <div class=\"btn-group\">
                <a class=\"mr10 link-primary\"
                  href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
                echo "</a>
                <a class=\"dropdown-toggle link-primary\" href=\"javascript:;\"  data-toggle=\"dropdown\">
                  更多
                  <i class=\"es-icon es-icon-arrowdropdown\"></i>
                </a>
                <ul class=\"dropdown-menu pull-right\">
                  <li>
                    <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute($context["course"], "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\" target=\"_blank\">
                      <i class=\"es-icon es-icon-removeredeye mrm\"></i>
                      ";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
                echo "
                    </a>
                  </li>
                  <li>
                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\"
                      data-url=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_copy", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">
                      <i class=\"es-icon es-icon-contentcopy mrm\"></i>
                      ";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("复制为"), "html", null, true);
                echo "
                    </a>
                  </li>
                  ";
                // line 84
                if (((($this->getAttribute($context["course"], "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "status", array()), "")) : ("")) == "published")) {
                    // line 85
                    echo "                    <li>
                      <a href=\"javascript:;\"
                        data-check-url=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_close_check", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\"
                        data-url=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_close", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\"
                        class=\"js-close-course\">
                        <i class=\"es-icon es-icon-close01 mrm\"></i>
                        ";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
                    echo "
                      </a>
                    </li>
                  ";
                } else {
                    // line 95
                    echo "                    <li>
                      <a href=\"javascript:;\"
                        data-url=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_delete", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\"
                        class=\"js-delete-course\"><i class=\"es-icon es-icon-delete mrm\"></i>";
                    // line 98
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                    echo "</a>
                    </li>
                    <li>
                      <a href=\"javascript:;\"
                        data-url=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_publish", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\"
                        class=\"js-publish-course\"><i class=\"es-icon es-icon--check-circle mrm\"></i>";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布"), "html", null, true);
                    echo "</a><!-- 已发布的不能删除，可关闭 -->
                    </li>
                  ";
                }
                // line 106
                echo "                </ul>
              </div>
            ";
            } else {
                // line 109
                echo "              <span class=\"color-gray\">无权限管理</span>
            ";
            }
            // line 111
            echo "            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "        </tbody>
      </table>
      <nav class=\"text-center\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "</nav>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 116,  283 => 114,  275 => 111,  271 => 109,  266 => 106,  260 => 103,  256 => 102,  249 => 98,  245 => 97,  241 => 95,  234 => 91,  228 => 88,  224 => 87,  220 => 85,  218 => 84,  212 => 81,  207 => 79,  199 => 74,  194 => 72,  182 => 65,  178 => 63,  176 => 62,  172 => 60,  166 => 58,  161 => 56,  157 => 55,  152 => 54,  150 => 53,  144 => 50,  141 => 49,  139 => 48,  135 => 47,  131 => 46,  128 => 45,  124 => 43,  120 => 41,  118 => 40,  111 => 38,  108 => 37,  104 => 36,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  71 => 21,  66 => 19,  58 => 14,  54 => 13,  49 => 11,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/courses.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\courseset-manage\\courses.html.twig");
    }
}
