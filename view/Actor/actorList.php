<?php ob_start(); 
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> acteurs</p>
<button><a href="index.php?action=addActorForm">Ajouter un rôle</a></button>
<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>NOM.PRENOM</th>
            <th>SEXE</th>
            <th>DATE_DE_NAISSANCE</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $actor) {?>
                <tr>
                    <td><a href="index.php?action=detailActor&id=<?= $actor["id_actor"]?>"> <?= $actor["NAMES"] ?> </a></td>
                    <td class="imageActeur"><img src="public/img/acteurs/<?=$actor['first_name']?>.<?=$actor['forname']?>.jpg" alt=""></td>
                    <td><?= $actor["gender"] ?></td>
                    <td> <?= $actor["birth"] ?> </td>
                    <td><button><a href="index.php?action=deleteActor&id=<?=$actor["id_actor"] ?>">Supprimer l'acteur</a></button> </td>
                    <td><button><a href="index.php?action=deletePerson&id=<?=$actor["id_actor"] ?>">Supprimer la personne</a></button> </td>
                </tr>
            <?php } ?>
    </tbody>
</table>
<?php 
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
}
$title = "Liste des acteurs";
$second_title = "Liste des acteurs";
$contain = ob_get_clean();
require "view/template.php";
?>
