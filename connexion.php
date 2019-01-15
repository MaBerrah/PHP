<?php
if ($_POST){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8' , 'root',''; array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getmessage());
    }
    if($_POST){
    $query = $bdd->prepare("INSERT INTRO messages (pseudo, message, date_enregistrement) VALUES (:pseudo, :message, NOW())");
    $query->execute(array(
        ':pseudo' => htmlspecialchars($_POST['pseudo']),
        ':message' => htmlspecialchars($_POST['message']),
    ));
    }
    $query2 = $bdd->query('SELECT pseudo, message, date_enregistrement FROM messages');

    while($reponses = $query2->fetch()){
        $content .= 'Message de : ' . $reponses['pseudo'] . '<br>' . 'contenu du message : ' . $reponses['message'] . '<br>' . "Date du message : " . $reponses['date_enregistrement'] . "<br>";
    }
}
?>
<?php echo '<fieldset>'.$content . "</fieldset>"?>