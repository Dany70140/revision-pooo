<?php

namespace App;

use App\Entite\Equipe;

class Championat {
    private string $nom;
    //Association avec équipe (one to many)
    private array $equipes = [];

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function ajouterEquipe(Equipe $equipe) : void {
        $this->equipes[] = $equipe;
    }

    public function getNomEquipes(): int
    {
        return count($this->equipes);
    }

}