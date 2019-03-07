<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contratos
 *
 * @ORM\Table(name="contratos")
 * @ORM\Entity
 */
class Contratos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="no", type="string", length=255)
     */
    private $no;

    /**
     * @var string
     *
     * @ORM\Column(name="tipodocumento", type="string", length=255)
     */
    private $tipodocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="anno", type="integer")
     */
    private $anno;

    /**
     * @var integer
     *
     * @ORM\Column(name="cliente", type="integer")
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="objeto", type="string", length=255)
     */
    private $objeto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreobra", type="string", length=255, nullable = true)
     */
    private $nombreObra;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionobra", type="string", length=255, nullable = true)
     */
    private $direccionObra;

    /**
     * @var float
     *
     * @ORM\Column(name="tiempoejecucion", type="float", nullable = true)
     */
    private $tiempoEjecucion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archivo", type="boolean")
     */
    private $archivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vigente", type="boolean")
     */
    private $vigente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esmarco", type="boolean")
     */
    private $esmarco;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantceo", type="integer", nullable = true)
     */
    private $cantceo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantsup", type="integer", nullable = true)
     */
    private $cantsup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="essuplemento", type="boolean")
     */
    private $essuplemento;

    /**
     * @var string
     *
     * @ORM\Column(name="tiposuplemento", type="string", length=255, nullable = true)
     */
    private $tiposuplemento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcontratopadre", type="integer", nullable = true)
     */
    private $idcontratopadre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafirma", type="datetime", nullable = true)
     */
    private $fechafirma;

    /**
     * @var integer
     *
     * @ORM\Column(name="vigencia", type="integer", nullable = true)
     */
    private $vigencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavencimiento", type="datetime", nullable = true)
     */
    private $fechavencimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="diasejecucion", type="integer", nullable = true)
     */
    private $diasejecucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsolicitud", type="integer", nullable = true)
     */
    private $idsolicitud;

    /**
     * @var float
     *
     * @ORM\Column(name="valorcontratocup", type="float", nullable = true)
     */
    private $valorcontratocup;

    /**
     * @var float
     *
     * @ORM\Column(name="valorcontratocupconsumido", type="float", nullable = true)
     */
    private $valorcontratocupconsumido;

    /**
     * @var float
     *
     * @ORM\Column(name="valorcontratocuc", type="float", nullable = true)
     */
    private $valorcontratocuc;

    /**
     * @var float
     *
     * @ORM\Column(name="valorcontratocucconsumido", type="float", nullable = true)
     */
    private $valorcontratocucconsumido;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipopc", type="float", nullable = true)
     */
    private $anticipopc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anticipocobrado", type="boolean", nullable = true)
     */
    private $anticipoCobrado;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipocup", type="float", nullable = true)
     */
    private $anticipocup;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipocupconsumido", type="float", nullable = true)
     */
    private $anticipocupconsumido;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipocuc", type="float", nullable = true)
     */
    private $anticipocuc;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipocucconsumido", type="float", nullable = true)
     */
    private $anticipocucconsumido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tieneScaner", type="boolean")
     */
    private $tieneScaner;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tienepresupuesto", type="boolean")
     */
    private $tienePresupuesto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esprewin", type="boolean", nullable = true)
     */
    private $esprewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoresuemenpresupuestocupexcel", type="float", nullable = true)
     */
    private $gastoResuemenPresupuestoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certresuemenpresupuestocupexcel", type="float", nullable = true)
     */
    private $certResuemenPresupuestoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoresuemenpresupuestocucexcel", type="float", nullable = true)
     */
    private $gastoResuemenPresupuestoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certresuemenpresupuestocucexcel", type="float", nullable = true)
     */
    private $certResuemenPresupuestoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastodirectocupexcel", type="float", nullable = true)
     */
    private $gastoDirectoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certdirectocupexcel", type="float", nullable = true)
     */
    private $certDirectoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastodirectocucexcel", type="float", nullable = true)
     */
    private $gastoDirectoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certdirectocucexcel", type="float", nullable = true)
     */
    private $certDirectoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastogeneneralcupexcel", type="float", nullable = true)
     */
    private $gastoGeneralCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certgeneneralcupexcel", type="float", nullable = true)
     */
    private $certGeneralCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastogeneneralcucexcel", type="float", nullable = true)
     */
    private $gastoGeneralCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certgeneneralcucexcel", type="float", nullable = true)
     */
    private $certGeneralCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoindirectocupexcel", type="float", nullable = true)
     */
    private $gastoIndirectoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certindirectocupexcel", type="float", nullable = true)
     */
    private $certIndirectoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoindirectocucexcel", type="float", nullable = true)
     */
    private $gastoIndirectoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certindirectocucexcel", type="float", nullable = true)
     */
    private $certIndirectoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopresupuestoindcupexcel", type="float", nullable = true)
     */
    private $gastoPresupuestoIndCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresupuestoindcupexcel", type="float", nullable = true)
     */
    private $certPresupuestoIndCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopresupuestoindcucexcel", type="float", nullable = true)
     */
    private $gastoPresupuestoIndCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresupuestoindcucexcel", type="float", nullable = true)
     */
    private $certPresupuestoIndCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoimprevistoscupexcel", type="float", nullable = true)
     */
    private $gastoImprevistosCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certimprevistoscupexcel", type="float", nullable = true)
     */
    private $certImprevistosCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoimprevistoscucexcel", type="float", nullable = true)
     */
    private $gastoImprevistosCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certimprevistoscucexcel", type="float", nullable = true)
     */
    private $certImprevistosCUCExcel;


    /**
     * @var float
     *
     * @ORM\Column(name="gastocostototalcupexcel", type="float", nullable = true)
     */
    private $gastoCostoTotalCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certcostototalcupexcel", type="float", nullable = true)
     */
    private $certCostoTotalCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastocostototalcucexcel", type="float", nullable = true)
     */
    private $gastoCostoTotalCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certcostototalcucexcel", type="float", nullable = true)
     */
    private $certCostoTotalCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoporcientoutilidadexcel", type="float", nullable = true)
     */
    private $gastoPorCientoUtilidadExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoutilidadcupexcel", type="float", nullable = true)
     */
    private $gastoUtilidadCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certutilidadcupexcel", type="float", nullable = true)
     */
    private $certUtilidadCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoutilidadcucexcel", type="float", nullable = true)
     */
    private $gastoUtilidadCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certutilidadcucexcel", type="float", nullable = true)
     */
    private $certUtilidadCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoprecioservconstcupexcel", type="float", nullable = true)
     */
    private $gastoPrecioServConstCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certprecioservconstcupexcel", type="float", nullable = true)
     */
    private $certPrecioServConstCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoprecioservconstcucexcel", type="float", nullable = true)
     */
    private $gastoPrecioServConstCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certprecioservconstcucexcel", type="float", nullable = true)
     */
    private $certPrecioServConstCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopagotributoscupexcel", type="float", nullable = true)
     */
    private $gastoPagoTributosCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpagotributoscupexcel", type="float", nullable = true)
     */
    private $certPagoTributosCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopagotributoscucexcel", type="float", nullable = true)
     */
    private $gastoPagoTributosCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpagotributoscucexcel", type="float", nullable = true)
     */
    private $certPagoTributosCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciomocupexcel", type="float", nullable = true)
     */
    private $gastoPrecioMOCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpreciomocupexcel", type="float", nullable = true)
     */
    private $certPrecioMOCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciomocucexcel", type="float", nullable = true)
     */
    private $gastoPrecioMOCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpreciomocucexcel", type="float", nullable = true)
     */
    private $certPrecioMOCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciomaterialescupexcel", type="float", nullable = true)
     */
    private $gastoPrecioMaterialesCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpreciomaterialescupexcel", type="float", nullable = true)
     */
    private $certPrecioMaterialesCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciomaterialescucexcel", type="float", nullable = true)
     */
    private $gastoPrecioMaterialesCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpreciomaterialescucexcel", type="float", nullable = true)
     */
    private $certPrecioMaterialesCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciototalservconstcupexcel", type="float", nullable = true)
     */
    private $gastoPrecioTotalServConstCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpreciototalservconstcupexcel", type="float", nullable = true)
     */
    private $certPrecioTotalServConstCUPExcel;


    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciototalservconstcucexcel", type="float", nullable = true)
     */
    private $gastoPrecioTotalServConstCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="certpreciototalservconstcucexcel", type="float", nullable = true)
     */
    private $certPrecioTotalServConstCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomaterialescupprewin", type="float", nullable = true)
     */
    private $gastoMaterialesCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastomaterialescupprewin", type="float", nullable = true)
     */
    private $certGastoMaterialesCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomaterialescucprewin", type="float", nullable = true)
     */
    private $gastoMaterialesCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastomaterialescucprewin", type="float", nullable = true)
     */
    private $certGastoMaterialesCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomocupprewin", type="float", nullable = true)
     */
    private $gastoMOCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastomocupprewin", type="float", nullable = true)
     */
    private $certGastoMOCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomocucprewin", type="float", nullable = true)
     */
    private $gastoMOCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastomocucprewin", type="float", nullable = true)
     */
    private $certGastoMOCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastousoequiposcupprewin", type="float", nullable = true)
     */
    private $gastoUsoEquiposCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastousoequiposcupprewin", type="float", nullable = true)
     */
    private $certGastoUsoEquiposCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastousoequiposcucprewin", type="float", nullable = true)
     */
    private $gastoUsoEquiposCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastousoequiposcucprewin", type="float", nullable = true)
     */
    private $certGastoUsoEquiposCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="otrosgastosdirectoscupprewin", type="float", nullable = true)
     */
    private $otrosGastosDirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certotrosgastosdirectoscupprewin", type="float", nullable = true)
     */
    private $certOtrosGastosDirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="otrosgastosdirectoscucprewin", type="float", nullable = true)
     */
    private $otrosGastosDirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certotrosgastosdirectoscucprewin", type="float", nullable = true)
     */
    private $certOtrosGastosDirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopruebascupprewin", type="float", nullable = true)
     */
    private $gastoPruebasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastopruebascupprewin", type="float", nullable = true)
     */
    private $certGastoPruebasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopruebascucprewin", type="float", nullable = true)
     */
    private $gastoPruebasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastopruebascucprewin", type="float", nullable = true)
     */
    private $certGastoPruebasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomermascupprewin", type="float", nullable = true)
     */
    private $gastoMermasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastomermascupprewin", type="float", nullable = true)
     */
    private $certGastoMermasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomermascucprewin", type="float", nullable = true)
     */
    private $gastoMermasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastomermascucprewin", type="float", nullable = true)
     */
    private $certGastoMermasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoreplanteoscupprewin", type="float", nullable = true)
     */
    private $gastoReplanteosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoreplanteoscupprewin", type="float", nullable = true)
     */
    private $certGastoReplanteosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoreplanteoscucprewin", type="float", nullable = true)
     */
    private $gastoReplanteosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoreplanteoscucprewin", type="float", nullable = true)
     */
    private $certGastoReplanteosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastotransferenciascupprewin", type="float", nullable = true)
     */
    private $gastoTransferenciasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastotransferenciascupprewin", type="float", nullable = true)
     */
    private $certGastoTransferenciasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastotransferenciascucprewin", type="float", nullable = true)
     */
    private $gastoTransferenciasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastotransferenciascucprewin", type="float", nullable = true)
     */
    private $certGastoTransferenciasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastocargascupprewin", type="float", nullable = true)
     */
    private $gastoCargasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastocargascupprewin", type="float", nullable = true)
     */
    private $certGastoCargasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastocargascucprewin", type="float", nullable = true)
     */
    private $gastoCargasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastocargascucprewin", type="float", nullable = true)
     */
    private $certGastoCargasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoalmacenajecupprewin", type="float", nullable = true)
     */
    private $gastoAlmacenajeCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoalmacenajecupprewin", type="float", nullable = true)
     */
    private $certGastoAlmacenajeCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoalmacenajecucprewin", type="float", nullable = true)
     */
    private $gastoAlmacenajeCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoalmacenajecucprewin", type="float", nullable = true)
     */
    private $certGastoAlmacenajeCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoparadascupprewin", type="float", nullable = true)
     */
    private $gastoParadasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoparadascupprewin", type="float", nullable = true)
     */
    private $certGastoParadasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoparadascucprewin", type="float", nullable = true)
     */
    private $gastoParadasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoparadascucprewin", type="float", nullable = true)
     */
    private $certGastoParadasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoreparacioncupprewin", type="float", nullable = true)
     */
    private $gastoReparacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoreparacioncupprewin", type="float", nullable = true)
     */
    private $certGastoReparacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoreparacioncucprewin", type="float", nullable = true)
     */
    private $gastoReparacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoreparacioncucprewin", type="float", nullable = true)
     */
    private $certGastoReparacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoproteccioncupprewin", type="float", nullable = true)
     */
    private $gastoProteccionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoproteccioncupprewin", type="float", nullable = true)
     */
    private $certGastoProteccionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoproteccioncucprewin", type="float", nullable = true)
     */
    private $gastoProteccionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoproteccioncucprewin", type="float", nullable = true)
     */
    private $certGastoProteccionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomenorescupprewin", type="float", nullable = true)
     */
    private $gastoMenoresCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastomenorescupprewin", type="float", nullable = true)
     */
    private $certGastoMenoresCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomenorescucprewin", type="float", nullable = true)
     */
    private $gastoMenoresCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastomenorescucprewin", type="float", nullable = true)
     */
    private $certGastoMenoresCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoelectricidadcupprewin", type="float", nullable = true)
     */
    private $gastoElectricidadCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoelectricidadcupprewin", type="float", nullable = true)
     */
    private $certGastoElectricidadCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoelectricidadcucprewin", type="float", nullable = true)
     */
    private $gastoElectricidadCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoelectricidadcucprewin", type="float", nullable = true)
     */
    private $certGastoElectricidadCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoaguacupprewin", type="float", nullable = true)
     */
    private $gastoAguaCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoaguacupprewin", type="float", nullable = true)
     */
    private $certGastoAguaCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoaguacucprewin", type="float", nullable = true)
     */
    private $gastoAguaCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoaguacucprewin", type="float", nullable = true)
     */
    private $certGastoAguaCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastolimpiesacupprewin", type="float", nullable = true)
     */
    private $gastoLimpiesaCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastolimpiesacupprewin", type="float", nullable = true)
     */
    private $certGastoLimpiesaCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastolimpiesacucprewin", type="float", nullable = true)
     */
    private $gastoLimpiesaCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastolimpiesacucprewin", type="float", nullable = true)
     */
    private $certGastoLimpiesaCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoaseocupprewin", type="float", nullable = true)
     */
    private $gastoAseoCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoaseocupprewin", type="float", nullable = true)
     */
    private $certGastoAseoCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoaseocucprewin", type="float", nullable = true)
     */
    private $gastoAseoCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoaseocucprewin", type="float", nullable = true)
     */
    private $certGastoAseoCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosgeneralescupprewin", type="float", nullable = true)
     */
    private $gastosGeneralesCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastosgeneralescupprewin", type="float", nullable = true)
     */
    private $certGastosGeneralesCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosgeneralescucprewin", type="float", nullable = true)
     */
    private $gastosGeneralesCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastosgeneralescucprewin", type="float", nullable = true)
     */
    private $certGastosGeneralesCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoscomercializacioncupprewin", type="float", nullable = true)
     */
    private $gastosComercializacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoscomercializacioncupprewin", type="float", nullable = true)
     */
    private $certGastosComercializacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoscomercializacioncucprewin", type="float", nullable = true)
     */
    private $gastosComercializacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastoscomercializacioncucprewin", type="float", nullable = true)
     */
    private $certGastosComercializacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastospreparacioncupprewin", type="float", nullable = true)
     */
    private $gastosPreparacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastospreparacioncupprewin", type="float", nullable = true)
     */
    private $certGastosPreparacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastospreparacioncucprewin", type="float", nullable = true)
     */
    private $gastosPreparacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastospreparacioncucprewin", type="float", nullable = true)
     */
    private $certGastosPreparacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosadministracioncupprewin", type="float", nullable = true)
     */
    private $gastosAdministracionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastosadministracioncupprewin", type="float", nullable = true)
     */
    private $certGastosAdministracionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosadministracioncucprewin", type="float", nullable = true)
     */
    private $gastosAdministracionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastosadministracioncucprewin", type="float", nullable = true)
     */
    private $certGastosAdministracionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="totalgastosdirectoscupprewin", type="float", nullable = true)
     */
    private $totalGastosDirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certtotalgastosdirectoscupprewin", type="float", nullable = true)
     */
    private $certTotalGastosDirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="totalgastosdirectoscucprewin", type="float", nullable = true)
     */
    private $totalGastosDirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certtotalgastosdirectoscucprewin", type="float", nullable = true)
     */
    private $certTotalGastosDirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosindirectoscupprewin", type="float", nullable = true)
     */
    private $gastosIndirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastosindirectoscupprewin", type="float", nullable = true)
     */
    private $certGastosIndirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosindirectoscucprewin", type="float", nullable = true)
     */
    private $gastosIndirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certgastosindirectoscucprewin", type="float", nullable = true)
     */
    private $certGastosIndirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalgastoscupprewin", type="float", nullable = true)
     */
    private $subTotalGastosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certsubtotalgastoscupprewin", type="float", nullable = true)
     */
    private $certSubTotalGastosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalgastoscucprewin", type="float", nullable = true)
     */
    private $subTotalGastosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certsubtotalgastoscucprewin", type="float", nullable = true)
     */
    private $certSubTotalGastosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindftcupprewin", type="float", nullable = true)
     */
    private $presIndFTCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindftcupprewin", type="float", nullable = true)
     */
    private $certPresIndFTCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindftcucprewin", type="float", nullable = true)
     */
    private $presIndFTCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindftcucprewin", type="float", nullable = true)
     */
    private $certPresIndFTCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindogacupprewin", type="float", nullable = true)
     */
    private $presIndOGACUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindogacupprewin", type="float", nullable = true)
     */
    private $certPresIndOGACUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindogacucprewin", type="float", nullable = true)
     */
    private $presIndOGACUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindogacucprewin", type="float", nullable = true)
     */
    private $certPresIndOGACUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindgbcupprewin", type="float", nullable = true)
     */
    private $presIndGBCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindgbcupprewin", type="float", nullable = true)
     */
    private $certPresIndGBCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindgbcucprewin", type="float", nullable = true)
     */
    private $presIndGBCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindgbcucprewin", type="float", nullable = true)
     */
    private $certPresIndGBCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindsegcupprewin", type="float", nullable = true)
     */
    private $presIndSegCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindsegcupprewin", type="float", nullable = true)
     */
    private $certPresIndSegCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindsegcucprewin", type="float", nullable = true)
     */
    private $presIndSegCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindsegcucprewin", type="float", nullable = true)
     */
    private $certPresIndSegCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindimpcupprewin", type="float", nullable = true)
     */
    private $presIndImpCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindimpcupprewin", type="float", nullable = true)
     */
    private $certPresIndImpCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindimpcucprewin", type="float", nullable = true)
     */
    private $presIndImpCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindimpcucprewin", type="float", nullable = true)
     */
    private $certPresIndImpCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindtranscupprewin", type="float", nullable = true)
     */
    private $presIndTransCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindtranscupprewin", type="float", nullable = true)
     */
    private $certPresIndTransCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindtranscucprewin", type="float", nullable = true)
     */
    private $presIndTransCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindtranscucprewin", type="float", nullable = true)
     */
    private $certPresIndTransCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalpresindcupprewin", type="float", nullable = true)
     */
    private $subTotalPresIndCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certsubtotalpresindcupprewin", type="float", nullable = true)
     */
    private $certSubTotalPresIndCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalpresindcucprewin", type="float", nullable = true)
     */
    private $subTotalPresIndCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certsubtotalpresindcucprewin", type="float", nullable = true)
     */
    private $certSubTotalPresIndCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="costototalcupprewin", type="float", nullable = true)
     */
    private $costoTotalCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certcostototalcupprewin", type="float", nullable = true)
     */
    private $certCostoTotalCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="costototalcucprewin", type="float", nullable = true)
     */
    private $costoTotalCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certcostototalcucprewin", type="float", nullable = true)
     */
    private $certCostoTotalCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="pcutilidadprewin", type="float", nullable = true)
     */
    private $pcUtilidadPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="utilidadcupprewin", type="float", nullable = true)
     */
    private $utilidadCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certutilidadcupprewin", type="float", nullable = true)
     */
    private $certUtilidadCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="utilidadcucprewin", type="float", nullable = true)
     */
    private $utilidadCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certutilidadcucprewin", type="float", nullable = true)
     */
    private $certUtilidadCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="precservconstcupprewin", type="float", nullable = true)
     */
    private $precServConstCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certprecservconstcupprewin", type="float", nullable = true)
     */
    private $certPrecServConstCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="precservconstcucprewin", type="float", nullable = true)
     */
    private $precServConstCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certprecservconstcucprewin", type="float", nullable = true)
     */
    private $certPrecServConstCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindtributoscupprewin", type="float", nullable = true)
     */
    private $presIndTributosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindtributoscupprewin", type="float", nullable = true)
     */
    private $certPresIndTributosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindtributoscucprewin", type="float", nullable = true)
     */
    private $presIndTributosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certpresindtributoscucprewin", type="float", nullable = true)
     */
    private $certPresIndTributosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="prectotalservconstcupprewin", type="float", nullable = true)
     */
    private $precTotalServConstCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certprectotalservconstcupprewin", type="float", nullable = true)
     */
    private $certPrecTotalServConstCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="prectotalservconstcucprewin", type="float", nullable = true)
     */
    private $precTotalServConstCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="certprectotalservconstcucprewin", type="float", nullable = true)
     */
    private $certPrecTotalServConstCUCPrewin;


    /**
     * @ORM\OneToMany(targetEntity="CertificacionExcel", mappedBy="idContrato", cascade={"persist", "remove"})
     */
    private $certificacionExcel;

    /**
     * @ORM\OneToMany(targetEntity="CertificacionPrewin", mappedBy="idContrato", cascade={"persist", "remove"})
     */
    private $certificacionPrewin;

    /**
     * @ORM\OneToMany(targetEntity="Facturas", mappedBy="idContrato", cascade={"persist", "remove"})
     */
    private $facturas;






    /**
     * Constructor
     */
    public function __construct()
    {
        $this->certificacionExcel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->certificacionPrewin = new \Doctrine\Common\Collections\ArrayCollection();
        $this->facturas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Contratos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set no
     *
     * @param string $no
     * @return Contratos
     */
    public function setNo($no)
    {
        $this->no = $no;
    
        return $this;
    }

    /**
     * Get no
     *
     * @return string 
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * Set tipodocumento
     *
     * @param string $tipodocumento
     * @return Contratos
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;
    
        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return string 
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     * @return Contratos
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;
    
        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set cliente
     *
     * @param integer $cliente
     * @return Contratos
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return integer 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set objeto
     *
     * @param string $objeto
     * @return Contratos
     */
    public function setObjeto($objeto)
    {
        $this->objeto = $objeto;
    
        return $this;
    }

    /**
     * Get objeto
     *
     * @return string 
     */
    public function getObjeto()
    {
        return $this->objeto;
    }

    /**
     * Set nombreObra
     *
     * @param string $nombreObra
     * @return Contratos
     */
    public function setNombreObra($nombreObra)
    {
        $this->nombreObra = $nombreObra;
    
        return $this;
    }

    /**
     * Get nombreObra
     *
     * @return string 
     */
    public function getNombreObra()
    {
        return $this->nombreObra;
    }

    /**
     * Set direccionObra
     *
     * @param string $direccionObra
     * @return Contratos
     */
    public function setDireccionObra($direccionObra)
    {
        $this->direccionObra = $direccionObra;
    
        return $this;
    }

    /**
     * Get direccionObra
     *
     * @return string 
     */
    public function getDireccionObra()
    {
        return $this->direccionObra;
    }

    /**
     * Set tiempoEjecucion
     *
     * @param float $tiempoEjecucion
     * @return Contratos
     */
    public function setTiempoEjecucion($tiempoEjecucion)
    {
        $this->tiempoEjecucion = $tiempoEjecucion;
    
        return $this;
    }

    /**
     * Get tiempoEjecucion
     *
     * @return float 
     */
    public function getTiempoEjecucion()
    {
        return $this->tiempoEjecucion;
    }

    /**
     * Set archivo
     *
     * @param boolean $archivo
     * @return Contratos
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    
        return $this;
    }

    /**
     * Get archivo
     *
     * @return boolean 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Set vigente
     *
     * @param boolean $vigente
     * @return Contratos
     */
    public function setVigente($vigente)
    {
        $this->vigente = $vigente;
    
        return $this;
    }

    /**
     * Get vigente
     *
     * @return boolean 
     */
    public function getVigente()
    {
        return $this->vigente;
    }

    /**
     * Set esmarco
     *
     * @param boolean $esmarco
     * @return Contratos
     */
    public function setEsmarco($esmarco)
    {
        $this->esmarco = $esmarco;
    
        return $this;
    }

    /**
     * Get esmarco
     *
     * @return boolean 
     */
    public function getEsmarco()
    {
        return $this->esmarco;
    }

    /**
     * Set cantceo
     *
     * @param integer $cantceo
     * @return Contratos
     */
    public function setCantceo($cantceo)
    {
        $this->cantceo = $cantceo;
    
        return $this;
    }

    /**
     * Get cantceo
     *
     * @return integer 
     */
    public function getCantceo()
    {
        return $this->cantceo;
    }

    /**
     * Set cantsup
     *
     * @param integer $cantsup
     * @return Contratos
     */
    public function setCantsup($cantsup)
    {
        $this->cantsup = $cantsup;
    
        return $this;
    }

    /**
     * Get cantsup
     *
     * @return integer 
     */
    public function getCantsup()
    {
        return $this->cantsup;
    }

    /**
     * Set essuplemento
     *
     * @param boolean $essuplemento
     * @return Contratos
     */
    public function setEssuplemento($essuplemento)
    {
        $this->essuplemento = $essuplemento;
    
        return $this;
    }

    /**
     * Get essuplemento
     *
     * @return boolean 
     */
    public function getEssuplemento()
    {
        return $this->essuplemento;
    }

    /**
     * Set tiposuplemento
     *
     * @param string $tiposuplemento
     * @return Contratos
     */
    public function setTiposuplemento($tiposuplemento)
    {
        $this->tiposuplemento = $tiposuplemento;
    
        return $this;
    }

    /**
     * Get tiposuplemento
     *
     * @return string 
     */
    public function getTiposuplemento()
    {
        return $this->tiposuplemento;
    }

    /**
     * Set idcontratopadre
     *
     * @param integer $idcontratopadre
     * @return Contratos
     */
    public function setIdcontratopadre($idcontratopadre)
    {
        $this->idcontratopadre = $idcontratopadre;
    
        return $this;
    }

    /**
     * Get idcontratopadre
     *
     * @return integer 
     */
    public function getIdcontratopadre()
    {
        return $this->idcontratopadre;
    }

    /**
     * Set fechafirma
     *
     * @param \DateTime $fechafirma
     * @return Contratos
     */
    public function setFechafirma($fechafirma)
    {
        $this->fechafirma = $fechafirma;
    
        return $this;
    }

    /**
     * Get fechafirma
     *
     * @return \DateTime 
     */
    public function getFechafirma()
    {
        return $this->fechafirma;
    }

    /**
     * Set vigencia
     *
     * @param integer $vigencia
     * @return Contratos
     */
    public function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;
    
        return $this;
    }

    /**
     * Get vigencia
     *
     * @return integer 
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }

    /**
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     * @return Contratos
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;
    
        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime 
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set diasejecucion
     *
     * @param integer $diasejecucion
     * @return Contratos
     */
    public function setDiasejecucion($diasejecucion)
    {
        $this->diasejecucion = $diasejecucion;
    
        return $this;
    }

    /**
     * Get diasejecucion
     *
     * @return integer 
     */
    public function getDiasejecucion()
    {
        return $this->diasejecucion;
    }

    /**
     * Set idsolicitud
     *
     * @param integer $idsolicitud
     * @return Contratos
     */
    public function setIdsolicitud($idsolicitud)
    {
        $this->idsolicitud = $idsolicitud;
    
        return $this;
    }

    /**
     * Get idsolicitud
     *
     * @return integer 
     */
    public function getIdsolicitud()
    {
        return $this->idsolicitud;
    }

    /**
     * Set valorcontratocup
     *
     * @param float $valorcontratocup
     * @return Contratos
     */
    public function setValorcontratocup($valorcontratocup)
    {
        $this->valorcontratocup = $valorcontratocup;
    
        return $this;
    }

    /**
     * Get valorcontratocup
     *
     * @return float 
     */
    public function getValorcontratocup()
    {
        return $this->valorcontratocup;
    }

    /**
     * Set valorcontratocupconsumido
     *
     * @param float $valorcontratocupconsumido
     * @return Contratos
     */
    public function setValorcontratocupconsumido($valorcontratocupconsumido)
    {
        $this->valorcontratocupconsumido = $valorcontratocupconsumido;
    
        return $this;
    }

    /**
     * Get valorcontratocupconsumido
     *
     * @return float 
     */
    public function getValorcontratocupconsumido()
    {
        return $this->valorcontratocupconsumido;
    }

    /**
     * Set valorcontratocuc
     *
     * @param float $valorcontratocuc
     * @return Contratos
     */
    public function setValorcontratocuc($valorcontratocuc)
    {
        $this->valorcontratocuc = $valorcontratocuc;
    
        return $this;
    }

    /**
     * Get valorcontratocuc
     *
     * @return float 
     */
    public function getValorcontratocuc()
    {
        return $this->valorcontratocuc;
    }

    /**
     * Set valorcontratocucconsumido
     *
     * @param float $valorcontratocucconsumido
     * @return Contratos
     */
    public function setValorcontratocucconsumido($valorcontratocucconsumido)
    {
        $this->valorcontratocucconsumido = $valorcontratocucconsumido;
    
        return $this;
    }

    /**
     * Get valorcontratocucconsumido
     *
     * @return float 
     */
    public function getValorcontratocucconsumido()
    {
        return $this->valorcontratocucconsumido;
    }

    /**
     * Set anticipopc
     *
     * @param float $anticipopc
     * @return Contratos
     */
    public function setAnticipopc($anticipopc)
    {
        $this->anticipopc = $anticipopc;
    
        return $this;
    }

    /**
     * Get anticipopc
     *
     * @return float 
     */
    public function getAnticipopc()
    {
        return $this->anticipopc;
    }

    /**
     * Set anticipoCobrado
     *
     * @param boolean $anticipoCobrado
     * @return Contratos
     */
    public function setAnticipoCobrado($anticipoCobrado)
    {
        $this->anticipoCobrado = $anticipoCobrado;
    
        return $this;
    }

    /**
     * Get anticipoCobrado
     *
     * @return boolean 
     */
    public function getAnticipoCobrado()
    {
        return $this->anticipoCobrado;
    }

    /**
     * Set anticipocup
     *
     * @param float $anticipocup
     * @return Contratos
     */
    public function setAnticipocup($anticipocup)
    {
        $this->anticipocup = $anticipocup;
    
        return $this;
    }

    /**
     * Get anticipocup
     *
     * @return float 
     */
    public function getAnticipocup()
    {
        return $this->anticipocup;
    }

    /**
     * Set anticipocupconsumido
     *
     * @param float $anticipocupconsumido
     * @return Contratos
     */
    public function setAnticipocupconsumido($anticipocupconsumido)
    {
        $this->anticipocupconsumido = $anticipocupconsumido;
    
        return $this;
    }

    /**
     * Get anticipocupconsumido
     *
     * @return float 
     */
    public function getAnticipocupconsumido()
    {
        return $this->anticipocupconsumido;
    }

    /**
     * Set anticipocuc
     *
     * @param float $anticipocuc
     * @return Contratos
     */
    public function setAnticipocuc($anticipocuc)
    {
        $this->anticipocuc = $anticipocuc;
    
        return $this;
    }

    /**
     * Get anticipocuc
     *
     * @return float 
     */
    public function getAnticipocuc()
    {
        return $this->anticipocuc;
    }

    /**
     * Set anticipocucconsumido
     *
     * @param float $anticipocucconsumido
     * @return Contratos
     */
    public function setAnticipocucconsumido($anticipocucconsumido)
    {
        $this->anticipocucconsumido = $anticipocucconsumido;
    
        return $this;
    }

    /**
     * Get anticipocucconsumido
     *
     * @return float 
     */
    public function getAnticipocucconsumido()
    {
        return $this->anticipocucconsumido;
    }

    /**
     * Set tieneScaner
     *
     * @param boolean $tieneScaner
     * @return Contratos
     */
    public function setTieneScaner($tieneScaner)
    {
        $this->tieneScaner = $tieneScaner;
    
        return $this;
    }

    /**
     * Get tieneScaner
     *
     * @return boolean 
     */
    public function getTieneScaner()
    {
        return $this->tieneScaner;
    }

    /**
     * Set tienePresupuesto
     *
     * @param boolean $tienePresupuesto
     * @return Contratos
     */
    public function setTienePresupuesto($tienePresupuesto)
    {
        $this->tienePresupuesto = $tienePresupuesto;
    
        return $this;
    }

    /**
     * Get tienePresupuesto
     *
     * @return boolean 
     */
    public function getTienePresupuesto()
    {
        return $this->tienePresupuesto;
    }

    /**
     * Set esprewin
     *
     * @param boolean $esprewin
     * @return Contratos
     */
    public function setEsprewin($esprewin)
    {
        $this->esprewin = $esprewin;
    
        return $this;
    }

    /**
     * Get esprewin
     *
     * @return boolean 
     */
    public function getEsprewin()
    {
        return $this->esprewin;
    }

    /**
     * Set gastoResuemenPresupuestoCUPExcel
     *
     * @param float $gastoResuemenPresupuestoCUPExcel
     * @return Contratos
     */
    public function setGastoResuemenPresupuestoCUPExcel($gastoResuemenPresupuestoCUPExcel)
    {
        $this->gastoResuemenPresupuestoCUPExcel = $gastoResuemenPresupuestoCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoResuemenPresupuestoCUPExcel
     *
     * @return float 
     */
    public function getGastoResuemenPresupuestoCUPExcel()
    {
        return $this->gastoResuemenPresupuestoCUPExcel;
    }

    /**
     * Set certResuemenPresupuestoCUPExcel
     *
     * @param float $certResuemenPresupuestoCUPExcel
     * @return Contratos
     */
    public function setCertResuemenPresupuestoCUPExcel($certResuemenPresupuestoCUPExcel)
    {
        $this->certResuemenPresupuestoCUPExcel = $certResuemenPresupuestoCUPExcel;
    
        return $this;
    }

    /**
     * Get certResuemenPresupuestoCUPExcel
     *
     * @return float 
     */
    public function getCertResuemenPresupuestoCUPExcel()
    {
        return $this->certResuemenPresupuestoCUPExcel;
    }

    /**
     * Set gastoResuemenPresupuestoCUCExcel
     *
     * @param float $gastoResuemenPresupuestoCUCExcel
     * @return Contratos
     */
    public function setGastoResuemenPresupuestoCUCExcel($gastoResuemenPresupuestoCUCExcel)
    {
        $this->gastoResuemenPresupuestoCUCExcel = $gastoResuemenPresupuestoCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoResuemenPresupuestoCUCExcel
     *
     * @return float 
     */
    public function getGastoResuemenPresupuestoCUCExcel()
    {
        return $this->gastoResuemenPresupuestoCUCExcel;
    }

    /**
     * Set certResuemenPresupuestoCUCExcel
     *
     * @param float $certResuemenPresupuestoCUCExcel
     * @return Contratos
     */
    public function setCertResuemenPresupuestoCUCExcel($certResuemenPresupuestoCUCExcel)
    {
        $this->certResuemenPresupuestoCUCExcel = $certResuemenPresupuestoCUCExcel;
    
        return $this;
    }

    /**
     * Get certResuemenPresupuestoCUCExcel
     *
     * @return float 
     */
    public function getCertResuemenPresupuestoCUCExcel()
    {
        return $this->certResuemenPresupuestoCUCExcel;
    }

    /**
     * Set gastoDirectoCUPExcel
     *
     * @param float $gastoDirectoCUPExcel
     * @return Contratos
     */
    public function setGastoDirectoCUPExcel($gastoDirectoCUPExcel)
    {
        $this->gastoDirectoCUPExcel = $gastoDirectoCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoDirectoCUPExcel
     *
     * @return float 
     */
    public function getGastoDirectoCUPExcel()
    {
        return $this->gastoDirectoCUPExcel;
    }

    /**
     * Set certDirectoCUPExcel
     *
     * @param float $certDirectoCUPExcel
     * @return Contratos
     */
    public function setCertDirectoCUPExcel($certDirectoCUPExcel)
    {
        $this->certDirectoCUPExcel = $certDirectoCUPExcel;
    
        return $this;
    }

    /**
     * Get certDirectoCUPExcel
     *
     * @return float 
     */
    public function getCertDirectoCUPExcel()
    {
        return $this->certDirectoCUPExcel;
    }

    /**
     * Set gastoDirectoCUCExcel
     *
     * @param float $gastoDirectoCUCExcel
     * @return Contratos
     */
    public function setGastoDirectoCUCExcel($gastoDirectoCUCExcel)
    {
        $this->gastoDirectoCUCExcel = $gastoDirectoCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoDirectoCUCExcel
     *
     * @return float 
     */
    public function getGastoDirectoCUCExcel()
    {
        return $this->gastoDirectoCUCExcel;
    }

    /**
     * Set certDirectoCUCExcel
     *
     * @param float $certDirectoCUCExcel
     * @return Contratos
     */
    public function setCertDirectoCUCExcel($certDirectoCUCExcel)
    {
        $this->certDirectoCUCExcel = $certDirectoCUCExcel;
    
        return $this;
    }

    /**
     * Get certDirectoCUCExcel
     *
     * @return float 
     */
    public function getCertDirectoCUCExcel()
    {
        return $this->certDirectoCUCExcel;
    }

    /**
     * Set gastoGeneralCUPExcel
     *
     * @param float $gastoGeneralCUPExcel
     * @return Contratos
     */
    public function setGastoGeneralCUPExcel($gastoGeneralCUPExcel)
    {
        $this->gastoGeneralCUPExcel = $gastoGeneralCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoGeneralCUPExcel
     *
     * @return float 
     */
    public function getGastoGeneralCUPExcel()
    {
        return $this->gastoGeneralCUPExcel;
    }

    /**
     * Set certGeneralCUPExcel
     *
     * @param float $certGeneralCUPExcel
     * @return Contratos
     */
    public function setCertGeneralCUPExcel($certGeneralCUPExcel)
    {
        $this->certGeneralCUPExcel = $certGeneralCUPExcel;
    
        return $this;
    }

    /**
     * Get certGeneralCUPExcel
     *
     * @return float 
     */
    public function getCertGeneralCUPExcel()
    {
        return $this->certGeneralCUPExcel;
    }

    /**
     * Set gastoGeneralCUCExcel
     *
     * @param float $gastoGeneralCUCExcel
     * @return Contratos
     */
    public function setGastoGeneralCUCExcel($gastoGeneralCUCExcel)
    {
        $this->gastoGeneralCUCExcel = $gastoGeneralCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoGeneralCUCExcel
     *
     * @return float 
     */
    public function getGastoGeneralCUCExcel()
    {
        return $this->gastoGeneralCUCExcel;
    }

    /**
     * Set certGeneralCUCExcel
     *
     * @param float $certGeneralCUCExcel
     * @return Contratos
     */
    public function setCertGeneralCUCExcel($certGeneralCUCExcel)
    {
        $this->certGeneralCUCExcel = $certGeneralCUCExcel;
    
        return $this;
    }

    /**
     * Get certGeneralCUCExcel
     *
     * @return float 
     */
    public function getCertGeneralCUCExcel()
    {
        return $this->certGeneralCUCExcel;
    }

    /**
     * Set gastoIndirectoCUPExcel
     *
     * @param float $gastoIndirectoCUPExcel
     * @return Contratos
     */
    public function setGastoIndirectoCUPExcel($gastoIndirectoCUPExcel)
    {
        $this->gastoIndirectoCUPExcel = $gastoIndirectoCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoIndirectoCUPExcel
     *
     * @return float 
     */
    public function getGastoIndirectoCUPExcel()
    {
        return $this->gastoIndirectoCUPExcel;
    }

    /**
     * Set certIndirectoCUPExcel
     *
     * @param float $certIndirectoCUPExcel
     * @return Contratos
     */
    public function setCertIndirectoCUPExcel($certIndirectoCUPExcel)
    {
        $this->certIndirectoCUPExcel = $certIndirectoCUPExcel;
    
        return $this;
    }

    /**
     * Get certIndirectoCUPExcel
     *
     * @return float 
     */
    public function getCertIndirectoCUPExcel()
    {
        return $this->certIndirectoCUPExcel;
    }

    /**
     * Set gastoIndirectoCUCExcel
     *
     * @param float $gastoIndirectoCUCExcel
     * @return Contratos
     */
    public function setGastoIndirectoCUCExcel($gastoIndirectoCUCExcel)
    {
        $this->gastoIndirectoCUCExcel = $gastoIndirectoCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoIndirectoCUCExcel
     *
     * @return float 
     */
    public function getGastoIndirectoCUCExcel()
    {
        return $this->gastoIndirectoCUCExcel;
    }

    /**
     * Set certIndirectoCUCExcel
     *
     * @param float $certIndirectoCUCExcel
     * @return Contratos
     */
    public function setCertIndirectoCUCExcel($certIndirectoCUCExcel)
    {
        $this->certIndirectoCUCExcel = $certIndirectoCUCExcel;
    
        return $this;
    }

    /**
     * Get certIndirectoCUCExcel
     *
     * @return float 
     */
    public function getCertIndirectoCUCExcel()
    {
        return $this->certIndirectoCUCExcel;
    }

    /**
     * Set gastoPresupuestoIndCUPExcel
     *
     * @param float $gastoPresupuestoIndCUPExcel
     * @return Contratos
     */
    public function setGastoPresupuestoIndCUPExcel($gastoPresupuestoIndCUPExcel)
    {
        $this->gastoPresupuestoIndCUPExcel = $gastoPresupuestoIndCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPresupuestoIndCUPExcel
     *
     * @return float 
     */
    public function getGastoPresupuestoIndCUPExcel()
    {
        return $this->gastoPresupuestoIndCUPExcel;
    }

    /**
     * Set certPresupuestoIndCUPExcel
     *
     * @param float $certPresupuestoIndCUPExcel
     * @return Contratos
     */
    public function setCertPresupuestoIndCUPExcel($certPresupuestoIndCUPExcel)
    {
        $this->certPresupuestoIndCUPExcel = $certPresupuestoIndCUPExcel;
    
        return $this;
    }

    /**
     * Get certPresupuestoIndCUPExcel
     *
     * @return float 
     */
    public function getCertPresupuestoIndCUPExcel()
    {
        return $this->certPresupuestoIndCUPExcel;
    }

    /**
     * Set gastoPresupuestoIndCUCExcel
     *
     * @param float $gastoPresupuestoIndCUCExcel
     * @return Contratos
     */
    public function setGastoPresupuestoIndCUCExcel($gastoPresupuestoIndCUCExcel)
    {
        $this->gastoPresupuestoIndCUCExcel = $gastoPresupuestoIndCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPresupuestoIndCUCExcel
     *
     * @return float 
     */
    public function getGastoPresupuestoIndCUCExcel()
    {
        return $this->gastoPresupuestoIndCUCExcel;
    }

    /**
     * Set certPresupuestoIndCUCExcel
     *
     * @param float $certPresupuestoIndCUCExcel
     * @return Contratos
     */
    public function setCertPresupuestoIndCUCExcel($certPresupuestoIndCUCExcel)
    {
        $this->certPresupuestoIndCUCExcel = $certPresupuestoIndCUCExcel;
    
        return $this;
    }

    /**
     * Get certPresupuestoIndCUCExcel
     *
     * @return float 
     */
    public function getCertPresupuestoIndCUCExcel()
    {
        return $this->certPresupuestoIndCUCExcel;
    }

    /**
     * Set gastoImprevistosCUPExcel
     *
     * @param float $gastoImprevistosCUPExcel
     * @return Contratos
     */
    public function setGastoImprevistosCUPExcel($gastoImprevistosCUPExcel)
    {
        $this->gastoImprevistosCUPExcel = $gastoImprevistosCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoImprevistosCUPExcel
     *
     * @return float 
     */
    public function getGastoImprevistosCUPExcel()
    {
        return $this->gastoImprevistosCUPExcel;
    }

    /**
     * Set certImprevistosCUPExcel
     *
     * @param float $certImprevistosCUPExcel
     * @return Contratos
     */
    public function setCertImprevistosCUPExcel($certImprevistosCUPExcel)
    {
        $this->certImprevistosCUPExcel = $certImprevistosCUPExcel;
    
        return $this;
    }

    /**
     * Get certImprevistosCUPExcel
     *
     * @return float 
     */
    public function getCertImprevistosCUPExcel()
    {
        return $this->certImprevistosCUPExcel;
    }

    /**
     * Set gastoImprevistosCUCExcel
     *
     * @param float $gastoImprevistosCUCExcel
     * @return Contratos
     */
    public function setGastoImprevistosCUCExcel($gastoImprevistosCUCExcel)
    {
        $this->gastoImprevistosCUCExcel = $gastoImprevistosCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoImprevistosCUCExcel
     *
     * @return float 
     */
    public function getGastoImprevistosCUCExcel()
    {
        return $this->gastoImprevistosCUCExcel;
    }

    /**
     * Set certImprevistosCUCExcel
     *
     * @param float $certImprevistosCUCExcel
     * @return Contratos
     */
    public function setCertImprevistosCUCExcel($certImprevistosCUCExcel)
    {
        $this->certImprevistosCUCExcel = $certImprevistosCUCExcel;
    
        return $this;
    }

    /**
     * Get certImprevistosCUCExcel
     *
     * @return float 
     */
    public function getCertImprevistosCUCExcel()
    {
        return $this->certImprevistosCUCExcel;
    }

    /**
     * Set gastoCostoTotalCUPExcel
     *
     * @param float $gastoCostoTotalCUPExcel
     * @return Contratos
     */
    public function setGastoCostoTotalCUPExcel($gastoCostoTotalCUPExcel)
    {
        $this->gastoCostoTotalCUPExcel = $gastoCostoTotalCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoCostoTotalCUPExcel
     *
     * @return float 
     */
    public function getGastoCostoTotalCUPExcel()
    {
        return $this->gastoCostoTotalCUPExcel;
    }

    /**
     * Set certCostoTotalCUPExcel
     *
     * @param float $certCostoTotalCUPExcel
     * @return Contratos
     */
    public function setCertCostoTotalCUPExcel($certCostoTotalCUPExcel)
    {
        $this->certCostoTotalCUPExcel = $certCostoTotalCUPExcel;
    
        return $this;
    }

    /**
     * Get certCostoTotalCUPExcel
     *
     * @return float 
     */
    public function getCertCostoTotalCUPExcel()
    {
        return $this->certCostoTotalCUPExcel;
    }

    /**
     * Set gastoCostoTotalCUCExcel
     *
     * @param float $gastoCostoTotalCUCExcel
     * @return Contratos
     */
    public function setGastoCostoTotalCUCExcel($gastoCostoTotalCUCExcel)
    {
        $this->gastoCostoTotalCUCExcel = $gastoCostoTotalCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoCostoTotalCUCExcel
     *
     * @return float 
     */
    public function getGastoCostoTotalCUCExcel()
    {
        return $this->gastoCostoTotalCUCExcel;
    }

    /**
     * Set certCostoTotalCUCExcel
     *
     * @param float $certCostoTotalCUCExcel
     * @return Contratos
     */
    public function setCertCostoTotalCUCExcel($certCostoTotalCUCExcel)
    {
        $this->certCostoTotalCUCExcel = $certCostoTotalCUCExcel;
    
        return $this;
    }

    /**
     * Get certCostoTotalCUCExcel
     *
     * @return float 
     */
    public function getCertCostoTotalCUCExcel()
    {
        return $this->certCostoTotalCUCExcel;
    }

    /**
     * Set gastoPorCientoUtilidadExcel
     *
     * @param float $gastoPorCientoUtilidadExcel
     * @return Contratos
     */
    public function setGastoPorCientoUtilidadExcel($gastoPorCientoUtilidadExcel)
    {
        $this->gastoPorCientoUtilidadExcel = $gastoPorCientoUtilidadExcel;
    
        return $this;
    }

    /**
     * Get gastoPorCientoUtilidadExcel
     *
     * @return float 
     */
    public function getGastoPorCientoUtilidadExcel()
    {
        return $this->gastoPorCientoUtilidadExcel;
    }

    /**
     * Set gastoUtilidadCUPExcel
     *
     * @param float $gastoUtilidadCUPExcel
     * @return Contratos
     */
    public function setGastoUtilidadCUPExcel($gastoUtilidadCUPExcel)
    {
        $this->gastoUtilidadCUPExcel = $gastoUtilidadCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoUtilidadCUPExcel
     *
     * @return float 
     */
    public function getGastoUtilidadCUPExcel()
    {
        return $this->gastoUtilidadCUPExcel;
    }

    /**
     * Set certUtilidadCUPExcel
     *
     * @param float $certUtilidadCUPExcel
     * @return Contratos
     */
    public function setCertUtilidadCUPExcel($certUtilidadCUPExcel)
    {
        $this->certUtilidadCUPExcel = $certUtilidadCUPExcel;
    
        return $this;
    }

    /**
     * Get certUtilidadCUPExcel
     *
     * @return float 
     */
    public function getCertUtilidadCUPExcel()
    {
        return $this->certUtilidadCUPExcel;
    }

    /**
     * Set gastoUtilidadCUCExcel
     *
     * @param float $gastoUtilidadCUCExcel
     * @return Contratos
     */
    public function setGastoUtilidadCUCExcel($gastoUtilidadCUCExcel)
    {
        $this->gastoUtilidadCUCExcel = $gastoUtilidadCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoUtilidadCUCExcel
     *
     * @return float 
     */
    public function getGastoUtilidadCUCExcel()
    {
        return $this->gastoUtilidadCUCExcel;
    }

    /**
     * Set certUtilidadCUCExcel
     *
     * @param float $certUtilidadCUCExcel
     * @return Contratos
     */
    public function setCertUtilidadCUCExcel($certUtilidadCUCExcel)
    {
        $this->certUtilidadCUCExcel = $certUtilidadCUCExcel;
    
        return $this;
    }

    /**
     * Get certUtilidadCUCExcel
     *
     * @return float 
     */
    public function getCertUtilidadCUCExcel()
    {
        return $this->certUtilidadCUCExcel;
    }

    /**
     * Set gastoPrecioServConstCUPExcel
     *
     * @param float $gastoPrecioServConstCUPExcel
     * @return Contratos
     */
    public function setGastoPrecioServConstCUPExcel($gastoPrecioServConstCUPExcel)
    {
        $this->gastoPrecioServConstCUPExcel = $gastoPrecioServConstCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioServConstCUPExcel
     *
     * @return float 
     */
    public function getGastoPrecioServConstCUPExcel()
    {
        return $this->gastoPrecioServConstCUPExcel;
    }

    /**
     * Set certPrecioServConstCUPExcel
     *
     * @param float $certPrecioServConstCUPExcel
     * @return Contratos
     */
    public function setCertPrecioServConstCUPExcel($certPrecioServConstCUPExcel)
    {
        $this->certPrecioServConstCUPExcel = $certPrecioServConstCUPExcel;
    
        return $this;
    }

    /**
     * Get certPrecioServConstCUPExcel
     *
     * @return float 
     */
    public function getCertPrecioServConstCUPExcel()
    {
        return $this->certPrecioServConstCUPExcel;
    }

    /**
     * Set gastoPrecioServConstCUCExcel
     *
     * @param float $gastoPrecioServConstCUCExcel
     * @return Contratos
     */
    public function setGastoPrecioServConstCUCExcel($gastoPrecioServConstCUCExcel)
    {
        $this->gastoPrecioServConstCUCExcel = $gastoPrecioServConstCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioServConstCUCExcel
     *
     * @return float 
     */
    public function getGastoPrecioServConstCUCExcel()
    {
        return $this->gastoPrecioServConstCUCExcel;
    }

    /**
     * Set certPrecioServConstCUCExcel
     *
     * @param float $certPrecioServConstCUCExcel
     * @return Contratos
     */
    public function setCertPrecioServConstCUCExcel($certPrecioServConstCUCExcel)
    {
        $this->certPrecioServConstCUCExcel = $certPrecioServConstCUCExcel;
    
        return $this;
    }

    /**
     * Get certPrecioServConstCUCExcel
     *
     * @return float 
     */
    public function getCertPrecioServConstCUCExcel()
    {
        return $this->certPrecioServConstCUCExcel;
    }

    /**
     * Set gastoPagoTributosCUPExcel
     *
     * @param float $gastoPagoTributosCUPExcel
     * @return Contratos
     */
    public function setGastoPagoTributosCUPExcel($gastoPagoTributosCUPExcel)
    {
        $this->gastoPagoTributosCUPExcel = $gastoPagoTributosCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPagoTributosCUPExcel
     *
     * @return float 
     */
    public function getGastoPagoTributosCUPExcel()
    {
        return $this->gastoPagoTributosCUPExcel;
    }

    /**
     * Set certPagoTributosCUPExcel
     *
     * @param float $certPagoTributosCUPExcel
     * @return Contratos
     */
    public function setCertPagoTributosCUPExcel($certPagoTributosCUPExcel)
    {
        $this->certPagoTributosCUPExcel = $certPagoTributosCUPExcel;
    
        return $this;
    }

    /**
     * Get certPagoTributosCUPExcel
     *
     * @return float 
     */
    public function getCertPagoTributosCUPExcel()
    {
        return $this->certPagoTributosCUPExcel;
    }

    /**
     * Set gastoPagoTributosCUCExcel
     *
     * @param float $gastoPagoTributosCUCExcel
     * @return Contratos
     */
    public function setGastoPagoTributosCUCExcel($gastoPagoTributosCUCExcel)
    {
        $this->gastoPagoTributosCUCExcel = $gastoPagoTributosCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPagoTributosCUCExcel
     *
     * @return float 
     */
    public function getGastoPagoTributosCUCExcel()
    {
        return $this->gastoPagoTributosCUCExcel;
    }

    /**
     * Set certPagoTributosCUCExcel
     *
     * @param float $certPagoTributosCUCExcel
     * @return Contratos
     */
    public function setCertPagoTributosCUCExcel($certPagoTributosCUCExcel)
    {
        $this->certPagoTributosCUCExcel = $certPagoTributosCUCExcel;
    
        return $this;
    }

    /**
     * Get certPagoTributosCUCExcel
     *
     * @return float 
     */
    public function getCertPagoTributosCUCExcel()
    {
        return $this->certPagoTributosCUCExcel;
    }

    /**
     * Set gastoPrecioMOCUPExcel
     *
     * @param float $gastoPrecioMOCUPExcel
     * @return Contratos
     */
    public function setGastoPrecioMOCUPExcel($gastoPrecioMOCUPExcel)
    {
        $this->gastoPrecioMOCUPExcel = $gastoPrecioMOCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioMOCUPExcel
     *
     * @return float 
     */
    public function getGastoPrecioMOCUPExcel()
    {
        return $this->gastoPrecioMOCUPExcel;
    }

    /**
     * Set certPrecioMOCUPExcel
     *
     * @param float $certPrecioMOCUPExcel
     * @return Contratos
     */
    public function setCertPrecioMOCUPExcel($certPrecioMOCUPExcel)
    {
        $this->certPrecioMOCUPExcel = $certPrecioMOCUPExcel;
    
        return $this;
    }

    /**
     * Get certPrecioMOCUPExcel
     *
     * @return float 
     */
    public function getCertPrecioMOCUPExcel()
    {
        return $this->certPrecioMOCUPExcel;
    }

    /**
     * Set gastoPrecioMOCUCExcel
     *
     * @param float $gastoPrecioMOCUCExcel
     * @return Contratos
     */
    public function setGastoPrecioMOCUCExcel($gastoPrecioMOCUCExcel)
    {
        $this->gastoPrecioMOCUCExcel = $gastoPrecioMOCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioMOCUCExcel
     *
     * @return float 
     */
    public function getGastoPrecioMOCUCExcel()
    {
        return $this->gastoPrecioMOCUCExcel;
    }

    /**
     * Set certPrecioMOCUCExcel
     *
     * @param float $certPrecioMOCUCExcel
     * @return Contratos
     */
    public function setCertPrecioMOCUCExcel($certPrecioMOCUCExcel)
    {
        $this->certPrecioMOCUCExcel = $certPrecioMOCUCExcel;
    
        return $this;
    }

    /**
     * Get certPrecioMOCUCExcel
     *
     * @return float 
     */
    public function getCertPrecioMOCUCExcel()
    {
        return $this->certPrecioMOCUCExcel;
    }

    /**
     * Set gastoPrecioMaterialesCUPExcel
     *
     * @param float $gastoPrecioMaterialesCUPExcel
     * @return Contratos
     */
    public function setGastoPrecioMaterialesCUPExcel($gastoPrecioMaterialesCUPExcel)
    {
        $this->gastoPrecioMaterialesCUPExcel = $gastoPrecioMaterialesCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioMaterialesCUPExcel
     *
     * @return float 
     */
    public function getGastoPrecioMaterialesCUPExcel()
    {
        return $this->gastoPrecioMaterialesCUPExcel;
    }

    /**
     * Set certPrecioMaterialesCUPExcel
     *
     * @param float $certPrecioMaterialesCUPExcel
     * @return Contratos
     */
    public function setCertPrecioMaterialesCUPExcel($certPrecioMaterialesCUPExcel)
    {
        $this->certPrecioMaterialesCUPExcel = $certPrecioMaterialesCUPExcel;
    
        return $this;
    }

    /**
     * Get certPrecioMaterialesCUPExcel
     *
     * @return float 
     */
    public function getCertPrecioMaterialesCUPExcel()
    {
        return $this->certPrecioMaterialesCUPExcel;
    }

    /**
     * Set gastoPrecioMaterialesCUCExcel
     *
     * @param float $gastoPrecioMaterialesCUCExcel
     * @return Contratos
     */
    public function setGastoPrecioMaterialesCUCExcel($gastoPrecioMaterialesCUCExcel)
    {
        $this->gastoPrecioMaterialesCUCExcel = $gastoPrecioMaterialesCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioMaterialesCUCExcel
     *
     * @return float 
     */
    public function getGastoPrecioMaterialesCUCExcel()
    {
        return $this->gastoPrecioMaterialesCUCExcel;
    }

    /**
     * Set certPrecioMaterialesCUCExcel
     *
     * @param float $certPrecioMaterialesCUCExcel
     * @return Contratos
     */
    public function setCertPrecioMaterialesCUCExcel($certPrecioMaterialesCUCExcel)
    {
        $this->certPrecioMaterialesCUCExcel = $certPrecioMaterialesCUCExcel;
    
        return $this;
    }

    /**
     * Get certPrecioMaterialesCUCExcel
     *
     * @return float 
     */
    public function getCertPrecioMaterialesCUCExcel()
    {
        return $this->certPrecioMaterialesCUCExcel;
    }

    /**
     * Set gastoPrecioTotalServConstCUPExcel
     *
     * @param float $gastoPrecioTotalServConstCUPExcel
     * @return Contratos
     */
    public function setGastoPrecioTotalServConstCUPExcel($gastoPrecioTotalServConstCUPExcel)
    {
        $this->gastoPrecioTotalServConstCUPExcel = $gastoPrecioTotalServConstCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioTotalServConstCUPExcel
     *
     * @return float 
     */
    public function getGastoPrecioTotalServConstCUPExcel()
    {
        return $this->gastoPrecioTotalServConstCUPExcel;
    }

    /**
     * Set certPrecioTotalServConstCUPExcel
     *
     * @param float $certPrecioTotalServConstCUPExcel
     * @return Contratos
     */
    public function setCertPrecioTotalServConstCUPExcel($certPrecioTotalServConstCUPExcel)
    {
        $this->certPrecioTotalServConstCUPExcel = $certPrecioTotalServConstCUPExcel;
    
        return $this;
    }

    /**
     * Get certPrecioTotalServConstCUPExcel
     *
     * @return float 
     */
    public function getCertPrecioTotalServConstCUPExcel()
    {
        return $this->certPrecioTotalServConstCUPExcel;
    }

    /**
     * Set gastoPrecioTotalServConstCUCExcel
     *
     * @param float $gastoPrecioTotalServConstCUCExcel
     * @return Contratos
     */
    public function setGastoPrecioTotalServConstCUCExcel($gastoPrecioTotalServConstCUCExcel)
    {
        $this->gastoPrecioTotalServConstCUCExcel = $gastoPrecioTotalServConstCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioTotalServConstCUCExcel
     *
     * @return float 
     */
    public function getGastoPrecioTotalServConstCUCExcel()
    {
        return $this->gastoPrecioTotalServConstCUCExcel;
    }

    /**
     * Set certPrecioTotalServConstCUCExcel
     *
     * @param float $certPrecioTotalServConstCUCExcel
     * @return Contratos
     */
    public function setCertPrecioTotalServConstCUCExcel($certPrecioTotalServConstCUCExcel)
    {
        $this->certPrecioTotalServConstCUCExcel = $certPrecioTotalServConstCUCExcel;
    
        return $this;
    }

    /**
     * Get certPrecioTotalServConstCUCExcel
     *
     * @return float 
     */
    public function getCertPrecioTotalServConstCUCExcel()
    {
        return $this->certPrecioTotalServConstCUCExcel;
    }

    /**
     * Set gastoMaterialesCUPPrewin
     *
     * @param float $gastoMaterialesCUPPrewin
     * @return Contratos
     */
    public function setGastoMaterialesCUPPrewin($gastoMaterialesCUPPrewin)
    {
        $this->gastoMaterialesCUPPrewin = $gastoMaterialesCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoMaterialesCUPPrewin
     *
     * @return float 
     */
    public function getGastoMaterialesCUPPrewin()
    {
        return $this->gastoMaterialesCUPPrewin;
    }

    /**
     * Set certGastoMaterialesCUPPrewin
     *
     * @param float $certGastoMaterialesCUPPrewin
     * @return Contratos
     */
    public function setCertGastoMaterialesCUPPrewin($certGastoMaterialesCUPPrewin)
    {
        $this->certGastoMaterialesCUPPrewin = $certGastoMaterialesCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoMaterialesCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoMaterialesCUPPrewin()
    {
        return $this->certGastoMaterialesCUPPrewin;
    }

    /**
     * Set gastoMaterialesCUCPrewin
     *
     * @param float $gastoMaterialesCUCPrewin
     * @return Contratos
     */
    public function setGastoMaterialesCUCPrewin($gastoMaterialesCUCPrewin)
    {
        $this->gastoMaterialesCUCPrewin = $gastoMaterialesCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoMaterialesCUCPrewin
     *
     * @return float 
     */
    public function getGastoMaterialesCUCPrewin()
    {
        return $this->gastoMaterialesCUCPrewin;
    }

    /**
     * Set certGastoMaterialesCUCPrewin
     *
     * @param float $certGastoMaterialesCUCPrewin
     * @return Contratos
     */
    public function setCertGastoMaterialesCUCPrewin($certGastoMaterialesCUCPrewin)
    {
        $this->certGastoMaterialesCUCPrewin = $certGastoMaterialesCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoMaterialesCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoMaterialesCUCPrewin()
    {
        return $this->certGastoMaterialesCUCPrewin;
    }

    /**
     * Set gastoMOCUPPrewin
     *
     * @param float $gastoMOCUPPrewin
     * @return Contratos
     */
    public function setGastoMOCUPPrewin($gastoMOCUPPrewin)
    {
        $this->gastoMOCUPPrewin = $gastoMOCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoMOCUPPrewin
     *
     * @return float 
     */
    public function getGastoMOCUPPrewin()
    {
        return $this->gastoMOCUPPrewin;
    }

    /**
     * Set certGastoMOCUPPrewin
     *
     * @param float $certGastoMOCUPPrewin
     * @return Contratos
     */
    public function setCertGastoMOCUPPrewin($certGastoMOCUPPrewin)
    {
        $this->certGastoMOCUPPrewin = $certGastoMOCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoMOCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoMOCUPPrewin()
    {
        return $this->certGastoMOCUPPrewin;
    }

    /**
     * Set gastoMOCUCPrewin
     *
     * @param float $gastoMOCUCPrewin
     * @return Contratos
     */
    public function setGastoMOCUCPrewin($gastoMOCUCPrewin)
    {
        $this->gastoMOCUCPrewin = $gastoMOCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoMOCUCPrewin
     *
     * @return float 
     */
    public function getGastoMOCUCPrewin()
    {
        return $this->gastoMOCUCPrewin;
    }

    /**
     * Set certGastoMOCUCPrewin
     *
     * @param float $certGastoMOCUCPrewin
     * @return Contratos
     */
    public function setCertGastoMOCUCPrewin($certGastoMOCUCPrewin)
    {
        $this->certGastoMOCUCPrewin = $certGastoMOCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoMOCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoMOCUCPrewin()
    {
        return $this->certGastoMOCUCPrewin;
    }

    /**
     * Set gastoUsoEquiposCUPPrewin
     *
     * @param float $gastoUsoEquiposCUPPrewin
     * @return Contratos
     */
    public function setGastoUsoEquiposCUPPrewin($gastoUsoEquiposCUPPrewin)
    {
        $this->gastoUsoEquiposCUPPrewin = $gastoUsoEquiposCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoUsoEquiposCUPPrewin
     *
     * @return float 
     */
    public function getGastoUsoEquiposCUPPrewin()
    {
        return $this->gastoUsoEquiposCUPPrewin;
    }

    /**
     * Set certGastoUsoEquiposCUPPrewin
     *
     * @param float $certGastoUsoEquiposCUPPrewin
     * @return Contratos
     */
    public function setCertGastoUsoEquiposCUPPrewin($certGastoUsoEquiposCUPPrewin)
    {
        $this->certGastoUsoEquiposCUPPrewin = $certGastoUsoEquiposCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoUsoEquiposCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoUsoEquiposCUPPrewin()
    {
        return $this->certGastoUsoEquiposCUPPrewin;
    }

    /**
     * Set gastoUsoEquiposCUCPrewin
     *
     * @param float $gastoUsoEquiposCUCPrewin
     * @return Contratos
     */
    public function setGastoUsoEquiposCUCPrewin($gastoUsoEquiposCUCPrewin)
    {
        $this->gastoUsoEquiposCUCPrewin = $gastoUsoEquiposCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoUsoEquiposCUCPrewin
     *
     * @return float 
     */
    public function getGastoUsoEquiposCUCPrewin()
    {
        return $this->gastoUsoEquiposCUCPrewin;
    }

    /**
     * Set certGastoUsoEquiposCUCPrewin
     *
     * @param float $certGastoUsoEquiposCUCPrewin
     * @return Contratos
     */
    public function setCertGastoUsoEquiposCUCPrewin($certGastoUsoEquiposCUCPrewin)
    {
        $this->certGastoUsoEquiposCUCPrewin = $certGastoUsoEquiposCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoUsoEquiposCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoUsoEquiposCUCPrewin()
    {
        return $this->certGastoUsoEquiposCUCPrewin;
    }

    /**
     * Set otrosGastosDirectosCUPPrewin
     *
     * @param float $otrosGastosDirectosCUPPrewin
     * @return Contratos
     */
    public function setOtrosGastosDirectosCUPPrewin($otrosGastosDirectosCUPPrewin)
    {
        $this->otrosGastosDirectosCUPPrewin = $otrosGastosDirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get otrosGastosDirectosCUPPrewin
     *
     * @return float 
     */
    public function getOtrosGastosDirectosCUPPrewin()
    {
        return $this->otrosGastosDirectosCUPPrewin;
    }

    /**
     * Set certOtrosGastosDirectosCUPPrewin
     *
     * @param float $certOtrosGastosDirectosCUPPrewin
     * @return Contratos
     */
    public function setCertOtrosGastosDirectosCUPPrewin($certOtrosGastosDirectosCUPPrewin)
    {
        $this->certOtrosGastosDirectosCUPPrewin = $certOtrosGastosDirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get certOtrosGastosDirectosCUPPrewin
     *
     * @return float 
     */
    public function getCertOtrosGastosDirectosCUPPrewin()
    {
        return $this->certOtrosGastosDirectosCUPPrewin;
    }

    /**
     * Set otrosGastosDirectosCUCPrewin
     *
     * @param float $otrosGastosDirectosCUCPrewin
     * @return Contratos
     */
    public function setOtrosGastosDirectosCUCPrewin($otrosGastosDirectosCUCPrewin)
    {
        $this->otrosGastosDirectosCUCPrewin = $otrosGastosDirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get otrosGastosDirectosCUCPrewin
     *
     * @return float 
     */
    public function getOtrosGastosDirectosCUCPrewin()
    {
        return $this->otrosGastosDirectosCUCPrewin;
    }

    /**
     * Set certOtrosGastosDirectosCUCPrewin
     *
     * @param float $certOtrosGastosDirectosCUCPrewin
     * @return Contratos
     */
    public function setCertOtrosGastosDirectosCUCPrewin($certOtrosGastosDirectosCUCPrewin)
    {
        $this->certOtrosGastosDirectosCUCPrewin = $certOtrosGastosDirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get certOtrosGastosDirectosCUCPrewin
     *
     * @return float 
     */
    public function getCertOtrosGastosDirectosCUCPrewin()
    {
        return $this->certOtrosGastosDirectosCUCPrewin;
    }

    /**
     * Set gastoPruebasCUPPrewin
     *
     * @param float $gastoPruebasCUPPrewin
     * @return Contratos
     */
    public function setGastoPruebasCUPPrewin($gastoPruebasCUPPrewin)
    {
        $this->gastoPruebasCUPPrewin = $gastoPruebasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoPruebasCUPPrewin
     *
     * @return float 
     */
    public function getGastoPruebasCUPPrewin()
    {
        return $this->gastoPruebasCUPPrewin;
    }

    /**
     * Set certGastoPruebasCUPPrewin
     *
     * @param float $certGastoPruebasCUPPrewin
     * @return Contratos
     */
    public function setCertGastoPruebasCUPPrewin($certGastoPruebasCUPPrewin)
    {
        $this->certGastoPruebasCUPPrewin = $certGastoPruebasCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoPruebasCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoPruebasCUPPrewin()
    {
        return $this->certGastoPruebasCUPPrewin;
    }

    /**
     * Set gastoPruebasCUCPrewin
     *
     * @param float $gastoPruebasCUCPrewin
     * @return Contratos
     */
    public function setGastoPruebasCUCPrewin($gastoPruebasCUCPrewin)
    {
        $this->gastoPruebasCUCPrewin = $gastoPruebasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoPruebasCUCPrewin
     *
     * @return float 
     */
    public function getGastoPruebasCUCPrewin()
    {
        return $this->gastoPruebasCUCPrewin;
    }

    /**
     * Set certGastoPruebasCUCPrewin
     *
     * @param float $certGastoPruebasCUCPrewin
     * @return Contratos
     */
    public function setCertGastoPruebasCUCPrewin($certGastoPruebasCUCPrewin)
    {
        $this->certGastoPruebasCUCPrewin = $certGastoPruebasCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoPruebasCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoPruebasCUCPrewin()
    {
        return $this->certGastoPruebasCUCPrewin;
    }

    /**
     * Set gastoMermasCUPPrewin
     *
     * @param float $gastoMermasCUPPrewin
     * @return Contratos
     */
    public function setGastoMermasCUPPrewin($gastoMermasCUPPrewin)
    {
        $this->gastoMermasCUPPrewin = $gastoMermasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoMermasCUPPrewin
     *
     * @return float 
     */
    public function getGastoMermasCUPPrewin()
    {
        return $this->gastoMermasCUPPrewin;
    }

    /**
     * Set certGastoMermasCUPPrewin
     *
     * @param float $certGastoMermasCUPPrewin
     * @return Contratos
     */
    public function setCertGastoMermasCUPPrewin($certGastoMermasCUPPrewin)
    {
        $this->certGastoMermasCUPPrewin = $certGastoMermasCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoMermasCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoMermasCUPPrewin()
    {
        return $this->certGastoMermasCUPPrewin;
    }

    /**
     * Set gastoMermasCUCPrewin
     *
     * @param float $gastoMermasCUCPrewin
     * @return Contratos
     */
    public function setGastoMermasCUCPrewin($gastoMermasCUCPrewin)
    {
        $this->gastoMermasCUCPrewin = $gastoMermasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoMermasCUCPrewin
     *
     * @return float 
     */
    public function getGastoMermasCUCPrewin()
    {
        return $this->gastoMermasCUCPrewin;
    }

    /**
     * Set certGastoMermasCUCPrewin
     *
     * @param float $certGastoMermasCUCPrewin
     * @return Contratos
     */
    public function setCertGastoMermasCUCPrewin($certGastoMermasCUCPrewin)
    {
        $this->certGastoMermasCUCPrewin = $certGastoMermasCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoMermasCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoMermasCUCPrewin()
    {
        return $this->certGastoMermasCUCPrewin;
    }

    /**
     * Set gastoReplanteosCUPPrewin
     *
     * @param float $gastoReplanteosCUPPrewin
     * @return Contratos
     */
    public function setGastoReplanteosCUPPrewin($gastoReplanteosCUPPrewin)
    {
        $this->gastoReplanteosCUPPrewin = $gastoReplanteosCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoReplanteosCUPPrewin
     *
     * @return float 
     */
    public function getGastoReplanteosCUPPrewin()
    {
        return $this->gastoReplanteosCUPPrewin;
    }

    /**
     * Set certGastoReplanteosCUPPrewin
     *
     * @param float $certGastoReplanteosCUPPrewin
     * @return Contratos
     */
    public function setCertGastoReplanteosCUPPrewin($certGastoReplanteosCUPPrewin)
    {
        $this->certGastoReplanteosCUPPrewin = $certGastoReplanteosCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoReplanteosCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoReplanteosCUPPrewin()
    {
        return $this->certGastoReplanteosCUPPrewin;
    }

    /**
     * Set gastoReplanteosCUCPrewin
     *
     * @param float $gastoReplanteosCUCPrewin
     * @return Contratos
     */
    public function setGastoReplanteosCUCPrewin($gastoReplanteosCUCPrewin)
    {
        $this->gastoReplanteosCUCPrewin = $gastoReplanteosCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoReplanteosCUCPrewin
     *
     * @return float 
     */
    public function getGastoReplanteosCUCPrewin()
    {
        return $this->gastoReplanteosCUCPrewin;
    }

    /**
     * Set certGastoReplanteosCUCPrewin
     *
     * @param float $certGastoReplanteosCUCPrewin
     * @return Contratos
     */
    public function setCertGastoReplanteosCUCPrewin($certGastoReplanteosCUCPrewin)
    {
        $this->certGastoReplanteosCUCPrewin = $certGastoReplanteosCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoReplanteosCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoReplanteosCUCPrewin()
    {
        return $this->certGastoReplanteosCUCPrewin;
    }

    /**
     * Set gastoTransferenciasCUPPrewin
     *
     * @param float $gastoTransferenciasCUPPrewin
     * @return Contratos
     */
    public function setGastoTransferenciasCUPPrewin($gastoTransferenciasCUPPrewin)
    {
        $this->gastoTransferenciasCUPPrewin = $gastoTransferenciasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoTransferenciasCUPPrewin
     *
     * @return float 
     */
    public function getGastoTransferenciasCUPPrewin()
    {
        return $this->gastoTransferenciasCUPPrewin;
    }

    /**
     * Set certGastoTransferenciasCUPPrewin
     *
     * @param float $certGastoTransferenciasCUPPrewin
     * @return Contratos
     */
    public function setCertGastoTransferenciasCUPPrewin($certGastoTransferenciasCUPPrewin)
    {
        $this->certGastoTransferenciasCUPPrewin = $certGastoTransferenciasCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoTransferenciasCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoTransferenciasCUPPrewin()
    {
        return $this->certGastoTransferenciasCUPPrewin;
    }

    /**
     * Set gastoTransferenciasCUCPrewin
     *
     * @param float $gastoTransferenciasCUCPrewin
     * @return Contratos
     */
    public function setGastoTransferenciasCUCPrewin($gastoTransferenciasCUCPrewin)
    {
        $this->gastoTransferenciasCUCPrewin = $gastoTransferenciasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoTransferenciasCUCPrewin
     *
     * @return float 
     */
    public function getGastoTransferenciasCUCPrewin()
    {
        return $this->gastoTransferenciasCUCPrewin;
    }

    /**
     * Set certGastoTransferenciasCUCPrewin
     *
     * @param float $certGastoTransferenciasCUCPrewin
     * @return Contratos
     */
    public function setCertGastoTransferenciasCUCPrewin($certGastoTransferenciasCUCPrewin)
    {
        $this->certGastoTransferenciasCUCPrewin = $certGastoTransferenciasCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoTransferenciasCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoTransferenciasCUCPrewin()
    {
        return $this->certGastoTransferenciasCUCPrewin;
    }

    /**
     * Set gastoCargasCUPPrewin
     *
     * @param float $gastoCargasCUPPrewin
     * @return Contratos
     */
    public function setGastoCargasCUPPrewin($gastoCargasCUPPrewin)
    {
        $this->gastoCargasCUPPrewin = $gastoCargasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoCargasCUPPrewin
     *
     * @return float 
     */
    public function getGastoCargasCUPPrewin()
    {
        return $this->gastoCargasCUPPrewin;
    }

    /**
     * Set certGastoCargasCUPPrewin
     *
     * @param float $certGastoCargasCUPPrewin
     * @return Contratos
     */
    public function setCertGastoCargasCUPPrewin($certGastoCargasCUPPrewin)
    {
        $this->certGastoCargasCUPPrewin = $certGastoCargasCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoCargasCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoCargasCUPPrewin()
    {
        return $this->certGastoCargasCUPPrewin;
    }

    /**
     * Set gastoCargasCUCPrewin
     *
     * @param float $gastoCargasCUCPrewin
     * @return Contratos
     */
    public function setGastoCargasCUCPrewin($gastoCargasCUCPrewin)
    {
        $this->gastoCargasCUCPrewin = $gastoCargasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoCargasCUCPrewin
     *
     * @return float 
     */
    public function getGastoCargasCUCPrewin()
    {
        return $this->gastoCargasCUCPrewin;
    }

    /**
     * Set certGastoCargasCUCPrewin
     *
     * @param float $certGastoCargasCUCPrewin
     * @return Contratos
     */
    public function setCertGastoCargasCUCPrewin($certGastoCargasCUCPrewin)
    {
        $this->certGastoCargasCUCPrewin = $certGastoCargasCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoCargasCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoCargasCUCPrewin()
    {
        return $this->certGastoCargasCUCPrewin;
    }

    /**
     * Set gastoAlmacenajeCUPPrewin
     *
     * @param float $gastoAlmacenajeCUPPrewin
     * @return Contratos
     */
    public function setGastoAlmacenajeCUPPrewin($gastoAlmacenajeCUPPrewin)
    {
        $this->gastoAlmacenajeCUPPrewin = $gastoAlmacenajeCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoAlmacenajeCUPPrewin
     *
     * @return float 
     */
    public function getGastoAlmacenajeCUPPrewin()
    {
        return $this->gastoAlmacenajeCUPPrewin;
    }

    /**
     * Set certGastoAlmacenajeCUPPrewin
     *
     * @param float $certGastoAlmacenajeCUPPrewin
     * @return Contratos
     */
    public function setCertGastoAlmacenajeCUPPrewin($certGastoAlmacenajeCUPPrewin)
    {
        $this->certGastoAlmacenajeCUPPrewin = $certGastoAlmacenajeCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoAlmacenajeCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoAlmacenajeCUPPrewin()
    {
        return $this->certGastoAlmacenajeCUPPrewin;
    }

    /**
     * Set gastoAlmacenajeCUCPrewin
     *
     * @param float $gastoAlmacenajeCUCPrewin
     * @return Contratos
     */
    public function setGastoAlmacenajeCUCPrewin($gastoAlmacenajeCUCPrewin)
    {
        $this->gastoAlmacenajeCUCPrewin = $gastoAlmacenajeCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoAlmacenajeCUCPrewin
     *
     * @return float 
     */
    public function getGastoAlmacenajeCUCPrewin()
    {
        return $this->gastoAlmacenajeCUCPrewin;
    }

    /**
     * Set certGastoAlmacenajeCUCPrewin
     *
     * @param float $certGastoAlmacenajeCUCPrewin
     * @return Contratos
     */
    public function setCertGastoAlmacenajeCUCPrewin($certGastoAlmacenajeCUCPrewin)
    {
        $this->certGastoAlmacenajeCUCPrewin = $certGastoAlmacenajeCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoAlmacenajeCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoAlmacenajeCUCPrewin()
    {
        return $this->certGastoAlmacenajeCUCPrewin;
    }

    /**
     * Set gastoParadasCUPPrewin
     *
     * @param float $gastoParadasCUPPrewin
     * @return Contratos
     */
    public function setGastoParadasCUPPrewin($gastoParadasCUPPrewin)
    {
        $this->gastoParadasCUPPrewin = $gastoParadasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoParadasCUPPrewin
     *
     * @return float 
     */
    public function getGastoParadasCUPPrewin()
    {
        return $this->gastoParadasCUPPrewin;
    }

    /**
     * Set certGastoParadasCUPPrewin
     *
     * @param float $certGastoParadasCUPPrewin
     * @return Contratos
     */
    public function setCertGastoParadasCUPPrewin($certGastoParadasCUPPrewin)
    {
        $this->certGastoParadasCUPPrewin = $certGastoParadasCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoParadasCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoParadasCUPPrewin()
    {
        return $this->certGastoParadasCUPPrewin;
    }

    /**
     * Set gastoParadasCUCPrewin
     *
     * @param float $gastoParadasCUCPrewin
     * @return Contratos
     */
    public function setGastoParadasCUCPrewin($gastoParadasCUCPrewin)
    {
        $this->gastoParadasCUCPrewin = $gastoParadasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoParadasCUCPrewin
     *
     * @return float 
     */
    public function getGastoParadasCUCPrewin()
    {
        return $this->gastoParadasCUCPrewin;
    }

    /**
     * Set certGastoParadasCUCPrewin
     *
     * @param float $certGastoParadasCUCPrewin
     * @return Contratos
     */
    public function setCertGastoParadasCUCPrewin($certGastoParadasCUCPrewin)
    {
        $this->certGastoParadasCUCPrewin = $certGastoParadasCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoParadasCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoParadasCUCPrewin()
    {
        return $this->certGastoParadasCUCPrewin;
    }

    /**
     * Set gastoReparacionCUPPrewin
     *
     * @param float $gastoReparacionCUPPrewin
     * @return Contratos
     */
    public function setGastoReparacionCUPPrewin($gastoReparacionCUPPrewin)
    {
        $this->gastoReparacionCUPPrewin = $gastoReparacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoReparacionCUPPrewin
     *
     * @return float 
     */
    public function getGastoReparacionCUPPrewin()
    {
        return $this->gastoReparacionCUPPrewin;
    }

    /**
     * Set certGastoReparacionCUPPrewin
     *
     * @param float $certGastoReparacionCUPPrewin
     * @return Contratos
     */
    public function setCertGastoReparacionCUPPrewin($certGastoReparacionCUPPrewin)
    {
        $this->certGastoReparacionCUPPrewin = $certGastoReparacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoReparacionCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoReparacionCUPPrewin()
    {
        return $this->certGastoReparacionCUPPrewin;
    }

    /**
     * Set gastoReparacionCUCPrewin
     *
     * @param float $gastoReparacionCUCPrewin
     * @return Contratos
     */
    public function setGastoReparacionCUCPrewin($gastoReparacionCUCPrewin)
    {
        $this->gastoReparacionCUCPrewin = $gastoReparacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoReparacionCUCPrewin
     *
     * @return float 
     */
    public function getGastoReparacionCUCPrewin()
    {
        return $this->gastoReparacionCUCPrewin;
    }

    /**
     * Set certGastoReparacionCUCPrewin
     *
     * @param float $certGastoReparacionCUCPrewin
     * @return Contratos
     */
    public function setCertGastoReparacionCUCPrewin($certGastoReparacionCUCPrewin)
    {
        $this->certGastoReparacionCUCPrewin = $certGastoReparacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoReparacionCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoReparacionCUCPrewin()
    {
        return $this->certGastoReparacionCUCPrewin;
    }

    /**
     * Set gastoProteccionCUPPrewin
     *
     * @param float $gastoProteccionCUPPrewin
     * @return Contratos
     */
    public function setGastoProteccionCUPPrewin($gastoProteccionCUPPrewin)
    {
        $this->gastoProteccionCUPPrewin = $gastoProteccionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoProteccionCUPPrewin
     *
     * @return float 
     */
    public function getGastoProteccionCUPPrewin()
    {
        return $this->gastoProteccionCUPPrewin;
    }

    /**
     * Set certGastoProteccionCUPPrewin
     *
     * @param float $certGastoProteccionCUPPrewin
     * @return Contratos
     */
    public function setCertGastoProteccionCUPPrewin($certGastoProteccionCUPPrewin)
    {
        $this->certGastoProteccionCUPPrewin = $certGastoProteccionCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoProteccionCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoProteccionCUPPrewin()
    {
        return $this->certGastoProteccionCUPPrewin;
    }

    /**
     * Set gastoProteccionCUCPrewin
     *
     * @param float $gastoProteccionCUCPrewin
     * @return Contratos
     */
    public function setGastoProteccionCUCPrewin($gastoProteccionCUCPrewin)
    {
        $this->gastoProteccionCUCPrewin = $gastoProteccionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoProteccionCUCPrewin
     *
     * @return float 
     */
    public function getGastoProteccionCUCPrewin()
    {
        return $this->gastoProteccionCUCPrewin;
    }

    /**
     * Set certGastoProteccionCUCPrewin
     *
     * @param float $certGastoProteccionCUCPrewin
     * @return Contratos
     */
    public function setCertGastoProteccionCUCPrewin($certGastoProteccionCUCPrewin)
    {
        $this->certGastoProteccionCUCPrewin = $certGastoProteccionCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoProteccionCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoProteccionCUCPrewin()
    {
        return $this->certGastoProteccionCUCPrewin;
    }

    /**
     * Set gastoMenoresCUPPrewin
     *
     * @param float $gastoMenoresCUPPrewin
     * @return Contratos
     */
    public function setGastoMenoresCUPPrewin($gastoMenoresCUPPrewin)
    {
        $this->gastoMenoresCUPPrewin = $gastoMenoresCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoMenoresCUPPrewin
     *
     * @return float 
     */
    public function getGastoMenoresCUPPrewin()
    {
        return $this->gastoMenoresCUPPrewin;
    }

    /**
     * Set certGastoMenoresCUPPrewin
     *
     * @param float $certGastoMenoresCUPPrewin
     * @return Contratos
     */
    public function setCertGastoMenoresCUPPrewin($certGastoMenoresCUPPrewin)
    {
        $this->certGastoMenoresCUPPrewin = $certGastoMenoresCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoMenoresCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoMenoresCUPPrewin()
    {
        return $this->certGastoMenoresCUPPrewin;
    }

    /**
     * Set gastoMenoresCUCPrewin
     *
     * @param float $gastoMenoresCUCPrewin
     * @return Contratos
     */
    public function setGastoMenoresCUCPrewin($gastoMenoresCUCPrewin)
    {
        $this->gastoMenoresCUCPrewin = $gastoMenoresCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoMenoresCUCPrewin
     *
     * @return float 
     */
    public function getGastoMenoresCUCPrewin()
    {
        return $this->gastoMenoresCUCPrewin;
    }

    /**
     * Set certGastoMenoresCUCPrewin
     *
     * @param float $certGastoMenoresCUCPrewin
     * @return Contratos
     */
    public function setCertGastoMenoresCUCPrewin($certGastoMenoresCUCPrewin)
    {
        $this->certGastoMenoresCUCPrewin = $certGastoMenoresCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoMenoresCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoMenoresCUCPrewin()
    {
        return $this->certGastoMenoresCUCPrewin;
    }

    /**
     * Set gastoElectricidadCUPPrewin
     *
     * @param float $gastoElectricidadCUPPrewin
     * @return Contratos
     */
    public function setGastoElectricidadCUPPrewin($gastoElectricidadCUPPrewin)
    {
        $this->gastoElectricidadCUPPrewin = $gastoElectricidadCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoElectricidadCUPPrewin
     *
     * @return float 
     */
    public function getGastoElectricidadCUPPrewin()
    {
        return $this->gastoElectricidadCUPPrewin;
    }

    /**
     * Set certGastoElectricidadCUPPrewin
     *
     * @param float $certGastoElectricidadCUPPrewin
     * @return Contratos
     */
    public function setCertGastoElectricidadCUPPrewin($certGastoElectricidadCUPPrewin)
    {
        $this->certGastoElectricidadCUPPrewin = $certGastoElectricidadCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoElectricidadCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoElectricidadCUPPrewin()
    {
        return $this->certGastoElectricidadCUPPrewin;
    }

    /**
     * Set gastoElectricidadCUCPrewin
     *
     * @param float $gastoElectricidadCUCPrewin
     * @return Contratos
     */
    public function setGastoElectricidadCUCPrewin($gastoElectricidadCUCPrewin)
    {
        $this->gastoElectricidadCUCPrewin = $gastoElectricidadCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoElectricidadCUCPrewin
     *
     * @return float 
     */
    public function getGastoElectricidadCUCPrewin()
    {
        return $this->gastoElectricidadCUCPrewin;
    }

    /**
     * Set certGastoElectricidadCUCPrewin
     *
     * @param float $certGastoElectricidadCUCPrewin
     * @return Contratos
     */
    public function setCertGastoElectricidadCUCPrewin($certGastoElectricidadCUCPrewin)
    {
        $this->certGastoElectricidadCUCPrewin = $certGastoElectricidadCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoElectricidadCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoElectricidadCUCPrewin()
    {
        return $this->certGastoElectricidadCUCPrewin;
    }

    /**
     * Set gastoAguaCUPPrewin
     *
     * @param float $gastoAguaCUPPrewin
     * @return Contratos
     */
    public function setGastoAguaCUPPrewin($gastoAguaCUPPrewin)
    {
        $this->gastoAguaCUPPrewin = $gastoAguaCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoAguaCUPPrewin
     *
     * @return float 
     */
    public function getGastoAguaCUPPrewin()
    {
        return $this->gastoAguaCUPPrewin;
    }

    /**
     * Set certGastoAguaCUPPrewin
     *
     * @param float $certGastoAguaCUPPrewin
     * @return Contratos
     */
    public function setCertGastoAguaCUPPrewin($certGastoAguaCUPPrewin)
    {
        $this->certGastoAguaCUPPrewin = $certGastoAguaCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoAguaCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoAguaCUPPrewin()
    {
        return $this->certGastoAguaCUPPrewin;
    }

    /**
     * Set gastoAguaCUCPrewin
     *
     * @param float $gastoAguaCUCPrewin
     * @return Contratos
     */
    public function setGastoAguaCUCPrewin($gastoAguaCUCPrewin)
    {
        $this->gastoAguaCUCPrewin = $gastoAguaCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoAguaCUCPrewin
     *
     * @return float 
     */
    public function getGastoAguaCUCPrewin()
    {
        return $this->gastoAguaCUCPrewin;
    }

    /**
     * Set certGastoAguaCUCPrewin
     *
     * @param float $certGastoAguaCUCPrewin
     * @return Contratos
     */
    public function setCertGastoAguaCUCPrewin($certGastoAguaCUCPrewin)
    {
        $this->certGastoAguaCUCPrewin = $certGastoAguaCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoAguaCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoAguaCUCPrewin()
    {
        return $this->certGastoAguaCUCPrewin;
    }

    /**
     * Set gastoLimpiesaCUPPrewin
     *
     * @param float $gastoLimpiesaCUPPrewin
     * @return Contratos
     */
    public function setGastoLimpiesaCUPPrewin($gastoLimpiesaCUPPrewin)
    {
        $this->gastoLimpiesaCUPPrewin = $gastoLimpiesaCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoLimpiesaCUPPrewin
     *
     * @return float 
     */
    public function getGastoLimpiesaCUPPrewin()
    {
        return $this->gastoLimpiesaCUPPrewin;
    }

    /**
     * Set certGastoLimpiesaCUPPrewin
     *
     * @param float $certGastoLimpiesaCUPPrewin
     * @return Contratos
     */
    public function setCertGastoLimpiesaCUPPrewin($certGastoLimpiesaCUPPrewin)
    {
        $this->certGastoLimpiesaCUPPrewin = $certGastoLimpiesaCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoLimpiesaCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoLimpiesaCUPPrewin()
    {
        return $this->certGastoLimpiesaCUPPrewin;
    }

    /**
     * Set gastoLimpiesaCUCPrewin
     *
     * @param float $gastoLimpiesaCUCPrewin
     * @return Contratos
     */
    public function setGastoLimpiesaCUCPrewin($gastoLimpiesaCUCPrewin)
    {
        $this->gastoLimpiesaCUCPrewin = $gastoLimpiesaCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoLimpiesaCUCPrewin
     *
     * @return float 
     */
    public function getGastoLimpiesaCUCPrewin()
    {
        return $this->gastoLimpiesaCUCPrewin;
    }

    /**
     * Set certGastoLimpiesaCUCPrewin
     *
     * @param float $certGastoLimpiesaCUCPrewin
     * @return Contratos
     */
    public function setCertGastoLimpiesaCUCPrewin($certGastoLimpiesaCUCPrewin)
    {
        $this->certGastoLimpiesaCUCPrewin = $certGastoLimpiesaCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoLimpiesaCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoLimpiesaCUCPrewin()
    {
        return $this->certGastoLimpiesaCUCPrewin;
    }

    /**
     * Set gastoAseoCUPPrewin
     *
     * @param float $gastoAseoCUPPrewin
     * @return Contratos
     */
    public function setGastoAseoCUPPrewin($gastoAseoCUPPrewin)
    {
        $this->gastoAseoCUPPrewin = $gastoAseoCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoAseoCUPPrewin
     *
     * @return float 
     */
    public function getGastoAseoCUPPrewin()
    {
        return $this->gastoAseoCUPPrewin;
    }

    /**
     * Set certGastoAseoCUPPrewin
     *
     * @param float $certGastoAseoCUPPrewin
     * @return Contratos
     */
    public function setCertGastoAseoCUPPrewin($certGastoAseoCUPPrewin)
    {
        $this->certGastoAseoCUPPrewin = $certGastoAseoCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastoAseoCUPPrewin
     *
     * @return float 
     */
    public function getCertGastoAseoCUPPrewin()
    {
        return $this->certGastoAseoCUPPrewin;
    }

    /**
     * Set gastoAseoCUCPrewin
     *
     * @param float $gastoAseoCUCPrewin
     * @return Contratos
     */
    public function setGastoAseoCUCPrewin($gastoAseoCUCPrewin)
    {
        $this->gastoAseoCUCPrewin = $gastoAseoCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoAseoCUCPrewin
     *
     * @return float 
     */
    public function getGastoAseoCUCPrewin()
    {
        return $this->gastoAseoCUCPrewin;
    }

    /**
     * Set certGastoAseoCUCPrewin
     *
     * @param float $certGastoAseoCUCPrewin
     * @return Contratos
     */
    public function setCertGastoAseoCUCPrewin($certGastoAseoCUCPrewin)
    {
        $this->certGastoAseoCUCPrewin = $certGastoAseoCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastoAseoCUCPrewin
     *
     * @return float 
     */
    public function getCertGastoAseoCUCPrewin()
    {
        return $this->certGastoAseoCUCPrewin;
    }

    /**
     * Set gastosGeneralesCUPPrewin
     *
     * @param float $gastosGeneralesCUPPrewin
     * @return Contratos
     */
    public function setGastosGeneralesCUPPrewin($gastosGeneralesCUPPrewin)
    {
        $this->gastosGeneralesCUPPrewin = $gastosGeneralesCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosGeneralesCUPPrewin
     *
     * @return float 
     */
    public function getGastosGeneralesCUPPrewin()
    {
        return $this->gastosGeneralesCUPPrewin;
    }

    /**
     * Set certGastosGeneralesCUPPrewin
     *
     * @param float $certGastosGeneralesCUPPrewin
     * @return Contratos
     */
    public function setCertGastosGeneralesCUPPrewin($certGastosGeneralesCUPPrewin)
    {
        $this->certGastosGeneralesCUPPrewin = $certGastosGeneralesCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastosGeneralesCUPPrewin
     *
     * @return float 
     */
    public function getCertGastosGeneralesCUPPrewin()
    {
        return $this->certGastosGeneralesCUPPrewin;
    }

    /**
     * Set gastosGeneralesCUCPrewin
     *
     * @param float $gastosGeneralesCUCPrewin
     * @return Contratos
     */
    public function setGastosGeneralesCUCPrewin($gastosGeneralesCUCPrewin)
    {
        $this->gastosGeneralesCUCPrewin = $gastosGeneralesCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosGeneralesCUCPrewin
     *
     * @return float 
     */
    public function getGastosGeneralesCUCPrewin()
    {
        return $this->gastosGeneralesCUCPrewin;
    }

    /**
     * Set certGastosGeneralesCUCPrewin
     *
     * @param float $certGastosGeneralesCUCPrewin
     * @return Contratos
     */
    public function setCertGastosGeneralesCUCPrewin($certGastosGeneralesCUCPrewin)
    {
        $this->certGastosGeneralesCUCPrewin = $certGastosGeneralesCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastosGeneralesCUCPrewin
     *
     * @return float 
     */
    public function getCertGastosGeneralesCUCPrewin()
    {
        return $this->certGastosGeneralesCUCPrewin;
    }

    /**
     * Set gastosComercializacionCUPPrewin
     *
     * @param float $gastosComercializacionCUPPrewin
     * @return Contratos
     */
    public function setGastosComercializacionCUPPrewin($gastosComercializacionCUPPrewin)
    {
        $this->gastosComercializacionCUPPrewin = $gastosComercializacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosComercializacionCUPPrewin
     *
     * @return float 
     */
    public function getGastosComercializacionCUPPrewin()
    {
        return $this->gastosComercializacionCUPPrewin;
    }

    /**
     * Set certGastosComercializacionCUPPrewin
     *
     * @param float $certGastosComercializacionCUPPrewin
     * @return Contratos
     */
    public function setCertGastosComercializacionCUPPrewin($certGastosComercializacionCUPPrewin)
    {
        $this->certGastosComercializacionCUPPrewin = $certGastosComercializacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastosComercializacionCUPPrewin
     *
     * @return float 
     */
    public function getCertGastosComercializacionCUPPrewin()
    {
        return $this->certGastosComercializacionCUPPrewin;
    }

    /**
     * Set gastosComercializacionCUCPrewin
     *
     * @param float $gastosComercializacionCUCPrewin
     * @return Contratos
     */
    public function setGastosComercializacionCUCPrewin($gastosComercializacionCUCPrewin)
    {
        $this->gastosComercializacionCUCPrewin = $gastosComercializacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosComercializacionCUCPrewin
     *
     * @return float 
     */
    public function getGastosComercializacionCUCPrewin()
    {
        return $this->gastosComercializacionCUCPrewin;
    }

    /**
     * Set certGastosComercializacionCUCPrewin
     *
     * @param float $certGastosComercializacionCUCPrewin
     * @return Contratos
     */
    public function setCertGastosComercializacionCUCPrewin($certGastosComercializacionCUCPrewin)
    {
        $this->certGastosComercializacionCUCPrewin = $certGastosComercializacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastosComercializacionCUCPrewin
     *
     * @return float 
     */
    public function getCertGastosComercializacionCUCPrewin()
    {
        return $this->certGastosComercializacionCUCPrewin;
    }

    /**
     * Set gastosPreparacionCUPPrewin
     *
     * @param float $gastosPreparacionCUPPrewin
     * @return Contratos
     */
    public function setGastosPreparacionCUPPrewin($gastosPreparacionCUPPrewin)
    {
        $this->gastosPreparacionCUPPrewin = $gastosPreparacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosPreparacionCUPPrewin
     *
     * @return float 
     */
    public function getGastosPreparacionCUPPrewin()
    {
        return $this->gastosPreparacionCUPPrewin;
    }

    /**
     * Set certGastosPreparacionCUPPrewin
     *
     * @param float $certGastosPreparacionCUPPrewin
     * @return Contratos
     */
    public function setCertGastosPreparacionCUPPrewin($certGastosPreparacionCUPPrewin)
    {
        $this->certGastosPreparacionCUPPrewin = $certGastosPreparacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastosPreparacionCUPPrewin
     *
     * @return float 
     */
    public function getCertGastosPreparacionCUPPrewin()
    {
        return $this->certGastosPreparacionCUPPrewin;
    }

    /**
     * Set gastosPreparacionCUCPrewin
     *
     * @param float $gastosPreparacionCUCPrewin
     * @return Contratos
     */
    public function setGastosPreparacionCUCPrewin($gastosPreparacionCUCPrewin)
    {
        $this->gastosPreparacionCUCPrewin = $gastosPreparacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosPreparacionCUCPrewin
     *
     * @return float 
     */
    public function getGastosPreparacionCUCPrewin()
    {
        return $this->gastosPreparacionCUCPrewin;
    }

    /**
     * Set certGastosPreparacionCUCPrewin
     *
     * @param float $certGastosPreparacionCUCPrewin
     * @return Contratos
     */
    public function setCertGastosPreparacionCUCPrewin($certGastosPreparacionCUCPrewin)
    {
        $this->certGastosPreparacionCUCPrewin = $certGastosPreparacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastosPreparacionCUCPrewin
     *
     * @return float 
     */
    public function getCertGastosPreparacionCUCPrewin()
    {
        return $this->certGastosPreparacionCUCPrewin;
    }

    /**
     * Set gastosAdministracionCUPPrewin
     *
     * @param float $gastosAdministracionCUPPrewin
     * @return Contratos
     */
    public function setGastosAdministracionCUPPrewin($gastosAdministracionCUPPrewin)
    {
        $this->gastosAdministracionCUPPrewin = $gastosAdministracionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosAdministracionCUPPrewin
     *
     * @return float 
     */
    public function getGastosAdministracionCUPPrewin()
    {
        return $this->gastosAdministracionCUPPrewin;
    }

    /**
     * Set certGastosAdministracionCUPPrewin
     *
     * @param float $certGastosAdministracionCUPPrewin
     * @return Contratos
     */
    public function setCertGastosAdministracionCUPPrewin($certGastosAdministracionCUPPrewin)
    {
        $this->certGastosAdministracionCUPPrewin = $certGastosAdministracionCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastosAdministracionCUPPrewin
     *
     * @return float 
     */
    public function getCertGastosAdministracionCUPPrewin()
    {
        return $this->certGastosAdministracionCUPPrewin;
    }

    /**
     * Set gastosAdministracionCUCPrewin
     *
     * @param float $gastosAdministracionCUCPrewin
     * @return Contratos
     */
    public function setGastosAdministracionCUCPrewin($gastosAdministracionCUCPrewin)
    {
        $this->gastosAdministracionCUCPrewin = $gastosAdministracionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosAdministracionCUCPrewin
     *
     * @return float 
     */
    public function getGastosAdministracionCUCPrewin()
    {
        return $this->gastosAdministracionCUCPrewin;
    }

    /**
     * Set certGastosAdministracionCUCPrewin
     *
     * @param float $certGastosAdministracionCUCPrewin
     * @return Contratos
     */
    public function setCertGastosAdministracionCUCPrewin($certGastosAdministracionCUCPrewin)
    {
        $this->certGastosAdministracionCUCPrewin = $certGastosAdministracionCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastosAdministracionCUCPrewin
     *
     * @return float 
     */
    public function getCertGastosAdministracionCUCPrewin()
    {
        return $this->certGastosAdministracionCUCPrewin;
    }

    /**
     * Set totalGastosDirectosCUPPrewin
     *
     * @param float $totalGastosDirectosCUPPrewin
     * @return Contratos
     */
    public function setTotalGastosDirectosCUPPrewin($totalGastosDirectosCUPPrewin)
    {
        $this->totalGastosDirectosCUPPrewin = $totalGastosDirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get totalGastosDirectosCUPPrewin
     *
     * @return float 
     */
    public function getTotalGastosDirectosCUPPrewin()
    {
        return $this->totalGastosDirectosCUPPrewin;
    }

    /**
     * Set certTotalGastosDirectosCUPPrewin
     *
     * @param float $certTotalGastosDirectosCUPPrewin
     * @return Contratos
     */
    public function setCertTotalGastosDirectosCUPPrewin($certTotalGastosDirectosCUPPrewin)
    {
        $this->certTotalGastosDirectosCUPPrewin = $certTotalGastosDirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get certTotalGastosDirectosCUPPrewin
     *
     * @return float 
     */
    public function getCertTotalGastosDirectosCUPPrewin()
    {
        return $this->certTotalGastosDirectosCUPPrewin;
    }

    /**
     * Set totalGastosDirectosCUCPrewin
     *
     * @param float $totalGastosDirectosCUCPrewin
     * @return Contratos
     */
    public function setTotalGastosDirectosCUCPrewin($totalGastosDirectosCUCPrewin)
    {
        $this->totalGastosDirectosCUCPrewin = $totalGastosDirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get totalGastosDirectosCUCPrewin
     *
     * @return float 
     */
    public function getTotalGastosDirectosCUCPrewin()
    {
        return $this->totalGastosDirectosCUCPrewin;
    }

    /**
     * Set certTotalGastosDirectosCUCPrewin
     *
     * @param float $certTotalGastosDirectosCUCPrewin
     * @return Contratos
     */
    public function setCertTotalGastosDirectosCUCPrewin($certTotalGastosDirectosCUCPrewin)
    {
        $this->certTotalGastosDirectosCUCPrewin = $certTotalGastosDirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get certTotalGastosDirectosCUCPrewin
     *
     * @return float 
     */
    public function getCertTotalGastosDirectosCUCPrewin()
    {
        return $this->certTotalGastosDirectosCUCPrewin;
    }

    /**
     * Set gastosIndirectosCUPPrewin
     *
     * @param float $gastosIndirectosCUPPrewin
     * @return Contratos
     */
    public function setGastosIndirectosCUPPrewin($gastosIndirectosCUPPrewin)
    {
        $this->gastosIndirectosCUPPrewin = $gastosIndirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosIndirectosCUPPrewin
     *
     * @return float 
     */
    public function getGastosIndirectosCUPPrewin()
    {
        return $this->gastosIndirectosCUPPrewin;
    }

    /**
     * Set certGastosIndirectosCUPPrewin
     *
     * @param float $certGastosIndirectosCUPPrewin
     * @return Contratos
     */
    public function setCertGastosIndirectosCUPPrewin($certGastosIndirectosCUPPrewin)
    {
        $this->certGastosIndirectosCUPPrewin = $certGastosIndirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get certGastosIndirectosCUPPrewin
     *
     * @return float 
     */
    public function getCertGastosIndirectosCUPPrewin()
    {
        return $this->certGastosIndirectosCUPPrewin;
    }

    /**
     * Set gastosIndirectosCUCPrewin
     *
     * @param float $gastosIndirectosCUCPrewin
     * @return Contratos
     */
    public function setGastosIndirectosCUCPrewin($gastosIndirectosCUCPrewin)
    {
        $this->gastosIndirectosCUCPrewin = $gastosIndirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosIndirectosCUCPrewin
     *
     * @return float 
     */
    public function getGastosIndirectosCUCPrewin()
    {
        return $this->gastosIndirectosCUCPrewin;
    }

    /**
     * Set certGastosIndirectosCUCPrewin
     *
     * @param float $certGastosIndirectosCUCPrewin
     * @return Contratos
     */
    public function setCertGastosIndirectosCUCPrewin($certGastosIndirectosCUCPrewin)
    {
        $this->certGastosIndirectosCUCPrewin = $certGastosIndirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get certGastosIndirectosCUCPrewin
     *
     * @return float 
     */
    public function getCertGastosIndirectosCUCPrewin()
    {
        return $this->certGastosIndirectosCUCPrewin;
    }

    /**
     * Set subTotalGastosCUPPrewin
     *
     * @param float $subTotalGastosCUPPrewin
     * @return Contratos
     */
    public function setSubTotalGastosCUPPrewin($subTotalGastosCUPPrewin)
    {
        $this->subTotalGastosCUPPrewin = $subTotalGastosCUPPrewin;
    
        return $this;
    }

    /**
     * Get subTotalGastosCUPPrewin
     *
     * @return float 
     */
    public function getSubTotalGastosCUPPrewin()
    {
        return $this->subTotalGastosCUPPrewin;
    }

    /**
     * Set certSubTotalGastosCUPPrewin
     *
     * @param float $certSubTotalGastosCUPPrewin
     * @return Contratos
     */
    public function setCertSubTotalGastosCUPPrewin($certSubTotalGastosCUPPrewin)
    {
        $this->certSubTotalGastosCUPPrewin = $certSubTotalGastosCUPPrewin;
    
        return $this;
    }

    /**
     * Get certSubTotalGastosCUPPrewin
     *
     * @return float 
     */
    public function getCertSubTotalGastosCUPPrewin()
    {
        return $this->certSubTotalGastosCUPPrewin;
    }

    /**
     * Set subTotalGastosCUCPrewin
     *
     * @param float $subTotalGastosCUCPrewin
     * @return Contratos
     */
    public function setSubTotalGastosCUCPrewin($subTotalGastosCUCPrewin)
    {
        $this->subTotalGastosCUCPrewin = $subTotalGastosCUCPrewin;
    
        return $this;
    }

    /**
     * Get subTotalGastosCUCPrewin
     *
     * @return float 
     */
    public function getSubTotalGastosCUCPrewin()
    {
        return $this->subTotalGastosCUCPrewin;
    }

    /**
     * Set certSubTotalGastosCUCPrewin
     *
     * @param float $certSubTotalGastosCUCPrewin
     * @return Contratos
     */
    public function setCertSubTotalGastosCUCPrewin($certSubTotalGastosCUCPrewin)
    {
        $this->certSubTotalGastosCUCPrewin = $certSubTotalGastosCUCPrewin;
    
        return $this;
    }

    /**
     * Get certSubTotalGastosCUCPrewin
     *
     * @return float 
     */
    public function getCertSubTotalGastosCUCPrewin()
    {
        return $this->certSubTotalGastosCUCPrewin;
    }

    /**
     * Set presIndFTCUPPrewin
     *
     * @param float $presIndFTCUPPrewin
     * @return Contratos
     */
    public function setPresIndFTCUPPrewin($presIndFTCUPPrewin)
    {
        $this->presIndFTCUPPrewin = $presIndFTCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndFTCUPPrewin
     *
     * @return float 
     */
    public function getPresIndFTCUPPrewin()
    {
        return $this->presIndFTCUPPrewin;
    }

    /**
     * Set certPresIndFTCUPPrewin
     *
     * @param float $certPresIndFTCUPPrewin
     * @return Contratos
     */
    public function setCertPresIndFTCUPPrewin($certPresIndFTCUPPrewin)
    {
        $this->certPresIndFTCUPPrewin = $certPresIndFTCUPPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndFTCUPPrewin
     *
     * @return float 
     */
    public function getCertPresIndFTCUPPrewin()
    {
        return $this->certPresIndFTCUPPrewin;
    }

    /**
     * Set presIndFTCUCPrewin
     *
     * @param float $presIndFTCUCPrewin
     * @return Contratos
     */
    public function setPresIndFTCUCPrewin($presIndFTCUCPrewin)
    {
        $this->presIndFTCUCPrewin = $presIndFTCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndFTCUCPrewin
     *
     * @return float 
     */
    public function getPresIndFTCUCPrewin()
    {
        return $this->presIndFTCUCPrewin;
    }

    /**
     * Set certPresIndFTCUCPrewin
     *
     * @param float $certPresIndFTCUCPrewin
     * @return Contratos
     */
    public function setCertPresIndFTCUCPrewin($certPresIndFTCUCPrewin)
    {
        $this->certPresIndFTCUCPrewin = $certPresIndFTCUCPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndFTCUCPrewin
     *
     * @return float 
     */
    public function getCertPresIndFTCUCPrewin()
    {
        return $this->certPresIndFTCUCPrewin;
    }

    /**
     * Set presIndOGACUPPrewin
     *
     * @param float $presIndOGACUPPrewin
     * @return Contratos
     */
    public function setPresIndOGACUPPrewin($presIndOGACUPPrewin)
    {
        $this->presIndOGACUPPrewin = $presIndOGACUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndOGACUPPrewin
     *
     * @return float 
     */
    public function getPresIndOGACUPPrewin()
    {
        return $this->presIndOGACUPPrewin;
    }

    /**
     * Set certPresIndOGACUPPrewin
     *
     * @param float $certPresIndOGACUPPrewin
     * @return Contratos
     */
    public function setCertPresIndOGACUPPrewin($certPresIndOGACUPPrewin)
    {
        $this->certPresIndOGACUPPrewin = $certPresIndOGACUPPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndOGACUPPrewin
     *
     * @return float 
     */
    public function getCertPresIndOGACUPPrewin()
    {
        return $this->certPresIndOGACUPPrewin;
    }

    /**
     * Set presIndOGACUCPrewin
     *
     * @param float $presIndOGACUCPrewin
     * @return Contratos
     */
    public function setPresIndOGACUCPrewin($presIndOGACUCPrewin)
    {
        $this->presIndOGACUCPrewin = $presIndOGACUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndOGACUCPrewin
     *
     * @return float 
     */
    public function getPresIndOGACUCPrewin()
    {
        return $this->presIndOGACUCPrewin;
    }

    /**
     * Set certPresIndOGACUCPrewin
     *
     * @param float $certPresIndOGACUCPrewin
     * @return Contratos
     */
    public function setCertPresIndOGACUCPrewin($certPresIndOGACUCPrewin)
    {
        $this->certPresIndOGACUCPrewin = $certPresIndOGACUCPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndOGACUCPrewin
     *
     * @return float 
     */
    public function getCertPresIndOGACUCPrewin()
    {
        return $this->certPresIndOGACUCPrewin;
    }

    /**
     * Set presIndGBCUPPrewin
     *
     * @param float $presIndGBCUPPrewin
     * @return Contratos
     */
    public function setPresIndGBCUPPrewin($presIndGBCUPPrewin)
    {
        $this->presIndGBCUPPrewin = $presIndGBCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndGBCUPPrewin
     *
     * @return float 
     */
    public function getPresIndGBCUPPrewin()
    {
        return $this->presIndGBCUPPrewin;
    }

    /**
     * Set certPresIndGBCUPPrewin
     *
     * @param float $certPresIndGBCUPPrewin
     * @return Contratos
     */
    public function setCertPresIndGBCUPPrewin($certPresIndGBCUPPrewin)
    {
        $this->certPresIndGBCUPPrewin = $certPresIndGBCUPPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndGBCUPPrewin
     *
     * @return float 
     */
    public function getCertPresIndGBCUPPrewin()
    {
        return $this->certPresIndGBCUPPrewin;
    }

    /**
     * Set presIndGBCUCPrewin
     *
     * @param float $presIndGBCUCPrewin
     * @return Contratos
     */
    public function setPresIndGBCUCPrewin($presIndGBCUCPrewin)
    {
        $this->presIndGBCUCPrewin = $presIndGBCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndGBCUCPrewin
     *
     * @return float 
     */
    public function getPresIndGBCUCPrewin()
    {
        return $this->presIndGBCUCPrewin;
    }

    /**
     * Set certPresIndGBCUCPrewin
     *
     * @param float $certPresIndGBCUCPrewin
     * @return Contratos
     */
    public function setCertPresIndGBCUCPrewin($certPresIndGBCUCPrewin)
    {
        $this->certPresIndGBCUCPrewin = $certPresIndGBCUCPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndGBCUCPrewin
     *
     * @return float 
     */
    public function getCertPresIndGBCUCPrewin()
    {
        return $this->certPresIndGBCUCPrewin;
    }

    /**
     * Set presIndSegCUPPrewin
     *
     * @param float $presIndSegCUPPrewin
     * @return Contratos
     */
    public function setPresIndSegCUPPrewin($presIndSegCUPPrewin)
    {
        $this->presIndSegCUPPrewin = $presIndSegCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndSegCUPPrewin
     *
     * @return float 
     */
    public function getPresIndSegCUPPrewin()
    {
        return $this->presIndSegCUPPrewin;
    }

    /**
     * Set certPresIndSegCUPPrewin
     *
     * @param float $certPresIndSegCUPPrewin
     * @return Contratos
     */
    public function setCertPresIndSegCUPPrewin($certPresIndSegCUPPrewin)
    {
        $this->certPresIndSegCUPPrewin = $certPresIndSegCUPPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndSegCUPPrewin
     *
     * @return float 
     */
    public function getCertPresIndSegCUPPrewin()
    {
        return $this->certPresIndSegCUPPrewin;
    }

    /**
     * Set presIndSegCUCPrewin
     *
     * @param float $presIndSegCUCPrewin
     * @return Contratos
     */
    public function setPresIndSegCUCPrewin($presIndSegCUCPrewin)
    {
        $this->presIndSegCUCPrewin = $presIndSegCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndSegCUCPrewin
     *
     * @return float 
     */
    public function getPresIndSegCUCPrewin()
    {
        return $this->presIndSegCUCPrewin;
    }

    /**
     * Set certPresIndSegCUCPrewin
     *
     * @param float $certPresIndSegCUCPrewin
     * @return Contratos
     */
    public function setCertPresIndSegCUCPrewin($certPresIndSegCUCPrewin)
    {
        $this->certPresIndSegCUCPrewin = $certPresIndSegCUCPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndSegCUCPrewin
     *
     * @return float 
     */
    public function getCertPresIndSegCUCPrewin()
    {
        return $this->certPresIndSegCUCPrewin;
    }

    /**
     * Set presIndImpCUPPrewin
     *
     * @param float $presIndImpCUPPrewin
     * @return Contratos
     */
    public function setPresIndImpCUPPrewin($presIndImpCUPPrewin)
    {
        $this->presIndImpCUPPrewin = $presIndImpCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndImpCUPPrewin
     *
     * @return float 
     */
    public function getPresIndImpCUPPrewin()
    {
        return $this->presIndImpCUPPrewin;
    }

    /**
     * Set certPresIndImpCUPPrewin
     *
     * @param float $certPresIndImpCUPPrewin
     * @return Contratos
     */
    public function setCertPresIndImpCUPPrewin($certPresIndImpCUPPrewin)
    {
        $this->certPresIndImpCUPPrewin = $certPresIndImpCUPPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndImpCUPPrewin
     *
     * @return float 
     */
    public function getCertPresIndImpCUPPrewin()
    {
        return $this->certPresIndImpCUPPrewin;
    }

    /**
     * Set presIndImpCUCPrewin
     *
     * @param float $presIndImpCUCPrewin
     * @return Contratos
     */
    public function setPresIndImpCUCPrewin($presIndImpCUCPrewin)
    {
        $this->presIndImpCUCPrewin = $presIndImpCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndImpCUCPrewin
     *
     * @return float 
     */
    public function getPresIndImpCUCPrewin()
    {
        return $this->presIndImpCUCPrewin;
    }

    /**
     * Set certPresIndImpCUCPrewin
     *
     * @param float $certPresIndImpCUCPrewin
     * @return Contratos
     */
    public function setCertPresIndImpCUCPrewin($certPresIndImpCUCPrewin)
    {
        $this->certPresIndImpCUCPrewin = $certPresIndImpCUCPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndImpCUCPrewin
     *
     * @return float 
     */
    public function getCertPresIndImpCUCPrewin()
    {
        return $this->certPresIndImpCUCPrewin;
    }

    /**
     * Set presIndTransCUPPrewin
     *
     * @param float $presIndTransCUPPrewin
     * @return Contratos
     */
    public function setPresIndTransCUPPrewin($presIndTransCUPPrewin)
    {
        $this->presIndTransCUPPrewin = $presIndTransCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndTransCUPPrewin
     *
     * @return float 
     */
    public function getPresIndTransCUPPrewin()
    {
        return $this->presIndTransCUPPrewin;
    }

    /**
     * Set certPresIndTransCUPPrewin
     *
     * @param float $certPresIndTransCUPPrewin
     * @return Contratos
     */
    public function setCertPresIndTransCUPPrewin($certPresIndTransCUPPrewin)
    {
        $this->certPresIndTransCUPPrewin = $certPresIndTransCUPPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndTransCUPPrewin
     *
     * @return float 
     */
    public function getCertPresIndTransCUPPrewin()
    {
        return $this->certPresIndTransCUPPrewin;
    }

    /**
     * Set presIndTransCUCPrewin
     *
     * @param float $presIndTransCUCPrewin
     * @return Contratos
     */
    public function setPresIndTransCUCPrewin($presIndTransCUCPrewin)
    {
        $this->presIndTransCUCPrewin = $presIndTransCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndTransCUCPrewin
     *
     * @return float 
     */
    public function getPresIndTransCUCPrewin()
    {
        return $this->presIndTransCUCPrewin;
    }

    /**
     * Set certPresIndTransCUCPrewin
     *
     * @param float $certPresIndTransCUCPrewin
     * @return Contratos
     */
    public function setCertPresIndTransCUCPrewin($certPresIndTransCUCPrewin)
    {
        $this->certPresIndTransCUCPrewin = $certPresIndTransCUCPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndTransCUCPrewin
     *
     * @return float 
     */
    public function getCertPresIndTransCUCPrewin()
    {
        return $this->certPresIndTransCUCPrewin;
    }

    /**
     * Set subTotalPresIndCUPPrewin
     *
     * @param float $subTotalPresIndCUPPrewin
     * @return Contratos
     */
    public function setSubTotalPresIndCUPPrewin($subTotalPresIndCUPPrewin)
    {
        $this->subTotalPresIndCUPPrewin = $subTotalPresIndCUPPrewin;
    
        return $this;
    }

    /**
     * Get subTotalPresIndCUPPrewin
     *
     * @return float 
     */
    public function getSubTotalPresIndCUPPrewin()
    {
        return $this->subTotalPresIndCUPPrewin;
    }

    /**
     * Set certSubTotalPresIndCUPPrewin
     *
     * @param float $certSubTotalPresIndCUPPrewin
     * @return Contratos
     */
    public function setCertSubTotalPresIndCUPPrewin($certSubTotalPresIndCUPPrewin)
    {
        $this->certSubTotalPresIndCUPPrewin = $certSubTotalPresIndCUPPrewin;
    
        return $this;
    }

    /**
     * Get certSubTotalPresIndCUPPrewin
     *
     * @return float 
     */
    public function getCertSubTotalPresIndCUPPrewin()
    {
        return $this->certSubTotalPresIndCUPPrewin;
    }

    /**
     * Set subTotalPresIndCUCPrewin
     *
     * @param float $subTotalPresIndCUCPrewin
     * @return Contratos
     */
    public function setSubTotalPresIndCUCPrewin($subTotalPresIndCUCPrewin)
    {
        $this->subTotalPresIndCUCPrewin = $subTotalPresIndCUCPrewin;
    
        return $this;
    }

    /**
     * Get subTotalPresIndCUCPrewin
     *
     * @return float 
     */
    public function getSubTotalPresIndCUCPrewin()
    {
        return $this->subTotalPresIndCUCPrewin;
    }

    /**
     * Set certSubTotalPresIndCUCPrewin
     *
     * @param float $certSubTotalPresIndCUCPrewin
     * @return Contratos
     */
    public function setCertSubTotalPresIndCUCPrewin($certSubTotalPresIndCUCPrewin)
    {
        $this->certSubTotalPresIndCUCPrewin = $certSubTotalPresIndCUCPrewin;
    
        return $this;
    }

    /**
     * Get certSubTotalPresIndCUCPrewin
     *
     * @return float 
     */
    public function getCertSubTotalPresIndCUCPrewin()
    {
        return $this->certSubTotalPresIndCUCPrewin;
    }

    /**
     * Set costoTotalCUPPrewin
     *
     * @param float $costoTotalCUPPrewin
     * @return Contratos
     */
    public function setCostoTotalCUPPrewin($costoTotalCUPPrewin)
    {
        $this->costoTotalCUPPrewin = $costoTotalCUPPrewin;
    
        return $this;
    }

    /**
     * Get costoTotalCUPPrewin
     *
     * @return float 
     */
    public function getCostoTotalCUPPrewin()
    {
        return $this->costoTotalCUPPrewin;
    }

    /**
     * Set certCostoTotalCUPPrewin
     *
     * @param float $certCostoTotalCUPPrewin
     * @return Contratos
     */
    public function setCertCostoTotalCUPPrewin($certCostoTotalCUPPrewin)
    {
        $this->certCostoTotalCUPPrewin = $certCostoTotalCUPPrewin;
    
        return $this;
    }

    /**
     * Get certCostoTotalCUPPrewin
     *
     * @return float 
     */
    public function getCertCostoTotalCUPPrewin()
    {
        return $this->certCostoTotalCUPPrewin;
    }

    /**
     * Set costoTotalCUCPrewin
     *
     * @param float $costoTotalCUCPrewin
     * @return Contratos
     */
    public function setCostoTotalCUCPrewin($costoTotalCUCPrewin)
    {
        $this->costoTotalCUCPrewin = $costoTotalCUCPrewin;
    
        return $this;
    }

    /**
     * Get costoTotalCUCPrewin
     *
     * @return float 
     */
    public function getCostoTotalCUCPrewin()
    {
        return $this->costoTotalCUCPrewin;
    }

    /**
     * Set certCostoTotalCUCPrewin
     *
     * @param float $certCostoTotalCUCPrewin
     * @return Contratos
     */
    public function setCertCostoTotalCUCPrewin($certCostoTotalCUCPrewin)
    {
        $this->certCostoTotalCUCPrewin = $certCostoTotalCUCPrewin;
    
        return $this;
    }

    /**
     * Get certCostoTotalCUCPrewin
     *
     * @return float 
     */
    public function getCertCostoTotalCUCPrewin()
    {
        return $this->certCostoTotalCUCPrewin;
    }

    /**
     * Set pcUtilidadPrewin
     *
     * @param float $pcUtilidadPrewin
     * @return Contratos
     */
    public function setPcUtilidadPrewin($pcUtilidadPrewin)
    {
        $this->pcUtilidadPrewin = $pcUtilidadPrewin;
    
        return $this;
    }

    /**
     * Get pcUtilidadPrewin
     *
     * @return float 
     */
    public function getPcUtilidadPrewin()
    {
        return $this->pcUtilidadPrewin;
    }

    /**
     * Set utilidadCUPPrewin
     *
     * @param float $utilidadCUPPrewin
     * @return Contratos
     */
    public function setUtilidadCUPPrewin($utilidadCUPPrewin)
    {
        $this->utilidadCUPPrewin = $utilidadCUPPrewin;
    
        return $this;
    }

    /**
     * Get utilidadCUPPrewin
     *
     * @return float 
     */
    public function getUtilidadCUPPrewin()
    {
        return $this->utilidadCUPPrewin;
    }

    /**
     * Set certUtilidadCUPPrewin
     *
     * @param float $certUtilidadCUPPrewin
     * @return Contratos
     */
    public function setCertUtilidadCUPPrewin($certUtilidadCUPPrewin)
    {
        $this->certUtilidadCUPPrewin = $certUtilidadCUPPrewin;
    
        return $this;
    }

    /**
     * Get certUtilidadCUPPrewin
     *
     * @return float 
     */
    public function getCertUtilidadCUPPrewin()
    {
        return $this->certUtilidadCUPPrewin;
    }

    /**
     * Set utilidadCUCPrewin
     *
     * @param float $utilidadCUCPrewin
     * @return Contratos
     */
    public function setUtilidadCUCPrewin($utilidadCUCPrewin)
    {
        $this->utilidadCUCPrewin = $utilidadCUCPrewin;
    
        return $this;
    }

    /**
     * Get utilidadCUCPrewin
     *
     * @return float 
     */
    public function getUtilidadCUCPrewin()
    {
        return $this->utilidadCUCPrewin;
    }

    /**
     * Set certUtilidadCUCPrewin
     *
     * @param float $certUtilidadCUCPrewin
     * @return Contratos
     */
    public function setCertUtilidadCUCPrewin($certUtilidadCUCPrewin)
    {
        $this->certUtilidadCUCPrewin = $certUtilidadCUCPrewin;
    
        return $this;
    }

    /**
     * Get certUtilidadCUCPrewin
     *
     * @return float 
     */
    public function getCertUtilidadCUCPrewin()
    {
        return $this->certUtilidadCUCPrewin;
    }

    /**
     * Set precServConstCUPPrewin
     *
     * @param float $precServConstCUPPrewin
     * @return Contratos
     */
    public function setPrecServConstCUPPrewin($precServConstCUPPrewin)
    {
        $this->precServConstCUPPrewin = $precServConstCUPPrewin;
    
        return $this;
    }

    /**
     * Get precServConstCUPPrewin
     *
     * @return float 
     */
    public function getPrecServConstCUPPrewin()
    {
        return $this->precServConstCUPPrewin;
    }

    /**
     * Set certPrecServConstCUPPrewin
     *
     * @param float $certPrecServConstCUPPrewin
     * @return Contratos
     */
    public function setCertPrecServConstCUPPrewin($certPrecServConstCUPPrewin)
    {
        $this->certPrecServConstCUPPrewin = $certPrecServConstCUPPrewin;
    
        return $this;
    }

    /**
     * Get certPrecServConstCUPPrewin
     *
     * @return float 
     */
    public function getCertPrecServConstCUPPrewin()
    {
        return $this->certPrecServConstCUPPrewin;
    }

    /**
     * Set precServConstCUCPrewin
     *
     * @param float $precServConstCUCPrewin
     * @return Contratos
     */
    public function setPrecServConstCUCPrewin($precServConstCUCPrewin)
    {
        $this->precServConstCUCPrewin = $precServConstCUCPrewin;
    
        return $this;
    }

    /**
     * Get precServConstCUCPrewin
     *
     * @return float 
     */
    public function getPrecServConstCUCPrewin()
    {
        return $this->precServConstCUCPrewin;
    }

    /**
     * Set certPrecServConstCUCPrewin
     *
     * @param float $certPrecServConstCUCPrewin
     * @return Contratos
     */
    public function setCertPrecServConstCUCPrewin($certPrecServConstCUCPrewin)
    {
        $this->certPrecServConstCUCPrewin = $certPrecServConstCUCPrewin;
    
        return $this;
    }

    /**
     * Get certPrecServConstCUCPrewin
     *
     * @return float 
     */
    public function getCertPrecServConstCUCPrewin()
    {
        return $this->certPrecServConstCUCPrewin;
    }

    /**
     * Set presIndTributosCUPPrewin
     *
     * @param float $presIndTributosCUPPrewin
     * @return Contratos
     */
    public function setPresIndTributosCUPPrewin($presIndTributosCUPPrewin)
    {
        $this->presIndTributosCUPPrewin = $presIndTributosCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndTributosCUPPrewin
     *
     * @return float 
     */
    public function getPresIndTributosCUPPrewin()
    {
        return $this->presIndTributosCUPPrewin;
    }

    /**
     * Set certPresIndTributosCUPPrewin
     *
     * @param float $certPresIndTributosCUPPrewin
     * @return Contratos
     */
    public function setCertPresIndTributosCUPPrewin($certPresIndTributosCUPPrewin)
    {
        $this->certPresIndTributosCUPPrewin = $certPresIndTributosCUPPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndTributosCUPPrewin
     *
     * @return float 
     */
    public function getCertPresIndTributosCUPPrewin()
    {
        return $this->certPresIndTributosCUPPrewin;
    }

    /**
     * Set presIndTributosCUCPrewin
     *
     * @param float $presIndTributosCUCPrewin
     * @return Contratos
     */
    public function setPresIndTributosCUCPrewin($presIndTributosCUCPrewin)
    {
        $this->presIndTributosCUCPrewin = $presIndTributosCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndTributosCUCPrewin
     *
     * @return float 
     */
    public function getPresIndTributosCUCPrewin()
    {
        return $this->presIndTributosCUCPrewin;
    }

    /**
     * Set certPresIndTributosCUCPrewin
     *
     * @param float $certPresIndTributosCUCPrewin
     * @return Contratos
     */
    public function setCertPresIndTributosCUCPrewin($certPresIndTributosCUCPrewin)
    {
        $this->certPresIndTributosCUCPrewin = $certPresIndTributosCUCPrewin;
    
        return $this;
    }

    /**
     * Get certPresIndTributosCUCPrewin
     *
     * @return float 
     */
    public function getCertPresIndTributosCUCPrewin()
    {
        return $this->certPresIndTributosCUCPrewin;
    }

    /**
     * Set precTotalServConstCUPPrewin
     *
     * @param float $precTotalServConstCUPPrewin
     * @return Contratos
     */
    public function setPrecTotalServConstCUPPrewin($precTotalServConstCUPPrewin)
    {
        $this->precTotalServConstCUPPrewin = $precTotalServConstCUPPrewin;
    
        return $this;
    }

    /**
     * Get precTotalServConstCUPPrewin
     *
     * @return float 
     */
    public function getPrecTotalServConstCUPPrewin()
    {
        return $this->precTotalServConstCUPPrewin;
    }

    /**
     * Set certPrecTotalServConstCUPPrewin
     *
     * @param float $certPrecTotalServConstCUPPrewin
     * @return Contratos
     */
    public function setCertPrecTotalServConstCUPPrewin($certPrecTotalServConstCUPPrewin)
    {
        $this->certPrecTotalServConstCUPPrewin = $certPrecTotalServConstCUPPrewin;
    
        return $this;
    }

    /**
     * Get certPrecTotalServConstCUPPrewin
     *
     * @return float 
     */
    public function getCertPrecTotalServConstCUPPrewin()
    {
        return $this->certPrecTotalServConstCUPPrewin;
    }

    /**
     * Set precTotalServConstCUCPrewin
     *
     * @param float $precTotalServConstCUCPrewin
     * @return Contratos
     */
    public function setPrecTotalServConstCUCPrewin($precTotalServConstCUCPrewin)
    {
        $this->precTotalServConstCUCPrewin = $precTotalServConstCUCPrewin;
    
        return $this;
    }

    /**
     * Get precTotalServConstCUCPrewin
     *
     * @return float 
     */
    public function getPrecTotalServConstCUCPrewin()
    {
        return $this->precTotalServConstCUCPrewin;
    }

    /**
     * Set certPrecTotalServConstCUCPrewin
     *
     * @param float $certPrecTotalServConstCUCPrewin
     * @return Contratos
     */
    public function setCertPrecTotalServConstCUCPrewin($certPrecTotalServConstCUCPrewin)
    {
        $this->certPrecTotalServConstCUCPrewin = $certPrecTotalServConstCUCPrewin;
    
        return $this;
    }

    /**
     * Get certPrecTotalServConstCUCPrewin
     *
     * @return float 
     */
    public function getCertPrecTotalServConstCUCPrewin()
    {
        return $this->certPrecTotalServConstCUCPrewin;
    }

    /**
     * Add certificacionExcel
     *
     * @param \CCC\OfertasBundle\Entity\CertificacionExcel $certificacionExcel
     * @return Contratos
     */
    public function addCertificacionExcel(\CCC\OfertasBundle\Entity\CertificacionExcel $certificacionExcel)
    {
        $this->certificacionExcel[] = $certificacionExcel;
    
        return $this;
    }

    /**
     * Remove certificacionExcel
     *
     * @param \CCC\OfertasBundle\Entity\CertificacionExcel $certificacionExcel
     */
    public function removeCertificacionExcel(\CCC\OfertasBundle\Entity\CertificacionExcel $certificacionExcel)
    {
        $this->certificacionExcel->removeElement($certificacionExcel);
    }

    /**
     * Get certificacionExcel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCertificacionExcel()
    {
        return $this->certificacionExcel;
    }

    /**
     * Add certificacionPrewin
     *
     * @param \CCC\OfertasBundle\Entity\CertificacionPrewin $certificacionPrewin
     * @return Contratos
     */
    public function addCertificacionPrewin(\CCC\OfertasBundle\Entity\CertificacionPrewin $certificacionPrewin)
    {
        $this->certificacionPrewin[] = $certificacionPrewin;
    
        return $this;
    }

    /**
     * Remove certificacionPrewin
     *
     * @param \CCC\OfertasBundle\Entity\CertificacionPrewin $certificacionPrewin
     */
    public function removeCertificacionPrewin(\CCC\OfertasBundle\Entity\CertificacionPrewin $certificacionPrewin)
    {
        $this->certificacionPrewin->removeElement($certificacionPrewin);
    }

    /**
     * Get certificacionPrewin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCertificacionPrewin()
    {
        return $this->certificacionPrewin;
    }

    /**
     * Add facturas
     *
     * @param \CCC\OfertasBundle\Entity\Facturas $facturas
     * @return Contratos
     */
    public function addFactura(\CCC\OfertasBundle\Entity\Facturas $facturas)
    {
        $this->facturas[] = $facturas;
    
        return $this;
    }

    /**
     * Remove facturas
     *
     * @param \CCC\OfertasBundle\Entity\Facturas $facturas
     */
    public function removeFactura(\CCC\OfertasBundle\Entity\Facturas $facturas)
    {
        $this->facturas->removeElement($facturas);
    }

    /**
     * Get facturas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFacturas()
    {
        return $this->facturas;
    }
}