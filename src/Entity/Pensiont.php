<?php

namespace App\Entity;

use App\Repository\PensiontRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PensiontRepository::class)]
class Pensiont
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;

    #[ORM\Column(length: 255)]
    private ?string $montant = null;

    #[ORM\ManyToOne(inversedBy: 'pensionts')]
    private ?User $user = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $createtAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): static
    {
        $this->montant = $montant;

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

    public function getCreatetAt(): ?\DateTimeInterface
    {
        return $this->createtAt;
    }

    public function setCreatetAt(\DateTimeInterface $createtAt): static
    {
        $this->createtAt = $createtAt;

        return $this;
    }
}
