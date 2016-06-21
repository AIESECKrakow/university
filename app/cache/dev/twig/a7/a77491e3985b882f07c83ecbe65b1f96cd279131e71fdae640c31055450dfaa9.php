<?php

/* base.html.twig */
class __TwigTemplate_fb5de487a2200e9f916b578a9320e03ef2959581981f7ca9df5c3f3f9dad7b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d40c1c31ac5dc1ffe4bd31675798937397d33297afc0b79a24da001a2d44937b = $this->env->getExtension("native_profiler");
        $__internal_d40c1c31ac5dc1ffe4bd31675798937397d33297afc0b79a24da001a2d44937b->enter($__internal_d40c1c31ac5dc1ffe4bd31675798937397d33297afc0b79a24da001a2d44937b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 14
        $this->displayBlock('navbar', $context, $blocks);
        // line 42
        echo "<div class=\"content-container\"> ";
        $this->displayBlock('body', $context, $blocks);
        echo " </div>
";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "</body>
</html>";
        
        $__internal_d40c1c31ac5dc1ffe4bd31675798937397d33297afc0b79a24da001a2d44937b->leave($__internal_d40c1c31ac5dc1ffe4bd31675798937397d33297afc0b79a24da001a2d44937b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6afe6a01a48a0a3690cb85f2c14173d5dc7fa0c2309e75fe6bea4e1a93cb642 = $this->env->getExtension("native_profiler");
        $__internal_c6afe6a01a48a0a3690cb85f2c14173d5dc7fa0c2309e75fe6bea4e1a93cb642->enter($__internal_c6afe6a01a48a0a3690cb85f2c14173d5dc7fa0c2309e75fe6bea4e1a93cb642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Warsztaty językowe AIESEC University";
        
        $__internal_c6afe6a01a48a0a3690cb85f2c14173d5dc7fa0c2309e75fe6bea4e1a93cb642->leave($__internal_c6afe6a01a48a0a3690cb85f2c14173d5dc7fa0c2309e75fe6bea4e1a93cb642_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa6766719713d4f791d54fd2ecd946ce01f2aa3d64f464be813f02c08043852b = $this->env->getExtension("native_profiler");
        $__internal_aa6766719713d4f791d54fd2ecd946ce01f2aa3d64f464be813f02c08043852b->enter($__internal_aa6766719713d4f791d54fd2ecd946ce01f2aa3d64f464be813f02c08043852b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_aa6766719713d4f791d54fd2ecd946ce01f2aa3d64f464be813f02c08043852b->leave($__internal_aa6766719713d4f791d54fd2ecd946ce01f2aa3d64f464be813f02c08043852b_prof);

    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_45205428aae3b4d1b9cb3881c700f84eafe281700f356f00c30566b5aa5cc736 = $this->env->getExtension("native_profiler");
        $__internal_45205428aae3b4d1b9cb3881c700f84eafe281700f356f00c30566b5aa5cc736->enter($__internal_45205428aae3b4d1b9cb3881c700f84eafe281700f356f00c30566b5aa5cc736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 15
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"/\">
                <img alt=\"Brand\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo-black-small.png"), "html", null, true);
        echo "\" style=\"height:30px\">
            </a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li>
                <p class=\"navbar-text\">
                    <a class=\"navbar-title nav-link\" href=\"/\">Warsztaty językowe</a>
                </p>
            </li>
        </ul>
        <div class=\"container\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a class=\"nav-link\" href=\"/sign-up\">ZAPISZ SIĘ</a></li>
                <li><a class=\"nav-link\" href=\"/schedule\">HARMONOGRAM</a></li>
                <li><a class=\"nav-link\" href=\"/news\">AKTUALNOŚCI</a></li>
                <li><a class=\"nav-link\" href=\"/pricelist\">CENNIK</a></li>
                <li><a class=\"nav-link\" href=\"/about\">O WARSZTATACH</a></li>
                <li><a class=\"nav-link\" href=\"/partners\">PARTNERZY</a></li>
                <li><a class=\"nav-link\" href=\"/contact\">KONTAKT</a></li>
                <li><a href=\"https://www.facebook.com/lckrakow\" target=\"_blank\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/FB-f-Logo__blue_100.png"), "html", null, true);
        echo "\" style=\"height: 20px;\" /></a></li>
            </ul>
        </div>
    </nav>
";
        
        $__internal_45205428aae3b4d1b9cb3881c700f84eafe281700f356f00c30566b5aa5cc736->leave($__internal_45205428aae3b4d1b9cb3881c700f84eafe281700f356f00c30566b5aa5cc736_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_a12998c04fb52923aae2fda65259aa917a959991d8b377f97a1a32a0c38c34af = $this->env->getExtension("native_profiler");
        $__internal_a12998c04fb52923aae2fda65259aa917a959991d8b377f97a1a32a0c38c34af->enter($__internal_a12998c04fb52923aae2fda65259aa917a959991d8b377f97a1a32a0c38c34af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a12998c04fb52923aae2fda65259aa917a959991d8b377f97a1a32a0c38c34af->leave($__internal_a12998c04fb52923aae2fda65259aa917a959991d8b377f97a1a32a0c38c34af_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8950b5405d8164a68c564883785c53e26d5e16ec32f9d96284325cbf0e7abbec = $this->env->getExtension("native_profiler");
        $__internal_8950b5405d8164a68c564883785c53e26d5e16ec32f9d96284325cbf0e7abbec->enter($__internal_8950b5405d8164a68c564883785c53e26d5e16ec32f9d96284325cbf0e7abbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "<div class=\"footer container fontface\">
    <h4 style=\"color: black;\">Nasi partnerzy</h4>
    <div class=\"row\">
        <div class=\"col-md-3\">
            <a href=\"http://www.soul.edu.pl/\" target=\"_blank\"><img style=\"max-height: 50px;\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/soul-logo.jpg"), "html", null, true);
        echo "\" /><span style=\"color: darkblue;\">Szkoła językowa SOUL</span></a>
        </div>
        <!-- middle partners column -->
        <div class=\"col-md-6 text-center\">
            <!-- first row of partners -->
            <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cinnabon.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/atlanticsports.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/interbook.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cukier.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/dagrasso.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/b4.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                    </div>
                    <!-- second row of partners -->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cwflogo.jpg"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/diva.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/parkwodny.jpg"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/pik.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/shakebake.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/wedel.jpg"), "html", null, true);
        echo "\" /></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class=\"col-md-3\">

            <a href=\"http://aiesec.pl/\" target=\"_blank\"><img class=\"footer-logo\" src=\"img/powered-by-aiesec.png\" />  </a>
        </div>
    </div>
    <div class=\"row\">

    </div>

</div>
";
        
        $__internal_8950b5405d8164a68c564883785c53e26d5e16ec32f9d96284325cbf0e7abbec->leave($__internal_8950b5405d8164a68c564883785c53e26d5e16ec32f9d96284325cbf0e7abbec_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dcd33a3f27d1bcbd693e5d898baa97af7f69680974e13fd8d324d53f95b5a6e = $this->env->getExtension("native_profiler");
        $__internal_7dcd33a3f27d1bcbd693e5d898baa97af7f69680974e13fd8d324d53f95b5a6e->enter($__internal_7dcd33a3f27d1bcbd693e5d898baa97af7f69680974e13fd8d324d53f95b5a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
            ";
        
        $__internal_7dcd33a3f27d1bcbd693e5d898baa97af7f69680974e13fd8d324d53f95b5a6e->leave($__internal_7dcd33a3f27d1bcbd693e5d898baa97af7f69680974e13fd8d324d53f95b5a6e_prof);

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
        return array (  277 => 111,  271 => 110,  247 => 93,  241 => 90,  235 => 87,  229 => 84,  223 => 81,  217 => 78,  207 => 71,  201 => 68,  195 => 65,  189 => 62,  183 => 59,  177 => 56,  166 => 48,  160 => 44,  154 => 43,  143 => 42,  131 => 37,  109 => 18,  104 => 15,  98 => 14,  89 => 9,  85 => 7,  79 => 6,  67 => 5,  59 => 114,  56 => 110,  54 => 43,  49 => 42,  47 => 14,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Warsztaty językowe AIESEC University{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block navbar %}*/
/*     <nav class="navbar navbar-default navbar-fixed-top">*/
/*         <div class="navbar-header">*/
/*             <a class="navbar-brand" href="/">*/
/*                 <img alt="Brand" src="{{ asset('img/logo-black-small.png') }}" style="height:30px">*/
/*             </a>*/
/*         </div>*/
/*         <ul class="nav navbar-nav">*/
/*             <li>*/
/*                 <p class="navbar-text">*/
/*                     <a class="navbar-title nav-link" href="/">Warsztaty językowe</a>*/
/*                 </p>*/
/*             </li>*/
/*         </ul>*/
/*         <div class="container">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a class="nav-link" href="/sign-up">ZAPISZ SIĘ</a></li>*/
/*                 <li><a class="nav-link" href="/schedule">HARMONOGRAM</a></li>*/
/*                 <li><a class="nav-link" href="/news">AKTUALNOŚCI</a></li>*/
/*                 <li><a class="nav-link" href="/pricelist">CENNIK</a></li>*/
/*                 <li><a class="nav-link" href="/about">O WARSZTATACH</a></li>*/
/*                 <li><a class="nav-link" href="/partners">PARTNERZY</a></li>*/
/*                 <li><a class="nav-link" href="/contact">KONTAKT</a></li>*/
/*                 <li><a href="https://www.facebook.com/lckrakow" target="_blank"><img src="{{ asset('img/FB-f-Logo__blue_100.png') }}" style="height: 20px;" /></a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* {% endblock %}*/
/* <div class="content-container"> {% block body %}{% endblock %} </div>*/
/* {% block footer %}*/
/* <div class="footer container fontface">*/
/*     <h4 style="color: black;">Nasi partnerzy</h4>*/
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/*             <a href="http://www.soul.edu.pl/" target="_blank"><img style="max-height: 50px;" src="{{ asset('img/partners/soul-logo.jpg') }}" /><span style="color: darkblue;">Szkoła językowa SOUL</span></a>*/
/*         </div>*/
/*         <!-- middle partners column -->*/
/*         <div class="col-md-6 text-center">*/
/*             <!-- first row of partners -->*/
/*             <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class="col-md-2 col-xs-6">*/
/*                             <a href="#"><img class="footer-partners" src="{{ asset('img/partners/cinnabon.png') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-2 col-xs-6">*/
/*                             <a href="#"><img class="footer-partners" src="{{ asset('img/partners/atlanticsports.png') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-2 col-xs-6">*/
/*                             <a href="#"><img class="footer-partners" src="{{ asset('img/partners/interbook.jpg') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-2 col-xs-6">*/
/*                             <a href="#"><img class="footer-partners" src="{{ asset('img/partners/cukier.png') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-2 col-xs-6">*/
/*                             <a href="#"><img class="footer-partners" src="{{ asset('img/partners/dagrasso.png') }}" /></a>*/
/*                         </div>*/
/*                         <div class="col-md-2 col-xs-6">*/
/*                             <a href="#"><img class="footer-partners" src="{{ asset('img/partners/b4.jpg') }}" /></a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- second row of partners -->*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class="col-md-2 col-xs-6">*/
/*                                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/cwflogo.jpg') }}" /></a>*/
/*                             </div>*/
/*                             <div class="col-md-2 col-xs-6">*/
/*                                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/diva.png') }}" /></a>*/
/*                             </div>*/
/*                             <div class="col-md-2 col-xs-6">*/
/*                                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/parkwodny.jpg') }}" /></a>*/
/*                             </div>*/
/*                             <div class="col-md-2 col-xs-6">*/
/*                                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/pik.png') }}" /></a>*/
/*                             </div>*/
/*                             <div class="col-md-2 col-xs-6">*/
/*                                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/shakebake.png') }}" /></a>*/
/*                             </div>*/
/*                             <div class="col-md-2 col-xs-6">*/
/*                                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/wedel.jpg') }}" /></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/* */
/*             <a href="http://aiesec.pl/" target="_blank"><img class="footer-logo" src="img/powered-by-aiesec.png" />  </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* {%  endblock %}*/
/*             {% block javascripts %}*/
/*                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>*/
/*                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*             {% endblock %}*/
/* </body>*/
/* </html>*/
