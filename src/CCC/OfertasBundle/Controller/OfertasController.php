<?php

namespace CCC\OfertasBundle\Controller;

use CCC\OfertasBundle\Entity\Actividades;
use CCC\OfertasBundle\Entity\Clientes;
use CCC\OfertasBundle\Entity\ClientesContratoN;
use CCC\OfertasBundle\Entity\Contactos;
use CCC\OfertasBundle\Entity\ContactosPosibleCliente;
use CCC\OfertasBundle\Entity\Contrato;
use CCC\OfertasBundle\Entity\ContratoN;
use CCC\OfertasBundle\Entity\Contratos;
use CCC\OfertasBundle\Entity\GrupoActividadesObjetivo;
use CCC\OfertasBundle\Entity\MaterialesPresExcelComun;
use CCC\OfertasBundle\Entity\ObjetivosObra;
use CCC\OfertasBundle\Entity\PosibleCliente;
use CCC\OfertasBundle\Entity\PresupuestoExcelComun;
use CCC\OfertasBundle\Entity\SolicitudOferta;
use CCC\OfertasBundle\Entity\TelefonosContacto;
use CCC\OfertasBundle\Entity\TelefonosContactosPosibleCliente;
use CCC\OfertasBundle\Entity\Usuario;
use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use PhpOffice\PhpWord\TemplateProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Validator\Constraints\DateTime;

ini_set("SMTP",'192.168.1.1');
ini_set("smtp_port",2525);
ini_set("sendmail_from","alertas@ccc.co.cu");

/*require_once __DIR__ . '../../../../vendor/PhpOffice/PHPWord/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();
\PhpOffice\PhpWord\Settings::setPdfRendererPath('vendor/dompdf/dompdf');
\PhpOffice\PhpWord\Settings::setPdfRendererName(\PhpOffice\PhpWord\Settings::PDF_RENDERER_DOMPDF);*/

class OfertasController extends Controller
{

    /*PARA LAS PAGINAS ESTATICAS*/
    public function estaticaAction($estatica)
    {
        return $this->render('OfertasBundle:Ofertas:'.$estatica.'.html.twig',array());
    }
    /*PARA LA PAGINA DE INICIO*/
    public function inicioAction()
    {
        return $this->render('OfertasBundle:Ofertas:login.html.twig');
    }

