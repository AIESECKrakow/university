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
        $__internal_30054853d25bc265bd18b3c1fab366c25c3615b8529b62445917c1b5686d6060 = $this->env->getExtension("native_profiler");
        $__internal_30054853d25bc265bd18b3c1fab366c25c3615b8529b62445917c1b5686d6060->enter($__internal_30054853d25bc265bd18b3c1fab366c25c3615b8529b62445917c1b5686d6060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30054853d25bc265bd18b3c1fab366c25c3615b8529b62445917c1b5686d6060->leave($__internal_30054853d25bc265bd18b3c1fab366c25c3615b8529b62445917c1b5686d6060_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f127d5233fdb02ea1c9833cf8a1a9bd9abb17445ed4e98823faed8f1467be274 = $this->env->getExtension("native_profiler");
        $__internal_f127d5233fdb02ea1c9833cf8a1a9bd9abb17445ed4e98823faed8f1467be274->enter($__internal_f127d5233fdb02ea1c9833cf8a1a9bd9abb17445ed4e98823faed8f1467be274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_f127d5233fdb02ea1c9833cf8a1a9bd9abb17445ed4e98823faed8f1467be274->leave($__internal_f127d5233fdb02ea1c9833cf8a1a9bd9abb17445ed4e98823faed8f1467be274_prof);

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
