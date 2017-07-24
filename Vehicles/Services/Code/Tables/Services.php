<?php

namespace Fleets\Vehicles\Services\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 *
 * @ORM\Table(name="fleets_vehicles_services", indexes={@ORM\Index(name="vehicle_id_index", columns={"vehicle_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Services extends \Kazist\Table\BaseTable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="vehicle_id", type="integer", length=11, nullable=false)
     */
    protected $vehicle_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="odometer", type="integer", length=11, nullable=true)
     */
    protected $odometer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_date", type="date", nullable=true)
     */
    protected $service_date;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", length=11, nullable=true)
     */
    protected $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=true)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=true)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    protected $date_modified;


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
     * Set vehicleId
     *
     * @param integer $vehicleId
     *
     * @return Services
     */
    public function setVehicleId($vehicleId)
    {
        $this->vehicle_id = $vehicleId;

        return $this;
    }

    /**
     * Get vehicleId
     *
     * @return integer
     */
    public function getVehicleId()
    {
        return $this->vehicle_id;
    }

    /**
     * Set odometer
     *
     * @param integer $odometer
     *
     * @return Services
     */
    public function setOdometer($odometer)
    {
        $this->odometer = $odometer;

        return $this;
    }

    /**
     * Get odometer
     *
     * @return integer
     */
    public function getOdometer()
    {
        return $this->odometer;
    }

    /**
     * Set serviceDate
     *
     * @param \DateTime $serviceDate
     *
     * @return Services
     */
    public function setServiceDate($serviceDate)
    {
        $this->service_date = $serviceDate;

        return $this;
    }

    /**
     * Get serviceDate
     *
     * @return \DateTime
     */
    public function getServiceDate()
    {
        return $this->service_date;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Services
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Get modifiedBy
     *
     * @return integer
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }
    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        // Add your code here
    }
}

