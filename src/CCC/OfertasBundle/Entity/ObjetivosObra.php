<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * objetivosobra
 *
 * @ORM\Table(name="objetivosobra")
 * @ORM\Entity
 */
class ObjetivosObra
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
     * @var float
     *
     * @ORM\Column(name="codigo", type="float", nullable = true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivo", type="string", length=255)
     */
    private $objetivo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500, nullable = true)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esSuplemento", type="boolean", nullable = true)
     */
    private $esSuplemento;

    /**
     * @var integer
     *
     * @ORM\Column(name="noSuplemento", type="integer", nullable = true)
     */
    private $noSuplemento;


    /**
     * @ORM\ManyToOne(targetEntity="PresupuestoExcelComun", inversedBy="objetivos")
     * @ORM\JoinColumn(name="idpresupuesto", referencedColumnName="id")
     */
    private $idPresupuesto;


    /**
     * @ORM\OneToMany(targetEntity="GrupoActividadesObjetivo", mappedBy="idObjetivo", cascade={"persist", "remove"})
     */
    private $gruposActividades;






    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gruposActividades = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param float $codigo
     * @return ObjetivosObra
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return float 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set objetivo
     *
     * @param string $objetivo
     * @return ObjetivosObra
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;
    
        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string 
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ObjetivosObra
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
     * Set esSuplemento
     *
     * @param boolean $esSuplemento
     * @return ObjetivosObra
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
     * Set noSuplemento
     *
     * @param integer $noSuplemento
     * @return ObjetivosObra
     */
    public function setNoSuplemento($noSuplemento)
    {
        $this->noSuplemento = $noSuplemento;
    
        return $this;
    }

    /**
     * Get noSuplemento
     *
     * @return integer 
     */
    public function getNoSuplemento()
    {
        return $this->noSuplemento;
    }

    /**
     * Set idPresupuesto
     *
     * @param \CCC\OfertasBundle\Entity\PresupuestoExcelComun $idPresupuesto
     * @return ObjetivosObra
     */
    public function setIdPresupuesto(\CCC\OfertasBundle\Entity\PresupuestoExcelComun $idPresupuesto = null)
    {
        $this->idPresupuesto = $idPresupuesto;
    
        return $this;
    }

    /**
     * Get idPresupuesto
     *
     * @return \CCC\OfertasBundle\Entity\PresupuestoExcelComun 
     */
    public function getIdPresupuesto()
    {
        return $this->idPresupuesto;
    }

    /**
     * Add gruposActividades
     *
     * @param \CCC\OfertasBundle\Entity\GrupoActividadesObjetivo $gruposActividades
     * @return ObjetivosObra
     */
    public function addGruposActividade(\CCC\OfertasBundle\Entity\GrupoActividadesObjetivo $gruposActividades)
    {
        $this->gruposActividades[] = $gruposActividades;
    
        return $this;
    }

    /**
     * Remove gruposActividades
     *
     * @param \CCC\OfertasBundle\Entity\GrupoActividadesObjetivo $gruposActividades
     */
    public function removeGruposActividade(\CCC\OfertasBundle\Entity\GrupoActividadesObjetivo $gruposActividades)
    {
        $this->gruposActividades->removeElement($gruposActividades);
    }

    /**
     * Get gruposActividades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGruposActividades()
    {
        return $this->gruposActividades;
    }
}