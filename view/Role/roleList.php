<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> acteurs</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>ROLE</th>
            <th>NOM.PRENOM</th>
            <th>SEXE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $casting) {?>
                <tr>
                    <td><a href="index.php?action=detailRole&id=<?= $casting["id_role"]?>"> <?= $casting["name"] ?> </a></td>
                    <td><a href="index.php?action=detailActor&id=<?= $casting["id_actor"]?>"> <?= $casting["NAMES"] ?> </a></td>
                    <td> <?= $casting["gender"] ?> </td>
                </tr>
            <?php } ?>
    </tbody>
</table>
<?php 
$title = "Liste des rôles";
$second_title = "Liste des rôles";
$contain = ob_get_clean();
require "view/template.php";
?>
