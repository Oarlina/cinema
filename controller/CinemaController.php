<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class CinemaController {
    /* Lister des films*/ 
    public function filmslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_film, title, DATE_FORMAT(release_date, '%d/%m/%Y') as sortie_film FROM film");
        require "view/Film/filmsList.php"; 
    }
    /* Détail d'un film*/ 
    public function detailfilm ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare ("SELECT id_director, id_role, id_actor,CONCAT(p2.forname,' ', p2.first_name)AS NAMES_D, CONCAT(p.forname, ' ', p.first_name) AS NAMES_A, p.gender,  r.name  FROM casting c
            INNER JOIN role_actor r ON c.role_id = r.id_role
            INNER JOIN actor a ON c.actor_id = a.id_actor
            INNER JOIN person p ON a.person_id = p.id_person
            INNER JOIN film f ON c.film_id = f.id_film
            INNER JOIN director d ON f.director_id = d.id_director 
            INNER JOIN person p2 ON d.person_id = p2.id_person
            WHERE id_film = :id 
        ");
        $requete ->execute(["id" => $id]);
        require "view/Film/detailFilm.php"; 
    }
}