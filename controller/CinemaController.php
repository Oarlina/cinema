<?php

namespace Controller;
use Model\Connect;

class CinemaController {
    /* Lister des films*/ 
    public function FilmsList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT title, YEAR(year)
            FROM film
        ");

        require "view/filmsList.php"; 
    }

    /* Lister des acteurs */
    public function actorsList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_actor, CONCAT(person.name, ' ', person.firstname) AS names, gender, YEAR(date_birth)
            FROM actor
            INNER JOIN person ON actor.person_id = person.id_person 
        ");
        require "view/Actor/actorsList.php"; 
    }

    /* Détail d'un acteur */
    public function actorList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT name, firstname, gender, YEAR(date_birth)
            FROM actor
            INNER JOIN person ON actor.person_id = person.id_person 
        ");

        require "view/Actor/detail.php"; 
    }

    /* Lister des films avec catégorie*/
    public function categoriesList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_type ,name
            FROM type
          
        ");
        require "view/Category/categoriesList.php"; 
    }
    
    /* Lister des films avec catégorie*/
    public function categoryList ($id) {
        $pdo = Connect::seConnecter();
        $requeteFilm = $pdo-> prepare ("
            SELECT *
            FROM film

            INNER JOIN type ON film_type.type_id = type.id_type
            INNER JOIN film ON film_type.id_film = film.id_film
            where id_type = :id
          
        ");
        $requeteFilm->execute(["id" => $id]);
        require "view/Category/detail.php"; 
    }
}