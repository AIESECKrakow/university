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
        $__internal_731e28a556c4e21e3b7646ba0480a9d53dfe057e5a130b0166b252926e9ced36 = $this->env->getExtension("native_profiler");
        $__internal_731e28a556c4e21e3b7646ba0480a9d53dfe057e5a130b0166b252926e9ced36->enter($__internal_731e28a556c4e21e3b7646ba0480a9d53dfe057e5a130b0166b252926e9ced36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_731e28a556c4e21e3b7646ba0480a9d53dfe057e5a130b0166b252926e9ced36->leave($__internal_731e28a556c4e21e3b7646ba0480a9d53dfe057e5a130b0166b252926e9ced36_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26b6e657cf744355e32a417a9c4c3007101826cee3d744a7e19b1612a4b687e4 = $this->env->getExtension("native_profiler");
        $__internal_26b6e657cf744355e32a417a9c4c3007101826cee3d744a7e19b1612a4b687e4->enter($__internal_26b6e657cf744355e32a417a9c4c3007101826cee3d744a7e19b1612a4b687e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_26b6e657cf744355e32a417a9c4c3007101826cee3d744a7e19b1612a4b687e4->leave($__internal_26b6e657cf744355e32a417a9c4c3007101826cee3d744a7e19b1612a4b687e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a0b42f6e4226aa6e0596de03b30f353296d0dae53c6eeac0b1a740ee391a573 = $this->env->getExtension("native_profiler");
        $__internal_3a0b42f6e4226aa6e0596de03b30f353296d0dae53c6eeac0b1a740ee391a573->enter($__internal_3a0b42f6e4226aa6e0596de03b30f353296d0dae53c6eeac0b1a740ee391a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a0b42f6e4226aa6e0596de03b30f353296d0dae53c6eeac0b1a740ee391a573->leave($__internal_3a0b42f6e4226aa6e0596de03b30f353296d0dae53c6eeac0b1a740ee391a573_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d952993a58639af6d6bbe812ff85c9bee156d03db3cf4a3ee913919ed422ac12 = $this->env->getExtension("native_profiler");
        $__internal_d952993a58639af6d6bbe812ff85c9bee156d03db3cf4a3ee913919ed422ac12->enter($__internal_d952993a58639af6d6bbe812ff85c9bee156d03db3cf4a3ee913919ed422ac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d952993a58639af6d6bbe812ff85c9bee156d03db3cf4a3ee913919ed422ac12->leave($__internal_d952993a58639af6d6bbe812ff85c9bee156d03db3cf4a3ee913919ed422ac12_prof);

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
