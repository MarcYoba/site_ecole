<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Produit::class)]
    private Collection $produits;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Mobile::class)]
    private Collection $mobiles;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Classe::class)]
    private Collection $classes;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Eleve::class)]
    private Collection $eleves;

    #[ORM\Column(nullable: true)]
    private ?int $ecole = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Matiere::class)]
    private Collection $matieres;

    #[ORM\OneToMany(mappedBy: 'User', targetEntity: Note::class)]
    private Collection $notes;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Enseignant::class)]
    private Collection $enseignants;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Solde::class)]
    private Collection $soldes;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Pensiont::class)]
    private Collection $pensionts;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Tenue::class)]
    private Collection $tenues;

    #[ORM\Column(length: 255)]
    private ?string $langue = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Caisse::class)]
    private Collection $caisses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Examen::class)]
    private Collection $examens;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->mobiles = new ArrayCollection();
        $this->classes = new ArrayCollection();
        $this->eleves = new ArrayCollection();
        $this->matieres = new ArrayCollection();
        $this->notes = new ArrayCollection();
        $this->enseignants = new ArrayCollection();
        $this->soldes = new ArrayCollection();
        $this->pensionts = new ArrayCollection();
        $this->tenues = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->examens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): static
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setUser($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getUser() === $this) {
                $produit->setUser(null);
            }
        }

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection<int, Mobile>
     */
    public function getMobiles(): Collection
    {
        return $this->mobiles;
    }

    public function addMobile(Mobile $mobile): static
    {
        if (!$this->mobiles->contains($mobile)) {
            $this->mobiles->add($mobile);
            $mobile->setUser($this);
        }

        return $this;
    }

    public function removeMobile(Mobile $mobile): static
    {
        if ($this->mobiles->removeElement($mobile)) {
            // set the owning side to null (unless already changed)
            if ($mobile->getUser() === $this) {
                $mobile->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Classe>
     */
    public function getClasses(): Collection
    {
        return $this->classes;
    }

    public function addClass(Classe $class): static
    {
        if (!$this->classes->contains($class)) {
            $this->classes->add($class);
            $class->setUser($this);
        }

        return $this;
    }

    public function removeClass(Classe $class): static
    {
        if ($this->classes->removeElement($class)) {
            // set the owning side to null (unless already changed)
            if ($class->getUser() === $this) {
                $class->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Eleve>
     */
    public function getEleves(): Collection
    {
        return $this->eleves;
    }

    public function addElefe(Eleve $elefe): static
    {
        if (!$this->eleves->contains($elefe)) {
            $this->eleves->add($elefe);
            $elefe->setUser($this);
        }

        return $this;
    }

    public function removeElefe(Eleve $elefe): static
    {
        if ($this->eleves->removeElement($elefe)) {
            // set the owning side to null (unless already changed)
            if ($elefe->getUser() === $this) {
                $elefe->setUser(null);
            }
        }

        return $this;
    }

    public function getEcole(): ?int
    {
        return $this->ecole;
    }

    public function setEcole(?int $ecole): static
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * @return Collection<int, Matiere>
     */
    public function getMatieres(): Collection
    {
        return $this->matieres;
    }

    public function addMatiere(Matiere $matiere): static
    {
        if (!$this->matieres->contains($matiere)) {
            $this->matieres->add($matiere);
            $matiere->setUser($this);
        }

        return $this;
    }

    public function removeMatiere(Matiere $matiere): static
    {
        if ($this->matieres->removeElement($matiere)) {
            // set the owning side to null (unless already changed)
            if ($matiere->getUser() === $this) {
                $matiere->setUser(null);
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
            $note->setUser($this);
        }

        return $this;
    }

    public function removeNote(Note $note): static
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getUser() === $this) {
                $note->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Enseignant>
     */
    public function getEnseignants(): Collection
    {
        return $this->enseignants;
    }

    public function addEnseignant(Enseignant $enseignant): static
    {
        if (!$this->enseignants->contains($enseignant)) {
            $this->enseignants->add($enseignant);
            $enseignant->setUser($this);
        }

        return $this;
    }

    public function removeEnseignant(Enseignant $enseignant): static
    {
        if ($this->enseignants->removeElement($enseignant)) {
            // set the owning side to null (unless already changed)
            if ($enseignant->getUser() === $this) {
                $enseignant->setUser(null);
            }
        }

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
            $solde->setUser($this);
        }

        return $this;
    }

    public function removeSolde(Solde $solde): static
    {
        if ($this->soldes->removeElement($solde)) {
            // set the owning side to null (unless already changed)
            if ($solde->getUser() === $this) {
                $solde->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Pensiont>
     */
    public function getPensionts(): Collection
    {
        return $this->pensionts;
    }

    public function addPensiont(Pensiont $pensiont): static
    {
        if (!$this->pensionts->contains($pensiont)) {
            $this->pensionts->add($pensiont);
            $pensiont->setUser($this);
        }

        return $this;
    }

    public function removePensiont(Pensiont $pensiont): static
    {
        if ($this->pensionts->removeElement($pensiont)) {
            // set the owning side to null (unless already changed)
            if ($pensiont->getUser() === $this) {
                $pensiont->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tenue>
     */
    public function getTenues(): Collection
    {
        return $this->tenues;
    }

    public function addTenue(Tenue $tenue): static
    {
        if (!$this->tenues->contains($tenue)) {
            $this->tenues->add($tenue);
            $tenue->setUser($this);
        }

        return $this;
    }

    public function removeTenue(Tenue $tenue): static
    {
        if ($this->tenues->removeElement($tenue)) {
            // set the owning side to null (unless already changed)
            if ($tenue->getUser() === $this) {
                $tenue->setUser(null);
            }
        }

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): static
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * @return Collection<int, Caisse>
     */
    public function getCaisses(): Collection
    {
        return $this->caisses;
    }

    public function addCaiss(Caisse $caiss): static
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses->add($caiss);
            $caiss->setUser($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): static
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getUser() === $this) {
                $caiss->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Examen>
     */
    public function getExamens(): Collection
    {
        return $this->examens;
    }

    public function addExamen(Examen $examen): static
    {
        if (!$this->examens->contains($examen)) {
            $this->examens->add($examen);
            $examen->setUser($this);
        }

        return $this;
    }

    public function removeExamen(Examen $examen): static
    {
        if ($this->examens->removeElement($examen)) {
            // set the owning side to null (unless already changed)
            if ($examen->getUser() === $this) {
                $examen->setUser(null);
            }
        }

        return $this;
    }
}
