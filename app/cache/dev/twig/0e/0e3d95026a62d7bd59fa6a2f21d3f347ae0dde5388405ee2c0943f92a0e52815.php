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
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1148088d475e6fc1a1d3dc23102a676980eb969ff9ce552bcd8b091cf5d89548 = $this->env->getExtension("native_profiler");
        $__internal_1148088d475e6fc1a1d3dc23102a676980eb969ff9ce552bcd8b091cf5d89548->enter($__internal_1148088d475e6fc1a1d3dc23102a676980eb969ff9ce552bcd8b091cf5d89548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "</body>
</html>";
        
        $__internal_1148088d475e6fc1a1d3dc23102a676980eb969ff9ce552bcd8b091cf5d89548->leave($__internal_1148088d475e6fc1a1d3dc23102a676980eb969ff9ce552bcd8b091cf5d89548_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75abb8a31889eda61e638ca4ed2b6e9dcff5ac029f716e41613cbb4ca138cb13 = $this->env->getExtension("native_profiler");
        $__internal_75abb8a31889eda61e638ca4ed2b6e9dcff5ac029f716e41613cbb4ca138cb13->enter($__internal_75abb8a31889eda61e638ca4ed2b6e9dcff5ac029f716e41613cbb4ca138cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Warsztaty językowe AIESEC University";
        
        $__internal_75abb8a31889eda61e638ca4ed2b6e9dcff5ac029f716e41613cbb4ca138cb13->leave($__internal_75abb8a31889eda61e638ca4ed2b6e9dcff5ac029f716e41613cbb4ca138cb13_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac8d521d11a5922685aef2c002759f389f46f9e98847e5c367ebed9b67518762 = $this->env->getExtension("native_profiler");
        $__internal_ac8d521d11a5922685aef2c002759f389f46f9e98847e5c367ebed9b67518762->enter($__internal_ac8d521d11a5922685aef2c002759f389f46f9e98847e5c367ebed9b67518762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
    ";
        
        $__internal_ac8d521d11a5922685aef2c002759f389f46f9e98847e5c367ebed9b67518762->leave($__internal_ac8d521d11a5922685aef2c002759f389f46f9e98847e5c367ebed9b67518762_prof);

    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_7c5517560f4e5f1864ab56b4377e323dee058dc3d8ed92ea58a7478a46349153 = $this->env->getExtension("native_profiler");
        $__internal_7c5517560f4e5f1864ab56b4377e323dee058dc3d8ed92ea58a7478a46349153->enter($__internal_7c5517560f4e5f1864ab56b4377e323dee058dc3d8ed92ea58a7478a46349153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 15
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"/about\">
                <img alt=\"Brand\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo-black-small.png"), "html", null, true);
        echo "\" style=\"height:30px\">
            </a>
        </div>
        <div class=\"container\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a class=\"nav-link\" href=\"#\">HARMONOGRAM</a></li>
                <li><a class=\"nav-link\" href=\"#\">AKTUALNOŚCI</a></li>
                <li><a class=\"nav-link\" href=\"#\">CENNIK</a></li>
                <li><a class=\"nav-link\" href=\"#\">O WARSZTATACH</a></li>
                <li><a class=\"nav-link\" href=\"#\">PARTNERZY</a></li>
                <li><a class=\"nav-link\" href=\"#\">KONTAKT</a></li>
                <li><a href=\"https://www.facebook.com/lckrakow\" target=\"_blank\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/FB-f-Logo__blue_100.png"), "html", null, true);
        echo "\" style=\"height: 20px;\" /></a></li>
            </ul>
        </div>
    </nav>
";
        
        $__internal_7c5517560f4e5f1864ab56b4377e323dee058dc3d8ed92ea58a7478a46349153->leave($__internal_7c5517560f4e5f1864ab56b4377e323dee058dc3d8ed92ea58a7478a46349153_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_1463ff2b1572bb4103c3bcb9c1dca39a6aaa00fb128a3983ac06a97c3a7261b1 = $this->env->getExtension("native_profiler");
        $__internal_1463ff2b1572bb4103c3bcb9c1dca39a6aaa00fb128a3983ac06a97c3a7261b1->enter($__internal_1463ff2b1572bb4103c3bcb9c1dca39a6aaa00fb128a3983ac06a97c3a7261b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1463ff2b1572bb4103c3bcb9c1dca39a6aaa00fb128a3983ac06a97c3a7261b1->leave($__internal_1463ff2b1572bb4103c3bcb9c1dca39a6aaa00fb128a3983ac06a97c3a7261b1_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4af8001cdb65516bb83a66bb091b8d3922265275de4ad4c52076739580911d0c = $this->env->getExtension("native_profiler");
        $__internal_4af8001cdb65516bb83a66bb091b8d3922265275de4ad4c52076739580911d0c->enter($__internal_4af8001cdb65516bb83a66bb091b8d3922265275de4ad4c52076739580911d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
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
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cinnabon.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/atlanticsports.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/interbook.jpg"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cukier.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/dagrasso.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <div class=\"col-md-2 col-xs-6\">
                <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/b4.jpg"), "html", null, true);
        echo "\" /></a>
            </div>
        </div>
        <!-- second row of partners -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/cwflogo.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/diva.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/parkwodny.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/pik.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/shakebake.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"col-md-2 col-xs-6\">
                    <a href=\"#\"><img class=\"footer-partners\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partners/wedel.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
            </div>
            ";
        
        $__internal_4af8001cdb65516bb83a66bb091b8d3922265275de4ad4c52076739580911d0c->leave($__internal_4af8001cdb65516bb83a66bb091b8d3922265275de4ad4c52076739580911d0c_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_475716761071f1aef9320bf652a9921de3a84ca2116fc6827fb487100d101250 = $this->env->getExtension("native_profiler");
        $__internal_475716761071f1aef9320bf652a9921de3a84ca2116fc6827fb487100d101250->enter($__internal_475716761071f1aef9320bf652a9921de3a84ca2116fc6827fb487100d101250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
            ";
        
        $__internal_475716761071f1aef9320bf652a9921de3a84ca2116fc6827fb487100d101250->leave($__internal_475716761071f1aef9320bf652a9921de3a84ca2116fc6827fb487100d101250_prof);

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
        return array (  246 => 87,  240 => 86,  229 => 82,  223 => 79,  217 => 76,  211 => 73,  205 => 70,  199 => 67,  189 => 60,  183 => 57,  177 => 54,  171 => 51,  165 => 48,  159 => 45,  148 => 36,  142 => 35,  131 => 34,  119 => 29,  105 => 18,  100 => 15,  94 => 14,  82 => 7,  76 => 6,  64 => 5,  56 => 89,  53 => 86,  51 => 35,  49 => 34,  47 => 14,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
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
/*             <a class="navbar-brand" href="/about">*/
/*                 <img alt="Brand" src="{{ asset('img/logo-black-small.png') }}" style="height:30px">*/
/*             </a>*/
/*         </div>*/
/*         <div class="container">*/
/*             <ul class="nav navbar-nav navbar-right">*/
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
