<?php

/* OfertasBundle:Ofertas:solicitudes.html.twig */
class __TwigTemplate_4c6d0ce7cfce08368c495f731850ae3aa64449a386cd2a077c7e34ff2e58dd01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OfertasBundle:Ofertas:usuarios.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'encabezado' => array($this, 'block_encabezado'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OfertasBundle:Ofertas:usuarios.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/dataTables.fixedColumns.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <style>
        .btnNuevo{padding: 0px 0px;}

        #scroll{
            overflow: scroll;
            height: 650px;
        }
        #scrollMat{
            overflow: scroll;
            height: 350px;
        }
    </style>
";
    }

    // line 19
    public function block_encabezado($context, array $blocks = array())
    {
        // line 20
        echo "            Solicitudes
        ";
    }

    // line 23
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 24
        echo "              ";
        // line 25
        echo "           ";
        // line 68
        echo "

             <div class=\"row\">
                ";
        // line 74
        echo "
                 ";
        // line 113
        echo "
                 ";
        // line 114
        if (($this->env->getExtension('security')->isGranted("ROLE_SECRETARIA") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
            // line 115
            echo "                     <div class=\"col-lg-1\">
                         <a style=\"width: 72px\" class=\"btn btn-success tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#nuevaSolicitud\" title=\"Nueva Solicitud\">Nueva</a>
                         <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"nuevaSolicitud\" class=\"modal fade\">
                             <div class=\"modal-dialog\" style=\"text-align: center;width: 750px; height: auto\">
                                 <div class=\"modal-content\">
                                     <div class=\"modal-header\">
                                         <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                         <h4 class=\"modal-title\">Solicitud</h4>
                                     </div>
                                     <div class=\"modal-body\">
                                         <form class=\"form-horizontal\" method=\"post\" action=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("insertarSolicitudC");
            echo "\">

                                             <div class=\"row\">
                                                 <div class=\"col-lg-1\"></div>
                                                 <div class=\"col-lg-4\">
                                                     <label>Cliente</label>
                                                     <select style=\"text-align: center\" name=\"idCliente\" class=\"form-control round-input\" required=\"required\">
                                                         <option></option>
                                                         ";
            // line 133
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
            foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
                // line 134
                echo "                                                             <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "cliente"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "empresa"), "html", null, true);
                echo "</option>
                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                                                     </select>
                                                 </div>

                                                 <div class=\"col-lg-6\">
                                                     <label>Obra</label>
                                                     <input style=\"text-align: center\" name=\"nombreObra\" type=\"text\" class=\"form-control round-input\" required=\"required\">
                                                 </div>
                                             </div>

                                             <div class=\"row\">
                                                 <div class=\"col-lg-1\"></div>
                                                 <div class=\"col-lg-5\">
                                                     <label>Dirección Obra</label>
                                                     <textarea style=\"text-align: center\" name=\"direccionObra\" class=\"form-control\" required=\"required\"></textarea>
                                                 </div>
                                                 <div class=\"col-lg-5\">
                                                     <label>Descripción</label>
                                                     <textarea style=\"text-align: center\" name=\"descripcion\" class=\"form-control\" required=\"required\"></textarea>
                                                 </div>
                                             </div>
                                             <div class=\"form-group\" style=\"text-align: center\">
                                                 <h4>Levantamiento</h4>

                                                 <div class=\"col-sm-2\"></div>

                                                 <label class=\"col-sm-1 control-label\">Fecha</label>
                                                 <div id=\"sandbox-container\" class=\"col-sm-3\">
                                                     <input style=\"text-align: center\" name=\"fechaLevantamiento\" type=\"text\" class=\"form-control round-input\" required=\"required\">
                                                 </div>

                                                 <label class=\"col-sm-1 control-label\">Hora</label>
                                                 <div class=\"col-sm-3\">
                                                     <input style=\"text-align: center\" name=\"horaLevantamiento\" type=\"time\" class=\"form-control round-input\" required=\"required\">
                                                 </div>
                                             </div>
                                             <div class=\"form-group\">
                                                 <div class=\"col-lg-1\"></div>
                                                 <div class=\"col-lg-1\">
                                                     <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 ";
        }
        // line 184
        echo "
                ";
        // line 221
        echo "

                 ";
        // line 223
        if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_PRESUPUESTISTA")) || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
            // line 224
            echo "                    <div class=\"col-lg-1\">
                         <a style=\"width: 72px\" class=\"btn btn-danger tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#generarCaratula\" title=\"Generar carátula de Oferta\">Carátula</a>
                         <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"generarCaratula\" class=\"modal fade\">
                             <div class=\"modal-dialog\" style=\"text-align: center;width: 650px; height: auto\">
                                 <div class=\"modal-content\">
                                     <div class=\"modal-header\">
                                         <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                         <h4 class=\"modal-title\">Generar carátula de Oferta </h4>
                                     </div>
                                     <div class=\"modal-body\">
                                         <form class=\"form-horizontal\" role=\"form\">
                                             <div class=\"form-group\">
                                                 <div class=\"row\">
                                                     <div class=\"col-lg-1\"></div>
                                                     <div class=\"col-lg-6\">

                                                     </div>
                                                 </div>

                                                 <div class=\"row\">
                                                     <div class=\"col-lg-12\">
                                                         <form>
                                                             <div class=\"row\" style=\"text-align: center\">
                                                                 <div class=\"col-lg-3\"></div>
                                                                 <div class=\"col-lg-6\">
                                                                     <label>Solicitud</label>
                                                                     <select  style=\"text-align: center\" name=\"idSolicitud\" class=\"form-control round-input\" required=\"required\">
                                                                         <option></option>
                                                                         ";
            // line 252
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
            foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
                // line 253
                echo "                                                                             <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "codigo"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "nombreObra"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                echo "</option>
                                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "                                                                     </select>
                                                                 </div>
                                                             </div>
                                                             <div class=\"row\" style=\"text-align: center\">
                                                                 <div class=\"col-lg-12\">
                                                                     <label>Alcance</label>
                                                                 </div>
                                                             </div>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Demolición\"> Demolición
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-4\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Restauración\"> Restauración
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Electricidad\"> Electricidad
                                                                     </label>
                                                                 </div>
                                                             </div>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Hidrosanitaria\"> Hidrosanitaria
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-4\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Impermeabilización\"> Impermeabilización
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Carpintería\"> Carpintería
                                                                     </label>
                                                                 </div>
                                                             </div>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Pintura\"> Pintura
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-4\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Clima\"> Clima
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"alcance[]\" value=\"Mantenimiento\"> Mantenimiento
                                                                     </label>
                                                                 </div>
                                                             </div>

                                                             <hr>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>Materiales</label>
                                                                     </div>
                                                                 <div class=\"col-lg-4\">
                                                                     <label>Herramientas</label></div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>Equipos</label>
                                                                 </div>
                                                             </div>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"materiales[]\" value=\"cliente\"> Por Cliente
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-4\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"herramientas[]\" value=\"cliente\"> Por Cliente
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"equipos[]\" value=\"cliente\"> Por Cliente
                                                                     </label>
                                                                 </div>
                                                             </div>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"materiales[]\" value=\"ccc\"> Por CCC
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-4\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"herramientas[]\" value=\"ccc\"> Por CCC
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"equipos[]\" value=\"ccc\"> Por CCC
                                                                     </label>
                                                                 </div>
                                                             </div>

                                                             <hr>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-7\">
                                                                     <label>Calidad</label></div>
                                                                 <div class=\"col-lg-3\">
                                                                     <label>Anticipo</label>
                                                                 </div>
                                                             </div>

                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-6\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"calidad[]\" value=\"requerimientos\"> Requerimientos Cliente
                                                                     </label>
                                                                 </div>
                                                                 <div class=\"col-lg-4\" style=\"text-align: center\">
                                                                     <input style=\"text-align: center;\" class=\"form-control round-input\" type=\"text\" name=\"anticipo\">
                                                                 </div>
                                                             </div>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-6\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"calidad[]\" value=\"regulaciones\"> Regulaciones
                                                                     </label>
                                                                 </div>
                                                             </div>
                                                             <div class=\"row\" style=\"text-align: left\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-6\">
                                                                     <label>
                                                                         <input type=\"checkbox\" name=\"calidad[]\" value=\"normas\"> Normas
                                                                     </label>
                                                                 </div>
                                                             </div>

                                                             <br>
                                                             <div class=\"row\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-1\">
                                                                     <button type=\"submit\" class=\"btn btn-primary\" formmethod=\"post\" formaction=\"";
            // line 409
            echo $this->env->getExtension('routing')->getPath("generarCaratulaOfertaR");
            echo "\" formenctype=\"multipart/form-data\">Enviar</button>
                                                                 </div>
                                                             </div>
                                                         </form>
                                                     </div>
                                                     <div class=\"col-lg-3\"></div>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    </div>
                 ";
        }
        // line 424
        echo "
                 ";
        // line 425
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 426
            echo "                    <div class=\"col-lg-1\">
                         <a style=\"width: 72px\" class=\"btn btn-danger tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"";
            // line 427
            echo $this->env->getExtension('routing')->getPath("crearDirectorio");
            echo "\" title=\"Crear directorio\">Direct.</a>
                    </div>
                 ";
        }
        // line 430
        echo "             </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <table ";
        // line 434
        echo " class=\"table table-striped table-advance table-hover table-bordered display\" style=\"text-align: center\">
                        <thead>
                        <tr style=\"text-align: center; background-color: #EEEEEE\">
                            <td rowspan=\"2\">Cliente</td>
                            <td rowspan=\"2\">No</td>
                            <td rowspan=\"2\">Obra</td>
                            <td rowspan=\"2\">Dirección</td>
                            <td rowspan=\"2\">Descripción</td>
                            <td colspan=\"2\" style=\"width: 5px;\">Levantamiento</td>
                            <td rowspan=\"2\" >Cuantificación</td>
                            <td rowspan=\"2\" style=\"width: 5px;\">Costeo</td>
                            <td rowspan=\"2\" style=\"width: 5px;\">Oferta</td>
                            <td rowspan=\"2\" style=\"width: 5px;\">Entrega</td>
                        </tr>
                        <tr style=\"text-align: center; background-color: #EEEEEE\">
                            <td style=\"width: 5px;\">Fecha</td>
                            <td style=\"width: 5px;\">Hora</td>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 455
        $context["montoCosteo"] = 0;
        // line 456
        echo "                        ";
        $context["montoOfertaCUP"] = 0;
        // line 457
        echo "                        ";
        $context["montoOfertaCUC"] = 0;
        // line 458
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 459
            echo "                            <tr ";
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "rechazado") == true)) {
                echo "style=\"color: red\" ";
            }
            echo ">
                                <td>
                                    ";
            // line 461
            if (($this->env->getExtension('security')->isGranted("ROLE_SECRETARIA") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
                // line 462
                echo "                                        <a style=\"color: #797979;\" class=\"tooltips\" data-toggle=\"modal\" href=\"#rechazarSolicitud-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Dar como Rechazada la solicitud\">
                                            ";
                // line 463
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idCliente"), "cliente"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idCliente"), "empresa"), "html", null, true);
                echo "
                                        </a>
                                        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"rechazarSolicitud-";
                // line 465
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"modal fade\">
                                            <div class=\"modal-dialog\" style=\"text-align: center\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                        <h4 class=\"modal-title\">Solicitud Rechazada</h4>
                                                    </div>
                                                    <div class=\"alert alert-block alert-danger fade in\" style=\"text-align: center\">
                                                        <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                            <i class=\"icon-remove\"></i>
                                                        </button>
                                                        <strong>¿ Está seguro que desea dar como rechazada la solicitud?</strong><br><br>
                                                        <form role=\"form\" style=\"text-align: center\">
                                                            <div class=\"form-group\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-lg-1\"></div>
                                                                    <div class=\"col-lg-10\">
                                                                        <label style=\"color: #000000\"><strong>Causas del Rechazo</strong></label>
                                                                        <textarea style=\"text-align: center\" name=\"causasRechazo\" class=\"form-control\" required=\"required\"></textarea>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class=\"row\">
                                                                    <div class=\"col-lg-1\"></div>
                                                                    <div class=\"col-lg-1\">
                                                                        <button class=\"btn btn-info\" formaction=\"";
                // line 490
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechazarSolicitud", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"))), "html", null, true);
                echo "\" formmethod=\"post\">Aceptar</button>
                                                                    </div>
                                                                    <div class=\"col-lg-3\"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            } else {
                // line 501
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idCliente"), "cliente"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idCliente"), "empresa"), "html", null, true);
                echo "
                                    ";
            }
            // line 503
            echo "                                </td>
                                <td>
                                    ";
            // line 505
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tieneCaratula") == true)) {
                // line 506
                echo "                                        <a style=\"color: #797979;\" class=\"tooltips\" data-placement=\"top\" target=\"_blank\" data-toggle=\"modal\" href=\"http://192.168.1.47/ofertas/web/Oferta ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "codigo"), "html", null, true);
                echo ".docx\" title=\"Ver Carátula Generada\">
                                            ";
                // line 507
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "codigo"), "html", null, true);
                echo "
                                        </a>
                                    ";
            } else {
                // line 510
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "codigo"), "html", null, true);
                echo "
                                    ";
            }
            // line 512
            echo "                                </td>
                                <td>";
            // line 513
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "nombreObra"), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 515
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "direccionObra") != "")) {
                // line 516
                echo "                                        <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#verDireccion-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Ver dirección de la Obra\">Ver</a>
                                        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"verDireccion-";
                // line 517
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"modal fade\">
                                            <div class=\"modal-dialog\" style=\"text-align: center;width: 650px; height: auto\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                        <h4 class=\"modal-title\">Obra </h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <form class=\"form-horizontal\" method=\"post\" action=\"#\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-10\">
                                                                    <label>Dirección</label>
                                                                    <textarea style=\"text-align: center\" name=\"direccionObra\" class=\"form-control\" disabled=\"disabled\">";
                // line 530
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "direccionObra"), "html", null, true);
                echo "</textarea>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 539
            echo "                                </td>
                                <td>
                                    ";
            // line 541
            if (($this->env->getExtension('security')->isGranted("ROLE_SECRETARIA") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
                // line 542
                echo "                                        <a style=\"color: #797979;\" class=\"tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#editarDescripcion-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Editar Descripción\">
                                            ";
                // line 543
                if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "esReoferta") == 1)) {
                    // line 544
                    echo "                                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
                    foreach ($context['_seq'] as $context["_key"] => $context["sol"]) {
                        if (($this->getAttribute((isset($context["sol"]) ? $context["sol"] : $this->getContext($context, "sol")), "id") == $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idsolicitudoriginal"))) {
                            // line 545
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sol"]) ? $context["sol"] : $this->getContext($context, "sol")), "descripcion"), "html", null, true);
                            echo "
                                                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sol'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 547
                    echo "                                                <a style=\"color: darkgreen;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 549
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                    echo "
                                            ";
                }
                // line 551
                echo "                                        </a>
                                        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"editarDescripcion-";
                // line 552
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"modal fade\">
                                            <div class=\"modal-dialog\" style=\"text-align: center;width: 650px; height: auto\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                        <h4 class=\"modal-title\">Editar </h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <form class=\"form-horizontal\" method=\"post\" action=\"";
                // line 560
                echo $this->env->getExtension('routing')->getPath("editarSolicitudC");
                echo "\">
                                                            <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                // line 561
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">
                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-4\">
                                                                    <label>Cliente</label>
                                                                    <select style=\"text-align: center\" name=\"idCliente\" class=\"form-control round-input\" required=\"required\">
                                                                        <option></option>
                                                                        ";
                // line 568
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
                foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
                    // line 569
                    echo "                                                                            <option ";
                    if (($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id") == $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idCliente"), "id"))) {
                        echo " selected ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "cliente"), "html", null, true);
                    echo "</option>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 571
                echo "                                                                    </select>
                                                                </div>

                                                                <div class=\"col-lg-6\">
                                                                    <label>Obra</label>
                                                                    <input style=\"text-align: center\" name=\"nombreObra\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 576
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "nombreObra"), "html", null, true);
                echo "\">
                                                                </div>
                                                            </div>

                                                            <div class=\"row\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-5\">
                                                                    <label>Dirección Obra</label>
                                                                    <textarea style=\"text-align: center\" name=\"direccionObra\" class=\"form-control\">";
                // line 584
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "direccionObra"), "html", null, true);
                echo "</textarea>
                                                                </div>
                                                                <div class=\"col-lg-5\">
                                                                    <label>Descripción</label>
                                                                    <textarea style=\"text-align: center\" name=\"descripcion\" class=\"form-control\" required=\"required\">";
                // line 588
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                echo "</textarea>
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\" style=\"text-align: center\">
                                                                <h4>Levantamiento</h4>

                                                                <div class=\"col-sm-2\"></div>

                                                                <label class=\"col-sm-1 control-label\">Fecha</label>
                                                                <div id=\"sandbox-container\" class=\"col-sm-3\">
                                                                    <input style=\"text-align: center\" name=\"fechaLevantamiento\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 598
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaLevantamiento"), "d.m.Y"), "html", null, true);
                echo "\">
                                                                </div>

                                                                <label class=\"col-sm-1 control-label\">Hora</label>
                                                                <div class=\"col-sm-3\">
                                                                    <input style=\"text-align: center\" name=\"horaLevantamiento\" type=\"time\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 603
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "horaLevantamiento"), "H:i"), "html", null, true);
                echo "\">
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <div class=\"col-lg-1\"></div>
                                                                <div class=\"col-lg-1\">
                                                                    <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            } else {
                // line 618
                echo "                                        ";
                if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "esReoferta") == 1)) {
                    // line 619
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
                    foreach ($context['_seq'] as $context["_key"] => $context["sol"]) {
                        if (($this->getAttribute((isset($context["sol"]) ? $context["sol"] : $this->getContext($context, "sol")), "id") == $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idsolicitudoriginal"))) {
                            // line 620
                            echo "                                                ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sol"]) ? $context["sol"] : $this->getContext($context, "sol")), "descripcion"), "html", null, true);
                            echo " //
                                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sol'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 622
                    echo "                                            <a style=\"color: darkgreen;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                    echo "</a>
                                        ";
                } else {
                    // line 624
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                    echo "
                                        ";
                }
                // line 626
                echo "                                    ";
            }
            // line 627
            echo "                                </td>
                                <td>";
            // line 628
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaLevantamiento"), "d.m.Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 629
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "horaLevantamiento"), "H:i"), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 631
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCuantificacion") == "")) {
                // line 632
                echo "                                        ";
                if (($this->env->getExtension('security')->isGranted("ROLE_INGENIERO") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
                    // line 633
                    echo "                                            <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#insertarCuantificacion-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" title=\"Insertar la fecha de cuantificación\">Ins.</a>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"insertarCuantificacion-";
                    // line 634
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Cuantificación </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form class=\"form-horizontal\" method=\"post\" action=\"";
                    // line 642
                    echo $this->env->getExtension('routing')->getPath("insertarFechaCuantificacionA");
                    echo "\">
                                                                <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                    // line 643
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">Fecha</label>
                                                                    <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                        <input style=\"text-align: center\" name=\"fechaCuantificacion\" type=\"text\" class=\"form-control round-input\" required=\"required\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-10\">
                                                                        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           ";
                    // line 663
                    echo "                                        ";
                }
                // line 664
                echo "                                    ";
            } else {
                // line 665
                echo "                                        ";
                if (($this->env->getExtension('security')->isGranted("ROLE_INGENIERO") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
                    // line 666
                    echo "                                            <a style=\"color: #797979;\" class=\"tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#editarCuantificacion-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" title=\"Editar la fecha de cuantificación\">
                                                ";
                    // line 667
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCuantificacion"), "d.m.Y"), "html", null, true);
                    echo "
                                            </a>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"editarCuantificacion-";
                    // line 669
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Cuantificación </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form class=\"form-horizontal\" method=\"post\" action=\"";
                    // line 677
                    echo $this->env->getExtension('routing')->getPath("editarFechaCuantificacionA");
                    echo "\">
                                                                <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                    // line 678
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">Fecha</label>
                                                                    <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                        <input style=\"text-align: center\" name=\"fechaCuantificacion\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                    // line 682
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCuantificacion"), "d.m.Y"), "html", null, true);
                    echo "\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-10\">
                                                                        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                } else {
                    // line 696
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCuantificacion"), "d.m.Y"), "html", null, true);
                    echo "
                                        ";
                }
                // line 698
                echo "                                    ";
            }
            // line 699
            echo "                                </td>
                                <td>
                                    ";
            // line 701
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCosteo") != "")) {
                // line 702
                echo "                                        <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#verCosteo-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Ver datos del costeo\">Ver.</a>
                                        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"verCosteo-";
                // line 703
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"modal fade\">
                                            <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                        <h4 class=\"modal-title\">Costeo </h4>
                                                    </div>
                                                    <section class=\"panel\">
                                                        <header class=\"panel-heading tab-bg-primary \">
                                                            <ul class=\"nav nav-tabs\">
                                                                <li class=\"active\">
                                                                    <a data-toggle=\"tab\" href=\"#datos-";
                // line 714
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">Datos</a>
                                                                </li>
                                                                ";
                // line 716
                if (($this->env->getExtension('security')->isGranted("ROLE_PRESUPUESTISTA") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
                    // line 717
                    echo "                                                                    <li>
                                                                        <a data-toggle=\"tab\" href=\"#editar-";
                    // line 718
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\">Editar</a>
                                                                    </li>
                                                                ";
                }
                // line 721
                echo "                                                            </ul>
                                                        </header>
                                                        <div class=\"panel-body\">
                                                            <div class=\"tab-content\">
                                                                <div id=\"datos-";
                // line 725
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"tab-pane active\">
                                                                    <table class=\"table table-striped table-advance table-hover table-bordered\" style=\"text-align: center\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Fecha</th>
                                                                            <th>Valor</th>
                                                                            <th>Moneda</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            ";
                // line 736
                $context["montoCosteo"] = ((isset($context["montoCosteo"]) ? $context["montoCosteo"] : $this->getContext($context, "montoCosteo")) + $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorCosteo"));
                // line 737
                echo "                                                                            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCosteo"), "d.m.Y"), "html", null, true);
                echo "</td>
                                                                            <td>\$";
                // line 738
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorCosteo"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                            <td>";
                // line 739
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tipoMoneda"), "html", null, true);
                echo "</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div id=\"editar-";
                // line 744
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"tab-pane\">
                                                                    <form class=\"form-horizontal\" method=\"post\" action=\"";
                // line 745
                echo $this->env->getExtension('routing')->getPath("editarCosteoA");
                echo "\">
                                                                        <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                // line 746
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">
                                                                        <div class=\"form-group\">
                                                                            <label class=\"col-sm-4 control-label\">Fecha Costeo</label>
                                                                            <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                                <input style=\"text-align: center\" name=\"fechaCosteo\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 750
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCosteo"), "d.m.Y"), "html", null, true);
                echo "\">
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <div class=\"col-sm-1\"></div>
                                                                            <div class=\"col-sm-5\">
                                                                                <label class=\"control-label\">Valor Costeo</label>
                                                                                <div class=\"\">
                                                                                    <input style=\"text-align: center\" name=\"valorCosteo\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 758
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorCosteo"), "html", null, true);
                echo "\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-sm-5\">
                                                                                <label class=\"control-label\">Tipo Moneda</label>
                                                                                <div class=\"\">
                                                                                    <select name=\"tipoMoneda\" class=\"form-control round-input\" required=\"required\">
                                                                                        <option></option>
                                                                                        <option selected style=\"text-align: center\" value=\"CUC\">CUC</option>
                                                                                        <option style=\"text-align: center\" value=\"CUP\">CUP</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <div class=\"col-sm-10\">
                                                                                <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            } else {
                // line 786
                echo "                                        ";
                if (($this->env->getExtension('security')->isGranted("ROLE_PRESUPUESTISTA") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
                    // line 787
                    echo "                                            <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#insertarCosteo-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" title=\"Insertar datos del costeo\">Ins.</a>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"insertarCosteo-";
                    // line 788
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Costeo </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form class=\"form-horizontal\" method=\"post\" action=\"";
                    // line 796
                    echo $this->env->getExtension('routing')->getPath("insertarCosteoA");
                    echo "\">
                                                                <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                    // line 797
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">Fecha Costeo</label>
                                                                    <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                        <input style=\"text-align: center\" name=\"fechaCosteo\" type=\"text\" class=\"form-control round-input\" required=\"required\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-1\"></div>
                                                                    <div class=\"col-sm-5\">
                                                                        <label class=\"control-label\">Valor Costeo</label>
                                                                        <div class=\"\">
                                                                            <input style=\"text-align: center\" name=\"valorCosteo\" type=\"text\" class=\"form-control round-input\" required=\"required\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-sm-5\">
                                                                        <label class=\"control-label\">Tipo Moneda</label>
                                                                        <div class=\"\">
                                                                            <select name=\"tipoMoneda\" class=\"form-control round-input\" required=\"required\">
                                                                                <option></option>
                                                                                <option style=\"text-align: center\" value=\"CUC\">CUC</option>
                                                                                <option style=\"text-align: center\" value=\"CUP\">CUP</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">Oferta Elaborada</label>
                                                                    <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                        <input style=\"text-align: center\" name=\"fechaElaboradaOferta\" type=\"text\" class=\"form-control round-input\" required=\"required\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-1\"></div>
                                                                    <div class=\"col-sm-5\">
                                                                        <label class=\"control-label\">Valor Oferta CUP</label>
                                                                        <div class=\"\">
                                                                            <input style=\"text-align: center\" name=\"valorOfertaCUP\" type=\"text\" class=\"form-control round-input\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-sm-5\">
                                                                        <label class=\"control-label\">Valor Oferta CUC</label>
                                                                        <div class=\"\">
                                                                            <input style=\"text-align: center\" name=\"valorOfertaCUC\" type=\"text\" class=\"form-control round-input\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-1\"></div>
                                                                    <div class=\"col-sm-5\">
                                                                        <label class=\"control-label\">Valor Materiales CUP</label>
                                                                        <div class=\"\">
                                                                            <input style=\"text-align: center\" name=\"valorMaterialesCUP\" type=\"text\" class=\"form-control round-input\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-sm-5\">
                                                                        <label class=\"control-label\">Valor Materiales CUC</label>
                                                                        <div class=\"\">
                                                                            <input style=\"text-align: center\" name=\"valorMaterialesCUC\" type=\"text\" class=\"form-control round-input\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-1\"></div>
                                                                    <div class=\"col-sm-5\">
                                                                        <label class=\"control-label\">Cantidad Trabajadores</label>
                                                                        <div class=\"\">
                                                                            <input style=\"text-align: center\" name=\"cantidadTrabajadores\" type=\"number\" class=\"form-control round-input\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-sm-5\">
                                                                        <label class=\"control-label\">Tiempo Ejecución(días)</label>
                                                                        <div class=\"\">
                                                                            <input style=\"text-align: center\" name=\"tiempoEjecucion\" type=\"text\" class=\"form-control round-input\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-10\">
                                                                        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            ";
                    // line 885
                    if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") == "viktor") && (twig_length_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun")) == 0))) {
                        // line 886
                        echo "                                                <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-toggle=\"modal\" href=\"#cargarPresupuesto-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\" title=\"Cargar Presupuesto\">Cargar</a>
                                                <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"cargarPresupuesto-";
                        // line 887
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\" class=\"modal fade\">
                                                    <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                                <h4 class=\"modal-title\">Costeo</h4>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <form class=\"form-horizontal\" role=\"form\">
                                                                    <div class=\"form-group\">
                                                                        <div class=\"row\">
                                                                            <div class=\"col-lg-1\"></div>
                                                                            <div class=\"col-lg-10\">
                                                                                <script type=\"text/javascript\">
                                                                                    function mostrar(id) {
                                                                                        if (id == \"excelComun\") {
                                                                                            \$(\"#excelComun\").show();
                                                                                            \$(\"#prewin\").hide();
                                                                                        }
                                                                                        if (id == \"prewin\") {
                                                                                            \$(\"#excelComun\").hide();
                                                                                            \$(\"#prewin\").show();
                                                                                        }
                                                                                        if (id != \"prewin\" && id != \"excelComun\") {
                                                                                            \$(\"#excelComun\").hide();
                                                                                            \$(\"#prewin\").hide();
                                                                                        }
                                                                                    }
                                                                                </script>
                                                                                <form>
                                                                                    <div class=\"row\" style=\"text-align: center\">
                                                                                        <div class=\"col-lg-10\">
                                                                                            <label>Tipo</label>
                                                                                            <select id=\"tipoPresupuesto\" onChange=\"mostrar(this.value);\" name=\"tipoPresupuesto\"  class=\"form-control round-input\" required=\"required\">
                                                                                                <option></option>
                                                                                                <option style=\"text-align: center;\" value=\"excelComun\">Excel Común</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div id=\"excelComun\" class=\"row\" style=\"text-align: center; display: none;\">
                                                                                        <div class=\"col-lg-12\">
                                                                                            <img src=\"";
                        // line 929
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/excelComun.png"), "html", null, true);
                        echo "\" width=\"100%\" height=\"auto\">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div id=\"prewin\" class=\"row\" style=\"text-align: center; display: none;\">
                                                                                        Prewin
                                                                                    </div>

                                                                                    <div class=\"row\">
                                                                                        <div class=\"col-lg-10\">
                                                                                            <label>Buscar Excel</label>
                                                                                            <input required type=\"file\" name=\"nombreArchivo\" id=\"nombreArchivo\" value=\"Buscar\" title=\"Buscar\" class=\"btn btn-success\"/><br>
                                                                                            <input type=\"hidden\" value=\"";
                        // line 941
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\" name=\"idSolicitud\">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row\">
                                                                                        <div class=\"col-lg-1\">
                                                                                            <button type=\"submit\" class=\"btn btn-primary\" formmethod=\"post\" formaction=\"";
                        // line 946
                        echo $this->env->getExtension('routing')->getPath("cargarPresupuesto");
                        echo "\" formenctype=\"multipart/form-data\">Enviar</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class=\"col-lg-3\"></div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
                    } elseif ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") == "viktor") && (twig_length_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun")) != 0))) {
                        // line 960
                        echo "                                                <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-toggle=\"modal\" href=\"#verPresupuesto-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\" title=\"Ver Presupuesto\">Ver</a>
                                                <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"verPresupuesto-";
                        // line 961
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\" class=\"modal fade\">
                                                    <div class=\"modal-dialog\" style=\"text-align: center;width: 850px; height: auto\">
                                                        <section class=\"panel\">
                                                            <header class=\"panel-heading tab-bg-primary \">
                                                                <ul class=\"nav nav-tabs\">
                                                                    <li class=\"active\">
                                                                        <a data-toggle=\"tab\" href=\"#hojaResumen-";
                        // line 967
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\">Hoja Resumen</a>
                                                                    </li>
                                                                    <li class=\"\">
                                                                        <a data-toggle=\"tab\" href=\"#actividades-";
                        // line 970
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\">Actividades</a>
                                                                    </li>
                                                                    <li class=\"\">
                                                                        <a data-toggle=\"tab\" href=\"#materiales-";
                        // line 973
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\">Materiales</a>
                                                                    </li>
                                                                </ul>
                                                            </header>

                                                            <div class=\"panel-body\">
                                                                <div class=\"tab-content\">
                                                                    <div id=\"hojaResumen-";
                        // line 980
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\" class=\"tab-pane active\">
                                                                        <div class=\"row\">
                                                                            <div class=\"col-lg-1\"></div>
                                                                            <div class=\"col-lg-10\">
                                                                                <table class=\"table table-striped table-advance table-hover table-bordered display\" style=\"text-align: center\">
                                                                                    <thead>
                                                                                    <tr style=\"text-align: center; background-color: #EEEEEE\">
                                                                                        <td style=\"width: 5px;\">No.</td>
                                                                                        <td style=\"\">Concepto de Gastos</td>
                                                                                        <td style=\"\">CUP</td>
                                                                                        <td style=\"\">CUC</td>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    ";
                        // line 994
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "resumenpresupuestocup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "resumenpresupuestocuc") != 0))) {
                            // line 995
                            echo "                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Resumen de presupuesto</td>
                                                                                            <td>";
                            // line 998
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "resumenpresupuestocup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 999
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "resumenpresupuestocuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1002
                        echo "                                                                                    ";
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosdirectoscup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosdirectoscuc") != 0))) {
                            // line 1003
                            echo "                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Gastos Directos de Obra</td>
                                                                                            <td>";
                            // line 1006
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosdirectoscup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 1007
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosdirectoscuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1010
                        echo "                                                                                    ";
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosgeneralescup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosgeneralescuc") != 0))) {
                            // line 1011
                            echo "                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Gastos Generales de Obra</td>
                                                                                            <td>";
                            // line 1014
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosgeneralescup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 1015
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosgeneralescuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1018
                        echo "                                                                                    ";
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosindirectoscup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosindirectoscuc") != 0))) {
                            // line 1019
                            echo "                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Gastos Indirectos de Obra</td>
                                                                                            <td>";
                            // line 1022
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosindirectoscup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 1023
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "gastosindirectoscuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1026
                        echo "                                                                                    ";
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "presupuestosindependientescup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "presupuestosindependientescuc") != 0))) {
                            // line 1027
                            echo "                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Presupuestos Independientes</td>
                                                                                            <td>";
                            // line 1030
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "presupuestosindependientescup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 1031
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "presupuestosindependientescuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1034
                        echo "                                                                                    ";
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "imprevistoscup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "imprevistoscuc") != 0))) {
                            // line 1035
                            echo "                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Imprevistos</td>
                                                                                            <td>";
                            // line 1038
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "imprevistoscup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 1039
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "imprevistoscuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1042
                        echo "                                                                                    <tr>
                                                                                        <td>7</td>
                                                                                        <td>Costo Total</td>
                                                                                        <td>";
                        // line 1045
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "costototalcup"), 2, ".", ","), "html", null, true);
                        echo "</td>
                                                                                        <td>";
                        // line 1046
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "costototalcuc"), 2, ".", ","), "html", null, true);
                        echo "</td>
                                                                                    </tr>
                                                                                    ";
                        // line 1048
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "utilidadcup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "utilidadcuc") != 0))) {
                            // line 1049
                            echo "                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Utilidad (";
                            // line 1051
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "pcutilidad"), 2, ".", ","), "html", null, true);
                            echo "%)</td>
                                                                                            <td>";
                            // line 1052
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "utilidadcup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 1053
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "utilidadcuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1056
                        echo "                                                                                    <tr>
                                                                                        <td>9</td>
                                                                                        <td>Precio del Servicio de Construcción</td>
                                                                                        <td>";
                        // line 1059
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "precioservconstcup"), 2, ".", ","), "html", null, true);
                        echo "</td>
                                                                                        <td>";
                        // line 1060
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "precioservconstcuc"), 2, ".", ","), "html", null, true);
                        echo "</td>
                                                                                    </tr>
                                                                                    ";
                        // line 1062
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "pagotributoscup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "pagotributoscuc") != 0))) {
                            // line 1063
                            echo "                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Pago de Tributos</td>
                                                                                            <td>";
                            // line 1066
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "pagotributoscup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 1067
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "pagotributoscuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1070
                        echo "                                                                                    <tr>
                                                                                        <td>11</td>
                                                                                        <td>Precio Mano de Obra</td>
                                                                                        <td>";
                        // line 1073
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "preciomanoobracup"), 2, ".", ","), "html", null, true);
                        echo "</td>
                                                                                        <td>";
                        // line 1074
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "preciomanoobracuc"), 2, ".", ","), "html", null, true);
                        echo "</td>
                                                                                    </tr>
                                                                                    ";
                        // line 1076
                        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "preciomaterialescup") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "preciomaterialescuc") != 0))) {
                            // line 1077
                            echo "                                                                                        <tr>
                                                                                            <td>12</td>
                                                                                            <td>Precio Materiales</td>
                                                                                            <td>";
                            // line 1080
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "preciomaterialescup"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                            <td>";
                            // line 1081
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "preciomaterialescuc"), 2, ".", ","), "html", null, true);
                            echo "</td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1084
                        echo "                                                                                    <tr>
                                                                                        <td>13</td>
                                                                                        <td>Precio Total Servicio de Construcción</td>
                                                                                        <td>";
                        // line 1087
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "preciototalcup"), 2, ".", ","), "html", null, true);
                        echo "</td>
                                                                                        <td>";
                        // line 1088
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "preciototalcuc"), 2, ".", ","), "html", null, true);
                        echo "</td>
                                                                                    </tr>
                                                                                    ";
                        // line 1090
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "tiempoejecuciondias") != 0)) {
                            // line 1091
                            echo "                                                                                        <tr>
                                                                                            <td style=\"background-color: #EEEEEE; border-color: #EEEEEE\"></td>
                                                                                            <td>Tiempo de ejecución: (días)</td>
                                                                                            <td>";
                            // line 1094
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "tiempoejecuciondias"), "html", null, true);
                            echo "</td>
                                                                                            <td style=\"background-color: #EEEEEE; border-color: #EEEEEE\"></td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1098
                        echo "                                                                                    ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "canthombres") != 0)) {
                            // line 1099
                            echo "                                                                                        <tr>
                                                                                            <td style=\"background-color: #EEEEEE; border-color: #EEEEEE\"></td>
                                                                                            <td>Cantidad de hombres</td>
                                                                                            <td>";
                            // line 1102
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "canthombres"), "html", null, true);
                            echo "</td>
                                                                                            <td style=\"background-color: #EEEEEE; border-color: #EEEEEE\"></td>
                                                                                        </tr>
                                                                                    ";
                        }
                        // line 1106
                        echo "                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id=\"actividades-";
                        // line 1112
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\" class=\"tab-pane\">
                                                                        ";
                        // line 1113
                        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "objetivos")) == 0)) {
                            // line 1114
                            echo "                                                                            <div class=\"row\">
                                                                                <div class=\"col-lg-1\"></div>
                                                                                <div class=\"col-lg-10\">
                                                                                    <form class=\"form-horizontal\" role=\"form\">
                                                                                        <div class=\"form-group\">
                                                                                            <div class=\"row\">
                                                                                                <div class=\"col-lg-1\"></div>
                                                                                                <div class=\"col-lg-10\">
                                                                                                    <form>
                                                                                                        ";
                            // line 1137
                            echo "                                                                                                        <br>

                                                                                                        <div class=\"row\" style=\"text-align: center;\">
                                                                                                            <div class=\"col-lg-12\">
                                                                                                                <img src=\"";
                            // line 1141
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/excelComunAct.png"), "html", null, true);
                            echo "\" width=\"100%\" height=\"auto\">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class=\"row\">
                                                                                                            <div class=\"col-lg-10\">
                                                                                                                <label>Buscar Excel</label>
                                                                                                                <input required type=\"file\" name=\"nombreArchivo\" id=\"nombreArchivo\" value=\"Buscar\" title=\"Buscar\" class=\"btn btn-success\"/><br>
                                                                                                                <input type=\"hidden\" value=\"";
                            // line 1148
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                            echo "\" name=\"idSolicitud\">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class=\"row\">
                                                                                                            <div class=\"col-lg-1\">
                                                                                                                <button type=\"submit\" class=\"btn btn-primary\" formmethod=\"post\" formaction=\"";
                            // line 1153
                            echo $this->env->getExtension('routing')->getPath("cargarActPresupuesto");
                            echo "\" formenctype=\"multipart/form-data\">Enviar</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class=\"col-lg-3\"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        ";
                        } else {
                            // line 1165
                            echo "                                                                            <div class=\"row\">
                                                                                <div class=\"col-lg-1\"></div>
                                                                                <div class=\"col-lg-11\">
                                                                                    <div id=\"scroll\">
                                                                                        <table ";
                            // line 1169
                            echo " class=\"table table-striped table-advance table-hover table-bordered display\" style=\"text-align: center\">
                                                                                            <thead>
                                                                                            <tr style=\"text-align: center; background-color: #EEEEEE\">
                                                                                                <td style=\"width: 5px;\">Código</td>
                                                                                                <td style=\"\">Desglose de actividades</td>
                                                                                                <td style=\"\">UM</td>
                                                                                                <td style=\"\">Cant</td>
                                                                                                <td style=\"\">CUC</td>
                                                                                                <td style=\"\">Importe</td>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            ";
                            // line 1181
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "objetivos"));
                            foreach ($context['_seq'] as $context["_key"] => $context["objetivo"]) {
                                // line 1182
                                echo "                                                                                                ";
                                $context["totalGrupo"] = 0;
                                // line 1183
                                echo "                                                                                                ";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetivo"]) ? $context["objetivo"] : $this->getContext($context, "objetivo")), "gruposActividades"));
                                foreach ($context['_seq'] as $context["_key"] => $context["grupo"]) {
                                    // line 1184
                                    echo "                                                                                                    ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "actividades"));
                                    foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
                                        // line 1185
                                        echo "                                                                                                        ";
                                        $context["totalGrupo"] = ((isset($context["totalGrupo"]) ? $context["totalGrupo"] : $this->getContext($context, "totalGrupo")) + $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "total"));
                                        // line 1186
                                        echo "                                                                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 1187
                                    echo "                                                                                                    <tr>
                                                                                                        <td>";
                                    // line 1188
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "codigo"), "html", null, true);
                                    echo "</td>
                                                                                                        <td colspan=\"4\">";
                                    // line 1189
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "grupo"), "html", null, true);
                                    echo "</td>
                                                                                                        <td>
                                                                                                            <b>";
                                    // line 1191
                                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalGrupo"]) ? $context["totalGrupo"] : $this->getContext($context, "totalGrupo")), 2, ".", ","), "html", null, true);
                                    echo "</b>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    ";
                                    // line 1194
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "actividades"));
                                    foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
                                        // line 1195
                                        echo "                                                                                                        <tr>
                                                                                                            <td>";
                                        // line 1196
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "codigo"), "html", null, true);
                                        echo "</td>
                                                                                                            <td>";
                                        // line 1197
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "actividad"), "html", null, true);
                                        echo "</td>
                                                                                                            <td>";
                                        // line 1198
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "um"), "html", null, true);
                                        echo "</td>
                                                                                                            <td>";
                                        // line 1199
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "cantidad"), "html", null, true);
                                        echo "</td>
                                                                                                            <td>";
                                        // line 1200
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "precio"), 2, ".", ","), "html", null, true);
                                        echo "</td>
                                                                                                            <td>";
                                        // line 1201
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "total"), 2, ".", ","), "html", null, true);
                                        echo "</td>
                                                                                                        </tr>
                                                                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 1204
                                    echo "                                                                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupo'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1205
                                echo "                                                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetivo'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1206
                            echo "                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        ";
                        }
                        // line 1212
                        echo "                                                                    </div>

                                                                    <div id=\"materiales-";
                        // line 1214
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                        echo "\" class=\"tab-pane\">
                                                                        ";
                        // line 1215
                        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "materiales")) == 0)) {
                            // line 1216
                            echo "                                                                            <div class=\"row\">
                                                                                <div class=\"col-lg-1\"></div>
                                                                                <div class=\"col-lg-10\">
                                                                                    <form class=\"form-horizontal\" role=\"form\">
                                                                                        <div class=\"form-group\">
                                                                                            <div class=\"row\">
                                                                                                <div class=\"col-lg-1\"></div>
                                                                                                <div class=\"col-lg-10\">
                                                                                                    <form>
                                                                                                       ";
                            // line 1238
                            echo "                                                                                                        <br>

                                                                                                        <div class=\"row\" style=\"text-align: center;\">
                                                                                                            <div class=\"col-lg-12\">
                                                                                                                <img src=\"";
                            // line 1242
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/excelComunMat.png"), "html", null, true);
                            echo "\" width=\"100%\" height=\"auto\">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class=\"row\">
                                                                                                            <div class=\"col-lg-10\">
                                                                                                                <label>Buscar Excel</label>
                                                                                                                <input required type=\"file\" name=\"nombreArchivo\" id=\"nombreArchivo\" value=\"Buscar\" title=\"Buscar\" class=\"btn btn-success\"/><br>
                                                                                                                <input type=\"hidden\" value=\"";
                            // line 1249
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                            echo "\" name=\"idSolicitud\">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class=\"row\">
                                                                                                            <div class=\"col-lg-1\">
                                                                                                                <button type=\"submit\" class=\"btn btn-primary\" formmethod=\"post\" formaction=\"";
                            // line 1254
                            echo $this->env->getExtension('routing')->getPath("cargarMatPresupuesto");
                            echo "\" formenctype=\"multipart/form-data\">Enviar</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class=\"col-lg-3\"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        ";
                        } else {
                            // line 1266
                            echo "                                                                            <div class=\"row\">
                                                                                <div class=\"col-lg-1\"></div>
                                                                                <div class=\"col-lg-11\">
                                                                                    <div id=\"scrollMat\">
                                                                                        <table ";
                            // line 1270
                            echo " class=\"table table-striped table-advance table-hover table-bordered display\" style=\"text-align: center\">
                                                                                            <thead>
                                                                                            <tr style=\"text-align: center; background-color: #EEEEEE\">
                                                                                                <td style=\"\">Material</td>
                                                                                                <td style=\"width: 5px;\">UM</td>
                                                                                                <td style=\"width: 5px;\">Cant</td>
                                                                                                <td style=\"\">CUC</td>
                                                                                                <td style=\"\">Importe</td>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            ";
                            // line 1281
                            $context["totalMaterial"] = 0;
                            // line 1282
                            echo "                                                                                            ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "presupuestoExcelComun"), 0, array(), "array"), "materiales"));
                            foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
                                // line 1283
                                echo "                                                                                                <tr>
                                                                                                    <td>";
                                // line 1284
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "material"), "html", null, true);
                                echo "</td>
                                                                                                    <td>";
                                // line 1285
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "um"), "html", null, true);
                                echo "</td>
                                                                                                    <td>";
                                // line 1286
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "cantidad"), 2, ".", ","), "html", null, true);
                                echo "</td>
                                                                                                    <td>";
                                // line 1287
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "precio"), 2, ".", ","), "html", null, true);
                                echo "</td>
                                                                                                    <td>";
                                // line 1288
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "importe"), 2, ".", ","), "html", null, true);
                                echo "</td>
                                                                                                    ";
                                // line 1289
                                $context["totalMaterial"] = ((isset($context["totalMaterial"]) ? $context["totalMaterial"] : $this->getContext($context, "totalMaterial")) + $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "importe"));
                                // line 1290
                                echo "                                                                                                </tr>
                                                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1292
                            echo "                                                                                            <tr>
                                                                                                <td colspan=\"4\"></td>
                                                                                                <td>
                                                                                                    <b>";
                            // line 1295
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalMaterial"]) ? $context["totalMaterial"] : $this->getContext($context, "totalMaterial")), 2, ".", ","), "html", null, true);
                            echo "</b>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        ";
                        }
                        // line 1304
                        echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            ";
                    }
                    // line 1311
                    echo "
                                        ";
                }
                // line 1313
                echo "                                    ";
            }
            // line 1314
            echo "                                </td>
                                <td>
                                    ";
            // line 1316
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCosteo") != "")) {
                // line 1317
                echo "                                        <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#verOferta-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Ver datos de la Oferta\">Ver.</a>
                                        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"verOferta-";
                // line 1318
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"modal fade\">
                                            <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                        <h4 class=\"modal-title\">Oferta </h4>
                                                    </div>
                                                    <section class=\"panel\">
                                                        <header class=\"panel-heading tab-bg-primary \">
                                                            <ul class=\"nav nav-tabs\">
                                                                <li class=\"active\">
                                                                    <a data-toggle=\"tab\" href=\"#datosOferta-";
                // line 1329
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">Datos</a>
                                                                </li>
                                                                ";
                // line 1331
                if (($this->env->getExtension('security')->isGranted("ROLE_PRESUPUESTISTA") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL"))) {
                    // line 1332
                    echo "                                                                    <li>
                                                                        <a data-toggle=\"tab\" href=\"#editarOferta-";
                    // line 1333
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\">Editar</a>
                                                                    </li>
                                                                ";
                }
                // line 1336
                echo "                                                            </ul>
                                                        </header>
                                                        <div class=\"panel-body\">
                                                            <div class=\"tab-content\">
                                                                <div id=\"datosOferta-";
                // line 1340
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"tab-pane active\">
                                                                    <table class=\"table table-striped table-advance table-hover table-bordered\" style=\"text-align: center\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Fecha</th>
                                                                            <th>CUC</th>
                                                                            <th>CUP</th>
                                                                            <th>Ejecución</th>
                                                                            <th>Trabajadores</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            ";
                // line 1353
                $context["montoOfertaCUP"] = ((isset($context["montoOfertaCUP"]) ? $context["montoOfertaCUP"] : $this->getContext($context, "montoOfertaCUP")) + $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUP"));
                // line 1354
                echo "                                                                            ";
                $context["montoOfertaCUC"] = ((isset($context["montoOfertaCUC"]) ? $context["montoOfertaCUC"] : $this->getContext($context, "montoOfertaCUC")) + $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUC"));
                // line 1355
                echo "                                                                            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaElaboracionOferta"), "d.m.Y"), "html", null, true);
                echo "</td>
                                                                            <td>\$";
                // line 1356
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUC"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                            <td>\$";
                // line 1357
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUP"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                            <td>";
                // line 1358
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tiempoEjecucion"), "html", null, true);
                echo "</td>
                                                                            <td>";
                // line 1359
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidadTrabajadores"), "html", null, true);
                echo "</td>

                                                                        </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table class=\"table table-striped table-advance table-hover table-bordered\" style=\"text-align: center\">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td colspan=\"2\" style=\"width: 5px\"><strong>Materiales</strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style=\"width: 5px\"><strong>CUC</strong></td>
                                                                            <td style=\"width: 5px\"><strong>CUP</strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>\$";
                // line 1375
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaMaterialesCUC"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                            <td>\$";
                // line 1376
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaMaterialesCUP"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div id=\"editarOferta-";
                // line 1381
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"tab-pane\">
                                                                    <form class=\"form-horizontal\" method=\"post\" action=\"";
                // line 1382
                echo $this->env->getExtension('routing')->getPath("editarDatosOfertaA");
                echo "\">
                                                                        <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                // line 1383
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">

                                                                        <div class=\"form-group\">
                                                                            <label class=\"col-sm-4 control-label\">Oferta Elaborada</label>
                                                                            <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                                <input style=\"text-align: center\" name=\"fechaElaboradaOferta\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 1388
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaElaboracionOferta"), "d.m.Y"), "html", null, true);
                echo "\">
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <div class=\"col-sm-1\"></div>
                                                                            <div class=\"col-sm-5\">
                                                                                <label class=\"control-label\">Valor Oferta CUP</label>
                                                                                <div class=\"\">
                                                                                    <input style=\"text-align: center\" name=\"valorOfertaCUP\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 1396
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUP"), "html", null, true);
                echo "\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-sm-5\">
                                                                                <label class=\"control-label\">Valor Oferta CUC</label>
                                                                                <div class=\"\">
                                                                                    <input style=\"text-align: center\" name=\"valorOfertaCUC\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 1402
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUC"), "html", null, true);
                echo "\">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <div class=\"col-sm-1\"></div>
                                                                            <div class=\"col-sm-5\">
                                                                                <label class=\"control-label\">Valor Materiales CUP</label>
                                                                                <div class=\"\">
                                                                                    <input style=\"text-align: center\" name=\"valorMaterialesCUP\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 1411
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaMaterialesCUP"), "html", null, true);
                echo "\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-sm-5\">
                                                                                <label class=\"control-label\">Valor Materiales CUC</label>
                                                                                <div class=\"\">
                                                                                    <input style=\"text-align: center\" name=\"valorMaterialesCUC\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 1417
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaMaterialesCUP"), "html", null, true);
                echo "\">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <div class=\"col-sm-1\"></div>
                                                                            <div class=\"col-sm-5\">
                                                                                <label class=\"control-label\">Cantidad Trabajadores</label>
                                                                                <div class=\"\">
                                                                                    <input style=\"text-align: center\" name=\"cantidadTrabajadores\" type=\"number\" class=\"form-control round-input\" value=\"";
                // line 1426
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidadTrabajadores"), "html", null, true);
                echo "\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-sm-5\">
                                                                                <label class=\"control-label\">Tiempo Ejecución(días)</label>
                                                                                <div class=\"\">
                                                                                    <input style=\"text-align: center\" name=\"tiempoEjecucion\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 1432
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tiempoEjecucion"), "html", null, true);
                echo "\">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <div class=\"col-sm-10\">
                                                                                <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 1451
            echo "                                </td>
                                <td>
                                    ";
            // line 1453
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaEntregaCliente") == "")) {
                // line 1454
                echo "                                        ";
                if ((($this->env->getExtension('security')->isGranted("ROLE_COMERCIAL") && (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUP") != 0) || ($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUC") != 0))) && ($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorCosteo") != 0))) {
                    // line 1455
                    echo "                                            <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#insertarFechaEntregaCliente-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" title=\"Insertar la fecha de entrega al cliente\">Ins.</a>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"insertarFechaEntregaCliente-";
                    // line 1456
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Entrega al Cliente </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form class=\"form-horizontal\" method=\"post\" action=\"";
                    // line 1464
                    echo $this->env->getExtension('routing')->getPath("insertarFechaEntregaCliente");
                    echo "\">
                                                                <input hidden=\"hidden\" type=\"text\" name=\"idCliente\" value=\"";
                    // line 1465
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idCliente"), "id"), "html", null, true);
                    echo "\">
                                                                <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                    // line 1466
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">Fecha</label>
                                                                    <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                        <input style=\"text-align: center\" name=\"fechaEntregaCliente\" type=\"text\" class=\"form-control round-input\" required=\"required\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-10\">
                                                                        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                // line 1484
                echo "                                    ";
            } else {
                // line 1485
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaEntregaCliente"), "d.m.Y"), "html", null, true);
                echo "
                                        ";
                // line 1486
                if ($this->env->getExtension('security')->isGranted("ROLE_COMERCIAL")) {
                    // line 1487
                    echo "                                            <a class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#editarEntrega-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" title=\"Editar la fecha de entrega al Cliente\">E</a>
                                            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"editarEntrega-";
                    // line 1488
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" class=\"modal fade\">
                                                <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                            <h4 class=\"modal-title\">Entrega al Cliente </h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form class=\"form-horizontal\" method=\"post\" action=\"";
                    // line 1496
                    echo $this->env->getExtension('routing')->getPath("editarFechaEntregaClienteA");
                    echo "\">
                                                                <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                    // line 1497
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">Fecha</label>
                                                                    <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                        <input style=\"text-align: center\" name=\"fechaEntregaCliente\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                    // line 1501
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaEntregaCliente"), "d.m.Y"), "html", null, true);
                    echo "\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-10\">
                                                                        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                // line 1515
                echo "                                    ";
            }
            // line 1516
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1519
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
         ";
    }

    // line 1527
    public function block_js($context, array $blocks = array())
    {
        // line 1528
        echo "
    <script src=\"";
        // line 1529
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/printThis.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('#print_btn').click(function () {
                \$('#imprimir').printThis();
            });
        });
    </script>

    <script src=\"";
        // line 1538
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 1539
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script>
        \$('#sandbox-container input').datepicker({
            format: \"dd.mm.yyyy\",
            language: \"es\",
            orientation: \"bottom auto\",
            autoclose: true,
            todayHighlight: true
        });
    </script>

    ";
        // line 1551
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 1552
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/dataTables.fixedColumns.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script>
        \$(document).ready(function() {
            \$('#example').DataTable( {
                \"scrollY\":        \"1200px\",
                \"scrollX\":        true,
                /*\"scrollCollapse\": true,*/
                \"paging\":         false,
                \"order\": [[ 1, \"asc\" ]],
                /*fixedColumns:   {
                    leftColumns: 2
                }*/
            } );
        } );
    </script>

    ";
        // line 1569
        echo "    <script>
        \$(function () {
            \$(\"table\").stickyTableHeaders();
        });

        /*! Copyright (c) 2011 by Jonas Mosbech - https://github.com/jmosbech/StickyTableHeaders
         MIT license info: https://github.com/jmosbech/StickyTableHeaders/blob/master/license.txt */

        ;
        (function (\$, window, undefined) {
            'use strict';

            var name = 'stickyTableHeaders',
                    id = 0,
                    defaults = {
                        fixedOffset: 0,
                        leftOffset: 0,
                        marginTop: 0,
                        scrollableArea: window
                    };

            function Plugin(el, options) {
                // To avoid scope issues, use 'base' instead of 'this'
                // to reference this class from internal events and functions.
                var base = this;

                // Access to jQuery and DOM versions of element
                base.\$el = \$(el);
                base.el = el;
                base.id = id++;
                base.\$window = \$(window);
                base.\$document = \$(document);

                // Listen for destroyed, call teardown
                base.\$el.bind('destroyed',
                        \$.proxy(base.teardown, base));

                // Cache DOM refs for performance reasons
                base.\$clonedHeader = null;
                base.\$originalHeader = null;

                // Keep track of state
                base.isSticky = false;
                base.hasBeenSticky = false;
                base.leftOffset = null;
                base.topOffset = null;

                base.init = function () {
                    base.\$el.each(function () {
                        var \$this = \$(this);

                        // remove padding on <table> to fix issue #7
                        \$this.css('padding', 0);

                        base.\$originalHeader = \$('thead:first', this);
                        base.\$clonedHeader = base.\$originalHeader.clone();
                        \$this.trigger('clonedHeader.' + name, [base.\$clonedHeader]);

                        base.\$clonedHeader.addClass('tableFloatingHeader');
                        base.\$clonedHeader.css('display', 'none');

                        base.\$originalHeader.addClass('tableFloatingHeaderOriginal');

                        base.\$originalHeader.after(base.\$clonedHeader);

                        base.\$printStyle = \$('<style type=\"text/css\" media=\"print\">' +
                                '.tableFloatingHeader{display:none !important;}' +
                                '.tableFloatingHeaderOriginal{position:static !important;}' +
                                '</style>');
                        \$('head').append(base.\$printStyle);
                    });

                    base.setOptions(options);
                    base.updateWidth();
                    base.toggleHeaders();
                    base.bind();
                };

                base.destroy = function () {
                    base.\$el.unbind('destroyed', base.teardown);
                    base.teardown();
                };

                base.teardown = function () {
                    if (base.isSticky) {
                        base.\$originalHeader.css('position', 'static');
                    }
                    \$.removeData(base.el, 'plugin_' + name);
                    base.unbind();

                    base.\$clonedHeader.remove();
                    base.\$originalHeader.removeClass('tableFloatingHeaderOriginal');
                    base.\$originalHeader.css('visibility', 'visible');
                    base.\$printStyle.remove();

                    base.el = null;
                    base.\$el = null;
                };

                base.bind = function () {
                    base.\$scrollableArea.on('scroll.' + name, base.toggleHeaders);
                    if (!base.isWindowScrolling) {
                        base.\$window.on('scroll.' + name + base.id, base.setPositionValues);
                        base.\$window.on('resize.' + name + base.id, base.toggleHeaders);
                    }
                    base.\$scrollableArea.on('resize.' + name, base.toggleHeaders);
                    base.\$scrollableArea.on('resize.' + name, base.updateWidth);
                };

                base.unbind = function () {
                    // unbind window events by specifying handle so we don't remove too much
                    base.\$scrollableArea.off('.' + name, base.toggleHeaders);
                    if (!base.isWindowScrolling) {
                        base.\$window.off('.' + name + base.id, base.setPositionValues);
                        base.\$window.off('.' + name + base.id, base.toggleHeaders);
                    }
                    base.\$scrollableArea.off('.' + name, base.updateWidth);
                };

                base.toggleHeaders = function () {
                    if (base.\$el) {
                        base.\$el.each(function () {
                            var \$this = \$(this),
                                    newLeft,
                                    newTopOffset = base.isWindowScrolling ? (
                                            isNaN(base.options.fixedOffset) ? base.options.fixedOffset.outerHeight() : base.options.fixedOffset) : base.\$scrollableArea.offset().top + (!isNaN(base.options.fixedOffset) ? base.options.fixedOffset : 0),
                                    offset = \$this.offset(),

                                    scrollTop = base.\$scrollableArea.scrollTop() + newTopOffset,
                                    scrollLeft = base.\$scrollableArea.scrollLeft(),

                                    scrolledPastTop = base.isWindowScrolling ? scrollTop > offset.top : newTopOffset > offset.top,
                                    notScrolledPastBottom = (base.isWindowScrolling ? scrollTop : 0) < (offset.top + \$this.height() - base.\$clonedHeader.height() - (base.isWindowScrolling ? 0 : newTopOffset));

                            if (scrolledPastTop && notScrolledPastBottom) {
                                newLeft = offset.left - scrollLeft + base.options.leftOffset;
                                base.\$originalHeader.css({
                                    'position': 'fixed',
                                    'margin-top': base.options.marginTop,
                                    'left': newLeft,
                                    'z-index': 3 // #18: opacity bug
                                });
                                base.leftOffset = newLeft;
                                base.topOffset = newTopOffset;
                                base.\$clonedHeader.css('display', '');
                                if (!base.isSticky) {
                                    base.isSticky = true;
                                    // make sure the width is correct: the user might have resized the browser while in static mode
                                    base.updateWidth();
                                }
                                base.setPositionValues();
                            } else if (base.isSticky) {
                                base.\$originalHeader.css('position', 'static');
                                base.\$clonedHeader.css('display', 'none');
                                base.isSticky = false;
                                base.resetWidth(\$('td,th', base.\$clonedHeader), \$('td,th', base.\$originalHeader));
                            }
                        });
                    }
                };

                base.setPositionValues = function () {
                    var winScrollTop = base.\$window.scrollTop(),
                            winScrollLeft = base.\$window.scrollLeft();
                    if (!base.isSticky || winScrollTop < 0 || winScrollTop + base.\$window.height() > base.\$document.height() || winScrollLeft < 0 || winScrollLeft + base.\$window.width() > base.\$document.width()) {
                        return;
                    }
                    base.\$originalHeader.css({
                        'top': base.topOffset - (base.isWindowScrolling ? 0 : winScrollTop),
                        'left': base.leftOffset - (base.isWindowScrolling ? 0 : winScrollLeft)
                    });
                };

                base.updateWidth = function () {
                    if (!base.isSticky) {
                        return;
                    }
                    // Copy cell widths from clone
                    if (!base.\$originalHeaderCells) {
                        base.\$originalHeaderCells = \$('th,td', base.\$originalHeader);
                    }
                    if (!base.\$clonedHeaderCells) {
                        base.\$clonedHeaderCells = \$('th,td', base.\$clonedHeader);
                    }
                    var cellWidths = base.getWidth(base.\$clonedHeaderCells);
                    base.setWidth(cellWidths, base.\$clonedHeaderCells, base.\$originalHeaderCells);

                    // Copy row width from whole table
                    base.\$originalHeader.css('width', base.\$clonedHeader.width());
                };

                base.getWidth = function (\$clonedHeaders) {
                    var widths = [];
                    \$clonedHeaders.each(function (index) {
                        var width, \$this = \$(this);

                        if (\$this.css('box-sizing') === 'border-box') {
                            width = \$this[0].getBoundingClientRect().width; // #39: border-box bug
                        } else {
                            var \$origTh = \$('th', base.\$originalHeader);
                            if (\$origTh.css('border-collapse') === 'collapse') {
                                if (window.getComputedStyle) {
                                    width = parseFloat(window.getComputedStyle(this, null).width);
                                } else {
                                    // ie8 only
                                    var leftPadding = parseFloat(\$this.css('padding-left'));
                                    var rightPadding = parseFloat(\$this.css('padding-right'));
                                    // Needs more investigation - this is assuming constant border around this cell and it's neighbours.
                                    var border = parseFloat(\$this.css('border-width'));
                                    width = \$this.outerWidth() - leftPadding - rightPadding - border;
                                }
                            } else {
                                width = \$this.width();
                            }
                        }

                        widths[index] = width;
                    });
                    return widths;
                };

                base.setWidth = function (widths, \$clonedHeaders, \$origHeaders) {
                    \$clonedHeaders.each(function (index) {
                        var width = widths[index];
                        \$origHeaders.eq(index).css({
                            'min-width': width,
                            'max-width': width
                        });
                    });
                };

                base.resetWidth = function (\$clonedHeaders, \$origHeaders) {
                    \$clonedHeaders.each(function (index) {
                        var \$this = \$(this);
                        \$origHeaders.eq(index).css({
                            'min-width': \$this.css('min-width'),
                            'max-width': \$this.css('max-width')
                        });
                    });
                };

                base.setOptions = function (options) {
                    base.options = \$.extend({}, defaults, options);
                    base.\$scrollableArea = \$(base.options.scrollableArea);
                    base.isWindowScrolling = base.\$scrollableArea[0] === window;
                };

                base.updateOptions = function (options) {
                    base.setOptions(options);
                    // scrollableArea might have changed
                    base.unbind();
                    base.bind();
                    base.updateWidth();
                    base.toggleHeaders();
                };

                // Run initializer
                base.init();
            }

            // A plugin wrapper around the constructor,
            // preventing against multiple instantiations
            \$.fn[name] = function (options) {
                return this.each(function () {
                    var instance = \$.data(this, 'plugin_' + name);
                    if (instance) {
                        if (typeof options === 'string') {
                            instance[options].apply(instance);
                        } else {
                            instance.updateOptions(options);
                        }
                    } else if (options !== 'destroy') {
                        \$.data(this, 'plugin_' + name, new Plugin(this, options));
                    }
                });
            };

        })(jQuery, window);
    </script>

";
    }

    public function getTemplateName()
    {
        return "OfertasBundle:Ofertas:solicitudes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2292 => 1569,  2273 => 1552,  2268 => 1551,  2254 => 1539,  2250 => 1538,  2238 => 1529,  2235 => 1528,  2232 => 1527,  2223 => 1519,  2215 => 1516,  2212 => 1515,  2195 => 1501,  2188 => 1497,  2184 => 1496,  2173 => 1488,  2168 => 1487,  2166 => 1486,  2161 => 1485,  2158 => 1484,  2137 => 1466,  2133 => 1465,  2129 => 1464,  2118 => 1456,  2113 => 1455,  2110 => 1454,  2108 => 1453,  2104 => 1451,  2082 => 1432,  2073 => 1426,  2061 => 1417,  2052 => 1411,  2040 => 1402,  2031 => 1396,  2020 => 1388,  2012 => 1383,  2008 => 1382,  2004 => 1381,  1996 => 1376,  1992 => 1375,  1973 => 1359,  1969 => 1358,  1965 => 1357,  1961 => 1356,  1956 => 1355,  1953 => 1354,  1951 => 1353,  1935 => 1340,  1929 => 1336,  1923 => 1333,  1920 => 1332,  1918 => 1331,  1913 => 1329,  1899 => 1318,  1894 => 1317,  1892 => 1316,  1888 => 1314,  1885 => 1313,  1881 => 1311,  1872 => 1304,  1860 => 1295,  1855 => 1292,  1848 => 1290,  1846 => 1289,  1842 => 1288,  1838 => 1287,  1834 => 1286,  1830 => 1285,  1826 => 1284,  1823 => 1283,  1818 => 1282,  1816 => 1281,  1803 => 1270,  1797 => 1266,  1782 => 1254,  1774 => 1249,  1764 => 1242,  1758 => 1238,  1747 => 1216,  1745 => 1215,  1741 => 1214,  1737 => 1212,  1729 => 1206,  1723 => 1205,  1717 => 1204,  1708 => 1201,  1704 => 1200,  1700 => 1199,  1696 => 1198,  1692 => 1197,  1688 => 1196,  1685 => 1195,  1681 => 1194,  1675 => 1191,  1670 => 1189,  1666 => 1188,  1663 => 1187,  1657 => 1186,  1654 => 1185,  1649 => 1184,  1644 => 1183,  1641 => 1182,  1637 => 1181,  1623 => 1169,  1617 => 1165,  1602 => 1153,  1594 => 1148,  1584 => 1141,  1578 => 1137,  1567 => 1114,  1565 => 1113,  1561 => 1112,  1553 => 1106,  1546 => 1102,  1541 => 1099,  1538 => 1098,  1531 => 1094,  1526 => 1091,  1524 => 1090,  1519 => 1088,  1515 => 1087,  1510 => 1084,  1504 => 1081,  1500 => 1080,  1495 => 1077,  1493 => 1076,  1488 => 1074,  1484 => 1073,  1479 => 1070,  1473 => 1067,  1469 => 1066,  1464 => 1063,  1462 => 1062,  1457 => 1060,  1453 => 1059,  1448 => 1056,  1442 => 1053,  1438 => 1052,  1434 => 1051,  1430 => 1049,  1428 => 1048,  1423 => 1046,  1419 => 1045,  1414 => 1042,  1408 => 1039,  1404 => 1038,  1399 => 1035,  1396 => 1034,  1390 => 1031,  1386 => 1030,  1381 => 1027,  1378 => 1026,  1372 => 1023,  1368 => 1022,  1363 => 1019,  1360 => 1018,  1354 => 1015,  1350 => 1014,  1345 => 1011,  1342 => 1010,  1336 => 1007,  1332 => 1006,  1327 => 1003,  1324 => 1002,  1318 => 999,  1314 => 998,  1309 => 995,  1307 => 994,  1290 => 980,  1280 => 973,  1274 => 970,  1268 => 967,  1259 => 961,  1254 => 960,  1237 => 946,  1229 => 941,  1214 => 929,  1169 => 887,  1164 => 886,  1162 => 885,  1071 => 797,  1067 => 796,  1056 => 788,  1051 => 787,  1048 => 786,  1017 => 758,  1006 => 750,  999 => 746,  995 => 745,  991 => 744,  983 => 739,  979 => 738,  974 => 737,  972 => 736,  958 => 725,  952 => 721,  946 => 718,  943 => 717,  941 => 716,  936 => 714,  922 => 703,  917 => 702,  915 => 701,  911 => 699,  908 => 698,  902 => 696,  885 => 682,  878 => 678,  874 => 677,  863 => 669,  858 => 667,  853 => 666,  850 => 665,  847 => 664,  844 => 663,  824 => 643,  820 => 642,  809 => 634,  804 => 633,  801 => 632,  799 => 631,  794 => 629,  790 => 628,  787 => 627,  784 => 626,  778 => 624,  772 => 622,  762 => 620,  756 => 619,  753 => 618,  735 => 603,  727 => 598,  714 => 588,  707 => 584,  696 => 576,  689 => 571,  674 => 569,  670 => 568,  660 => 561,  656 => 560,  645 => 552,  642 => 551,  636 => 549,  630 => 547,  620 => 545,  614 => 544,  612 => 543,  607 => 542,  605 => 541,  601 => 539,  589 => 530,  573 => 517,  568 => 516,  566 => 515,  561 => 513,  558 => 512,  552 => 510,  546 => 507,  541 => 506,  539 => 505,  535 => 503,  527 => 501,  513 => 490,  485 => 465,  478 => 463,  473 => 462,  471 => 461,  463 => 459,  458 => 458,  455 => 457,  452 => 456,  450 => 455,  427 => 434,  421 => 430,  415 => 427,  412 => 426,  410 => 425,  407 => 424,  389 => 409,  233 => 255,  218 => 253,  214 => 252,  184 => 224,  182 => 223,  178 => 221,  175 => 184,  125 => 136,  112 => 134,  108 => 133,  97 => 125,  85 => 115,  83 => 114,  80 => 113,  77 => 74,  72 => 68,  70 => 25,  68 => 24,  65 => 23,  60 => 20,  57 => 19,  39 => 4,  34 => 3,  31 => 2,);
    }
}
