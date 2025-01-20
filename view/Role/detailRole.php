<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> role</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>NOM DU FILM</th>
            <th>DATE DE SORTIE</th>
            <th>ACTEUR</th>
            <th>ROLE</th>
            <th>SEXE</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($requete->fetchAll() as $casting) {?>
            <tr>
                <td><a href="index.php?action=detailFilm&id=<?= $casting["id_film"]?>"> <?= $casting["title"] ?></a></td>
                <td> <?= $casting["release_date"] ?> </td>
                <td><a href="index.php?action=detailActor&id=<?= $casting["id_actor"]?>"> <?= $casting["NAMES"] ?></a></td>
                <td> <?= $casting["gender"] ?> </td>
            </tr>
            <?php } ?> 
    </tbody>
</table>

<?php 

$title = "Liste d'un rôle";
$second_title = "Liste d'un rôle";
$contain = ob_get_clean();
require "view/template.php";
?>
