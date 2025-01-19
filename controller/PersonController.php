<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class PersonController {
     /* Lister des realisateurs*/
     public function directorsList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_type ,name FROM directors
        ");
        require "view/Director/directorsList.php"; 
    }
}