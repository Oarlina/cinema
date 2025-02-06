<?php ob_start();

foreach ($requeteD->fetchAll() as $film) { 
    $title = $film["title"];
    $prenom = $film["first_name"];
    $nom = $film["forname"];
    $genre = $film["gender"];
    $date = $film["birth"];
    $id_film = $film["id_film"];
}?>
<section class="infosFilms">
    <img class="imageActeur" src="public/img/acteurs/<?=$prenom?>.<?=$nom?>.jpg" alt="acteur image">
    <div class="ligne">
        <p><b>Nom :</b></p>
        <p><?= $nom ?></p>
    </div>
    <div class="ligne">
        <p><b>Prénom :</b></p>
        <p><?= $prenom ?></p>
    </div>
    <div class="ligne">
        <p><b>Genre :</b></p>
        <p><?= $genre ?></p>
    </div>
    <div class="ligne">
        <p><b>Date de naissance :</b></p>
        <p><?= $date ?></p>
    </div>
<?php
if ($requete->rowCount() != 0){?>

    <p id="acteurs"><a href="index.php?action=actorList"> <b>Films(<?= $requete->rowCount()?>):</b></a></p>
    <section class="corps">
        <?php foreach ($requete->fetchAll() as $film) {?>
            <div class="film">
                <img class="imageFilm" src="public/img/films/<?=$film['title']?>.jpg" alt="image film">
                <p><a href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["title"] ?></a></p>
                <p><?= $film["sortie_film"] ?> </p>
                <p><?= $film["duree_film"] ?> </p>
            </div>
        <?php } ?> 
    </section>
            
<?php
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
}
$title = "Films de ". $prenom. " ". $nom;
$second_title = "Films de ". $prenom. " ". $nom;
$contain = ob_get_clean();
require_once "view/template.php";
?>
