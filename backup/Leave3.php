<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leave
 *
 * @ORM\Table(name="leaves")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LeaveRepository")
 */
class Leave
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(name="reason", type="text" , nullable=true)
     */
    private $reason;

    /**
     * @var string
     * @ORM\Column(name="refuse_reason", type="text" , nullable=true)
     */
    private $refuseReason;

    /**
     * @var \DateTime|null
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var Employee
     * @ORM\Column(name ="validation_status", type="text", nullable=true)
     */
    private $employee;

    /**
     * @var int
     * @ORM\JoinColumn(name ="leave_days_left", nullable=true)
     */
    private $leaveDaysLeft;
   
    /**
     * @var string
     * @ORM\Column(name ="validation_status", type="text", nullable=true)
     */
    private $validationStatus;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startDate.
     *
     * @param \DateTime|null $startDate
     *
     * @return Leave
     */
    public function setStartDate($startDate = null)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate.
     *
     * @param \DateTime|null $endDate
     *
     * @return Leave
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return Leave
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set motif.
     *
     * @param string $motif
     *
     * @return Leave
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif.
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set reason.
     *
     * @param string $reason
     *
     * @return Leave
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set refuseReason.
     *
     * @param string $refuseReason
     *
     * @return Leave
     */
    public function setRefuseReason($refuseReason)
    {
        $this->refuseReason = $refuseReason;

        return $this;
    }

    /**
     * Get refuseReason.
     *
     * @return string
     */
    public function getRefuseReason()
    {
        return $this->refuseReason;
    }

    /**
     * Set employee.
     *
     * @param \AppBundle\Entity\Employee|null $employee
     *
     * @return Leave
     */
    public function setEmployee(\AppBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee.
     *
     * @return \AppBundle\Entity\Employee|null
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set validationStatus.
     *
     * @param string|null $validationStatus
     *
     * @return Leave
     */
    public function setValidationStatus($validationStatus = null)
    {
        $this->validationStatus = $validationStatus;

        return $this;
    }

    /**
     * Get validationStatus.
     *
     * @return string|null
     */
    public function getValidationStatus()
    {
        return $this->validationStatus;
    }
}
