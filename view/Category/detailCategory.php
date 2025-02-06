<?php ob_start(); 
foreach($requeteT->fetchAll() as $film){  
    $tc = $film["name_type"];
}
if ($requete->rowCount() != 0){ 
?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> film(s) dans <?= $tc?>.</p>
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
    ?><p>Il n'y a aucun élément!</p> <?php
    $tc = "";
}
$title = "Catégorie " . $tc;
$second_title = "Catégorie " . $tc;
$contain = ob_get_clean();
require "view/template.php";
?>
