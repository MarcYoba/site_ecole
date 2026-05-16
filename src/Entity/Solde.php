<?php

namespace App\Entity;

use App\Repository\SoldeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoldeRepository::class)]
class Solde
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'soldes')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'soldes')]
    private ?Eleve $eleve = null;

    #[ORM\ManyToOne(inversedBy: 'soldes')]
    private ?Classe $classe = null;

    #[ORM\Column]
    private ?float $montant = null;

    #[ORM\Column]
    private ?float $avance = null;

    #[ORM\Column]
    private ?float $reste = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $createtAt = null;

    #[ORM\Column(length: 255)]
    private ?string $typepaiement = null;

    #[ORM\Column(length: 255)]
    private ?string $tranche = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAvance(): ?float
    {
        return $this->avance;
    }

    public function setAvance(float $avance): static
    {
        $this->avance = $avance;

        return $this;
    }

    public function getReste(): ?float
    {
        return $this->reste;
    }

    public function setReste(float $reste): static
    {
        $this->reste = $reste;

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

    public function getTypepaiement(): ?string
    {
        return $this->typepaiement;
    }

    public function setTypepaiement(string $typepaiement): static
    {
        $this->typepaiement = $typepaiement;

        return $this;
    }

    public function getTranche(): ?string
    {
        return $this->tranche;
    }

    public function setTranche(string $tranche): static
    {
        $this->tranche = $tranche;

        return $this;
    }
}
