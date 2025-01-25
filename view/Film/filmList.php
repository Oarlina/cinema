<?php ob_start();
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> films</p>
<button><a href="index.php?action=addFilmForm">Ajouter un film</a></button>
<section class="films">
    <?php
    foreach ($requete->fetchAll() as $film) { ?>
        <div class="film">
            <img class="imgFilm" src="public/img/aventure_epique.webp" alt="">
            <p class="textFilm"> 
                <a class="titreFilm" href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["title"] ?> </a>
            </p>
            <p class="textFilm2">
                <?= $film["sortie_film"] ?> 
            </p>
        </div>
    <?php } ?>
</section>



<?php
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
}
$title = "Liste des films avec categories";
$second_title = "Liste des films avec categories";
$contain = ob_get_clean();
require "view/template.php";
?>
