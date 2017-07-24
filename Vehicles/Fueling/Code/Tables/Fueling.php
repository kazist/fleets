<?php

namespace Fleets\Vehicles\Fueling\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fueling
 *
 * @ORM\Table(name="fleets_vehicles_fueling", indexes={@ORM\Index(name="vehicle_id_index", columns={"vehicle_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Fueling extends \Kazist\Table\BaseTable
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
     * @ORM\Column(name="liter", type="integer", length=11, nullable=true)
     */
    protected $liter;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=11, scale=2, nullable=true)
     */
    protected $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="odometer", type="integer", length=11, nullable=true)
     */
    protected $odometer;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    protected $notes;

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
     * @return Fueling
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
     * Set liter
     *
     * @param integer $liter
     *
     * @return Fueling
     */
    public function setLiter($liter)
    {
        $this->liter = $liter;

        return $this;
    }

    /**
     * Get liter
     *
     * @return integer
     */
    public function getLiter()
    {
        return $this->liter;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Fueling
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set odometer
     *
     * @param integer $odometer
     *
     * @return Fueling
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
     * Set notes
     *
     * @param string $notes
     *
     * @return Fueling
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
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

