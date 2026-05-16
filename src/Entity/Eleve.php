<?php

namespace App\Entity;

use App\Repository\EleveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EleveRepository::class)]
class Eleve
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $matricule = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $naissance = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $pere = null;

    #[ORM\Column(length: 255)]
    private ?string $mere = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'eleves')]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $sexe = null;

    #[ORM\ManyToOne(inversedBy: 'eleves')]
    private ?Classe $classe = null;

    #[ORM\OneToMany(mappedBy: 'eleve', targetEntity: Inscription::class)]
    private Collection $inscriptions;

    #[ORM\OneToMany(mappedBy: 'eleve', targetEntity: Note::class)]
    private Collection $notes;

    #[ORM\Column(length: 255)]
    private ?string $age = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $autoriseMere = null;

    #[ORM\Column(length: 255)]
    private ?string $autorisePere = null;

    #[ORM\Column(length: 255)]
    private ?string $professionMere = null;

    #[ORM\Column(length: 255)]
    private ?string $professionPere = null;

    #[ORM\Column(length: 255)]
    private ?string $telephoneMere = null;

    #[ORM\Column(length: 255)]
    private ?string $autreResponsable = null;

    #[ORM\Column(length: 255)]
    private ?string $fonction = null;

    #[ORM\Column(length: 255)]
    private ?string $telephoneResponsable = null;

    #[ORM\OneToMany(mappedBy: 'eleve', targetEntity: Solde::class)]
    private Collection $soldes;

    public function __construct()
    {
        $this->inscriptions = new ArrayCollection();
        $this->notes = new ArrayCollection();
        $this->soldes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNaissance(): ?\DateTimeInterface
    {
        return $this->naissance;
    }

    public function setNaissance(\DateTimeInterface $naissance): static
    {
        $this->naissance = $naissance;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPere(): ?string
    {
        return $this->pere;
    }

    public function setPere(string $pere): static
    {
        $this->pere = $pere;

        return $this;
    }

    public function getMere(): ?string
    {
        return $this->mere;
    }

    public function setMere(string $mere): static
    {
        $this->mere = $mere;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

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


    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

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

    /**
     * @return Collection<int, Inscription>
     */
    public function getInscriptions(): Collection
    {
        return $this->inscriptions;
    }

    public function addInscription(Inscription $inscription): static
    {
        if (!$this->inscriptions->contains($inscription)) {
            $this->inscriptions->add($inscription);
            $inscription->setEleve($this);
        }

        return $this;
    }

    public function removeInscription(Inscription $inscription): static
    {
        if ($this->inscriptions->removeElement($inscription)) {
            // set the owning side to null (unless already changed)
            if ($inscription->getEleve() === $this) {
                $inscription->setEleve(null);
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

    public function addNote(Note $note): static
    {
        if (!$this->notes->contains($note)) {
            $this->notes->add($note);
            $note->setEleve($this);
        }

        return $this;
    }

    public function removeNote(Note $note): static
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getEleve() === $this) {
                $note->setEleve(null);
            }
        }

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->Lieu;
    }

    public function setLieu(string $Lieu): static
    {
        $this->Lieu = $Lieu;

        return $this;
    }

    public function getAutoriseMere(): ?string
    {
        return $this->autoriseMere;
    }

    public function setAutoriseMere(string $autoriseMere): static
    {
        $this->autoriseMere = $autoriseMere;

        return $this;
    }

    public function getAutorisePere(): ?string
    {
        return $this->autorisePere;
    }

    public function setAutorisePere(string $autorisePere): static
    {
        $this->autorisePere = $autorisePere;

        return $this;
    }

    public function getProfessionMere(): ?string
    {
        return $this->professionMere;
    }

    public function setProfessionMere(string $professionMere): static
    {
        $this->professionMere = $professionMere;

        return $this;
    }

    public function getProfessionPere(): ?string
    {
        return $this->professionPere;
    }

    public function setProfessionPere(string $professionPere): static
    {
        $this->professionPere = $professionPere;

        return $this;
    }

    public function getTelephoneMere(): ?string
    {
        return $this->telephoneMere;
    }

    public function setTelephoneMere(string $telephoneMere): static
    {
        $this->telephoneMere = $telephoneMere;

        return $this;
    }

    public function getAutreResponsable(): ?string
    {
        return $this->autreResponsable;
    }

    public function setAutreResponsable(string $autreResponsable): static
    {
        $this->autreResponsable = $autreResponsable;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): static
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getTelephoneResponsable(): ?string
    {
        return $this->telephoneResponsable;
    }

    public function setTelephoneResponsable(string $telephoneResponsable): static
    {
        $this->telephoneResponsable = $telephoneResponsable;

        return $this;
    }

    /**
     * @return Collection<int, Solde>
     */
    public function getSoldes(): Collection
    {
        return $this->soldes;
    }

    public function addSolde(Solde $solde): static
    {
        if (!$this->soldes->contains($solde)) {
            $this->soldes->add($solde);
            $solde->setEleve($this);
        }

        return $this;
    }

    public function removeSolde(Solde $solde): static
    {
        if ($this->soldes->removeElement($solde)) {
            // set the owning side to null (unless already changed)
            if ($solde->getEleve() === $this) {
                $solde->setEleve(null);
            }
        }

        return $this;
    }
}
