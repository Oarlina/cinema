<?php ob_start(); 
foreach($requeteT->fetchAll() as $film){  
    $titlec = $film["name_type"];
}
if ($requete->rowCount() != 0){ 
?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> films dans <?= $titlec?>.</p>
<section class="corps">
    <?php foreach($requete->fetchAll() as $film){  ?>
        <div class="filmCat">
            <img class="imgFilmCat" src="public/img/films/<?=$film['title']?>.jpg" alt="film affiche">
            <p><a href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["title"] ?></a></p>
        </div>
    <?php } ?> 
</section>
<?php 
}else {
    ?><p>Il n'y a aucun film dans cette catégorie!</p> <?php
}
$title = "Catégorie " . $titlec;
$second_title = "Catégorie " . $titlec;
$contain = ob_get_clean();
require "view/template.php";
?>
