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
            SELECT forname, first_name, gender, date_birth
            FROM actor
            INNER JOIN person ON actor.person_id = person.id_person 
        ");

        require "view/Acteur/actorList.php"; 
    }

    /* Lister des films avec catégorie*/
    public function categoriesList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_type ,name
            FROM type
          
        ");
        require "view/categoriesList.php"; 
    }
    
    /* Lister des films avec catégorie*/
    public function categoryList ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_type ,name
            FROM type
            where id_type = $id
          
        ");
        require "view/categoryList.php"; 
    }
}