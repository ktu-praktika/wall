<?php

namespace Nfq\CarsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity
 */
class Car
{
    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=45, nullable=true)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="power", type="integer", nullable=true)
     */
    private $power;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Nfq\CarsBundle\Entity\Vendor
     *
     * @ORM\ManyToOne(targetEntity="Nfq\CarsBundle\Entity\Vendor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vendor_id", referencedColumnName="id")
     * })
     */
    private $vendor;



    /**
     * Set model
     *
     * @param string $model
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;
    
        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set power
     *
     * @param integer $power
     * @return Car
     */
    public function setPower($power)
    {
        $this->power = $power;
    
        return $this;
    }

    /**
     * Get power
     *
     * @return integer 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Car
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set vendor
     *
     * @param \Nfq\CarsBundle\Entity\Vendor $vendor
     * @return Car
     */
    public function setVendor(\Nfq\CarsBundle\Entity\Vendor $vendor = null)
    {
        $this->vendor = $vendor;
    
        return $this;
    }

    /**
     * Get vendor
     *
     * @return \Nfq\CarsBundle\Entity\Vendor 
     */
    public function getVendor()
    {
        return $this->vendor;
    }
}