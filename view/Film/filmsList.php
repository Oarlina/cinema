<?php ob_start();?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> films</p>

<section class="films">
    <?php
    foreach ($requete->fetchAll() as $film) { ?>
        <div class="film">
            <img class="imgFilm" src="public/img/aventure_epique.webp" alt="">
            <p class="titreFilm"> <a href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["title"] ?> </a></p>
            <p> <?= $film["sortie_film"] ?> </p>
        </div>
    <?php } ?>
</section>



<?php
$title = "Liste des films avec categories";
$second_title = "Liste des films avec categories";
$contain = ob_get_clean();
require "view/template.php";
?>
