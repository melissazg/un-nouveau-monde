<?php

namespace App\Entity;

use App\Repository\MusiqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusiqueRepository::class)]
class Musique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $realisateur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $duree = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $genre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $acteurs_principaux = null;

    #[ORM\Column(length: 255)]
    private ?string $image_path = null;

    #[ORM\Column(length: 255)]
    private ?string $iframe_path = null;

    #[ORM\Column]
    private ?int $notes = null;

    #[ORM\Column]
    private ?int $nb_notes = null;

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

    public function getRealisateur(): ?string
    {
        return $this->realisateur;
    }

    public function setRealisateur(string $realisateur): self
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getActeursPrincipaux(): ?string
    {
        return $this->acteurs_principaux;
    }

    public function setActeursPrincipaux(string $acteurs_principaux): self
    {
        $this->acteurs_principaux = $acteurs_principaux;

        return $this;
    }

    public function getimage_path(): ?string
    {
        return $this->image_path;
    }

    public function setImagePath(string $image_path): self
    {
        $this->image_path = $image_path;

        return $this;
    }

    public function getIframePath(): ?string
    {
        return $this->iframe_path;
    }

    public function setIframePath(string $iframe_path): self
    {
        $this->iframe_path = $iframe_path;

        return $this;
    }

    public function getNotes(): ?int
    {
        return $this->notes;
    }

    public function setNotes(int $notes): void
    {
        $this->notes += $notes;
    }

    public function getNbNotes(): ?int
    {
        return $this->nb_notes;
    }

    public function setNbNotes(int $nb_notes): void
    {
        $this->nbNotes +=1;
    }

    public function setInitNotes(?int $notes): void
    {
        $this->notes = $notes;
    }

    public function setInitNbNotes(?int $nbNotes): void
    {
        $this->nb_notes = $nbNotes;
    }

    public function addNote(int $note){
        $this->setNotes($note);
    }

    public function __toString(): string
    {
        return $this->getName();
    }

}
