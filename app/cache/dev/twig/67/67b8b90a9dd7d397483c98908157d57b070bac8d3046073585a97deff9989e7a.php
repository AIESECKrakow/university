<?php

/* default/index.html.twig */
class __TwigTemplate_dd72a0e6d61f300b47bbdafcf40240cf932c946855b1daf9181f5c6f421739d9 extends Twig_Template
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
        $__internal_fdf85ec0e74354d57cba9b64eb620f974489dcb1ba7edd8614a2dd0ee56310a4 = $this->env->getExtension("native_profiler");
        $__internal_fdf85ec0e74354d57cba9b64eb620f974489dcb1ba7edd8614a2dd0ee56310a4->enter($__internal_fdf85ec0e74354d57cba9b64eb620f974489dcb1ba7edd8614a2dd0ee56310a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf85ec0e74354d57cba9b64eb620f974489dcb1ba7edd8614a2dd0ee56310a4->leave($__internal_fdf85ec0e74354d57cba9b64eb620f974489dcb1ba7edd8614a2dd0ee56310a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_353d1a5368673dcf00372ed5d4b0d41afdbe5c47d50f500cf219967d71f6ae49 = $this->env->getExtension("native_profiler");
        $__internal_353d1a5368673dcf00372ed5d4b0d41afdbe5c47d50f500cf219967d71f6ae49->enter($__internal_353d1a5368673dcf00372ed5d4b0d41afdbe5c47d50f500cf219967d71f6ae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_353d1a5368673dcf00372ed5d4b0d41afdbe5c47d50f500cf219967d71f6ae49->leave($__internal_353d1a5368673dcf00372ed5d4b0d41afdbe5c47d50f500cf219967d71f6ae49_prof);

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
