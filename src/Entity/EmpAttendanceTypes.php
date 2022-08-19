<?php

namespace App\Entity;

use App\Repository\EmpAttendanceTypesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpAttendanceTypesRepository::class)
 */
class EmpAttendanceTypes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_delete;

    /**
     * @ORM\OneToMany(targetEntity=EmpAttendances::class, mappedBy="emp_attendance_type")
     */
    private $empAttendances;

    public function __construct()
    {
        $this->empAttendances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    /**
     * @return Collection<int, EmpAttendances>
     */
    public function getEmpAttendances(): Collection
    {
        return $this->empAttendances;
    }

    public function addEmpAttendance(EmpAttendances $empAttendance): self
    {
        if (!$this->empAttendances->contains($empAttendance)) {
            $this->empAttendances[] = $empAttendance;
            $empAttendance->setEmpAttendanceType($this);
        }

        return $this;
    }

    public function removeEmpAttendance(EmpAttendances $empAttendance): self
    {
        if ($this->empAttendances->removeElement($empAttendance)) {
            // set the owning side to null (unless already changed)
            if ($empAttendance->getEmpAttendanceType() === $this) {
                $empAttendance->setEmpAttendanceType(null);
            }
        }

        return $this;
    }
}
