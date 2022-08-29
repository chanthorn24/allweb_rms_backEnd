<?php

namespace App\Entity;

use App\Repository\FamilyRelationshipsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilyRelationshipsRepository::class)
 */
class FamilyRelationships
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
     * @ORM\OneToMany(targetEntity=EmpFamilies::class, mappedBy="family_relationship")
     */
    private $empFamilies;

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

    public function __construct()
    {
        $this->empFamilies = new ArrayCollection();
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
     * @return Collection<int, EmpFamilies>
     */
    public function getEmpFamilies(): Collection
    {
        return $this->empFamilies;
    }

    public function addEmpFamily(EmpFamilies $empFamily): self
    {
        if (!$this->empFamilies->contains($empFamily)) {
            $this->empFamilies[] = $empFamily;
            $empFamily->setFamilyRelationship($this);
        }

        return $this;
    }

    public function removeEmpFamily(EmpFamilies $empFamily): self
    {
        if ($this->empFamilies->removeElement($empFamily)) {
            // set the owning side to null (unless already changed)
            if ($empFamily->getFamilyRelationship() === $this) {
                $empFamily->setFamilyRelationship(null);
            }
        }

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
