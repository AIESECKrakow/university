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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c49032f1b244abca3665dd1e928d5a703c74a65114e33326c456695374514652 = $this->env->getExtension("native_profiler");
        $__internal_c49032f1b244abca3665dd1e928d5a703c74a65114e33326c456695374514652->enter($__internal_c49032f1b244abca3665dd1e928d5a703c74a65114e33326c456695374514652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c49032f1b244abca3665dd1e928d5a703c74a65114e33326c456695374514652->leave($__internal_c49032f1b244abca3665dd1e928d5a703c74a65114e33326c456695374514652_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bb771e20b23442ad99a4589cbc60e0ed4b445097b8fafe1fc7bd26b20ec05e9 = $this->env->getExtension("native_profiler");
        $__internal_7bb771e20b23442ad99a4589cbc60e0ed4b445097b8fafe1fc7bd26b20ec05e9->enter($__internal_7bb771e20b23442ad99a4589cbc60e0ed4b445097b8fafe1fc7bd26b20ec05e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Zarejestruj się na warsztaty językowe AIESEC University";
        
        $__internal_7bb771e20b23442ad99a4589cbc60e0ed4b445097b8fafe1fc7bd26b20ec05e9->leave($__internal_7bb771e20b23442ad99a4589cbc60e0ed4b445097b8fafe1fc7bd26b20ec05e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cec7048cb1f1481496dc174127931dc9533247ddab19a163b2df0461b8b4f8df = $this->env->getExtension("native_profiler");
        $__internal_cec7048cb1f1481496dc174127931dc9533247ddab19a163b2df0461b8b4f8df->enter($__internal_cec7048cb1f1481496dc174127931dc9533247ddab19a163b2df0461b8b4f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\" style=\"width: 300px;\">
        <h2>Zarejestruj się</h2>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'errors');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
        </div>
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_cec7048cb1f1481496dc174127931dc9533247ddab19a163b2df0461b8b4f8df->leave($__internal_cec7048cb1f1481496dc174127931dc9533247ddab19a163b2df0461b8b4f8df_prof);

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
        return array (  121 => 30,  116 => 28,  112 => 27,  108 => 26,  102 => 23,  98 => 22,  94 => 21,  88 => 18,  84 => 17,  80 => 16,  74 => 13,  70 => 12,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Zarejestruj się na warsztaty językowe AIESEC University{% endblock %}*/
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
