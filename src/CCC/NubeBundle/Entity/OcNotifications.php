<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcNotifications
 *
 * @ORM\Table(name="oc_notifications")
 * @ORM\Entity
 */
class OcNotifications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notification_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notificationId;

    /**
     * @var string
     *
     * @ORM\Column(name="app", type="string", length=32, nullable=false)
     */
    private $app;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=64, nullable=false)
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="object_type", type="string", length=64, nullable=false)
     */
    private $objectType;

    /**
     * @var string
     *
     * @ORM\Column(name="object_id", type="string", length=64, nullable=false)
     */
    private $objectId;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=64, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_parameters", type="text", nullable=true)
     */
    private $subjectParameters;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=64, nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="message_parameters", type="text", nullable=true)
     */
    private $messageParameters;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=4000, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="actions", type="text", nullable=true)
     */
    private $actions;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=4000, nullable=true)
     */
    private $icon;



    /**
     * Get notificationId
     *
     * @return integer 
     */
    public function getNotificationId()
    {
        return $this->notificationId;
    }

    /**
     * Set app
     *
     * @param string $app
     * @return OcNotifications
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
     * Set user
     *
     * @param string $user
     * @return OcNotifications
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return OcNotifications
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set objectType
     *
     * @param string $objectType
     * @return OcNotifications
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    
        return $this;
    }

    /**
     * Get objectType
     *
     * @return string 
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set objectId
     *
     * @param string $objectId
     * @return OcNotifications
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    
        return $this;
    }

    /**
     * Get objectId
     *
     * @return string 
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return OcNotifications
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set subjectParameters
     *
     * @param string $subjectParameters
     * @return OcNotifications
     */
    public function setSubjectParameters($subjectParameters)
    {
        $this->subjectParameters = $subjectParameters;
    
        return $this;
    }

    /**
     * Get subjectParameters
     *
     * @return string 
     */
    public function getSubjectParameters()
    {
        return $this->subjectParameters;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return OcNotifications
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set messageParameters
     *
     * @param string $messageParameters
     * @return OcNotifications
     */
    public function setMessageParameters($messageParameters)
    {
        $this->messageParameters = $messageParameters;
    
        return $this;
    }

    /**
     * Get messageParameters
     *
     * @return string 
     */
    public function getMessageParameters()
    {
        return $this->messageParameters;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return OcNotifications
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set actions
     *
     * @param string $actions
     * @return OcNotifications
     */
    public function setActions($actions)
    {
        $this->actions = $actions;
    
        return $this;
    }

    /**
     * Get actions
     *
     * @return string 
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return OcNotifications
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    
        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }
}