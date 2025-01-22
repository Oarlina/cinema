<?php ob_start(); 
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> rôles</p>
<button><a href="index.php?action=addRoleForm">Ajouter un rôle</a></button>
<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>ROLE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($requete->fetchAll() as $role_actor) {?>
            <tr>
                <td><a href="index.php?action=detailRole&id=<?= $role_actor["id_role"]?>"> <?= $role_actor["name_role"] ?> </a></td>
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
