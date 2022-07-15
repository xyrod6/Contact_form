<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\PersonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonRepository::class)]
class Person
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

	/**
    * [ORM\Column(length: 255)]
	*@Assert\NotBlank(message="Hiba! Kérjük töltsd ki az összes mezőt!")
	*/
    private ?string $name = null;

	/**
    * [ORM\Column(length: 255)]
	*@Assert\NotBlank(message="Hiba! Kérjük töltsd ki az összes mezőt!")
	*@Assert\Email
	*/
    private ?string $email = null;

	/**
    * [ORM\Column(length: 255)]
	*@Assert\NotBlank(message="Hiba! Kérjük töltsd ki az összes mezőt!")
	*/
    private ?string $message = null;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
