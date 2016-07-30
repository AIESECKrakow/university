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
        $__internal_613652ee51ce8bb290e31b817f85f00266c57b2e7648306889757b79838afa71 = $this->env->getExtension("native_profiler");
        $__internal_613652ee51ce8bb290e31b817f85f00266c57b2e7648306889757b79838afa71->enter($__internal_613652ee51ce8bb290e31b817f85f00266c57b2e7648306889757b79838afa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_613652ee51ce8bb290e31b817f85f00266c57b2e7648306889757b79838afa71->leave($__internal_613652ee51ce8bb290e31b817f85f00266c57b2e7648306889757b79838afa71_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5652009c0c40760bfb11b0485724fdb029b6f4df7856c2697d57117a772dda4a = $this->env->getExtension("native_profiler");
        $__internal_5652009c0c40760bfb11b0485724fdb029b6f4df7856c2697d57117a772dda4a->enter($__internal_5652009c0c40760bfb11b0485724fdb029b6f4df7856c2697d57117a772dda4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5652009c0c40760bfb11b0485724fdb029b6f4df7856c2697d57117a772dda4a->leave($__internal_5652009c0c40760bfb11b0485724fdb029b6f4df7856c2697d57117a772dda4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfd156a14f0c2c264332eafeb391a064e2014a8e0d55d10904facb7841a1b6e6 = $this->env->getExtension("native_profiler");
        $__internal_dfd156a14f0c2c264332eafeb391a064e2014a8e0d55d10904facb7841a1b6e6->enter($__internal_dfd156a14f0c2c264332eafeb391a064e2014a8e0d55d10904facb7841a1b6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dfd156a14f0c2c264332eafeb391a064e2014a8e0d55d10904facb7841a1b6e6->leave($__internal_dfd156a14f0c2c264332eafeb391a064e2014a8e0d55d10904facb7841a1b6e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ec54cee12ba79280ab4a9dd3afd4fc0c556239f788b0c751cbbcfe7b40b7f7b = $this->env->getExtension("native_profiler");
        $__internal_5ec54cee12ba79280ab4a9dd3afd4fc0c556239f788b0c751cbbcfe7b40b7f7b->enter($__internal_5ec54cee12ba79280ab4a9dd3afd4fc0c556239f788b0c751cbbcfe7b40b7f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ec54cee12ba79280ab4a9dd3afd4fc0c556239f788b0c751cbbcfe7b40b7f7b->leave($__internal_5ec54cee12ba79280ab4a9dd3afd4fc0c556239f788b0c751cbbcfe7b40b7f7b_prof);

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
