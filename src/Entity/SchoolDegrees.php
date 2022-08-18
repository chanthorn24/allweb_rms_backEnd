<?php

namespace App\Entity;

use App\Repository\SchoolDegreesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SchoolDegreesRepository::class)
 */
class SchoolDegrees
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
     * @ORM\OneToMany(targetEntity=UserEducationDegrees::class, mappedBy="school_degree")
     */
    private $userEducationDegrees;

    public function __construct()
    {
        $this->userEducationDegrees = new ArrayCollection();
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
     * @return Collection<int, UserEducationDegrees>
     */
    public function getUserEducationDegrees(): Collection
    {
        return $this->userEducationDegrees;
    }

    public function addUserEducationDegree(UserEducationDegrees $userEducationDegree): self
    {
        if (!$this->userEducationDegrees->contains($userEducationDegree)) {
            $this->userEducationDegrees[] = $userEducationDegree;
            $userEducationDegree->setSchoolDegree($this);
        }

        return $this;
    }

    public function removeUserEducationDegree(UserEducationDegrees $userEducationDegree): self
    {
        if ($this->userEducationDegrees->removeElement($userEducationDegree)) {
            // set the owning side to null (unless already changed)
            if ($userEducationDegree->getSchoolDegree() === $this) {
                $userEducationDegree->setSchoolDegree(null);
            }
        }

        return $this;
    }
}
