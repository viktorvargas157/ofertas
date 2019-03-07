<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrato
 *
 * @ORM\Table(name="contrato")
 * @ORM\Entity
 */
class Contrato
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEntrada", type="datetime", nullable = true)
     */
    private $fechaEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSecretaria", type="datetime", nullable = true)
     */
    private $fechaSecretaria;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEconomia", type="datetime", nullable = true)
     */
    private $fechaEconomia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNegocios", type="datetime", nullable = true)
     */
    private $fechaNegocios;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEjecucion", type="datetime", nullable = true)
     */
    private $fechaEjecucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEntregaCliente", type="datetime", nullable = true)
     */
    private $fechaEntregaCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable = true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="notaEstado", type="string", length=255, nullable = true)
     */
    private $notaEstado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFirmaCliente", type="datetime", nullable = true)
     */
    private $fechaFirmaCliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFirmaFinal", type="datetime", nullable = true)
     */
    private $fechaFirmaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="noContrato", type="string", length=255, nullable = true)
     */
    private $noContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="objeto", type="string", length=255, nullable = true)
     */
    private $objeto;

    /**
     * @var float
     *
     * @ORM\Column(name="valorAnticipoCUP", type="float", length=255, nullable = true)
     */
    private $valorAnticipoCUP;

    /**
     * @var float
     *
     * @ORM\Column(name="valorAnticipoCUC", type="float", length=255, nullable = true)
     */
    private $valorAnticipoCUC;

    /**
     * @var float
     *
     * @ORM\Column(name="valorContratoCUP", type="float", length=255, nullable = true)
     */
    private $valorContratoCUP;

    /**
     * @var float
     *
     * @ORM\Column(name="valorContratoCUC", type="float", length=255, nullable = true)
     */
    private $valorContratoCUC;

    /**
     * @var float
     *
     * @ORM\Column(name="valorEjecutadoContratoCUP", type="float", length=255, nullable = true)
     */
    private $valorEjecutadoContratoCUP;

    /**
     * @var float
     *
     * @ORM\Column(name="valorEjecutadoContratoCUC", type="float", length=255, nullable = true)
     */
    private $valorEjecutadoContratoCUC;

    /**
     * @var integer
     *
     * @ORM\Column(name="vigencia", type="integer", nullable = true)
     */
    private $vigencia;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoTiempo", type="string", length=255, nullable = true)
     */
    private $tipoTiempo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaActaInicio", type="datetime", nullable = true)
     */
    private $fechaActaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaActaEntrega", type="datetime", nullable = true)
     */
    private $fechaActaEntrega;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esSuplemento", type="boolean")
     */
    private $esSuplemento;

    /**
     * @var integer
     *
     * @ORM\Column(name="anno", type="integer", nullable = true)
     */
    private $anno;



    /**
     * @ORM\ManyToOne(targetEntity="SolicitudOferta", inversedBy="contratos")
     * @ORM\JoinColumn(name="idSolicitudOferta", referencedColumnName="id")
     */
    private $idSolicitudOferta;




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
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     * @return Contrato
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;
    
        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set fechaSecretaria
     *
     * @param \DateTime $fechaSecretaria
     * @return Contrato
     */
    public function setFechaSecretaria($fechaSecretaria)
    {
        $this->fechaSecretaria = $fechaSecretaria;
    
        return $this;
    }

    /**
     * Get fechaSecretaria
     *
     * @return \DateTime 
     */
    public function getFechaSecretaria()
    {
        return $this->fechaSecretaria;
    }

    /**
     * Set fechaEconomia
     *
     * @param \DateTime $fechaEconomia
     * @return Contrato
     */
    public function setFechaEconomia($fechaEconomia)
    {
        $this->fechaEconomia = $fechaEconomia;
    
        return $this;
    }

    /**
     * Get fechaEconomia
     *
     * @return \DateTime 
     */
    public function getFechaEconomia()
    {
        return $this->fechaEconomia;
    }

    /**
     * Set fechaNegocios
     *
     * @param \DateTime $fechaNegocios
     * @return Contrato
     */
    public function setFechaNegocios($fechaNegocios)
    {
        $this->fechaNegocios = $fechaNegocios;
    
        return $this;
    }

    /**
     * Get fechaNegocios
     *
     * @return \DateTime 
     */
    public function getFechaNegocios()
    {
        return $this->fechaNegocios;
    }

    /**
     * Set fechaEjecucion
     *
     * @param \DateTime $fechaEjecucion
     * @return Contrato
     */
    public function setFechaEjecucion($fechaEjecucion)
    {
        $this->fechaEjecucion = $fechaEjecucion;
    
        return $this;
    }

    /**
     * Get fechaEjecucion
     *
     * @return \DateTime 
     */
    public function getFechaEjecucion()
    {
        return $this->fechaEjecucion;
    }

    /**
     * Set fechaEntregaCliente
     *
     * @param \DateTime $fechaEntregaCliente
     * @return Contrato
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
     * Set estado
     *
     * @param string $estado
     * @return Contrato
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaFirmaCliente
     *
     * @param \DateTime $fechaFirmaCliente
     * @return Contrato
     */
    public function setFechaFirmaCliente($fechaFirmaCliente)
    {
        $this->fechaFirmaCliente = $fechaFirmaCliente;
    
        return $this;
    }

    /**
     * Get fechaFirmaCliente
     *
     * @return \DateTime 
     */
    public function getFechaFirmaCliente()
    {
        return $this->fechaFirmaCliente;
    }

    /**
     * Set idSolicitudOferta
     *
     * @param \CCC\OfertasBundle\Entity\SolicitudOferta $idSolicitudOferta
     * @return Contrato
     */
    public function setIdSolicitudOferta(\CCC\OfertasBundle\Entity\SolicitudOferta $idSolicitudOferta = null)
    {
        $this->idSolicitudOferta = $idSolicitudOferta;
    
        return $this;
    }

    /**
     * Get idSolicitudOferta
     *
     * @return \CCC\OfertasBundle\Entity\SolicitudOferta 
     */
    public function getIdSolicitudOferta()
    {
        return $this->idSolicitudOferta;
    }

    /**
     * Set notaEstado
     *
     * @param string $notaEstado
     * @return Contrato
     */
    public function setNotaEstado($notaEstado)
    {
        $this->notaEstado = $notaEstado;
    
        return $this;
    }

    /**
     * Get notaEstado
     *
     * @return string 
     */
    public function getNotaEstado()
    {
        return $this->notaEstado;
    }

    /**
     * Set fechaFirmaFinal
     *
     * @param \DateTime $fechaFirmaFinal
     * @return Contrato
     */
    public function setFechaFirmaFinal($fechaFirmaFinal)
    {
        $this->fechaFirmaFinal = $fechaFirmaFinal;
    
        return $this;
    }

    /**
     * Get fechaFirmaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFirmaFinal()
    {
        return $this->fechaFirmaFinal;
    }

    /**
     * Set noContrato
     *
     * @param string $noContrato
     * @return Contrato
     */
    public function setNoContrato($noContrato)
    {
        $this->noContrato = $noContrato;
    
        return $this;
    }

    /**
     * Get noContrato
     *
     * @return string 
     */
    public function getNoContrato()
    {
        return $this->noContrato;
    }

    /**
     * Set valorAnticipoCUP
     *
     * @param float $valorAnticipoCUP
     * @return Contrato
     */
    public function setValorAnticipoCUP($valorAnticipoCUP)
    {
        $this->valorAnticipoCUP = $valorAnticipoCUP;
    
        return $this;
    }

    /**
     * Get valorAnticipoCUP
     *
     * @return float 
     */
    public function getValorAnticipoCUP()
    {
        return $this->valorAnticipoCUP;
    }

    /**
     * Set valorAnticipoCUC
     *
     * @param float $valorAnticipoCUC
     * @return Contrato
     */
    public function setValorAnticipoCUC($valorAnticipoCUC)
    {
        $this->valorAnticipoCUC = $valorAnticipoCUC;
    
        return $this;
    }

    /**
     * Get valorAnticipoCUC
     *
     * @return float 
     */
    public function getValorAnticipoCUC()
    {
        return $this->valorAnticipoCUC;
    }

    /**
     * Set valorContratoCUP
     *
     * @param float $valorContratoCUP
     * @return Contrato
     */
    public function setValorContratoCUP($valorContratoCUP)
    {
        $this->valorContratoCUP = $valorContratoCUP;
    
        return $this;
    }

    /**
     * Get valorContratoCUP
     *
     * @return float 
     */
    public function getValorContratoCUP()
    {
        return $this->valorContratoCUP;
    }

    /**
     * Set valorContratoCUC
     *
     * @param float $valorContratoCUC
     * @return Contrato
     */
    public function setValorContratoCUC($valorContratoCUC)
    {
        $this->valorContratoCUC = $valorContratoCUC;
    
        return $this;
    }

    /**
     * Get valorContratoCUC
     *
     * @return float 
     */
    public function getValorContratoCUC()
    {
        return $this->valorContratoCUC;
    }

    /**
     * Set objeto
     *
     * @param string $objeto
     * @return Contrato
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
     * Set vigencia
     *
     * @param integer $vigencia
     * @return Contrato
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
     * Set tipoTiempo
     *
     * @param string $tipoTiempo
     * @return Contrato
     */
    public function setTipoTiempo($tipoTiempo)
    {
        $this->tipoTiempo = $tipoTiempo;
    
        return $this;
    }

    /**
     * Get tipoTiempo
     *
     * @return string 
     */
    public function getTipoTiempo()
    {
        return $this->tipoTiempo;
    }

    /**
     * Set fechaActaInicio
     *
     * @param \DateTime $fechaActaInicio
     * @return Contrato
     */
    public function setFechaActaInicio($fechaActaInicio)
    {
        $this->fechaActaInicio = $fechaActaInicio;
    
        return $this;
    }

    /**
     * Get fechaActaInicio
     *
     * @return \DateTime 
     */
    public function getFechaActaInicio()
    {
        return $this->fechaActaInicio;
    }

    /**
     * Set fechaActaEntrega
     *
     * @param \DateTime $fechaActaEntrega
     * @return Contrato
     */
    public function setFechaActaEntrega($fechaActaEntrega)
    {
        $this->fechaActaEntrega = $fechaActaEntrega;
    
        return $this;
    }

    /**
     * Get fechaActaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaActaEntrega()
    {
        return $this->fechaActaEntrega;
    }

    /**
     * Set esSuplemento
     *
     * @param boolean $esSuplemento
     * @return Contrato
     */
    public function setEsSuplemento($esSuplemento)
    {
        $this->esSuplemento = $esSuplemento;
    
        return $this;
    }

    /**
     * Get esSuplemento
     *
     * @return boolean 
     */
    public function getEsSuplemento()
    {
        return $this->esSuplemento;
    }

    /**
     * Set valorEjecutadoContratoCUP
     *
     * @param float $valorEjecutadoContratoCUP
     * @return Contrato
     */
    public function setValorEjecutadoContratoCUP($valorEjecutadoContratoCUP)
    {
        $this->valorEjecutadoContratoCUP = $valorEjecutadoContratoCUP;
    
        return $this;
    }

    /**
     * Get valorEjecutadoContratoCUP
     *
     * @return float 
     */
    public function getValorEjecutadoContratoCUP()
    {
        return $this->valorEjecutadoContratoCUP;
    }

    /**
     * Set valorEjecutadoContratoCUC
     *
     * @param float $valorEjecutadoContratoCUC
     * @return Contrato
     */
    public function setValorEjecutadoContratoCUC($valorEjecutadoContratoCUC)
    {
        $this->valorEjecutadoContratoCUC = $valorEjecutadoContratoCUC;
    
        return $this;
    }

    /**
     * Get valorEjecutadoContratoCUC
     *
     * @return float 
     */
    public function getValorEjecutadoContratoCUC()
    {
        return $this->valorEjecutadoContratoCUC;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     * @return Contrato
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
}