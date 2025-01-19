<?php

use Controller\CinemaController;
/* sert au chargement automatique des classes*/
spl_autoload_register(function ($class_name) {
    include $class_name.'.php';
});

$ctrlCinema = new CinemaController();
$id = (isset($_GET["id"])) ? $_GET["id"] : null;

if (isset($_GET["action"])){
    switch ($_GET["action"]) {
        case "filmsList": $ctrlCinema -> filmslist(); 
        break;
        case "actorsList": $ctrlCinema -> actorsList(); 
        break;
        case "actorList": $ctrlCinema -> actorList($id); 
        break;
        case "categoriesList": $ctrlCinema -> categoriesList(); 
        break;
        case "categoryList": $ctrlCinema -> categoryList($id);
        break;
        case "directorsList": $ctrlCinema -> directorslist(); 
        break;
        case "directorList": $ctrlCinema -> directorlist($id);
        break;
    }
}else{
    // m'ouvre en premier lieu la page d'acceuil
    require "view/acceuil.php";
}
?>