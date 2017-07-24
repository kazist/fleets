<?php

namespace Fleets\Vehicles\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicles
 *
 * @ORM\Table(name="fleets_vehicles", indexes={@ORM\Index(name="make_id_index", columns={"make_id"}), @ORM\Index(name="model_id_index", columns={"model_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Vehicles extends \Kazist\Table\BaseTable
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
     * @var string
     *
     * @ORM\Column(name="registration_no", type="string", length=255, nullable=false)
     */
    protected $registration_no;

    /**
     * @var integer
     *
     * @ORM\Column(name="make_id", type="integer", length=11, nullable=false)
     */
    protected $make_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="model_id", type="integer", length=11, nullable=false)
     */
    protected $model_id;

    /**
     * @var string
     *
     * @ORM\Column(name="chassis_no", type="string", length=255, nullable=true)
     */
    protected $chassis_no;

    /**
     * @var integer
     *
     * @ORM\Column(name="odometer", type="integer", length=11, nullable=true)
     */
    protected $odometer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchase_date", type="date", nullable=true)
     */
    protected $purchase_date;

    /**
     * @var integer
     *
     * @ORM\Column(name="doors", type="integer", length=11, nullable=true)
     */
    protected $doors;

    /**
     * @var integer
     *
     * @ORM\Column(name="seats", type="integer", length=11, nullable=true)
     */
    protected $seats;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    protected $color;

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
     * Set registrationNo
     *
     * @param string $registrationNo
     *
     * @return Vehicles
     */
    public function setRegistrationNo($registrationNo)
    {
        $this->registration_no = $registrationNo;

        return $this;
    }

    /**
     * Get registrationNo
     *
     * @return string
     */
    public function getRegistrationNo()
    {
        return $this->registration_no;
    }

    /**
     * Set makeId
     *
     * @param integer $makeId
     *
     * @return Vehicles
     */
    public function setMakeId($makeId)
    {
        $this->make_id = $makeId;

        return $this;
    }

    /**
     * Get makeId
     *
     * @return integer
     */
    public function getMakeId()
    {
        return $this->make_id;
    }

    /**
     * Set modelId
     *
     * @param integer $modelId
     *
     * @return Vehicles
     */
    public function setModelId($modelId)
    {
        $this->model_id = $modelId;

        return $this;
    }

    /**
     * Get modelId
     *
     * @return integer
     */
    public function getModelId()
    {
        return $this->model_id;
    }

    /**
     * Set chassisNo
     *
     * @param string $chassisNo
     *
     * @return Vehicles
     */
    public function setChassisNo($chassisNo)
    {
        $this->chassis_no = $chassisNo;

        return $this;
    }

    /**
     * Get chassisNo
     *
     * @return string
     */
    public function getChassisNo()
    {
        return $this->chassis_no;
    }

    /**
     * Set odometer
     *
     * @param integer $odometer
     *
     * @return Vehicles
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
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     *
     * @return Vehicles
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchase_date = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchase_date;
    }

    /**
     * Set doors
     *
     * @param integer $doors
     *
     * @return Vehicles
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;

        return $this;
    }

    /**
     * Get doors
     *
     * @return integer
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Set seats
     *
     * @param integer $seats
     *
     * @return Vehicles
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * Get seats
     *
     * @return integer
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Vehicles
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
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

