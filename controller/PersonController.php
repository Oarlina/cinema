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

    /* Détail d'un acteur */
    // public function detailactor ($id) {
    //     $pdo = Connect::seConnecter();
    //     $requete = $pdo-> prepare (" SELECT f.title, r.name
    //         FROM casting c
    //         INNER JOIN film f ON c.film_id = f.id_film
    //         INNER JOIN role_actor r ON c.role_id = r.id_role
    //         INNER JOIN actor a ON c.actor_id = a.id_actor
    //         INNER JOIN person p ON a.person_id = p.id_person 
    //         WHERE id_actor = :id;
    //     ");
    //     $requete -> execute(["id"=> $id]);
    //     require "view/Actor/detailActor.php"; 
    // }




    /* Lister des acteurs */
    public function actorslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("SELECT id_actor, CONCAT(forname, ' ', first_name) AS names, gender, date_birth FROM actor
            INNER JOIN person ON actor.person_id = person.id_person 
        ");
        require "view/Actor/actorsList.php"; 
    }
    /* Détail d'un acteur */
    public function detailactor ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare (" SELECT f.title, r.name
            FROM casting c
            INNER JOIN film f ON c.film_id = f.id_film
            INNER JOIN role_actor r ON c.role_id = r.id_role
            INNER JOIN actor a ON c.actor_id = a.id_actor
            INNER JOIN person p ON a.person_id = p.id_person 
            WHERE id_actor = :id;
        ");
        $requete -> execute(["id"=> $id]);
        require "view/Actor/detailActor.php"; 
    }
}