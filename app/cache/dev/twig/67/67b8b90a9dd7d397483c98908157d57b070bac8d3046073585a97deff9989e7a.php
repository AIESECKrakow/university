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
        $__internal_16a7aabc0aa9ff149fbe95bbc24557ac3ffe4a99ccb8b3106475d05fbd408192 = $this->env->getExtension("native_profiler");
        $__internal_16a7aabc0aa9ff149fbe95bbc24557ac3ffe4a99ccb8b3106475d05fbd408192->enter($__internal_16a7aabc0aa9ff149fbe95bbc24557ac3ffe4a99ccb8b3106475d05fbd408192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16a7aabc0aa9ff149fbe95bbc24557ac3ffe4a99ccb8b3106475d05fbd408192->leave($__internal_16a7aabc0aa9ff149fbe95bbc24557ac3ffe4a99ccb8b3106475d05fbd408192_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25ffe70bccca9003edbf3ff3c564d092c193cb29a5360be1b0fcf39ad16c601a = $this->env->getExtension("native_profiler");
        $__internal_25ffe70bccca9003edbf3ff3c564d092c193cb29a5360be1b0fcf39ad16c601a->enter($__internal_25ffe70bccca9003edbf3ff3c564d092c193cb29a5360be1b0fcf39ad16c601a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-12\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 6
            echo "        <div class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
";
        
        $__internal_25ffe70bccca9003edbf3ff3c564d092c193cb29a5360be1b0fcf39ad16c601a->leave($__internal_25ffe70bccca9003edbf3ff3c564d092c193cb29a5360be1b0fcf39ad16c601a_prof);

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
        return array (  56 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="col-md-12">*/
/*     {% for flash_message in app.session.flashbag.get('notice') %}*/
/*         <div class="alert alert-success" role="alert">{{ flash_message }}</div>*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
