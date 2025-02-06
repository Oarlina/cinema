<?php ob_start(); 
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> rôles</p>

<?php 
    foreach ($requete->fetchAll() as $casting) { 
        $film = $casting["title"];
        $nom = $casting["first_name"];
        $prenom = $casting["forname"];
        $genre = $casting["gender"];
        $date = $casting["birth"];
        $id_film = $casting["id_film"];
} ?>
<h2>Informations</h2>
<section class="infosFilms">
    
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
    <p id="acteurs"><a href="index.php?action=actorList"> <b>Films:</b></a></p>
    <section class="corps">
        <?php foreach ($requeteA->fetchAll() as $casting) {?>
            <div class="film">
                <img class="imageFilm" src="public/img/films/<?=$casting['title']?>.jpg" alt="image film">
                <p><a href="index.php?action=detailFilm&id=<?= $casting["id_film"]?>"> <?= $casting["title"] ?></a></p>
                <p><a href="index.php?action=detailRole&id=<?= $casting["id_role"]?>"> <?= $casting["name_role"] ?> </a></p>
            </div>
        <?php } ?> 
    </section>
<?php
}else {
    ?><p>Il n'y a aucun rôle!</p> <?php
}
$title = "Rôle de ". $prenom. " " . $nom;
$second_title = "Rôle de ". $prenom. " " . $nom;
$contain = ob_get_clean();
require "view/template.php";
?>
