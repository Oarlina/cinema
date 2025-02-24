<?php
namespace Controller;
use Model\Connect;
use PDOException; 

class CategoryController {
    /* Lister des films avec catégorie*/
    public function categoriesList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("
            SELECT id_type ,name_type
            FROM type_category
        ");
        require "view/Category/categoriesList.php"; 
    }
    /* Lister des films selon la categorie*/
    public function detailCategory ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare ("SELECT id_film, t.id_type,name_type,fil.title, t.name_type
            FROM type_category t 
            INNER JOIN film_type ft ON t.id_type = ft.type_id 
            INNER JOIN film fil  ON ft.film_id = fil.id_film 
            WHERE id_type = :id;");
        $requete->execute(["id" => $id]);
        $requeteT = $pdo-> query ("SELECT id_type, name_type
            FROM type_category t 
            INNER JOIN film_type ft ON t.id_type = ft.type_id");
        require "view/Category/detailCategory.php"; 
    }

    // première fonction qui va m'afficher un formulaire
    public function addCategoryForm()
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
}