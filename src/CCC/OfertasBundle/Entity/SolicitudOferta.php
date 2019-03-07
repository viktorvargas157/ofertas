<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * solicitudoferta
 *
 * @ORM\Table(name="solicitudoferta")
 * @ORM\Entity
 */
class SolicitudOferta
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
     * @ORM\Column(name="anno", type="string", length=255)
     */
    private $anno;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500)
     */
    private $descripcion;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fechalevantamiento", type="datetime")
     */
    private $fechaLevantamiento;

    /**
     * @var \Time
     *
     * @ORM\Column(name="horalevantamiento", type="datetime", nullable = true)
     */
    private $horaLevantamiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacuantificacion", type="datetime", nullable = true)
     */
    private $fechaCuantificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacosteo", type="datetime", nullable = true)
     */
    private $fechaCosteo;

    /**
     * @var float
     *
     * @ORM\Column(name="valorcosteo", type="float", nullable = true)
     */
    private $valorCosteo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipomoneda", type="string", length=255, nullable = true)
     */
    private $tipoMoneda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaelaboracionoferta", type="datetime", nullable = true)
     */
    private $fechaElaboracionOferta;

    /**
     * @var float
     *
     * @ORM\Column(name="valorofertacuc", type="float", nullable = true)
     */
    private $valorOfertaCUC;

    /**
     * @var float
     *
     * @ORM\Column(name="valorofertacup", type="float", nullable = true)
     */
    private $valorOfertaCUP;

    /**
     * @var float
     *
     * @ORM\Column(name="valorofertamaterialescuc", type="float", nullable = true)
     */
    private $valorOfertaMaterialesCUC;

    /**
     * @var float
     *
     * @ORM\Column(name="valorofertamaterialescup", type="float", nullable = true)
     */
    private $valorOfertaMaterialesCUP;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidadtrabajadores", type="integer", nullable = true)
     */
    private $cantidadTrabajadores;

    /**
     * @var float
     *
     * @ORM\Column(name="tiempoejecucion", type="float", nullable = true)
     */
    private $tiempoEjecucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaentregacliente", type="datetime", nullable = true)
     */
    private $fechaEntregaCliente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aprobado", type="boolean")
     */
    private $aprobado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rechazado", type="boolean")
     */
    private $rechazado;

    /**
     * @var string
     *
     * @ORM\Column(name="causasrechazo", type="string", length=500, nullable = true)
     */
    private $causasRechazo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tienecaratula", type="boolean", nullable = true)
     */
    private $tieneCaratula;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esreoferta", type="boolean")
     */
    private $esReoferta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsolicitudoriginal", type="integer", nullable = true)
     */
    private $idsolicitudoriginal;


    /**
     * @var integer
     *
     * @ORM\Column(name="cantreofertas", type="integer")
     */
    private $cantReofertas;

    /**
     * @var float
     *
     * @ORM\Column(name="porcientoanticipo", type="float", nullable = true)
     */
    private $porCientoAnticipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="terminado", type="boolean", nullable = true)
     */
    private $terminado;

    /**
     * @var integer
     *
     * @ORM\Column(name="prioridad", type="integer", nullable = true)
     */
    private $prioridad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="escontrato", type="boolean")
     */
    private $esContrato;

    /**
     * @var integer
     *
     * @ORM\Column(name="nocontrato", type="integer", nullable = true)
     */
    private $noContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="tipocontrato", type="string", length=255, nullable = true)
     */
    private $tipoContrato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archivado", type="boolean", nullable = true)
     */
    private $archivado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafirmaclientecontrato", type="datetime", nullable = true)
     */
    private $fechaFirmaClienteContrato;

    /**
     * @var integer
     *
     * @ORM\Column(name="vigenciacontrato", type="integer", nullable = true)
     */
    private $vigenciaContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavencimiento", type="datetime", nullable = true)
     */
    private $fechaVencimiento;


    /**
     * @ORM\ManyToOne(targetEntity="Clientes", inversedBy="solicitudesOferta")
     * @ORM\JoinColumn(name="idcliente", referencedColumnName="id")
     */
    private $idCliente;

    /**
     * @ORM\OneToMany(targetEntity="Contrato", mappedBy="idsolicitudoferta", cascade={"persist", "remove"})
     */
    private $contratos;

    /**
     * @ORM\OneToMany(targetEntity="PresupuestoExcelComun", mappedBy="idSolicitudOferta", cascade={"persist", "remove"})
     */
    private $presupuestoExcelComun;











    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contratos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->presupuestoExcelComun = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SolicitudOferta
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
     * Set anno
     *
     * @param string $anno
     * @return SolicitudOferta
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;
    
        return $this;
    }

    /**
     * Get anno
     *
     * @return string 
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SolicitudOferta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set nombreObra
     *
     * @param string $nombreObra
     * @return SolicitudOferta
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
     * @return SolicitudOferta
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
     * Set fechaLevantamiento
     *
     * @param \DateTime $fechaLevantamiento
     * @return SolicitudOferta
     */
    public function setFechaLevantamiento($fechaLevantamiento)
    {
        $this->fechaLevantamiento = $fechaLevantamiento;
    
        return $this;
    }

    /**
     * Get fechaLevantamiento
     *
     * @return \DateTime 
     */
    public function getFechaLevantamiento()
    {
        return $this->fechaLevantamiento;
    }

    /**
     * Set horaLevantamiento
     *
     * @param \DateTime $horaLevantamiento
     * @return SolicitudOferta
     */
    public function setHoraLevantamiento($horaLevantamiento)
    {
        $this->horaLevantamiento = $horaLevantamiento;
    
        return $this;
    }

    /**
     * Get horaLevantamiento
     *
     * @return \DateTime 
     */
    public function getHoraLevantamiento()
    {
        return $this->horaLevantamiento;
    }

    /**
     * Set fechaCuantificacion
     *
     * @param \DateTime $fechaCuantificacion
     * @return SolicitudOferta
     */
    public function setFechaCuantificacion($fechaCuantificacion)
    {
        $this->fechaCuantificacion = $fechaCuantificacion;
    
        return $this;
    }

    /**
     * Get fechaCuantificacion
     *
     * @return \DateTime 
     */
    public function getFechaCuantificacion()
    {
        return $this->fechaCuantificacion;
    }

    /**
     * Set fechaCosteo
     *
     * @param \DateTime $fechaCosteo
     * @return SolicitudOferta
     */
    public function setFechaCosteo($fechaCosteo)
    {
        $this->fechaCosteo = $fechaCosteo;
    
        return $this;
    }

    /**
     * Get fechaCosteo
     *
     * @return \DateTime 
     */
    public function getFechaCosteo()
    {
        return $this->fechaCosteo;
    }

    /**
     * Set valorCosteo
     *
     * @param float $valorCosteo
     * @return SolicitudOferta
     */
    public function setValorCosteo($valorCosteo)
    {
        $this->valorCosteo = $valorCosteo;
    
        return $this;
    }

    /**
     * Get valorCosteo
     *
     * @return float 
     */
    public function getValorCosteo()
    {
        return $this->valorCosteo;
    }

    /**
     * Set tipoMoneda
     *
     * @param string $tipoMoneda
     * @return SolicitudOferta
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;
    
        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return string 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    /**
     * Set fechaElaboracionOferta
     *
     * @param \DateTime $fechaElaboracionOferta
     * @return SolicitudOferta
     */
    public function setFechaElaboracionOferta($fechaElaboracionOferta)
    {
        $this->fechaElaboracionOferta = $fechaElaboracionOferta;
    
        return $this;
    }

    /**
     * Get fechaElaboracionOferta
     *
     * @return \DateTime 
     */
    public function getFechaElaboracionOferta()
    {
        return $this->fechaElaboracionOferta;
    }

    /**
     * Set valorOfertaCUC
     *
     * @param float $valorOfertaCUC
     * @return SolicitudOferta
     */
    public function setValorOfertaCUC($valorOfertaCUC)
    {
        $this->valorOfertaCUC = $valorOfertaCUC;
    
        return $this;
    }

    /**
     * Get valorOfertaCUC
     *
     * @return float 
     */
    public function getValorOfertaCUC()
    {
        return $this->valorOfertaCUC;
    }

    /**
     * Set valorOfertaCUP
     *
     * @param float $valorOfertaCUP
     * @return SolicitudOferta
     */
    public function setValorOfertaCUP($valorOfertaCUP)
    {
        $this->valorOfertaCUP = $valorOfertaCUP;
    
        return $this;
    }

    /**
     * Get valorOfertaCUP
     *
     * @return float 
     */
    public function getValorOfertaCUP()
    {
        return $this->valorOfertaCUP;
    }

    /**
     * Set valorOfertaMaterialesCUC
     *
     * @param float $valorOfertaMaterialesCUC
     * @return SolicitudOferta
     */
    public function setValorOfertaMaterialesCUC($valorOfertaMaterialesCUC)
    {
        $this->valorOfertaMaterialesCUC = $valorOfertaMaterialesCUC;
    
        return $this;
    }

    /**
     * Get valorOfertaMaterialesCUC
     *
     * @return float 
     */
    public function getValorOfertaMaterialesCUC()
    {
        return $this->valorOfertaMaterialesCUC;
    }

    /**
     * Set valorOfertaMaterialesCUP
     *
     * @param float $valorOfertaMaterialesCUP
     * @return SolicitudOferta
     */
    public function setValorOfertaMaterialesCUP($valorOfertaMaterialesCUP)
    {
        $this->valorOfertaMaterialesCUP = $valorOfertaMaterialesCUP;
    
        return $this;
    }

    /**
     * Get valorOfertaMaterialesCUP
     *
     * @return float 
     */
    public function getValorOfertaMaterialesCUP()
    {
        return $this->valorOfertaMaterialesCUP;
    }

    /**
     * Set cantidadTrabajadores
     *
     * @param integer $cantidadTrabajadores
     * @return SolicitudOferta
     */
    public function setCantidadTrabajadores($cantidadTrabajadores)
    {
        $this->cantidadTrabajadores = $cantidadTrabajadores;
    
        return $this;
    }

    /**
     * Get cantidadTrabajadores
     *
     * @return integer 
     */
    public function getCantidadTrabajadores()
    {
        return $this->cantidadTrabajadores;
    }

    /**
     * Set tiempoEjecucion
     *
     * @param float $tiempoEjecucion
     * @return SolicitudOferta
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
     * Set fechaEntregaCliente
     *
     * @param \DateTime $fechaEntregaCliente
     * @return SolicitudOferta
     */
    public function setFechaEntregaCliente($fechaEntregaCliente)
    {
        $this->fechaEntregaCliente = $fechaEntregaCliente;
    
        return $this;
    }

    /**
     * Get fechaEntregaCliente
     *
     * @return \DateTime 
     */
    public function getFechaEntregaCliente()
    {
        return $this->fechaEntregaCliente;
    }

    /**
     * Set aprobado
     *
     * @param boolean $aprobado
     * @return SolicitudOferta
     */
    public function setAprobado($aprobado)
    {
        $this->aprobado = $aprobado;
    
        return $this;
    }

    /**
     * Get aprobado
     *
     * @return boolean 
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set rechazado
     *
     * @param boolean $rechazado
     * @return SolicitudOferta
     */
    public function setRechazado($rechazado)
    {
        $this->rechazado = $rechazado;
    
        return $this;
    }

    /**
     * Get rechazado
     *
     * @return boolean 
     */
    public function getRechazado()
    {
        return $this->rechazado;
    }

    /**
     * Set causasRechazo
     *
     * @param string $causasRechazo
     * @return SolicitudOferta
     */
    public function setCausasRechazo($causasRechazo)
    {
        $this->causasRechazo = $causasRechazo;
    
        return $this;
    }

    /**
     * Get causasRechazo
     *
     * @return string 
     */
    public function getCausasRechazo()
    {
        return $this->causasRechazo;
    }

    /**
     * Set tieneCaratula
     *
     * @param boolean $tieneCaratula
     * @return SolicitudOferta
     */
    public function setTieneCaratula($tieneCaratula)
    {
        $this->tieneCaratula = $tieneCaratula;
    
        return $this;
    }

    /**
     * Get tieneCaratula
     *
     * @return boolean 
     */
    public function getTieneCaratula()
    {
        return $this->tieneCaratula;
    }

    /**
     * Set esReoferta
     *
     * @param boolean $esReoferta
     * @return SolicitudOferta
     */
    public function setEsReoferta($esReoferta)
    {
        $this->esReoferta = $esReoferta;
    
        return $this;
    }

    /**
     * Get esReoferta
     *
     * @return boolean 
     */
    public function getEsReoferta()
    {
        return $this->esReoferta;
    }

    /**
     * Set idsolicitudoriginal
     *
     * @param integer $idsolicitudoriginal
     * @return SolicitudOferta
     */
    public function setIdsolicitudoriginal($idsolicitudoriginal)
    {
        $this->idsolicitudoriginal = $idsolicitudoriginal;
    
        return $this;
    }

    /**
     * Get idsolicitudoriginal
     *
     * @return integer 
     */
    public function getIdsolicitudoriginal()
    {
        return $this->idsolicitudoriginal;
    }

    /**
     * Set cantReofertas
     *
     * @param integer $cantReofertas
     * @return SolicitudOferta
     */
    public function setCantReofertas($cantReofertas)
    {
        $this->cantReofertas = $cantReofertas;
    
        return $this;
    }

    /**
     * Get cantReofertas
     *
     * @return integer 
     */
    public function getCantReofertas()
    {
        return $this->cantReofertas;
    }

    /**
     * Set porCientoAnticipo
     *
     * @param float $porCientoAnticipo
     * @return SolicitudOferta
     */
    public function setPorCientoAnticipo($porCientoAnticipo)
    {
        $this->porCientoAnticipo = $porCientoAnticipo;
    
        return $this;
    }

    /**
     * Get porCientoAnticipo
     *
     * @return float 
     */
    public function getPorCientoAnticipo()
    {
        return $this->porCientoAnticipo;
    }

    /**
     * Set terminado
     *
     * @param boolean $terminado
     * @return SolicitudOferta
     */
    public function setTerminado($terminado)
    {
        $this->terminado = $terminado;
    
        return $this;
    }

    /**
     * Get terminado
     *
     * @return boolean 
     */
    public function getTerminado()
    {
        return $this->terminado;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return SolicitudOferta
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
    
        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set esContrato
     *
     * @param boolean $esContrato
     * @return SolicitudOferta
     */
    public function setEsContrato($esContrato)
    {
        $this->esContrato = $esContrato;
    
        return $this;
    }

    /**
     * Get esContrato
     *
     * @return boolean 
     */
    public function getEsContrato()
    {
        return $this->esContrato;
    }

    /**
     * Set noContrato
     *
     * @param integer $noContrato
     * @return SolicitudOferta
     */
    public function setNoContrato($noContrato)
    {
        $this->noContrato = $noContrato;
    
        return $this;
    }

    /**
     * Get noContrato
     *
     * @return integer 
     */
    public function getNoContrato()
    {
        return $this->noContrato;
    }

    /**
     * Set tipoContrato
     *
     * @param string $tipoContrato
     * @return SolicitudOferta
     */
    public function setTipoContrato($tipoContrato)
    {
        $this->tipoContrato = $tipoContrato;
    
        return $this;
    }

    /**
     * Get tipoContrato
     *
     * @return string 
     */
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }

    /**
     * Set archivado
     *
     * @param boolean $archivado
     * @return SolicitudOferta
     */
    public function setArchivado($archivado)
    {
        $this->archivado = $archivado;
    
        return $this;
    }

    /**
     * Get archivado
     *
     * @return boolean 
     */
    public function getArchivado()
    {
        return $this->archivado;
    }

    /**
     * Set fechaFirmaClienteContrato
     *
     * @param \DateTime $fechaFirmaClienteContrato
     * @return SolicitudOferta
     */
    public function setFechaFirmaClienteContrato($fechaFirmaClienteContrato)
    {
        $this->fechaFirmaClienteContrato = $fechaFirmaClienteContrato;
    
        return $this;
    }

    /**
     * Get fechaFirmaClienteContrato
     *
     * @return \DateTime 
     */
    public function getFechaFirmaClienteContrato()
    {
        return $this->fechaFirmaClienteContrato;
    }

    /**
     * Set vigenciaContrato
     *
     * @param integer $vigenciaContrato
     * @return SolicitudOferta
     */
    public function setVigenciaContrato($vigenciaContrato)
    {
        $this->vigenciaContrato = $vigenciaContrato;
    
        return $this;
    }

    /**
     * Get vigenciaContrato
     *
     * @return integer 
     */
    public function getVigenciaContrato()
    {
        return $this->vigenciaContrato;
    }

    /**
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return SolicitudOferta
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;
    
        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime 
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set idCliente
     *
     * @param \CCC\OfertasBundle\Entity\Clientes $idCliente
     * @return SolicitudOferta
     */
    public function setIdCliente(\CCC\OfertasBundle\Entity\Clientes $idCliente = null)
    {
        $this->idCliente = $idCliente;
    
        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \CCC\OfertasBundle\Entity\Clientes 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Add contratos
     *
     * @param \CCC\OfertasBundle\Entity\Contrato $contratos
     * @return SolicitudOferta
     */
    public function addContrato(\CCC\OfertasBundle\Entity\Contrato $contratos)
    {
        $this->contratos[] = $contratos;
    
        return $this;
    }

    /**
     * Remove contratos
     *
     * @param \CCC\OfertasBundle\Entity\Contrato $contratos
     */
    public function removeContrato(\CCC\OfertasBundle\Entity\Contrato $contratos)
    {
        $this->contratos->removeElement($contratos);
    }

    /**
     * Get contratos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContratos()
    {
        return $this->contratos;
    }

    /**
     * Add presupuestoExcelComun
     *
     * @param \CCC\OfertasBundle\Entity\PresupuestoExcelComun $presupuestoExcelComun
     * @return SolicitudOferta
     */
    public function addPresupuestoExcelComun(\CCC\OfertasBundle\Entity\PresupuestoExcelComun $presupuestoExcelComun)
    {
        $this->presupuestoExcelComun[] = $presupuestoExcelComun;
    
        return $this;
    }

    /**
     * Remove presupuestoExcelComun
     *
     * @param \CCC\OfertasBundle\Entity\PresupuestoExcelComun $presupuestoExcelComun
     */
    public function removePresupuestoExcelComun(\CCC\OfertasBundle\Entity\PresupuestoExcelComun $presupuestoExcelComun)
    {
        $this->presupuestoExcelComun->removeElement($presupuestoExcelComun);
    }

    /**
     * Get presupuestoExcelComun
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPresupuestoExcelComun()
    {
        return $this->presupuestoExcelComun;
    }
}