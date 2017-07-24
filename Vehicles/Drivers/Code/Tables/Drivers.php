<?php

namespace Fleets\Vehicles\Drivers\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Drivers
 *
 * @ORM\Table(name="fleets_vehicles_drivers", indexes={@ORM\Index(name="driver_id_index", columns={"driver_id"}), @ORM\Index(name="vehicle_id_index", columns={"vehicle_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Drivers extends \Kazist\Table\BaseTable
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
     * @ORM\Column(name="driver_id", type="integer", length=11, nullable=false)
     */
    protected $driver_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="vehicle_id", type="integer", length=11, nullable=false)
     */
    protected $vehicle_id;

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
     * Set driverId
     *
     * @param integer $driverId
     *
     * @return Drivers
     */
    public function setDriverId($driverId)
    {
        $this->driver_id = $driverId;

        return $this;
    }

    /**
     * Get driverId
     *
     * @return integer
     */
    public function getDriverId()
    {
        return $this->driver_id;
    }

    /**
     * Set vehicleId
     *
     * @param integer $vehicleId
     *
     * @return Drivers
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

