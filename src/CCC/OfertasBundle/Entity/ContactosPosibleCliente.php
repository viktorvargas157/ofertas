<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactosPosibleCliente
 *
 * @ORM\Table(name="contactosposiblecliente")
 * @ORM\Entity
 */
class ContactosPosibleCliente
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable = true)
     */
    private $email;


    /**
     * @ORM\ManyToOne(targetEntity="PosibleCliente", inversedBy="contactos")
     * @ORM\JoinColumn(name="idPosibleCliente", referencedColumnName="id")
     */
    private $idPosibleCliente;

    /**
     * @ORM\OneToMany(targetEntity="TelefonosContactosPosibleCliente", mappedBy="idContacto", cascade={"persist", "remove"})
     */
    private $telefonos;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->telefonos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return ContactosPosibleCliente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ContactosPosibleCliente
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set idPosibleCliente
     *
     * @param \CCC\OfertasBundle\Entity\PosibleCliente $idPosibleCliente
     * @return ContactosPosibleCliente
     */
    public function setIdPosibleCliente(\CCC\OfertasBundle\Entity\PosibleCliente $idPosibleCliente = null)
    {
        $this->idPosibleCliente = $idPosibleCliente;
    
        return $this;
    }

    /**
     * Get idPosibleCliente
     *
     * @return \CCC\OfertasBundle\Entity\PosibleCliente 
     */
    public function getIdPosibleCliente()
    {
        return $this->idPosibleCliente;
    }

    /**
     * Add telefonos
     *
     * @param \CCC\OfertasBundle\Entity\TelefonosContactosPosibleCliente $telefonos
     * @return ContactosPosibleCliente
     */
    public function addTelefono(\CCC\OfertasBundle\Entity\TelefonosContactosPosibleCliente $telefonos)
    {
        $this->telefonos[] = $telefonos;
    
        return $this;
    }

    /**
     * Remove telefonos
     *
     * @param \CCC\OfertasBundle\Entity\TelefonosContactosPosibleCliente $telefonos
     */
    public function removeTelefono(\CCC\OfertasBundle\Entity\TelefonosContactosPosibleCliente $telefonos)
    {
        $this->telefonos->removeElement($telefonos);
    }

    /**
     * Get telefonos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }
}