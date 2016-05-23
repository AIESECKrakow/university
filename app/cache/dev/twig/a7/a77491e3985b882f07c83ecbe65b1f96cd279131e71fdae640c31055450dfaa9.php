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
        $__internal_12da3ce12ab72997b2dac1794f1bea5a0626922e42b62acf74ecd17004da29d9 = $this->env->getExtension("native_profiler");
        $__internal_12da3ce12ab72997b2dac1794f1bea5a0626922e42b62acf74ecd17004da29d9->enter($__internal_12da3ce12ab72997b2dac1794f1bea5a0626922e42b62acf74ecd17004da29d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "</body>
</html>";
        
        $__internal_12da3ce12ab72997b2dac1794f1bea5a0626922e42b62acf74ecd17004da29d9->leave($__internal_12da3ce12ab72997b2dac1794f1bea5a0626922e42b62acf74ecd17004da29d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_764c083b7f8c70eeb42e80a0704111fe445eba183b683ef70fc63fbfa2d0e964 = $this->env->getExtension("native_profiler");
        $__internal_764c083b7f8c70eeb42e80a0704111fe445eba183b683ef70fc63fbfa2d0e964->enter($__internal_764c083b7f8c70eeb42e80a0704111fe445eba183b683ef70fc63fbfa2d0e964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Warsztaty językowe AIESEC University";
        
        $__internal_764c083b7f8c70eeb42e80a0704111fe445eba183b683ef70fc63fbfa2d0e964->leave($__internal_764c083b7f8c70eeb42e80a0704111fe445eba183b683ef70fc63fbfa2d0e964_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48b4a916ad73029f660efb44fd4f6e4aca9ad56beb5f309b8284ba5fb79dfc32 = $this->env->getExtension("native_profiler");
        $__internal_48b4a916ad73029f660efb44fd4f6e4aca9ad56beb5f309b8284ba5fb79dfc32->enter($__internal_48b4a916ad73029f660efb44fd4f6e4aca9ad56beb5f309b8284ba5fb79dfc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
    ";
        
        $__internal_48b4a916ad73029f660efb44fd4f6e4aca9ad56beb5f309b8284ba5fb79dfc32->leave($__internal_48b4a916ad73029f660efb44fd4f6e4aca9ad56beb5f309b8284ba5fb79dfc32_prof);

    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_e37e4c80822ce19d17be7e85c85dd4fd442058769398ab47ebb94eeccb44c208 = $this->env->getExtension("native_profiler");
        $__internal_e37e4c80822ce19d17be7e85c85dd4fd442058769398ab47ebb94eeccb44c208->enter($__internal_e37e4c80822ce19d17be7e85c85dd4fd442058769398ab47ebb94eeccb44c208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 15
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">
                <img alt=\"Brand\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo-black-small.png"), "html", null, true);
        echo "\" style=\"height:30px\">
            </a>
        </div>
        <div class=\"container\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a class=\"nav-link\" href=\"/sign-up\">ZAPISZ SIĘ</a></li>
                <li><a class=\"nav-link\" href=\"#\">HARMONOGRAM</a></li>
                <li><a class=\"nav-link\" href=\"#\">AKTUALNOŚCI</a></li>
                <li><a class=\"nav-link\" href=\"#\">CENNIK</a></li>
                <li><a class=\"nav-link\" href=\"#\">O WARSZTATACH</a></li>
                <li><a class=\"nav-link\" href=\"#\">PARTNERZY</a></li>
                <li><a class=\"nav-link\" href=\"#\">KONTAKT</a></li>
                <li><a href=\"https://www.facebook.com/lckrakow\" target=\"_blank\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/FB-f-Logo__blue_100.png"), "html", null, true);
        echo "\" style=\"height: 20px;\" /></a></li>
            </ul>
        </div>
    </nav>
";
        
        $__internal_e37e4c80822ce19d17be7e85c85dd4fd442058769398ab47ebb94eeccb44c208->leave($__internal_e37e4c80822ce19d17be7e85c85dd4fd442058769398ab47ebb94eeccb44c208_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb404b5da3c1aaeef6a0d236509c5e073bb29fb556bda2a7c50447bafa0b843c = $this->env->getExtension("native_profiler");
        $__internal_fb404b5da3c1aaeef6a0d236509c5e073bb29fb556bda2a7c50447bafa0b843c->enter($__internal_fb404b5da3c1aaeef6a0d236509c5e073bb29fb556bda2a7c50447bafa0b843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb404b5da3c1aaeef6a0d236509c5e073bb29fb556bda2a7c50447bafa0b843c->leave($__internal_fb404b5da3c1aaeef6a0d236509c5e073bb29fb556bda2a7c50447bafa0b843c_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fd1131a7db6b8c62a1422bc518ae56b0e20fa3174b56596ba895fb0587852cf7 = $this->env->getExtension("native_profiler");
        $__internal_fd1131a7db6b8c62a1422bc518ae56b0e20fa3174b56596ba895fb0587852cf7->enter($__internal_fd1131a7db6b8c62a1422bc518ae56b0e20fa3174b56596ba895fb0587852cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 37
        echo "<div class=\"wrapper\">
    <div class=\"push\"></div>
</div>
<div class=\"footer\">
    <h4>Nasi partnerzy</h4>
    <!-- first row of partners -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cinnabon.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/atlanticsports.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/interbook.jpg"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cukier.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/dagrasso.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/b4.jpg"), "html", null, true);
        echo "\" /></a>
            </div>
        </div>
        <!-- second row of partners -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cwflogo.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/diva.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/parkwodny.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/pik.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/shakebake.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/wedel.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
            </div>
            ";
        
        $__internal_fd1131a7db6b8c62a1422bc518ae56b0e20fa3174b56596ba895fb0587852cf7->leave($__internal_fd1131a7db6b8c62a1422bc518ae56b0e20fa3174b56596ba895fb0587852cf7_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7765d918c113c2e47a504c832cfb778531bce44d5fea2592381342258aaf695e = $this->env->getExtension("native_profiler");
        $__internal_7765d918c113c2e47a504c832cfb778531bce44d5fea2592381342258aaf695e->enter($__internal_7765d918c113c2e47a504c832cfb778531bce44d5fea2592381342258aaf695e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
            ";
        
        $__internal_7765d918c113c2e47a504c832cfb778531bce44d5fea2592381342258aaf695e->leave($__internal_7765d918c113c2e47a504c832cfb778531bce44d5fea2592381342258aaf695e_prof);

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
        return array (  247 => 88,  241 => 87,  230 => 83,  224 => 80,  218 => 77,  212 => 74,  206 => 71,  200 => 68,  190 => 61,  184 => 58,  178 => 55,  172 => 52,  166 => 49,  160 => 46,  149 => 37,  143 => 36,  132 => 35,  120 => 30,  105 => 18,  100 => 15,  94 => 14,  82 => 7,  76 => 6,  64 => 5,  56 => 90,  53 => 87,  51 => 36,  49 => 35,  47 => 14,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
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
/*             <a class="navbar-brand" href="#">*/
/*                 <img alt="Brand" src="{{ asset('img/logo-black-small.png') }}" style="height:30px">*/
/*             </a>*/
/*         </div>*/
/*         <div class="container">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a class="nav-link" href="/sign-up">ZAPISZ SIĘ</a></li>*/
/*                 <li><a class="nav-link" href="#">HARMONOGRAM</a></li>*/
/*                 <li><a class="nav-link" href="#">AKTUALNOŚCI</a></li>*/
/*                 <li><a class="nav-link" href="#">CENNIK</a></li>*/
/*                 <li><a class="nav-link" href="#">O WARSZTATACH</a></li>*/
/*                 <li><a class="nav-link" href="#">PARTNERZY</a></li>*/
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
/*     <!-- first row of partners -->*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="col-md-2 col-xs-6">*/
/*                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/cinnabon.png') }}" /></a>*/
/*             </div>*/
/*             <div class="col-md-2 col-xs-6">*/
/*                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/atlanticsports.png') }}" /></a>*/
/*             </div>*/
/*             <div class="col-md-2 col-xs-6">*/
/*                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/interbook.jpg') }}" /></a>*/
/*             </div>*/
/*             <div class="col-md-2 col-xs-6">*/
/*                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/cukier.png') }}" /></a>*/
/*             </div>*/
/*             <div class="col-md-2 col-xs-6">*/
/*                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/dagrasso.png') }}" /></a>*/
/*             </div>*/
/*             <div class="col-md-2 col-xs-6">*/
/*                 <a href="#"><img class="footer-partners" src="{{ asset('img/partners/b4.jpg') }}" /></a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- second row of partners -->*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-2 col-xs-6">*/
/*                     <a href="#"><img class="footer-partners" src="{{ asset('img/partners/cwflogo.jpg') }}" /></a>*/
/*                 </div>*/
/*                 <div class="col-md-2 col-xs-6">*/
/*                     <a href="#"><img class="footer-partners" src="{{ asset('img/partners/diva.png') }}" /></a>*/
/*                 </div>*/
/*                 <div class="col-md-2 col-xs-6">*/
/*                     <a href="#"><img class="footer-partners" src="{{ asset('img/partners/parkwodny.jpg') }}" /></a>*/
/*                 </div>*/
/*                 <div class="col-md-2 col-xs-6">*/
/*                     <a href="#"><img class="footer-partners" src="{{ asset('img/partners/pik.png') }}" /></a>*/
/*                 </div>*/
/*                 <div class="col-md-2 col-xs-6">*/
/*                     <a href="#"><img class="footer-partners" src="{{ asset('img/partners/shakebake.png') }}" /></a>*/
/*                 </div>*/
/*                 <div class="col-md-2 col-xs-6">*/
/*                     <a href="#"><img class="footer-partners" src="{{ asset('img/partners/wedel.jpg') }}" /></a>*/
/*                 </div>*/
/*             </div>*/
/*             {%  endblock %}*/
/*             {% block javascripts %}*/
/*                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*             {% endblock %}*/
/* </body>*/
/* </html>*/
