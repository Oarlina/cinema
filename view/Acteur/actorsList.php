<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> acteurs</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>SEXE</th>
            <th>DATE_DE_NAISSANCE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $person) {?>
                <tr>
                    <td> <?= $person["forname"] ?> </td>
                    <td> <?= $person["first_name"] ?> </td>
                    <td> <?= $person["gender"] ?> </td>
                    <td> <?= $person["date_birth"] ?> </td>
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
