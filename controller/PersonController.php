<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class PersonController {
    /* Lister des directeurs*/ 
    public function directorslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_director, CONCAT(forname, ' ', first_name) AS names, gender, DATE_FORMAT(date_birth, '%d/%m/%Y') as birth FROM director
            INNER JOIN person ON director.person_id = person.id_person"
        );
        require "view/Director/directorsList.php"; 
    }
    /* >Détail d'un directeurs*/ 
    public function detaildirector ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare ("SELECT id_director, title, DATE_FORMAT(release_date, '%d %M %Y') as sortie_film, DATE_FORMAT(SEC_TO_TIME(duration*60), '%H h %i min') AS duree_film FROM film f 
            INNER JOIN director d ON f.director_id = d.id_director 
            INNER JOIN person p ON d.person_id = p.id_person 
            WHERE id_director = :id 
        ");
        $requete ->execute(["id" => $id]);
        require "view/Director/detailDirector.php"; 
    }

    /* Lister des acteurs */
    public function actorslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("SELECT id_actor, CONCAT(forname, ' ', first_name) AS names, gender, DATE_FORMAT(date_birth, '%d/%m/%Y') as birth FROM actor
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