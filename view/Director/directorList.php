<?php ob_start();
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> réalisateur</p>
<button><a href="index.php?action=addDirectorForm">Ajouter un réalisateur</a></button>
<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>NOM.PRENOM </th>
            <th>SEXE </th>
            <th>DATE_DE_NAISSANCE </th>
        </tr>
    </thead>
    <tbody>
        <?php
        // release_date, duration
            foreach ($requete->fetchAll() as $director) {?>
                <tr>
                    <td><a href="index.php?action=detailDirector&id=<?= $director["id_director"]?>"> <?= $director["names"] ?> </a></td>
                    <td> <?= $director["gender"] ?> </td>
                    <td> <?= $director["birth"] ?> </td>
                </tr>
            <?php } ?>
    </tbody>
</table>

<?php
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
}
$title = "Liste des réalisateurs";
$second_title = "Liste des réalisateurs";
$contain = ob_get_clean();
require "view/template.php";
?>
