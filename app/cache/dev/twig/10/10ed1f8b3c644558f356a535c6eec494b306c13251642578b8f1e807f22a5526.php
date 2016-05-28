<?php

/* default/index.html.twig */
class __TwigTemplate_5d2799d0d703dd152ce77839f9c61ceba8561538fbc2d9c7580b84acaeacf645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02318cc3bed62763a7c0cdfc137c59251f9f2dd12b9565ddb5090bc27846a7ff = $this->env->getExtension("native_profiler");
        $__internal_02318cc3bed62763a7c0cdfc137c59251f9f2dd12b9565ddb5090bc27846a7ff->enter($__internal_02318cc3bed62763a7c0cdfc137c59251f9f2dd12b9565ddb5090bc27846a7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02318cc3bed62763a7c0cdfc137c59251f9f2dd12b9565ddb5090bc27846a7ff->leave($__internal_02318cc3bed62763a7c0cdfc137c59251f9f2dd12b9565ddb5090bc27846a7ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_517793d5f73fbe21374e614cc58ff1470dadaa7758007333469eded7d280cc9c = $this->env->getExtension("native_profiler");
        $__internal_517793d5f73fbe21374e614cc58ff1470dadaa7758007333469eded7d280cc9c->enter($__internal_517793d5f73fbe21374e614cc58ff1470dadaa7758007333469eded7d280cc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_517793d5f73fbe21374e614cc58ff1470dadaa7758007333469eded7d280cc9c->leave($__internal_517793d5f73fbe21374e614cc58ff1470dadaa7758007333469eded7d280cc9c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
