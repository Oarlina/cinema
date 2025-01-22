<?php
namespace Controller;
use Model\Connect;
use PDOException; 


class RoleController{
    /* Lister des role avec catégorie*/
        public function roleList () {
            $pdo = Connect::seConnecter();
            $requete = $pdo-> query ("SELECT id_role, name_role
                                      FROM role_actor 
            ");
            require "view/Role/roleList.php"; 
        }
        /* Lister des role selon la categorie*/
        public function detailRole ($id) {
            $pdo = Connect::seConnecter();
            $requete = $pdo-> prepare ("SELECT id_film, id_actor, id_role, title, release_date, CONCAT(forname,' ', first_name) AS NAMES, gender 
                FROM casting c
                INNER JOIN role_actor ra ON c.role_id = ra.id_role
                INNER JOIN film f ON c.film_id = f.id_film
                INNER JOIN actor a ON c.actor_id = a.id_actor
                INNER JOIN person p ON a.person_id = p.id_person
                WHERE id_role = :id_role
            ");
            $requete->execute(["id_role" => $id]);
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
                $name_role = filter_input(INPUT_POST,"name_role",FILTER_SANITIZE_SPECIAL_CHARS); // on importe le nom et on enleve les caracteres speciaux
                if ($name_role) // si name_type est vrai donc existant
                {
                    $pdo = Connect::seConnecter();
                    $requete = $pdo-> prepare ("INSERT INTO role_actor (name_role) VALUES (:name_role)");
                    $requete ->execute(["name_role"=> $name_role]);
                }
            }
            header("Location: index.php?action=roleList");
        }


        // première fonction qui va m'afficher un formulaire
        public function addCastingForm()
        {
            require "view/Role/addRoleForm.php";
        }
        // deuxième fonction qui va valider le formulaire
        public function addCasting()
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
