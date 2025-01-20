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
        $requete = $pdo-> prepare ("SELECT id_film, t.id_type,name_type,fil.title 
            FROM type_category t 
            INNER JOIN film_type ft ON t.id_type = ft.type_id 
            INNER JOIN film fil  ON ft.film_id = fil.id_film 
            WHERE id_type = :id;");
        $requete->execute(["id" => $id]);
        require "view/Category/detailCategory.php"; 
    }
    /* Lister des role avec catégorie*/
    public function rolelist () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("SELECT id_role, id_actor, ra.name, CONCAT(forname,' ',first_name) AS NAMES, ra.name, p.gender FROM casting c
            INNER JOIN role_actor ra ON c.actor_id = ra.id_role
            INNER JOIN actor a ON c.actor_id = a.id_actor
            INNER JOIN person p ON a.person_id = p.id_person

        ");
        require "view/Role/roleList.php"; 
    }
    /* Lister des role selon la categorie*/
    public function detailrole ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare ("SELECT id_film, id_actor, title, release_date, CONCAT(forname,' ', first_name) AS NAMES, gender FROM casting c
            INNER JOIN role_actor ra ON c.actor_id = ra.id_role
            INNER JOIN film f ON c.film_id = f.id_film
            INNER JOIN actor a ON c.actor_id = a.id_actor
            INNER JOIN person p ON a.person_id = p.id_person
            WHERE id_role = :id;");
        $requete->execute(["id" => $id]);
        require "view/Role/detailRole.php"; 
    }

    // première fonction qui va m'afficher un formulaire
    public function addCategoryform()
    {
        require "view/Form/addCategoryForm.php";
    }
    // deuxième fonction qui va valider le formulaire
    public function addCategory()
    {
        $name = filter_input(Input_post,"name");
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare ("INSERT INTO type_category (name_type) VALUES (:name)");

        $requete->execute(["name" => $name]);
        header(location : "index.php?action=categoriesList");
        exit();
       
    }
}