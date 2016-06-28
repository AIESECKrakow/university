<?php

/* default/index.html.twig */
class __TwigTemplate_817c81e3b4bc001655ba600f055a0f7b0f27f143ba6817dd6b948002f8935e70 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-md-12\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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

    <div class=\"header\">
        <div class=\"col-md-12\">
            <div class=\"col-md-10 centered\">
                <div class=\"logo-header text-center\"></div>

                <h1 class=\"text-center\">Warsztaty językowe z native speakerami</h1>
                <h3 class=\"text-center\">8 zł za godzinę, w centrum Krakowa</h3>

            </div>
        </div>

    </div>

    <!-- FLAGS -->

    <div class=\"row\">
        <div class=\"col-md-10 centered fontface fontcolor\" style=\"margin-top: 40px;\">
            <div class=\"col-md-2 text-center\">
                <!--po prostu do skasowania-->
            </div>
            <div class=\"col-md-2 text-center\">
                <div class=\"col-md-12\">
                    <h4>ANGIELSKI</h4><h4> </h4>
                </div>
                <div class=\"col-md-12\">
                    <img class=\"flag\" src=\"img/flaga-en.png\" />
                </div>
            </div>

            <div class=\"col-md-2 text-center\">
                <div class=\"col-md-12\">
                    <h4>FRANCUSKI</h4><h4> </h4>
                </div>
                <div class=\"col-md-12\">
                    <img class=\"flag\" src=\"img/flaga-fr.png\" />
                </div>
            </div>

            <div class=\"col-md-2 text-center\">
                <div class=\"col-md-12\">
                    <h4>WŁOSKI</h4>
                </div>
                <div class=\"col-md-12\">
                    <img class=\"flag\" src=\"img/flaga-it.png\" />
                </div>
            </div>

            <div class=\"col-md-2 text-center\">
                <div class=\"col-md-12\">
                    <h4>HISZPAŃSKI</h4>
                    <h4> </h4>
                </div>
                <div class=\"col-md-12\">
                    <img class=\"flag\" src=\"img/flaga-es.png\" />
                </div>

            </div>
            <!--
                <div class=\"col-md-2 text-center\">
                   <div class=\"col-md-12\">
                    <h4>ROSYJSKI</h4>
                  </div>
                 <div class=\"col-md-12\">
                   <img class=\"flag\" src=\"img/flaga-ru.png\" />
                  </div>
                </div>

                <div class=\"col-md-2 text-center\">
                <div class=\"col-md-12\">
                  <h4>ARABSKI</h4>
                </div>
                <div class=\"col-md-12\">
                  <img class=\"flag\" src=\"img/flaga-ar.png\" />
                </div>
                </div>

                <div class=\"col-md-2 text-center\">
                  <div class=\"col-md-12\">
                    <h4>ANGIELSKI</h4> <h4>BIZNESOWY</h4>
                  </div>
                  <div class=\"col-md-12\">
                    <img class=\"flag\" src=\"img/flaga-en.png\" />
                  </div>
                </div>
            -->
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1 fontface fontcolor\" style=\"padding-top: 40px;\">
            <h2 class=\"text-center\" style=\"padding-bottom: 40px;\">Tylko 199 zł za 8 tygodni warsztatów</h2>

            <div class=\"col-md-12\">
                <!-- left column -->
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-3 text-center h4\">
                            <img class=\"icon\" src=\"img/icon1.png\" />
                        </div>
                        <div class=\"col-md-9 point\">
                            zajęcia w formie konwersatoriów z native speakerami o międzynarodowym doświadczeniu
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-3 text-center h4\">
                            <img class=\"icon\" src=\"img/icon2.png\" />
                        </div>
                        <div class=\"col-md-9 point\">
                            warsztaty odbywają się na ul. Szewskiej 14 w NOVA Centrum Edukacyjne
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-3 text-center h4\">
                            <img class=\"icon\" src=\"img/icon3.png\" />
                        </div>
                        <div class=\"col-md-9 point\">
                            grupy składają się z maksymalnie 12 osób
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-3 text-center h4\">
                            <img class=\"icon\" src=\"img/icon4.png\" />
                        </div>
                        <div class=\"col-md-9 point\">
                            kursy regularne<br/>
                            8 tygodni, indywidualne i grupowe 2 x 90min / tydzień<br/>
                        </div>
                    </div>
                </div>
                <!-- right column -->
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-3 text-center h4\">
                            <img class=\"icon\" src=\"img/icon5.png\" />
                        </div>
                        <div class=\"col-md-9 point\">
                            możliwość wyboru indywidualnego toku nauczania
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 text-center h4\">
                            <img class=\"icon\" src=\"img/icon6.png\" />
                        </div>
                        <div class=\"col-md-9 point\">
                            w zależności od języka oferujemy zajęcia na poziomach: A1 - C1
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 text-center h4\">
                            <img class=\"icon\" src=\"img/icon7.png\" />
                        </div>
                        <div class=\"col-md-9 point\">
                            Language Tours - poznaj swojego lektora poza terenem uczelni
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 text-center h4\">
                            <img class=\"icon\" src=\"img/icon8.png\" />
                        </div>
                        <div class=\"col-md-9 point\">
                            po ukończeniu kursu uczestnik otrzymuje certyfikat językowy
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3 centered text-centered bottom-buttons\">
            <a href=\"/sign-up\"><div class=\"col-md-5 btn btn-danger\">ZAPISZ SIĘ</div></a>
            <a href=\"/about\"><div class=\"col-md-5 col-md-offset-1 btn btn-info\">DOWIEDZ SIĘ WIĘCEJ</div></a>
        </div>
    </div>
