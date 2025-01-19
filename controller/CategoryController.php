<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class CategoryController {
    /* Lister des films avec catégorie*/
    public function categoriesList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_type ,name
            FROM type
        
        ");
        require "view/Category/categoriesList.php"; 
    }
    /* Lister des films selon la categorie*/
    public function categoryList ($id) {
        $pdo = Connect::seConnecter();
        $requeteFilm = $pdo-> prepare ("
            SELECT * FROM film

            INNER JOIN type ON film_type.type_id = type.id_type
            INNER JOIN film ON film_type.id_film = film.id_film
            where id_type = :id
        ");
        $requeteFilm->execute(["id" => $id]);
        require "view/Category/detail.php"; 
    }
}