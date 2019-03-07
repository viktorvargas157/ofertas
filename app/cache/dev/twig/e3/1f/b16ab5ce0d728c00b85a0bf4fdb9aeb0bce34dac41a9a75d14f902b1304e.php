<?php

/* ::base.html.twig */
class __TwigTemplate_e31fb16ab5ce0d728c00b85a0bf4fdb9aeb0bce34dac41a9a75d14f902b1304e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'sinMenuLateral' => array($this, 'block_sinMenuLateral'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'contenido' => array($this, 'block_contenido'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Creative - Bootstrap 3 Responsive Admin Template\">
    <meta name=\"author\" content=\"GeeksLabs\">
    <meta name=\"keyword\" content=\"Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/icono.png"), "html", null, true);
        echo "\">

    <title>Ofertas | CCC</title>

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
   ";
        // line 24
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
   ";
        // line 28
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 29
        echo "</head>

<body>

    <section id=\"container\">
       ";
        // line 35
        echo "
        ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 37
            echo "            ";
            $this->displayBlock('sinMenuLateral', $context, $blocks);
            // line 167
            echo "        ";
        }
        // line 168
        echo "
        ";
        // line 169
        $this->displayBlock('contenido', $context, $blocks);
        // line 176
        echo "    </section>

<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/jquery-knob/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.sparkline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/assets/fullcalendar/fullcalendar/fullcalendar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/calendar-custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/xcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/gdp-data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/sparklines.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/charts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<script>

    //knob
    \$(function() {
        \$(\".knob\").knob({
            'draw' : function () {
                \$(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    \$(document).ready(function() {
        \$(\"#owl-slider\").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    \$(function(){
        \$('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    \$(function(){
        \$('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code){
                el.html(el.html()+' (GDP - '+gdpData[code]+')');
            }
        });
    });

</script>
";
        // line 274
        $this->displayBlock('js', $context, $blocks);
        // line 275
        echo "
</body>
</html>
";
    }

    // line 28
    public function block_css($context, array $blocks = array())
    {
    }

    // line 37
    public function block_sinMenuLateral($context, array $blocks = array())
    {
        // line 38
        echo "                <aside style=\"margin-top: -60px;\">
                    <div id=\"sidebar\"  class=\"nav-collapse \" style=\"width: 120px\">
                        <ul class=\"sidebar-menu\">
                            ";
        // line 41
        if ((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_SECRETARIA")) || $this->env->getExtension('security')->isGranted("ROLE_INGENIERO")) || $this->env->getExtension('security')->isGranted("ROLE_PRESUPUESTISTA")) || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
            // line 42
            echo "                                <li>
                                    <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("clientes");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Clientes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("posiblesClientes");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Posib. Cliente</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("solicitudes");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Solicitudes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("ofertas");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Ofertas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("ofertasRechazadas");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Rechazadas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("preContratos");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Aprobadas</span>
                                    </a>
                                </li>
                                ";
            // line 74
            echo "                                    <li>
                                        <a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("contratos");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                            <span>Contratos</span>
                                        </a>
                                    </li>
                                <li>
                                    <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("contratosTerminados");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Terminados</span>
                                    </a>
                                </li>
                                ";
            // line 85
            echo "                                ";
            // line 92
            echo "
                            ";
        }
        // line 94
        echo "
                           ";
        // line 112
        echo "
                            ";
        // line 113
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 114
        echo "
                            ";
        // line 115
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 116
            echo "                               ";
            // line 126
            echo "

                                <li>
                                    <a href=\"";
            // line 129
            echo $this->env->getExtension('routing')->getPath("usuariosR");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Usuarios</span>
                                    </a>
                                </li>
                            ";
        }
        // line 134
        echo "
                            ";
        // line 135
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 136
            echo "                                <li>
                                    <a href=\"";
            // line 137
            echo $this->env->getExtension('routing')->getPath("alertas");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Alertas</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"";
            // line 143
            echo $this->env->getExtension('routing')->getPath("exportarPDF");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>PDF</span>
                                    </a>
                                </li>
                            ";
        }
        // line 148
        echo "
                            ";
        // line 149
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 150
            echo "                                <li>
                                    <a href=\"";
            // line 151
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" style=\"padding: 5px 0 5px 10px;\">
                                        <span>Salir</span>
                                    </a>
                                </li>
                            ";
        } else {
            // line 156
            echo "                                ";
            // line 162
            echo "                            ";
        }
        // line 163
        echo "                        </ul>
                    </div>
                </aside>
            ";
    }

    // line 113
    public function block_menuLateral($context, array $blocks = array())
    {
    }

    // line 169
    public function block_contenido($context, array $blocks = array())
    {
        // line 170
        echo "            <section id=\"main-content\">
                ";
        // line 171
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 174
        echo "            </section>
        ";
    }

    // line 171
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 172
        echo "
                ";
    }

    // line 274
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 274,  465 => 172,  462 => 171,  457 => 174,  455 => 171,  452 => 170,  449 => 169,  444 => 113,  437 => 163,  434 => 162,  432 => 156,  424 => 151,  421 => 150,  419 => 149,  416 => 148,  408 => 143,  399 => 137,  396 => 136,  394 => 135,  391 => 134,  383 => 129,  378 => 126,  376 => 116,  374 => 115,  371 => 114,  369 => 113,  366 => 112,  363 => 94,  359 => 92,  357 => 85,  350 => 80,  342 => 75,  339 => 74,  332 => 69,  324 => 64,  316 => 59,  308 => 54,  299 => 48,  291 => 43,  288 => 42,  286 => 41,  281 => 38,  278 => 37,  273 => 28,  266 => 275,  264 => 274,  213 => 207,  209 => 206,  205 => 205,  201 => 204,  197 => 203,  193 => 202,  189 => 201,  185 => 200,  181 => 199,  177 => 198,  173 => 197,  169 => 196,  165 => 195,  161 => 194,  157 => 193,  153 => 192,  149 => 191,  145 => 190,  141 => 189,  137 => 188,  133 => 187,  129 => 186,  125 => 185,  121 => 184,  117 => 183,  113 => 182,  109 => 181,  105 => 180,  101 => 179,  93 => 176,  91 => 169,  88 => 168,  85 => 167,  82 => 37,  80 => 36,  77 => 35,  70 => 29,  67 => 28,  63 => 25,  58 => 24,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  35 => 9,  25 => 1,  97 => 178,  90 => 43,  71 => 26,  69 => 25,  64 => 23,  55 => 17,  51 => 15,  43 => 11,  39 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
