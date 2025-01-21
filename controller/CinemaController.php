<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class CinemaController {
    /* Lister des films*/ 
    public function filmList () {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query ("SELECT id_film, title, DATE_FORMAT(release_date, '%d/%m/%Y') as sortie_film FROM film");
        require "view/Film/filmList.php"; 
    }
    /* Détail d'un film*/ 
    public function detailFilm ($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare ("SELECT id_director, id_role, id_actor,CONCAT(p2.forname,' ', p2.first_name)AS NAMES_D, CONCAT(p.forname, ' ', p.first_name) AS NAMES_A, p.gender,  r.name  FROM casting c
            INNER JOIN role_actor r ON c.role_id = r.id_role
            INNER JOIN actor a ON c.actor_id = a.id_actor
            INNER JOIN person p ON a.person_id = p.id_person
            INNER JOIN film f ON c.film_id = f.id_film
            INNER JOIN director d ON f.director_id = d.id_director 
            INNER JOIN person p2 ON d.person_id = p2.id_person
            WHERE id_film = :id 
        ");
        $requete ->execute(["id" => $id]);
        require "view/Film/detailFilm.php"; 
    }
    // première fonction qui va m'afficher un formulaire
    public function addFilmForm()
    {
        $pdo = Connect::seConnecter();
        $requeteR = $pdo->query ("SELECT id_director, CONCAT(forname, ' ', first_name) AS NAMES  FROM director d
            INNER JOIN person p ON d.person_id = p.id_person
        ");
        $requeteG = $pdo-> query ("SELECT id_type ,name_type
            FROM type_category
    ");
        require "view/Film/addFilmForm.php";
    }
    // deuxième fonction qui va valider le formulaire
    public function addFilm()
    {
        if (isset($_POST['submit'])) // si on a cliquer sur le bouton
        { 
            $title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_SPECIAL_CHARS); // on importe le nom et on enleve les caracteres speciaux
            $release_date = filter_input(INPUT_POST,"release_date",FILTER_SANITIZE_SPECIAL_CHARS); 
            $duration = filter_input(INPUT_POST,"duration",FILTER_VALIDATE_INT);
            $synopsis = filter_input(INPUT_POST,"synopsis",FILTER_SANITIZE_SPECIAL_CHARS);
            $director_id = filter_input(INPUT_POST,"director_id",FILTER_VALIDATE_INT);
            $gender = filter_input(INPUT_POST,"gender");
            if ($title and $release_date and $duration and $synopsis and $director_id and $gender) // si les variables sont vrai donc existantes
            {
                $pdo = Connect::seConnecter();

                $requete = $pdo-> prepare ("INSERT INTO film (title, release_date, duration, synopsis, director_id) 
                    VALUES (:title, :release_date, :duration, :synopsis, :director_id)");
                $requete ->execute(["title"=> $title, 
                                    "release_date" => $release_date, 
                                    "duration" => $duration,
                                    "synopsis" => $synopsis,
                                    "director_id" => $director_id]);
                $gender = addGenre($gender);
            } else
            {
                die("Erreur : tous les champs sont requis."); // si un champs du formulaire est vide
            }
        }
        header("Location: index.php?action=filmList");
    }
    public function addGenre($gender)
    {
        $pdo = Connect::seConnecter();
        $film_id = $pdo -> lastInsertId();
        foreach($gender as $genre)
        {
            $requete = $pdo-> prepare ("INSERT INTO film_type  
                VALUES ( :film_id, :genre)");
            $requete ->execute(["film_id"=> $film_id, 
                                "gender"=> $genre]);
        }
    }
}