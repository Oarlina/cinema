<?php
namespace Controller;
use Model\Connect;
use PDOException; 

class CategoryController {
    /* Lister des films avec catégorie*/
    public function categorieslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_type ,name
            FROM type
        ");
        require "view/Category/categoriesList.php"; 
    }
    /* Lister des films selon la categorie*/
    public function categorylist ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare ("
            SELECT * FROM film_type
            INNER JOIN type ON film_type.type_id = type.id_type
            INNER JOIN film ON film_type.id_film = film.id_film
            where type_id = :id
        ");
        $requete->execute(["type_id" => $id]);
        require "view/Category/detail.php"; 
    }
}