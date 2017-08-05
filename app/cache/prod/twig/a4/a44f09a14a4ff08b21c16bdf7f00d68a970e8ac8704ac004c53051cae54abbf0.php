<?php

/* seajs_boot_compatible.html.twig */
class __TwigTemplate_433ac2ee719bf3c0acdf6249e7b1cce568dfa3285463994fef9283b99c120a63 extends Twig_Template
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
        echo "<script>
    if (typeof app === 'undefined') {
        var app = {};
    }

    if (!app.lazyPool) {
        app.lazyPool = [];
    }

    if(!app.lazyLoads){
        app.lazyLoads = function() {
            for (var index in app.lazyPool) {
                app.lazyPool[index]();
            }
            app.lazyLoad && app.lazyLoad();
        }
    }

    var script = function (scripts, fn, target) {
        if (!scripts.length) return;
        target = !target ? document.getElementsByTagName('body')[0] : target;
        (function callback(s) {
            s = scripts.shift();
            !scripts.length ? loadJs(s, fn, target) : loadJs(s, callback, target);
        }());
    }

    var loadJs = function (path, fn, target) {
        var elem = document.createElement('script'),
            loaded;
        elem.onload = elem.onerror = elem.onreadystatechange = function () {
            if ((elem.readyState && !(/^c|loade/.test(elem.readyState))) || loaded) {
                return;
            }
            elem.onload = elem.onreadystatechange = null;
            loaded = 1;
            fn();
        }
        elem.async = 1;
        elem.src = path;
        target.appendChild(elem);
    }

    window.seajsBoot = function() {

        if (typeof seajs !== 'undefined') {
            app.lazyLoads();
            return ;
        }

        app.debug = ";
        // line 51
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ";
        app.jsPaths = ";
        // line 52
        echo twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getJsPaths());
        echo ";

        window.CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';

        app.arguments = {};
        ";
        // line 57
        if (array_key_exists("script_controller", $context)) {
            // line 58
            echo "        app.controller = '";
            echo twig_escape_filter($this->env, (isset($context["script_controller"]) ? $context["script_controller"] : null), "html", null, true);
            echo "';
        ";
        }
        // line 60
        echo "        ";
        if (array_key_exists("script_arguments", $context)) {
            // line 61
            echo "        app.arguments = ";
            echo twig_jsonencode_filter((isset($context["script_arguments"]) ? $context["script_arguments"] : null));
            echo ";
        ";
        }
        // line 63
        echo "
        app.scripts = ";
        // line 64
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->exportScripts(), null));
        echo ";
        app.mainScript = '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["script_main"]) ? $context["script_main"] : null), "html", null, true);
        echo "';

        var paths = [
            \"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\",
            \"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\",
            \"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js"), "html", null, true);
        echo "\",
            \"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"
        ];

        script(paths, function() {
            seajs.use(app.mainScript, function() {
                app.lazyLoads();
            });
        });
    }

</script>
";
    }

    public function getTemplateName()
    {
        return "seajs_boot_compatible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 71,  125 => 70,  121 => 69,  117 => 68,  111 => 65,  107 => 64,  104 => 63,  98 => 61,  95 => 60,  89 => 58,  87 => 57,  79 => 52,  71 => 51,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "seajs_boot_compatible.html.twig", "E:\\xampp\\htdocs\\pro\\edusohoty\\app\\Resources\\views\\seajs_boot_compatible.html.twig");
    }
}
