<?php

//Instancier la classe Film
require_once "/src/Film.php";

$film1 = new Film("CARS","Disney",
    DateTime::createFromFormat("d/m/Y", "2020/01/01"),);

echo $film1->getTitre();
echo PHP_EOL;
echo $film1->getAnciennete();

//$film1->ajouterActeurs("jean","dupond");
//Afficher le nom des acteurs
foreach ($film1->getActeurs() as $acteur) {
    echo $acteur->getNom();
    echo PHP_EOL;
}

//Afficher le noom des films
while (true) {
    echo "caca";
}
