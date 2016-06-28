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
        $__internal_300a3fc9e901913f2fe32f8510e5e5a1a7cefc791ccaf039def0993c86d1c822 = $this->env->getExtension("native_profiler");
        $__internal_300a3fc9e901913f2fe32f8510e5e5a1a7cefc791ccaf039def0993c86d1c822->enter($__internal_300a3fc9e901913f2fe32f8510e5e5a1a7cefc791ccaf039def0993c86d1c822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300a3fc9e901913f2fe32f8510e5e5a1a7cefc791ccaf039def0993c86d1c822->leave($__internal_300a3fc9e901913f2fe32f8510e5e5a1a7cefc791ccaf039def0993c86d1c822_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd6257a383e2f066dabdfd4f65f0df1554cc7dada5a944a6bbe5c21f326ee8d6 = $this->env->getExtension("native_profiler");
        $__internal_fd6257a383e2f066dabdfd4f65f0df1554cc7dada5a944a6bbe5c21f326ee8d6->enter($__internal_fd6257a383e2f066dabdfd4f65f0df1554cc7dada5a944a6bbe5c21f326ee8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd6257a383e2f066dabdfd4f65f0df1554cc7dada5a944a6bbe5c21f326ee8d6->leave($__internal_fd6257a383e2f066dabdfd4f65f0df1554cc7dada5a944a6bbe5c21f326ee8d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc48be9e5a30c42b7e35e83f5962d75d694d062e14aadfd0e0cd985076205a48 = $this->env->getExtension("native_profiler");
        $__internal_cc48be9e5a30c42b7e35e83f5962d75d694d062e14aadfd0e0cd985076205a48->enter($__internal_cc48be9e5a30c42b7e35e83f5962d75d694d062e14aadfd0e0cd985076205a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc48be9e5a30c42b7e35e83f5962d75d694d062e14aadfd0e0cd985076205a48->leave($__internal_cc48be9e5a30c42b7e35e83f5962d75d694d062e14aadfd0e0cd985076205a48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d541e5450cf78defd1e680577d35a64a3ddb5eed40092ab6a1955a8e8dd4be55 = $this->env->getExtension("native_profiler");
        $__internal_d541e5450cf78defd1e680577d35a64a3ddb5eed40092ab6a1955a8e8dd4be55->enter($__internal_d541e5450cf78defd1e680577d35a64a3ddb5eed40092ab6a1955a8e8dd4be55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d541e5450cf78defd1e680577d35a64a3ddb5eed40092ab6a1955a8e8dd4be55->leave($__internal_d541e5450cf78defd1e680577d35a64a3ddb5eed40092ab6a1955a8e8dd4be55_prof);

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
