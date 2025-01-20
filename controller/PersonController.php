<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class PersonController {
    /* Lister des directeurs*/ 
    public function directorslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_director, CONCAT(forname, ' ', first_name) AS names, gender, date_birth FROM director
            INNER JOIN person ON director.person_id = person.id_person"
        );
        require "view/Director/directorsList.php"; 
    }
    /* >Détail d'un directeurs*/ 
    public function detaildirector () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_director, CONCAT(forname, ' ', first_name) AS names, gender, date_birth FROM director
            INNER JOIN person ON director.person_id = person.id_person"
        );
        require "view/Director/detailDirector.php"; 
    }
    /* Lister des acteurs */
    public function actorslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("SELECT id_actor, CONCAT(forname, ' ', first_name) AS names, gender, date_birth FROM actor
            INNER JOIN person ON actor.person_id = person.id_person 
        ");
        require "view/Actor/actorsList.php"; 
    }
    /* Détail d'un acteur */
    public function detailactor () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query (" SELECT forname, first_name, gender, YEAR(date_birth) FROM actor
            INNER JOIN person ON actor.person_id = person.id_person 
        ");
        require "view/Actor/detailActor.php"; 
    }
}