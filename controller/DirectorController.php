<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class DirectorController {
    /* Lister des directeurs*/ 
    public function directorslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_director, CONCAT(person.name, ' ', person.firstname) AS names, gender, date_birth FROM director
        INNER JOIN person ON director.person_id = person.id_person");
        require "view/Director/directorsList.php"; 
    }
}