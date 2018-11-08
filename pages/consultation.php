 <!-- importation feuille de style-->
 <link rel="stylesheet" href="public/css/main.css">


<?php
session_start();

// utiliser les classes pour générer automatiquement les vignettes
// rajouter éventuellement un système de pagination
// ajouter une colonne en base de donnée pour ajouter l'intitulé de la formation
// ajouter un oeil png au survol des cv avec javascript
// verification si session existe et que le login et mot de passe existe pour accéder à la page


// verification si la session existe et que le mail est renseigné
if(isset($_SESSION['mail'])) {
    ?>


    <div class="container">
    <div class="cv_min">
        <p class="cv_min_texte">KARA KARIM<br><span style="font-size: 0.7em;">Concepteur développeur nouvelles technologies</span></p>
        <img class="cv_min_img" src="public/img/cv/cv_karimkara.jpg" alt="cv">
    </div>
    <div class="cv_min">
        <p class="cv_min_texte">SAYADI MOHAMED<br><span style="font-size: 0.7em;">Développeur full stack</span></p>
        <img class="cv_min_img" src="public/img/cv/modelecv.jpg" alt="cv">
    </div>
    <div class="cv_min">
        <p class="cv_min_texte">SOLTANI SANA<br><span style="font-size: 0.7em;">Concepteur développeur nouvelles technologies</span></p>
        <img class="cv_min_img" src="public/img/cv/modelecv2.jpg" alt="cv">
    </div>
</div>


    <?php
} else {
    header('location:index.php');
}

?>








            