";
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
        return array (  47 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/*     <div class="header">*/
/*         <div class="col-md-12">*/
/*             <div class="col-md-10 centered">*/
/*                 <div class="logo-header text-center"></div>*/
/* */
/*                 <h1 class="text-center">Warsztaty językowe z native speakerami</h1>*/
/*                 <h3 class="text-center">8 zł za godzinę, w centrum Krakowa</h3>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <!-- FLAGS -->*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-10 centered fontface fontcolor" style="margin-top: 40px;">*/
/*             <div class="col-md-2 text-center">*/
/*                 <!--po prostu do skasowania-->*/
/*             </div>*/
/*             <div class="col-md-2 text-center">*/
/*                 <div class="col-md-12">*/
/*                     <h4>ANGIELSKI</h4><h4> </h4>*/
/*                 </div>*/
/*                 <div class="col-md-12">*/
/*                     <img class="flag" src="img/flaga-en.png" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-2 text-center">*/
/*                 <div class="col-md-12">*/
/*                     <h4>FRANCUSKI</h4><h4> </h4>*/
/*                 </div>*/
/*                 <div class="col-md-12">*/
/*                     <img class="flag" src="img/flaga-fr.png" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-2 text-center">*/
/*                 <div class="col-md-12">*/
/*                     <h4>WŁOSKI</h4>*/
/*                 </div>*/
/*                 <div class="col-md-12">*/
/*                     <img class="flag" src="img/flaga-it.png" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-2 text-center">*/
/*                 <div class="col-md-12">*/
/*                     <h4>HISZPAŃSKI</h4>*/
/*                     <h4> </h4>*/
/*                 </div>*/
/*                 <div class="col-md-12">*/
/*                     <img class="flag" src="img/flaga-es.png" />*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <!--*/
/*                 <div class="col-md-2 text-center">*/
/*                    <div class="col-md-12">*/
/*                     <h4>ROSYJSKI</h4>*/
/*                   </div>*/
/*                  <div class="col-md-12">*/
/*                    <img class="flag" src="img/flaga-ru.png" />*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-2 text-center">*/
/*                 <div class="col-md-12">*/
/*                   <h4>ARABSKI</h4>*/
/*                 </div>*/
/*                 <div class="col-md-12">*/
/*                   <img class="flag" src="img/flaga-ar.png" />*/
/*                 </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-2 text-center">*/
/*                   <div class="col-md-12">*/
/*                     <h4>ANGIELSKI</h4> <h4>BIZNESOWY</h4>*/
/*                   </div>*/
/*                   <div class="col-md-12">*/
/*                     <img class="flag" src="img/flaga-en.png" />*/
/*                   </div>*/
/*                 </div>*/
/*             -->*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-10 col-md-offset-1 fontface fontcolor" style="padding-top: 40px;">*/
/*             <h2 class="text-center" style="padding-bottom: 40px;">Tylko 199 zł za 8 tygodni warsztatów</h2>*/
/* */
/*             <div class="col-md-12">*/
/*                 <!-- left column -->*/
/*                 <div class="col-md-6">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 text-center h4">*/
/*                             <img class="icon" src="img/icon1.png" />*/
/*                         </div>*/
/*                         <div class="col-md-9 point">*/
/*                             zajęcia w formie konwersatoriów z native speakerami o międzynarodowym doświadczeniu*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-3 text-center h4">*/
/*                             <img class="icon" src="img/icon2.png" />*/
/*                         </div>*/
/*                         <div class="col-md-9 point">*/
/*                             warsztaty odbywają się na ul. Szewskiej 14 w NOVA Centrum Edukacyjne*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-3 text-center h4">*/
/*                             <img class="icon" src="img/icon3.png" />*/
/*                         </div>*/
/*                         <div class="col-md-9 point">*/
/*                             grupy składają się z maksymalnie 12 osób*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-3 text-center h4">*/
/*                             <img class="icon" src="img/icon4.png" />*/
/*                         </div>*/
/*                         <div class="col-md-9 point">*/
/*                             kursy regularne<br/>*/
/*                             8 tygodni, indywidualne i grupowe 2 x 90min / tydzień<br/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- right column -->*/
/*                 <div class="col-md-6">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 text-center h4">*/
/*                             <img class="icon" src="img/icon5.png" />*/
/*                         </div>*/
/*                         <div class="col-md-9 point">*/
/*                             możliwość wyboru indywidualnego toku nauczania*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 text-center h4">*/
/*                             <img class="icon" src="img/icon6.png" />*/
/*                         </div>*/
/*                         <div class="col-md-9 point">*/
/*                             w zależności od języka oferujemy zajęcia na poziomach: A1 - C1*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 text-center h4">*/
/*                             <img class="icon" src="img/icon7.png" />*/
/*                         </div>*/
/*                         <div class="col-md-9 point">*/
/*                             Language Tours - poznaj swojego lektora poza terenem uczelni*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 text-center h4">*/
/*                             <img class="icon" src="img/icon8.png" />*/
/*                         </div>*/
/*                         <div class="col-md-9 point">*/
/*                             po ukończeniu kursu uczestnik otrzymuje certyfikat językowy*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-6 col-md-offset-3 centered text-centered bottom-buttons">*/
/*             <a href="/sign-up"><div class="col-md-5 btn btn-danger">ZAPISZ SIĘ</div></a>*/
/*             <a href="/about"><div class="col-md-5 col-md-offset-1 btn btn-info">DOWIEDZ SIĘ WIĘCEJ</div></a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
