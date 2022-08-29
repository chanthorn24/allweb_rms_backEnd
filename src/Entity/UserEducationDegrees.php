<?php

namespace App\Entity;

use App\Repository\UserEducationDegreesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserEducationDegreesRepository::class)
 */
class UserEducationDegrees
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
    private $school;

    /**
     * @ORM\ManyToOne(targetEntity=SchoolDegrees::class, inversedBy="userEducationDegrees")
     */
    private $school_degree;

    /**
     * @ORM\OneToOne(targetEntity=Users::class, mappedBy="user_education_degree", cascade={"persist", "remove"})
     */
    private $users;

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

    public function getSchool(): ?string
    {
        return $this->school;
    }

    public function setSchool(string $school): self
    {
        $this->school = $school;

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

    public function getSchoolDegree(): ?SchoolDegrees
    {
        return $this->school_degree;
    }

    public function setSchoolDegree(?SchoolDegrees $school_degree): self
    {
        $this->school_degree = $school_degree;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        // unset the owning side of the relation if necessary
        if ($users === null && $this->users !== null) {
            $this->users->setUserEducationDegree(null);
        }

        // set the owning side of the relation if necessary
        if ($users !== null && $users->getUserEducationDegree() !== $this) {
            $users->setUserEducationDegree($this);
        }

        $this->users = $users;

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
