<?php

namespace Controller;
use Model\Connect;

class CinemaController {
    /* Lister des films*/ 
    public function listFilms () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT name, YEAR(year)
            FROM film
        ");

        require "view/listeFilms.php"; 
    }
}