<?php 


// rooting
$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));

$controller=(count($requete)=== 1)?  "home":$requete[1];
$action=(count($requete) < 3)? "list": $requete[2];
$id=(count($requete) < 4)? 0: (int)$requete[3];

switch ($controller) {
        case 'films':
        require_once("controllers/films_controller.php");
        break;

        case 'genre':
        require_once("controllers/genre_controller.php");
        break;
        case 'realisateur':
        require_once("controllers/realisateur_controller.php");
        break;

        case 'annee':
        require_once("controllers/annee_controller.php");
        break;

    default:
        require_once("controllers/home_controller.php");
        break;
}




?>