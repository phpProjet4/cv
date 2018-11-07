<?php

require 'App/Autoloader.php';
Autoloader::register();

// si p existe alors, la valeur de $p est égale à $_GET, sinon $p=home
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}


ob_start();

if($p === 'home') {
    require 'pages/home.php';
} else if($p === 'verification_login') {
    require 'pages/verification_login.php';
} else if($p === 'cv') {
    require 'pages/cv.php';
} else if($p === 'inscription') {
    require 'pages/inscription.php';
} elseif($p === "consultation") {
    require 'pages/consultation.php';
} else if($p === "administrateur") {
    require 'pages/administrateur.php';
} else if($p === 'lost') {
    require 'pages/lost.php';
}
$content = ob_get_clean(); // ob_get_clean lit le contenu définit dans ob_start(ob_get_contens) puis l'efface(ob_end_clean)
require "pages/templates/default.php";