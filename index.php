<?php

//Créer un tableau months et l'initialiser avec les valeurs suivantes

$mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];

//Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.

echo $mois[2];
echo "<br><br>";

//Avec le tableau de l'exercice , afficher la valeur de l'index 5.

echo $mois[5];
echo "<br><br>";

// Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

echo $mois[array_search("Aout", $mois)] = "Août";
echo "<br><br>";

//Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.

$dep = ["02" => "Aisne","59" => "Nord","60" => "Oise","62" => "Pas de Calais","80" => "Somme" ];

//Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.

echo $dep ["59"];
echo "<br><br>";

//Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.

$dep["51"] = "Marne"; 

//Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

foreach($mois as $liste) {
    echo $liste . "<br>";
}
echo "<br>";

//Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

foreach($dep as $liste) {
    echo $liste. "<br>";
}
echo "<br>";

//Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
//Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département

foreach($dep as $num => $liste) {
    echo "Le département " . $liste . " a le numéro " . $num . "<br>";
}