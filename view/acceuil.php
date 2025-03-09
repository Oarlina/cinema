<?php ob_start();?>
<section class="acceuil">

    <?php if (!empty($requeteF1)){ ?>
        <?php foreach ($requeteF1 as $film){ ?>
            <img src="public/img/films/<?= $film['title']?>.jpg" alt="<?= $film['title']?>" class="filmAcceuil">
            <p class="text"> <a class="titreFilm" href="index.php?action=detailFilm&id=<?= $film["id_film"]?>">
                <strong><?= $film['title'] ?></strong> 
               (<?= $film['release_date'] ?>) - 
               Durée: <?= $film['duration'] ?> min </a>
            </p>
        <?php } ?>
    <?php }?>
</section>
<?php
$title = "Acceuil";
$second_title = "";
$contain = ob_get_clean();
require "view/template.php";
?>
