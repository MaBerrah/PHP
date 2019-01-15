<?php
require_once('inc/init.inc.php');


$resultat = executeRequete("SELECT * FROM produit WHERE id_produit = '$_GET[id_produit]'");

if($resultat->rowCount() <= 0) { header('location:boutique.php'); exit();}


$produit = $resultat->fetch(PDO::FETCH_ASSOC);
$content .= "<h2>" . $produit['titre'] . "</h2>";
$content .= "<p>Catégorie : " . $produit['categorie'] . "</p>";
$content .= "<p>Taille : " . $produit['taille'] . "</p>";
$content .= "<p>Couleur : " . $produit['couleur'] . "</p>";
$content .= '<p><img src="' . $produit['photo'] . '" width="70" height="70">' . "</p>";
$content .= "<p><i>Description : " . $produit['description'] . "</i></p>";

if($produit['stock'] > 0){
    $content .= "<p><i>Nombre produit disponible : " . $produit['stock'] . "</i></p>";
    $content .= "<select>";
    $quantite = $produit['stock'];
    for($i = 1; $i <= $quantite; $i++)
    {
        $content .= "<option>" . $i . "</option>";
    }
    $content .= "</select>";
    $content .= "<button>Ajouter au panier</button><br>";
} else {
    $content .= "Rupture de stock !";
}
$content = "<input type='hidden name='id_produit' value='7'>"
$content ='<input type "submit" name="ajouter_panier" value="Ajouter au panier"><br>'
$content='</form>'

$content .= '<a href="boutique.php?categorie='.$produit['categorie'].'">Retour vers la séléction de ' . $produit['categorie'] .'</a>';
echo $content;

require_once('inc/bas.inc.php');

function creationPanier(){
    
    $_SESSION['panier'] = array();
    $_SESSION['panier']['titre'] = array();
    $_SESSION['panier']['id_produit'] = array();
    $_SESSION['panier']['quantite'] = array();
    $_SESSION['panier']['prix'] = array();
}
function ajouterProduitDansPanier($titre,$id_produit,$quantite,$prix){
creationPanier();
}
$position_produit = array_search($id_produit,$_SESSION['panier']['id_produit']);
if($position_produit !== false){
    $_SESSION['panier']['quantite'][$position_produit] += $quantite;
}
function montantTotal(){
    $total = 0;
    for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++){
        $total += $_SESSION['panier']['prix'][$i];
    }
    return round($total, 2);
}

function retirerProduitPanier($id_produit_a_supprimer){
    $position_produit = array_search($id_produit, $_SESSION['panier']['id_produit']);
    if($position_produit !== false){
        array_splice($_SESSION['panier']['titre'], $position_produit, 1);
        array_splice($_SESSION['panier']['id_produit'], $position_produit, 1);
        array_splice($_SESSION['panier']['quantite'], $position_produit, 1);
        array_splice($_SESSION['panier']['prix'], $position_produit, 1);
    }
}
require_once('inc/init.inc.php');

// Ajout panier
if(isset($_POST['ajout_panier'])){
$resultat = executeRequete("SELECT * FROM produit WHERE id_produit = '$_POST[id_produit]'")
}
echo "<tr><td colspan='5'><a href="?action=vider">Vider mon panier</a></td></tr>;"

// Vider panier

if(isset($_GET['action']))
?>