<?php ob_start(); 
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> acteurs</p>
<button><a href="index.php?action=addRoleForm"></a>Ajouter un rôle</a></button>
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
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
}
$title = "Liste des rôles";
$second_title = "Liste des rôles";
$contain = ob_get_clean();
require "view/template.php";
?>
