<?php

namespace App;

class Personne
{
    private $nom;

    /**
     * @param $nom
     */
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    public function liker($equipe) : void {
        //saucisson briocher
        $equipe->incrementerNombreLikes();
    }

}