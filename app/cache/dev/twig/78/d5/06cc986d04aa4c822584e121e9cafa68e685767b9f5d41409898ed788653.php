<?php

/* OfertasBundle:Ofertas:ofertas.html.twig */
class __TwigTemplate_78d506cc986d04aa4c822584e121e9cafa68e685767b9f5d41409898ed788653 extends Twig_Template
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
    </style>
";
    }

    // line 10
    public function block_encabezado($context, array $blocks = array())
    {
        // line 11
        echo "          Ofertas
      ";
    }

    // line 14
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 15
        echo "             ";
        // line 16
        echo "            ";
        // line 59
        echo "

             <div class=\"row\">
                 ";
        // line 65
        echo "                 ";
        if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") == "operaza"))) {
            // line 66
            echo "                     <div class=\"col-lg-1\">
                         <a style=\"width: 72px\" class=\"btn btn-success tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#resumenOfertas\" title=\"Sacar resumen de ofertas\">Informe</a>
                         <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"resumenOfertas\" class=\"modal fade\">
                             <div class=\"modal-dialog\" style=\"text-align: center;width: 400px; height: auto\">
                                 <div class=\"modal-content\">
                                     <div class=\"modal-header\">
                                         <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                         <h4 class=\"modal-title\">Fechas</h4>
                                     </div>
                                     <div class=\"modal-body\">
                                         <form>
                                             <div class=\"row\" style=\"text-align: center\">
                                                 <div class=\"col-lg-1\"></div>
                                                 <div id=\"sandbox-container\" class=\"col-lg-5\">
                                                     <label>Fecha Inicial</label>
                                                     <input style=\"text-align: center\" type=\"text\" class=\"form-control round-input\" name=\"fechaInicio\" required=\"required\"/>
                                                 </div>
                                                 <div id=\"sandbox-container\" class=\"col-lg-5\">
                                                     <label>Fecha Final</label>
                                                     <input style=\"text-align: center\" type=\"text\" class=\"form-control round-input\" name=\"fechaFin\" required=\"required\"/>
                                                 </div>
                                             </div>

                                             <br>
                                             <div class=\"row\">
                                                 <div class=\"col-lg-1\"></div>
                                                 <div class=\"col-lg-2\">
                                                     <button type=\"submit\" class=\"btn btn-primary\" formmethod=\"post\" formaction=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("generarResumenOfertas");
            echo "\" formenctype=\"multipart/form-data\">Enviar</button>
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
        // line 103
        echo "
                 <div class=\"col-lg-1\">
                     <a style=\"width: 72px\" class=\"btn btn-success tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#totalSolicitud\" title=\"Ver total ofertado\">Ofertado</a>
                     <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"totalSolicitud\" class=\"modal fade\">
                         <div class=\"modal-dialog\" style=\"text-align: center;width: 400px; height: auto\">
                             <div class=\"modal-content\">
                                 <div class=\"modal-header\">
                                     <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                     <h4 class=\"modal-title\">Ofertado</h4>
                                 </div>
                                 <div class=\"modal-body\">
                                     <table class=\"table table-striped table-advance table-hover table-bordered\" style=\"text-align: center\">
                                         <tbody>
                                         <tr>
                                             <td rowspan=\"2\" style=\"width: 5px;\">Costeo</td>
                                             <td colspan=\"2\" style=\"width: 5px;\">Oferta</td>
                                         </tr>
                                         <tr>
                                             <td>CUP</td>
                                             <td>CUC</td>
                                         </tr>
                                         <tr>
                                             <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montoCosteo"]) ? $context["montoCosteo"] : $this->getContext($context, "montoCosteo")), 2, ".", ","), "html", null, true);
        echo "</td>
                                             <td>
                                                 <b></b>";
        // line 127
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montoOfertaCUP"]) ? $context["montoOfertaCUP"] : $this->getContext($context, "montoOfertaCUP")), 2, ".", ","), "html", null, true);
        echo "
                                             </td>
                                             <td>
                                                 <b></b>";
        // line 130
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montoOfertaCUC"]) ? $context["montoOfertaCUC"] : $this->getContext($context, "montoOfertaCUC")), 2, ".", ","), "html", null, true);
        echo "
                                             </td>
                                         </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class=\"col-lg-1\">
                     ";
        // line 142
        if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_PRESUPUESTISTA")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") == "yenised"))) {
            // line 143
            echo "                         <a style=\"width: 72px\" class=\"btn btn-success tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#insertarReoferta\" title=\"Reofertar\">Reofer.</a>
                         <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"insertarReoferta\" class=\"modal fade\">
                             <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                 <div class=\"modal-content\">
                                     <div class=\"modal-header\">
                                         <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                         <h4 class=\"modal-title\">Reoferta </h4>
                                     </div>
                                     <div class=\"modal-body\">
                                         <form class=\"form-horizontal\" method=\"post\" action=\"";
            // line 152
            echo $this->env->getExtension('routing')->getPath("insertarReofertaR");
            echo "\">
                                             <div class=\"row\" style=\"text-align: center\">
                                                 <div class=\"col-lg-2\"></div>
                                                 <div class=\"col-lg-8\">
                                                     <label>Solicitud</label>
                                                     <select  style=\"text-align: center\" name=\"idSolicitud\" class=\"form-control round-input\" required=\"required\">
                                                         <option></option>
                                                         ";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
            foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
                // line 160
                echo "                                                             <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "codigo"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                echo "</option>
                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                                                     </select>
                                                 </div>
                                             </div>
                                             <div class=\"row\" style=\"text-align: center\">
                                                 <div class=\"col-lg-2\"></div>
                                                 <div class=\"col-lg-8\">
                                                 <label>Descripción</label>
                                                     <textarea style=\"text-align: center\" name=\"descripcion\" class=\"form-control\"></textarea>
                                                 </div>
                                             </div>
                                             <br>
                                             <div class=\"form-group\">
                                                 <div class=\"col-lg-2\"></div>
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
        }
        // line 185
        echo "                 </div>

                 <div class=\"col-lg-1\">
                     ";
        // line 188
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_PRESUPUESTISTA"))) {
            // line 189
            echo "                         <a style=\"width: 72px\" class=\"btn btn-danger tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#generarCaratula\" title=\"Generar carátula de Oferta\">Carátula</a>
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
                                                     <div class=\"col-lg-12\">
                                                         <form>
                                                             <div class=\"row\" style=\"text-align: center\">
                                                                 <div class=\"col-lg-3\"></div>
                                                                 <div class=\"col-lg-6\">
                                                                     <label>Solicitud</label>
                                                                     <select  style=\"text-align: center\" name=\"idSolicitud\" class=\"form-control round-input\" required=\"required\">
                                                                         <option></option>
                                                                         ";
            // line 209
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
            foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
                // line 210
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
            // line 212
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
            // line 366
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
                     ";
        }
        // line 380
        echo "                 </div>
             </div>

             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <table ";
        // line 385
        echo " class=\"table table-striped table-advance table-hover table-bordered display\" style=\"text-align: center\">
                         <thead>
                         <tr style=\"text-align: center; background-color: #EEEEEE\">
                             ";
        // line 388
        if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") == "operaza"))) {
            // line 389
            echo "                                 <td rowspan=\"2\" style=\"width: 5px;\">Prior.</td>
                             ";
        }
        // line 391
        echo "                             <td rowspan=\"2\">Cliente</td>
                             <td rowspan=\"2\" style=\"width: 50px;\">No</td>
                             <td rowspan=\"2\">Obra</td>
                             <td rowspan=\"2\">Dirección</td>
                             <td rowspan=\"2\">Descripción</td>
                            ";
        // line 398
        echo "                             <td rowspan=\"2\" style=\"width: 5px;\">Costeo</td>
                             <td rowspan=\"2\" style=\"width: 5px;\">Oferta</td>
                             <td rowspan=\"2\">Entrega</td>
                             <td rowspan=\"2\">Estado</td>
                         </tr>
                         ";
        // line 407
        echo "                         </thead>
                         <tbody>

                         ";
        // line 410
        $context["montoCosteo"] = 0;
        // line 411
        echo "                         ";
        $context["montoOfertaCUP"] = 0;
        // line 412
        echo "                         ";
        $context["montoOfertaCUC"] = 0;
        // line 413
        echo "                         ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 414
            echo "                             <tr>
                                 ";
            // line 415
            if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COMERCIAL")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") == "operaza"))) {
                // line 416
                echo "                                     <td>
                                         <a style=\"color: #797979\" class=\"tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#verPrioridad-";
                // line 417
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Prioridad de la Oferta\">
                                             ";
                // line 418
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prioridad"), "html", null, true);
                echo "
                                         </a>
                                         <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"verPrioridad-";
                // line 420
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"modal fade\">
                                             <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                 <div class=\"modal-content\">
                                                     <div class=\"modal-header\">
                                                         <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                         <h4 class=\"modal-title\">Prioridad </h4>
                                                     </div>
                                                     <section class=\"panel\">
                                                         <header class=\"panel-heading tab-bg-primary \">
                                                             <ul class=\"nav nav-tabs\">
                                                                 <li class=\"active\">
                                                                      <a data-toggle=\"tab\" href=\"#editarPrior-";
                // line 431
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">Editar</a>
                                                                  </li>
                                                             </ul>
                                                         </header>
                                                         <div class=\"panel-body\">
                                                             <div class=\"tab-content\">
                                                                 <div id=\"editarPrior-";
                // line 437
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"tab-pane active\">
                                                                     <form class=\"form-horizontal\" method=\"post\" action=\"";
                // line 438
                echo $this->env->getExtension('routing')->getPath("editarPrioridadOferta");
                echo "\">
                                                                         <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                // line 439
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">
                                                                         <div class=\"form-group\">
                                                                             <div class=\"col-sm-2\"></div>
                                                                             <div class=\"col-sm-5\">
                                                                                 <label class=\"control-label\"></label>
                                                                                 <div class=\"\">
                                                                                     <select name=\"prioridad\" class=\"form-control round-input\" required=\"required\">
                                                                                         <option></option>
                                                                                         <option ";
                // line 447
                if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prioridad") == 1)) {
                    echo "selected ";
                }
                echo " style=\"text-align: center\" value=\"1\">1</option>
                                                                                         ";
                // line 451
                echo "                                                                                         <option ";
                if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prioridad") == 5)) {
                    echo "selected ";
                }
                echo " style=\"text-align: center\" value=\"5\">5</option>
                                                                                         ";
                // line 456
                echo "                                                                                         <option ";
                if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prioridad") == 10)) {
                    echo "selected ";
                }
                echo " style=\"text-align: center\" value=\"10\">10</option>
                                                                                     </select>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <div class=\"form-group\">
                                                                             <div class=\"col-sm-2\"></div>
                                                                             <div class=\"col-sm-1\">
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
                                     </td>
                                 ";
            }
            // line 477
            echo "                                 <td ";
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prioridad") == 10)) {
                echo "style=\"background-color: #fc8904\" ";
            }
            echo ">
                                     ";
            // line 478
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idCliente"), "cliente"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idCliente"), "empresa"), "html", null, true);
            echo "
                                 </td>
                                 <td ";
            // line 480
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prioridad") == 10)) {
                echo "style=\"background-color: #fc8904\" ";
            }
            echo ">
                                     ";
            // line 481
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tieneCaratula") == true)) {
                // line 482
                echo "                                         <a style=\"color: #797979;\" class=\"tooltips\" data-placement=\"top\" target=\"_blank\" data-toggle=\"modal\" href=\"http://192.168.1.47/ofertas/web/Oferta ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "codigo"), "html", null, true);
                echo ".docx\" title=\"Ver Carátula Generada\">
                                             ";
                // line 483
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "codigo"), "html", null, true);
                echo "
                                         </a>
                                     ";
            } else {
                // line 486
                echo "                                         ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "codigo"), "html", null, true);
                echo "
                                     ";
            }
            // line 488
            echo "                                 </td>
                                 <td>";
            // line 489
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "nombreObra"), "html", null, true);
            echo "</td>
                                 <td>
                                     ";
            // line 491
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "direccionObra") != "")) {
                // line 492
                echo "                                         <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#verDireccion-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Ver dirección de la Obra\">Ver</a>
                                         <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"verDireccion-";
                // line 493
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"modal fade\">
                                             <div class=\"modal-dialog\" style=\"text-align: center;width: 650px; height: auto\">
                                                 <div class=\"modal-content\">
                                                     <div class=\"modal-header\">
                                                         <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                         <h4 class=\"modal-title\">Dirección </h4>
                                                     </div>
                                                     <div class=\"modal-body\">
                                                         <form class=\"form-horizontal\" method=\"post\" action=\"#\">
                                                             <div class=\"row\">
                                                                 <div class=\"col-lg-1\"></div>
                                                                 <div class=\"col-lg-10\">
                                                                     <textarea style=\"text-align: center\" name=\"direccionObra\" class=\"form-control\" disabled=\"disabled\">";
                // line 505
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
            // line 514
            echo "                                 </td>
                                 <td>
                                     ";
            // line 516
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "esReoferta") == true)) {
                // line 517
                echo "                                         <a style=\"color: #797979\" class=\"tooltips\" data-placement=\"top\" data-toggle=\"modal\" title=\"
                                        ";
                // line 518
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
                foreach ($context['_seq'] as $context["_key"] => $context["sol"]) {
                    if (($this->getAttribute((isset($context["sol"]) ? $context["sol"] : $this->getContext($context, "sol")), "id") == $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "idsolicitudoriginal"))) {
                        // line 519
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sol"]) ? $context["sol"] : $this->getContext($context, "sol")), "descripcion"), "html", null, true);
                        echo "
                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sol'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 521
                echo "                                         \">
                                             ";
                // line 522
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                echo "
                                         </a>
                                     ";
            } else {
                // line 525
                echo "                                         ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "descripcion"), "html", null, true);
                echo "
                                     ";
            }
            // line 527
            echo "                                 </td>
                                 ";
            // line 533
            echo "                                 <td>
                                     ";
            // line 534
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCosteo") != "")) {
                // line 535
                echo "                                         <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#verCosteo-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Ver datos del costeo\">Ver.</a>
                                         <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"verCosteo-";
                // line 536
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
                // line 547
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">Datos</a>
                                                                 </li>
                                                                ";
                // line 554
                echo "                                                             </ul>
                                                         </header>
                                                         <div class=\"panel-body\">
                                                             <div class=\"tab-content\">
                                                                 <div id=\"datos-";
                // line 558
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
                // line 569
                $context["montoCosteo"] = ((isset($context["montoCosteo"]) ? $context["montoCosteo"] : $this->getContext($context, "montoCosteo")) + $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorCosteo"));
                // line 570
                echo "                                                                             <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCosteo"), "d.m.Y"), "html", null, true);
                echo "</td>
                                                                             <td>\$";
                // line 571
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorCosteo"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                             <td>";
                // line 572
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tipoMoneda"), "html", null, true);
                echo "</td>
                                                                         </tr>
                                                                         </tbody>
                                                                     </table>
                                                                 </div>
                                                                 <div id=\"editar-";
                // line 577
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"tab-pane\">
                                                                     <form class=\"form-horizontal\" method=\"post\" action=\"";
                // line 578
                echo $this->env->getExtension('routing')->getPath("editarCosteoA");
                echo "\">
                                                                         <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                // line 579
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">
                                                                         <div class=\"form-group\">
                                                                             <label class=\"col-sm-4 control-label\">Fecha Costeo</label>
                                                                             <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                                 <input style=\"text-align: center\" name=\"fechaCosteo\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 583
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
                // line 591
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
                // line 619
                echo "                                         ";
                if ($this->env->getExtension('security')->isGranted("ROLE_PRESUPUESTISTA")) {
                    // line 620
                    echo "                                             <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#insertarCosteo-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" title=\"Insertar datos del costeo\">Ins.</a>
                                             <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"insertarCosteo-";
                    // line 621
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
                    // line 629
                    echo $this->env->getExtension('routing')->getPath("insertarCosteoA");
                    echo "\">
                                                                 <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                    // line 630
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
                }
                // line 718
                echo "                                     ";
            }
            // line 719
            echo "                                 </td>
                                 <td>
                                     ";
            // line 721
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaCosteo") != "")) {
                // line 722
                echo "                                         <a style=\"width: 50px\" class=\"btn btn-success btnNuevo tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#verOferta-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" title=\"Ver datos de la Oferta\">Ver.</a>
                                         <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"verOferta-";
                // line 723
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
                // line 734
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">Datos</a>
                                                                 </li>
                                                                ";
                // line 741
                echo "                                                             </ul>
                                                         </header>
                                                         <div class=\"panel-body\">
                                                             <div class=\"tab-content\">
                                                                 <div id=\"datosOferta-";
                // line 745
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
                // line 758
                $context["montoOfertaCUP"] = ((isset($context["montoOfertaCUP"]) ? $context["montoOfertaCUP"] : $this->getContext($context, "montoOfertaCUP")) + $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUP"));
                // line 759
                echo "                                                                             ";
                $context["montoOfertaCUC"] = ((isset($context["montoOfertaCUC"]) ? $context["montoOfertaCUC"] : $this->getContext($context, "montoOfertaCUC")) + $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUC"));
                // line 760
                echo "                                                                             <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaElaboracionOferta"), "d.m.Y"), "html", null, true);
                echo "</td>
                                                                             <td>\$";
                // line 761
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUC"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                             <td>\$";
                // line 762
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUP"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                             <td>";
                // line 763
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "tiempoEjecucion"), "html", null, true);
                echo "</td>
                                                                             <td>";
                // line 764
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
                // line 780
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaMaterialesCUC"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                             <td>\$";
                // line 781
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaMaterialesCUP"), 2, ".", ","), "html", null, true);
                echo "</td>
                                                                         </tr>
                                                                         </tbody>
                                                                     </table>
                                                                 </div>
                                                                 <div id=\"editarOferta-";
                // line 786
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"tab-pane\">
                                                                     <form class=\"form-horizontal\" method=\"post\" action=\"";
                // line 787
                echo $this->env->getExtension('routing')->getPath("editarDatosOfertaA");
                echo "\">
                                                                         <input hidden=\"hidden\" type=\"text\" name=\"idSolicitud\" value=\"";
                // line 788
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\">

                                                                         <div class=\"form-group\">
                                                                             <label class=\"col-sm-4 control-label\">Oferta Elaborada</label>
                                                                             <div id=\"sandbox-container\" class=\"col-sm-6\">
                                                                                 <input style=\"text-align: center\" name=\"fechaElaboradaOferta\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 793
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
                // line 801
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaCUP"), "html", null, true);
                echo "\">
                                                                                 </div>
                                                                             </div>
                                                                             <div class=\"col-sm-5\">
                                                                                 <label class=\"control-label\">Valor Oferta CUC</label>
                                                                                 <div class=\"\">
                                                                                     <input style=\"text-align: center\" name=\"valorOfertaCUC\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 807
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
                // line 816
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "valorOfertaMaterialesCUP"), "html", null, true);
                echo "\">
                                                                                 </div>
                                                                             </div>
                                                                             <div class=\"col-sm-5\">
                                                                                 <label class=\"control-label\">Valor Materiales CUC</label>
                                                                                 <div class=\"\">
                                                                                     <input style=\"text-align: center\" name=\"valorMaterialesCUC\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 822
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
                // line 831
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidadTrabajadores"), "html", null, true);
                echo "\">
                                                                                 </div>
                                                                             </div>
                                                                             <div class=\"col-sm-5\">
                                                                                 <label class=\"control-label\">Tiempo Ejecución(días)</label>
                                                                                 <div class=\"\">
                                                                                     <input style=\"text-align: center\" name=\"tiempoEjecucion\" type=\"text\" class=\"form-control round-input\" value=\"";
                // line 837
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
            // line 856
            echo "                                 </td>
                                 <td>
                                     ";
            // line 858
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fechaEntregaCliente"), "d.m.Y"), "html", null, true);
            echo "
                                 </td>
                                 <td style=\"text-align: center\">
                                     ";
            // line 861
            if ((($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "aprobado") == false) && ($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "rechazado") == false))) {
                // line 862
                echo "                                         ";
                if ($this->env->getExtension('security')->isGranted("ROLE_COMERCIAL")) {
                    // line 863
                    echo "                                             <div class=\"row\" style=\"text-align: center\">
                                                 <div class=\"col-lg-1\">
                                                     <a style=\"\" class=\"btn btn-success btnNuevo tooltips\" data-toggle=\"modal\" href=\"#aceptarSolicitud-";
                    // line 865
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" title=\"Dar como aceptada la solicitud\">A.</a>
                                                     <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"aceptarSolicitud-";
                    // line 866
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" class=\"modal fade\">
                                                         <div class=\"modal-dialog\" style=\"text-align: center\">
                                                             <div class=\"modal-content\">
                                                                 <div class=\"modal-header\">
                                                                     <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                                     <h4 class=\"modal-title\">Solicitud Aceptada</h4>
                                                                 </div>
                                                                 <div class=\"alert alert-block alert-danger fade in\" style=\"text-align: center\">
                                                                     <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                                         <i class=\"icon-remove\"></i>
                                                                     </button>
                                                                     <strong>¿ Está seguro que desea dar como aceptada la solicitud?</strong><br><br>
                                                                     <form role=\"form\" style=\"text-align: center\">
                                                                         <div class=\"form-group\">
                                                                             <div class=\"row\">
                                                                                 <div class=\"col-lg-3\"></div>
                                                                                 <div class=\"col-lg-6\">
                                                                                     <button class=\"btn btn-info\" formaction=\"";
                    // line 883
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aceptarSolicitud", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"))), "html", null, true);
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
                                                 </div>
                                                 <div class=\"col-lg-1\">
                                                     <a style=\"\" class=\"btn btn-success btnNuevo tooltips\" data-toggle=\"modal\" href=\"#rechazarSolicitud-";
                    // line 895
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                    echo "\" title=\"Dar como Rechazada la solicitud\">R.</a>
                                                     <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"rechazarSolicitud-";
                    // line 896
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
                    // line 921
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
                                                 </div>
                                             </div>
                                         ";
                }
                // line 934
                echo "                                     ";
            } elseif (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "aprobado") == true)) {
                // line 935
                echo "                                         Aceptada
                                     ";
            } elseif (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "rechazado") == true)) {
                // line 937
                echo "                                         <a style=\"color: red\" class=\"tooltips\" ";
                if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "causasRechazo") != "")) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "causasRechazo"), "html", null, true);
                    echo "\"";
                }
                echo ">
                                             Rechazada
                                         </a>
                                     ";
            }
            // line 941
            echo "                                 </td>
                             </tr>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 944
        echo "
                         </tbody>
                     </table>
                 </div>
             </div>
         ";
    }

    // line 951
    public function block_js($context, array $blocks = array())
    {
        // line 952
        echo "
    <script src=\"";
        // line 953
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
        // line 962
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 963
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
        // line 975
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 976
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/dataTables.fixedColumns.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script>
        \$(document).ready(function() {
            \$('#example').DataTable( {
                \"scrollY\":        \"3000px\",
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
        // line 993
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
        return "OfertasBundle:Ofertas:ofertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1370 => 993,  1351 => 976,  1346 => 975,  1332 => 963,  1328 => 962,  1316 => 953,  1313 => 952,  1310 => 951,  1301 => 944,  1293 => 941,  1281 => 937,  1277 => 935,  1274 => 934,  1258 => 921,  1230 => 896,  1226 => 895,  1211 => 883,  1191 => 866,  1187 => 865,  1183 => 863,  1180 => 862,  1178 => 861,  1172 => 858,  1168 => 856,  1146 => 837,  1137 => 831,  1125 => 822,  1116 => 816,  1104 => 807,  1095 => 801,  1084 => 793,  1076 => 788,  1072 => 787,  1068 => 786,  1060 => 781,  1056 => 780,  1037 => 764,  1033 => 763,  1029 => 762,  1025 => 761,  1020 => 760,  1017 => 759,  1015 => 758,  999 => 745,  993 => 741,  988 => 734,  974 => 723,  969 => 722,  967 => 721,  963 => 719,  960 => 718,  869 => 630,  865 => 629,  854 => 621,  849 => 620,  846 => 619,  815 => 591,  804 => 583,  797 => 579,  793 => 578,  789 => 577,  781 => 572,  777 => 571,  772 => 570,  770 => 569,  756 => 558,  750 => 554,  745 => 547,  731 => 536,  726 => 535,  724 => 534,  721 => 533,  718 => 527,  712 => 525,  706 => 522,  703 => 521,  693 => 519,  688 => 518,  685 => 517,  683 => 516,  679 => 514,  667 => 505,  652 => 493,  647 => 492,  645 => 491,  640 => 489,  637 => 488,  631 => 486,  625 => 483,  620 => 482,  618 => 481,  612 => 480,  605 => 478,  598 => 477,  571 => 456,  564 => 451,  558 => 447,  547 => 439,  543 => 438,  539 => 437,  530 => 431,  516 => 420,  511 => 418,  507 => 417,  504 => 416,  502 => 415,  499 => 414,  494 => 413,  491 => 412,  488 => 411,  486 => 410,  481 => 407,  474 => 398,  467 => 391,  463 => 389,  461 => 388,  456 => 385,  449 => 380,  432 => 366,  276 => 212,  261 => 210,  257 => 209,  235 => 189,  233 => 188,  228 => 185,  203 => 162,  190 => 160,  186 => 159,  176 => 152,  165 => 143,  163 => 142,  148 => 130,  142 => 127,  137 => 125,  113 => 103,  100 => 93,  71 => 66,  68 => 65,  63 => 59,  61 => 16,  59 => 15,  56 => 14,  51 => 11,  48 => 10,  39 => 4,  34 => 3,  31 => 2,);
    }
}
