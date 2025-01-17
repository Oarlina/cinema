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
        case "filmsList": $ctrlCinema -> filmsList(); 
        break;
        case "actorsList": $ctrlCinema -> actorsList(); 
        break;
        case "categoriesList": $ctrlCinema -> categoriesList(); 
        break;
        case "categoryList": $ctrlCinema -> detailCategory($id);
        break;
    }
}
$title = "Acceuil";
$second_title = "";
$contain = ob_get_clean();

?>

