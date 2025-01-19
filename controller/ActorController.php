<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class ActorController {
    /* Lister des acteurs */
    public function actorslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_actor, CONCAT(person.name, ' ', person.firstname) AS names, gender, date_birth FROM actor
            INNER JOIN person ON actor.person_id = person.id_person 
        ");
        require "view/Actor/actorsList.php"; 
    }
    /* Détail d'un acteur */
    public function actorList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT name, firstname, gender, YEAR(date_birth) FROM actor
            INNER JOIN person ON actor.person_id = person.id_person 
        ");
        require "view/Actor/detail.php"; 
    }
}