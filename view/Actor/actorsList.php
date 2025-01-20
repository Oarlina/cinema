<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> acteurs</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>NOM.PRENOM</th>
            <th>SEXE</th>
            <th>DATE_DE_NAISSANCE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $actor) {?>
                <tr>
                    <td><a href="index.php?action=detailActor&id=<?= $actor["id_actor"]?>"> <?= $actor["NAMES"] ?> </a></td>
                    <td><?= $actor["gender"] ?></td>
                    <td> <?= $actor["birth"] ?> </td>
                </tr>
            <?php } ?>
    </tbody>
</table>
<?php 
$title = "Liste des acteurs";
$second_title = "Liste des acteurs";
$contain = ob_get_clean();
require "view/template.php";
?>
