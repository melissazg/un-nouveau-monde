<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $date = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]

    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;
    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Film $film = null;
    #[ORM\Column(nullable: false)]
    private ?string $content = null;
    #[ORM\Column(nullable: true)]
    private ?int $note = null;
    public function __construct()
    {
        $this->date = new \DateTimeImmutable();
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }
    public function setDate(\DateTimeImmutable $date): self
    {
        $this->date = $date;

        return $this;
    }
    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getFilm(): ?Film
    {
        return $this->film;
    }

    public function setFilm(?Film $film): self
    {
        $this->film = $film;

        return $this;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }



}
