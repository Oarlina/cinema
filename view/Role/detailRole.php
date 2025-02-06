<?php ob_start(); 
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> rôles</p>
<section class="corps">
    <?php
    foreach ($requete->fetchAll() as $casting) {
        $t = $casting["name_role"];?>
    <div class="acteurRole">
        <img class="imageActeur" src="public/img/acteurs/<?=$casting['first_name']?>.<?=$casting['forname']?>.jpg" alt="acteur image">
        <p> <a href="index.php?action=detailActor&id=<?= $casting["id_actor"]?>"> <?= $casting["NAMES"] ?></a> </p>
        <p> <a href="index.php?action=detailFilm&id=<?= $casting["id_film"]?>"> <?= $casting["title"] ?></a> </p>
        <p> <?= $casting["release_date"] ?> </p>
    </div>
    <?php } ?>         
</section>
<?php 
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
    $t="";
}
$title = "Rôle ". $t;
$second_title = "Rôle ". $t;
$contain = ob_get_clean();
require "view/template.php";
?>
