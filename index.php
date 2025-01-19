<?php

use Controller\CinemaController;
use Controller\ActorController;
use Controller\CategoryController;
use Controller\DirectorController;
use Controller\PersonController;
/* sert au chargement automatique des classes*/
spl_autoload_register(function ($class_name) {
    include $class_name.'.php';
});

$ctrlCinema = new CinemaController();
$ctrlActor = new ActorController();
$ctrlCategory = new CategoryController();
$ctrlPerson = new PersonController();
$ctrlDirector = new DirectorController();
$id = (isset($_GET["id"])) ? $_GET["id"] : null;

if (isset($_GET["action"])){
    switch ($_GET["action"]) {
        case "filmsList": $ctrlCinema -> filmslist(); 
        break;
        case "actorsList": $ctrlActor -> actorslist(); 
        break;
        case "actorList": $ctrlActor -> actorlist($id); 
        break;
        case "categoriesList": $ctrlCategory -> categorieslist(); 
        break;
        case "detailCat": $ctrlCategory -> categorylist($id);
        break;
        case "directorsList": $ctrlDirector -> directorslist(); 
        break;
        case "directorList": $ctrlDirector -> directorlist($id);
        break;
    }
}else{
    // m'ouvre en premier lieu la page d'acceuil
    require "view/acceuil.php";
}
?>