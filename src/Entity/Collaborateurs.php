<?php

namespace App\Entity;

<<<<<<<< HEAD:src/Entity/Collaborateurs.php
use App\Repository\CollaborateursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CollaborateursRepository::class)]
class Collaborateurs
========
use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
>>>>>>>> catalogue:src/Entity/Client.php
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $Job = null;

    #[ORM\Column(type: Types::TEXT)]
<<<<<<<< HEAD:src/Entity/Collaborateurs.php
    private ?string $email = null;
========
    #[Assert\Email( message: 'The email {{ value }} is not a valid email.')]
    private ?string $Mail = null;
>>>>>>>> catalogue:src/Entity/Client.php

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $telephoneNumber = null;

<<<<<<<< HEAD:src/Entity/Collaborateurs.php
========
    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Url]
    private ?string $profilPicture = null;

    #[ORM\OneToMany(mappedBy: 'clients', targetEntity: Commentaire::class, orphanRemoval: true)]
    private Collection $commentaires;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Note::class, orphanRemoval: true)]
    private Collection $notes;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->notes = new ArrayCollection();
    }

>>>>>>>> catalogue:src/Entity/Client.php
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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->Job;
    }

    public function setJob(string $Job): self
    {
        $this->Job = $Job;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getTelephoneNumber(): ?string
    {
        return $this->telephoneNumber;
    }

    public function setTelephoneNumber(string $telephoneNumber): self
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }
<<<<<<<< HEAD:src/Entity/Collaborateurs.php
========

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getProfilPicture(): ?string
    {
        return $this->profilPicture;
    }

    public function setProfilPicture(?string $profilPicture): self
    {
        $this->profilPicture = $profilPicture;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setClients($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getClients() === $this) {
                $commentaire->setClients(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Note>
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Note $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes->add($note);
            $note->setClient($this);
        }

        return $this;
    }

    public function removeNote(Note $note): self
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getClient() === $this) {
                $note->setClient(null);
            }
        }

        return $this;
    }
>>>>>>>> catalogue:src/Entity/Client.php
}
