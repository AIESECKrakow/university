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
        $__internal_539582664d058a7534de5edf38aa66496d5d2eeb71d0014b2b5b3773c05a8407 = $this->env->getExtension("native_profiler");
        $__internal_539582664d058a7534de5edf38aa66496d5d2eeb71d0014b2b5b3773c05a8407->enter($__internal_539582664d058a7534de5edf38aa66496d5d2eeb71d0014b2b5b3773c05a8407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_539582664d058a7534de5edf38aa66496d5d2eeb71d0014b2b5b3773c05a8407->leave($__internal_539582664d058a7534de5edf38aa66496d5d2eeb71d0014b2b5b3773c05a8407_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0aa55a4bbac115632c60e23abf67b0097cf80da77493c949f502c6701deeaa4d = $this->env->getExtension("native_profiler");
        $__internal_0aa55a4bbac115632c60e23abf67b0097cf80da77493c949f502c6701deeaa4d->enter($__internal_0aa55a4bbac115632c60e23abf67b0097cf80da77493c949f502c6701deeaa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0aa55a4bbac115632c60e23abf67b0097cf80da77493c949f502c6701deeaa4d->leave($__internal_0aa55a4bbac115632c60e23abf67b0097cf80da77493c949f502c6701deeaa4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b688cb6cc6e9e1c303dafd2e8cacfec67f2f8218966d5c33730e061dce8da4e9 = $this->env->getExtension("native_profiler");
        $__internal_b688cb6cc6e9e1c303dafd2e8cacfec67f2f8218966d5c33730e061dce8da4e9->enter($__internal_b688cb6cc6e9e1c303dafd2e8cacfec67f2f8218966d5c33730e061dce8da4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b688cb6cc6e9e1c303dafd2e8cacfec67f2f8218966d5c33730e061dce8da4e9->leave($__internal_b688cb6cc6e9e1c303dafd2e8cacfec67f2f8218966d5c33730e061dce8da4e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12d1879a09ee65f2ba43b9f635eacbb290ae68b361106089ab7ea592fb85d816 = $this->env->getExtension("native_profiler");
        $__internal_12d1879a09ee65f2ba43b9f635eacbb290ae68b361106089ab7ea592fb85d816->enter($__internal_12d1879a09ee65f2ba43b9f635eacbb290ae68b361106089ab7ea592fb85d816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12d1879a09ee65f2ba43b9f635eacbb290ae68b361106089ab7ea592fb85d816->leave($__internal_12d1879a09ee65f2ba43b9f635eacbb290ae68b361106089ab7ea592fb85d816_prof);

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
