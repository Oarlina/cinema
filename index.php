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
        case "listeFilms": $ctrlCinema -> listFilms(); 
        break;
        case "listeActeurs": $ctrlCinema -> listActeurs($id); 
        break;
    }
}
$title = "Acceuil";
$second_title = "";
$contain = ob_get_clean();

?>

