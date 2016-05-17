<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8f8aedb6c0024ca359fdd32c6f8184fbf478152aa668edb48b01bc248b05dae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33f4904e608cc085bf824ac416cf8e5eaf4898a37fe590432172347b2fba7bff = $this->env->getExtension("native_profiler");
        $__internal_33f4904e608cc085bf824ac416cf8e5eaf4898a37fe590432172347b2fba7bff->enter($__internal_33f4904e608cc085bf824ac416cf8e5eaf4898a37fe590432172347b2fba7bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f4904e608cc085bf824ac416cf8e5eaf4898a37fe590432172347b2fba7bff->leave($__internal_33f4904e608cc085bf824ac416cf8e5eaf4898a37fe590432172347b2fba7bff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d8ad8ac85da803cb6126aef632ac99916d3fa4121e1078843e6a80b4727b8f3 = $this->env->getExtension("native_profiler");
        $__internal_3d8ad8ac85da803cb6126aef632ac99916d3fa4121e1078843e6a80b4727b8f3->enter($__internal_3d8ad8ac85da803cb6126aef632ac99916d3fa4121e1078843e6a80b4727b8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d8ad8ac85da803cb6126aef632ac99916d3fa4121e1078843e6a80b4727b8f3->leave($__internal_3d8ad8ac85da803cb6126aef632ac99916d3fa4121e1078843e6a80b4727b8f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4251601bb4d31140ee8227f7b43097422b7ce3d93080b667b30c7d31e2c47a03 = $this->env->getExtension("native_profiler");
        $__internal_4251601bb4d31140ee8227f7b43097422b7ce3d93080b667b30c7d31e2c47a03->enter($__internal_4251601bb4d31140ee8227f7b43097422b7ce3d93080b667b30c7d31e2c47a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4251601bb4d31140ee8227f7b43097422b7ce3d93080b667b30c7d31e2c47a03->leave($__internal_4251601bb4d31140ee8227f7b43097422b7ce3d93080b667b30c7d31e2c47a03_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a957a9b2d1148a30c3e78a2d81aa947c8247265091ad80b16599d53827a2d561 = $this->env->getExtension("native_profiler");
        $__internal_a957a9b2d1148a30c3e78a2d81aa947c8247265091ad80b16599d53827a2d561->enter($__internal_a957a9b2d1148a30c3e78a2d81aa947c8247265091ad80b16599d53827a2d561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a957a9b2d1148a30c3e78a2d81aa947c8247265091ad80b16599d53827a2d561->leave($__internal_a957a9b2d1148a30c3e78a2d81aa947c8247265091ad80b16599d53827a2d561_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
