<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5a6d3741be824ddf7c48d086c209af140a1cf577b34cfd138eb4bba06e751b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c3297a429bfd33c77c3d2acb869e94a1c8ec851ef341cad5f932be5b696e0e43 = $this->env->getExtension("native_profiler");
        $__internal_c3297a429bfd33c77c3d2acb869e94a1c8ec851ef341cad5f932be5b696e0e43->enter($__internal_c3297a429bfd33c77c3d2acb869e94a1c8ec851ef341cad5f932be5b696e0e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3297a429bfd33c77c3d2acb869e94a1c8ec851ef341cad5f932be5b696e0e43->leave($__internal_c3297a429bfd33c77c3d2acb869e94a1c8ec851ef341cad5f932be5b696e0e43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad15fd81908567e0e5ba01df8c3ac95fb8a1a612c3b3a7c596a663da3b4a73a3 = $this->env->getExtension("native_profiler");
        $__internal_ad15fd81908567e0e5ba01df8c3ac95fb8a1a612c3b3a7c596a663da3b4a73a3->enter($__internal_ad15fd81908567e0e5ba01df8c3ac95fb8a1a612c3b3a7c596a663da3b4a73a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ad15fd81908567e0e5ba01df8c3ac95fb8a1a612c3b3a7c596a663da3b4a73a3->leave($__internal_ad15fd81908567e0e5ba01df8c3ac95fb8a1a612c3b3a7c596a663da3b4a73a3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6483cd0dd135d0b5c2cfe1737f4838b6b183e59f306e37190d1f3146270c2341 = $this->env->getExtension("native_profiler");
        $__internal_6483cd0dd135d0b5c2cfe1737f4838b6b183e59f306e37190d1f3146270c2341->enter($__internal_6483cd0dd135d0b5c2cfe1737f4838b6b183e59f306e37190d1f3146270c2341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6483cd0dd135d0b5c2cfe1737f4838b6b183e59f306e37190d1f3146270c2341->leave($__internal_6483cd0dd135d0b5c2cfe1737f4838b6b183e59f306e37190d1f3146270c2341_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3966ad0ddfbfc2a921c53d68e23c661bc5535293e4a2a357b2f2934a919620e0 = $this->env->getExtension("native_profiler");
        $__internal_3966ad0ddfbfc2a921c53d68e23c661bc5535293e4a2a357b2f2934a919620e0->enter($__internal_3966ad0ddfbfc2a921c53d68e23c661bc5535293e4a2a357b2f2934a919620e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3966ad0ddfbfc2a921c53d68e23c661bc5535293e4a2a357b2f2934a919620e0->leave($__internal_3966ad0ddfbfc2a921c53d68e23c661bc5535293e4a2a357b2f2934a919620e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
