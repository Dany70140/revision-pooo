<?php

require "./vendor/autoload.php";

use App\Championat;
use App\Entite\Equipe;
use App\Personne;

$psg = new Equipe("PSG");
$om = new Equipe("OM");
$ligue1 = new Championat("Ligue 1");
$dupond = new Personne("Dupond");
$durand = new Personne("Durand");

$ligue1->ajouterEquipe($psg);
$ligue1->ajouterEquipe($om);
echo "Il y a ". $ligue1->getNomEquipes() . " équipes en Ligue 1";

echo PHP_EOL;
$dupond->liker($psg);
$durand->liker($om);
echo $psg->getNom() . " a " . $psg->getNombreLikes() . " Likes 👍";
echo PHP_EOL;
dump($ligue1);