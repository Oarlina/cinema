<?php ob_start();

foreach ($requete->fetchAll() as $casting) { 
    $film = $casting["title"];
    $sypnosis = $casting["synopsis"];
    $director = $casting["NAMES_D"];
    $duration = $casting["duration"];
    $date = $casting["release_date"];
    $id_film = $casting["id_film"];
    $id_director = $casting["id_director"];
} ?>
<img id="titre_film"src="public/img/films/<?= $film ?>.jpg" alt="<?= $film ?>">
<h2>Information</h2>
<section class="infosFilms">
    <div class="ligne"> 
        <button><a href="index.php?action=addCastingForm&id=<?=$id_film ?>">Ajouter un casting</a></button> 
        <button><a href="index.php?action=deleteFilm&id=<?=$id_film ?>">Supprimer le film</a></button> 
    </div>
    <div class="ligne">
        <p><b>Titre :</b></p>
        <p><?= $film ?></p>
    </div>
    <div class="ligne">
        <p><b>Synopsis :</b></p>
        <p><?= $sypnosis ?></p>
    </div>
    <div class="ligne">
        <p><b>Durée :</b></p>
        <p><?= $duration ?></p>
    </div>
    <div class="ligne">
        <p><b>Date de sortie:</b></p>
        <p><?= $date ?></p>
    </div>
    <div class="ligne">
        <p><a href="index.php?action=directorList">  <b>Réalisateur :</b></a></p>
        <p><a href="index.php?action=detailActor&id=<?= $id_director?>"> <?= $director ?></a> </p>
    </div>
    <p id="acteurs"><a href="index.php?action=actorList"> <b>Acteurs (<?= $requete->rowCount()?>):</b></a></p>
<?php
    if ($requete->rowCount() != 0){
?>

    <section class="corps">
        <?php foreach ($requeteA->fetchAll() as $actor) { ?> 
            <div class="actorsList">
                <img class="imageActeur" src="public/img/acteurs/<?=$actor['first_name']?>.<?=$actor['forname']?>.jpg" alt="portrait de <?= $actor["NAMES_A"]?>">
                <p> <a href="index.php?action=detailActor&id=<?= $actor["id_actor"]?>"> <?= $actor["NAMES_A"] ?> </a> </p>
                <button><a href="index.php?action=deleteCasting&idA=<?=$actor["id_actor"] ?>&idF<?=$id_film?>">Supprimer le casting</a></button> 
            </div>
            <?php } ?>
    </section>
    
</section>
<?php
}else {
    ?><p>Il n'y a aucun casting.</p>
    <?php 
    foreach ($requete->fetchAll() as $casting) {?> 
    <?php $id_film=$casting["id_film"];?>
    <button><a href="index.php?action=addCastingForm&id=<?=$id_film ?>">Ajouter un casting</a></button> 
    <?php } 
} ?>

<?php
$title = "Détail du film ";
$second_title = "";
$contain = ob_get_clean();
require "view/template.php";
?>
