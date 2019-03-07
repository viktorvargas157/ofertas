<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesContratoN
 *
 * @ORM\Table(name="clientescontraton")
 * @ORM\Entity
 */
class ClientesContratoN
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
     * @ORM\Column(name="idcliente", type="integer")
     */
    private $idcliente;

    /**
     * @ORM\ManyToOne(targetEntity="ContratoN", inversedBy="idclientes")
     * @ORM\JoinColumn(name="idcontrato", referencedColumnName="id")
     */
    private $idcontrato;




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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return ClientesContratoN
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;
    
        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idcontrato
     *
     * @param \CCC\OfertasBundle\Entity\ContratoN $idcontrato
     * @return ClientesContratoN
     */
    public function setIdcontrato(\CCC\OfertasBundle\Entity\ContratoN $idcontrato = null)
    {
        $this->idcontrato = $idcontrato;
    
        return $this;
    }

    /**
     * Get idcontrato
     *
     * @return \CCC\OfertasBundle\Entity\ContratoN 
     */
    public function getIdcontrato()
    {
        return $this->idcontrato;
    }
}