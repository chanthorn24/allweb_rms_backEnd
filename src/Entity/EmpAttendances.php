<?php

namespace App\Entity;

use App\Repository\EmpAttendancesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpAttendancesRepository::class)
 */
class EmpAttendances
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_delete;

    /**
     * @ORM\ManyToOne(targetEntity=EmpAttendanceTypes::class, inversedBy="empAttendances")
     */
    private $emp_attendance_type;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="empAttendances")
     */
    private $employee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsDelete(): ?bool
    {
        return $this->is_delete;
    }

    public function setIsDelete(bool $is_delete): self
    {
        $this->is_delete = $is_delete;

        return $this;
    }

    public function getEmpAttendanceType(): ?EmpAttendanceTypes
    {
        return $this->emp_attendance_type;
    }

    public function setEmpAttendanceType(?EmpAttendanceTypes $emp_attendance_type): self
    {
        $this->emp_attendance_type = $emp_attendance_type;

        return $this;
    }

    public function getEmployee(): ?Users
    {
        return $this->employee;
    }

    public function setEmployee(?Users $employee): self
    {
        $this->employee = $employee;

        return $this;
    }
}
