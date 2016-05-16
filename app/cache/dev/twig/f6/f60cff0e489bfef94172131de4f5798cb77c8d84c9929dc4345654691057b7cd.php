<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e8fd4e57454766c1ec62b2ee5a5cf8b347a6e56b5316eed2ad0e1d7c6f9c324f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3a0f3dcf159ad543a4e2653028589128d8844eaa5eadf0ccc8ec32c20114035 = $this->env->getExtension("native_profiler");
        $__internal_d3a0f3dcf159ad543a4e2653028589128d8844eaa5eadf0ccc8ec32c20114035->enter($__internal_d3a0f3dcf159ad543a4e2653028589128d8844eaa5eadf0ccc8ec32c20114035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a0f3dcf159ad543a4e2653028589128d8844eaa5eadf0ccc8ec32c20114035->leave($__internal_d3a0f3dcf159ad543a4e2653028589128d8844eaa5eadf0ccc8ec32c20114035_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd583821442fdd7436b95fb6b1020b5ad05d488752da19d93f2ffd3a663673d9 = $this->env->getExtension("native_profiler");
        $__internal_dd583821442fdd7436b95fb6b1020b5ad05d488752da19d93f2ffd3a663673d9->enter($__internal_dd583821442fdd7436b95fb6b1020b5ad05d488752da19d93f2ffd3a663673d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd583821442fdd7436b95fb6b1020b5ad05d488752da19d93f2ffd3a663673d9->leave($__internal_dd583821442fdd7436b95fb6b1020b5ad05d488752da19d93f2ffd3a663673d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ccc8abd6dffbffd1c36c543d53dc9aefe91dc0ae5feab5646590febf62c21ec = $this->env->getExtension("native_profiler");
        $__internal_9ccc8abd6dffbffd1c36c543d53dc9aefe91dc0ae5feab5646590febf62c21ec->enter($__internal_9ccc8abd6dffbffd1c36c543d53dc9aefe91dc0ae5feab5646590febf62c21ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ccc8abd6dffbffd1c36c543d53dc9aefe91dc0ae5feab5646590febf62c21ec->leave($__internal_9ccc8abd6dffbffd1c36c543d53dc9aefe91dc0ae5feab5646590febf62c21ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91f176f227d4b4fd64ab71f5ab04587143d5a59470929d303f5ba71ede0c8a34 = $this->env->getExtension("native_profiler");
        $__internal_91f176f227d4b4fd64ab71f5ab04587143d5a59470929d303f5ba71ede0c8a34->enter($__internal_91f176f227d4b4fd64ab71f5ab04587143d5a59470929d303f5ba71ede0c8a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91f176f227d4b4fd64ab71f5ab04587143d5a59470929d303f5ba71ede0c8a34->leave($__internal_91f176f227d4b4fd64ab71f5ab04587143d5a59470929d303f5ba71ede0c8a34_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
