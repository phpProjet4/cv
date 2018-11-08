<?php
session_start();


// rajouter une condition : si $_SESSION existe alors renvoyer directement à la page de consultation

?>
 <!-- importation feuille de style-->
 <link rel="stylesheet" href="public/css/main.css">

<p><a href="index.php?p=administrateur">administrateur</a></p>

<div id="connexion_form">
    <form action="pages/verification_login.php" method="POST">
        <div class="form-group">
            <label for="mail">Identifiant : </label>
            <input type="text" name="mail" id="mail" required placeholder="votre adresse mail"><br>
            <label for="mdp">Mot de passe : </label>
            <input type="password" name="mdp" id="mdp" required placeholder="votre mot de passe"><br>

            <input class='btn btn-warning btn_acces' type="submit" value="connexion">
        </div>
    </form>
    <span><a href="index.php?p=lost">Mot de passe oublié ?</a></span><br>
    <span id="messages_erreurs">
    <?php
        if(isset($_GET['message']) && $_GET['message'] == 1) {
            echo "Votre mail ou votre de passe sont incorrect";
        }
        elseif(isset($_GET['message']) && $_GET['message'] == 2) {
            echo "Vous n'avez pas encore reçu l'autorisation d'accès";
        } 
    ?>
    </span>
</div>

<span class="connexion_btn"><a class="btn btn-dark btn_acces" href="index.php?p=inscription" role="button">Créer un compte</a></span>

<p style="text-align: center; color: #FFF; margin-top: 50px;">Ce site est dédié aux entreprises souhaitant consulter les cv de nos étudiants</p>




    





    






    

    

