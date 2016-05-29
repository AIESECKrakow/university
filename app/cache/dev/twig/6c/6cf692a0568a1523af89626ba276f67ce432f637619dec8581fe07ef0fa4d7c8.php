<?php

/* default/partners.html.twig */
class __TwigTemplate_adba221063048a0e0e719b4432049f7f7879aec94778ace0e759880408c33238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/partners.html.twig", 1);
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
        $__internal_96dbf5b8e5ebd24f05d1d38e1735c0c1ef7e69ac2b2d83458e4b1d9c75781098 = $this->env->getExtension("native_profiler");
        $__internal_96dbf5b8e5ebd24f05d1d38e1735c0c1ef7e69ac2b2d83458e4b1d9c75781098->enter($__internal_96dbf5b8e5ebd24f05d1d38e1735c0c1ef7e69ac2b2d83458e4b1d9c75781098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/partners.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96dbf5b8e5ebd24f05d1d38e1735c0c1ef7e69ac2b2d83458e4b1d9c75781098->leave($__internal_96dbf5b8e5ebd24f05d1d38e1735c0c1ef7e69ac2b2d83458e4b1d9c75781098_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2202d85e20e7785570daabcda6430ab60f01757c8a3c81cd5ddf7c7361b0610 = $this->env->getExtension("native_profiler");
        $__internal_e2202d85e20e7785570daabcda6430ab60f01757c8a3c81cd5ddf7c7361b0610->enter($__internal_e2202d85e20e7785570daabcda6430ab60f01757c8a3c81cd5ddf7c7361b0610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partnerzy | Warsztaty językowe AIESEC University";
        
        $__internal_e2202d85e20e7785570daabcda6430ab60f01757c8a3c81cd5ddf7c7361b0610->leave($__internal_e2202d85e20e7785570daabcda6430ab60f01757c8a3c81cd5ddf7c7361b0610_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_931259327ebd82f854f38a43696745507de1b3864e3671afcb1ea55f0a1fc16d = $this->env->getExtension("native_profiler");
        $__internal_931259327ebd82f854f38a43696745507de1b3864e3671afcb1ea55f0a1fc16d->enter($__internal_931259327ebd82f854f38a43696745507de1b3864e3671afcb1ea55f0a1fc16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <div class=\"row\">
            <div class=\"col-md-10 centered heading fontcolor\">
                <div class=\"logo text-center\"></div>
                <br/>
                <h3 class=\"text-center\"><strong>Nasi partnerzy</strong></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 text-center\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a href=\"http://www.soul.edu.pl/\" target=\"_blank\"><img style=\"max-height: 150px;\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/logo-soul-white2.png"), "html", null, true);
        echo "\" />
                            <h3 class=\"fontcolor\">Szkoła językowa SOUL</h3></a>
                        <hr />
                    </div>
                </div>
                <!-- middle partners column -->
                <div class=\"col-md-12\">

                    <!-- first row of partners -->
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cinnabon.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/atlanticsports.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/interbook.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cukier.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/dagrasso.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/b4.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cwflogo.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/diva.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/parkwodny.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/pik.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/shakebake.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/wedel.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <a href=\"#\"><img class=\"partners-logo\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/placnowy.jpg"), "html", null, true);
        echo "\" /></a>
                    </div>
                    <div class=\"col-md-6\">

                    </div>
                </div>
            </div>

        </div>
";
        
        $__internal_931259327ebd82f854f38a43696745507de1b3864e3671afcb1ea55f0a1fc16d->leave($__internal_931259327ebd82f854f38a43696745507de1b3864e3671afcb1ea55f0a1fc16d_prof);

    }

    public function getTemplateName()
    {
        return "default/partners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 85,  162 => 77,  156 => 74,  147 => 68,  141 => 65,  132 => 59,  126 => 56,  117 => 50,  111 => 47,  102 => 41,  96 => 38,  87 => 32,  81 => 29,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Partnerzy | Warsztaty językowe AIESEC University{% endblock %}*/
/* */
/* {% block body %}*/
/*         <div class="row">*/
/*             <div class="col-md-10 centered heading fontcolor">*/
/*                 <div class="logo text-center"></div>*/
/*                 <br/>*/
/*                 <h3 class="text-center"><strong>Nasi partnerzy</strong></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-6 col-md-offset-3 text-center">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <a href="http://www.soul.edu.pl/" target="_blank"><img style="max-height: 150px;" src="{{ asset('img/partners/logo-soul-white2.png') }}" />*/
/*                             <h3 class="fontcolor">Szkoła językowa SOUL</h3></a>*/
/*                         <hr />*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- middle partners column -->*/
/*                 <div class="col-md-12">*/
/* */
/*                     <!-- first row of partners -->*/
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/cinnabon.png') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/atlanticsports.png') }}" /></a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/interbook.jpg') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/cukier.png') }}" /></a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/dagrasso.png') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/b4.jpg') }}" /></a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/cwflogo.jpg') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/diva.png') }}" /></a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/parkwodny.jpg') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/pik.png') }}" /></a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/shakebake.png') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <a href="#"><img class="partners-logo" src="{{ asset('img/partners/wedel.jpg') }}" /></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <div class="row">*/
/*                     <div class="col-md-6">*/
/*                         <a href="#"><img class="partners-logo" src="{{ asset('img/partners/placnowy.jpg') }}" /></a>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* {% endblock %}*/
