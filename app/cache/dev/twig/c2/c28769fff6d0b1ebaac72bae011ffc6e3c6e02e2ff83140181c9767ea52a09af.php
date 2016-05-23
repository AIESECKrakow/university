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
        $__internal_e4cb88429539160aa248a4a6a46026c69f5aee655cd580f3647fb25aa909a837 = $this->env->getExtension("native_profiler");
        $__internal_e4cb88429539160aa248a4a6a46026c69f5aee655cd580f3647fb25aa909a837->enter($__internal_e4cb88429539160aa248a4a6a46026c69f5aee655cd580f3647fb25aa909a837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4cb88429539160aa248a4a6a46026c69f5aee655cd580f3647fb25aa909a837->leave($__internal_e4cb88429539160aa248a4a6a46026c69f5aee655cd580f3647fb25aa909a837_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8e2cef66d29702112a2c160ab5066781c6dc28a0314a47484881fcfb06cfdaa = $this->env->getExtension("native_profiler");
        $__internal_a8e2cef66d29702112a2c160ab5066781c6dc28a0314a47484881fcfb06cfdaa->enter($__internal_a8e2cef66d29702112a2c160ab5066781c6dc28a0314a47484881fcfb06cfdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a8e2cef66d29702112a2c160ab5066781c6dc28a0314a47484881fcfb06cfdaa->leave($__internal_a8e2cef66d29702112a2c160ab5066781c6dc28a0314a47484881fcfb06cfdaa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a73f31926ead0c8fb7fd5d2d2a79869cfc17c40c75bb279d514e7124229f972 = $this->env->getExtension("native_profiler");
        $__internal_8a73f31926ead0c8fb7fd5d2d2a79869cfc17c40c75bb279d514e7124229f972->enter($__internal_8a73f31926ead0c8fb7fd5d2d2a79869cfc17c40c75bb279d514e7124229f972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a73f31926ead0c8fb7fd5d2d2a79869cfc17c40c75bb279d514e7124229f972->leave($__internal_8a73f31926ead0c8fb7fd5d2d2a79869cfc17c40c75bb279d514e7124229f972_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4349b5274cf1e94bd7ddf8dc3383249e520262b05e1915b2c09decbac78ed4c = $this->env->getExtension("native_profiler");
        $__internal_c4349b5274cf1e94bd7ddf8dc3383249e520262b05e1915b2c09decbac78ed4c->enter($__internal_c4349b5274cf1e94bd7ddf8dc3383249e520262b05e1915b2c09decbac78ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c4349b5274cf1e94bd7ddf8dc3383249e520262b05e1915b2c09decbac78ed4c->leave($__internal_c4349b5274cf1e94bd7ddf8dc3383249e520262b05e1915b2c09decbac78ed4c_prof);

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
