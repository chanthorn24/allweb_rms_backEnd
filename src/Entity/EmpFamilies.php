<?php

namespace App\Entity;

use App\Repository\EmpFamiliesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpFamiliesRepository::class)
 */
class EmpFamilies
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
     * @ORM\Column(type="string", length=50)
     */
    private $phone;

    /**
     * @ORM\ManyToOne(targetEntity=FamilyRelationships::class, inversedBy="empFamilies")
     */
    private $family_relationship;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="empFamilies")
     */
    private $employee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_delete;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $modified;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

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

    public function getFamilyRelationship(): ?FamilyRelationships
    {
        return $this->family_relationship;
    }

    public function setFamilyRelationship(?FamilyRelationships $family_relationship): self
    {
        $this->family_relationship = $family_relationship;

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

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(?\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getModified(): ?\DateTimeInterface
    {
        return $this->modified;
    }

    public function setModified(?\DateTimeInterface $modified): self
    {
        $this->modified = $modified;

        return $this;
    }
}
