<?php ob_start();
if ($requete->rowCount() != 0){?>

<!-- <p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> acteurs</p> -->
<?php 
    //foreach ($requete->$casting) { ?>

<?php //} ?>
<img src="public/img/films/heros_cache.jpg" alt="ahah">
<h2>Information</h2>
<?php 
    foreach ($requete->fetchAll() as $casting) {
        $sypnosis = $casting["synopsis"];
        $director = $casting["NAMES_D"];
        $duration = $casting["duration"];
        $date = $casting["release_date"];
    }
?>
<section class="infosFilms">
    <div class="ligne">
        <p><b>Synopsis :</b></p>
        <p><?= $sypnosis ?></p>
    </div>
    <div class="ligne">
        <p><b>Réalisateur :</b></p>
        <p><?= $director ?></p>
    </div>
    <div class="ligne">
        <p><b>Durée :</b></p>
        <p><?= $duration ?></p>
    </div>
    <div class="ligne">
        <p><b>Date de sortie:</b></p>
        <p><?= $date ?></p>
    </div>
</section>
    <tbody>
        
                <tr>
                    <?php $id_film=$casting["id_film"];?>
                    <td><a href="index.php?action=detailActor&id=<?= $casting["id_director"]?>"> <?= $casting["NAMES_D"] ?> </a></td>
                    <td><a href="index.php?action=detailActor&id=<?= $casting["id_actor"]?>"> <?= $casting["NAMES_A"] ?> </a></td>
                    <td> <?= $casting["gender"] ?> </td>
                    <td><a href="index.php?action=detailRole&id=<?= $casting["id_role"]?>"> <?= $casting["name_role"] ?> </a></td>
                    <td><button><a href="index.php?action=deleteCasting&idA=<?=$casting["id_actor"] ?>&idF<?=$id_film?>">Supprimer le casting</a></button> </td>
                </tr>
    </tbody>
</table>
<button><a href="index.php?action=addCastingForm&id=<?=$id_film ?>">Ajouter un casting</a></button> 
<button><a href="index.php?action=deleteFilm&id=<?=$id_film ?>">Supprimer le film</a></button> 
<?php
}else {
    ?><p>Il n'y a aucun élément!</p> 
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
