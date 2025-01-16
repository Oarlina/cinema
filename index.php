<?php

use Controller\CinemaController;

/* sert au chargement automatique des classes*/
spl_autoload_register(function ($class_name) {
    include $class_name.'.php';
});

$ctrlCinema = new CinemaController();

if (isset($_GET["action"])){
    switch ($_GET["action"]) {
        case "listeFilms": $ctrlCinema -> listFilms(); 
        break;
        case "listeActeurs": $ctrlCinema -> listActeurs(); 
        break;
    }
}