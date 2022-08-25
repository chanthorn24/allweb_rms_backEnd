<?php

namespace App\Entity;

use App\Repository\BankAccountsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BankAccountsRepository::class)
 */
class BankAccounts
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
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_delete;

    /**
     * @ORM\ManyToOne(targetEntity=Banks::class, inversedBy="bankAccounts")
     */
    private $bank;

    /**
     * @ORM\OneToOne(targetEntity=Users::class, mappedBy="bank_account", cascade={"persist", "remove"})
     */
    private $users;

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

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

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

    public function getBank(): ?Banks
    {
        return $this->bank;
    }

    public function setBank(?Banks $bank): self
    {
        $this->bank = $bank;

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
            $this->users->setBankAccount(null);
        }

        // set the owning side of the relation if necessary
        if ($users !== null && $users->getBankAccount() !== $this) {
            $users->setBankAccount($this);
        }

        $this->users = $users;

        return $this;
    }
}
