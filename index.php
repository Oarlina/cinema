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
        // partie des categories 
        case "categoriesList": $ctrlCategory -> categorieslist(); 
        break;
        case "detailCategory": $ctrlCategory -> detailcategory($id);
        break;
        case "addCategoryForm": $ctrlCategory-> addCategoryform();
        break;
        case "addCategory": $ctrlCategory-> addCategory();
        break;
        // partie des roles 
        case "roleList": $ctrlCategory -> rolelist(); 
        break;
        case "detailRole": $ctrlCategory -> detailrole($id);
        break;
        case "addRoleForm": $ctrlCategory-> addRoleForm();
        break;
        case "addRole": $ctrlCategory-> addRole();
        break;
        // partie des films 
        case "filmsList": $ctrlCinema -> filmslist(); 
        break;
        case "detailFilm": $ctrlCinema -> detailfilm($id); 
        break;
        case "addFilmForm": $ctrlCinema-> addFilmform();
        break;
        case "addFilm": $ctrlCinema-> addFilm();
        break;
        // partie du footer 
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
         // partie des acteurs 
         case "actorList": $ctrlPerson -> actorList(); 
         break;
         case "detailActor": $ctrlPerson -> detailActor($id); 
         break;
         case "addActorForm": $ctrlPerson-> addActorForm();
         break;
         case "addActor": $ctrlPerson-> addActor();
         break;
        //  partie des personnes 
        case "directorList": $ctrlPerson -> directorList(); 
        break;
        case "detailDirector": $ctrlPerson -> detailDirector($id);
        break;
        case "addDirectorForm": $ctrlPerson-> addDirectorForm();
        break;
        case "addDirector": $ctrlPerson-> addDirector();
        break;
        
        
    }
}else{
    // m'ouvre en premier lieu la page d'acceuil
    require "view/acceuil.php";
}
?>