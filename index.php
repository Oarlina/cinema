<?php

use Controller\CinemaController;
use Controller\CategoryController;
use Controller\PersonController;
use Controller\FooterController;
/* sert au chargement automatique des classes*/
spl_autoload_register(function ($class_name) {
    include $class_name.'.php';
});

$ctrlCinema = new CinemaController();
$ctrlCategory = new CategoryController();
$ctrlPerson = new PersonController();
$ctrlFooter = new FooterController();
$id = (isset($_GET["id"])) ? $_GET["id"] : null;

if (isset($_GET["action"])){
    switch ($_GET["action"]) {
        case "filmsList": $ctrlCinema -> filmslist(); 
        break;
        case "detailFilm": $ctrlCinema -> detailfilm($id); 
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
        case "roleList": $ctrlCategory -> rolelist(); 
        break;
        case "detailRole": $ctrlCategory -> detailrole($id);
        break;
        case "confidentialite": $ctrlFooter -> confidentialite();
        break;
        case "mention": $ctrlFooter -> mention();
        break;
        case "vente": $ctrlFooter -> vente();
        break;
        case "utilisation": $ctrlFooter -> utilisation();
        break;
        case "aide": $ctrlFooter -> aide();
        break;
        case "privatisation": $ctrlFooter -> privatisation();
        break;
        case "cse": $ctrlFooter -> cse();
        break;
    }
}else{
    // m'ouvre en premier lieu la page d'acceuil
    require "view/acceuil.php";
}
?>