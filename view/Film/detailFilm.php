<?php ob_start();
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> acteurs</p>
<?php 
    //foreach ($requete->$casting) { ?>

<?php //} ?>
<table class="uk-table uk-table-stripped"> 
    <thead>
        <tr>
            <th>realisateur</th>
            <th>acteur</th>
            <th>sexe</th>
            <th>role</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ($requete->fetchAll() as $casting) {?>
                <tr>
                    <?php $id_film=$casting["id_film"];?>
                    <td><a href="index.php?action=detailActor&id=<?= $casting["id_director"]?>"> <?= $casting["NAMES_D"] ?> </a></td>
                    <td><a href="index.php?action=detailActor&id=<?= $casting["id_actor"]?>"> <?= $casting["NAMES_A"] ?> </a></td>
                    <td> <?= $casting["gender"] ?> </td>
                    <td><a href="index.php?action=detailRole&id=<?= $casting["id_role"]?>"> <?= $casting["name_role"] ?> </a></td>
                </tr>
            <?php } ?>
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
$title = "Détail du film";
$second_title = "Détail du film";
$contain = ob_get_clean();
require "view/template.php";
?>