    public function loginAction()
    {
        $peticion = $this->get('request');
        $sesion = $peticion->getSession();

        //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        $securityContext = $this->container->get('security.context');
        //print_r($securityContext);die;

        if ($peticion->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR))
        {
            $error = $peticion->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        }
        else
        {
            $error = $sesion->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        }
        return $this->render( 'OfertasBundle:Ofertas:acceso.html.twig' ,
            array(
                'ultimo_nombreusuario' => $this->get('request')->getSession()->get(SecurityContextInterface::LAST_USERNAME),
                'error' => $error)
        );

    }

    // PARA LA SEGURIDAD DE LAS PASS
    private  function setSecurePassword(&$entity)
    {
        $entity->setSalt(md5(time()));
        $encoder = new MessageDigestPasswordEncoder('sha512',true, 10);
        $password =     $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
        $entity->setPassword($password);

        //print_r($entity->getPassword());die;
    }
    public function usuariosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('OfertasBundle:Usuario')->findAll();

        return $this->render('OfertasBundle:Ofertas:usuarios.html.twig',array(
            'usuarios' => $usuarios,
        ));
    }
    public function insertarUsuarioAction()
    {
        $nombreApellidos = $_POST['nombreApellidos'];
        $email = $_POST['usuario'];
        $user = explode('@',$email);
        $login = $user[0];
        $contrasenna = $_POST['contrasenna'];
        $rol = $_POST['rol'];

        $em = $this->getDoctrine()->getManager();
        $usuario = new Usuario();

        $usuario->setNombreApellidos($nombreApellidos);
        $usuario->setUsuario($login);
        $usuario->setEmail($email);
        $usuario->setRol($rol);
        $usuario->setPassword($contrasenna);
        //establecemos la contraseña:
        $this->setSecurePassword($usuario);
        $usuario->setRol($rol);

        $em->persist($usuario);
        $em->flush();

        $this->authSendEmail('alertas@ccc.co.cu','OFERTAS','victor@ccc.co.cu','Viktor','Nuevo Usuario','Se creó un usuario nuevo en el sistema: '.$nombreApellidos);
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando','Nuevo Usuario','Se creó un usuario nuevo en el sistema: '.$nombreApellidos);

        return $this->redirect($this->generateUrl('usuarios'));
    }
    public function eliminarUsuarioAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario = $em->getRepository('OfertasBundle:Usuario')->findBy(array(
            'id' => $id
        ));

        $em->remove($usuario[0]);
        $em->flush();

        return $this->redirect($this->generateUrl('usuarios'));
    }
    public function editarUsuarioAction($id)
    {
        $nombreApellidos = $_POST['nombreApellidos'];
        $email = $_POST['usuario'];
        $contrasenna = $_POST['contrasenna'];
        $rol = $_POST['rol'];

        $em = $this->getDoctrine()->getManager();

        $usuario = $em->getRepository('OfertasBundle:Usuario')->findBy(array(
            'id' => $id
        ));

        $usuario[0]->setNombreApellidos($nombreApellidos);
        $usuario[0]->setEmail($email);
        $usuario[0]->setRol($rol);
        $usuario[0]->setPassword($contrasenna);
        //establecemos la contraseña:
        $this->setSecurePassword($usuario[0]);
        $usuario[0]->setRol($rol);

        $em->flush();

        return $this->redirect($this->generateUrl('usuarios'));
    }

    public function posiblesClientesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository('OfertasBundle:PosibleCliente')->findBy(
            array(), array('cliente'=>'ASC')
        );

        return $this->render('OfertasBundle:Ofertas:posiblesClientes.html.twig',array(
            'clientes' => $clientes,
        ));
    }
    public function insertarPosibleClienteAction()
    {
        $nombreCliente = $_POST['cliente'];
        $empresa = $_POST['empresa'];
        $sector = $_POST['sector'];
        $direccion = $_POST['direccion'];
        //$direccionObra = $_POST['direccionObra'];
        $contacto = $_POST['contacto'];
        $telefonoContacto = $_POST['telefonoContacto'];
        $email = $_POST['email'];

        $em = $this->getDoctrine()->getManager();

        $cliente = new PosibleCliente();
        $cliente->setCliente($nombreCliente);
        $cliente->setEmpresa($empresa);
        $cliente->setSector($sector);
        $cliente->setDirecccion($direccion);
        $cliente->setNombreContacto($contacto);
        $cliente->setTelefonoContacto($telefonoContacto);
        $cliente->setEmail($email);
        $em->persist($cliente);

        //  AGREGAR A LA VEZ TAMBIÉN EL CONTACTO
        $nuevoContacto = new ContactosPosibleCliente();
        $nuevoContacto->setNombre($contacto);
        //$nuevoContacto->setTelefono($telefonoContacto);
        $nuevoContacto->setEmail($email);
        $nuevoContacto->setIdPosibleCliente($cliente);
        $em->persist($nuevoContacto);

        //GREGAR TELEFONO AL CONTACTO
        $nuevoTelefono = new TelefonosContactosPosibleCliente();
        $nuevoTelefono->setTelefono($telefonoContacto);
        $nuevoTelefono->setIdContacto($nuevoContacto);
        $em->persist($nuevoTelefono);

        $em->flush();

        //$this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando','Nuevo Cliente',utf8_decode('Se creó un cliente nuevo en el sistema: ').$codigo.' - '.utf8_decode($nombreCliente));

        /*  PARA ENVIAR MODELO ADJUNTO    */
        //$this->envioEmailModeloPDF($nombreCliente,$empresa,$sector,$direccion,$direccionObra,$contacto,$telefonoContacto,$email);

        return $this->redirect($this->generateUrl('posiblesClientes'));
    }
    public function insertarContactosPosibleClienteAction()
    {
        $idCliente = $_POST['idCliente'];
        $contacto = $_POST['contacto'];
        $telefonoContacto = $_POST['telefonoContacto'];
        $email = $_POST['email'];

        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('OfertasBundle:PosibleCliente')->findBy(array(
            'id' => $idCliente
        ));

        $nuevoContacto = new ContactosPosibleCliente();
        $nuevoContacto->setNombre($contacto);
        //$nuevoContacto->setTelefono($telefonoContacto);
        $nuevoContacto->setEmail($email);
        $nuevoContacto->setIdPosibleCliente($cliente[0]);
        $em->persist($nuevoContacto);

        //GREGAR TELEFONO AL CONTACTO
        $nuevoTelefono = new TelefonosContactosPosibleCliente();
        $nuevoTelefono->setTelefono($telefonoContacto);
        $nuevoTelefono->setIdContacto($nuevoContacto);
        $em->persist($nuevoTelefono);

        $em->flush();

        return $this->redirect($this->generateUrl('posiblesClientes'));
    }
    public function insertarTelefonoContactoPosibleClienteAction()
    {
        $idContacto = $_POST['idContacto'];
        $telefonoContacto = $_POST['telefonoContacto'];

        $em = $this->getDoctrine()->getManager();
        $contacto = $em->getRepository('OfertasBundle:ContactosPosibleCliente')->findBy(array(
            'id' => $idContacto
        ));

        $nuevoTelefono = new TelefonosContactosPosibleCliente();
        $nuevoTelefono->setTelefono($telefonoContacto);
        $nuevoTelefono->setIdContacto($contacto[0]);
        $em->persist($nuevoTelefono);

        $em->flush();

        return $this->redirect($this->generateUrl('posiblesClientes'));
    }
    public function pasarClienteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('OfertasBundle:PosibleCliente')->findBy(
            array('id'=>$id)
        );

        $clientes = $em->getRepository('OfertasBundle:Clientes')->findAll();
        if(count($clientes) == 0)
        {
            $codigo = '01';
        }
        else
        {
            $ultimo = $clientes[count($clientes)-1]->getCodigo()+1;
            if($ultimo < 10)
            {
                $codigo = '0'.$ultimo;
            }
            else
            {
                $codigo = $ultimo;
            }
        }

        $nuevoCliente = new Clientes();
        $nuevoCliente->setCodigo($codigo);
        $nuevoCliente->setCliente($cliente[0]->getCliente());
        $nuevoCliente->setEmpresa($cliente[0]->getEmpresa());
        $nuevoCliente->setSector($cliente[0]->getSector());
        $nuevoCliente->setDireccion($cliente[0]->getDirecccion());
        $nuevoCliente->setNombreContacto($cliente[0]->getNombreContacto());
        $nuevoCliente->setTelefonoContacto($cliente[0]->getTelefonoContacto());
        $nuevoCliente->setEmail($cliente[0]->getEmail());

        $em->persist($nuevoCliente);

        //  AGREGAR A LA VEZ TAMBIÉN EL CONTACTO
        $nuevoContacto = new Contactos();
        $nuevoContacto->setNombre($cliente[0]->getNombreContacto());
        //$nuevoContacto->setTelefono($telefonoContacto);
        $nuevoContacto->setEmail($cliente[0]->getEmail());
        $nuevoContacto->setIdCliente($nuevoCliente);
        $em->persist($nuevoContacto);

        //GREGAR TELEFONO AL CONTACTO
        $nuevoTelefono = new TelefonosContacto();
        $nuevoTelefono->setTelefono($cliente[0]->getTelefonoContacto());
        $nuevoTelefono->setIdContacto($nuevoContacto);
        $em->persist($nuevoTelefono);

        $em->remove($cliente[0]);

        $em->flush();

        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando','Nuevo Cliente',utf8_decode('Se creó un cliente nuevo en el sistema: ').$codigo.' - '.utf8_decode($cliente[0]->getCliente()));

        return $this->redirect($this->generateUrl('clientes'));
    }

    public function clientesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('codigo'=>'ASC')
        );

        return $this->render('OfertasBundle:Ofertas:clientes.html.twig',array(
            'clientes' => $clientes,
        ));
    }
    public function insertarClienteAction()
    {
        $nombreCliente = $_POST['cliente'];
        $empresa = $_POST['empresa'];
        $sector = $_POST['sector'];
        $direccion = $_POST['direccion'];
        //$direccionObra = $_POST['direccionObra'];
        $contacto = $_POST['contacto'];
        $telefonoContacto = $_POST['telefonoContacto'];
        $email = $_POST['email'];

        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findAll();
        if(count($clientes) == 0)
        {
            $codigo = '01';
        }
        else
        {
            $ultimo = $clientes[count($clientes)-1]->getCodigo()+1;
            if($ultimo < 10)
            {
                $codigo = '0'.$ultimo;
            }
            else
            {
                $codigo = $ultimo;
            }
        }

        $cliente = new Clientes();
        $cliente->setCodigo($codigo);
        $cliente->setCliente($nombreCliente);
        $cliente->setEmpresa($empresa);
        $cliente->setSector($sector);
        $cliente->setDireccion($direccion);
        //$cliente->setDireccionObra($direccionObra);
        $cliente->setNombreContacto($contacto);
        $cliente->setTelefonoContacto($telefonoContacto);
        $cliente->setEmail($email);
        $em->persist($cliente);

        //  AGREGAR A LA VEZ TAMBIÉN EL CONTACTO
        $nuevoContacto = new Contactos();
        $nuevoContacto->setNombre($contacto);
        //$nuevoContacto->setTelefono($telefonoContacto);
        $nuevoContacto->setEmail($email);
        $nuevoContacto->setIdCliente($cliente);
        $em->persist($nuevoContacto);

        //GREGAR TELEFONO AL CONTACTO
        $nuevoTelefono = new TelefonosContacto();
        $nuevoTelefono->setTelefono($telefonoContacto);
        $nuevoTelefono->setIdContacto($nuevoContacto);
        $em->persist($nuevoTelefono);

        $em->flush();

        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando','Nuevo Cliente',utf8_decode('Se creó un cliente nuevo en el sistema: ').$codigo.' - '.utf8_decode($nombreCliente));

        /*  PARA ENVIAR MODELO ADJUNTO    */
        //$this->envioEmailModeloPDF($nombreCliente,$empresa,$sector,$direccion,$direccionObra,$contacto,$telefonoContacto,$email);

        return $this->redirect($this->generateUrl('clientes'));
    }
    public function editarClienteAction()
    {
        $idCliente = $_POST['idCliente'];
        $nombreCliente = $_POST['cliente'];
        $empresa = $_POST['empresa'];
        $direccion = $_POST['direccion'];
        //$direccionObra = $_POST['direccionObra'];
        $contacto = $_POST['contacto'];
        $telefonoContacto = $_POST['telefonoContacto'];
        $email = $_POST['email'];

        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        $cliente[0]->setCliente($nombreCliente);
        $cliente[0]->setEmpresa($empresa);
        $cliente[0]->setDireccion($direccion);
        //$cliente[0]->setDireccionObra($direccionObra);
        $cliente[0]->setNombreContacto($contacto);
        $cliente[0]->setTelefonoContacto($telefonoContacto);
        $cliente[0]->setEmail($email);

        $em->flush();

        return $this->redirect($this->generateUrl('clientes'));
    }
    public function insertarContactosClienteAction()
    {
        $idCliente = $_POST['idCliente'];
        $contacto = $_POST['contacto'];
        $telefonoContacto = $_POST['telefonoContacto'];
        $email = $_POST['email'];

        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        $nuevoContacto = new Contactos();
        $nuevoContacto->setNombre($contacto);
        //$nuevoContacto->setTelefono($telefonoContacto);
        $nuevoContacto->setEmail($email);
        $nuevoContacto->setIdCliente($cliente[0]);
        $em->persist($nuevoContacto);

        //GREGAR TELEFONO AL CONTACTO
        $nuevoTelefono = new TelefonosContacto();
        $nuevoTelefono->setTelefono($telefonoContacto);
        $nuevoTelefono->setIdContacto($nuevoContacto);
        $em->persist($nuevoTelefono);

        $em->flush();

        return $this->redirect($this->generateUrl('clientes'));
    }
    public function insertarTelefonoContactoAction()
    {
        $idContacto = $_POST['idContacto'];
        $telefonoContacto = $_POST['telefonoContacto'];

        $em = $this->getDoctrine()->getManager();
        $contacto = $em->getRepository('OfertasBundle:Contactos')->findBy(array(
            'id' => $idContacto
        ));

        $nuevoTelefono = new TelefonosContacto();
        $nuevoTelefono->setTelefono($telefonoContacto);
        $nuevoTelefono->setIdContacto($contacto[0]);
        $em->persist($nuevoTelefono);

        $em->flush();

        return $this->redirect($this->generateUrl('clientes'));
    }
    public function eliminarContactoClienteAction()
    {
        $idCliente = $_POST['idCliente'];
        $idContacto = $_POST['idContacto'];

        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        $contacto = $em->getRepository('OfertasBundle:Contactos')->findBy(array(
            'id' => $idContacto
        ));

        $em->remove($contacto[0]);

        $em->flush();

        return $this->redirect($this->generateUrl('clientes'));
    }
    public function editarContactoClienteAction()
    {
        $idCliente = $_POST['idCliente'];
        $idContacto = $_POST['idContacto'];
        $contacto = $_POST['contacto'];
        $email = $_POST['email'];

        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        $contactos = $em->getRepository('OfertasBundle:Contactos')->findBy(array(
            'id' => $idContacto
        ));

        $contactos[0]->setNombre($contacto);
        $contactos[0]->setEmail($email);

        $em->flush();

        return $this->redirect($this->generateUrl('clientes'));
    }

    public function solicitudesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>false, 'fechaEntregaCliente'=>null), array('anno'=>'ASC','codigo'=>'ASC')
        );

        $solicitudes = $em->getRepository('OfertasBundle:SolicitudOferta')->findAll();

        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        /* $aceptadas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
             array('rechazado'=>false), array('codigo'=>'ASC')
         );*/

        $montoCosteo = 0;
        $montoOfertaCUP = 0;
        $montoOfertaCUC = 0;
        for($i = 0; $i < count($ofertas); $i++)
        {
            $montoCosteo += $ofertas[$i]->getValorCosteo();
            $montoOfertaCUP += $ofertas[$i]->getValorOfertaCUP();
            $montoOfertaCUC += $ofertas[$i]->getValorOfertaCUC();
        }

        return $this->render('OfertasBundle:Ofertas:solicitudes.html.twig',array(
            'ofertas' => $ofertas,
            'solicitudes' => $solicitudes,
            'clientes' => $clientes,

            'montoCosteo' => $montoCosteo,
            'montoOfertaCUP' => $montoOfertaCUP,
            'montoOfertaCUC' => $montoOfertaCUC,
        ));
    }
    public function solicitudesRAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>false, 'fechaEntregaCliente'=>null), array('codigo'=>'ASC','anno'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        /* $aceptadas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
             array('rechazado'=>false), array('codigo'=>'ASC')
         );*/

        $montoCosteo = 0;
        $montoOfertaCUP = 0;
        $montoOfertaCUC = 0;
        for($i = 0; $i < count($ofertas); $i++)
        {
            $montoCosteo += $ofertas[$i]->getValorCosteo();
            $montoOfertaCUP += $ofertas[$i]->getValorOfertaCUP();
            $montoOfertaCUC += $ofertas[$i]->getValorOfertaCUC();
        }

        return $this->render('OfertasBundle:Ofertas:solicitudesR.html.twig',array(
            'ofertas' => $ofertas,
            'clientes' => $clientes,

            'montoCosteo' => $montoCosteo,
            'montoOfertaCUP' => $montoOfertaCUP,
            'montoOfertaCUC' => $montoOfertaCUC,
        ));
    }

    public function ofertasRechazadasAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>true), array('anno'=>'ASC','codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        $montoCosteo = 0;
        $montoOfertaCUP = 0;
        $montoOfertaCUC = 0;
        for($i = 0; $i < count($ofertas); $i++)
        {
            $montoCosteo += $ofertas[$i]->getValorCosteo();
            $montoOfertaCUP += $ofertas[$i]->getValorOfertaCUP();
            $montoOfertaCUC += $ofertas[$i]->getValorOfertaCUC();
        }

        return $this->render('OfertasBundle:Ofertas:ofertasRechazadas.html.twig',array(
            'ofertas' => $ofertas,
            'clientes' => $clientes,

            'montoCosteo' => $montoCosteo,
            'montoOfertaCUP' => $montoOfertaCUP,
            'montoOfertaCUC' => $montoOfertaCUC,
        ));
    }
    public function ofertasAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertasN = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>false), array('anno'=>'ASC','prioridad'=>'DESC','codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        $solicitudes = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array(), array('anno'=>'ASC','prioridad'=>'DESC','codigo'=>'ASC')
        );

        $ofertas = array();
        for($j = 0; $j < count($ofertasN); $j++)
        {
            if($ofertasN[$j]->getFechaEntregaCliente() != '')
            {
                $ofertas [] = $ofertasN[$j];
            }
        }

        $montoCosteo = 0;
        $montoOfertaCUP = 0;
        $montoOfertaCUC = 0;
        for($i = 0; $i < count($ofertas); $i++)
        {
            $montoCosteo += $ofertas[$i]->getValorCosteo();
            $montoOfertaCUP += $ofertas[$i]->getValorOfertaCUP();
            $montoOfertaCUC += $ofertas[$i]->getValorOfertaCUC();
        }

        return $this->render('OfertasBundle:Ofertas:ofertas.html.twig',array(
            'ofertas' => $ofertas,
            'clientes' => $clientes,
            'solicitudes' => $solicitudes,

            'montoCosteo' => $montoCosteo,
            'montoOfertaCUP' => $montoOfertaCUP,
            'montoOfertaCUC' => $montoOfertaCUC,
        ));
    }
    public function ofertasRAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertasN = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>false), array('anno'=>'ASC','codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        $ofertas = array();
        for($j = 0; $j < count($ofertasN); $j++)
        {
            if($ofertasN[$j]->getFechaEntregaCliente() != '')
            {
                $ofertas [] = $ofertasN[$j];
            }
        }

        $montoCosteo = 0;
        $montoOfertaCUP = 0;
        $montoOfertaCUC = 0;
        for($i = 0; $i < count($ofertas); $i++)
        {
            $montoCosteo += $ofertas[$i]->getValorCosteo();
            $montoOfertaCUP += $ofertas[$i]->getValorOfertaCUP();
            $montoOfertaCUC += $ofertas[$i]->getValorOfertaCUC();
        }

        return $this->render('OfertasBundle:Ofertas:ofertasR.html.twig',array(
            'ofertas' => $ofertas,
            'clientes' => $clientes,

            'montoCosteo' => $montoCosteo,
            'montoOfertaCUP' => $montoOfertaCUP,
            'montoOfertaCUC' => $montoOfertaCUC,
        ));
    }
    public function preContratosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>true, 'esContrato'=>false), array('anno'=>'ASC','codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        $montoCosteo = 0;
        $montoOfertaCUP = 0;
        $montoOfertaCUC = 0;
        for($i = 0; $i < count($ofertas); $i++)
        {
            $montoCosteo += $ofertas[$i]->getValorCosteo();
            $montoOfertaCUP += $ofertas[$i]->getValorOfertaCUP();
            $montoOfertaCUC += $ofertas[$i]->getValorOfertaCUC();
        }

        return $this->render('OfertasBundle:Ofertas:preContratos.html.twig',array(
            'ofertas' => $ofertas,
            'clientes' => $clientes,

            'montoCosteo' => $montoCosteo,
            'montoOfertaCUP' => $montoOfertaCUP,
            'montoOfertaCUC' => $montoOfertaCUC,
        ));
    }
    public function terminadosContratosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('terminado'=>true), array('codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        $montoCosteo = 0;
        $montoOfertaCUP = 0;
        $montoOfertaCUC = 0;
        for($i = 0; $i < count($ofertas); $i++)
        {
            $montoCosteo += $ofertas[$i]->getValorCosteo();
            $montoOfertaCUP += $ofertas[$i]->getValorOfertaCUP();
            $montoOfertaCUC += $ofertas[$i]->getValorOfertaCUC();
        }

        return $this->render('OfertasBundle:Ofertas:ofertasEjecutadas.html.twig',array(
            'ofertas' => $ofertas,
            'clientes' => $clientes,

            'montoCosteo' => $montoCosteo,
            'montoOfertaCUP' => $montoOfertaCUP,
            'montoOfertaCUC' => $montoOfertaCUC,
        ));
    }
    public function darTerminadoContratoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $id
        ));
        $idCliente = $solicitud[0]->getIdCliente()->getId();
        $solicitud[0]->setTerminado(true);


        $em->flush();

        return $this->redirect($this->generateUrl('preContratos'));
    }
    public function generarResumenOfertasAction()
    {
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];

        $fInicio = new \DateTime($fechaInicio);
        $fFin = new \DateTime($fechaFin);

        $fBuscarInicio = $fInicio->format('Y-m-d H:i:s');
        $fBuscarFin = $fFin->format('Y-m-d H:i:s');

        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false), array('codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        $sql = "SELECT p FROM OfertasBundle:SolicitudOferta";
        if($fechaInicio != '' && $fechaFin != '')
        {
            $sql.=" p WHERE p.fechaElaboracionOferta  >= '$fBuscarInicio' and p.fechaElaboracionOferta  <= '$fBuscarFin' ORDER BY p.codigo ASC";

            $consulta = $em->createQuery($sql);
            $listaProdCCob = $consulta->getResult();
        }


        $filename="ModeloResumen.xlsx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;

        // Cargando la hoja de cálculo
        $objReader = new \PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load($filename);

        $no = 1;
        $casilla = 2;
        $totalCUC = 0;
        $totalCUP = 0;
        for($i = 0 ; $i < count($listaProdCCob); $i++)
        {
            $codigo = $listaProdCCob[$i]->getCodigo();
            $valorOfertaCUC = $listaProdCCob[$i]->getValorOfertaCUC();
            $totalCUC += $valorOfertaCUC;
            $valorOfertaCUP = $listaProdCCob[$i]->getValorOfertaCUP();
            $totalCUP += $valorOfertaCUP;
            $idCliente = $listaProdCCob[$i]->getIdCliente();
            //$codCliente = '';
            $nombreCliente = '';
            for($j = 0; $j < count($clientes); $j++)
            {
                if($idCliente == $clientes[$j])
                {
                    //$codCliente = $clientes[$j]->getCodigo();
                    $nombreCliente = $clientes[$j]->getCliente();
                }
            }
            $descripcion = $listaProdCCob[$i]->getDescripcion();
            $objPHPExcel->getActiveSheet()->SetCellValue('A'.$casilla, $no);
            $objPHPExcel->getActiveSheet()->SetCellValue('B'.$casilla, $nombreCliente);
            $objPHPExcel->getActiveSheet()->SetCellValue('C'.$casilla, ' '.$codigo);
            $objPHPExcel->getActiveSheet()->SetCellValue('D'.$casilla, $descripcion);
            $objPHPExcel->getActiveSheet()->SetCellValue('E'.$casilla, $valorOfertaCUC);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'.$casilla, $valorOfertaCUP);
            $casilla++;
            $no++;

            if($no <= count($listaProdCCob))
            {
                $objPHPExcel->getActiveSheet()->insertNewRowBefore($casilla);
            }
            else
            {
                $objPHPExcel->getActiveSheet()->SetCellValue('E'.$casilla, $totalCUC);
                $objPHPExcel->getActiveSheet()->SetCellValue('F'.$casilla, $totalCUP);
            }
        }

        $objPHPExcel->getActiveSheet()->setTitle('Resumen de Ofertas');

        $objPHPExcel->setActiveSheetIndex(0);

        $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);

        $filename="Resumen.xlsx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
        $objWriter->save($path);

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);
        return $response;
    }
    public function solicitudesOfertaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $id
        ));
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('idCliente'=>$cliente[0]), array('codigo'=>'ASC')
        );

        return $this->render('OfertasBundle:Ofertas:solicitudesOferta.html.twig',array(
            'cliente' => $cliente[0],
            'ofertas' => $ofertas,
        ));
    }
    public function insertarSolicitudAction()
    {
        $idCliente = $_POST['idCliente'];
        $descripcion = $_POST['descripcion'];
        $fechaLevantamiento = $_POST['fechaLevantamiento'];
        $horaLevantamiento = $_POST['horaLevantamiento'];

        $em = $this->getDoctrine()->getManager();

        $hoy = new \DateTime('now');
        $anno = $hoy->format('Y');
        $solicitudes = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('anno' => $anno, 'esReoferta' => false), array('codigo' => 'ASC'));

        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        if(count($solicitudes) == 0)
        {
            $codigo = '001';
        }
        else
        {
            $ultimo = $solicitudes[count($solicitudes)-1]->getCodigo()+1;

            if($ultimo < 10)
            {
                $codigo = '00'.$ultimo;
            }
            elseif($ultimo >=10 && $ultimo <= 99)
            {
                $codigo = '0'.$ultimo;
            }
            else
            {
                $codigo = $ultimo;
            }
        }

        $solicitud = new SolicitudOferta();
        $solicitud->setCodigo($codigo);
        $solicitud->setAnno($anno);
        $solicitud->setDescripcion($descripcion);
        $solicitud->setAprobado(false);
        $solicitud->setRechazado(false);
        $solicitud->setTieneCaratula(false);
        $solicitud->setEsReoferta(false);
        $solicitud->setEsContrato(false);
        $solicitud->setTerminado(false);
        $solicitud->setCantReofertas(0);
        $solicitud->setPrioridad(1);
        $solicitud->setFechaLevantamiento(new \DateTime($fechaLevantamiento));
        $solicitud->setHoraLevantamiento(new \DateTime($horaLevantamiento));
        $solicitud->setIdCliente($cliente[0]);

        $em->persist($solicitud);
        $em->flush();

        //  CREAR EL MODELO Y ENVIARLO POR CORREO
        $nuevaHora = new \DateTime($horaLevantamiento);

        $clienteW = $cliente[0]->getCliente();
        $noSolicW = $codigo;
        $ministerioW = '';
        $ministerioW = $cliente[0]->getEmpresa();
        $sectorW = '';
        $sectorW = $cliente[0]->getSector();
        $direccionClienteW = $cliente[0]->getDireccion();
        $nombreClienteW = $cliente[0]->getNombreContacto();
        $telefonoW = $cliente[0]->getTelefonoContacto();
        $emailW = $cliente[0]->getEmail();
        $nombreObraW = '';
        $direccionObraW = $cliente[0]->getDireccionObra();
        $fechaLevanW = $fechaLevantamiento;
        $horaLevanW = $nuevaHora->format('H:i a');
        $fechaEntregaW = '';

        $this->crearModeloWord($clienteW,$noSolicW,$ministerioW,$sectorW,$direccionClienteW,$nombreClienteW,
            $telefonoW,$emailW,$nombreObraW,$direccionObraW,$fechaLevanW,$horaLevanW,$fechaEntregaW);
        //  ENVIARLO POR CORREO
        $filename="Modelo.docx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
        /*$from = 'alertas@ccc.co.cu';
        $fromName = 'Alertas';
        $subject = 'MODELO';

        $file = $path;
        $htmlContent = '';
        //header for sender info
        $headers = "From: $fromName"." <".$from.">";
        //boundary
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        //headers for attachment
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        //multipart boundary
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
        //preparing attachment
        if(!empty($file) > 0)
        {
            if(is_file($file))
            {
                $message .= "--{$mime_boundary}\n";
                $fp =    @fopen($file,"rb");
                $data =  @fread($fp,filesize($file));

                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
                    //"Content-Description: ".basename($files[$i])."\n" .
                    "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;*/

        $listaCorreo = array('victor@ccc.co.cu', 'victor@ccc.co.cu');
        $asunto = 'Modelo';
        $mensaje = 'Nueva Solicitud';

        $this->EnviarParteCorreo($asunto,$mensaje, $listaCorreo, $path);
        /*
        @mail('victor@ccc.co.cu', $subject, $message, $headers, $returnpath);
        @mail('yenised@ccc.co.cu', $subject, $message, $headers, $returnpath);
        @mail('osvaldo@ccc.co.cu', $subject, $message, $headers, $returnpath);
        @mail('eamat@ccc.co.cu', $subject, $message, $headers, $returnpath);*/



        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    /*ENVIAR EMAIL*/
    function EnviarParteCorreo($asunto,$cuerpoMensaje,$listaCorreo,$path)
    {
        try {
            $mail = new PHPMailer(); //New instance, with exceptions enabled

            $body = $cuerpoMensaje;

            $mail->isSMTP();                    // Set mailer to use SMTP
            $mail->CharSet = "utf-8";           // set charset to utf8
            $mail->SMTPAuth = true;             // Enable SMTP authentication
            $mail->SMTPSecure = 'tls';          // Enable TLS encryption, `ssl` also accepted
            $mail->Host       = "192.168.1.1";        // SMTP server
            $mail->Port       = "2525";          // set the SMTP server port
            $mail->Username   = "alertas@ccc.co.cu";      // SMTP server username
            $mail->Password   = "Prueba2017";          // SMTP server password
            $mail->SMTPDebug = 0;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->From       = "alertas@ccc.co.cu";
            $mail->FromName   = "Alerta-Sistema";
            //$to = $userMail;

            for($i = 0; $i < count($listaCorreo);$i++)
            {
                $mail->AddAddress($listaCorreo[$i]);
            }
            $mail->Subject  = $asunto;
            $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            $mail->WordWrap   = 255; // set word wrap

            $mail->addAttachment($path);

            $mail->MsgHTML($body);
            $mail->IsHTML(true); // send as HTML
            $mail->Send();
        }
        catch (\Exception $e)
        {
            print_r($e->errorMessage());die;
        }
    }

    public function editarSolicitudAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $descripcion = $_POST['descripcion'];
        $fechaLevantamiento = $_POST['fechaLevantamiento'];
        $horaLevantamiento = $_POST['horaLevantamiento'];

        $em = $this->getDoctrine()->getManager();

        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        $solicitud[0]->setDescripcion($descripcion);
        $solicitud[0]->setFechaLevantamiento(new \DateTime($fechaLevantamiento));
        $solicitud[0]->setHoraLevantamiento(new \DateTime($horaLevantamiento));

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function insertarSolicitudCAction()
    {
        $idCliente = $_POST['idCliente'];
        $nombreObra = $_POST['nombreObra'];
        $direccionObra = $_POST['direccionObra'];
        $descripcion = $_POST['descripcion'];
        $fechaLevantamiento = $_POST['fechaLevantamiento'];
        $horaLevantamiento = $_POST['horaLevantamiento'];

        $em = $this->getDoctrine()->getManager();

        $hoy = new \DateTime('now');
        $anno = $hoy->format('Y');
        $solicitudes = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('anno' => $anno, 'esReoferta' => false), array('codigo' => 'ASC'));

        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        if(count($solicitudes) == 0)
        {
            $codigo = '001';
        }
        else
        {
            $ultimo = $solicitudes[count($solicitudes)-1]->getCodigo()+1;

            if($ultimo < 10)
            {
                $codigo = '00'.$ultimo;
            }
            elseif($ultimo >=10 && $ultimo <= 99)
            {
                $codigo = '0'.$ultimo;
            }
            else
            {
                $codigo = $ultimo;
            }
        }

        $solicitud = new SolicitudOferta();
        $solicitud->setCodigo($codigo);
        $solicitud->setAnno($anno);
        $solicitud->setDescripcion($descripcion);
        $solicitud->setAprobado(false);
        $solicitud->setRechazado(false);
        $solicitud->setEsReoferta(false);
        $solicitud->setEsContrato(false);
        $solicitud->setTerminado(false);
        $solicitud->setTieneCaratula(false);
        $solicitud->setCantReofertas(0);
        $solicitud->setPrioridad(1);
        $solicitud->setNombreObra($nombreObra);
        $solicitud->setDireccionObra($direccionObra);
        $solicitud->setFechaLevantamiento(new \DateTime($fechaLevantamiento));
        $solicitud->setHoraLevantamiento(new \DateTime($horaLevantamiento));
        $solicitud->setIdCliente($cliente[0]);

        $em->persist($solicitud);
        $em->flush();

        //  CREAR EL MODELO Y ENVIARLO POR CORREO
        $nuevaHora = new \DateTime($horaLevantamiento);

        $clienteW = '';
        $clienteW = $cliente[0]->getCliente();
        $noSolicW = $codigo;
        $ministerioW = '';
        $ministerioW = $cliente[0]->getEmpresa();
        $sectorW = '';
        $sectorW = $cliente[0]->getSector();
        $direccionClienteW = $cliente[0]->getDireccion();
        $nombreClienteW = $cliente[0]->getNombreContacto();
        $telefonoW = $cliente[0]->getTelefonoContacto();
        $emailW = $cliente[0]->getEmail();
        $nombreObraW = $nombreObra;
        $direccionObraW = $direccionObra;
        $fechaLevanW = $fechaLevantamiento;
        $horaLevanW = $nuevaHora->format('H:i a');
        $fechaEntregaW = '';

        $this->crearModeloWord($clienteW,$noSolicW,$ministerioW,$sectorW,$direccionClienteW,$nombreClienteW,
            $telefonoW,$emailW,$nombreObraW,$direccionObraW,$fechaLevanW,$horaLevanW,$fechaEntregaW);
        //  ENVIARLO POR CORREO
        $filename="Modelo.docx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
        /*$from = 'alertas@ccc.co.cu';
        $fromName = 'Alertas';
        $subject = 'MODELO';

        $file = $path;
        $htmlContent = '';
        //header for sender info
        $headers = "From: $fromName"." <".$from.">";
        //boundary
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        //headers for attachment
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        //multipart boundary
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
        //preparing attachment
        if(!empty($file) > 0)
        {
            if(is_file($file))
            {
                $message .= "--{$mime_boundary}\n";
                $fp =    @fopen($file,"rb");
                $data =  @fread($fp,filesize($file));

                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
                    //"Content-Description: ".basename($files[$i])."\n" .
                    "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;

        @mail('victor@ccc.co.cu', $subject, $message, $headers, $returnpath);
        @mail('yenised@ccc.co.cu', $subject, $message, $headers, $returnpath);
        @mail('osvaldo@ccc.co.cu', $subject, $message, $headers, $returnpath);
        @mail('eamat@ccc.co.cu', $subject, $message, $headers, $returnpath);*/

        $listaCorreo = array('victor@ccc.co.cu', 'yenised@ccc.co.cu', 'osvaldo@ccc.co.cu', 'eamat@ccc.co.cu');
        $asunto = 'Modelo';
        $mensaje = 'Nueva Solicitud';

        $this->EnviarParteCorreo($asunto,$mensaje, $listaCorreo, $path);

        return $this->redirect($this->generateUrl('ofertas'));
    }
    public function editarSolicitudCAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $nombreObra = $_POST['nombreObra'];
        $direccionObra = $_POST['direccionObra'];
        $descripcion = $_POST['descripcion'];
        $fechaLevantamiento = $_POST['fechaLevantamiento'];
        $horaLevantamiento = $_POST['horaLevantamiento'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));


        $solicitud[0]->setDescripcion($descripcion);
        $solicitud[0]->setNombreObra($nombreObra);
        $solicitud[0]->setDireccionObra($direccionObra);
        $solicitud[0]->setFechaLevantamiento(new \DateTime($fechaLevantamiento));
        $solicitud[0]->setHoraLevantamiento(new \DateTime($horaLevantamiento));
        $solicitud[0]->setIdCliente($cliente[0]);

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function insertarReofertaAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $descripcion = $_POST['descripcion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        $codigo = $solicitud[0]->getCodigo();
        $fechaLevantamiento = $solicitud[0]->getFechaLevantamiento();
        $cantR = $solicitud[0]->getCantReofertas();

        $hoy  = new \DateTime('now');
        $anno = $hoy->format('Y');

        $nuevaSolicitud = new SolicitudOferta();
        $nuevaSolicitud->setCodigo($codigo.'-'.($cantR + 1));
        $nuevaSolicitud->setDescripcion($descripcion);
        $nuevaSolicitud->setAnno($anno);
        $nuevaSolicitud->setAprobado(false);
        $nuevaSolicitud->setRechazado(false);
        $nuevaSolicitud->setEsReoferta(true);
        $nuevaSolicitud->setIdsolicitudoriginal($solicitud[0]->getId());
        $nuevaSolicitud->setTerminado(false);
        $nuevaSolicitud->setTieneCaratula(false);
        $nuevaSolicitud->setCantReofertas(0);
        $nuevaSolicitud->setPrioridad(1);
        $nuevaSolicitud->setFechaLevantamiento($fechaLevantamiento);
        $nuevaSolicitud->setIdCliente($cliente[0]);

        $em->persist($nuevaSolicitud);

        $solicitud[0]->setCantReofertas($cantR + 1);
        $em->flush();

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function insertarReofertaAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $descripcion = $_POST['descripcion'];

        $em = $this->getDoctrine()->getManager();
        $oferta = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        if($oferta[0]->getEsReoferta() == false)
        {
            $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
                'id' => $idSolicitud
            ));
        }
        else
        {
            $codViejo = $oferta[0]->getCodigo();
            $ralla = explode('-',$codViejo);
            $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
                'codigo' => $ralla[0]
            ));
            //print_r($solicitud[0]->getCodigo());
        }

        $idCliente = $solicitud[0]->getIdCliente()->getId();
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        $codigo = $solicitud[0]->getCodigo();
        $fechaLevantamiento = $solicitud[0]->getFechaLevantamiento();
        $cantR = $solicitud[0]->getCantReofertas();

        $hoy  = new \DateTime('now');
        $anno = $hoy->format('Y');

        $nuevaSolicitud = new SolicitudOferta();
        $nuevaSolicitud->setCodigo($codigo.'-'.($cantR + 1));
        $nuevaSolicitud->setDescripcion($descripcion);
        $nuevaSolicitud->setAnno($anno);
        $nuevaSolicitud->setAprobado(false);
        $nuevaSolicitud->setRechazado(false);
        $nuevaSolicitud->setEsReoferta(true);
        $nuevaSolicitud->setTieneCaratula(false);
        $nuevaSolicitud->setIdsolicitudoriginal($solicitud[0]->getId());
        $nuevaSolicitud->setTerminado(false);
        $nuevaSolicitud->setCantReofertas(0);
        $nuevaSolicitud->setPrioridad(1);
        $nuevaSolicitud->setFechaLevantamiento($fechaLevantamiento);
        $nuevaSolicitud->setIdCliente($cliente[0]);

        $em->persist($nuevaSolicitud);

        $solicitud[0]->setCantReofertas($cantR + 1);
        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function insertarReofertaRAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $descripcion = $_POST['descripcion'];

        $em = $this->getDoctrine()->getManager();
        $oferta = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        if($oferta[0]->getEsReoferta() == false)
        {
            $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
                'id' => $idSolicitud
            ));
        }
        else
        {
            $codViejo = $oferta[0]->getCodigo();
            $ralla = explode('-',$codViejo);
            $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
                'codigo' => $ralla[0]
            ));
            //print_r($solicitud[0]->getCodigo());
        }

        $idCliente = $solicitud[0]->getIdCliente()->getId();
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        $codigo = $solicitud[0]->getCodigo();
        $fechaLevantamiento = $solicitud[0]->getFechaLevantamiento();
        $cantR = $solicitud[0]->getCantReofertas();

        $hoy  = new \DateTime('now');
        $anno = $hoy->format('Y');

        $nuevaSolicitud = new SolicitudOferta();
        $nuevaSolicitud->setCodigo($codigo.'-'.($cantR + 1));
        $nuevaSolicitud->setDescripcion($descripcion);
        $nuevaSolicitud->setAnno($anno);
        $nuevaSolicitud->setAprobado(false);
        $nuevaSolicitud->setRechazado(false);
        $nuevaSolicitud->setEsContrato(false);
        $nuevaSolicitud->setEsReoferta(true);
        $nuevaSolicitud->setIdsolicitudoriginal($solicitud[0]->getId());
        $nuevaSolicitud->setTerminado(false);
        $nuevaSolicitud->setTieneCaratula(false);
        $nuevaSolicitud->setCantReofertas(0);
        $nuevaSolicitud->setPrioridad(1);
        $nuevaSolicitud->setFechaLevantamiento($fechaLevantamiento);
        $nuevaSolicitud->setIdCliente($cliente[0]);

        $em->persist($nuevaSolicitud);

        $solicitud[0]->setCantReofertas($cantR + 1);
        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function insertarReofertaOAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $descripcion = $_POST['descripcion'];

        $em = $this->getDoctrine()->getManager();
        $oferta = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        if($oferta[0]->getEsReoferta() == false)
        {
            $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
                'id' => $idSolicitud
            ));
        }
        else
        {
            $codViejo = $oferta[0]->getCodigo();
            $ralla = explode('-',$codViejo);
            $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
                'codigo' => $ralla[0]
            ));
            //print_r($solicitud[0]->getCodigo());
        }

        $idCliente = $solicitud[0]->getIdCliente()->getId();
        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $idCliente
        ));

        $codigo = $solicitud[0]->getCodigo();
        $fechaLevantamiento = $solicitud[0]->getFechaLevantamiento();
        $cantR = $solicitud[0]->getCantReofertas();

        $hoy  = new \DateTime('now');
        $anno = $hoy->format('Y');

        $nuevaSolicitud = new SolicitudOferta();
        $nuevaSolicitud->setCodigo($codigo.'-'.($cantR + 1));
        $nuevaSolicitud->setDescripcion($descripcion);
        $nuevaSolicitud->setAnno($anno);
        $nuevaSolicitud->setAprobado(false);
        $nuevaSolicitud->setRechazado(false);
        $nuevaSolicitud->setEsReoferta(true);
        $nuevaSolicitud->setTieneCaratula(false);
        $nuevaSolicitud->setIdsolicitudoriginal($solicitud[0]->getId());
        $nuevaSolicitud->setCantReofertas(0);
        $nuevaSolicitud->setPrioridad(1);
        $nuevaSolicitud->setFechaLevantamiento($fechaLevantamiento);
        $nuevaSolicitud->setIdCliente($cliente[0]);

        $em->persist($nuevaSolicitud);

        $solicitud[0]->setCantReofertas($cantR + 1);
        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function insertarFechaCuantificacionAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $fechaCuantificacion = $_POST['fechaCuantificacion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaCuantificacion(new \DateTime($fechaCuantificacion));

        $em->flush();

        $asunto = 'Cuantificación insertada';
        $mensaje = 'Se estableció la fecha de cuantificación de la Oferta '.$solicitud[0]->getCodigo();

        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','teresa.mo@ccc.co.cu','Tere',utf8_decode($asunto),utf8_decode($mensaje));
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','grete.rodriguez@ccc.co.cu','Grete',utf8_decode($asunto),utf8_decode($mensaje));

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function editarFechaCuantificacionAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $fechaCuantificacion = $_POST['fechaCuantificacion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaCuantificacion(new \DateTime($fechaCuantificacion));

        $em->flush();

        $asunto = 'Cuantificación ajustada';
        $mensaje = 'Se modificó la fecha de cuantificación de la Oferta '.$solicitud[0]->getCodigo();

        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','teresa.mo@ccc.co.cu','Tere',utf8_decode($asunto),utf8_decode($mensaje));
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','grete.rodriguez@ccc.co.cu','Grete',utf8_decode($asunto),utf8_decode($mensaje));

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function insertarFechaCuantificacionAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $fechaCuantificacion = $_POST['fechaCuantificacion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaCuantificacion(new \DateTime($fechaCuantificacion));

        $em->flush();

        $asunto = 'Cuantificación insertada';
        $mensaje = 'Se estableció la fecha de cuantificación de la Oferta '.$solicitud[0]->getCodigo().' - '.$solicitud[0]->getDescripcion();

        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','teresa.mo@ccc.co.cu','Tere',utf8_decode($asunto),utf8_decode($mensaje));
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','grete.rodriguez@ccc.co.cu','Grete',utf8_decode($asunto),utf8_decode($mensaje));

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function editarFechaCuantificacionAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $fechaCuantificacion = $_POST['fechaCuantificacion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaCuantificacion(new \DateTime($fechaCuantificacion));

        $em->flush();

        $asunto = 'Cuantificación ajustada';
        $mensaje = 'Se modificó la fecha de cuantificación de la Oferta '.$solicitud[0]->getCodigo().' - '.$solicitud[0]->getDescripcion();

        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','teresa.mo@ccc.co.cu','Tere',utf8_decode($asunto),utf8_decode($mensaje));
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','grete.rodriguez@ccc.co.cu','Grete',utf8_decode($asunto),utf8_decode($mensaje));

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function insertarCosteoAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $fechaCosteo = $_POST['fechaCosteo'];
        $valorCosteo = $_POST['valorCosteo'];
        $tipoMoneda = $_POST['tipoMoneda'];
        $fechaElaboradaOferta = $_POST['fechaElaboradaOferta'];
        $valorOfertaCUP = $_POST['valorOfertaCUP'];
        $valorOfertaCUC = $_POST['valorOfertaCUC'];
        $valorMaterialesCUP = $_POST['valorMaterialesCUP'];
        $valorMaterialesCUC = $_POST['valorMaterialesCUC'];
        $cantidadTrabajadores = $_POST['cantidadTrabajadores'];
        $tiempoEjecucion = $_POST['tiempoEjecucion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaCosteo(new \DateTime($fechaCosteo));
        $solicitud[0]->setValorCosteo($valorCosteo);
        $solicitud[0]->setTipoMoneda($tipoMoneda);
        $solicitud[0]->setFechaElaboracionOferta(new \DateTime($fechaElaboradaOferta));
        $solicitud[0]->setValorOfertaCUP($valorOfertaCUP);
        $solicitud[0]->setValorOfertaCUC($valorOfertaCUC);
        $solicitud[0]->setValorOfertaMaterialesCUC($valorMaterialesCUC);
        $solicitud[0]->setValorOfertaMaterialesCUP($valorMaterialesCUP);
        $solicitud[0]->setCantidadTrabajadores($cantidadTrabajadores);
        $solicitud[0]->setTiempoEjecucion($tiempoEjecucion);

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function editarCosteoAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $fechaCosteo = $_POST['fechaCosteo'];
        $valorCosteo = $_POST['valorCosteo'];
        $tipoMoneda = $_POST['tipoMoneda'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaCosteo(new \DateTime($fechaCosteo));
        $solicitud[0]->setValorCosteo($valorCosteo);
        $solicitud[0]->setTipoMoneda($tipoMoneda);

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function editarCosteoAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $fechaCosteo = $_POST['fechaCosteo'];
        $valorCosteo = $_POST['valorCosteo'];
        $tipoMoneda = $_POST['tipoMoneda'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaCosteo(new \DateTime($fechaCosteo));
        $solicitud[0]->setValorCosteo($valorCosteo);
        $solicitud[0]->setTipoMoneda($tipoMoneda);

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function insertarCosteoAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $fechaCosteo = $_POST['fechaCosteo'];
        $valorCosteo = $_POST['valorCosteo'];
        $tipoMoneda = $_POST['tipoMoneda'];
        $fechaElaboradaOferta = $_POST['fechaElaboradaOferta'];
        $valorOfertaCUP = $_POST['valorOfertaCUP'];
        $valorOfertaCUC = $_POST['valorOfertaCUC'];
        $valorMaterialesCUP = $_POST['valorMaterialesCUP'];
        $valorMaterialesCUC = $_POST['valorMaterialesCUC'];
        $cantidadTrabajadores = $_POST['cantidadTrabajadores'];
        $tiempoEjecucion = $_POST['tiempoEjecucion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaCosteo(new \DateTime($fechaCosteo));
        $solicitud[0]->setValorCosteo($valorCosteo);
        $solicitud[0]->setTipoMoneda($tipoMoneda);
        $solicitud[0]->setFechaElaboracionOferta(new \DateTime($fechaElaboradaOferta));
        $solicitud[0]->setValorOfertaCUP($valorOfertaCUP);
        $solicitud[0]->setValorOfertaCUC($valorOfertaCUC);
        $solicitud[0]->setValorOfertaMaterialesCUC($valorMaterialesCUC);
        $solicitud[0]->setValorOfertaMaterialesCUP($valorMaterialesCUP);
        $solicitud[0]->setCantidadTrabajadores($cantidadTrabajadores);
        $solicitud[0]->setTiempoEjecucion($tiempoEjecucion);

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function editarDatosOfertaAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $fechaElaboradaOferta = $_POST['fechaElaboradaOferta'];
        $valorOfertaCUP = $_POST['valorOfertaCUP'];
        $valorOfertaCUC = $_POST['valorOfertaCUC'];
        $valorMaterialesCUP = $_POST['valorMaterialesCUP'];
        $valorMaterialesCUC = $_POST['valorMaterialesCUC'];
        $cantidadTrabajadores = $_POST['cantidadTrabajadores'];
        $tiempoEjecucion = $_POST['tiempoEjecucion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        $solicitud[0]->setFechaElaboracionOferta(new \DateTime($fechaElaboradaOferta));
        $solicitud[0]->setValorOfertaCUP($valorOfertaCUP);
        $solicitud[0]->setValorOfertaCUC($valorOfertaCUC);
        $solicitud[0]->setValorOfertaMaterialesCUP($valorMaterialesCUP);
        $solicitud[0]->setValorOfertaMaterialesCUC($valorMaterialesCUC);
        $solicitud[0]->setCantidadTrabajadores($cantidadTrabajadores);
        $solicitud[0]->setTiempoEjecucion($tiempoEjecucion);

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function editarDatosOfertaAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $fechaElaboradaOferta = $_POST['fechaElaboradaOferta'];
        $valorOfertaCUP = $_POST['valorOfertaCUP'];
        $valorOfertaCUC = $_POST['valorOfertaCUC'];
        $valorMaterialesCUP = $_POST['valorMaterialesCUP'];
        $valorMaterialesCUC = $_POST['valorMaterialesCUC'];
        $cantidadTrabajadores = $_POST['cantidadTrabajadores'];
        $tiempoEjecucion = $_POST['tiempoEjecucion'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        $solicitud[0]->setFechaElaboracionOferta(new \DateTime($fechaElaboradaOferta));
        $solicitud[0]->setValorOfertaCUP($valorOfertaCUP);
        $solicitud[0]->setValorOfertaCUC($valorOfertaCUC);
        $solicitud[0]->setValorOfertaMaterialesCUP($valorMaterialesCUP);
        $solicitud[0]->setValorOfertaMaterialesCUC($valorMaterialesCUC);
        $solicitud[0]->setCantidadTrabajadores($cantidadTrabajadores);
        $solicitud[0]->setTiempoEjecucion($tiempoEjecucion);

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function insertarFechaEntregaClienteAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $fechaEntregaCliente = $_POST['fechaEntregaCliente'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaEntregaCliente(new \DateTime($fechaEntregaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function editarFechaEntregaClienteAction()
    {
        $idCliente = $_POST['idCliente'];
        $idSolicitud = $_POST['idSolicitud'];
        $fechaEntregaCliente = $_POST['fechaEntregaCliente'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaEntregaCliente(new \DateTime($fechaEntregaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudesOferta', array('id'=>$idCliente)));
    }
    public function editarFechaEntregaClienteAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $fechaEntregaCliente = $_POST['fechaEntregaCliente'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $solicitud[0]->setFechaEntregaCliente(new \DateTime($fechaEntregaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function aceptarSolicitudAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $id
        ));
        $nombreCliente = $solicitud[0]->getIdCliente()->getCliente().'-'.$solicitud[0]->getIdCliente()->getEmpresa();

        //print_r('feaaa');die;

        if($solicitud[0]->getValorOfertaCUC() !='' || $solicitud[0]->getValorOfertaCUP() !='')
        {
            $solicitud[0]->setAprobado(true);

            // Para el contrato
            $contrato = new Contrato();
            $contrato->setFechaEntrada(new \DateTime("now"));
            $contrato->setEsSuplemento(false);
            $contrato->setIdSolicitudOferta($solicitud[0]);

            $em->persist($contrato);

            $em->flush();

            //PARA EMAIL
            $asunto = 'Oferta Aceptada';
            $codigoOferta = $solicitud[0]->getCodigo();
            $descripcionOferta = $solicitud[0]->getDescripcion();
            $mensaje = 'Se aceptó la Oferta con No. '.$codigoOferta.'<br>';
            $mensaje .= 'Descripción de Oferta: '.$descripcionOferta.'<br>';
            $mensaje .= 'Cliente: '.$nombreCliente;

            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yenised@ccc.co.cu','Yeni',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','carlos@ccc.co.cu','Carlos',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yunior@ccc.co.cu','Carlos',utf8_decode($asunto),utf8_decode($mensaje));
        }

        return $this->redirect($this->generateUrl('ofertas'));
    }
    public function rechazarSolicitudAction($id)
    {
        $causasRechazo = $_POST['causasRechazo'];
        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $id
        ));
        $nombreCliente = $solicitud[0]->getIdCliente()->getCliente().'-'.$solicitud[0]->getIdCliente()->getEmpresa();
        $solicitud[0]->setCausasRechazo($causasRechazo);
        $solicitud[0]->setRechazado(true);

        $em->flush();

        $asunto = 'Oferta Rechazada';
        $codigoOferta = $solicitud[0]->getCodigo();

        $mensaje = 'Se rechazó la Oferta con No. '.$codigoOferta.'<br>';
        $mensaje .= 'Causas del rechazo: '.$causasRechazo;
        $mensaje .= 'Cliente: '.$nombreCliente.'<br>';

        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando',utf8_decode($asunto),utf8_decode($mensaje));
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yenised@ccc.co.cu','Yeni',utf8_decode($asunto),utf8_decode($mensaje));


        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function editarPrioridadOfertaAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $prioridad = $_POST['prioridad'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $idCliente = $solicitud[0]->getIdCliente()->getId();
        $solicitud[0]->setPrioridad($prioridad);

        $em->flush();

        if($prioridad == 10)
        {
            $textoEmail = 'Oferta '.$solicitud[0]->getCodigo().' con máxima prioridad en seguimiento y contratación.
                           Importante usted revise los datos de la misma a modo de preparación.';

            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yenised@ccc.co.cu','Yeni','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','miriam@ccc.co.cu','Miriam','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','gerardo@ccc.co.cu','Gerardo','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','economico@ccc.co.cu','Julio','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','joel@ccc.co.cu','Joel','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','lisbeth@ccc.co.cu','Lisbeth','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yunior@ccc.co.cu','Yunior','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','jcambas@ccc.co.cu','Jorge','Alta prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Victor','Alta prioridad',utf8_decode($textoEmail));
        }
        elseif($prioridad == 5)
        {
            $textoEmail = 'Oferta '.$solicitud[0]->getCodigo().' con media prioridad en seguimiento y contratación.
                           Importante usted revise los datos de la misma a modo de información.';

            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yenised@ccc.co.cu','Yeni','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','lisbeth@ccc.co.cu','Lisbeth','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yunior@ccc.co.cu','Yunior','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','miriam@ccc.co.cu','Miriam','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','gerardo@ccc.co.cu','Gerardo','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','economico@ccc.co.cu','Julio','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','joel@ccc.co.cu','Joel','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','jcambas@ccc.co.cu','Jorge','Media prioridad',utf8_decode($textoEmail));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Victor','Media prioridad',utf8_decode($textoEmail));
        }

        return $this->redirect($this->generateUrl('ofertas'));
    }
    public function contratoOfertaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $id
        ));

        return $this->render('OfertasBundle:Ofertas:contratoOferta.html.twig',array(
            'oferta' => $solicitud[0],
        ));
    }

    public function generarCaratulaOfertaAction($id)
    {
        //print_r($_POST);die;
        $alcance = $_POST['alcance'];
        $materiales = $_POST['materiales'];
        $herramientas = $_POST['herramientas'];
        $equipos = $_POST['equipos'];
        $calidad = $_POST['calidad'];
        $anticipo = $_POST['anticipo'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $id
        ));

        $solicitud[0]->setPorCientoAnticipo($anticipo);
        $solicitud[0]->setTieneCaratula(true);

        $em->flush();

        //$fechaLevantamiento = $solicitud[0]->getFechaLevantamiento()->format('y');
        $anno = $solicitud[0]->getAnno();

        $noSolic = '';
        $codSolic = $solicitud[0]->getCodigo();;
        if($solicitud[0]->getCodigo() != '')
            $noSolic = $solicitud[0]->getCodigo();
        $noSolic.='/'.$anno[2].$anno[3];

        $hoy = new \DateTime('now');
        $fecha = $hoy->format('d.m.Y');
        $cliente = $solicitud[0]->getIdCliente()->getCliente();
        $objeto = $solicitud[0]->getNombreObra();
        $dE = $solicitud[0]->getTiempoEjecucion();
        $hombre = $solicitud[0]->getCantidadTrabajadores();
        $ej = 1;
        $te = 1;
        $ob = $hombre - 2;
        $scCUP = number_format($solicitud[0]->getValorOfertaCUP(),2,',','.');
        $scCUC = number_format($solicitud[0]->getValorOfertaCUC(),2,',','.');
        $maCUP = number_format($solicitud[0]->getValorOfertaMaterialesCUP(),2,',','.');
        $maCUC = number_format($solicitud[0]->getValorOfertaMaterialesCUC(),2,',','.');
        $vT = round((($solicitud[0]->getValorOfertaCUP() / 24) + $solicitud[0]->getValorOfertaCUC()),2);
        $valorT = number_format($vT,2,',','.');
        // number_format(round((($scCUP / 24) + $scCUC),2),2,',','.')
        //print_r($maCUC.'---'.$maCUP);die;

        /*LLENANDO MODELO*/
        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/OfertaCliente.docx");

        $templateWord->setValue('noSolic',$noSolic);
        $templateWord->setValue('fecha',$fecha);
        $templateWord->setValue('cliente',$cliente);
        $templateWord->setValue('objeto',$objeto);
        $templateWord->setValue('dE',$dE);
        $templateWord->setValue('ob',$ob);
        $templateWord->setValue('ej',$ej);
        $templateWord->setValue('te',$te);
        $templateWord->setValue('scCUP',$scCUP);
        $templateWord->setValue('scCUC',$scCUC);
        $templateWord->setValue('maCUP',$maCUP);
        $templateWord->setValue('maCUC',$maCUC);
        $templateWord->setValue('valorT',$valorT);

        $checked = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unChecked = '<w:sym w:font="Wingdings" w:char="F0A8"/>';

        //  PARA EL ALCANCE
        $estaDem = false;
        $estaRes = false;
        $estaElec = false;
        $estaHid = false;
        $estaImp = false;
        $estaCar = false;
        $estaPin = false;
        $estaClima = false;
        $estaMan = false;
        for($a = 0; $a < count($alcance); $a++)
        {
            if($alcance[$a] == 'Demolición')
                $estaDem = true;
            elseif($alcance[$a] == 'Restauración')
                $estaRes = true;
            elseif($alcance[$a] == 'Electricidad')
                $estaElec = true;
            elseif($alcance[$a] == 'Hidrosanitaria')
                $estaHid = true;
            elseif($alcance[$a] == 'Impermeabilización')
                $estaImp = true;
            elseif($alcance[$a] == 'Carpintería')
                $estaCar = true;
            elseif($alcance[$a] == 'Pintura')
                $estaPin = true;
            elseif($alcance[$a] == 'Clima')
                $estaClima = true;
            elseif($alcance[$a] == 'Mantenimiento')
                $estaMan = true;
        }

        if($estaDem == true)
            $templateWord->setValue('dem',$checked);
        else
            $templateWord->setValue('dem',$unChecked);
        if($estaRes == true)
            $templateWord->setValue('res',$checked);
        else
            $templateWord->setValue('res',$unChecked);
        if($estaElec == true)
            $templateWord->setValue('elec',$checked);
        else
            $templateWord->setValue('elec',$unChecked);

        if($estaHid == true)
            $templateWord->setValue('hid',$checked);
        else
            $templateWord->setValue('hid',$unChecked);
        if($estaImp == true)
            $templateWord->setValue('imp',$checked);
        else
            $templateWord->setValue('imp',$unChecked);
        if($estaCar == true)
            $templateWord->setValue('car',$checked);
        else
            $templateWord->setValue('car',$unChecked);

        if($estaPin == true)
            $templateWord->setValue('pin',$checked);
        else
            $templateWord->setValue('pin',$unChecked);
        if($estaClima == true)
            $templateWord->setValue('clima',$checked);
        else
            $templateWord->setValue('clima',$unChecked);
        if($estaMan == true)
            $templateWord->setValue('man',$checked);
        else
            $templateWord->setValue('man',$unChecked);

        //  PARA LOS MATERIALES
        $matCliente = false;
        $matCCC = false;
        for($mat = 0; $mat < count($materiales); $mat++)
        {
            if($materiales[$mat] == 'cliente')
                $matCliente = true;
            elseif($materiales[$mat] == 'ccc')
                $matCCC = true;
        }
        if($matCliente == true)
            $templateWord->setValue('mCl',$checked);
        else
            $templateWord->setValue('mCl',$unChecked);
        if($matCCC == true)
            $templateWord->setValue('mCC',$checked);
        else
            $templateWord->setValue('mCC',$unChecked);

        //  PARA LAS HERRAMIENTAS
        $herrCliente = false;
        $herrCCC = false;
        for($mat = 0; $mat < count($herramientas); $mat++)
        {
            if($herramientas[$mat] == 'cliente')
                $herrCliente = true;
            elseif($herramientas[$mat] == 'ccc')
                $herrCCC = true;
        }
        if($herrCliente == true)
            $templateWord->setValue('hCl',$checked);
        else
            $templateWord->setValue('hCl',$unChecked);
        if($herrCCC == true)
            $templateWord->setValue('hCC',$checked);
        else
            $templateWord->setValue('hCC',$unChecked);

        //  PARA LOS EQUIPOS
        $eqCliente = false;
        $eqCCC = false;
        for($mat = 0; $mat < count($equipos); $mat++)
        {
            if($equipos[$mat] == 'cliente')
                $eqCliente = true;
            elseif($equipos[$mat] == 'ccc')
                $eqCCC = true;
        }
        if($eqCliente == true)
            $templateWord->setValue('eCl',$checked);
        else
            $templateWord->setValue('eCl',$unChecked);
        if($eqCCC == true)
            $templateWord->setValue('eCC',$checked);
        else
            $templateWord->setValue('eCC',$unChecked);

        //  PARA LA CALIDAD
        $calReq = false;
        $calReg = false;
        $calNor = false;
        for($mat = 0; $mat < count($calidad); $mat++)
        {
            if($calidad[$mat] == 'requerimientos')
                $calReq = true;
            elseif($calidad[$mat] == 'regulaciones')
                $calReg = true;
            elseif($calidad[$mat] == 'normas')
                $calNor = true;
        }
        if($calReq == true)
            $templateWord->setValue('cRC',$checked);
        else
            $templateWord->setValue('cRC',$unChecked);
        if($calReg == true)
            $templateWord->setValue('cRg',$checked);
        else
            $templateWord->setValue('cRg',$unChecked);
        if($calNor == true)
            $templateWord->setValue('cNr',$checked);
        else
            $templateWord->setValue('cNr',$unChecked);

        //  PARA LOS DIAS
        $templateWord->setValue('dH',$checked);
        $templateWord->setValue('dN',$unChecked);

        //  PARA LAS FORMAS DE PAGO
        $templateWord->setValue('fpT',$checked);
        $templateWord->setValue('fpC',$checked);

        //  PARA LOS DOCUMENTOS
        $templateWord->setValue('dcP',$checked);
        $templateWord->setValue('dcC',$checked);
        $templateWord->setValue('dcM',$checked);
        $templateWord->setValue('dcPl',$unChecked);
        $templateWord->setValue('dcO',$unChecked);

        //  PARA LOS ANTICIPOS
        $anticipoCUP = round(($solicitud[0]->getValorOfertaCUP()*$anticipo/100),2);
        $anticipoCUC = round(($solicitud[0]->getValorOfertaCUC()*$anticipo/100),2);

        $antCUP = number_format($anticipoCUP,2,',','.');
        $antCUC = number_format($anticipoCUC,2,',','.');
        $templateWord->setValue('antCUP',$antCUP);
        $templateWord->setValue('antCUC',$antCUC);
        $templateWord->setValue('ant',$anticipo);


        $filename="Oferta"." "."$codSolic".".docx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
        $templateWord->saveAs($filename);

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);
        return $response;
    }
    public function generarCaratulaOfertaRAction()
    {
        $alcance = $_POST['alcance'];
        $materiales = $_POST['materiales'];
        $herramientas = $_POST['herramientas'];
        $equipos = $_POST['equipos'];
        $calidad = $_POST['calidad'];
        $anticipo = $_POST['anticipo'];
        $idSolicitud = $_POST['idSolicitud'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        $solicitud[0]->setPorCientoAnticipo($anticipo);
        $solicitud[0]->setTieneCaratula(true);

        //$fechaLevantamiento = $solicitud[0]->getFechaLevantamiento()->format('y');
        $anno = $solicitud[0]->getAnno();
        //print_r($anno[2].$anno[3]);die;

        $noSolic = '';
        $codSolic = $solicitud[0]->getCodigo();;
        if($solicitud[0]->getCodigo() != '')
            $noSolic = $solicitud[0]->getCodigo();
        $noSolic.='/'.$anno[2].$anno[3];

        $hoy = new \DateTime('now');
        $fecha = $hoy->format('d.m.Y');
        $cliente = $solicitud[0]->getIdCliente()->getCliente();
        $objeto = $solicitud[0]->getNombreObra();
        $dE = $solicitud[0]->getTiempoEjecucion();
        $hombre = $solicitud[0]->getCantidadTrabajadores();
        $ej = 1;
        $te = 1;
        $ob = $hombre - 2;
        $scCUP = number_format($solicitud[0]->getValorOfertaCUP(),2,',','.');
        $scCUC = number_format($solicitud[0]->getValorOfertaCUC(),2,',','.');
        $maCUP = number_format($solicitud[0]->getValorOfertaMaterialesCUP(),2,',','.');
        $maCUC = number_format($solicitud[0]->getValorOfertaMaterialesCUC(),2,',','.');
        $vT = round((($solicitud[0]->getValorOfertaCUP() / 24) + $solicitud[0]->getValorOfertaCUC()),2);
        $valorT = number_format($vT,2,',','.');
        // number_format(round((($scCUP / 24) + $scCUC),2),2,',','.')
        //print_r($maCUC.'---'.$maCUP);die;

        /*LLENANDO MODELO*/
        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/OfertaCliente.docx");

        $templateWord->setValue('noSolic',$noSolic);
        $templateWord->setValue('fecha',$fecha);
        $templateWord->setValue('cliente',$cliente);
        $templateWord->setValue('objeto',$objeto);
        $templateWord->setValue('dE',$dE);
        $templateWord->setValue('ob',$ob);
        $templateWord->setValue('ej',$ej);
        $templateWord->setValue('te',$te);
        $templateWord->setValue('scCUP',$scCUP);
        $templateWord->setValue('scCUC',$scCUC);
        $templateWord->setValue('maCUP',$maCUP);
        $templateWord->setValue('maCUC',$maCUC);
        $templateWord->setValue('valorT',$valorT);

        $checked = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unChecked = '<w:sym w:font="Wingdings" w:char="F0A8"/>';

        //  PARA EL ALCANCE
        $estaDem = false;
        $estaRes = false;
        $estaElec = false;
        $estaHid = false;
        $estaImp = false;
        $estaCar = false;
        $estaPin = false;
        $estaClima = false;
        $estaMan = false;
        for($a = 0; $a < count($alcance); $a++)
        {
            if($alcance[$a] == 'Demolición')
                $estaDem = true;
            elseif($alcance[$a] == 'Restauración')
                $estaRes = true;
            elseif($alcance[$a] == 'Electricidad')
                $estaElec = true;
            elseif($alcance[$a] == 'Hidrosanitaria')
                $estaHid = true;
            elseif($alcance[$a] == 'Impermeabilización')
                $estaImp = true;
            elseif($alcance[$a] == 'Carpintería')
                $estaCar = true;
            elseif($alcance[$a] == 'Pintura')
                $estaPin = true;
            elseif($alcance[$a] == 'Clima')
                $estaClima = true;
            elseif($alcance[$a] == 'Mantenimiento')
                $estaMan = true;
        }

        if($estaDem == true)
            $templateWord->setValue('dem',$checked);
        else
            $templateWord->setValue('dem',$unChecked);
        if($estaRes == true)
            $templateWord->setValue('res',$checked);
        else
            $templateWord->setValue('res',$unChecked);
        if($estaElec == true)
            $templateWord->setValue('elec',$checked);
        else
            $templateWord->setValue('elec',$unChecked);

        if($estaHid == true)
            $templateWord->setValue('hid',$checked);
        else
            $templateWord->setValue('hid',$unChecked);
        if($estaImp == true)
            $templateWord->setValue('imp',$checked);
        else
            $templateWord->setValue('imp',$unChecked);
        if($estaCar == true)
            $templateWord->setValue('car',$checked);
        else
            $templateWord->setValue('car',$unChecked);

        if($estaPin == true)
            $templateWord->setValue('pin',$checked);
        else
            $templateWord->setValue('pin',$unChecked);
        if($estaClima == true)
            $templateWord->setValue('clima',$checked);
        else
            $templateWord->setValue('clima',$unChecked);
        if($estaMan == true)
            $templateWord->setValue('man',$checked);
        else
            $templateWord->setValue('man',$unChecked);

        //  PARA LOS MATERIALES
        $matCliente = false;
        $matCCC = false;
        for($mat = 0; $mat < count($materiales); $mat++)
        {
            if($materiales[$mat] == 'cliente')
                $matCliente = true;
            elseif($materiales[$mat] == 'ccc')
                $matCCC = true;
        }
        if($matCliente == true)
            $templateWord->setValue('mCl',$checked);
        else
            $templateWord->setValue('mCl',$unChecked);
        if($matCCC == true)
            $templateWord->setValue('mCC',$checked);
        else
            $templateWord->setValue('mCC',$unChecked);

        //  PARA LAS HERRAMIENTAS
        $herrCliente = false;
        $herrCCC = false;
        for($mat = 0; $mat < count($herramientas); $mat++)
        {
            if($herramientas[$mat] == 'cliente')
                $herrCliente = true;
            elseif($herramientas[$mat] == 'ccc')
                $herrCCC = true;
        }
        if($herrCliente == true)
            $templateWord->setValue('hCl',$checked);
        else
            $templateWord->setValue('hCl',$unChecked);
        if($herrCCC == true)
            $templateWord->setValue('hCC',$checked);
        else
            $templateWord->setValue('hCC',$unChecked);

        //  PARA LOS EQUIPOS
        $eqCliente = false;
        $eqCCC = false;
        for($mat = 0; $mat < count($equipos); $mat++)
        {
            if($equipos[$mat] == 'cliente')
                $eqCliente = true;
            elseif($equipos[$mat] == 'ccc')
                $eqCCC = true;
        }
        if($eqCliente == true)
            $templateWord->setValue('eCl',$checked);
        else
            $templateWord->setValue('eCl',$unChecked);
        if($eqCCC == true)
            $templateWord->setValue('eCC',$checked);
        else
            $templateWord->setValue('eCC',$unChecked);

        //  PARA LA CALIDAD
        $calReq = false;
        $calReg = false;
        $calNor = false;
        for($mat = 0; $mat < count($calidad); $mat++)
        {
            if($calidad[$mat] == 'requerimientos')
                $calReq = true;
            elseif($calidad[$mat] == 'regulaciones')
                $calReg = true;
            elseif($calidad[$mat] == 'normas')
                $calNor = true;
        }
        if($calReq == true)
            $templateWord->setValue('cRC',$checked);
        else
            $templateWord->setValue('cRC',$unChecked);
        if($calReg == true)
            $templateWord->setValue('cRg',$checked);
        else
            $templateWord->setValue('cRg',$unChecked);
        if($calNor == true)
            $templateWord->setValue('cNr',$checked);
        else
            $templateWord->setValue('cNr',$unChecked);

        //  PARA LOS DIAS
        $templateWord->setValue('dH',$checked);
        $templateWord->setValue('dN',$unChecked);

        //  PARA LAS FORMAS DE PAGO
        $templateWord->setValue('fpT',$checked);
        $templateWord->setValue('fpC',$checked);

        //  PARA LOS DOCUMENTOS
        $templateWord->setValue('dcP',$checked);
        $templateWord->setValue('dcC',$checked);
        $templateWord->setValue('dcM',$checked);
        $templateWord->setValue('dcPl',$unChecked);
        $templateWord->setValue('dcO',$unChecked);

        //  PARA LOS ANTICIPOS
        $anticipoCUP = round(($solicitud[0]->getValorOfertaCUP()*$anticipo/100),2);
        $anticipoCUC = round(($solicitud[0]->getValorOfertaCUC()*$anticipo/100),2);

        $antCUP = number_format($anticipoCUP,2,',','.');
        $antCUC = number_format($anticipoCUC,2,',','.');
        $templateWord->setValue('antCUP',$antCUP);
        $templateWord->setValue('antCUC',$antCUC);
        $templateWord->setValue('ant',$anticipo);


        $filename="Oferta"." "."$codSolic".".docx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
        $templateWord->saveAs($filename);

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);
        return $response;
    }
    public function generarCaratulaContratoAction()
    {
        $idContrato = $_POST['idContrato'];

        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contratos')->findBy(array(
            'id' => $idContrato
        ));
        $idPadre = $contrato[0]->getIdcontratopadre();
        if($idPadre != '')
        {
            $contratoPadre = $em->getRepository('OfertasBundle:Contratos')->findBy(array(
                'id' => $idPadre
            ));
            $noPadre = $contratoPadre[0]->getNo();
        }

        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(array(
            'id' => $contrato[0]->getCliente()
        ));
        $nombCliente = $cliente[0]->getCliente().' '.$cliente[0]->getEmpresa();
        $objeto = $contrato[0]->getObjeto();

        $anno = $contrato[0]->getAnno();

        /*LLENANDO MODELO*/
        if($contrato[0]->getEsmarco() == true)
        {
            $no = $contrato[0]->getNo();
            $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/caratulas/caratulaCM.docx");

            $templateWord->setValue('no',$no);
            $templateWord->setValue('anno',$anno);
        }
        elseif($contrato[0]->getEssuplemento() == true)
        {
            if($contratoPadre[0]->getEsmarco() == true)
            {
                $noSup = $contrato[0]->getNo();

                $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/caratulas/caratulaSupCM.docx");
                $templateWord->setValue('noSup',$noSup);
                $templateWord->setValue('no',$noPadre);
                $templateWord->setValue('anno',$anno);
            }
            elseif($contratoPadre[0]->getTipodocumento() == 'Contrato de Ejecución de Obra')
            {
                $noSup = $contrato[0]->getNo();

                $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/caratulas/caratulaSupCEO.docx");
                $templateWord->setValue('noSup',$noSup);
                $templateWord->setValue('no',$noPadre);
                $templateWord->setValue('anno',$anno);
            }
            elseif($contratoPadre[0]->getTipodocumento() == 'Contrato Específico')
            {
                $noSup = $contrato[0]->getNo();
                $contratoMarcoPadre = $em->getRepository('OfertasBundle:Contratos')->findBy(array(
                    'id' => $contratoPadre[0]->getIdcontratopadre()
                ));
                $noMarcoPadre = $contratoMarcoPadre[0]->getNo();

                $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/caratulas/caratulaSupCECM.docx");
                $templateWord->setValue('noSup',$noSup);
                $templateWord->setValue('noCE',$noPadre);
                $templateWord->setValue('no',$noMarcoPadre);
                $templateWord->setValue('anno',$anno);
            }
        }
        elseif($contrato[0]->getTipodocumento() == 'Contrato de Ejecución de Obra')
        {
            $no = $contrato[0]->getNo();
            $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/caratulas/caratulaCEO.docx");

            $templateWord->setValue('no',$no);
            $templateWord->setValue('anno',$anno);
        }
        elseif($contrato[0]->getTipodocumento() == 'Contrato Específico')
        {
            $noCE = $contrato[0]->getNo();
            $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/caratulas/caratulaCE.docx");

            $templateWord->setValue('noCE',$noCE);
            $templateWord->setValue('no',$noPadre);
            $templateWord->setValue('anno',$anno);
        }

        $templateWord->setValue('cliente',$nombCliente);
        $templateWord->setValue('objeto',$objeto);

        $filename="Carátula.docx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
        $templateWord->saveAs($filename);

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);
        return $response;
    }

    public function preformasContratosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $contratos = $em->getRepository('OfertasBundle:ContratoN')->findBy(
            array('esSuplemento' => false), array('anno' => 'ASC','noContrato' => 'ASC')
        );
        $suplementos = $em->getRepository('OfertasBundle:ContratoN')->findBy(
            array('esSuplemento' => true), array('idContratoDependiente' => 'ASC')
        );

        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false), array('codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('empresa'=>'ASC')
        );

        return $this->render('OfertasBundle:Ofertas:preformasContratos.html.twig',array(
            'contratos' => $contratos,
            'suplementos' => $suplementos,
            'ofertas' => $ofertas,
            'clientes' => $clientes,
        ));
    }
    public function insertarNuevoContratoAction()
    {
        //print_r($_POST);die;
        $idOferta = $_POST['idOferta'];
        $tipo = $_POST['tipo'];
        $anno = $_POST['anno'];
        $idCliente = $_POST['idCliente'];

        $em = $this->getDoctrine()->getManager();

        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('id'=>$idOferta)
        );
        $contratos = $em->getRepository('OfertasBundle:ContratoN')->findBy(
            array(), array('anno' => 'ASC','noContrato' => 'ASC')
        );

        $noContrato = count($contratos)+1;

        $nuevoContrato = new ContratoN();
        $nuevoContrato->setAnno($anno);
        $nuevoContrato->setIdOferta($idOferta);
        $nuevoContrato->setTipocontrato($tipo);
        $nuevoContrato->setNoContrato($noContrato);
        $nuevoContrato->setEsSuplemento(false);
        $nuevoContrato->setValorCUC($ofertas[0]->getValorOfertaCUC());
        $nuevoContrato->setValorCUP($ofertas[0]->getValorOfertaCUP());
        $nuevoContrato->setVigencia($ofertas[0]->getTiempoEjecucion());

        $em->persist($nuevoContrato);

        for($i = 0; $i < count($idCliente); $i++)
        {
            $nuevoCliente = new ClientesContratoN();
            $nuevoCliente->setIdcliente($idCliente[$i]);
            $nuevoCliente->setIdcontrato($nuevoContrato);

            $em->persist($nuevoCliente);
        }

        $em->flush();

        return $this->redirect($this->generateUrl('preformasContratos'));
    }
    public function editarFechaFirmaPorClienteContratoNAction($id)
    {
        $fechaFirmaCliente = $_POST['fechaFirmaCliente'];

        $em = $this->getDoctrine()->getManager();

        $contratos = $em->getRepository('OfertasBundle:ContratoN')->findBy(
            array('id' => $id)
        );

        $contratos[0]->setFechaFirmaCliente(new \DateTime($fechaFirmaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('preformasContratos'));
    }
    public function insertarNuevoSuplementoAction($id)
    {
        $idOferta = $_POST['idOferta'];
        $tipo = $_POST['tipo'];
        $tipoSuplemento = $_POST['tipoSuplemento'];
        $vigencia = $_POST['vigencia'];
        $anno = $_POST['anno'];
        //$idCliente = $_POST['idCliente'];

        $em = $this->getDoctrine()->getManager();

        if($idOferta != '')
        {
            $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
                array('id'=>$idOferta)
            );
        }

        $listaContratos = $em->getRepository('OfertasBundle:ContratoN')->findAll();
        $contratos = $em->getRepository('OfertasBundle:ContratoN')->findBy(
            array('id' => $id)
        );

        $noContrato = count($listaContratos)+1;

        $nuevoContrato = new ContratoN();
        $nuevoContrato->setAnno($anno);
        if($idOferta != '')
        {
            $nuevoContrato->setIdOferta($idOferta);
            $nuevoContrato->setValorCUC($ofertas[0]->getValorOfertaCUC());
            $nuevoContrato->setValorCUP($ofertas[0]->getValorOfertaCUP());
            $nuevoContrato->setVigencia($ofertas[0]->getTiempoEjecucion());
        }

        $nuevoContrato->setTipocontrato($tipo);
        $nuevoContrato->setTipoSuplemento($tipoSuplemento);

        if($tipo == 'Suplemento')
        {
            $nuevoContrato->setEsSuplemento(true);
            $nuevoContrato->setIdContratoDependiente($id);
            $nuevoContrato->setNoContrato('Sup '.$noContrato);
            if($tipoSuplemento == 'Incremento de tiempo')
            {
                $nuevoContrato->setVigencia($vigencia);
            }
        }
        else
        {
            $nuevoContrato->setEsSuplemento(false);
            $nuevoContrato->setNoContrato($noContrato);
        }


        $em->persist($nuevoContrato);

        $em->flush();

        return $this->redirect($this->generateUrl('preformasContratos'));
    }

    public function generarProformaContratoMarcoAction()
    {
        //print_r($_POST);die;
        $idCliente = $_POST['cliente'];
        $objeto = $_POST['objeto'];
        /*$fechaFirma = $_POST['fechaFirma'];
        $vigencia = $_POST['vigencia'];*/

        //  DATOS LEGALES
        $nombreEmpresa = $_POST['nombreEmpresa'];
        $noResolucion = $_POST['noResolucion'];
        //$nombreResolucion = $_POST['nombreResolucion'];
        $organismoResolucion = $_POST['organismoResolucion'];
        $fechaResolucion = $_POST['fechaResolucion'];
        $domicilioLegal = $_POST['domicilioLegal'];
        $reeup = $_POST['reeup'];
        $noTributaria = $_POST['noTributaria'];
        $noCuentaCUC = $_POST['noCuentaCUC'];
        $titularCuentaCUC = $_POST['titularCuentaCUC'];
        $bancoCuentaCUC = $_POST['bancoCuentaCUC'];
        $sucursalCuentaCUC = $_POST['sucursalCuentaCUC'];
        $direccionBancoCUC = $_POST['direccionBancoCUC'];
        $noCuentaCUP = $_POST['noCuentaCUP'];
        $titularCuentaCUP = $_POST['titularCuentaCUP'];
        $bancoCuentaCUP = $_POST['bancoCuentaCUP'];
        $sucursalCuentaCUP = $_POST['sucursalCuentaCUP'];
        $direccionBancoCUP = $_POST['direccionBancoCUP'];
        $noLicenciaCUC = $_POST['noLicenciaCUC'];
        $noRegistroCom = $_POST['noRegistroCom'];
        $representante = $_POST['representante'];
        $cargoRep = $_POST['cargoRep'];
        $noResolucionRep = $_POST['noResolucionRep'];
        $fechaResolRep = $_POST['fechaResolRep'];
        $emitidaPor = $_POST['emitidaPor'];

        $em = $this->getDoctrine()->getManager();

        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array('id' => $idCliente)
        );
        $nombreCliente = $cliente[0]->getCliente();


        $cliente[0]->setNombreempresa($nombreEmpresa);
        $cliente[0]->setNoresolucion($noResolucion);
        if($fechaResolucion != '')
        {
            $cliente[0]->setFecharesolucion($fechaResolucion);
        }
        //$cliente[0]->setNombreresolucion($nombreResolucion);
        $cliente[0]->setOrganismoemite($organismoResolucion);
        $cliente[0]->setDireccionresolucion($domicilioLegal);
        $cliente[0]->setReeup($reeup);
        $cliente[0]->setNoidentributaria($noTributaria);
        $cliente[0]->setCuentacuc($noCuentaCUC);
        $cliente[0]->setTitularcuentacuc($titularCuentaCUC);
        $cliente[0]->setBancocuentacuc($bancoCuentaCUC);
        $cliente[0]->setSucursalcuentacuc($sucursalCuentaCUC);
        $cliente[0]->setDireccioncuentacuc($direccionBancoCUC);
        $cliente[0]->setCuentacup($noCuentaCUP);
        $cliente[0]->setTitularcuentacup($titularCuentaCUP);
        $cliente[0]->setBancocuentacup($bancoCuentaCUP);
        $cliente[0]->setSucursalcuentacup($sucursalCuentaCUP);
        $cliente[0]->setDireccioncuentacup($direccionBancoCUP);
        $cliente[0]->setNolicencia($noLicenciaCUC);
        $cliente[0]->setNoregistro($noRegistroCom);
        $cliente[0]->setReplicencia($representante);
        $cliente[0]->setCargoreplicencia($cargoRep);
        $cliente[0]->setNoresolrep($noResolucionRep);
        if($fechaResolRep != '')
        {
            $cliente[0]->setFecharesrep($fechaResolRep);
        }
        $cliente[0]->setEmitidaresolrep($emitidaPor);


        $hoy = new \DateTime("now");
        $anno = $hoy->format('Y');

        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('anno'=>$anno,'essuplemento'=>false), array('no'=>'ASC')
        );

        if(count($contratos) == 0)
        {
            $no = '01';
        }
        else
        {
            $ultimo = $contratos[count($contratos)-1]->getNo()+1;

            if($ultimo < 10)
            {
                $no = '0'.$ultimo;
            }
            else
            {
                $no = $ultimo;
            }
        }

        $nuevoCM = new Contratos();
        $nuevoCM->setCodigo($no.'-'.$anno);
        $nuevoCM->setNo($no);
        $nuevoCM->setTipodocumento('Contrato Marco de Ejecución de Obra');
        $nuevoCM->setAnno($anno);
        $nuevoCM->setCliente($idCliente);
        $nuevoCM->setObjeto($objeto);
        $nuevoCM->setEsmarco(true);
        $nuevoCM->setCantceo(0);
        $nuevoCM->setCantsup(0);
        $nuevoCM->setEssuplemento(false);
        $nuevoCM->setArchivo(false);
        $nuevoCM->setVigente(true);
        $nuevoCM->setTieneScaner(false);
        $nuevoCM->setTienePresupuesto(false);
        /*if($fechaFirma!='')
        {
            $nuevoCM->setFechafirma(new \DateTime($fechaFirma));
            if($vigencia!='')
            {
                $nuevoCM->setVigencia($vigencia);
                $fecha = new \DateTime($fechaFirma);
                $f = $fecha->format('Y-m-d');
                $fechaV = strtotime('+'.$vigencia.' day', strtotime($f));
                $fechaV = date('Y-m-d', $fechaV);

                $nuevoCM->setFechavencimiento(new \DateTime($fechaV));
            }
        }*/

        $em->persist($nuevoCM);

        $em->flush();

        //  PROFORMA
        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/contratomarco.docx");

        $templateWord->setValue('nomCliente',$nombreCliente);
        $templateWord->setValue('objeto',$objeto);
        $templateWord->setValue('no',$no);
        $templateWord->setValue('anno',$anno);
        $templateWord->setValue('empresa',$nombreEmpresa);
        $templateWord->setValue('noR',$noResolucion);
        $templateWord->setValue('fechaR',$fechaResolucion);
        $templateWord->setValue('organismoR',$organismoResolucion);
        $templateWord->setValue('domicilioR',$domicilioLegal);
        $templateWord->setValue('reeup',$reeup);
        $templateWord->setValue('tributaria',$noTributaria);
        $templateWord->setValue('cuentaCUC',$noCuentaCUC);
        $templateWord->setValue('titularCUC',$titularCuentaCUC);
        $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
        $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
        $templateWord->setValue('sitoCUC',$direccionBancoCUC);

        $templateWord->setValue('cuentaCUP',$noCuentaCUP);
        $templateWord->setValue('titularCUP',$titularCuentaCUP);
        $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
        $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
        $templateWord->setValue('sitoCUP',$direccionBancoCUP);

        $templateWord->setValue('noLic',$noLicenciaCUC);
        $templateWord->setValue('regCom',$noRegistroCom);
        $templateWord->setValue('repLic',$representante);
        $templateWord->setValue('cargoRep',$cargoRep);
        $templateWord->setValue('noRes',$noResolucionRep);
        $templateWord->setValue('fechaRes',$fechaResolRep);
        $templateWord->setValue('emitidaRes',$emitidaPor);

        $filename="$no-$anno".".docx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
        $templateWord->saveAs($filename);

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);

        $asunto = 'Nuevo Contrato Marco';
        $mensaje = 'Con número: '.$nuevoCM->getCodigo();
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','economico@ccc.co.cu','Julio',utf8_decode($asunto),utf8_decode($mensaje));
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));

        return $response;
    }
    public function verProformaCreadaAction($proforma)
    {
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $proforma;

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$proforma);
        $response->setContent($content);

        return $response;
    }

    public function contratosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>true, 'esContrato'=>false), array('codigo'=>'ASC')
        );

        $hoy = new \DateTime('now');
        $anno = $hoy->format('Y');

        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('vigente'=>true), array('anno'=>'ASC','codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        $solicitudes = $em->getRepository('OfertasBundle:SolicitudOferta')->findAll();

        return $this->render('OfertasBundle:Ofertas:contratos.html.twig',array(
            'ofertas' => $ofertas,
            'contratos' => $contratos,
            'clientes' => $clientes,
            'solicitudes' => $solicitudes,
        ));
    }
    public function buscarContratosAction()
    {
        //print_r($_POST);die;
        $anno = $_POST['anno'];
        $idCliente = $_POST['cliente'];

        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>true, 'esContrato'=>false), array('codigo'=>'ASC')
        );

        $solicitudes = $em->getRepository('OfertasBundle:SolicitudOferta')->findAll();

        $sql = "SELECT c FROM OfertasBundle:Contratos c";
        $estaWhere = false;
        if($anno != '')
        {
            $sql.=" WHERE c.anno = '$anno'";
            $estaWhere = true;
        }
        if($idCliente != '')
        {
            if($estaWhere == false)
            {
                $sql.=" WHERE c.cliente = '$idCliente'";
                $estaWhere = true;
            }
            else
            {
                $sql.=" AND c.cliente = '$idCliente'";
            }
        }
        $sql.=" ORDER BY c.codigo ASC";
        $consulta = $em->createQuery($sql);
        $contratos = $consulta->getResult();

        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        return $this->render('OfertasBundle:Ofertas:contratos.html.twig',array(
            'ofertas' => $ofertas,
            'contratos' => $contratos,
            'clientes' => $clientes,
            'solicitudes' => $solicitudes,
        ));
    }
    public function generarProformaContratoAction($id)
    {
        //print_r($_POST);die;
        $tipoContrato = $_POST['tipoContrato'];
        /*$fechaFirma = $_POST['fechaFirma'];
        $vigencia = $_POST['vigencia'];*/
        $anticipo = $_POST['anticipo'];
        if($anticipo == '')
        {
            $anticipo = 0;
        }

        //  DATOS LEGALES
        $nombreEmpresa = $_POST['nombreEmpresa'];
        $noResolucion = $_POST['noResolucion'];
        $organismoResolucion = $_POST['organismoResolucion'];
        //$nombreResolucion = $_POST['nombreResolucion'];
        $fechaResolucion = $_POST['fechaResolucion'];
        $domicilioLegal = $_POST['domicilioLegal'];
        $reeup = $_POST['reeup'];
        $noTributaria = $_POST['noTributaria'];
        $noCuentaCUC = $_POST['noCuentaCUC'];
        $titularCuentaCUC = $_POST['titularCuentaCUC'];
        $bancoCuentaCUC = $_POST['bancoCuentaCUC'];
        $sucursalCuentaCUC = $_POST['sucursalCuentaCUC'];
        $direccionBancoCUC = $_POST['direccionBancoCUC'];
        $noCuentaCUP = $_POST['noCuentaCUP'];
        $titularCuentaCUP = $_POST['titularCuentaCUP'];
        $bancoCuentaCUP = $_POST['bancoCuentaCUP'];
        $sucursalCuentaCUP = $_POST['sucursalCuentaCUP'];
        $direccionBancoCUP = $_POST['direccionBancoCUP'];
        $noLicenciaCUC = $_POST['noLicenciaCUC'];
        $noRegistroCom = $_POST['noRegistroCom'];
        $representante = $_POST['representante'];
        $cargoRep = $_POST['cargoRep'];
        $noResolucionRep = $_POST['noResolucionRep'];
        $fechaResolRep = $_POST['fechaResolRep'];
        $emitidaPor = $_POST['emitidaPor'];

        $hoy = new \DateTime('now');
        $anno = $hoy->format('Y');

        $em = $this->getDoctrine()->getManager();

        $oferta = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('id' => $id)
        );

        $nombreObra = $oferta[0]->getNombreObra();
        $direccionObra = $oferta[0]->getDireccionObra();

        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array('id' => $oferta[0]->getIdCliente()->getId())
        );

        $cliente[0]->setNombreempresa($nombreEmpresa);
        $cliente[0]->setNoresolucion($noResolucion);
        if($fechaResolucion != '')
        {
            $cliente[0]->setFecharesolucion($fechaResolucion);
        }
        $cliente[0]->setOrganismoemite($organismoResolucion);
        //$cliente[0]->setNombreresolucion($nombreResolucion);
        $cliente[0]->setDireccionresolucion($domicilioLegal);
        $cliente[0]->setReeup($reeup);
        $cliente[0]->setNoidentributaria($noTributaria);
        $cliente[0]->setCuentacuc($noCuentaCUC);
        $cliente[0]->setTitularcuentacuc($titularCuentaCUC);
        $cliente[0]->setBancocuentacuc($bancoCuentaCUC);
        $cliente[0]->setSucursalcuentacuc($sucursalCuentaCUC);
        $cliente[0]->setDireccioncuentacuc($direccionBancoCUC);
        $cliente[0]->setCuentacup($noCuentaCUP);
        $cliente[0]->setTitularcuentacup($titularCuentaCUP);
        $cliente[0]->setBancocuentacup($bancoCuentaCUP);
        $cliente[0]->setSucursalcuentacup($sucursalCuentaCUP);
        $cliente[0]->setDireccioncuentacup($direccionBancoCUP);
        $cliente[0]->setNolicencia($noLicenciaCUC);
        $cliente[0]->setNoregistro($noRegistroCom);
        $cliente[0]->setReplicencia($representante);
        $cliente[0]->setCargoreplicencia($cargoRep);
        $cliente[0]->setNoresolrep($noResolucionRep);
        if($fechaResolRep != '')
        {
            $cliente[0]->setFecharesrep($fechaResolRep);
        }
        $cliente[0]->setEmitidaresolrep($emitidaPor);

        /*PARA PASAR LA OFERTA A CONTRATO*/
        $oferta[0]->setEsContrato(true);

        //$anno = $oferta[0]->getFechaEntregaCliente()->format('Y');
        $tiempoEjecucion = $oferta[0]->getTiempoEjecucion();
        $valorContratoCUP = $oferta[0]->getValorOfertaCUP();
        $valorContratoCUC = $oferta[0]->getValorOfertaCUC();
        $valorAnticipoCUP = round(($valorContratoCUP * $anticipo / 100),2);
        $valorAnticipoCUC = round(($valorContratoCUC * $anticipo / 100),2);

        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('essuplemento'=>false, 'idcontratopadre'=>null, 'anno'=>$anno), array('no'=>'DESC')
        );
        //print_r($contratos[count($contratos)-1]->getAnno());die;

        $exp = explode('-',$tipoContrato);

        $tipo = $exp[1];

        if(count($contratos)!=0)
        {
            $noUltimo = $contratos[0]->getNo();
        }
        else
        {
            $noUltimo = 0;
        }

        if($noUltimo < 10)
        {
            $no = '0'.($noUltimo+1);
        }
        else
        {
            $no = $noUltimo+1;
        }

        $nuevoCEC = new Contratos();
        $nuevoCEC->setNo($no);
        $nuevoCEC->setTipodocumento($tipo);
        $nuevoCEC->setAnno($anno);
        $nuevoCEC->setIdsolicitud($oferta[0]->getId());
        $nuevoCEC->setCliente($oferta[0]->getIdCliente()->getId());
        $nuevoCEC->setObjeto($oferta[0]->getDescripcion());
        $nuevoCEC->setNombreObra($oferta[0]->getNombreObra());
        $nuevoCEC->setDireccionObra($oferta[0]->getDireccionObra());
        $nuevoCEC->setTiempoEjecucion($oferta[0]->getTiempoEjecucion());
        $nuevoCEC->setEssuplemento(false);
        $nuevoCEC->setArchivo(false);
        $nuevoCEC->setVigente(true);
        $nuevoCEC->setTieneScaner(false);
        $nuevoCEC->setTienePresupuesto(false);
        $nuevoCEC->setEsmarco(false);
        $nuevoCEC->setCantsup(0);
        $nuevoCEC->setCantceo(0);
        $nuevoCEC->setAnticipopc($anticipo);
        $nuevoCEC->setAnticipocuc(($oferta[0]->getValorOfertaCUC() * $anticipo)/100);
        $nuevoCEC->setAnticipocup(($oferta[0]->getValorOfertaCUP() * $anticipo)/100);
        $nuevoCEC->setCodigo($no.'-'.$anno);
        $nuevoCEC->setDiasejecucion($oferta[0]->getTiempoEjecucion());
        $nuevoCEC->setValorcontratocuc($oferta[0]->getValorOfertaCUC());
        $nuevoCEC->setValorcontratocup($oferta[0]->getValorOfertaCUP());
        /*if($fechaFirma!='')
        {
            $nuevoCEC->setFechafirma(new \DateTime($fechaFirma));
            if($vigencia!='')
            {
                $nuevoCEC->setVigencia($vigencia);
                $fecha = new \DateTime($fechaFirma);
                $f = $fecha->format('Y-m-d');
                $fechaV = strtotime('+'.$vigencia.' day', strtotime($f));
                $fechaV = date('Y-m-d', $fechaV);

                $nuevoCEC->setFechavencimiento(new \DateTime($fechaV));
            }
        }*/

        $em->persist($nuevoCEC);

        $em->flush();

        // CONTRATO CLIMA
        if($exp[0]=='cec')
        {
            //  PROFORMA
            $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/contratoejecucionclima.docx");

            $templateWord->setValue('no',$no);
            $templateWord->setValue('anno',$anno);
            $templateWord->setValue('empresa',$nombreEmpresa);
            $templateWord->setValue('noR',$noResolucion);
            $templateWord->setValue('fechaR',$fechaResolucion);
            $templateWord->setValue('organismoR',$organismoResolucion);
            $templateWord->setValue('domicilioR',$domicilioLegal);
            $templateWord->setValue('reeup',$reeup);
            $templateWord->setValue('tributaria',$noTributaria);
            $templateWord->setValue('cuentaCUC',$noCuentaCUC);
            $templateWord->setValue('titularCUC',$titularCuentaCUC);
            $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
            $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
            $templateWord->setValue('sitoCUC',$direccionBancoCUC);

            $templateWord->setValue('cuentaCUP',$noCuentaCUP);
            $templateWord->setValue('titularCUP',$titularCuentaCUP);
            $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
            $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
            $templateWord->setValue('sitoCUP',$direccionBancoCUP);

            $templateWord->setValue('noLic',$noLicenciaCUC);
            $templateWord->setValue('regCom',$noRegistroCom);
            $templateWord->setValue('repLic',$representante);
            $templateWord->setValue('cargoRep',$cargoRep);
            $templateWord->setValue('noRes',$noResolucionRep);
            $templateWord->setValue('fechaRes',$fechaResolRep);
            $templateWord->setValue('emitidaRes',$emitidaPor);

            $filename="$no-$anno".".docx";
            $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
            $templateWord->saveAs($filename);

            $asunto = 'Nuevo Contrato de Clima';
            $mensaje = 'Con número: '.$nuevoCEC->getCodigo();
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','economico@ccc.co.cu','Julio',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));

        }
        // CONTRATO EJECUCION DE OBRA
        elseif($exp[0]=='ceo')
        {
            //  PROFORMA
            $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/contratoejecucionobra.docx");

            $templateWord->setValue('no',$no);
            $templateWord->setValue('anno',$anno);
            $templateWord->setValue('empresa',$nombreEmpresa);
            $templateWord->setValue('noR',$noResolucion);
            $templateWord->setValue('fechaR',$fechaResolucion);
            $templateWord->setValue('organismoR',$organismoResolucion);
            $templateWord->setValue('domicilioR',$domicilioLegal);
            $templateWord->setValue('reeup',$reeup);
            $templateWord->setValue('tributaria',$noTributaria);
            $templateWord->setValue('cuentaCUC',$noCuentaCUC);
            $templateWord->setValue('titularCUC',$titularCuentaCUC);
            $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
            $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
            $templateWord->setValue('sitoCUC',$direccionBancoCUC);

            $templateWord->setValue('cuentaCUP',$noCuentaCUP);
            $templateWord->setValue('titularCUP',$titularCuentaCUP);
            $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
            $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
            $templateWord->setValue('sitoCUP',$direccionBancoCUP);

            $templateWord->setValue('noLic',$noLicenciaCUC);
            $templateWord->setValue('regCom',$noRegistroCom);
            $templateWord->setValue('repLic',$representante);
            $templateWord->setValue('cargoRep',$cargoRep);
            $templateWord->setValue('noRes',$noResolucionRep);
            $templateWord->setValue('fechaRes',$fechaResolRep);
            $templateWord->setValue('emitidaRes',$emitidaPor);

            $templateWord->setValue('nombreObra',$nombreObra);
            $templateWord->setValue('direccionObra',$direccionObra);
            $templateWord->setValue('tiempEjec',$tiempoEjecucion);
            $templateWord->setValue('valorCCUP',number_format($valorContratoCUP,2,'.',','));
            $templateWord->setValue('valorCCUC',number_format($valorContratoCUC,2,'.',','));
            $templateWord->setValue('anticipo',number_format($anticipo,2,'.',','));
            $templateWord->setValue('anticipoCUP',number_format($valorAnticipoCUP,2,'.',','));
            $templateWord->setValue('anticipoCUC',number_format($valorAnticipoCUC,2,'.',','));

            $filename="$no-$anno".".docx";
            $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
            $templateWord->saveAs($filename);

            $asunto = 'Nuevo Contrato de Ejecución de Obra';
            $mensaje = 'Con número: '.$nuevoCEC->getCodigo();
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','economico@ccc.co.cu','Julio',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));

        }
        // CONTRATO SERVICIOS IGUALA
        /*elseif($exp[0]=='cs')
        {

        }*/

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);

        return $response;
    }
    public function generarProformaCEOSupAction()
    {
        //print_r($_POST);die;
        $tipoContrato = $_POST['tipoContrato'];
        $idOferta = $_POST['idOferta'];

        if (isset($_POST['tipoSuplemento']))
        {
            $tipoSuplemento = $_POST['tipoSuplemento'];
        }

        $idContrato = $_POST['idContrato'];
        /*$fechaFirma = $_POST['fechaFirma'];
        $vigencia = $_POST['vigencia'];*/
        $anticipo = $_POST['anticipo'];

        //  DATOS LEGALES
        $nombreEmpresa = $_POST['nombreEmpresa'];
        $noResolucion = $_POST['noResolucion'];
        //$nombreResolucion = $_POST['nombreResolucion'];
        $organismoResolucion = $_POST['organismoResolucion'];
        $fechaResolucion = $_POST['fechaResolucion'];
        $domicilioLegal = $_POST['domicilioLegal'];
        $reeup = $_POST['reeup'];
        $noTributaria = $_POST['noTributaria'];
        $noCuentaCUC = $_POST['noCuentaCUC'];
        $titularCuentaCUC = $_POST['titularCuentaCUC'];
        $bancoCuentaCUC = $_POST['bancoCuentaCUC'];
        $sucursalCuentaCUC = $_POST['sucursalCuentaCUC'];
        $direccionBancoCUC = $_POST['direccionBancoCUC'];
        $noCuentaCUP = $_POST['noCuentaCUP'];
        $titularCuentaCUP = $_POST['titularCuentaCUP'];
        $bancoCuentaCUP = $_POST['bancoCuentaCUP'];
        $sucursalCuentaCUP = $_POST['sucursalCuentaCUP'];
        $direccionBancoCUP = $_POST['direccionBancoCUP'];
        $noLicenciaCUC = $_POST['noLicenciaCUC'];
        $noRegistroCom = $_POST['noRegistroCom'];
        $representante = $_POST['representante'];
        $cargoRep = $_POST['cargoRep'];
        $noResolucionRep = $_POST['noResolucionRep'];
        $fechaResolRep = $_POST['fechaResolRep'];
        $emitidaPor = $_POST['emitidaPor'];

        $em = $this->getDoctrine()->getManager();

        $contratoPadre = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('id'=>$idContrato)
        );
        $valorCUPPadre = $contratoPadre[0]->getValorcontratocup();
        $valorCUCPadre = $contratoPadre[0]->getValorcontratocuc();

        $cliente = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array('id' => $contratoPadre[0]->getCliente())
        );
        $nombreCliente = $cliente[0]->getCliente();

        $cliente[0]->setNombreempresa($nombreEmpresa);
        $cliente[0]->setNoresolucion($noResolucion);
        if($fechaResolucion != '')
        {
            $cliente[0]->setFecharesolucion($fechaResolucion);
        }
        //$cliente[0]->setNombreresolucion($nombreResolucion);
        $cliente[0]->setOrganismoemite($organismoResolucion);
        $cliente[0]->setDireccionresolucion($domicilioLegal);
        $cliente[0]->setReeup($reeup);
        $cliente[0]->setNoidentributaria($noTributaria);
        $cliente[0]->setCuentacuc($noCuentaCUC);
        $cliente[0]->setTitularcuentacuc($titularCuentaCUC);
        $cliente[0]->setBancocuentacuc($bancoCuentaCUC);
        $cliente[0]->setSucursalcuentacuc($sucursalCuentaCUC);
        $cliente[0]->setDireccioncuentacuc($direccionBancoCUC);
        $cliente[0]->setCuentacup($noCuentaCUP);
        $cliente[0]->setTitularcuentacup($titularCuentaCUP);
        $cliente[0]->setBancocuentacup($bancoCuentaCUP);
        $cliente[0]->setSucursalcuentacup($sucursalCuentaCUP);
        $cliente[0]->setDireccioncuentacup($direccionBancoCUP);
        $cliente[0]->setNolicencia($noLicenciaCUC);
        $cliente[0]->setNoregistro($noRegistroCom);
        $cliente[0]->setReplicencia($representante);
        $cliente[0]->setCargoreplicencia($cargoRep);
        $cliente[0]->setNoresolrep($noResolucionRep);
        if($fechaResolRep != '')
        {
            $cliente[0]->setFecharesrep($fechaResolRep);
        }
        $cliente[0]->setEmitidaresolrep($emitidaPor);

        /* $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
             array('essuplemento'=>false), array('no'=>'ASC')
         );*/


        $oferta = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('id'=>$idOferta)
        );
        /*PARA PASAR LA OFERTA A CONTRATO*/
        $oferta[0]->setEsContrato(true);
        $idCliente = $oferta[0]->getIdCliente()->getId();

        $nombreObra = $oferta[0]->getNombreObra();
        $objetoObra = $oferta[0]->getDescripcion();
        $objeto = $objetoObra;
        $direccionObra = $oferta[0]->getDireccionObra();

        $tiempoEjecucion = $oferta[0]->getTiempoEjecucion();
        $valorContratoCUP = $oferta[0]->getValorOfertaCUP();
        $valorContratoCUC = $oferta[0]->getValorOfertaCUC();
        $valorAnticipoCUP = round(($valorContratoCUP * $anticipo / 100),2);
        $valorAnticipoCUC = round(($valorContratoCUC * $anticipo / 100),2);

        if($anticipo !='')
        {
            $oferta[0]->setPorCientoAnticipo($anticipo);
        }

        $exp = explode('-',$tipoContrato);
        $tipo = $exp[1];
        if($exp[0]=='ceo')
        {
            $ultimo = $contratoPadre[0]->getCantceo()+1;
            $noPadre = $contratoPadre[0]->getNo();
            $contratoPadre[0]->setCantceo($ultimo);
            if($ultimo < 10)
            {
                $no = '0'.$ultimo;
            }
            else
            {
                $no = $ultimo;
            }

            $hoy = new \DateTime('now');
            //$anno = $hoy->format('Y');
            $anno = $contratoPadre[0]->getAnno();

            $nuevoCEO = new Contratos();
            $nuevoCEO->setNo($no);
            $nuevoCEO->setTipodocumento($tipo);
            $nuevoCEO->setAnno($anno);
            $nuevoCEO->setIdsolicitud($oferta[0]->getId());
            $nuevoCEO->setCliente($oferta[0]->getIdCliente()->getId());
            $nuevoCEO->setObjeto($oferta[0]->getDescripcion());
            $nuevoCEO->setNombreObra($oferta[0]->getNombreObra());
            $nuevoCEO->setDireccionObra($oferta[0]->getDireccionObra());
            $nuevoCEO->setTiempoEjecucion($oferta[0]->getTiempoEjecucion());
            $nuevoCEO->setEssuplemento(false);
            $nuevoCEO->setArchivo(false);
            $nuevoCEO->setVigente(true);
            $nuevoCEO->setTieneScaner(false);
            $nuevoCEO->setTienePresupuesto(false);
            $nuevoCEO->setEsmarco(false);
            $nuevoCEO->setCantsup(0);
            $nuevoCEO->setCantceo(0);
            $nuevoCEO->setAnticipopc($anticipo);
            $nuevoCEO->setAnticipocuc(($oferta[0]->getValorOfertaCUC() * $anticipo)/100);
            $nuevoCEO->setAnticipocup(($oferta[0]->getValorOfertaCUP() * $anticipo)/100);
            $nuevoCEO->setCodigo($noPadre.'-'.$anno.'-'.$no);
            $nuevoCEO->setDiasejecucion($oferta[0]->getTiempoEjecucion());
            $nuevoCEO->setIdcontratopadre($contratoPadre[0]->getId());
            $nuevoCEO->setValorcontratocuc($oferta[0]->getValorOfertaCUC());
            $nuevoCEO->setValorcontratocup($oferta[0]->getValorOfertaCUP());
            /*if($fechaFirma!='')
            {
                $nuevoCEO->setFechafirma(new \DateTime($fechaFirma));
                if($vigencia!='')
                {
                    $nuevoCEO->setVigencia($vigencia);
                    $fecha = new \DateTime($fechaFirma);
                    $f = $fecha->format('Y-m-d');
                    $fechaV = strtotime('+'.$vigencia.' day', strtotime($f));
                    $fechaV = date('Y-m-d', $fechaV);

                    $nuevoCEO->setFechavencimiento(new \DateTime($fechaV));
                }
            }*/

            $em->persist($nuevoCEO);

            //  PROFORMA
            $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/contratoespecifico.docx");

            $templateWord->setValue('no',$no);
            $templateWord->setValue('noP',$noPadre);
            $templateWord->setValue('annoP',$anno);
            $templateWord->setValue('empresa',$nombreEmpresa);
            $templateWord->setValue('noR',$noResolucion);
            $templateWord->setValue('fechaR',$fechaResolucion);
            $templateWord->setValue('organismoR',$organismoResolucion);
            $templateWord->setValue('domicilioR',$domicilioLegal);
            $templateWord->setValue('reeup',$reeup);
            $templateWord->setValue('tributaria',$noTributaria);
            $templateWord->setValue('cuentaCUC',$noCuentaCUC);
            $templateWord->setValue('titularCUC',$titularCuentaCUC);
            $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
            $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
            $templateWord->setValue('sitoCUC',$direccionBancoCUC);

            $templateWord->setValue('cuentaCUP',$noCuentaCUP);
            $templateWord->setValue('titularCUP',$titularCuentaCUP);
            $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
            $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
            $templateWord->setValue('sitoCUP',$direccionBancoCUP);

            $templateWord->setValue('noLic',$noLicenciaCUC);
            $templateWord->setValue('regCom',$noRegistroCom);
            $templateWord->setValue('repLic',$representante);
            $templateWord->setValue('cargoRep',$cargoRep);
            $templateWord->setValue('noRes',$noResolucionRep);
            $templateWord->setValue('fechaRes',$fechaResolRep);
            $templateWord->setValue('emitidaRes',$emitidaPor);

            $templateWord->setValue('nombreObra',$nombreObra);
            $templateWord->setValue('direccionObra',$direccionObra);
            $templateWord->setValue('tiempEjec',$tiempoEjecucion);
            $templateWord->setValue('valorCCUP',number_format($valorContratoCUP,2,'.',','));
            $templateWord->setValue('valorCCUC',number_format($valorContratoCUC,2,'.',','));
            $templateWord->setValue('anticipo',number_format($anticipo,2,'.',','));
            $templateWord->setValue('anticipoCUP',number_format($valorAnticipoCUP,2,'.',','));
            $templateWord->setValue('anticipoCUC',number_format($valorAnticipoCUC,2,'.',','));

            $codigo = $nuevoCEO->getCodigo();
            $filename = $codigo.".docx";
            $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
            $templateWord->saveAs($filename);

            $asunto = 'Nuevo Contrato Específico al Marco '.$noPadre;
            $mensaje = 'Con número: '.$codigo;
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','economico@ccc.co.cu','Julio',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));
        }
        elseif($exp[0]=='sup')
        {
            if($contratoPadre[0]->getEsmarco() == true)
            {
                $ultimo = $contratoPadre[0]->getCantsup()+1;
                $noPadre = $contratoPadre[0]->getNo();
                $contratoPadre[0]->setCantsup($ultimo);
                if($ultimo < 10)
                {
                    $no = '0'.$ultimo;
                }
                else
                {
                    $no = $ultimo;
                }
                //print_r($no);die;

                $anno = $contratoPadre[0]->getAnno();

                $nuevoSup = new Contratos();
                $nuevoSup->setNo($no);
                $nuevoSup->setTipodocumento($tipo);
                $nuevoSup->setAnno($anno);
                $nuevoSup->setIdsolicitud($oferta[0]->getId());
                $nuevoSup->setCliente($oferta[0]->getIdCliente()->getId());
                $nuevoSup->setObjeto($oferta[0]->getDescripcion());
                $nuevoSup->setNombreObra($oferta[0]->getNombreObra());
                $nuevoSup->setDireccionObra($oferta[0]->getDireccionObra());
                $nuevoSup->setTiempoEjecucion($oferta[0]->getTiempoEjecucion());
                $nuevoSup->setEssuplemento(true);
                $nuevoSup->setArchivo(false);
                $nuevoSup->setVigente(true);
                $nuevoSup->setTienePresupuesto(false);
                $nuevoSup->setTieneScaner(false);
                $nuevoSup->setEsmarco(false);
                $nuevoSup->setCantsup(0);
                $nuevoSup->setCantceo(0);
                $nuevoSup->setAnticipopc($anticipo);
                $nuevoSup->setAnticipocuc(($oferta[0]->getValorOfertaCUC() * $anticipo)/100);
                $nuevoSup->setAnticipocup(($oferta[0]->getValorOfertaCUP() * $anticipo)/100);
                $nuevoSup->setCodigo($noPadre.'-'.$anno.'-'.$no);
                $nuevoSup->setDiasejecucion($oferta[0]->getTiempoEjecucion());
                $nuevoSup->setIdcontratopadre($contratoPadre[0]->getId());
                $nuevoSup->setValorcontratocuc($oferta[0]->getValorOfertaCUC());
                $nuevoSup->setValorcontratocup($oferta[0]->getValorOfertaCUP());
                /*if($fechaFirma!='')
                {
                    $nuevoSup->setFechafirma(new \DateTime($fechaFirma));
                    if($vigencia!='')
                    {
                        $nuevoSup->setVigencia($vigencia);
                        $fecha = new \DateTime($fechaFirma);
                        $f = $fecha->format('Y-m-d');
                        $fechaV = strtotime('+'.$vigencia.' day', strtotime($f));
                        $fechaV = date('Y-m-d', $fechaV);

                        $nuevoSup->setFechavencimiento(new \DateTime($fechaV));
                    }
                }*/

                $em->persist($nuevoSup);

                if($tipoSuplemento == 'tiempo')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Tiempo');
                    //  PROFORMA
                    if($idCliente == 12)
                    {
                        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supmarcopalcoplaza.docx");
                    }
                    else
                    {
                        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supinctiempomarco.docx");
                    }

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noM',$noPadre);
                    $templateWord->setValue('annoM',$anno);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }
                elseif($tipoSuplemento == 'act')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Actividades');
                    //  PROFORMA
                    if($idCliente == 12)
                    {
                        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supmarcopalcoplaza.docx");
                    }
                    else
                    {
                        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supincactivtiempomarco.docx");
                    }

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noM',$noPadre);
                    $templateWord->setValue('annoM',$anno);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $templateWord->setValue('objetoObra',$objetoObra);
                    $templateWord->setValue('nombreObra',$nombreObra);
                    $templateWord->setValue('direccionObra',$direccionObra);

                    $templateWord->setValue('valorCCUP',number_format($valorContratoCUP,2,'.',','));
                    $templateWord->setValue('valorCCUC',number_format($valorContratoCUC,2,'.',','));

                    $valorTCUP = $valorCUPPadre + $valorContratoCUP;
                    $valorTCUC = $valorCUCPadre + $valorContratoCUC;
                    $templateWord->setValue('totalCCUP',number_format($valorTCUP,2,'.',','));
                    $templateWord->setValue('totalCCUC',number_format($valorTCUC,2,'.',','));

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }
                elseif($tipoSuplemento == 'acttiempo')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Actividades y Tiempo');
                    //  PROFORMA
                    if($idCliente == 12)
                    {
                        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supmarcopalcoplaza.docx");
                    }
                    else
                    {
                        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supincactivtiempomarco.docx");
                    }

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noM',$noPadre);
                    $templateWord->setValue('annoM',$anno);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $templateWord->setValue('objetoObra',$objetoObra);
                    $templateWord->setValue('nombreObra',$nombreObra);
                    $templateWord->setValue('direccionObra',$direccionObra);

                    $templateWord->setValue('valorCCUP',number_format($valorContratoCUP,2,'.',','));
                    $templateWord->setValue('valorCCUC',number_format($valorContratoCUC,2,'.',','));

                    $valorTCUP = $valorCUPPadre + $valorContratoCUP;
                    $valorTCUC = $valorCUCPadre + $valorContratoCUC;
                    $templateWord->setValue('totalCCUP',number_format($valorTCUP,2,'.',','));
                    $templateWord->setValue('totalCCUC',number_format($valorTCUC,2,'.',','));

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }
            }
            elseif($contratoPadre[0]->getEsmarco() == false)
            {
                $ultimo = $contratoPadre[0]->getCantsup()+1;
                $noPadre = $contratoPadre[0]->getNo();
                $contratoPadre[0]->setCantsup($ultimo);
                if($ultimo < 10)
                {
                    $no = '0'.$ultimo;
                }
                else
                {
                    $no = $ultimo;
                }
                //print_r($no);die;

                $idMarco = $contratoPadre[0]->getIdcontratopadre();
                $contratoMarcoPadre = $em->getRepository('OfertasBundle:Contratos')->findBy(
                    array('id'=>$idMarco)
                );
                if(count($contratoMarcoPadre)!=0)
                {
                    $noMarco = $contratoMarcoPadre[0]->getNo();
                    $annoMarco = $contratoMarcoPadre[0]->getAnno();
                }

                $anno = $contratoPadre[0]->getAnno();

                $nuevoSup = new Contratos();
                $nuevoSup->setNo($no);
                $nuevoSup->setTipodocumento($tipo);
                $nuevoSup->setAnno($anno);
                $nuevoSup->setIdsolicitud($oferta[0]->getId());
                $nuevoSup->setCliente($oferta[0]->getIdCliente()->getId());
                $nuevoSup->setObjeto($oferta[0]->getDescripcion());
                $nuevoSup->setNombreObra($oferta[0]->getNombreObra());
                $nuevoSup->setDireccionObra($oferta[0]->getDireccionObra());
                $nuevoSup->setTiempoEjecucion($oferta[0]->getTiempoEjecucion());
                $nuevoSup->setEssuplemento(true);
                $nuevoSup->setArchivo(false);
                $nuevoSup->setVigente(true);
                $nuevoSup->setTienePresupuesto(false);
                $nuevoSup->setTieneScaner(false);
                $nuevoSup->setEsmarco(false);
                $nuevoSup->setCantsup(0);
                $nuevoSup->setCantceo(0);
                $nuevoSup->setAnticipopc($anticipo);
                $nuevoSup->setAnticipocuc(($oferta[0]->getValorOfertaCUC() * $anticipo)/100);
                $nuevoSup->setAnticipocup(($oferta[0]->getValorOfertaCUP() * $anticipo)/100);
                $nuevoSup->setCodigo($contratoPadre[0]->getCodigo().'-'.$no);
                $nuevoSup->setDiasejecucion($oferta[0]->getTiempoEjecucion());
                $nuevoSup->setIdcontratopadre($contratoPadre[0]->getId());
                $nuevoSup->setValorcontratocuc($oferta[0]->getValorOfertaCUC());
                $nuevoSup->setValorcontratocup($oferta[0]->getValorOfertaCUP());
                /*if($fechaFirma!='')
                {
                    $nuevoSup->setFechafirma(new \DateTime($fechaFirma));
                    if($vigencia!='')
                    {
                        $nuevoSup->setVigencia($vigencia);
                        $fecha = new \DateTime($fechaFirma);
                        $f = $fecha->format('Y-m-d');
                        $fechaV = strtotime('+'.$vigencia.' day', strtotime($f));
                        $fechaV = date('Y-m-d', $fechaV);

                        $nuevoSup->setFechavencimiento(new \DateTime($fechaV));
                    }
                }*/

                $em->persist($nuevoSup);

                if($tipoSuplemento == 'tiempo' && $contratoPadre[0]->getTipodocumento() == 'Contrato Específico')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Tiempo');
                    //  PROFORMA
                    $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supinctiempoespmarco.docx");

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noEsp',$noPadre);
                    $templateWord->setValue('noM',$noMarco);
                    $templateWord->setValue('annoM',$annoMarco);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }
                elseif($tipoSuplemento == 'act' && $contratoPadre[0]->getTipodocumento() == 'Contrato Específico')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Actividades');
                    //  PROFORMA
                    $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supincactivtiempoespmarco.docx");

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noEsp',$noPadre);
                    $templateWord->setValue('noM',$noMarco);
                    $templateWord->setValue('annoM',$annoMarco);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $templateWord->setValue('objetoObra',$objetoObra);
                    $templateWord->setValue('nombreObra',$nombreObra);
                    $templateWord->setValue('direccionObra',$direccionObra);

                    $templateWord->setValue('valorCCUP',number_format($valorContratoCUP,2,'.',','));
                    $templateWord->setValue('valorCCUC',number_format($valorContratoCUC,2,'.',','));

                    $valorTCUP = $valorCUPPadre + $valorContratoCUP;
                    $valorTCUC = $valorCUCPadre + $valorContratoCUC;
                    $templateWord->setValue('totalCCUP',number_format($valorTCUP,2,'.',','));
                    $templateWord->setValue('totalCCUC',number_format($valorTCUC,2,'.',','));

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }
                elseif($tipoSuplemento == 'acttiempo' && $contratoPadre[0]->getTipodocumento() == 'Contrato Específico')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Actividades y Tiempo');
                    //  PROFORMA
                    $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supincactivtiempoespmarco.docx");

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noEsp',$noPadre);
                    $templateWord->setValue('noM',$noMarco);
                    $templateWord->setValue('annoM',$annoMarco);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $templateWord->setValue('objetoObra',$objetoObra);
                    $templateWord->setValue('nombreObra',$nombreObra);
                    $templateWord->setValue('direccionObra',$direccionObra);

                    $templateWord->setValue('valorCCUP',number_format($valorContratoCUP,2,'.',','));
                    $templateWord->setValue('valorCCUC',number_format($valorContratoCUC,2,'.',','));

                    $valorTCUP = $valorCUPPadre + $valorContratoCUP;
                    $valorTCUC = $valorCUCPadre + $valorContratoCUC;
                    $templateWord->setValue('totalCCUP',number_format($valorTCUP,2,'.',','));
                    $templateWord->setValue('totalCCUC',number_format($valorTCUC,2,'.',','));

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }

                elseif($tipoSuplemento == 'tiempo' && $contratoPadre[0]->getTipodocumento() != 'Contrato Específico')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Tiempo');
                    //  PROFORMA
                    $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supinctiempoejecobra.docx");

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noP',$noPadre);
                    $templateWord->setValue('annoP',$anno);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }
                elseif($tipoSuplemento == 'act' && $contratoPadre[0]->getTipodocumento() != 'Contrato Específico')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Actividades');
                    //  PROFORMA
                    $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supincactivtiempoejecobra.docx");

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noP',$noPadre);
                    $templateWord->setValue('annoP',$anno);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $templateWord->setValue('objetoObra',$objetoObra);
                    $templateWord->setValue('nombreObra',$nombreObra);
                    $templateWord->setValue('direccionObra',$direccionObra);

                    $templateWord->setValue('valorCCUP',number_format($valorContratoCUP,2,'.',','));
                    $templateWord->setValue('valorCCUC',number_format($valorContratoCUC,2,'.',','));

                    $valorTCUP = $valorCUPPadre + $valorContratoCUP;
                    $valorTCUC = $valorCUCPadre + $valorContratoCUC;
                    $templateWord->setValue('totalCCUP',number_format($valorTCUP,2,'.',','));
                    $templateWord->setValue('totalCCUC',number_format($valorTCUC,2,'.',','));

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }
                elseif($tipoSuplemento == 'acttiempo' && $contratoPadre[0]->getTipodocumento() != 'Contrato Específico')
                {
                    $nuevoSup->setTiposuplemento('Incremento de Actividades y Tiempo');
                    //  PROFORMA
                    $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/bundles/ccc/proformas/supincactivtiempoejecobra.docx");

                    $templateWord->setValue('noS',$no);
                    $templateWord->setValue('noP',$noPadre);
                    $templateWord->setValue('annoP',$anno);
                    $templateWord->setValue('empresa',$nombreEmpresa);
                    $templateWord->setValue('noR',$noResolucion);
                    $templateWord->setValue('fechaR',$fechaResolucion);
                    $templateWord->setValue('organismoR',$organismoResolucion);
                    $templateWord->setValue('domicilioR',$domicilioLegal);
                    $templateWord->setValue('reeup',$reeup);
                    $templateWord->setValue('tributaria',$noTributaria);
                    $templateWord->setValue('cuentaCUC',$noCuentaCUC);
                    $templateWord->setValue('titularCUC',$titularCuentaCUC);
                    $templateWord->setValue('bancoCUC',$bancoCuentaCUC);
                    $templateWord->setValue('sucursalCUC',$sucursalCuentaCUC);
                    $templateWord->setValue('sitoCUC',$direccionBancoCUC);

                    $templateWord->setValue('cuentaCUP',$noCuentaCUP);
                    $templateWord->setValue('titularCUP',$titularCuentaCUP);
                    $templateWord->setValue('bancoCUP',$bancoCuentaCUP);
                    $templateWord->setValue('sucursalCUP',$sucursalCuentaCUP);
                    $templateWord->setValue('sitoCUP',$direccionBancoCUP);

                    $templateWord->setValue('noLic',$noLicenciaCUC);
                    $templateWord->setValue('regCom',$noRegistroCom);
                    $templateWord->setValue('repLic',$representante);
                    $templateWord->setValue('cargoRep',$cargoRep);
                    $templateWord->setValue('noRes',$noResolucionRep);
                    $templateWord->setValue('fechaRes',$fechaResolRep);
                    $templateWord->setValue('emitidaRes',$emitidaPor);

                    $templateWord->setValue('tiempEjec',$tiempoEjecucion);

                    $tiempoTotal = $contratoPadre[0]->getTiempoEjecucion() + $tiempoEjecucion;
                    $templateWord->setValue('tiempTotal',$tiempoTotal);

                    $templateWord->setValue('objetoObra',$objetoObra);
                    $templateWord->setValue('nombreObra',$nombreObra);
                    $templateWord->setValue('direccionObra',$direccionObra);

                    $templateWord->setValue('valorCCUP',number_format($valorContratoCUP,2,'.',','));
                    $templateWord->setValue('valorCCUC',number_format($valorContratoCUC,2,'.',','));

                    $valorTCUP = $valorCUPPadre + $valorContratoCUP;
                    $valorTCUC = $valorCUCPadre + $valorContratoCUC;
                    $templateWord->setValue('totalCCUP',number_format($valorTCUP,2,'.',','));
                    $templateWord->setValue('totalCCUC',number_format($valorTCUC,2,'.',','));

                    $codigo = $nuevoSup->getCodigo();
                    $filename = $codigo.".docx";
                    $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
                    $templateWord->saveAs($filename);
                }
            }

            $asunto = 'Nuevo Suplemento';
            $mensaje = 'Con número: '.$nuevoSup->getCodigo();
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','economico@ccc.co.cu','Julio',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));
        }

        $em->flush();

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);

        return $response;
    }
    public function contratosTerminadosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>true, 'esContrato'=>false), array('codigo'=>'ASC')
        );

        $hoy = new \DateTime('now');
        $anno = $hoy->format('Y');

        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('vigente'=>false), array('anno'=>'ASC','codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findBy(
            array(), array('cliente'=>'ASC')
        );

        $solicitudes = $em->getRepository('OfertasBundle:SolicitudOferta')->findAll();

        return $this->render('OfertasBundle:Ofertas:contratosTerminados.html.twig',array(
            'ofertas' => $ofertas,
            'contratos' => $contratos,
            'clientes' => $clientes,
            'solicitudes' => $solicitudes,
        ));
    }

    public function archivarContratoAction()
    {
        //print_r($_POST);die;
        $id = $_POST['id'];

        $em = $this->getDoctrine()->getManager();
        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('id'=>$id)
        );
        $contratos[0]->setArchivo(true);

        $em->flush();

        return $this->redirect($this->generateUrl('contratos'));
    }
    public function cambiarVigenciaContratoAction()
    {
        //print_r($_POST);die;
        $id = $_POST['id'];

        $em = $this->getDoctrine()->getManager();
        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('id'=>$id)
        );
        $vigente = $contratos[0]->getVigente();
        if($vigente == true)
        {
            $contratos[0]->setVigente(false);
        }
        else
        {
            $contratos[0]->setVigente(true);
        }

        $em->flush();

        return $this->redirect($this->generateUrl('contratos'));
    }
    public function fechaFirmaContratoAction()
    {
        //print_r($_POST);die;
        $id = $_POST['idContrato'];
        $fechaFirma = $_POST['fechaFirma'];
        $vigencia = $_POST['vigencia'];

        $em = $this->getDoctrine()->getManager();
        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('id'=>$id)
        );
        $contratos[0]->setFechafirma(new \DateTime($fechaFirma));

        if($vigencia!='')
        {
            $contratos[0]->setVigencia($vigencia);
            $fecha = new \DateTime($fechaFirma);
            $f = $fecha->format('Y-m-d');
            $fechaV = strtotime('+'.$vigencia.' day', strtotime($f));
            $fechaV = date('Y-m-d', $fechaV);

            $contratos[0]->setFechavencimiento(new \DateTime($fechaV));
        }

        $em->flush();

        return $this->redirect($this->generateUrl('contratos'));
    }
    public function editarVigenciaContratoAction()
    {
        //print_r($_POST);die;
        $id = $_POST['idContrato'];
        $vigencia = $_POST['vigencia'];

        $em = $this->getDoctrine()->getManager();
        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('id'=>$id)
        );
        $fechaFirma = $contratos[0]->getFechafirma();

        if($vigencia!='')
        {
            $nuevaVigencia = $contratos[0]->getVigencia() + $vigencia;
            $contratos[0]->setVigencia($nuevaVigencia);
            $fecha = $fechaFirma;
            $f = $fecha->format('Y-m-d');
            $fechaV = strtotime('+'.$nuevaVigencia.' day', strtotime($f));
            $fechaV = date('Y-m-d', $fechaV);

            $contratos[0]->setFechavencimiento(new \DateTime($fechaV));
        }

        $em->flush();

        return $this->redirect($this->generateUrl('contratos'));
    }
    public function vigenciaContratoAction()
    {
        //print_r($_POST);die;
        $id = $_POST['idContrato'];
        $vigencia = $_POST['vigencia'];

        $em = $this->getDoctrine()->getManager();
        $contratos = $em->getRepository('OfertasBundle:Contratos')->findBy(
            array('id'=>$id)
        );

        $fechaFirma = $contratos[0]->getFechafirma();
        if($vigencia!='')
        {
            $contratos[0]->setVigencia($vigencia);
            $fecha = $fechaFirma;
            $f = $fecha->format('Y-m-d');
            $fechaV = strtotime('+'.$vigencia.' day', strtotime($f));
            $fechaV = date('Y-m-d', $fechaV);

            $contratos[0]->setFechavencimiento(new \DateTime($fechaV));
        }

        $em->flush();

        return $this->redirect($this->generateUrl('contratos'));
    }
    public function cargarContratoEscaneadoAction()
    {
        //print_r($_POST);die;
        $idContrato = $_POST['idContrato'];

        $em = $this->getDoctrine()->getManager();

        $contrato = $em->getRepository('OfertasBundle:Contratos')->findBy(array(
            'id' => $idContrato
        ));

        $tieneError = 0;

        if ($_FILES['nombreArchivo']['error'] > 0)
        {
            $error = $_FILES['nombreArchivo']['error'];
            $tieneError++;
        }
        if($tieneError==0)
        {
            $nombreArch = $_FILES['nombreArchivo']['name'];
            $tipoArch = $_FILES['nombreArchivo']['type'];
            $dirTemp = $_FILES['nombreArchivo']['tmp_name'];

            /*if(($tipoArch=='image/jpeg')||($tipoArch=='image/jpg') || ($tipoArch=='image/png'))*/
            if($tipoArch=='application/pdf')
            {

                $filename = $contrato[0]->getId().'.pdf';
                $direccion = $this->get('kernel')->getRootDir(). "/../web/bundles/ccc/contratosObra/" . $filename;

                move_uploaded_file($dirTemp,utf8_decode($direccion));
                $contrato[0]->setTieneScaner(true);
            }
            else
            {
                $tieneError++;
            }
        }

        $em->flush();

        $asunto = 'Nuevo contrato escaneado';
        $mensaje = 'Con número: '.$contrato[0]->getCodigo();
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','economico@ccc.co.cu','Julio',utf8_decode($asunto),utf8_decode($mensaje));
        $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));

        return $this->redirect($this->generateUrl('contratos'));
    }
    public function cargarNuevaProformaAction()
    {
        $idContrato = $_POST['idContrato'];

        $em = $this->getDoctrine()->getManager();

        $contrato = $em->getRepository('OfertasBundle:Contratos')->findBy(array(
            'id' => $idContrato
        ));
        $codigo = $contrato[0]->getCodigo();

        $tieneError = 0;

        if ($_FILES['nombreArchivo']['error'] > 0)
        {
            $error = $_FILES['nombreArchivo']['error'];
            $tieneError++;
        }
        if($tieneError==0)
        {
            $nombreArch = $_FILES['nombreArchivo']['name'];
            $tipoArch = $_FILES['nombreArchivo']['type'];
            $dirTemp = $_FILES['nombreArchivo']['tmp_name'];

            if($tipoArch == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
            {

                $filename = $codigo.'.docx';
                $direccion = $this->get('kernel')->getRootDir(). "/../web/" . $filename;

                move_uploaded_file($dirTemp,utf8_decode($direccion));

                $asunto = 'Nuevo proforma subida';
                $mensaje = 'Con número: '.$codigo;
                $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));
            }
            else
            {
                $tieneError++;
            }
        }

        return $this->redirect($this->generateUrl('contratos'));
    }

    public function contratosAEjecutarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $contratos = $em->getRepository('OfertasBundle:Contrato')->findBy(array(), array('anno' => 'ASC','noContrato' => 'ASC'));

        $solicitudes = $em->getRepository('OfertasBundle:SolicitudOferta')->findAll();

        return $this->render('OfertasBundle:Ofertas:contratoAEjecutar.html.twig',array(
            'contratos' => $contratos,
            'solicitudes' => $solicitudes,
        ));
    }
    public function eliminarContratoAction()
    {
        $idContrato = $_POST['idContrato'];

        $em = $this->getDoctrine()->getManager();

        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(
            array('id' => $idContrato)
        );

        $em->remove($contrato[0]);
        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function suplementarContratoAction()
    {
        //$idSolicitud = $_POST['idSolicitud'];
        //$idContrato = $_POST['idContrato'];
        $noContrato = $_POST['noContrato'];
        $annoContrato = $_POST['annoContrato'];
        $objeto = $_POST['objeto'];
        $valorCUP = $_POST['valorCUP'];
        $valorCUC = $_POST['valorCUC'];
        $valorCUPContrato = $_POST['valorCUPContrato'];
        $valorCUCContrato = $_POST['valorCUCContrato'];

        $em = $this->getDoctrine()->getManager();
        /* $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
             'id' => $idSolicitud
         ));
         $contratoV = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
             'id' => $idContrato
         ));
         $fechaEntrada = $contratoV[0]->getFechaEntrada();*/

        $nuevoContrato = new Contrato();
        //$nuevoContrato->setFechaEntrada($fechaEntrada);
        $nuevoContrato->setEsSuplemento(false);
        $nuevoContrato->setNoContrato($noContrato);
        $nuevoContrato->setAnno($annoContrato);
        $nuevoContrato->setObjeto($objeto);
        $nuevoContrato->setValorAnticipoCUP($valorCUP);
        $nuevoContrato->setValorAnticipoCUC($valorCUC);
        $nuevoContrato->setValorContratoCUP($valorCUPContrato);
        $nuevoContrato->setValorContratoCUC($valorCUCContrato);
        //$nuevoContrato->setIdSolicitudOferta($solicitud[0]);

        $em->persist($nuevoContrato);
        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }

    public function insertarFechaEntradaAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $fechaEntrada = $_POST['fechaEntrada'];
        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        $contrato = new Contrato();
        $contrato->setFechaEntrada(new \DateTime($fechaEntrada));
        $contrato->setEsSuplemento(false);
        $contrato->setIdSolicitudOferta($solicitud[0]);

        $em->persist($contrato);
        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarDatosContratoAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $noContrato = $_POST['noContrato'];
        $annoContrato = $_POST['annoContrato'];
        $objeto = $_POST['objeto'];
        $valorCUP = $_POST['valorCUP'];
        $valorCUC = $_POST['valorCUC'];
        $valorCUPContrato = $_POST['valorCUPContrato'];
        $valorCUCContrato = $_POST['valorCUCContrato'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setNoContrato($noContrato);
        $contrato[0]->setAnno($annoContrato);
        $contrato[0]->setObjeto($objeto);
        $contrato[0]->setValorAnticipoCUP($valorCUP);
        $contrato[0]->setValorAnticipoCUC($valorCUC);
        $contrato[0]->setValorContratoCUP($valorCUPContrato);
        $contrato[0]->setValorContratoCUC($valorCUCContrato);

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function editarDatosContratoAAction()
    {
        $idContrato = $_POST['idContrato'];
        $noContrato = $_POST['noContrato'];
        $annoContrato = $_POST['annoContrato'];
        $objeto = $_POST['objeto'];
        $valorCUP = $_POST['valorCUP'];
        $valorCUC = $_POST['valorCUC'];
        $valorCUPContrato = $_POST['valorCUPContrato'];
        $valorCUCContrato = $_POST['valorCUCContrato'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setNoContrato($noContrato);
        $contrato[0]->setAnno($annoContrato);
        $contrato[0]->setObjeto($objeto);
        $contrato[0]->setValorAnticipoCUP($valorCUP);
        $contrato[0]->setValorAnticipoCUC($valorCUC);
        $contrato[0]->setValorContratoCUP($valorCUPContrato);
        $contrato[0]->setValorContratoCUC($valorCUCContrato);

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarDatosContratoAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $noContrato = $_POST['noContrato'];
        $annoContrato = $_POST['annoContrato'];
        $objeto = $_POST['objeto'];
        $valorCUP = $_POST['valorCUP'];
        $valorCUC = $_POST['valorCUC'];
        $valorCUPContrato = $_POST['valorCUPContrato'];
        $valorCUCContrato = $_POST['valorCUCContrato'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setNoContrato($noContrato);
        $contrato[0]->setAnno($annoContrato);
        $contrato[0]->setObjeto($objeto);
        $contrato[0]->setValorAnticipoCUP($valorCUP);
        $contrato[0]->setValorAnticipoCUC($valorCUC);
        $contrato[0]->setValorContratoCUP($valorCUPContrato);
        $contrato[0]->setValorContratoCUC($valorCUCContrato);

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarVigenciaContratoAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $cantidad = $_POST['cantidad'];
        $tiempo = $_POST['tiempo'];

        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setVigencia($cantidad);
        $contrato[0]->setTipoTiempo($tiempo);

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarVigenciaContratoAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $cantidad = $_POST['cantidad'];
        $tiempo = $_POST['tiempo'];

        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setVigencia($cantidad);
        $contrato[0]->setTipoTiempo($tiempo);

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarVigenciaContratoAAction()
    {
        $idContrato = $_POST['idContrato'];
        $cantidad = $_POST['cantidad'];
        $tiempo = $_POST['tiempo'];

        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setVigencia($cantidad);
        $contrato[0]->setTipoTiempo($tiempo);

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarFechaSecretariaAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaSecretaria = $_POST['fechaSecretaria'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaSecretaria(new \DateTime($fechaSecretaria));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarFechaSecretariaAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaSecretaria = $_POST['fechaSecretaria'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaSecretaria(new \DateTime($fechaSecretaria));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarFechaSecretariaAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaSecretaria = $_POST['fechaSecretaria'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaSecretaria(new \DateTime($fechaSecretaria));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarFechaEconomiaAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaEconomia = $_POST['fechaEconomia'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEconomia(new \DateTime($fechaEconomia));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarFechaEconomiaAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaEconomia = $_POST['fechaEconomia'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEconomia(new \DateTime($fechaEconomia));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarFechaEconomiaAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaEconomia = $_POST['fechaEconomia'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEconomia(new \DateTime($fechaEconomia));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarFechaNegociosAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaNegocios = $_POST['fechaNegocios'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaNegocios(new \DateTime($fechaNegocios));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarFechaNegociosAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaNegocios = $_POST['fechaNegocios'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaNegocios(new \DateTime($fechaNegocios));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarFechaNegociosAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaNegocios = $_POST['fechaNegocios'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaNegocios(new \DateTime($fechaNegocios));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarFechaEjecucionAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaEjecucion = $_POST['fechaEjecucion'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEjecucion(new \DateTime($fechaEjecucion));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarFechaEjecucionAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaEjecucion = $_POST['fechaEjecucion'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEjecucion(new \DateTime($fechaEjecucion));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarFechaEjecucionAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaEjecucion = $_POST['fechaEjecucion'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEjecucion(new \DateTime($fechaEjecucion));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarFechaEntregaAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaEntregaCliente = $_POST['fechaEntregaCliente'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEntregaCliente(new \DateTime($fechaEntregaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarFechaEntregaAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaEntregaCliente = $_POST['fechaEntregaCliente'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEntregaCliente(new \DateTime($fechaEntregaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarFechaEntregaAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaEntregaCliente = $_POST['fechaEntregaCliente'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaEntregaCliente(new \DateTime($fechaEntregaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarEstadoContratoAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $estado = $_POST['estado'];
        $nota = $_POST['nota'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setEstado($estado);
        $contrato[0]->setNotaEstado($nota);

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarEstadoContratoAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $estado = $_POST['estado'];
        $nota = $_POST['nota'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setEstado($estado);
        $contrato[0]->setNotaEstado($nota);

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarEstadoContratoAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $estado = $_POST['estado'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        if($estado=='Firmado')
        {
            $contrato[0]->setEstado($estado);
            $contrato[0]->setNotaEstado('');
        }

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function editarEstadoContratoAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $estado = $_POST['estado'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        if($estado=='Firmado')
        {
            $contrato[0]->setEstado($estado);
            $contrato[0]->setNotaEstado('');
        }

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarFechaFirmaClienteAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaFirmaCliente = $_POST['fechaFirmaCliente'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaFirmaCliente(new \DateTime($fechaFirmaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarFechaFirmaClienteAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaFirmaCliente = $_POST['fechaFirmaCliente'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaFirmaCliente(new \DateTime($fechaFirmaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarFechaFirmaClienteAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaFirmaCliente = $_POST['fechaFirmaCliente'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaFirmaCliente(new \DateTime($fechaFirmaCliente));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarFechaFinalContratoAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaFinalContrato = $_POST['fechaFinalContrato'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaFirmaFinal(new \DateTime($fechaFinalContrato));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarFechaFinalContratoAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaFinalContrato = $_POST['fechaFinalContrato'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaFirmaFinal(new \DateTime($fechaFinalContrato));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarFechaFinalContratoAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaFinalContrato = $_POST['fechaFinalContrato'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaFirmaFinal(new \DateTime($fechaFinalContrato));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarActaInicioAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaActaInicio = $_POST['fechaActaInicio'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaActaInicio(new \DateTime($fechaActaInicio));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarActaInicioAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaActaInicio = $_POST['fechaActaInicio'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaActaInicio(new \DateTime($fechaActaInicio));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarActaInicioAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaActaInicio = $_POST['fechaActaInicio'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaActaInicio(new \DateTime($fechaActaInicio));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function insertarActaEntregaAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaActaEntrega = $_POST['fechaActaEntrega'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaActaEntrega(new \DateTime($fechaActaEntrega));

        $em->flush();

        return $this->redirect($this->generateUrl('contratoOferta', array('id'=>$idSolicitud)));
    }
    public function insertarActaEntregaAAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        $idContrato = $_POST['idContrato'];
        $fechaActaEntrega = $_POST['fechaActaEntrega'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaActaEntrega(new \DateTime($fechaActaEntrega));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }
    public function editarActaEntregaAAction()
    {
        $idContrato = $_POST['idContrato'];
        $fechaActaEntrega = $_POST['fechaActaEntrega'];
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('OfertasBundle:Contrato')->findBy(array(
            'id' => $idContrato
        ));

        $contrato[0]->setFechaActaEntrega(new \DateTime($fechaActaEntrega));

        $em->flush();

        return $this->redirect($this->generateUrl('contratosAEjecutar'));
    }

    /*  PRESUPUESTOS  */
    /*  EXCEL COMUN  */
    public function cargarPresupuestoAction()
    {
        $tipoPresupuesto = $_POST['tipoPresupuesto'];
        $idSolicitud = $_POST['idSolicitud'];

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        $tieneError = 0;

        if ($_FILES['nombreArchivo']['error'] > 0)
        {
            $error = $_FILES['nombreArchivo']['error'];
            $tieneError++;
        }
        if($tieneError==0)
        {
            $nombreArch = $_FILES['nombreArchivo']['name'];
            $tipoArch = $_FILES['nombreArchivo']['type'];

            $direccion = $this->get('kernel')->getRootDir(). "/../web/bundles/ccc/archivosTemp/".$nombreArch;

            if(($tipoArch=='application/vnd.ms-excel')||($tipoArch=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'))
            {
                move_uploaded_file($_FILES['nombreArchivo']['tmp_name'],$direccion);
                $objPHPExcel = \PHPExcel_IOFactory::load($direccion);
                $objPHPExcel->setActiveSheetIndex(0);
                // esto porq titulo la fila
                $i = 5;

                if($tipoPresupuesto == 'excelComun')
                {
                    while($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue()!='')
                    {
                        //RESUMEN DE PRESUPUESTO
                        if($i == 5)
                        {
                            $valorResumenPresCUP = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getValue();
                            $resumenPresCUP = 0;
                            $valorResumenPresCUC = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getValue();
                            $resumenPresCUC = 0;
                            if($valorResumenPresCUP != '' || $valorResumenPresCUP != null)
                            {
                                $resumenPresCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorResumenPresCUC != '' || $valorResumenPresCUC != null)
                            {
                                $resumenPresCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                        }
                        //GASTOS DIRECTOS
                        if($i == 6)
                        {
                            $valorGastosDirCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenGastosDirCUP = 0;
                            $valorGastosDirCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenGastosDirCUC = 0;
                            if($valorGastosDirCUP != '' || $valorGastosDirCUP != null)
                            {
                                $resumenGastosDirCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorGastosDirCUC != '' || $valorGastosDirCUC != null)
                            {
                                $resumenGastosDirCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                        }
                        //GASTOS GENERALES
                        if($i == 7)
                        {
                            $valorGastosGenCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenGastosGenCUP = 0;
                            $valorGastosGenCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenGastosGenCUC = 0;

                            if($valorGastosGenCUP != '' || $valorGastosGenCUP != null)
                            {
                                $resumenGastosGenCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorGastosGenCUC != '' || $valorGastosGenCUC != null)
                            {
                                $resumenGastosGenCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                        }
                        //GASTOS INDIRECTOS
                        if($i == 8)
                        {
                            $valorGastosIndCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenGastosIndCUP = 0;
                            $valorGastosIndCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenGastosIndCUC = 0;

                            if($valorGastosIndCUP != '' || $valorGastosIndCUP != null)
                            {
                                $resumenGastosIndCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorGastosIndCUC != '' || $valorGastosIndCUC != null)
                            {
                                $resumenGastosIndCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                        }
                        //PRESUPUESTOS INDEPENDIENTES
                        if($i == 9)
                        {
                            $valorPresIndCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenPresIndCUP = 0;
                            $valorPresIndCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenPresIndCUC = 0;

                            if($valorPresIndCUP != '' || $valorPresIndCUP != null)
                            {
                                $resumenPresIndCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorPresIndCUC != '' || $valorPresIndCUC != null)
                            {
                                $resumenPresIndCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                        }
                        //IMPREVISTOS
                        if($i == 10)
                        {
                            $valorImprevistosCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenImprevistosCUP = 0;
                            $valorImprevistosCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenImprevistosCUC = 0;

                            if($valorImprevistosCUP != '' || $valorImprevistosCUP != null)
                            {
                                $resumenImprevistosCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorImprevistosCUC != '' || $valorImprevistosCUC != null)
                            {
                                $resumenImprevistosCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                        }
                        //COSTO TOTAL
                        if($i == 11)
                        {
                            $valorCostoTotalCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenCostoTotalCUP = 0;
                            $valorCostoTotalCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenCostoTotalCUC = 0;

                            if($valorCostoTotalCUP != '' || $valorCostoTotalCUP != null)
                            {
                                $resumenCostoTotalCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorCostoTotalCUC != '' || $valorCostoTotalCUC != null)
                            {
                                $resumenCostoTotalCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                            $sumaCostoTotalCUP = $resumenPresCUP + $resumenGastosDirCUP + $resumenGastosGenCUP
                                + $resumenGastosIndCUP + $resumenPresIndCUP + $resumenImprevistosCUP;
                            $sumaCostoTotalCUC = $resumenPresCUC + $resumenGastosDirCUC + $resumenGastosGenCUC
                                + $resumenGastosIndCUC + $resumenPresIndCUC + $resumenImprevistosCUC;

                            if($sumaCostoTotalCUP != $resumenCostoTotalCUP)
                            {
                                print_r('Existe error en la fórmula del Costo Total CUP');die;
                            }
                            if($sumaCostoTotalCUC != $resumenCostoTotalCUC)
                            {
                                print_r('Existe error en la fórmula del Costo Total CUC');die;
                            }
                        }
                        //UTILIDADES
                        if($i == 12)
                        {
                            $valorUtilidadCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenUtilidadCUP = 0;
                            $valorUtilidadCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenUtilidadCUC = 0;

                            if($valorUtilidadCUP != '' || $valorUtilidadCUP != null)
                            {
                                $resumenUtilidadCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorUtilidadCUC != '' || $valorUtilidadCUC != null)
                            {
                                $resumenUtilidadCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                            $pcUtilidad = ($resumenUtilidadCUC /($resumenCostoTotalCUC - $resumenPresIndCUC))*100;
                        }
                        //PRECIO SERVICIO CONSTRUCCIÓN
                        if($i == 13)
                        {
                            $valorPrecioServCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenPrecioServCUP = 0;
                            $valorPrecioServCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenPrecioServCUC = 0;

                            if($valorPrecioServCUP != '' || $valorPrecioServCUP != null)
                            {
                                $resumenPrecioServCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorPrecioServCUC != '' || $valorPrecioServCUC != null)
                            {
                                $resumenPrecioServCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                            $sumaPrecioServCUP = $resumenCostoTotalCUP + $resumenUtilidadCUP;
                            $sumaPrecioServCUC = $resumenCostoTotalCUC + $resumenUtilidadCUC;

                            if($sumaPrecioServCUP != $resumenPrecioServCUP)
                            {
                                print_r('Existe error en la fórmula del Precio Servicio de Contrucción CUP');die;
                            }
                            if($sumaPrecioServCUC != $resumenPrecioServCUC)
                            {
                                print_r('Existe error en la fórmula del Precio Servicio de Contrucción CUC');die;
                            }
                        }
                        //PAGO DE TRIBUTOS
                        if($i == 14)
                        {
                            $valorTributosCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenTributosCUP = 0;
                            $valorTributosCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenTributosCUC = 0;

                            if($valorTributosCUP != '' || $valorTributosCUP != null)
                            {
                                $resumenTributosCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorTributosCUC != '' || $valorTributosCUC != null)
                            {
                                $resumenTributosCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                        }
                        //PRECIO MANO DE OBRA
                        if($i == 15)
                        {
                            $valorPrecioMOCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenPrecioMOCUP = 0;
                            $valorPrecioMOCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenPrecioMOCUC = 0;

                            if($valorPrecioMOCUP != '' || $valorPrecioMOCUP != null)
                            {
                                $resumenPrecioMOCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorPrecioMOCUC != '' || $valorPrecioMOCUC != null)
                            {
                                $resumenPrecioMOCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                            $sumaPrecioMOCUP = $resumenPrecioServCUP + $resumenTributosCUP;
                            $sumaPrecioMOCUC = $resumenPrecioServCUC + $resumenTributosCUC;

                            if($sumaPrecioMOCUP != $resumenPrecioMOCUP)
                            {
                                print_r('Existe error en la fórmula del Precio Servicio de Contrucción CUP');die;
                            }
                            if($sumaPrecioMOCUC != $resumenPrecioMOCUC)
                            {
                                print_r('Existe error en la fórmula del Precio Servicio de Contrucción CUC');die;
                            }
                        }
                        //PRECIO MATERIALES
                        if($i == 16)
                        {
                            $valorMaterialesCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenMaterialesCUP = 0;
                            $valorMaterialesCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenMaterialesCUC = 0;

                            if($valorMaterialesCUP != '' || $valorMaterialesCUP != null)
                            {
                                $resumenMaterialesCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorMaterialesCUC != '' || $valorMaterialesCUC != null)
                            {
                                $resumenMaterialesCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                        }
                        //PRECIO TOTAL SERVICIO CONSTRUCCION
                        if($i == 17)
                        {
                            $valorPrecioTotalCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenPrecioTotalCUP = 0;
                            $valorPrecioTotalCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                            $resumenPrecioTotalCUC = 0;

                            if($valorPrecioTotalCUP != '' || $valorPrecioTotalCUP != null)
                            {
                                $resumenPrecioTotalCUP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                            if($valorPrecioTotalCUC != '' || $valorPrecioTotalCUC != null)
                            {
                                $resumenPrecioTotalCUC = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                            }
                            $sumaPrecioTotalCUP = $resumenPrecioMOCUP + $resumenMaterialesCUP;
                            $sumaPrecioTotalCUC = $resumenPrecioMOCUC + $resumenMaterialesCUC;

                            if($sumaPrecioTotalCUP != $resumenPrecioTotalCUP)
                            {
                                print_r('Existe error en la fórmula del Precio Total Servicio de Contrucción CUP');die;
                            }
                            if($sumaPrecioTotalCUC != $resumenPrecioTotalCUC)
                            {
                                print_r('Existe error en la fórmula del Precio Total Servicio de Contrucción CUC');die;
                            }
                        }
                        //TIEMPO DE EJECUCION
                        if($i == 18)
                        {
                            $valorTiempo = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenTiempo = 0;

                            if($valorTiempo != '' || $valorTiempo != null)
                            {
                                $resumenTiempo = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                        }
                        //CANTIDAD DE HOMBRES
                        if($i == 19)
                        {
                            $valorHombres = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $resumenHombres = 0;

                            if($valorHombres != '' || $valorHombres != null)
                            {
                                $resumenHombres = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                            }
                        }

                        $i++;
                    }

                    $nuevoPresupuestoExcelComun = new PresupuestoExcelComun();
                    $nuevoPresupuestoExcelComun->setResumenpresupuestocup($resumenPresCUP);
                    $nuevoPresupuestoExcelComun->setResumenpresupuestocuc($resumenPresCUC);

                    $nuevoPresupuestoExcelComun->setGastosdirectoscup($resumenGastosDirCUP);
                    $nuevoPresupuestoExcelComun->setGastosdirectoscuc($resumenGastosDirCUC);

                    $nuevoPresupuestoExcelComun->setGastosgeneralescup($resumenGastosGenCUP);
                    $nuevoPresupuestoExcelComun->setGastosgeneralescuc($resumenGastosGenCUC);

                    $nuevoPresupuestoExcelComun->setGastosindirectoscup($resumenGastosIndCUP);
                    $nuevoPresupuestoExcelComun->setGastosindirectoscuc($resumenGastosIndCUC);

                    $nuevoPresupuestoExcelComun->setPresupuestosindependientescup($resumenPresIndCUP);
                    $nuevoPresupuestoExcelComun->setPresupuestosindependientescuc($resumenPresIndCUC);

                    $nuevoPresupuestoExcelComun->setImprevistoscup($resumenImprevistosCUP);
                    $nuevoPresupuestoExcelComun->setImprevistoscuc($resumenImprevistosCUC);

                    $nuevoPresupuestoExcelComun->setCostototalcup($resumenCostoTotalCUP);
                    $nuevoPresupuestoExcelComun->setCostototalcuc($resumenCostoTotalCUC);

                    $nuevoPresupuestoExcelComun->setPcutilidad($pcUtilidad);
                    $nuevoPresupuestoExcelComun->setUtilidadcup($resumenUtilidadCUP);
                    $nuevoPresupuestoExcelComun->setUtilidadcuc($resumenUtilidadCUC);

                    $nuevoPresupuestoExcelComun->setPrecioservconstcup($resumenPrecioServCUP);
                    $nuevoPresupuestoExcelComun->setPrecioservconstcuc($resumenPrecioServCUC);

                    $nuevoPresupuestoExcelComun->setPagotributoscup($resumenTributosCUP);
                    $nuevoPresupuestoExcelComun->setPagotributoscuc($resumenTributosCUC);

                    $nuevoPresupuestoExcelComun->setPreciomanoobracup($resumenPrecioMOCUP);
                    $nuevoPresupuestoExcelComun->setPreciomanoobracuc($resumenPrecioMOCUC);

                    $nuevoPresupuestoExcelComun->setPreciomaterialescup($resumenMaterialesCUP);
                    $nuevoPresupuestoExcelComun->setPreciomaterialescuc($resumenMaterialesCUC);

                    $nuevoPresupuestoExcelComun->setPreciototalcup($resumenPrecioTotalCUP);
                    $nuevoPresupuestoExcelComun->setPreciototalcuc($resumenPrecioTotalCUC);

                    $nuevoPresupuestoExcelComun->setTiempoejecuciondias($resumenTiempo);
                    $nuevoPresupuestoExcelComun->setCanthombres($resumenHombres);
                    $nuevoPresupuestoExcelComun->setIdSolicitudOferta($solicitud[0]);

                    $em->persist($nuevoPresupuestoExcelComun);
                }

                /*  PARA ELIMINAR EL ARCHIVO DESPUES Q LO UTILICE   */
                unlink($direccion);
            }
            else
            {
                $tieneError++;
            }
        }
        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function cargarActPresupuestoAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        //$noHoja = $_POST['noHoja']-1;

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));

        $presupuestoExcelComun = $solicitud[0]->getPresupuestoExcelComun();
        $resumenPresCUC = $presupuestoExcelComun[0]->getResumenpresupuestocuc();

        $tieneError = 0;

        if ($_FILES['nombreArchivo']['error'] > 0)
        {
            $error = $_FILES['nombreArchivo']['error'];
            $tieneError++;
        }
        if($tieneError==0)
        {
            $nombreArch = $_FILES['nombreArchivo']['name'];
            $tipoArch = $_FILES['nombreArchivo']['type'];

            $direccion = $this->get('kernel')->getRootDir(). "/../web/bundles/ccc/archivosTemp/".$nombreArch;

            if(($tipoArch=='application/vnd.ms-excel')||($tipoArch=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'))
            {
                move_uploaded_file($_FILES['nombreArchivo']['tmp_name'],$direccion);
                $objPHPExcel = \PHPExcel_IOFactory::load($direccion);
                $objPHPExcel->setActiveSheetIndex(0);
                // esto porq titulo la fila
                $i = 7;

                $totalMO = 0;
                while($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue()!='')
                {
                    if($i == 7)
                    {
                        $obj = $objPHPExcel->getActiveSheet()->getCell('B1')->getValue();
                        $expObj = explode('Objeto de Obra:',$obj);
                        $expCli = explode('Cliente:',$expObj[1]);

                        $objeto = $expCli[0];
                        $client = $expCli[1];

                        $objetivo = $objPHPExcel->getActiveSheet()->getCell('A5')->getValue().' '.
                            $objPHPExcel->getActiveSheet()->getCell('A6')->getValue();

                        $nuevoObjeto = new ObjetivosObra();
                        $nuevoObjeto->setObjetivo($objetivo);
                        $nuevoObjeto->setDescripcion($objetivo);
                        $nuevoObjeto->setEsSuplemento(false);
                        $nuevoObjeto->setIdPresupuesto($presupuestoExcelComun[0]);

                        $em->persist($nuevoObjeto);
                    }

                    $codigo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue();
                    $picarCodigo = explode('.', $codigo);
                    $actividad = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();

                    if($picarCodigo[2] == 0)
                    {
                        $nuevoGrupoAct = new GrupoActividadesObjetivo();
                        $nuevoGrupoAct->setCodigo($codigo);
                        $nuevoGrupoAct->setGrupo($actividad);
                        $nuevoGrupoAct->setIdObjetivo($nuevoObjeto);

                        $em->persist($nuevoGrupoAct);
                    }

                    if($picarCodigo[2] != 0)
                    {
                        $um = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                        $cant = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                        $cuc = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
                        $importe = $cant * $cuc;
                        $totalMO += $importe;

                        $nuevaActividad = new Actividades();
                        $nuevaActividad->setCodigo($codigo);
                        $nuevaActividad->setActividad($actividad);
                        $nuevaActividad->setCambioPlanificacion(false);
                        $nuevaActividad->setCantidad($cant);
                        $nuevaActividad->setPrecio($cuc);
                        $nuevaActividad->setUm($um);
                        $nuevaActividad->setTotal($importe);
                        $nuevaActividad->setIdGrupo($nuevoGrupoAct);

                        $em->persist($nuevaActividad);
                    }


                    $i++;
                }

                if(round($totalMO,2) != round($resumenPresCUC,2))
                {
                    print_r('Error en lo valores, no son iguales los Resumen de Presupuesto en CUC');
                    die;
                }


                /*  PARA ELIMINAR EL ARCHIVO DESPUES Q LO UTILICE   */
                unlink($direccion);
            }
            else
            {
                $tieneError++;
            }
        }
        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    public function cargarMatPresupuestoAction()
    {
        $idSolicitud = $_POST['idSolicitud'];
        //$noHoja = $_POST['noHoja']-1;

        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(array(
            'id' => $idSolicitud
        ));
        $presupuestoExcelComun = $solicitud[0]->getPresupuestoExcelComun();
        $resumenMaterialesCUC = $presupuestoExcelComun[0]->getPreciomaterialescuc();

        $tieneError = 0;

        if ($_FILES['nombreArchivo']['error'] > 0)
        {
            $error = $_FILES['nombreArchivo']['error'];
            $tieneError++;
        }
        if($tieneError==0)
        {
            $nombreArch = $_FILES['nombreArchivo']['name'];
            $tipoArch = $_FILES['nombreArchivo']['type'];

            $direccion = $this->get('kernel')->getRootDir(). "/../web/bundles/ccc/archivosTemp/".$nombreArch;

            if(($tipoArch=='application/vnd.ms-excel')||($tipoArch=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'))
            {
                move_uploaded_file($_FILES['nombreArchivo']['tmp_name'],$direccion);
                $objPHPExcel = \PHPExcel_IOFactory::load($direccion);
                $objPHPExcel->setActiveSheetIndex(0);
                // esto porq titulo la fila
                $i = 5;

                $totalMat = 0;
                while($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue()!='')
                {
                    $material = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();;
                    $um = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();;
                    $cant = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
                    $precio = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
                    $importe = $cant*$precio;

                    $totalMat += $importe;

                    $nuevoMaterial = new MaterialesPresExcelComun();
                    $nuevoMaterial->setMaterial($material);
                    $nuevoMaterial->setUm($um);
                    $nuevoMaterial->setPrecio($precio);
                    $nuevoMaterial->setCantidad($cant);
                    $nuevoMaterial->setImporte($importe);
                    $nuevoMaterial->setPorCCC(true);
                    $nuevoMaterial->setTransportacionCCC(0);
                    $nuevoMaterial->setIdPresupuesto($presupuestoExcelComun[0]);

                    $em->persist($nuevoMaterial);

                    $i++;
                }

                if(round($totalMat,2) != round($resumenMaterialesCUC,2))
                {
                    print_r('Error en lo valores, no son iguales los Resumen de Presupuesto en CUC');
                    die;
                }

                /*  PARA ELIMINAR EL ARCHIVO DESPUES Q LO UTILICE   */
                unlink($direccion);
            }
            else
            {
                $tieneError++;
            }
        }
        $em->flush();

        return $this->redirect($this->generateUrl('solicitudes'));
    }
    /*CREAR DIRECTORIO*/
    public function crearDirectorioAction()
    {
        $servidor = '192.168.1.119';
        $user = 'viktor';
        $pass = '123456789';
        /*$carpetas = ['01/18/Solicitudes/002/Cuantificación/Datos entregados por el cliente',
            '01/18/Solicitudes/002/Cuantificación/Documentación escrita',
            '01/18/Solicitudes/002/Cuantificación/Documentación gráfica',
            '01/18/Solicitudes/002/Cuantificación/Fotos',
            '01/18/Solicitudes/002/Costeo'
        ];*/

        //$this->crearDirectorioCliente($servidor, $user, $pass, $carpetas);

        die;
    }
    function crearDirectorioCliente($servidor, $user, $pass, $carpetas)
    {
        $conn_id = @ftp_connect($servidor);
        $login_result = @ftp_login($conn_id, $user, $pass);

        $source_file = 'C:\Users\Viktor\Desktop\Contratos.xls';

        if(!$login_result || !$conn_id)
        {
            die('Fallo a la hora de logearse.');
        }
        else
        {
            for($i = 0; $i < count($carpetas); $i++)
            {
                if (@ftp_mkdir($conn_id, $carpetas[$i]))
                {
                    $picarCarpeta = explode('/', $carpetas[$i]);
                    if($picarCarpeta[count($picarCarpeta)-1] == 'Costeo')
                    {
                        $destination_file = $carpetas[$i]."/Contratos.xls";
                        $upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);
                        if (!$upload)
                        {
                            echo "FTP upload fallido";
                        }
                    }
                }
                else
                {
                    echo "Ya existe esta carpeta en el servidor";
                }
            }

        }

        ftp_close($conn_id);
    }

    /*  CUANTIFICACION  */
    public function generarCuantificacionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('id'=>$id)
        );
        $nombPaquete = $em->getRepository('OfertasBundle:Nomenclador')->findBy(
            array('clasificador'=>'paquete'), array('nombre'=>'ASC')
        );
        $nombActividad = $em->getRepository('OfertasBundle:Nomenclador')->findBy(
            array('clasificador'=>'actividad'), array('nombre'=>'ASC')
        );

        return $this->render('OfertasBundle:Ofertas:cuantificacionSolicitud.html.twig',array(
            'solicitud' => $solicitud[0],
            'nombPaquete' => $nombPaquete,
            'nombActividad' => $nombActividad,
        ));
    }

    public function alertasAction()
    {
        $from = 'alertas@ccc.co.cu';
        $fromName = 'Alertas';
        $subject = 'RESUMEN OFERTAS';

        $this->fechaEntregaOfertas();
        $this->levantamientoVsCuantif();
        $this->cuantificacionVsOferta();

        $hoy = date("D");
        if($hoy=='Mon')
        {
            $this->resumenOfertas();

            $file = 'E:/wamp/www/ofertas/web/alertas/Resumen.xlsx';

            $htmlContent = '';
            //header for sender info
            $headers = "From: $fromName"." <".$from.">";
            //boundary
            $semi_rand = md5(time());
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
            //headers for attachment
            $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
            //multipart boundary
            $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
            //preparing attachment
            if(!empty($file) > 0)
            {
                if(is_file($file))
                {
                    $message .= "--{$mime_boundary}\n";
                    $fp =    @fopen($file,"rb");
                    $data =  @fread($fp,filesize($file));

                    @fclose($fp);
                    $data = chunk_split(base64_encode($data));
                    $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
                        //"Content-Description: ".basename($files[$i])."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                }
            }
            $message .= "--{$mime_boundary}--";
            $returnpath = "-f" . $from;

            @mail('victor@ccc.co.cu', $subject, $message, $headers, $returnpath);
            @mail('operaza@ccc.co.cu', $subject, $message, $headers, $returnpath);
            @mail('yenised@ccc.co.cu', $subject, $message, $headers, $returnpath);
        }

        return $this->redirect($this->generateUrl('estatica', array('estatica'=> 'inicio')));
        //return $this->render('OfertasBundle:Ofertas:inicio.html.twig',array());
    }
    function resumenOfertas()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array(), array('codigo'=>'ASC')
        );
        $clientes = $em->getRepository('OfertasBundle:Clientes')->findAll();

        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->getProperties()->setCreator("Alertas");
        $objPHPExcel->getProperties()->setLastModifiedBy("CCC");
        $objPHPExcel->getProperties()->setTitle("Resumen Ofertas");
        $objPHPExcel->getProperties()->setSubject("Resumen");
        $objPHPExcel->getProperties()->setDescription("Un resumen de todas las ofertas");

        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->getStyle('A1:C1')->applyFromArray(
            array(
                'font' => array(
                    'bold' => true
                )
            )
        );

        $casilla = 2;
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'No');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Cliente');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Descripción');
        for($i = 0 ; $i < count($ofertas); $i++)
        {
            if(($ofertas[$i]->getAprobado() == false) && ($ofertas[$i]->getRechazado() == false))
            {
                $codigo = $ofertas[$i]->getCodigo();
                $idCliente = $ofertas[$i]->getIdCliente();
                $codCliente = '';
                $nombreCliente = '';
                for($j = 0; $j < count($clientes); $j++)
                {
                    if($idCliente == $clientes[$j])
                    {
                        $codCliente = $clientes[$j]->getCodigo();
                        $nombreCliente = $clientes[$j]->getCliente();
                    }
                }
                $descripcion = $ofertas[$i]->getDescripcion();
                $objPHPExcel->getActiveSheet()->SetCellValue('A'.$casilla, '*'.$codigo);
                $objPHPExcel->getActiveSheet()->SetCellValue('B'.$casilla, $codCliente.'-'.$nombreCliente);
                $objPHPExcel->getActiveSheet()->SetCellValue('C'.$casilla, $descripcion);
                $casilla++;
            }
        }

        $objPHPExcel->getActiveSheet()->setTitle('Resumen de Ofertas');

        $objPHPExcel->setActiveSheetIndex(0);

        $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('E:/wamp/www/ofertas/web/alertas/Resumen.xlsx');
    }
    function fechaEntregaOfertas()
    {
        $em = $this->getDoctrine()->getManager();
        /*$ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>false), array('codigo'=>'ASC')
        );*/

        $ofertasN = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array('rechazado'=>false, 'aprobado'=>false), array('codigo'=>'ASC')
        );

        $ofertas = array();
        for($j = 0; $j < count($ofertasN); $j++)
        {
            if($ofertasN[$j]->getFechaEntregaCliente() != '')
            {
                $ofertas [] = $ofertasN[$j];
            }
        }

        $fechaHoy = new \DateTime("now", new \DateTimeZone('US/Pacific-New'));
        $fechaA = strtotime($fechaHoy->format('d.m.Y'));

        $asunto = 'ENTREGA OFERTA';
        $mensaje = 'Ya hace algún tiempo que se entregaron estas Ofertas'.'<br>'.'<br>';
        $mensaje .= '
        <table cellpadding="0" cellspacing="0">
            <tbody>
               <tr style="text-align: center">
                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 200px;font-family: Arial, Verdana, sans-serif; font-size: 15px; color: red;">No Oferta</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">Fecha Entrega</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">Días Transcurridos</td>
               </tr>
        ';
        $existenOfertasEntregadas = false;
        for($i = 0; $i < count($ofertas); $i++)
        {
            //$fechaO = strtotime($ofertas[$i]->getFechaEntregaCliente()->format('d.m.Y'));
            $fechaEntrega = $ofertas[$i]->getFechaEntregaCliente();
            $estado = $ofertas[$i]->getAprobado();
            $rechazado = $ofertas[$i]->getRechazado();
            if($fechaEntrega != '' && $estado == false && $rechazado == false)
            {
                //print_r($fechaEntrega);die;
                $fechaMas7Dias = strtotime ( '+7 day' , strtotime ( $fechaEntrega->format('d.m.Y') ) ) ;

                if($fechaMas7Dias <= $fechaA)
                {

                    $codigoOferta = $ofertas[$i]->getCodigo();
                    $fechaQseEntrego = $ofertas[$i]->getFechaEntregaCliente()->format('d.m.Y');
                    $diff = $fechaHoy->diff($ofertas[$i]->getFechaEntregaCliente());
                    $dias = $diff->days;
                    $mensaje .= '
                           <tr style="text-align: center">
                                <td style="border-width: 1px;border: solid; border-color: #000000;width: 200px;font-family: Arial, Verdana, sans-serif; font-size: 15px;">'.$codigoOferta.'</td>
                                <td style="border-width: 1px;border: solid; border-color: #000000;width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$fechaQseEntrego.'</td>
                                <td style="border-width: 1px;border: solid; border-color: #000000;width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$dias.'</td>
                            </tr>
                        ';
                    $existenOfertasEntregadas = true;
                }
            }
        }
        $mensaje.='
            </tbody>
        </table>
        ';

        if($existenOfertasEntregadas == true)
        {
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yenised@ccc.co.cu','Yenised',utf8_decode($asunto),utf8_decode($mensaje));
        }

    }
    function levantamientoVsCuantif()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array(), array('codigo'=>'ASC')
        );

        $fechaHoy = new \DateTime("now", new \DateTimeZone('US/Pacific-New'));
        $fechaA = strtotime($fechaHoy->format('d.m.Y'));

        $asunto = 'Levantamiento vs Cuantificación';
        $mensaje = 'Revisar, aun está pendiente por concluir la cuantificación a las siguientes Ofertas'.'<br>'.'<br>';
        $mensaje .= '
            <table cellpadding="0" cellspacing="0">
                <tbody>
                   <tr style="text-align: center">
                        <td style="border-width: 1px;border: solid; border-color: #000000;width: 200px;font-family: Arial, Verdana, sans-serif; font-size: 15px; color: red;">No Oferta</td>
                        <td style="border-width: 1px;border: solid; border-color: #000000;width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">Fecha Levantamiento</td>
                   </tr>
            ';
        $existenOfertasSinCuantif = false;

        for($i = 0; $i < count($ofertas); $i++)
        {
            if($ofertas[$i]->getFechaLevantamiento() != '')
            {
                if($ofertas[$i]->getFechaCuantificacion() == '')
                {
                    $fechaMas3Dias = strtotime ( '+3 day' , strtotime ( $ofertas[$i]->getFechaLevantamiento()->format('d.m.Y') ) ) ;

                    if($fechaMas3Dias <= $fechaA)
                    {
                        $codigoOferta = $ofertas[$i]->getCodigo();
                        $fechaLevant = $ofertas[$i]->getFechaLevantamiento()->format('d.m.Y');
                        $mensaje .= '
                           <tr style="text-align: center">
                                <td style="border-width: 1px;border: solid; border-color: #000000;width: 200px;font-family: Arial, Verdana, sans-serif; font-size: 15px;">'.$codigoOferta.'</td>
                                <td style="border-width: 1px;border: solid; border-color: #000000;width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$fechaLevant.'</td>
                            </tr>
                        ';
                        $existenOfertasSinCuantif = true;
                    }
                }
            }
        }
        $mensaje.='
            </tbody>
        </table>
        ';

        if($existenOfertasSinCuantif == true)
        {
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yenised@ccc.co.cu','Yenised',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','osvaldo@ccc.co.cu','Toral',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','eamat@ccc.co.cu','Amat',utf8_decode($asunto),utf8_decode($mensaje));
        }
    }
    function cuantificacionVsOferta()
    {
        $em = $this->getDoctrine()->getManager();
        $ofertas = $em->getRepository('OfertasBundle:SolicitudOferta')->findBy(
            array(), array('codigo'=>'ASC')
        );

        $fechaHoy = new \DateTime("now", new \DateTimeZone('US/Pacific-New'));
        $fechaA = strtotime($fechaHoy->format('d.m.Y'));

        $asunto = 'Cuantificación vs Oferta';
        $mensaje = 'Revisar, aun están pendientes por concluir las siguientes Ofertas'.'<br>'.'<br>';
        $mensaje .= '
        <table cellpadding="0" cellspacing="0">
            <tbody>
               <tr style="text-align: center">
                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 200px;font-family: Arial, Verdana, sans-serif; font-size: 15px; color: red;">No Oferta</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">Fecha Cuantificación</td>
               </tr>
        ';
        $existenOfertasSinHacer = false;
        for($i = 0; $i < count($ofertas); $i++)
        {
            if($ofertas[$i]->getFechaCuantificacion() != '')
            {
                if($ofertas[$i]->getFechaElaboracionOferta() == '')
                {
                    $fechaMas3Dias = strtotime ( '+3 day' , strtotime ( $ofertas[$i]->getFechaCuantificacion()->format('d.m.Y') ) ) ;

                    if($fechaMas3Dias <= $fechaA)
                    {

                        $codigoOferta = $ofertas[$i]->getCodigo();
                        $fechaCuantif = $ofertas[$i]->getFechaCuantificacion()->format('d.m.Y');
                        $mensaje .= '
                           <tr style="text-align: center">
                                <td style="border-width: 1px;border: solid; border-color: #000000;width: 200px;font-family: Arial, Verdana, sans-serif; font-size: 15px;">'.$codigoOferta.'</td>
                                <td style="border-width: 1px;border: solid; border-color: #000000;width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$fechaCuantif.'</td>
                            </tr>
                        ';
                        $existenOfertasSinHacer = true;
                    }
                }
            }
        }
        $mensaje.='
            </tbody>
        </table>
        ';

        if($existenOfertasSinHacer == true)
        {
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','victor@ccc.co.cu','Viktor',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','operaza@ccc.co.cu','Orlando',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','yenised@ccc.co.cu','Yenised',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','teresa.mo@ccc.co.cu','Tere',utf8_decode($asunto),utf8_decode($mensaje));
            $this->authSendEmail('alertas@ccc.co.cu','ALERTA','grete.rodriguez@ccc.co.cu','Grete',utf8_decode($asunto),utf8_decode($mensaje));
        }
    }

    function envioEmailModeloPDF($cl, $emp, $sect, $dir, $dirO, $nomC, $telC, $emailC)
    {
        $lbNombreCliente = 'NOMBRE DEL CLIENTE:';
        $lbEmpresa = 'EMPRESA:';
        $lbSector = 'SECTOR:';
        $lbDireccion = 'DIRECCIÓN:';
        $lbDatosObra = 'DATOS DE LA OBRA:';
        $lbDireccionObra = 'DIRECCIÓN:';
        $lbContacto = 'NOMBRE DEL CONTACTO:';
        $lbTelefonoContacto = 'TELÉFONO:';
        $lbEmailContacto = 'E-MAIL:';

        $lbDescripcionObra = 'DESCRIPCIÓN DE LA OBRA:';
        $txtDescripcionObra = 'Licencia de Construcción de la Obra (en caso de ser necesario): SI:_____  NO:______';

        $lbServiciosSolic = 'SERVICIOS SOLICITADOS POR EL CLIENTE';

        $cliente = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 300px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbNombreCliente.'</td>
                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">
                        <table border="0.1" border-color="#000000">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$cl.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $empresa = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 300px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbEmpresa.'</td>
                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">
                        <table border="0.1" border-color="#000000">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$emp.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

                    <td style="width: 100px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbSector.'</td>
                    <td style="width: 280px;font-family: Arial, Verdana, sans-serif; font-size: 18px">
                        <table border="0.1" border-color="#000000">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="width: 280px;font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$sect.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $direccion = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 300px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbDireccion.'</td>
                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">
                        <table border="0.1" border-color="#000000">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$dir.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $datosObra = '
        <table>
            <tbody>
                 <tr style="text-align: center">
                    <td style="width: 1000px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbDatosObra.'</td>
                </tr>
            </tbody>
        </table>
        ';

        $direccionObra = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 300px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbDireccionObra.'</td>
                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">
                        <table border="0.1" border-color="#000000">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$dirO.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $contacto = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 300px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbContacto.'</td>
                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">
                        <table border="0.1" border-color="#000000">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$nomC.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $telefEmailContacto = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 300px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbTelefonoContacto.'</td>
                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">
                        <table border="0.1" border-color="#000000">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$telC.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

                    <td style="width: 100px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbEmailContacto.'</td>
                    <td style="width: 280px;font-family: Arial, Verdana, sans-serif; font-size: 18px">
                        <table border="0.1" border-color="#000000">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="width: 280px;font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$emailC.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $descrpObra = '
       <table>
            <tbody>
                 <tr style="text-align: center">
                    <td style="width: 1000px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbDescripcionObra.'</td>
                </tr>
            </tbody>
        </table>
        ';

        $txtDescrpObra = '
       <table style="padding-left: 25px" border="0.1" border-color="#000000">
            <tbody>
                 <tr style="text-align: left">
                    <td style="width: 1000px;padding-top: -65px; height: 150px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$txtDescripcionObra.'</td>
                </tr>
            </tbody>
        </table>
        ';

        $serviciosSolicitados = '
       <table>
            <tbody>
                 <tr style="text-align: center">
                    <td style="width: 1000px; font-family: Arial, Verdana, sans-serif; font-size: 18px">'.$lbServiciosSolic.'</td>
                </tr>
            </tbody>
        </table>
        ';

        $txtServiciosSolic = '
       <table style="padding-left: 25px" border="0.1" border-color="#000000">
            <tbody>
                 <tr style="text-align: left">
                    <td style="width: 1000px; height: 250px; font-family: Arial, Verdana, sans-serif; font-size: 18px"><p style="color: #FFFFFF">TEXTO</p></td>
                </tr>
            </tbody>
        </table>
        ';

        $html = utf8_decode($cliente.$empresa.$direccion.$datosObra.$contacto.$telefEmailContacto.$direccionObra.$descrpObra.$txtDescrpObra.$serviciosSolicitados.$txtServiciosSolic.'<br>');

        $dompdf = $this->get('slik_dompdf');
        $dompdf->getpdf('<img src="E:/wamp/www/ofertas/web/bundles/ccc/img/Modelo.png" WIDTH=1000 HEIGHT=120>'.'<br>'.'<br>'.$html);

        $path = "E:/wamp/www/ofertas/web/pdf/";

        $output = $dompdf->output();
        file_put_contents($path.'/'.'Modelo.pdf', $output);

        $from = 'alertas@ccc.co.cu';
        $fromName = 'Alertas';
        $subject = 'MODELO';

        $file = $path.'Modelo.pdf';

        $htmlContent = '';
        //header for sender info
        $headers = "From: $fromName"." <".$from.">";
        //boundary
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        //headers for attachment
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        //multipart boundary
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
        //preparing attachment
        if(!empty($file) > 0)
        {
            if(is_file($file))
            {
                $message .= "--{$mime_boundary}\n";
                $fp =    @fopen($file,"rb");
                $data =  @fread($fp,filesize($file));

                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
                    //"Content-Description: ".basename($files[$i])."\n" .
                    "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;

        @mail('eamat@ccc.co.cu', $subject, $message, $headers, $returnpath);
        @mail('osvaldo@ccc.co.cu', $subject, $message, $headers, $returnpath);
    }

    function crearModeloWord($cliente, $noSolic, $ministerio, $sector, $direccionCliente, $nombreCliente, $telefono,
                             $email, $nombreObra, $direccionObra, $fechaLevan, $horaLevan, $fechaEntrega)
    {
        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/Plantilla.docx");

        $templateWord->setValue('cliente',$cliente);
        $templateWord->setValue('noSolic',$noSolic);
        $templateWord->setValue('minis',$ministerio);
        $templateWord->setValue('sector',$sector);
        $templateWord->setValue('direccionCliente',$direccionCliente);
        $templateWord->setValue('nombreCliente',$nombreCliente);
        $templateWord->setValue('telefono',$telefono);
        $templateWord->setValue('email',$email);
        $templateWord->setValue('nombreObra',$nombreObra);
        $templateWord->setValue('direccionObra',$direccionObra);
        $templateWord->setValue('fechaLevan',$fechaLevan);
        $templateWord->setValue('horaLevan',$horaLevan);
        $templateWord->setValue('fechaEntrega',$fechaEntrega);

        $filename="Modelo.docx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;
        $templateWord->saveAs($filename);
    }
    public function exportarPDFAction()
    {
        $templateWord = new TemplateProcessor($this->get('kernel')->getRootDir(). "/../web/Plantilla.docx");
        $cliente = 'Carpinteria Habana';
        $noSolic = '017';
        $ministerio = 'MICONS';
        $sector = 'Estatal';
        $direccionCliente = 'Calle 3ra / 96 y 96A. Playa. La Habana';
        $nombreCliente = 'Ruben Morales';
        $telefono = '76452548';
        $email = 'sdfsfsd@sfsdf.com.but';
        $nombreObra = 'Carpinteía Luyanó';
        $direccionObra = 'Calle 5ta / 96 y 96A. Playa. La Habana';
        $fechaLevan = '05.02.2018';
        $horaLevan = '09:25 am';
        $fechaEntrega = '15.02.2018';

        // --- Asignamos valores a la plantilla
        $templateWord->setValue('cliente',$cliente);
        $templateWord->setValue('noSolic',$noSolic);
        $templateWord->setValue('ministerio',$ministerio);
        $templateWord->setValue('sector',$sector);
        $templateWord->setValue('direccionCliente',$direccionCliente);
        $templateWord->setValue('nombreCliente',$nombreCliente);
        $templateWord->setValue('telefono',$telefono);
        $templateWord->setValue('email',$email);
        $templateWord->setValue('nombreObra',$nombreObra);
        $templateWord->setValue('direccionObra',$direccionObra);
        $templateWord->setValue('fechaLevan',$fechaLevan);
        $templateWord->setValue('horaLevan',$horaLevan);
        $templateWord->setValue('fechaEntrega',$fechaEntrega);

        $filename="Modelo.docx";
        $path = $this->get('kernel')->getRootDir(). "/../web/" . $filename;

        //guardamos la plantilla
        $templateWord->saveAs($filename);

        $temp = \PhpOffice\PhpWord\IOFactory::load($path);
        $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($temp, 'PDF');
        $xmlWriter->save('Modelo.pdf',TRUE);
        DIE;

        $content = file_get_contents($path);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);
        return $response;


        die;


        $lbNoSolicitud = 'No. Solicitud:';
        $lbNombreCliente = 'CLIENTE (EMPRESA):';
        $lbEmpresa = 'MINISTERIO:';
        $lbSector = 'SECTOR:';
        $lbDireccion = 'DIRECCIÓN:';
        $lbDatosObra = 'DATOS DE LA OBRA:';
        $lbDireccionObra = 'DIRECCIÓN:';
        $lbnNombreObra = 'NOMBRE DE LA OBRA:';
        $lbContacto = 'NOMBRE DEL CLIENTE:';
        $lbTelefonoContacto = 'TELÉFONOS:';
        $lbEmailContacto = 'E-MAIL:';

        $lbDescripcionObra = 'DESCRIPCIÓN GENERAL DE LA OBRA:';
        $txtDescripcionObra = 'Licencia de Construcción de la Obra (en caso de ser necesario): SI:_____  NO:______';

        $lbServiciosSolic = 'SERVICIOS SOLICITADOS POR EL CLIENTE';

        $lbOferta = 'OFERTA POR:';
        $lbOferta1 = 'ENTREGA DE DOCUMENTACIÓN DE PROYECTO:';
        $lbOferta2 = 'NECESIDAD DE LEVANTAMIENTO O DICTAMEN TÉCNICO DE OBRA:';
        $lbOferta3 = 'ASESORAMIENTO TÉCNICO DE LA EJECUCIÓN DE LA OBRA:';
        $lbOferta4 = 'FECHA ESTIMADA DE LEVANTAMIENTO:';
        $lbOferta5 = 'HORA:';

        $lbAlcObra = 'ALCANCE DE LA OBRA:';
        $lbAlcObra1 = 'DOCUMENTACIÓN GRÁFICA:';
        $lbAlcObra2 = 'LISTADO DE ACTIVIDADES DE MANO DE OBRA:';
        $lbAlcObra3 = 'SISTEMA A PRESUPUESTAR (Reng. Variantes / Excel):';
        $lbAlcObra4 = 'LISTADO DE MATERIALES:';
        $lbAlcObra5 = 'COSTO DE MATERIALES INCLUIDO EN LA OFERTA:';

        $porCliente = 'POR EL CLIENTE';
        $porCooperativa = 'POR LA COOPERATIVA';
        $lbFirma = 'FIRMA:______________________';
        $nombre = 'NOMBRE:';

        $cliente = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 250px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbNombreCliente.'</strong></td>
                    <td style="width: 500px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 500px;font-family: Arial, Verdana, sans-serif; font-size: 20px">Carpintería Habana</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td style="color: #ffffff">.</td>
                    <td style="width: 50px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 50px;font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbNoSolicitud.'</strong>007</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $empresa = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 250px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbEmpresa.'</strong></td>
                    <td style="width: 400px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 400px;font-family: Arial, Verdana, sans-serif; font-size: 20px">MICONS</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

                    <td style="width: 100px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbSector.'</strong></td>
                    <td style="width: 280px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 280px;font-family: Arial, Verdana, sans-serif; font-size: 20px">Estatal</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $direccion = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 250px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbDireccion.'</strong></td>
                    <td style="width: 800px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 800px;font-family: Arial, Verdana, sans-serif; font-size: 20px">Avenida Independencia Km 5 1/2, Boyeros</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $datosObra = '
        <table>
            <tbody>
                 <tr style="text-align: center">
                    <td style="width: 1200px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbDatosObra.'</strong></td>
                </tr>
            </tbody>
        </table>
        ';

        $nombreObra = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 250px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbnNombreObra.'</strong></td>
                    <td style="width: 800px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 800px;font-family: Arial, Verdana, sans-serif; font-size: 20px">Carpintería Luyanó.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $direccionObra = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 250px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbDireccionObra.'</strong></td>
                    <td style="width: 800px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 800px;font-family: Arial, Verdana, sans-serif; font-size: 20px">Calle Nuestra Señora de los Angeles esq. a Tres Palacios, Luyano.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $contacto = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 250px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbContacto.'</strong></td>
                    <td style="width: 500px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 500px;font-family: Arial, Verdana, sans-serif; font-size: 20px">Ruben Morales</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $telefEmailContacto = '
        <table>
            <tbody>
                 <tr style="text-align: right">
                    <td style="width: 250px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbTelefonoContacto.'</strong></td>
                    <td style="width: 400px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                         <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 400px;font-family: Arial, Verdana, sans-serif; font-size: 20px">52176398</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

                    <td style="width: 100px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbEmailContacto.'</strong></td>
                    <td style="width: 280px;font-family: Arial, Verdana, sans-serif; font-size: 20px">
                         <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
                            <tbody>
                                 <tr style="text-align: center">
                                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 280px;font-family: Arial, Verdana, sans-serif; font-size: 20px">ruben.morales@cmadera.gescon.cu</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        ';

        $descrpObra = '
       <table>
            <tbody>
                 <tr style="text-align: center">
                    <td style="width: 1100px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbDescripcionObra.'</strong></td>
                </tr>
            </tbody>
        </table>
        ';

        $txtDescrpObra = '
        <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
            <tbody>
                 <tr style="text-align: left">
                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 1100px;padding-top: -210px; height: 450px; font-family: Arial, Verdana, sans-serif; font-size: 20px">'.$txtDescripcionObra.'</td>
                </tr>
            </tbody>
        </table>
        ';

        $serviciosSolicitados = '
       <table>
            <tbody>
                 <tr style="text-align: center">
                    <td style="width: 1100px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbServiciosSolic.'</strong></td>
                </tr>
            </tbody>
        </table>
        ';

        $txtServiciosSolic = '
       <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
            <tbody>
                 <tr style="text-align: left">
                    <td style="border-width: 1px;border: solid; border-color: #000000;width: 1100px; height: 250px; font-family: Arial, Verdana, sans-serif; font-size: 20px;color: #FFFFFF">.</td>
                </tr>
            </tbody>
        </table>
        ';

        $oferta = '
       <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
            <tbody>
                 <tr>
                    <td rowspan="3" style="border-width: 1px;border: solid; border-color: #000000;text-align: center; width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbOferta.'</strong></td>
                    <td style="border-top: 3px solid #000000;border-left : 2px solid #000000;border-right : 1px solid #000000;text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$lbOferta1.'</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 5px; color: #FFFFFF">.</td>
                </tr>
                <tr>
                    <td style="border-left : 2px solid #000000;border-right : 1px solid #000000;text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$lbOferta2.'</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 5px; color: #FFFFFF"">.</td>
                </tr>
                <tr>
                    <td style="border-bottom: 3px solid #000000;border-left : 2px solid #000000;border-right : 1px solid #000000;text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$lbOferta3.'</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 5px; color: #FFFFFF"">.</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px"><strong>'.$lbOferta4.'</strong></td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">28/01/2018</td>
                </tr>
                 <tr>
                    <td></td>
                    <td style="text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px"><strong>'.$lbOferta5.'</strong></td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 15px">09:30 am</td>
                </tr>
            </tbody>
        </table>

        ';

        $alcance = '
       <table cellpadding="0" cellspacing="0" style="0 0 0 0;">
            <tbody>
                 <tr>
                    <td rowspan="5" style="border-width: 1px;border: solid; border-color: #000000;text-align: center; width: 300px;font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$lbAlcObra.'</strong></td>
                    <td style="border-top: 3px solid #000000;border-left : 2px solid #000000;border-right : 1px solid #000000;text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$lbAlcObra1.'</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 5px; color: #FFFFFF"">.</td>
                </tr>
                <tr>
                    <td style="border-left : 2px solid #000000;border-right : 1px solid #000000;text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$lbAlcObra2.'</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 5px; color: #FFFFFF"">.</td>
                </tr>
                <tr>
                    <td style="border-left : 2px solid #000000;border-right : 1px solid #000000;text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$lbAlcObra3.'</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 5px; color: #FFFFFF"">.</td>
                </tr>
                 <tr>
                    <td style="border-left : 2px solid #000000;border-right : 1px solid #000000;text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$lbAlcObra4.'</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 5px; color: #FFFFFF"">.</td>
                </tr>
                 <tr>
                    <td style="border-bottom: 3px solid #000000;border-left : 2px solid #000000;border-right : 1px solid #000000;text-align: right; width: 700px;font-family: Arial, Verdana, sans-serif; font-size: 15px">'.$lbAlcObra5.'</td>
                    <td style="border-width: 1px;border: solid; border-color: #000000;text-align: right; width: 100px;font-family: Arial, Verdana, sans-serif; font-size: 5px; color: #FFFFFF"">.</td>
                </tr>
            </tbody>
        </table>

        ';

        $firma = '
        <table>
            <tbody>
                 <tr style="text-align: left">
                    <td rowspan="3" style="width: 200px; font-family: Arial, Verdana, sans-serif; font-size: 20px; color: #ffffff">.</td>
                    <td style="width: 400px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$porCliente.'</strong></td>
                    <td style="width: 400px; font-family: Arial, Verdana, sans-serif; font-size: 20px"><strong>'.$porCooperativa.'</strong></td>
                </tr>
                 <tr style="text-align: left">
                    <td style="width: 400px; font-family: Arial, Verdana, sans-serif; font-size: 20px">'.$nombre.'</td>
                    <td style="width: 400px; font-family: Arial, Verdana, sans-serif; font-size: 20px">'.$nombre.'</td>
                </tr>
                 <tr style="text-align: left">
                    <td style="width: 400px; font-family: Arial, Verdana, sans-serif; font-size: 20px">'.$lbFirma.'</td>
                    <td style="width: 400px; font-family: Arial, Verdana, sans-serif; font-size: 20px">'.$lbFirma.'</td>
                </tr>
            </tbody>
        </table>
        ';

        $html = '
        <html>
            <head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
            <style type="text/css">

            body {
              font-family: sans-serif;
              font-size: 10pt;
                /*background: #eee;*/
            }

            div.absolute {
                /*border: 2px dotted green;*/
                position: absolute;
                padding: 0.5em;
                text-align: center;
                vertical-align: middle;
            }

            </style>
            </head>

            <body>

            <div class="absolute" style="top: -40px; right: 0px;">
              <a style="color: rgb(198,72,10)"><strong>No. 007</strong></a>
            </div>

            <div class="absolute" style="top: -40px; left: 40px; right: 40px;">
              <img src="E:/wamp/www/ofertas/web/bundles/ccc/img/Modelo.png" WIDTH=1150 HEIGHT=140 style="padding-left: -30px">
            </div>

            <div class="absolute" style="top: 140px; left: 10px; right: 10px; bottom: 140px; ">
                 '.$cliente.'<br>'.$empresa.'<br>'.$direccion.'<br>'.$contacto.'<br>'.$telefEmailContacto.'<br>'.$datosObra.
            $nombreObra.'<br>'.$direccionObra.'<br>'.$descrpObra.$txtDescrpObra.'<br>'.$serviciosSolicitados.$txtServiciosSolic.
            '<br>'.$oferta.'<br>'.$alcance.'<br>'.'<br>'.$firma.'
            </div>


            <div class="absolute" style="bottom: -40px; left: 40px; right: 40px;">
              Dir: Calle 3ra No. 9604 e/ 96 y 96A, Playa.          Telf.: 72044632-33.          e-mail: cccubana@ccc.co.cu
            </div>

            </body>

            </html>
        ';

        $dompdf = $this->get('slik_dompdf');
        $dompdf->getpdf($html);

        $path = "E:/wamp/www/ofertas/web/pdf/";

        $output = $dompdf->output();
        file_put_contents($path.'/'.'ModeloPrueba.pdf', $output);

        die;
    }

    function authSendEmail($from, $namefrom, $to, $nameto, $subject, $message)
    {
        //SMTP + SERVER DETAILS
        /* * * * CONFIGURATION START * * * */
        $smtpServer = "192.168.1.1";
        $port = "2525";
        $timeout = "4000";
        $username = "alertas@ccc.co.cu";
        $password = "Prueba2017";
        /*$localhost = "127.0.0.1";*/
        $localhost = "127.0.0.1";
        $newLine = "\r\n";
        /* * * * CONFIGURATION END * * * * */

        //Connect to the host on the specified port
        $smtpConnect = fsockopen($smtpServer, $port, $errno, $errstr, $timeout);
        $smtpResponse = fgets($smtpConnect, 515);
        if(empty($smtpConnect))
        {
            $output = "Failed to connect: $smtpResponse";
            return $output;
        }
        else
        {
            $logArray['connection'] = "Connected: $smtpResponse";
        }

        //Request Auth Login
        fputs($smtpConnect,"AUTH LOGIN" . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['authrequest'] = "$smtpResponse";

        //VIKTOR    Request Auth
        fputs($smtpConnect,"AUTHENTICATED" . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['auth'] = "$smtpResponse";

        //Send username
        fputs($smtpConnect, base64_encode($username) . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['authusername'] = "$smtpResponse";

        //Send password
        fputs($smtpConnect, base64_encode($password) . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['authpassword'] = "$smtpResponse";

        //Say Hello to SMTP
        fputs($smtpConnect, "HELO $localhost" . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['heloresponse'] = "$smtpResponse";

        //Email From
        fputs($smtpConnect, "MAIL FROM: $from" . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['mailfromresponse'] = "$smtpResponse";

        //Email To
        fputs($smtpConnect, "RCPT TO: $to" . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['mailtoresponse'] = "$smtpResponse";

        //The Email
        fputs($smtpConnect, "DATA" . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['data1response'] = "$smtpResponse";

        //Construct Headers
        $headers = "MIME-Version: 1.0" . $newLine;
        $headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;
        $headers .= "To: $nameto <$to>" . $newLine;
        $headers .= "From: $namefrom <$from>" . $newLine;

        fputs($smtpConnect, "To: $to\nFrom: $from\nSubject: $subject\n$headers\n\n$message\n.\n");
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['data2response'] = "$smtpResponse";

        // Say Bye to SMTP
        fputs($smtpConnect,"QUIT" . $newLine);
        $smtpResponse = fgets($smtpConnect, 515);
        $logArray['quitresponse'] = "$smtpResponse";
    }
}
