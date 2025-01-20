<?php

use Controller\CinemaController;
use Controller\CategoryController;
use Controller\PersonController;
/* sert au chargement automatique des classes*/
spl_autoload_register(function ($class_name) {
    include $class_name.'.php';
});

$ctrlCinema = new CinemaController();
$ctrlCategory = new CategoryController();
$ctrlPerson = new PersonController();
$id = (isset($_GET["id"])) ? $_GET["id"] : null;

if (isset($_GET["action"])){
    switch ($_GET["action"]) {
        case "filmsList": $ctrlCinema -> filmslist(); 
        break;
        case "actorsList": $ctrlPerson -> actorslist(); 
        break;
        case "detailActor": $ctrlPerson -> detailactor($id); 
        break;
        case "categoriesList": $ctrlCategory -> categorieslist(); 
        break;
        case "detailCategory": $ctrlCategory -> detailcategory($id);
        break;
        case "directorsList": $ctrlPerson -> directorslist(); 
        break;
        case "detailDirector": $ctrlPerson -> detaildirector($id);
        break;
    }
}else{
    // m'ouvre en premier lieu la page d'acceuil
    require "view/acceuil.php";
}
?>