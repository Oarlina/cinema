<?php

use Controller\CategoryController;
use Controller\RoleController;
use Controller\CinemaController;
use Controller\FooterController;
use Controller\PersonController;
/* sert au chargement automatique des classes*/
spl_autoload_register(function ($class_name) {
    include $class_name.'.php';
});
$ctrlCategory = new CategoryController();
$ctrlRole = new RoleController();
$ctrlCinema = new CinemaController();
$ctrlFooter = new FooterController();
$ctrlPerson = new PersonController();

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
        case "roleList": $ctrlRole -> roleList(); 
        break;
        case "detailRole": $ctrlRole -> detailRole($id);
        break;
        case "addRoleForm": $ctrlRole-> addRoleForm();
        break;
        case "addRole": $ctrlRole-> addRole();
        break;
        // partie des films 
        case "filmList": $ctrlCinema -> filmList(); 
        break;
        case "detailFilm": $ctrlCinema -> detailFilm($id); 
        break;
        case "addFilmForm": $ctrlCinema-> addFilmForm();
        break;
        case "addFilm": $ctrlCinema-> addFilm();
        break;
        case "addCastingForm": $ctrlCinema-> addCastingForm();
        break;
        case "addCasting": $ctrlCinema-> addCasting($id);
        break;
        case "deleteCasting": $ctrlCinema -> deleteCasting();
        break;
        case "deleteFilm": $ctrlCinema-> deleteFilm($id);
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
        // partie des personnnes
        case "deletePerson": $ctrlPerson-> deletePerson($id);
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
        case "deleteActor": $ctrlPerson-> deleteActor($id);
        break;
        //  partie des réalisateurs 
        case "directorList": $ctrlPerson -> directorList(); 
        break;
        case "detailDirector": $ctrlPerson -> detailDirector($id);
        break;
        case "addDirectorForm": $ctrlPerson-> addDirectorForm();
        break;
        case "addDirector": $ctrlPerson-> addDirector();
        break;
        case "deleteDirector": $ctrlPerson-> deleteDirector($id);
        break;  
    }
}else{
    // m'ouvre en premier lieu la page d'acceuil
    require "view/acceuil.php";
}
?>