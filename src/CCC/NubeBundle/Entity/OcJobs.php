<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcJobs
 *
 * @ORM\Table(name="oc_jobs")
 * @ORM\Entity
 */
class OcJobs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255, nullable=false)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="argument", type="string", length=4000, nullable=false)
     */
    private $argument;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_run", type="integer", nullable=true)
     */
    private $lastRun;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_checked", type="integer", nullable=true)
     */
    private $lastChecked;

    /**
     * @var integer
     *
     * @ORM\Column(name="reserved_at", type="integer", nullable=true)
     */
    private $reservedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="execution_duration", type="integer", nullable=false)
     */
    private $executionDuration;



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
     * Set class
     *
     * @param string $class
     * @return OcJobs
     */
    public function setClass($class)
    {
        $this->class = $class;
    
        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set argument
     *
     * @param string $argument
     * @return OcJobs
     */
    public function setArgument($argument)
    {
        $this->argument = $argument;
    
        return $this;
    }

    /**
     * Get argument
     *
     * @return string 
     */
    public function getArgument()
    {
        return $this->argument;
    }

    /**
     * Set lastRun
     *
     * @param integer $lastRun
     * @return OcJobs
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;
    
        return $this;
    }

    /**
     * Get lastRun
     *
     * @return integer 
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set lastChecked
     *
     * @param integer $lastChecked
     * @return OcJobs
     */
    public function setLastChecked($lastChecked)
    {
        $this->lastChecked = $lastChecked;
    
        return $this;
    }

    /**
     * Get lastChecked
     *
     * @return integer 
     */
    public function getLastChecked()
    {
        return $this->lastChecked;
    }

    /**
     * Set reservedAt
     *
     * @param integer $reservedAt
     * @return OcJobs
     */
    public function setReservedAt($reservedAt)
    {
        $this->reservedAt = $reservedAt;
    
        return $this;
    }

    /**
     * Get reservedAt
     *
     * @return integer 
     */
    public function getReservedAt()
    {
        return $this->reservedAt;
    }

    /**
     * Set executionDuration
     *
     * @param integer $executionDuration
     * @return OcJobs
     */
    public function setExecutionDuration($executionDuration)
    {
        $this->executionDuration = $executionDuration;
    
        return $this;
    }

    /**
     * Get executionDuration
     *
     * @return integer 
     */
    public function getExecutionDuration()
    {
        return $this->executionDuration;
    }
}