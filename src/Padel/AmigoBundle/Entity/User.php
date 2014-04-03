<?php

namespace Padel\AmigoBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="padel_fos_user")
 * @ORM\Entity
 */
class User extends BaseUser
{   
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * @ORM\Column(name="dni", type="string", length=10, nullable=false)
     */
    private $dni;

    
    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;
    
    /**
     * @var string
     * @ORM\Column(name="sunName", type="string", length=255, nullable=true)
     */
    private $surname;
    /**
     * @var string
     * @ORM\Column(name="mobilePhone", type="string", length=64, nullable=true)
     */
    private $mobilePhone;

    /**
     * @var boolean
     * @ORM\Column(name="lockEmail", type="boolean", nullable=true)
     */
    private $lockEmail;

    /**
     * @var string
     * @ORM\Column(name="nivel", type="string", length=10, nullable=true)
     */
    private $nivel;

    /**
     * @var boolean
     * @ORM\Column(name="nivelChecked", type="boolean", nullable=true)
     */
    private $nivelChecked;

    /**
     * @var string
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;
    
    /**
     * @var string
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    protected $image;
    
    /**
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumn(onDelete="set null")
     */
    protected $location;
    
    
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
     * Set dni
     *
     * @param string $dni
     * @return User
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }
    
    
    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return User
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string 
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set lockEmail
     *
     * @param boolean $lockEmail
     * @return User
     */
    public function setLockEmail($lockEmail)
    {
        $this->lockEmail = $lockEmail;

        return $this;
    }

    /**
     * Get lockEmail
     *
     * @return boolean 
     */
    public function getLockEmail()
    {
        return $this->lockEmail;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return User
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set nivelChecked
     *
     * @param boolean $nivelChecked
     * @return User
     */
    public function setNivelChecked($nivelChecked)
    {
        $this->nivelChecked = $nivelChecked;

        return $this;
    }

    /**
     * Get nivelChecked
     *
     * @return boolean 
     */
    public function getNivelChecked()
    {
        return $this->nivelChecked;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set location
     *
     * @param \Padel\AmigoBundle\Entity\Location $location
     * @return User
     */
    public function setLocation(\Padel\AmigoBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \Padel\AmigoBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }
}