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
        $__internal_ce925a6e799e9f7071605b17cc4c929031e9a5f8a1677c5317125b073200a950 = $this->env->getExtension("native_profiler");
        $__internal_ce925a6e799e9f7071605b17cc4c929031e9a5f8a1677c5317125b073200a950->enter($__internal_ce925a6e799e9f7071605b17cc4c929031e9a5f8a1677c5317125b073200a950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce925a6e799e9f7071605b17cc4c929031e9a5f8a1677c5317125b073200a950->leave($__internal_ce925a6e799e9f7071605b17cc4c929031e9a5f8a1677c5317125b073200a950_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a00d5f5693a56e1d8a3437d8f04ee735651b7882159b5ea3fdf63f941fbc380 = $this->env->getExtension("native_profiler");
        $__internal_0a00d5f5693a56e1d8a3437d8f04ee735651b7882159b5ea3fdf63f941fbc380->enter($__internal_0a00d5f5693a56e1d8a3437d8f04ee735651b7882159b5ea3fdf63f941fbc380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a00d5f5693a56e1d8a3437d8f04ee735651b7882159b5ea3fdf63f941fbc380->leave($__internal_0a00d5f5693a56e1d8a3437d8f04ee735651b7882159b5ea3fdf63f941fbc380_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_551ad9c63cf7c2af756166dade1fc6e6a274746fec62c497b7961684bfee17c4 = $this->env->getExtension("native_profiler");
        $__internal_551ad9c63cf7c2af756166dade1fc6e6a274746fec62c497b7961684bfee17c4->enter($__internal_551ad9c63cf7c2af756166dade1fc6e6a274746fec62c497b7961684bfee17c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_551ad9c63cf7c2af756166dade1fc6e6a274746fec62c497b7961684bfee17c4->leave($__internal_551ad9c63cf7c2af756166dade1fc6e6a274746fec62c497b7961684bfee17c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_362d650bf926f4419a2b64e9a8e12c21f7c0dfec81cf74e836dd6754641ad237 = $this->env->getExtension("native_profiler");
        $__internal_362d650bf926f4419a2b64e9a8e12c21f7c0dfec81cf74e836dd6754641ad237->enter($__internal_362d650bf926f4419a2b64e9a8e12c21f7c0dfec81cf74e836dd6754641ad237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_362d650bf926f4419a2b64e9a8e12c21f7c0dfec81cf74e836dd6754641ad237->leave($__internal_362d650bf926f4419a2b64e9a8e12c21f7c0dfec81cf74e836dd6754641ad237_prof);

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
