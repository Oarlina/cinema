<?php

namespace Controller;
use Model\Connect;

class CinemaController {
    /* Lister des films*/ 
    public function listFilms () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT titre, anne_sortie
            FROM film
        ");

        require "view/listFilms.php"; 
    }
}