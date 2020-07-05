<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
class Annonce
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateannonce;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Voiture::class, inversedBy="annonces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $voiture;

    /**
     * @ORM\Column(type="date")
     */
    private $annee;

    /**
     * @ORM\Column(type="date")
     */
    private $misecirculation;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $carburant;

    /**
     * @ORM\Column(type="integer")
     */
    private $kilometrage;

    /**
     * @ORM\ManyToOne(targetEntity=Localisation::class, inversedBy="annonces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $localite;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="annonces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $proprietaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateannonce(): ?\DateTimeInterface
    {
        return $this->dateannonce;
    }

    public function setDateannonce(\DateTimeInterface $dateannonce): self
    {
        $this->dateannonce = $dateannonce;

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

    public function getVoiture(): ?Voiture
    {
        return $this->voiture;
    }

    public function setVoiture(?Voiture $voiture): self
    {
        $this->voiture = $voiture;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->annee;
    }

    public function setAnnee(\DateTimeInterface $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getMisecirculation(): ?\DateTimeInterface
    {
        return $this->misecirculation;
    }

    public function setMisecirculation(\DateTimeInterface $misecirculation): self
    {
        $this->misecirculation = $misecirculation;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->carburant;
    }

    public function setCarburant(string $carburant): self
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getLocalite(): ?Localisation
    {
        return $this->localite;
    }

    public function setLocalite(?Localisation $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getProprietaire(): ?Utilisateur
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?Utilisateur $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }
}
