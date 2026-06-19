<?php

namespace App\Entity;

use App\Repository\ExamenRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExamenRepository::class)]
class Examen
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'examens')]
    private ?Eleve $eleve = null;

    #[ORM\ManyToOne(inversedBy: 'examens')]
    private ?Classe $classe = null;

    #[ORM\Column]
    private ?float $montant = null;

    #[ORM\Column(length: 255)]
    private ?string $typepaiement = null;

    #[ORM\Column(length: 255)]
    private ?string $typeexamen = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $createtAt = null;

    #[ORM\ManyToOne(inversedBy: 'examens')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEleve(): ?Eleve
    {
        return $this->eleve;
    }

    public function setEleve(?Eleve $eleve): static
    {
        $this->eleve = $eleve;

        return $this;
    }

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): static
    {
        $this->classe = $classe;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getTypepaiement(): ?string
    {
        return $this->typepaiement;
    }

    public function setTypepaiement(string $typepaiement): static
    {
        $this->typepaiement = $typepaiement;

        return $this;
    }

    public function getTypeexamen(): ?string
    {
        return $this->typeexamen;
    }

    public function setTypeexamen(string $typeexamen): static
    {
        $this->typeexamen = $typeexamen;

        return $this;
    }

    public function getCreatetAt(): ?\DateTimeInterface
    {
        return $this->createtAt;
    }

    public function setCreatetAt(\DateTimeInterface $createtAt): static
    {
        $this->createtAt = $createtAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
