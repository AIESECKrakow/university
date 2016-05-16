<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_74ddf3c5bcc2e71eb151ecd31a338b18f83d478480b438985ac988ed5018b589 extends Twig_Template
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
        $__internal_a1372a4304ffd3bccf92b53e46d891258e35ddce597c588cec07d5040e2d0579 = $this->env->getExtension("native_profiler");
        $__internal_a1372a4304ffd3bccf92b53e46d891258e35ddce597c588cec07d5040e2d0579->enter($__internal_a1372a4304ffd3bccf92b53e46d891258e35ddce597c588cec07d5040e2d0579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1372a4304ffd3bccf92b53e46d891258e35ddce597c588cec07d5040e2d0579->leave($__internal_a1372a4304ffd3bccf92b53e46d891258e35ddce597c588cec07d5040e2d0579_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_568819d2551d2f3bd60457b1bd23ea7b2215e7f99e63559148a5081770830c91 = $this->env->getExtension("native_profiler");
        $__internal_568819d2551d2f3bd60457b1bd23ea7b2215e7f99e63559148a5081770830c91->enter($__internal_568819d2551d2f3bd60457b1bd23ea7b2215e7f99e63559148a5081770830c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_568819d2551d2f3bd60457b1bd23ea7b2215e7f99e63559148a5081770830c91->leave($__internal_568819d2551d2f3bd60457b1bd23ea7b2215e7f99e63559148a5081770830c91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7009d258dbc41dea1e69aa9864cd9de4555c56b803cecee726b9ae9eea0f196e = $this->env->getExtension("native_profiler");
        $__internal_7009d258dbc41dea1e69aa9864cd9de4555c56b803cecee726b9ae9eea0f196e->enter($__internal_7009d258dbc41dea1e69aa9864cd9de4555c56b803cecee726b9ae9eea0f196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7009d258dbc41dea1e69aa9864cd9de4555c56b803cecee726b9ae9eea0f196e->leave($__internal_7009d258dbc41dea1e69aa9864cd9de4555c56b803cecee726b9ae9eea0f196e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1f92f098de85b4ca325c98ae828484af85ce73448aa29cf7342cccb756726b1 = $this->env->getExtension("native_profiler");
        $__internal_e1f92f098de85b4ca325c98ae828484af85ce73448aa29cf7342cccb756726b1->enter($__internal_e1f92f098de85b4ca325c98ae828484af85ce73448aa29cf7342cccb756726b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e1f92f098de85b4ca325c98ae828484af85ce73448aa29cf7342cccb756726b1->leave($__internal_e1f92f098de85b4ca325c98ae828484af85ce73448aa29cf7342cccb756726b1_prof);

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
