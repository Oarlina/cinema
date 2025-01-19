<?php ob_start(); ?>
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
                    <td><a href="view/Acteur/actorList.php?id=<?= $actor["id_actor"]?>"> <?= $actor["names"] ?> </a></td>
                    <td> <?= $actor["gender"] ?> </td>
                    <td> <?= $actor["date_birth"] ?> </td>
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
