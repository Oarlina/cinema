<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class CinemaController {
    /* Lister des films*/ 
    public function filmslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_film, title, release_date FROM film");
        require "view/filmsList.php"; 
    }
}