<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // ccc_ofertas_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccc_ofertas_default_index')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'inicio');
            }

            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::inicioAction',  '_route' => 'inicio',);
        }

        // estatica
        if (0 === strpos($pathinfo, '/ofertas') && preg_match('#^/ofertas/(?P<estatica>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'estatica')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::estaticaAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // alertas
            if ($pathinfo === '/admin/alertas') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::alertasAction',  '_route' => 'alertas',);
            }

            if (0 === strpos($pathinfo, '/admin/usuario')) {
                // usuarios
                if ($pathinfo === '/admin/usuarios') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::usuariosAction',  '_route' => 'usuarios',);
                }

                // insertarUsuario
                if ($pathinfo === '/admin/usuario/nuevo') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarUsuarioAction',  '_route' => 'insertarUsuario',);
                }

                if (0 === strpos($pathinfo, '/admin/usuario/e')) {
                    // eliminarUsuario
                    if (0 === strpos($pathinfo, '/admin/usuario/eliminar') && preg_match('#^/admin/usuario/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarUsuario')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::eliminarUsuarioAction',));
                    }

                    // editarUsuario
                    if (0 === strpos($pathinfo, '/admin/usuario/editar') && preg_match('#^/admin/usuario/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarUsuario')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarUsuarioAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/comer')) {
            // insertarFechaEntregaCliente
            if ($pathinfo === '/comer/insertar/fecha/entrega/cliente/solicitudes') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaEntregaClienteAction',  '_route' => 'insertarFechaEntregaCliente',);
            }

            if (0 === strpos($pathinfo, '/comer/ed/fecha/entrega/cliente/solicitud')) {
                // editarFechaEntregaCliente
                if ($pathinfo === '/comer/ed/fecha/entrega/cliente/solicitudes') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaEntregaClienteAction',  '_route' => 'editarFechaEntregaCliente',);
                }

                // editarFechaEntregaClienteA
                if ($pathinfo === '/comer/ed/fecha/entrega/cliente/solicitud') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaEntregaClienteAAction',  '_route' => 'editarFechaEntregaClienteA',);
                }

            }

            // aceptarSolicitud
            if (0 === strpos($pathinfo, '/comer/aceptar/solicitud') && preg_match('#^/comer/aceptar/solicitud/(?P<id>[^/]++)/cliente$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aceptarSolicitud')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::aceptarSolicitudAction',));
            }

            // rechazarSolicitud
            if (0 === strpos($pathinfo, '/comer/rechazar/solicitud') && preg_match('#^/comer/rechazar/solicitud/(?P<id>[^/]++)/cliente$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rechazarSolicitud')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::rechazarSolicitudAction',));
            }

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            if (0 === strpos($pathinfo, '/usuarios/p')) {
                if (0 === strpos($pathinfo, '/usuarios/posible')) {
                    // posiblesClientes
                    if ($pathinfo === '/usuarios/posibles/clientes') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::posiblesClientesAction',  '_route' => 'posiblesClientes',);
                    }

                    // insertarPosibleCliente
                    if ($pathinfo === '/usuarios/posible/nuevo') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarPosibleClienteAction',  '_route' => 'insertarPosibleCliente',);
                    }

                    // insertarContactosPosibleCliente
                    if ($pathinfo === '/usuarios/posible/contacto/nuevo') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarContactosPosibleClienteAction',  '_route' => 'insertarContactosPosibleCliente',);
                    }

                    // insertarTelefonoContactoPosibleCliente
                    if ($pathinfo === '/usuarios/posible/telefono/contacto/nuevo') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarTelefonoContactoPosibleClienteAction',  '_route' => 'insertarTelefonoContactoPosibleCliente',);
                    }

                }

                // pasarCliente
                if (0 === strpos($pathinfo, '/usuarios/pasar/clientes') && preg_match('#^/usuarios/pasar/clientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pasarCliente')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::pasarClienteAction',));
                }

            }

            // insertarFechaCuantificacion
            if ($pathinfo === '/usuarios/insertar/fecha/cuantificacion/solicitudes') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaCuantificacionAction',  '_route' => 'insertarFechaCuantificacion',);
            }

            // editarFechaCuantificacion
            if ($pathinfo === '/usuarios/editar/fecha/cuantificacion/solicitud') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaCuantificacionAction',  '_route' => 'editarFechaCuantificacion',);
            }

            // insertarFechaCuantificacionA
            if ($pathinfo === '/usuarios/insertar/fecha/cuantificacion/solicitud') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaCuantificacionAAction',  '_route' => 'insertarFechaCuantificacionA',);
            }

            // editarFechaCuantificacionA
            if ($pathinfo === '/usuarios/editar/fecha/cuantificacion/solicitudes') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaCuantificacionAAction',  '_route' => 'editarFechaCuantificacionA',);
            }

            if (0 === strpos($pathinfo, '/usuarios/cliente')) {
                // clientes
                if ($pathinfo === '/usuarios/clientes') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::clientesAction',  '_route' => 'clientes',);
                }

                // insertarCliente
                if ($pathinfo === '/usuarios/cliente/nuevo') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarClienteAction',  '_route' => 'insertarCliente',);
                }

                // editarCliente
                if ($pathinfo === '/usuarios/cliente/editar') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarClienteAction',  '_route' => 'editarCliente',);
                }

                // insertarContactosCliente
                if ($pathinfo === '/usuarios/cliente/contacto/nuevo') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarContactosClienteAction',  '_route' => 'insertarContactosCliente',);
                }

                // insertarTelefonoContacto
                if ($pathinfo === '/usuarios/cliente/telefono/contacto/nuevo') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarTelefonoContactoAction',  '_route' => 'insertarTelefonoContacto',);
                }

                // eliminarContactoCliente
                if ($pathinfo === '/usuarios/cliente/contacto/eliminar') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::eliminarContactoClienteAction',  '_route' => 'eliminarContactoCliente',);
                }

                // editarContactoCliente
                if ($pathinfo === '/usuarios/cliente/editar/contacto/editar') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarContactoClienteAction',  '_route' => 'editarContactoCliente',);
                }

            }

            // solicitudesR
            if ($pathinfo === '/usuarios/listado/solicitudes') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::solicitudesRAction',  '_route' => 'solicitudesR',);
            }

        }

        // generarCaratulaOfertaR
        if ($pathinfo === '/pres/solicitud/generar/caratula') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::generarCaratulaOfertaRAction',  '_route' => 'generarCaratulaOfertaR',);
        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // solicitudes
            if ($pathinfo === '/usuarios/solicitudes') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::solicitudesAction',  '_route' => 'solicitudes',);
            }

            // ofertasR
            if ($pathinfo === '/usuarios/listado/ofertas') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::ofertasRAction',  '_route' => 'ofertasR',);
            }

            // insertarReofertaR
            if ($pathinfo === '/usuarios/reofertar/solicitud') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarReofertaRAction',  '_route' => 'insertarReofertaR',);
            }

            // editarPrioridadOferta
            if ($pathinfo === '/usuarios/editar/prioridad/oferta') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarPrioridadOfertaAction',  '_route' => 'editarPrioridadOferta',);
            }

            // ofertas
            if ($pathinfo === '/usuarios/ofertas') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::ofertasAction',  '_route' => 'ofertas',);
            }

            if (0 === strpos($pathinfo, '/usuarios/re')) {
                // generarResumenOfertas
                if ($pathinfo === '/usuarios/resumen/ofertas') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::generarResumenOfertasAction',  '_route' => 'generarResumenOfertas',);
                }

                // ofertasRechazadas
                if ($pathinfo === '/usuarios/rechazadas/ofertas') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::ofertasRechazadasAction',  '_route' => 'ofertasRechazadas',);
                }

            }

            // solicitudesOferta
            if (0 === strpos($pathinfo, '/usuarios/cliente') && preg_match('#^/usuarios/cliente/(?P<id>[^/]++)/solicitudes/ofertas$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudesOferta')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::solicitudesOfertaAction',));
            }

            // insertarSolicitud
            if ($pathinfo === '/usuarios/nueva/solicitudes/ofertas') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarSolicitudAction',  '_route' => 'insertarSolicitud',);
            }

            if (0 === strpos($pathinfo, '/usuarios/editar/solicitud')) {
                // editarSolicitud
                if ($pathinfo === '/usuarios/editar/solicitud/ofertas') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarSolicitudAction',  '_route' => 'editarSolicitud',);
                }

                // editarSolicitudC
                if ($pathinfo === '/usuarios/editar/solicitudes') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarSolicitudCAction',  '_route' => 'editarSolicitudC',);
                }

            }

            // insertarSolicitudC
            if ($pathinfo === '/usuarios/new/solicitud') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarSolicitudCAction',  '_route' => 'insertarSolicitudC',);
            }

            // contratoOferta
            if (0 === strpos($pathinfo, '/usuarios/solicitud') && preg_match('#^/usuarios/solicitud/(?P<id>[^/]++)/contrato$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contratoOferta')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::contratoOfertaAction',));
            }

        }

        // insertarCosteo
        if ($pathinfo === '/pres/insertar/fecha/costeo/solicitudes') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarCosteoAction',  '_route' => 'insertarCosteo',);
        }

        // insertarCosteoA
        if ($pathinfo === '/usuarios/insertar/fecha/costeo/solicitud') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarCosteoAAction',  '_route' => 'insertarCosteoA',);
        }

        // editarCosteo
        if ($pathinfo === '/pres/editar/costeo/solicitud') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarCosteoAction',  '_route' => 'editarCosteo',);
        }

        // editarCosteoA
        if ($pathinfo === '/usuarios/editar/costeo/solicitudes') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarCosteoAAction',  '_route' => 'editarCosteoA',);
        }

        // editarDatosOferta
        if ($pathinfo === '/pres/editar/oferta/solicitud') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarDatosOfertaAction',  '_route' => 'editarDatosOferta',);
        }

        // editarDatosOfertaA
        if ($pathinfo === '/usuarios/editar/oferta/solicitudes') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarDatosOfertaAAction',  '_route' => 'editarDatosOfertaA',);
        }

        if (0 === strpos($pathinfo, '/pres/re')) {
            // insertarReoferta
            if ($pathinfo === '/pres/reofertar/solicitudes') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarReofertaAction',  '_route' => 'insertarReoferta',);
            }

            if (0 === strpos($pathinfo, '/pres/re/ofertar')) {
                // insertarReofertaA
                if ($pathinfo === '/pres/re/ofertar/solicitud') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarReofertaAAction',  '_route' => 'insertarReofertaA',);
                }

                // insertarReofertaO
                if ($pathinfo === '/pres/re/ofertar/oferta') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarReofertaOAction',  '_route' => 'insertarReofertaO',);
                }

                // generarCaratulaOferta
                if (0 === strpos($pathinfo, '/pres/re/ofertar/generar/caratula') && preg_match('#^/pres/re/ofertar/generar/caratula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generarCaratulaOferta')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::generarCaratulaOfertaAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // preContratos
            if ($pathinfo === '/usuarios/pre/contratos') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::preContratosAction',  '_route' => 'preContratos',);
            }

            if (0 === strpos($pathinfo, '/usuarios/contratos')) {
                // contratos
                if ($pathinfo === '/usuarios/contratos/en/ejecucion') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::contratosAction',  '_route' => 'contratos',);
                }

                // contratosTerminados
                if ($pathinfo === '/usuarios/contratos/terminados') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::contratosTerminadosAction',  '_route' => 'contratosTerminados',);
                }

            }

            // terminadosContratos
            if ($pathinfo === '/usuarios/terminados/contratos') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::terminadosContratosAction',  '_route' => 'terminadosContratos',);
            }

            // darTerminadoContrato
            if (0 === strpos($pathinfo, '/usuarios/dar/terminados/contratos') && preg_match('#^/usuarios/dar/terminados/contratos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'darTerminadoContrato')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::darTerminadoContratoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/abogado')) {
                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    if (0 === strpos($pathinfo, '/abogado/contratos')) {
                        // contratosAEjecutar
                        if ($pathinfo === '/abogado/contratos/a/ejecutar') {
                            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::contratosAEjecutarAction',  '_route' => 'contratosAEjecutar',);
                        }

                        // eliminarContrato
                        if ($pathinfo === '/abogado/contratos/eliminar/este') {
                            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::eliminarContratoAction',  '_route' => 'eliminarContrato',);
                        }

                    }

                    // suplementarContrato
                    if ($pathinfo === '/abogado/contrato/suplementar') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::suplementarContratoAction',  '_route' => 'suplementarContrato',);
                    }

                }

                if (0 === strpos($pathinfo, '/abogado/insertar')) {
                    // insertarFechaEntrada
                    if ($pathinfo === '/abogado/insertar/fecha/entrada/contrato') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaEntradaAction',  '_route' => 'insertarFechaEntrada',);
                    }

                    // insertarDatosContrato
                    if ($pathinfo === '/abogado/insertar/datos/entrada/contrato') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarDatosContratoAction',  '_route' => 'insertarDatosContrato',);
                    }

                }

                // editarDatosContratoA
                if ($pathinfo === '/abogado/editar/datos/entrada/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarDatosContratoAAction',  '_route' => 'editarDatosContratoA',);
                }

                // insertarDatosContratoA
                if ($pathinfo === '/abogado/contrato/insertar/datos/entrada') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarDatosContratoAAction',  '_route' => 'insertarDatosContratoA',);
                }

                // insertarFechaSecretaria
                if ($pathinfo === '/abogado/insertar/fecha/secretaria/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaSecretariaAction',  '_route' => 'insertarFechaSecretaria',);
                }

                // insertarFechaSecretariaA
                if ($pathinfo === '/abogado/contrato/insertar/fecha/secretaria') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaSecretariaAAction',  '_route' => 'insertarFechaSecretariaA',);
                }

                // editarFechaSecretariaA
                if ($pathinfo === '/abogado/editar/fecha/secretaria/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaSecretariaAAction',  '_route' => 'editarFechaSecretariaA',);
                }

                // insertarFechaEconomia
                if ($pathinfo === '/abogado/insertar/fecha/economia/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaEconomiaAction',  '_route' => 'insertarFechaEconomia',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarFechaEconomiaA
                    if ($pathinfo === '/abogado/contrato/insertar/fecha/economia') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaEconomiaAAction',  '_route' => 'insertarFechaEconomiaA',);
                    }

                    // editarFechaEconomiaA
                    if ($pathinfo === '/abogado/contrato/editar/fecha/economia') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaEconomiaAAction',  '_route' => 'editarFechaEconomiaA',);
                    }

                }

                // insertarFechaNegocios
                if ($pathinfo === '/abogado/insertar/fecha/negocios/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaNegociosAction',  '_route' => 'insertarFechaNegocios',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarFechaNegociosA
                    if ($pathinfo === '/abogado/contrato/insertar/fecha/negocios') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaNegociosAAction',  '_route' => 'insertarFechaNegociosA',);
                    }

                    // editarFechaNegociosA
                    if ($pathinfo === '/abogado/contrato/editar/fecha/negocios') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaNegociosAAction',  '_route' => 'editarFechaNegociosA',);
                    }

                }

                // insertarFechaEjecucion
                if ($pathinfo === '/abogado/insertar/fecha/ejecucion/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaEjecucionAction',  '_route' => 'insertarFechaEjecucion',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarFechaEjecucionA
                    if ($pathinfo === '/abogado/contrato/insertar/fecha/ejecucion') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaEjecucionAAction',  '_route' => 'insertarFechaEjecucionA',);
                    }

                    // editarFechaEjecucionA
                    if ($pathinfo === '/abogado/contrato/editar/fecha/ejecucion') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaEjecucionAAction',  '_route' => 'editarFechaEjecucionA',);
                    }

                }

                // insertarFechaEntrega
                if ($pathinfo === '/abogado/insertar/fecha/entrega/cliente/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaEntregaAction',  '_route' => 'insertarFechaEntrega',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarFechaEntregaA
                    if ($pathinfo === '/abogado/contrato/insertar/fecha/entrega/cliente') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaEntregaAAction',  '_route' => 'insertarFechaEntregaA',);
                    }

                    // editarFechaEntregaA
                    if ($pathinfo === '/abogado/contrato/editar/fecha/entrega/cliente') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaEntregaAAction',  '_route' => 'editarFechaEntregaA',);
                    }

                }

                // insertarEstadoContrato
                if ($pathinfo === '/abogado/insertar/estado/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarEstadoContratoAction',  '_route' => 'insertarEstadoContrato',);
                }

                // insertarEstadoContratoA
                if ($pathinfo === '/abogado/contrato/insertar/estado') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarEstadoContratoAAction',  '_route' => 'insertarEstadoContratoA',);
                }

                // editarEstadoContrato
                if ($pathinfo === '/abogado/editar/estado/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarEstadoContratoAction',  '_route' => 'editarEstadoContrato',);
                }

                // editarEstadoContratoA
                if ($pathinfo === '/abogado/contrato/editar/estado') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarEstadoContratoAAction',  '_route' => 'editarEstadoContratoA',);
                }

                // insertarFechaFirmaCliente
                if ($pathinfo === '/abogado/insertar/fecha/firma/cliente/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaFirmaClienteAction',  '_route' => 'insertarFechaFirmaCliente',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarFechaFirmaClienteA
                    if ($pathinfo === '/abogado/contrato/insertar/fecha/firma/cliente') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaFirmaClienteAAction',  '_route' => 'insertarFechaFirmaClienteA',);
                    }

                    // editarFechaFirmaClienteA
                    if ($pathinfo === '/abogado/contrato/editar/fecha/firma/cliente') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaFirmaClienteAAction',  '_route' => 'editarFechaFirmaClienteA',);
                    }

                }

                // insertarFechaFinalContrato
                if ($pathinfo === '/abogado/insertar/fecha/firma/final/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaFinalContratoAction',  '_route' => 'insertarFechaFinalContrato',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarFechaFinalContratoA
                    if ($pathinfo === '/abogado/contrato/insertar/fecha/firma/final') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFechaFinalContratoAAction',  '_route' => 'insertarFechaFinalContratoA',);
                    }

                    // editarFechaFinalContratoA
                    if ($pathinfo === '/abogado/contrato/editar/fecha/firma/final') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaFinalContratoAAction',  '_route' => 'editarFechaFinalContratoA',);
                    }

                }

                // insertarVigenciaContrato
                if ($pathinfo === '/abogado/insertar/vigencia/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarVigenciaContratoAction',  '_route' => 'insertarVigenciaContrato',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarVigenciaContratoA
                    if ($pathinfo === '/abogado/contrato/insertar/vigencia') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarVigenciaContratoAAction',  '_route' => 'insertarVigenciaContratoA',);
                    }

                    // editarVigenciaContratoA
                    if ($pathinfo === '/abogado/contrato/editar/vigencia') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarVigenciaContratoAAction',  '_route' => 'editarVigenciaContratoA',);
                    }

                }

                // insertarActaInicio
                if ($pathinfo === '/abogado/insertar/fecha/acta/inicio/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarActaInicioAction',  '_route' => 'insertarActaInicio',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarActaInicioA
                    if ($pathinfo === '/abogado/contrato/insertar/fecha/acta/inicio') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarActaInicioAAction',  '_route' => 'insertarActaInicioA',);
                    }

                    // editarActaInicioA
                    if ($pathinfo === '/abogado/contrato/editar/fecha/acta/inicio') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarActaInicioAAction',  '_route' => 'editarActaInicioA',);
                    }

                }

                // insertarActaEntrega
                if ($pathinfo === '/abogado/insertar/fecha/acta/entrega/contrato') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarActaEntregaAction',  '_route' => 'insertarActaEntrega',);
                }

                if (0 === strpos($pathinfo, '/abogado/contrato')) {
                    // insertarActaEntregaA
                    if ($pathinfo === '/abogado/contrato/insertar/fecha/acta/entrega') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarActaEntregaAAction',  '_route' => 'insertarActaEntregaA',);
                    }

                    // editarActaEntregaA
                    if ($pathinfo === '/abogado/contrato/editar/fecha/acta/entrega') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarActaEntregaAAction',  '_route' => 'editarActaEntregaA',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/usuario')) {
                    // usuariosR
                    if ($pathinfo === '/admin/usuarios') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::usuariosRAction',  '_route' => 'usuariosR',);
                    }

                    // insertarUsuarioR
                    if ($pathinfo === '/admin/usuario/nuevo') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarUsuarioRAction',  '_route' => 'insertarUsuarioR',);
                    }

                    if (0 === strpos($pathinfo, '/admin/usuario/e')) {
                        // editarUsuarioR
                        if (0 === strpos($pathinfo, '/admin/usuario/editar') && preg_match('#^/admin/usuario/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarUsuarioR')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarUsuarioRAction',));
                        }

                        // eliminarUsuarioR
                        if (0 === strpos($pathinfo, '/admin/usuario/eliminar') && preg_match('#^/admin/usuario/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarUsuarioR')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::eliminarUsuarioRAction',));
                        }

                    }

                }

                // exportarPDF
                if ($pathinfo === '/admin/exportar/pdf') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::exportarPDFAction',  '_route' => 'exportarPDF',);
                }

            }

        }

        // obras
        if ($pathinfo === '/tecnico/obras') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::obrasAction',  '_route' => 'obras',);
        }

        // guardarFotoObra
        if ($pathinfo === '/operario/obra/foto') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::guardarFotoObraAction',  '_route' => 'guardarFotoObra',);
        }

        // crearIMG
        if ($pathinfo === '/crear/png') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::crearIMGAction',  '_route' => 'crearIMG',);
        }

        // actaInicio
        if (0 === strpos($pathinfo, '/tecnico/acta/inicio/obra') && preg_match('#^/tecnico/acta/inicio/obra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'actaInicio')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::actaInicioAction',));
        }

        // guardarActaInicioObra
        if ($pathinfo === '/operario/acta/inicio/obra') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::guardarActaInicioObraAction',  '_route' => 'guardarActaInicioObra',);
        }

        if (0 === strpos($pathinfo, '/tecnico')) {
            // verActaInicioObra
            if (0 === strpos($pathinfo, '/tecnico/acta/ver/inicio/obra') && preg_match('#^/tecnico/acta/ver/inicio/obra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'verActaInicioObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::verActaInicioObraAction',));
            }

            // contratoObra
            if (0 === strpos($pathinfo, '/tecnico/contrato/obra') && preg_match('#^/tecnico/contrato/obra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contratoObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::contratoObraAction',));
            }

        }

        // guardarContratoObra
        if ($pathinfo === '/operario/contrato/obra') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::guardarContratoObraAction',  '_route' => 'guardarContratoObra',);
        }

        if (0 === strpos($pathinfo, '/tecnico')) {
            if (0 === strpos($pathinfo, '/tecnico/obra')) {
                // tiemposObra
                if (0 === strpos($pathinfo, '/tecnico/obra/tiempos') && preg_match('#^/tecnico/obra/tiempos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiemposObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::tiemposObraAction',));
                }

                // costosObra
                if (0 === strpos($pathinfo, '/tecnico/obra/costos') && preg_match('#^/tecnico/obra/costos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'costosObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::costosObraAction',));
                }

            }

            // nuevaObra
            if ($pathinfo === '/tecnico/nueva/obra') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::nuevaObraAction',  '_route' => 'nuevaObra',);
            }

        }

        if (0 === strpos($pathinfo, '/operario/obra')) {
            // insertarObra
            if ($pathinfo === '/operario/obra/nueva') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarObraAction',  '_route' => 'insertarObra',);
            }

            if (0 === strpos($pathinfo, '/operario/obra/e')) {
                // eliminarObra
                if (0 === strpos($pathinfo, '/operario/obra/eliminar') && preg_match('#^/operario/obra/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::eliminarObraAction',));
                }

                // editarObra
                if (0 === strpos($pathinfo, '/operario/obra/editar') && preg_match('#^/operario/obra/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarObraAction',));
                }

            }

            // insertarTotalCostosObra
            if ($pathinfo === '/operario/obra/cargar/totales') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarTotalCostosObraAction',  '_route' => 'insertarTotalCostosObra',);
            }

            if (0 === strpos($pathinfo, '/operario/obra/insertar')) {
                // insertarPlanCostosObra
                if ($pathinfo === '/operario/obra/insertar/costos') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarPlanCostosObraAction',  '_route' => 'insertarPlanCostosObra',);
                }

                // insertarAsistenciaObra
                if ($pathinfo === '/operario/obra/insertar/asistencia') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarAsistenciaObraAction',  '_route' => 'insertarAsistenciaObra',);
                }

            }

            // insertarRealCostosObra
            if ($pathinfo === '/operario/obra/cargar/real') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarRealCostosObraAction',  '_route' => 'insertarRealCostosObra',);
            }

        }

        // facturacionObra
        if (0 === strpos($pathinfo, '/tecnico/obra/facturacion') && preg_match('#^/tecnico/obra/facturacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturacionObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::facturacionObraAction',));
        }

        if (0 === strpos($pathinfo, '/operario/obra/insertar/facturacion')) {
            // insertarPlanificacionFacturacionObra
            if ($pathinfo === '/operario/obra/insertar/facturacion/planificacion') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarPlanificacionFacturacionObraAction',  '_route' => 'insertarPlanificacionFacturacionObra',);
            }

            // insertarFacturacionReal
            if (0 === strpos($pathinfo, '/operario/obra/insertar/facturacion/real') && preg_match('#^/operario/obra/insertar/facturacion/real/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'insertarFacturacionReal')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarFacturacionRealAction',));
            }

        }

        // objetivosObra
        if (0 === strpos($pathinfo, '/tecnico/obra/objetivos') && preg_match('#^/tecnico/obra/objetivos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'objetivosObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::objetivosObraAction',));
        }

        if (0 === strpos($pathinfo, '/operario/obra')) {
            // insertarObjetivosObra
            if ($pathinfo === '/operario/obra/insertar/objetivos') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarObjetivosObraAction',  '_route' => 'insertarObjetivosObra',);
            }

            if (0 === strpos($pathinfo, '/operario/obra/cargar')) {
                // insertarPlanificacionActividades
                if ($pathinfo === '/operario/obra/cargar/planificacion/actividades') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarPlanificacionActividadesAction',  '_route' => 'insertarPlanificacionActividades',);
                }

                // insertarRealActividades
                if ($pathinfo === '/operario/obra/cargar/real/actividades') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarRealActividadesAction',  '_route' => 'insertarRealActividades',);
                }

            }

        }

        // materialesObra
        if (0 === strpos($pathinfo, '/tecnico/obra/materiales') && preg_match('#^/tecnico/obra/materiales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'materialesObra')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::materialesObraAction',));
        }

        if (0 === strpos($pathinfo, '/operario')) {
            // insertarGrupoMaterialesObra
            if ($pathinfo === '/operario/grupos/materiales/insertar') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarGrupoMaterialesObraAction',  '_route' => 'insertarGrupoMaterialesObra',);
            }

            // insertarPlanificacionMateriales
            if ($pathinfo === '/operario/planificacion/materiales/cargar') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarPlanificacionMaterialesAction',  '_route' => 'insertarPlanificacionMateriales',);
            }

            // insertarConsumidoMateriales
            if ($pathinfo === '/operario/consumido/materiales/cargar') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarConsumidoMaterialesAction',  '_route' => 'insertarConsumidoMateriales',);
            }

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // preformasContratos
            if ($pathinfo === '/usuarios/preformas/contratos') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::preformasContratosAction',  '_route' => 'preformasContratos',);
            }

            // insertarNuevoContrato
            if ($pathinfo === '/usuarios/nuevo/contrato') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarNuevoContratoAction',  '_route' => 'insertarNuevoContrato',);
            }

        }

        // editarFechaFirmaPorClienteContratoN
        if (0 === strpos($pathinfo, '/editar/firma/cliente/contrato') && preg_match('#^/editar/firma/cliente/contrato/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarFechaFirmaPorClienteContratoN')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarFechaFirmaPorClienteContratoNAction',));
        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // insertarNuevoSuplemento
            if (0 === strpos($pathinfo, '/usuarios/nuevo/suplemento') && preg_match('#^/usuarios/nuevo/suplemento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'insertarNuevoSuplemento')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::insertarNuevoSuplementoAction',));
            }

            if (0 === strpos($pathinfo, '/usuarios/generar/proforma/contrato')) {
                // generarProformaContrato
                if (0 === strpos($pathinfo, '/usuarios/generar/proforma/contrato/caratula') && preg_match('#^/usuarios/generar/proforma/contrato/caratula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generarProformaContrato')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::generarProformaContratoAction',));
                }

                // generarProformaContratoMarco
                if ($pathinfo === '/usuarios/generar/proforma/contrato/marco') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::generarProformaContratoMarcoAction',  '_route' => 'generarProformaContratoMarco',);
                }

            }

            // verProformaCreada
            if (0 === strpos($pathinfo, '/usuarios/ver/proforma') && preg_match('#^/usuarios/ver/proforma/(?P<proforma>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'verProformaCreada')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::verProformaCreadaAction',));
            }

            // generarCaratulaContrato
            if ($pathinfo === '/usuarios/generar/caratula/contrato') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::generarCaratulaContratoAction',  '_route' => 'generarCaratulaContrato',);
            }

            // cambiarVigenciaContrato
            if ($pathinfo === '/usuarios/vigencia/contrato') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::cambiarVigenciaContratoAction',  '_route' => 'cambiarVigenciaContrato',);
            }

            // archivarContrato
            if ($pathinfo === '/usuarios/archivar/contrato') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::archivarContratoAction',  '_route' => 'archivarContrato',);
            }

            // generarProformaCEOSup
            if ($pathinfo === '/usuarios/generar/proforma/ceo/suplemento') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::generarProformaCEOSupAction',  '_route' => 'generarProformaCEOSup',);
            }

            if (0 === strpos($pathinfo, '/usuarios/editar')) {
                // fechaFirmaContrato
                if ($pathinfo === '/usuarios/editar/fecha/firma') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::fechaFirmaContratoAction',  '_route' => 'fechaFirmaContrato',);
                }

                if (0 === strpos($pathinfo, '/usuarios/editar/vigencia')) {
                    // editarVigenciaContrato
                    if ($pathinfo === '/usuarios/editar/vigencias/contrato') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::editarVigenciaContratoAction',  '_route' => 'editarVigenciaContrato',);
                    }

                    // vigenciaContrato
                    if ($pathinfo === '/usuarios/editar/vigencia/contrato') {
                        return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::vigenciaContratoAction',  '_route' => 'vigenciaContrato',);
                    }

                }

            }

            // buscarContratos
            if ($pathinfo === '/usuarios/buscar/contratos') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::buscarContratosAction',  '_route' => 'buscarContratos',);
            }

            if (0 === strpos($pathinfo, '/usuarios/cargar')) {
                // cargarContratoEscaneado
                if ($pathinfo === '/usuarios/cargar/contrato/escaneado') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::cargarContratoEscaneadoAction',  '_route' => 'cargarContratoEscaneado',);
                }

                // cargarNuevaProforma
                if ($pathinfo === '/usuarios/cargar/proforma/nueva') {
                    return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::cargarNuevaProformaAction',  '_route' => 'cargarNuevaProforma',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/pres/cargar')) {
            // cargarPresupuesto
            if ($pathinfo === '/pres/cargar/presupuesto/solicitud') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::cargarPresupuestoAction',  '_route' => 'cargarPresupuesto',);
            }

            // cargarActPresupuesto
            if ($pathinfo === '/pres/cargar/actividades/solicitud') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::cargarActPresupuestoAction',  '_route' => 'cargarActPresupuesto',);
            }

            // cargarMatPresupuesto
            if ($pathinfo === '/pres/cargar/materiales/solicitud') {
                return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::cargarMatPresupuestoAction',  '_route' => 'cargarMatPresupuesto',);
            }

        }

        // crearDirectorio
        if ($pathinfo === '/usuarios/crear/directorio/presupuesto') {
            return array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::crearDirectorioAction',  '_route' => 'crearDirectorio',);
        }

        // generarCuantificacion
        if (0 === strpos($pathinfo, '/ingeniero/generar/cuantificacion') && preg_match('#^/ingeniero/generar/cuantificacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generarCuantificacion')), array (  '_controller' => 'CCC\\OfertasBundle\\Controller\\OfertasController::generarCuantificacionAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
