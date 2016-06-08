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
        $__internal_ffc12aabada699f781c23f9891745bac6cc0b43f1a47bf9b3a5431ecb343acb8 = $this->env->getExtension("native_profiler");
        $__internal_ffc12aabada699f781c23f9891745bac6cc0b43f1a47bf9b3a5431ecb343acb8->enter($__internal_ffc12aabada699f781c23f9891745bac6cc0b43f1a47bf9b3a5431ecb343acb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "</body>
</html>";
        
        $__internal_ffc12aabada699f781c23f9891745bac6cc0b43f1a47bf9b3a5431ecb343acb8->leave($__internal_ffc12aabada699f781c23f9891745bac6cc0b43f1a47bf9b3a5431ecb343acb8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41b506210e43c229e0a3286222e82fe976f5f74e3cb56791ee297bbea140707b = $this->env->getExtension("native_profiler");
        $__internal_41b506210e43c229e0a3286222e82fe976f5f74e3cb56791ee297bbea140707b->enter($__internal_41b506210e43c229e0a3286222e82fe976f5f74e3cb56791ee297bbea140707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Warsztaty językowe AIESEC University";
        
        $__internal_41b506210e43c229e0a3286222e82fe976f5f74e3cb56791ee297bbea140707b->leave($__internal_41b506210e43c229e0a3286222e82fe976f5f74e3cb56791ee297bbea140707b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02136023319f5924a519df2b72f2b9e971ec796fbb853fa7f69542fda7751817 = $this->env->getExtension("native_profiler");
        $__internal_02136023319f5924a519df2b72f2b9e971ec796fbb853fa7f69542fda7751817->enter($__internal_02136023319f5924a519df2b72f2b9e971ec796fbb853fa7f69542fda7751817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
    ";
        
        $__internal_02136023319f5924a519df2b72f2b9e971ec796fbb853fa7f69542fda7751817->leave($__internal_02136023319f5924a519df2b72f2b9e971ec796fbb853fa7f69542fda7751817_prof);

    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_6e3b8a146437f66775a30282e88e10d9f23db91cce19d7c6c2db367d7574c525 = $this->env->getExtension("native_profiler");
        $__internal_6e3b8a146437f66775a30282e88e10d9f23db91cce19d7c6c2db367d7574c525->enter($__internal_6e3b8a146437f66775a30282e88e10d9f23db91cce19d7c6c2db367d7574c525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
                <li><a class=\"nav-link\" href=\"#\">HARMONOGRAM</a></li>
                <li><a class=\"nav-link\" href=\"#\">AKTUALNOŚCI</a></li>
                <li><a class=\"nav-link\" href=\"#\">CENNIK</a></li>
                <li><a class=\"nav-link\" href=\"/about\">O WARSZTATACH</a></li>
                <li><a class=\"nav-link\" href=\"/partners\">PARTNERZY</a></li>
                <li><a class=\"nav-link\" href=\"#\">KONTAKT</a></li>
                <li><a href=\"https://www.facebook.com/lckrakow\" target=\"_blank\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/FB-f-Logo__blue_100.png"), "html", null, true);
        echo "\" style=\"height: 20px;\" /></a></li>
            </ul>
        </div>
    </nav>
";
        
        $__internal_6e3b8a146437f66775a30282e88e10d9f23db91cce19d7c6c2db367d7574c525->leave($__internal_6e3b8a146437f66775a30282e88e10d9f23db91cce19d7c6c2db367d7574c525_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd206dc982443d2c454a460212a52e7d1107df7fb4261512f936d4756df9c267 = $this->env->getExtension("native_profiler");
        $__internal_cd206dc982443d2c454a460212a52e7d1107df7fb4261512f936d4756df9c267->enter($__internal_cd206dc982443d2c454a460212a52e7d1107df7fb4261512f936d4756df9c267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd206dc982443d2c454a460212a52e7d1107df7fb4261512f936d4756df9c267->leave($__internal_cd206dc982443d2c454a460212a52e7d1107df7fb4261512f936d4756df9c267_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0f267c953f2a51415bfd31a0103487ff4c9e373cd52b36ba057fb53745e2b60d = $this->env->getExtension("native_profiler");
        $__internal_0f267c953f2a51415bfd31a0103487ff4c9e373cd52b36ba057fb53745e2b60d->enter($__internal_0f267c953f2a51415bfd31a0103487ff4c9e373cd52b36ba057fb53745e2b60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "<div class=\"wrapper\">
    <div class=\"push\"></div>
</div>
<div class=\"footer\">
    <h4>Nasi partnerzy</h4>
    <div class=\"row\">
        <div class=\"col-md-3\">
            <a href=\"http://www.soul.edu.pl/\" target=\"_blank\"><img style=\"max-height: 50px;\" src=\"";
        // line 51
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cinnabon.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/atlanticsports.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/interbook.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cukier.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/dagrasso.png"), "html", null, true);
        echo "\" /></a>
                        </div>
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/b4.jpg"), "html", null, true);
        echo "\" /></a>
                        </div>
                    </div>
                    <!-- second row of partners -->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cwflogo.jpg"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/diva.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/parkwodny.jpg"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/pik.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/shakebake.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/wedel.jpg"), "html", null, true);
        echo "\" /></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            ";
        
        $__internal_0f267c953f2a51415bfd31a0103487ff4c9e373cd52b36ba057fb53745e2b60d->leave($__internal_0f267c953f2a51415bfd31a0103487ff4c9e373cd52b36ba057fb53745e2b60d_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_889990e60dd085533168de6d1bb80f4b9e60211a8d2c7845fbbd34d1a4d79644 = $this->env->getExtension("native_profiler");
        $__internal_889990e60dd085533168de6d1bb80f4b9e60211a8d2c7845fbbd34d1a4d79644->enter($__internal_889990e60dd085533168de6d1bb80f4b9e60211a8d2c7845fbbd34d1a4d79644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
            ";
        
        $__internal_889990e60dd085533168de6d1bb80f4b9e60211a8d2c7845fbbd34d1a4d79644->leave($__internal_889990e60dd085533168de6d1bb80f4b9e60211a8d2c7845fbbd34d1a4d79644_prof);

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
        return array (  266 => 104,  260 => 103,  246 => 96,  240 => 93,  234 => 90,  228 => 87,  222 => 84,  216 => 81,  206 => 74,  200 => 71,  194 => 68,  188 => 65,  182 => 62,  176 => 59,  165 => 51,  156 => 44,  150 => 43,  139 => 42,  127 => 37,  105 => 18,  100 => 15,  94 => 14,  82 => 7,  76 => 6,  64 => 5,  56 => 106,  53 => 103,  51 => 43,  49 => 42,  47 => 14,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Warsztaty językowe AIESEC University{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
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
/*                 <li><a class="nav-link" href="#">HARMONOGRAM</a></li>*/
/*                 <li><a class="nav-link" href="#">AKTUALNOŚCI</a></li>*/
/*                 <li><a class="nav-link" href="#">CENNIK</a></li>*/
/*                 <li><a class="nav-link" href="/about">O WARSZTATACH</a></li>*/
/*                 <li><a class="nav-link" href="/partners">PARTNERZY</a></li>*/
/*                 <li><a class="nav-link" href="#">KONTAKT</a></li>*/
/*                 <li><a href="https://www.facebook.com/lckrakow" target="_blank"><img src="{{ asset('img/FB-f-Logo__blue_100.png') }}" style="height: 20px;" /></a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* {% endblock %}*/
/* {% block body %}{% endblock %}*/
/* {% block footer %}*/
/* <div class="wrapper">*/
/*     <div class="push"></div>*/
/* </div>*/
/* <div class="footer">*/
/*     <h4>Nasi partnerzy</h4>*/
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
/*             {%  endblock %}*/
/*             {% block javascripts %}*/
/*                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*             {% endblock %}*/
/* </body>*/
/* </html>*/
