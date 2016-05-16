<?php

/* base.html.twig */
class __TwigTemplate_b09251f3da5fff7aa7e06e478e5c2137182c9fa2147700e70e0fec4eaaa389ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5ebac767508817a8fc8acd0654c852d4f0b9d0599970ac25135986903c7e368 = $this->env->getExtension("native_profiler");
        $__internal_b5ebac767508817a8fc8acd0654c852d4f0b9d0599970ac25135986903c7e368->enter($__internal_b5ebac767508817a8fc8acd0654c852d4f0b9d0599970ac25135986903c7e368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b5ebac767508817a8fc8acd0654c852d4f0b9d0599970ac25135986903c7e368->leave($__internal_b5ebac767508817a8fc8acd0654c852d4f0b9d0599970ac25135986903c7e368_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14560886e0097e31c51dfe39f04f07dcad700a55b638bfbe974c25d1fca9f3b2 = $this->env->getExtension("native_profiler");
        $__internal_14560886e0097e31c51dfe39f04f07dcad700a55b638bfbe974c25d1fca9f3b2->enter($__internal_14560886e0097e31c51dfe39f04f07dcad700a55b638bfbe974c25d1fca9f3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_14560886e0097e31c51dfe39f04f07dcad700a55b638bfbe974c25d1fca9f3b2->leave($__internal_14560886e0097e31c51dfe39f04f07dcad700a55b638bfbe974c25d1fca9f3b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_130857bf64f146337406201f9d75aa57a8f166434190ca3ad1f24d776a617b03 = $this->env->getExtension("native_profiler");
        $__internal_130857bf64f146337406201f9d75aa57a8f166434190ca3ad1f24d776a617b03->enter($__internal_130857bf64f146337406201f9d75aa57a8f166434190ca3ad1f24d776a617b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_130857bf64f146337406201f9d75aa57a8f166434190ca3ad1f24d776a617b03->leave($__internal_130857bf64f146337406201f9d75aa57a8f166434190ca3ad1f24d776a617b03_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb40d9bb0e0587ad8778b1c7364a20211520ef947532b61055782afd0ec2ad40 = $this->env->getExtension("native_profiler");
        $__internal_bb40d9bb0e0587ad8778b1c7364a20211520ef947532b61055782afd0ec2ad40->enter($__internal_bb40d9bb0e0587ad8778b1c7364a20211520ef947532b61055782afd0ec2ad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb40d9bb0e0587ad8778b1c7364a20211520ef947532b61055782afd0ec2ad40->leave($__internal_bb40d9bb0e0587ad8778b1c7364a20211520ef947532b61055782afd0ec2ad40_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_205cd47f863e11acd478d194d05eabc143f3bf0945e2f703a1fc56b04aec83b0 = $this->env->getExtension("native_profiler");
        $__internal_205cd47f863e11acd478d194d05eabc143f3bf0945e2f703a1fc56b04aec83b0->enter($__internal_205cd47f863e11acd478d194d05eabc143f3bf0945e2f703a1fc56b04aec83b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_205cd47f863e11acd478d194d05eabc143f3bf0945e2f703a1fc56b04aec83b0->leave($__internal_205cd47f863e11acd478d194d05eabc143f3bf0945e2f703a1fc56b04aec83b0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
