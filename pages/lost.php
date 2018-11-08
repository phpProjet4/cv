 <!-- importation feuille de style-->
 <link rel="stylesheet" href="public/css/main.css">



<div class="container">
    <p>Veuillez remplir les champs suivant afin de renouveller votre mot de passe</p>
    <div id="connexion_form">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="ancien_mdp">ancien mot de passe :</label>
                <input type="text" name="ancien_mdp" id="ancien_mdp"><br>
                <label for="new_mdp">nouveau mot de passe :</label>
                <input type="text" name="new_mdp" id="new_mdp"><br>
                <label for="newConfirm_mdp">confirmer votre nouveau mot de passe :</label>
                <input type="text" name="newConfirm_mdp" id="newConfirm_mdp"><br>

                <input class="btn btn-warning" type="submit" value="valider">
            </div>
        </form>
    </div>
</div>