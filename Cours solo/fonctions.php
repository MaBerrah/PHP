<?php
// Trouver la date et l'heure actuelle :

$jour = date('d');
$mois = date('m');
$annee = date ('Y');

$heure = date('H');
$minute = date('i');

echo("Bonjour aujourd'hui nous sommes le : " .$jour . '/'.$mois."/".$annee. " et il est : ". $heure .":". $minute.".");

echo'<br>';

// Passer de minuscule à MAJUSCULE :
$majuscule = 'je suis passé de minuscule à majuscule';
$majuscule = strtoupper($majuscule);
echo $majuscule;

echo'<br>';

// Passer de MAJUSCULE à minuscule :
$minuscule = 'JE SUIS PASSE DE MAJUSCULE A MINUSCULE !!!';
$minuscule = strtolower($minuscule);
echo $minuscule;

echo'<br>';

// Mélanger les lettres dans une chaîne de caractères :

$melange = 'Bonjour tout le monde !';
$melange = str_shuffle($melange);
echo $melange;

echo"<br>";

// Dire bonjour + prenom :
$nom = "Mathieu";
function DireBonjour($nom){
    echo ('Bonjour ' . $nom);
}
DireBonjour('Mathieu')
?>