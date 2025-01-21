<?php
namespace Controller;
use Model\Connect;
use PDOException; 

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

    // première fonction qui va m'afficher un formulaire
    public function addCategoryform()
    {
        require "view/Category/addCategoryForm.php";
    }
    // deuxième fonction qui va valider le formulaire
    public function addCategory()
    {
        if (isset($_POST['submit'])) // si on a cliquer sur le bouton
        {
            $name_type = filter_input(INPUT_POST,"name_type",FILTER_SANITIZE_SPECIAL_CHARS); // on importe le nom et on enleve les caracteres speciaux
            if ($name_type) // si name_type est vrai donc existant
            {
                $pdo = Connect::seConnecter();
                $requete = $pdo-> prepare ("INSERT INTO type_category (name_type) VALUES (:name_type)");
                $requete ->execute(["name_type"=> $name_type]);
            }else
            {
                die("Erreur : tous les champs sont requis."); // si un champ du formulaire est vide
            }
        }
        header("Location: index.php?action=categoriesList");
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
    public function addRoleForm()
    {
        require "view/Role/addRoleForm.php";
    }
    // deuxième fonction qui va valider le formulaire
    public function addRole()
    {
        if (isset($_POST['submit'])) // si on a cliquer sur le bouton
        {
            $name_role = filter_input(INPUT_POST,"name_type",FILTER_SANITIZE_SPECIAL_CHARS); // on importe le nom et on enleve les caracteres speciaux
            if ($name_role) // si name_type est vrai donc existant
            {
                $pdo = Connect::seConnecter();
                $requete = $pdo-> prepare ("INSERT INTO role_actor (name) VALUES (:name_role)");
                $requete ->execute(["name_role"=> $name_role]);
            }
        }
        header("Location: index.php?action=roleList");
    }

    
}