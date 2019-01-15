<?php 
// Trouver la date et l'heure actuelle :

echo('Aujourd\'hui nous sommes le : ');
echo date('d/m/Y h:i:s');

// Déclarer une variable et l'appeller :

$_age_ami = 22;
echo('<br>');
echo('Mon ami a : ' . $_age_ami . 'ans.');
echo('<br>');
// Calculs PHP :

$nombre1 = 3 * 4;
$nombre2 = 15 + 32;
$nombre3 = 30 / 3;

$resultat1 = $nombre1 + $nombre2;
$resultat2 = $nombre2 - $nombre3;
echo($resultat1);
echo('<br>');
echo($resultat2);

// Les conditions :
$age = 9;
echo('<br>');
if ($age <= 18){
    echo('Désolé vous êtes mineur');
}
echo('<br>');
echo('<br>');
// Les boucles :

// While :

$nombreBoucle = 1;
while($nombreBoucle <= 10)
{
    echo('Ceci est la ligne n°' . $nombreBoucle .  '<br>');
$nombreBoucle ++;
}

// Les Tableaux (Array) :

$prenoms = array ('Paul', 'Jacques', 'Guillaume', 'Tim');
echo $prenoms[3];
echo('<br>');

// Tableau case par case :

$Seikoo['age'] = 19;
$Seikoo['ville'] = 'Achères';
$Seikoo['prenom'] = 'Mathieu';
$Seikoo['nom'] = 'Braaah';

// Les Fonctions :

// str_replace = remplace un ou plusieurs caractères dans une chaine.

$remplacement = str_replace('b', 'p', 'bim bam boum');
echo $remplacement;

// str_shuffle = mélange les caractères dans une chaîne.

$melange = str_shuffle('Bonjour tout le monde');
echo('<br>');
echo $melange;
echo('<br>');
// strtolower = Convertir les caractères en minuscules. 

$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine = strtolower($chaine);
echo $chaine;
echo('<br>');
// strtoupper = Convertir les caractères en majuscules.
$chaine2 = 'je suis ravi de faire votre connaissance';
$chaine2 = strtoupper($chaine2);
echo $chaine2;
echo'<br>';
?>