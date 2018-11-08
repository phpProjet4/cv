<?php
session_start();



require '../app/Autoloader.php';
Autoloader::register();




// requête préparé pour vérifier l'identité de la personne qui se connecte
$resultat2 = App::getDb()->prepare('SELECT * FROM entreprises WHERE mail = ? AND mot_de_passe = ?', array($_POST['mail'],$_POST['mdp']));



if(!empty($resultat2) && $resultat2[0]['autorisation'] === '0') {
    header('location:../index.php?message=2');
} else if (!empty($resultat2) && $resultat2[0]['autorisation'] === '1') {
    $_SESSION['mail'] = $_POST['mail'];
    header('location:../index.php?p=consultation');
} else {
    header('location:../index.php?message=1');
}







?>