<?php

/* ::login.html.twig */
class __TwigTemplate_ea91a15af364c69a82b15757dc12925a54093515dfe73b035ee40dfa7151cdd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'error' => array($this, 'block_error'),
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
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/fullcalendar/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/fullcalendar.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/widgets.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/xcharts.min.css"), "html", null, true);
        echo "\" rel=\" stylesheet\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/jquery-ui-1.10.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        // line 28
        $this->displayBlock('css', $context, $blocks);
        // line 29
        echo "
</head>

<body ";
        // line 32
        echo ">

<section class=\"\">
    <section>
        <section class=\"wrapper\">
            <div class=\"row\" style=\"margin-top: -30px\">
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/login2.jpg"), "html", null, true);
        echo "\" style=\"text-align: center;width: 340px; height: 340px;\">
                        </div>
                        <div class=\"col-lg-12\">
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/login1.jpg"), "html", null, true);
        echo "\" style=\"text-align: center;width: 340px; height: 340px;\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\" style=\"text-align: center\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\" style=\"margin-top: 80px\">
                            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/logo.png"), "html", null, true);
        echo "\" style=\"text-align: center;width: 360px\">
                        </div>
                        <div class=\"col-lg-12\" style=\"margin-top: -150px\">
                            <form class=\"login-form\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                                <div class=\"login-wrap\">
                                    ";
        // line 56
        $this->displayBlock('error', $context, $blocks);
        // line 57
        echo "                                    <p class=\"login-img\" STYLE=\"font-size: 40px\">SISTEMA</p>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
                                        <input style=\"color: #0f222b;\" id=\"usuario\" name=\"_username\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\">
                                        <input type=\"hidden\" name=\"_target_path\" value=\"/ofertas/inicio\" />
                                    </div>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                                        <input id=\"contrasenna\" name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\">
                                    </div>
                                    <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/Sinco.png"), "html", null, true);
        echo "\" style=\"text-align: center;width: 100%; height: auto;\">
                        </div>
                        <br>
                        <div class=\"col-lg-12\">
                            <div class=\"row\">
                                <div class=\"col-lg-2\">
                                    <p class=\"m-bot-none text-center\" style=\"margin-top: 10px\">
                                        <span class=\"badge bg-warning\">1</span>
                                    </p>
                                </div>
                                <div class=\"col-lg-8\">
                                    <section class=\"panel\">
                                        <div class=\"";
        // line 89
        echo "\" style=\"text-align: center\">
                                            ";
        // line 93
        echo "                                            <button style=\"color: #797979\" class=\"btn btn-success btn-lg btn-block tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#clientes\">
                                                Clientes * Gestión Comercial
                                            </button>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"clientes\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 550px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Clientes * Gestión Comercial </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Planificación Estratégica (qué hacemos y hacia donde vamos)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Clientes CCC
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Solicitud de servicios de construcción
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-2\"></div>
                                <div class=\"col-lg-8\" style=\"text-align: center; margin-top: -23px\">
                                    <i class=\"arrow_down_alt\"></i>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-2\">
                                    <p class=\"m-bot-none text-center\" style=\"margin-top: 10px\">
                                        <span class=\"badge bg-warning\">2</span>
                                    </p>
                                </div>
                                <div class=\"col-lg-8\">
                                    <section class=\"panel\">
                                        <div class=\"";
        // line 151
        echo "\" style=\"text-align: center\">
                                            <button style=\"color: #797979\" class=\"btn btn-success btn-lg btn-block tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#ingenieria\">
                                                Ingeniería * Cuantificación
                                            </button>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"ingenieria\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 550px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Ingeniería * Cuantificación </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Trabajo de campo (mediciones directos en obra, levantamientos, o trabajo de mesa sobre Proyectos Ejec.)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Actividades y volúmenes a ejecutar
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Volúmenes de materiales
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Memoria descriptiva de los trabajos a ejecutar
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-2\"></div>
                                <div class=\"col-lg-8\" style=\"text-align: center; margin-top: -23px\">
                                    <i class=\"arrow_down_alt\"></i>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-2\">
                                    <p class=\"m-bot-none text-center\" style=\"margin-top: 10px\">
                                        <span class=\"badge bg-warning\">3</span>
                                    </p>
                                </div>
                                <div class=\"col-lg-8\">
                                    <section class=\"panel\">
                                        <div class=\"";
        // line 218
        echo "\" style=\"text-align: center\">
                                            <button style=\"color: #797979\" class=\"btn btn-success btn-lg btn-block tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#ofertas\">
                                                Ofertas
                                            </button>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"ofertas\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 550px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Ofertas </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Presupuesto (\$) [formato Excel / PRESWIN]
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Cronograma de ejecución (según la secuencia)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Costos (Análisis de factibilidad)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-2\"></div>
                                <div class=\"col-lg-8\" style=\"text-align: center; margin-top: -23px\">
                                    <i class=\"arrow_down_alt\"></i>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-2\">
                                    <p class=\"m-bot-none text-center\" style=\"margin-top: 10px\">
                                        <span class=\"badge bg-warning\">4</span>
                                    </p>
                                </div>
                                <div class=\"col-lg-8\">
                                    <section class=\"panel\">
                                        <div class=\"";
        // line 277
        echo "\" style=\"text-align: center\">
                                            <button style=\"color: #797979\" class=\"btn btn-success btn-lg btn-block tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#control\">
                                                Control * Seguimiento
                                            </button>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"control\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 550px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Control * Seguimiento </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Control del presupuesto en el Sistema
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Mantener un seguimiento y retroalimentación
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Aprobación de la oferta (Negociación)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-2\"></div>
                                <div class=\"col-lg-8\" style=\"text-align: center; margin-top: -23px\">
                                    <i class=\"arrow_down_alt\"></i>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-2\">
                                    <p class=\"m-bot-none text-center\" style=\"margin-top: 10px;\">
                                        <span class=\"badge bg-warning\" style=\"\">5</span>
                                    </p>
                                </div>
                                <div class=\"col-lg-8\">
                                    <section class=\"panel\">
                                        <div class=\"";
        // line 336
        echo "\" style=\"text-align: center\">
                                            <button style=\"color: #797979\" class=\"btn btn-success btn-lg btn-block tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#contratacion\">
                                                Contratación
                                            </button>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"contratacion\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 550px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Contratación </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Contrato Ejec. Obra y/o suplemento
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Plan calidad / Proyecto SST
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label class=\"control-label\">
                                                                        - Documentación (CCC)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>

