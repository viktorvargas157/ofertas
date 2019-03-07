<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TelefonosContacto
 *
 * @ORM\Table(name="telefonoscontacto")
 * @ORM\Entity
 */
class TelefonosContacto
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
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @ORM\ManyToOne(targetEntity="Contactos", inversedBy="telefonos")
     * @ORM\JoinColumn(name="idContacto", referencedColumnName="id")
     */
    private $idContacto;




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
     * Set telefono
     *
     * @param string $telefono
     * @return TelefonosContacto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set idContacto
     *
     * @param \CCC\OfertasBundle\Entity\Contactos $idContacto
     * @return TelefonosContacto
     */
    public function setIdContacto(\CCC\OfertasBundle\Entity\Contactos $idContacto = null)
    {
        $this->idContacto = $idContacto;
    
        return $this;
    }

    /**
     * Get idContacto
     *
     * @return \CCC\OfertasBundle\Entity\Contactos 
     */
    public function getIdContacto()
    {
        return $this->idContacto;
    }
}