<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoActividadesObjetivo
 *
 * @ORM\Table(name="grupoactividadesobjetivo")
 * @ORM\Entity
 */
class GrupoActividadesObjetivo
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
     * @ORM\Column(name="codigo", type="string", length=255, nullable = true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=255)
     */
    private $grupo;

    /**
     * @ORM\ManyToOne(targetEntity="ObjetivosObra", inversedBy="gruposActividades")
     * @ORM\JoinColumn(name="idobjetivo", referencedColumnName="id")
     */
    private $idObjetivo;


    /**
     * @ORM\OneToMany(targetEntity="Actividades", mappedBy="idGrupo", cascade={"persist", "remove"})
     */
    private $actividades;




    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividades = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return GrupoActividadesObjetivo
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
     * Set grupo
     *
     * @param string $grupo
     * @return GrupoActividadesObjetivo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;
    
        return $this;
    }

    /**
     * Get grupo
     *
     * @return string 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set idObjetivo
     *
     * @param \CCC\OfertasBundle\Entity\ObjetivosObra $idObjetivo
     * @return GrupoActividadesObjetivo
     */
    public function setIdObjetivo(\CCC\OfertasBundle\Entity\ObjetivosObra $idObjetivo = null)
    {
        $this->idObjetivo = $idObjetivo;
    
        return $this;
    }

    /**
     * Get idObjetivo
     *
     * @return \CCC\OfertasBundle\Entity\ObjetivosObra 
     */
    public function getIdObjetivo()
    {
        return $this->idObjetivo;
    }

    /**
     * Add actividades
     *
     * @param \CCC\OfertasBundle\Entity\Actividades $actividades
     * @return GrupoActividadesObjetivo
     */
    public function addActividade(\CCC\OfertasBundle\Entity\Actividades $actividades)
    {
        $this->actividades[] = $actividades;
    
        return $this;
    }

    /**
     * Remove actividades
     *
     * @param \CCC\OfertasBundle\Entity\Actividades $actividades
     */
    public function removeActividade(\CCC\OfertasBundle\Entity\Actividades $actividades)
    {
        $this->actividades->removeElement($actividades);
    }

    /**
     * Get actividades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividades()
    {
        return $this->actividades;
    }
}