<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/jquery-knob/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.sparkline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script> <!-- Full Google Calendar - Calendar -->
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/assets/fullcalendar/fullcalendar/fullcalendar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/calendar-custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/xcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/gdp-data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/sparklines.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/charts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
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

</script>
<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/login/superplaceholder.js"), "html", null, true);
        echo "\"></script>
<script>
    superplaceholder({
        el: usuario,
        sentences: [ 'usuario', 'usuario', 'usuario' ],
        options: {
            loop: true,
            startOnFocus: false
        }
    })
    superplaceholder({
        el: contrasenna,
        sentences: [ '************', '*******', '********' ],
        options: {
            loop: true,
            startOnFocus: false
        }
    })
</script>
";
        // line 466
        $this->displayBlock('js', $context, $blocks);
        // line 467
        echo "

</body>
</html>";
    }

    // line 28
    public function block_css($context, array $blocks = array())
    {
    }

    // line 56
    public function block_error($context, array $blocks = array())
    {
    }

    // line 466
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 466,  676 => 56,  671 => 28,  664 => 467,  662 => 466,  640 => 447,  607 => 417,  603 => 416,  599 => 415,  595 => 414,  591 => 413,  587 => 412,  583 => 411,  579 => 410,  575 => 409,  571 => 408,  567 => 407,  563 => 406,  559 => 405,  555 => 404,  551 => 403,  547 => 402,  543 => 401,  539 => 400,  535 => 399,  531 => 398,  527 => 397,  523 => 396,  519 => 395,  515 => 394,  511 => 393,  507 => 392,  503 => 391,  499 => 390,  495 => 389,  491 => 388,  437 => 336,  376 => 277,  315 => 218,  246 => 151,  186 => 93,  183 => 89,  168 => 77,  146 => 57,  144 => 56,  139 => 54,  133 => 51,  123 => 44,  117 => 41,  106 => 32,  101 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  32 => 9,  22 => 1,);
    }
}
