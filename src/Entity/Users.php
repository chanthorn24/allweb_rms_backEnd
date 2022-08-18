<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $date_of_birth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $place_of_birth;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $phone;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salary;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $image_url;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $religion;

    /**
     * @ORM\Column(type="text")
     */
    private $address;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_married;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="date")
     */
    private $join_date;

    /**
     * @ORM\Column(type="integer")
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

    /**
     * @ORM\ManyToOne(targetEntity=EmpDepartments::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emp_department;

    /**
     * @ORM\ManyToOne(targetEntity=UserRoles::class, inversedBy="users")
     */
    private $user_role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    public function getPlaceOfBirth(): ?string
    {
        return $this->place_of_birth;
    }

    public function setPlaceOfBirth(string $place_of_birth): self
    {
        $this->place_of_birth = $place_of_birth;

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

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(?int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(?string $image_url): self
    {
        $this->image_url = $image_url;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getReligion(): ?string
    {
        return $this->religion;
    }

    public function setReligion(string $religion): self
    {
        $this->religion = $religion;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getIsMarried(): ?bool
    {
        return $this->is_married;
    }

    public function setIsMarried(bool $is_married): self
    {
        $this->is_married = $is_married;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getJoinDate(): ?\DateTimeInterface
    {
        return $this->join_date;
    }

    public function setJoinDate(\DateTimeInterface $join_date): self
    {
        $this->join_date = $join_date;

        return $this;
    }

    public function getIsDelete(): ?int
    {
        return $this->is_delete;
    }

    public function setIsDelete(int $is_delete): self
    {
        $this->is_delete = $is_delete;

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

    public function getRoles(): ?array
    {
        return array("role" => $this->user_role->getName());
    }

    public function getSalt(): ?string
    {
        return "";
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUsername(): ?string
    {
        // TODO: Implement getUsername() method.
        return (string) $this->getEmail();
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method string getUserIdentifier()
    }

    public function getEmpDepartment(): ?EmpDepartments
    {
        return $this->emp_department;
    }

    public function setEmpDepartment(?EmpDepartments $emp_department): self
    {
        $this->emp_department = $emp_department;

        return $this;
    }

    public function getUserRole(): ?UserRoles
    {
        return $this->user_role;
    }

    public function setUserRole(?UserRoles $user_role): self
    {
        $this->user_role = $user_role;

        return $this;
    }
}
