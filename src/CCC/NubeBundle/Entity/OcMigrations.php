<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcMigrations
 *
 * @ORM\Table(name="oc_migrations")
 * @ORM\Entity
 */
class OcMigrations
{
    /**
     * @var string
     *
     * @ORM\Column(name="app", type="string", length=177, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $app;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=14, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $version;



    /**
     * Set app
     *
     * @param string $app
     * @return OcMigrations
     */
    public function setApp($app)
    {
        $this->app = $app;
    
        return $this;
    }

    /**
     * Get app
     *
     * @return string 
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return OcMigrations
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }
}