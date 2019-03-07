<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratoN
 *
 * @ORM\Table(name="contraton")
 * @ORM\Entity
 */
class ContratoN
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
     * @var integer
     *
     * @ORM\Column(name="nocontrato", type="integer")
     */
    private $noContrato;

    /**
     * @var integer
     *
     * @ORM\Column(name="anno", type="integer", nullable = true)
     */
    private $anno;

    /**
     * @var string
     *
     * @ORM\Column(name="tipocontrato", type="string", length=255)
     */
    private $tipocontrato;

    /**
     * @var float
     *
     * @ORM\Column(name="vigencia", type="float", nullable = true)
     */
    private $vigencia;

    /**
     * @var float
     *
     * @ORM\Column(name="valorcuc", type="float", nullable = true)
     */
    private $valorCUC;

    /**
     * @var float
     *
     * @ORM\Column(name="valorcup", type="float", nullable = true)
     */
    private $valorCUP;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoferta", type="integer", nullable = true)
     */
    private $idOferta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="essuplemento", type="boolean", nullable = true)
     */
    private $esSuplemento;

    /**
     * @var string
     *
     * @ORM\Column(name="tiposuplemento", type="string", length=255, nullable = true )
     */
    private $tipoSuplemento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcontratodependiente", type="integer", nullable = true)
     */
    private $idContratoDependiente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafirmacliente", type="datetime", nullable = true)
     */
    private $fechaFirmaCliente;


    /**
     * @ORM\OneToMany(targetEntity="ClientesContratoN", mappedBy="idcontrato", cascade={"persist", "remove"})
     */
    private $idclientes;





    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idclientes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set noContrato
     *
     * @param integer $noContrato
     * @return ContratoN
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
     * Set anno
     *
     * @param integer $anno
     * @return ContratoN
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
     * Set tipocontrato
     *
     * @param string $tipocontrato
     * @return ContratoN
     */
    public function setTipocontrato($tipocontrato)
    {
        $this->tipocontrato = $tipocontrato;
    
        return $this;
    }

    /**
     * Get tipocontrato
     *
     * @return string 
     */
    public function getTipocontrato()
    {
        return $this->tipocontrato;
    }

    /**
     * Set vigencia
     *
     * @param float $vigencia
     * @return ContratoN
     */
    public function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;
    
        return $this;
    }

    /**
     * Get vigencia
     *
     * @return float 
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }

    /**
     * Set valorCUC
     *
     * @param float $valorCUC
     * @return ContratoN
     */
    public function setValorCUC($valorCUC)
    {
        $this->valorCUC = $valorCUC;
    
        return $this;
    }

    /**
     * Get valorCUC
     *
     * @return float 
     */
    public function getValorCUC()
    {
        return $this->valorCUC;
    }

    /**
     * Set valorCUP
     *
     * @param float $valorCUP
     * @return ContratoN
     */
    public function setValorCUP($valorCUP)
    {
        $this->valorCUP = $valorCUP;
    
        return $this;
    }

    /**
     * Get valorCUP
     *
     * @return float 
     */
    public function getValorCUP()
    {
        return $this->valorCUP;
    }

    /**
     * Set idOferta
     *
     * @param integer $idOferta
     * @return ContratoN
     */
    public function setIdOferta($idOferta)
    {
        $this->idOferta = $idOferta;
    
        return $this;
    }

    /**
     * Get idOferta
     *
     * @return integer 
     */
    public function getIdOferta()
    {
        return $this->idOferta;
    }

    /**
     * Set esSuplemento
     *
     * @param boolean $esSuplemento
     * @return ContratoN
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
     * Set idContratoDependiente
     *
     * @param integer $idContratoDependiente
     * @return ContratoN
     */
    public function setIdContratoDependiente($idContratoDependiente)
    {
        $this->idContratoDependiente = $idContratoDependiente;
    
        return $this;
    }

    /**
     * Get idContratoDependiente
     *
     * @return integer 
     */
    public function getIdContratoDependiente()
    {
        return $this->idContratoDependiente;
    }

    /**
     * Add idclientes
     *
     * @param \CCC\OfertasBundle\Entity\ClientesContratoN $idclientes
     * @return ContratoN
     */
    public function addIdcliente(\CCC\OfertasBundle\Entity\ClientesContratoN $idclientes)
    {
        $this->idclientes[] = $idclientes;
    
        return $this;
    }

    /**
     * Remove idclientes
     *
     * @param \CCC\OfertasBundle\Entity\ClientesContratoN $idclientes
     */
    public function removeIdcliente(\CCC\OfertasBundle\Entity\ClientesContratoN $idclientes)
    {
        $this->idclientes->removeElement($idclientes);
    }

    /**
     * Get idclientes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdclientes()
    {
        return $this->idclientes;
    }

    /**
     * Set fechaFirmaCliente
     *
     * @param \DateTime $fechaFirmaCliente
     * @return ContratoN
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
     * Set tipoSuplemento
     *
     * @param string $tipoSuplemento
     * @return ContratoN
     */
    public function setTipoSuplemento($tipoSuplemento)
    {
        $this->tipoSuplemento = $tipoSuplemento;
    
        return $this;
    }

    /**
     * Get tipoSuplemento
     *
     * @return string 
     */
    public function getTipoSuplemento()
    {
        return $this->tipoSuplemento;
    }
}