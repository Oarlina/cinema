<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class PersonController {
    /* Lister des acteurs */
    public function actorList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> query ("SELECT id_actor, CONCAT(forname, ' ', first_name) AS NAMES, gender, DATE_FORMAT(date_birth, '%d/%m/%Y') as birth 
            FROM actor a
            INNER JOIN person p ON a.person_id = p.id_person 
        ");
        require "view/Actor/actorList.php"; 
    }
    /* Détail d'un acteur */
    public function detailActor ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare (" SELECT id_role, id_film, f.title, r.name
            FROM casting c
            INNER JOIN film f ON c.film_id = f.id_film
            INNER JOIN role_actor r ON c.role_id = r.id_role
            INNER JOIN actor a ON c.actor_id = a.id_actor
            INNER JOIN person p ON a.person_id = p.id_person 
            WHERE id_actor = :id;
        ");
        $requete -> execute(["id"=> $id]);
        require "view/Actor/detailActor.php"; 
    }

    // première fonction qui va m'afficher un formulaire
    public function addActorForm()
    {
        require "view/Actor/addActorForm.php";
    }
    // deuxième fonction qui va valider le formulaire
    public function addActor()
    {
        if (isset($_POST['submit'])) // si on a cliquer sur le bouton
        { 
            $firstname = filter_input(INPUT_POST,"firstname",FILTER_SANITIZE_SPECIAL_CHARS); // on importe le nom et on enleve les caracteres speciaux
            $forname = filter_input(INPUT_POST,"forname",FILTER_SANITIZE_SPECIAL_CHARS); // on importe le nom et on enleve les caracteres speciaux
            $sexe = filter_input(INPUT_POST,"sexe",FILTER_SANITIZE_SPECIAL_CHARS);
            $date_birth = filter_input(INPUT_POST,"date_birth",FILTER_SANITIZE_SPECIAL_CHARS);
            if ($forname and $firstname and $sexe and $date_birth) // si les variables sont vrai donc existantes
            {
                $pdo = Connect::seConnecter();
                $person_id = $this->addPerson($firstname, $forname,$sexe,$date_birth);
                
                if ($person_id)
                {
                    $requete = $pdo-> prepare (" INSERT INTO actor (person_id) 
                        VALUES (:id_person)");
                    $requete ->execute(["id_person"=> $person_id],);
                }else
                {
                    die("Erreur: impossible de récuperer l'id de la personne."); // si on n'arrive pa a avoir l'id
                }
            } else
            {
                die("Erreur : tous les champs sont requis."); // si un champs du formulaire est vide
            }
        }
        header("Location: index.php?action=actorList");
    }

    public function addPerson($firstname,$forname,$sexe,$date_birth)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare ("INSERT INTO person (first_name, forname, gender, date_birth) 
            VALUES (:firstname, :forname, :sexe, :date_birth)");
        $requete ->execute(["firstname"=> $firstname, 
                            "forname"=> $forname, 
                            "sexe"=> $sexe, 
                            "date_birth"=> $date_birth]);
        return  $pdo->lastInsertId(); // donne le dernier ID inserer de la base de donnée
    }



    /* Lister des directeurs*/ 
    public function directorList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_director, CONCAT(forname, ' ', first_name) AS names, gender, DATE_FORMAT(date_birth, '%d/%m/%Y') as birth FROM director
            INNER JOIN person ON director.person_id = person.id_person"
        );
        require "view/Director/directorList.php"; 
    }
    /* Détail d'un directeurs*/ 
    public function detailDirector ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare ("SELECT id_film, id_director, title, DATE_FORMAT(release_date, '%d %M %Y') as sortie_film, DATE_FORMAT(SEC_TO_TIME(duration*60), '%H h %i min') AS duree_film FROM film f 
            INNER JOIN director d ON f.director_id = d.id_director 
            INNER JOIN person p ON d.person_id = p.id_person 
            WHERE id_director = :id 
        ");
        $requete ->execute(["id" => $id]);
        require "view/Director/detailDirector.php"; 
    }

    // première fonction qui va m'afficher un formulaire
    public function addDirectorForm()
    {
        require "view/Director/addDirectorForm.php";
    }
    // deuxième fonction qui va valider le formulaire
    public function addDirector()
    {
        if (isset($_POST['submit'])) // si on a cliquer sur le bouton
        { 
            $firstname = filter_input(INPUT_POST,"firstname",FILTER_SANITIZE_SPECIAL_CHARS); // on importe le nom et on enleve les caracteres speciaux
            $forname = filter_input(INPUT_POST,"forname",FILTER_SANITIZE_SPECIAL_CHARS); // on importe le nom et on enleve les caracteres speciaux
            $sexe = filter_input(INPUT_POST,"sexe",FILTER_SANITIZE_SPECIAL_CHARS);
            $date_birth = filter_input(INPUT_POST,"date_birth",FILTER_SANITIZE_SPECIAL_CHARS);
            if ($forname and $firstname and $sexe and $date_birth) // si les variables sont vrai donc existantes
            {
                $pdo = Connect::seConnecter();
                $person_id = $this->addPerson($firstname, $forname,$sexe,$date_birth);
                
                if ($person_id)
                {
                    $requete = $pdo-> prepare (" INSERT INTO director (person_id) 
                        VALUES (:id_person)");
                    $requete ->execute(["id_person"=> $person_id],);
                }else
                {
                    die("Erreur: impossible de récuperer l'id de la personne."); // si on n'arrive pa a avoir l'id
                }
            } else
            {
                die("Erreur : tous les champs sont requis."); // si un champs du formulaire est vide
            }
        }
        header("Location: index.php?action=directorList");
    }
    


}