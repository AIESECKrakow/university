<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4f071d6afd78604a48b434dba2e827d943a39424fe5bc5ed073a84b8191e48b2 extends Twig_Template
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
        $__internal_3d5b7ece790be854aa981f798d3dfac68f4cf634d1e8bb9aa3b727e04eb00f56 = $this->env->getExtension("native_profiler");
        $__internal_3d5b7ece790be854aa981f798d3dfac68f4cf634d1e8bb9aa3b727e04eb00f56->enter($__internal_3d5b7ece790be854aa981f798d3dfac68f4cf634d1e8bb9aa3b727e04eb00f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d5b7ece790be854aa981f798d3dfac68f4cf634d1e8bb9aa3b727e04eb00f56->leave($__internal_3d5b7ece790be854aa981f798d3dfac68f4cf634d1e8bb9aa3b727e04eb00f56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ed660295009c8cd8d2b3ae24b64461632281760cb2ee41d708a9e6e66a6b582 = $this->env->getExtension("native_profiler");
        $__internal_9ed660295009c8cd8d2b3ae24b64461632281760cb2ee41d708a9e6e66a6b582->enter($__internal_9ed660295009c8cd8d2b3ae24b64461632281760cb2ee41d708a9e6e66a6b582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ed660295009c8cd8d2b3ae24b64461632281760cb2ee41d708a9e6e66a6b582->leave($__internal_9ed660295009c8cd8d2b3ae24b64461632281760cb2ee41d708a9e6e66a6b582_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0303ab46eccfb3bd1025c3b60b1151ffe18491afc1ccb318b3a90d4819dbd01 = $this->env->getExtension("native_profiler");
        $__internal_a0303ab46eccfb3bd1025c3b60b1151ffe18491afc1ccb318b3a90d4819dbd01->enter($__internal_a0303ab46eccfb3bd1025c3b60b1151ffe18491afc1ccb318b3a90d4819dbd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0303ab46eccfb3bd1025c3b60b1151ffe18491afc1ccb318b3a90d4819dbd01->leave($__internal_a0303ab46eccfb3bd1025c3b60b1151ffe18491afc1ccb318b3a90d4819dbd01_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b276930472975781283b7f18aa7b1817cf9c568165553511fd7294e4e843da4 = $this->env->getExtension("native_profiler");
        $__internal_8b276930472975781283b7f18aa7b1817cf9c568165553511fd7294e4e843da4->enter($__internal_8b276930472975781283b7f18aa7b1817cf9c568165553511fd7294e4e843da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b276930472975781283b7f18aa7b1817cf9c568165553511fd7294e4e843da4->leave($__internal_8b276930472975781283b7f18aa7b1817cf9c568165553511fd7294e4e843da4_prof);

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
