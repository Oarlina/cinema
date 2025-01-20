<?php
namespace Controller;
use Model\Connect;
// use PDOException; 

class CategoryController {
    /* Lister des films avec catégorie*/
    public function categorieslist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_type ,name_type
            FROM type_category
        ");
        require "view/Category/categoriesList.php"; 
    }
    /* Lister des films selon la categorie*/
    public function detailcategory ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare ("SELECT t.id_type,name_type,fil.title 
            FROM type_category t 
            INNER JOIN film_type ft ON t.id_type = ft.type_id 
            INNER JOIN film fil  ON ft.film_id = fil.id_film 
            WHERE id_type = :id;");
        $requete->execute(["id" => $id]);
        require "view/Category/detailCategory.php"; 
    }
}