<?php

/* default/signUp.html.twig */
class __TwigTemplate_568cd934af51f1e5f66e491ad3bf46fcfea42e1a2835cb30da1c78e98f7f6684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/signUp.html.twig", 1);
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
        $__internal_a25a3473de31fd367b97d6ba2dce607ed5b71f3f6a1229614982e0b3d5ead092 = $this->env->getExtension("native_profiler");
        $__internal_a25a3473de31fd367b97d6ba2dce607ed5b71f3f6a1229614982e0b3d5ead092->enter($__internal_a25a3473de31fd367b97d6ba2dce607ed5b71f3f6a1229614982e0b3d5ead092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a25a3473de31fd367b97d6ba2dce607ed5b71f3f6a1229614982e0b3d5ead092->leave($__internal_a25a3473de31fd367b97d6ba2dce607ed5b71f3f6a1229614982e0b3d5ead092_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f30ae82b106675e8994e81350c05f303bf581d6642315889bd84fa1e1ab9048 = $this->env->getExtension("native_profiler");
        $__internal_0f30ae82b106675e8994e81350c05f303bf581d6642315889bd84fa1e1ab9048->enter($__internal_0f30ae82b106675e8994e81350c05f303bf581d6642315889bd84fa1e1ab9048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\" style=\"width: 300px;\">
        <h2>Zarejestruj się</h2>
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'errors');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
        </div>
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_0f30ae82b106675e8994e81350c05f303bf581d6642315889bd84fa1e1ab9048->leave($__internal_0f30ae82b106675e8994e81350c05f303bf581d6642315889bd84fa1e1ab9048_prof);

    }

    public function getTemplateName()
    {
        return "default/signUp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  103 => 26,  99 => 25,  95 => 24,  89 => 21,  85 => 20,  81 => 19,  75 => 16,  71 => 15,  67 => 14,  61 => 11,  57 => 10,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container" style="width: 300px;">*/
/*         <h2>Zarejestruj się</h2>*/
/*         {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/*         <div class="form-group">*/
/*             {{ form_label(form.first_name) }}*/
/*             {{ form_errors(form.first_name) }}*/
/*             {{ form_widget(form.first_name) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.last_name) }}*/
/*             {{ form_errors(form.last_name) }}*/
/*             {{ form_widget(form.last_name) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.email) }}*/
/*             {{ form_errors(form.email) }}*/
/*             {{ form_widget(form.email) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.phone) }}*/
/*             {{ form_errors(form.phone) }}*/
/*             {{ form_widget(form.phone) }}*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
