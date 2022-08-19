<?php

namespace App\Entity;

use App\Repository\EmpLeaveReasonsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpLeaveReasonsRepository::class)
 */
class EmpLeaveReasons
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
     * @ORM\OneToMany(targetEntity=EmpLeaves::class, mappedBy="emp_leave_reason")
     */
    private $empLeaves;

    public function __construct()
    {
        $this->empLeaves = new ArrayCollection();
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
     * @return Collection<int, EmpLeaves>
     */
    public function getEmpLeaves(): Collection
    {
        return $this->empLeaves;
    }

    public function addEmpLeaf(EmpLeaves $empLeaf): self
    {
        if (!$this->empLeaves->contains($empLeaf)) {
            $this->empLeaves[] = $empLeaf;
            $empLeaf->setEmpLeaveReason($this);
        }

        return $this;
    }

    public function removeEmpLeaf(EmpLeaves $empLeaf): self
    {
        if ($this->empLeaves->removeElement($empLeaf)) {
            // set the owning side to null (unless already changed)
            if ($empLeaf->getEmpLeaveReason() === $this) {
                $empLeaf->setEmpLeaveReason(null);
            }
        }

        return $this;
    }
}
