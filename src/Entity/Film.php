<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
#[UniqueEntity('name')]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $realisateur = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $duree = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $acteursPrincipaux = null;

    #[ORM\OneToMany(mappedBy: 'film', targetEntity: Commentaire::class)]
    private Collection $commentaires;

    #[ORM\Column(length: 255)]
    private ?string $iframePath = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $imagePath = null;

    #[ORM\Column(nullable: true)]
    private ?int $notes = null;

    #[ORM\Column(nullable: true)]
    private ?int $nb_notes = null;




    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->notes = 0;
        $this->nbNotes = 0;
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

    public function setDescription(string $description): self
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

    public function setGenre(string $genre): self
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
        return $this->acteursPrincipaux;
    }

    public function setActeursPrincipaux(string $acteursPrincipaux): self
    {
        $this->acteursPrincipaux = $acteursPrincipaux;

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
            $commentaire->setFilm($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getFilm() === $this) {
                $commentaire->setFilm(null);
                $note = $commentaire->getNote();
                $this->notes -= $note;
                $this->nb_notes -= 1;
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Note>
     */
    public function getNotes(): ?int
    {
        return $this->notes;
    }


    public function getIframePath(): ?string
    {
        return $this->iframePath;
    }

    public function setIframePath(string $iframePath): void
    {
        $this->iframePath = $iframePath;
    }

    public
    function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public
    function setImagePath(?string $imagePath): self
    {
        $this->imagePath = $imagePath;


        return $this;
    }

    public function setInitNotes(?int $notes): void
    {
        $this->notes = $notes;
    }

    public function setInitNbNotes(?int $nbNotes): void
    {
        $this->nb_notes = $nbNotes;
    }

    public function setNotes(?int $notes): void
    {
        $this->notes += $notes;

    }

    public function getNbNotes(): ?int
    {
        return $this->nb_notes;
    }

    public function setNbNotes(): void
    {
        $this->nb_notes +=1;
    }

    public function addNote(int $note){
        $this->setNotes($note);
        $this->setNbNotes();
    }

}
