<?php ob_start();?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> réalisateur</p>

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
            foreach ($requete->fetchAll() as $director) {?>
                <tr>
                    <td><a href="view/Director/detail.php?id=<?= $director["id_director"]?>"> <?= $director["names"] ?> </a></td>
                    <td> <?= $director["gender"] ?> </td>
                    <td> <?= $director["date_birth"] ?> </td>
                </tr>
            <?php } ?>
    </tbody>
</table>

<?php
$title = "Liste des réalisateurs";
$second_title = "Liste des réalisateurs";
$contain = ob_get_clean();
require "view/template.php";
?>
