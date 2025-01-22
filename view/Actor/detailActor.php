<?php ob_start(); 
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> role</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>NOM DU FILM</th>
            <th>ROLE</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach ($requete->fetchAll() as $casting) {?>
            <tr>
                <td><a href="index.php?action=detailFilm&id=<?= $casting["id_film"]?>"> <?= $casting["title"] ?></a></td>
                <td><a href="index.php?action=detailRole&id=<?= $casting["id_role"]?>"> <?= $casting["name_role"] ?> </a></td>
            </tr>
            <?php } ?> 
    </tbody>
</table>

<?php 
}else {
    ?><p>Il n'y a aucun rôle!</p> <?php
}
$title = "Liste de role";
$second_title = "Liste de role";
$contain = ob_get_clean();
require "view/template.php";
?>
