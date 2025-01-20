<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class CinemaController {
    /* Lister des films*/ 
    public function filmslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_film, title, DATE_FORMAT(release_date, '%d/%m/%Y') as sortie_film FROM film");
        require "view/filmsList.php"; 
    }
}