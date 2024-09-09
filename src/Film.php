<?php

class Film {
    //Attribut
    private string $titre;
    private string $realisateur;
    private DateTime $dateSortie;
    private array $acteurs = [];

    //Methodes
    //Constructeur permettant de créer des instances d'une classe
    //INSTANCIATION

    public function __construct (string $titre, string $realisateur, DateTime $dateSortie)
    {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
        $this->acteurs = [];
    }

    //Accesseur (getter)
    public function getTitre(): string
    {
        return $this->titre;
    }
    public function getRealisateur(): string
    {
        return $this->realisateur;
    }
    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }
    public function getAnciennete() : int
    {
         $dateJour = new DateTime();
         $intervalle = $dateJour->diff($this->dateSortie);
         return $intervalle->y;
    }

    //Mutateur (setter)
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }
    public function setRealisateur(string $realisateur): void
    {
        $this->realisateur = $realisateur;
    }
    public function setDateSortie(DateTime $dateSortie): void
    {
        $this->dateSortie = $dateSortie;
    }

    /**
     * @return Acteur[]
     */
    public function getActeurs(): array
    {
        return $this->acteurs;
    }
    public function ajouterActeurs(array $acteurs): void {

    }
}
