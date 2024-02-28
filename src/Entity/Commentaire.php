<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Contenu_C = null;


    #[ORM\ManyToOne(inversedBy: 'Commentaires')]
    private ?Publication $publication = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?User $ID_User = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuC(): ?string
    {
        return $this->Contenu_C;
    }

    public function setContenuC(string $Contenu_C): static
    {
        $this->Contenu_C = $Contenu_C;

        return $this;
    }

    public function getPublication(): ?Publication
    {
        return $this->publication;
    }

    public function setPublication(?Publication $publication): static
    {
        $this->publication = $publication;

        return $this;
    }

    public function getIDUser(): ?User
    {
        return $this->ID_User;
    }

    public function setIDUser(?User $ID_User): static
    {
        $this->ID_User = $ID_User;

        return $this;
    }
}