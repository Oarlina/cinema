<?php ob_start();
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> film</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>TITRE DU FILM </th>
            <th>DATE DE SORTIE </th>
            <th>DUREE DU FILM (EN HH:MM) </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $film) {?>
                <tr>
                    <td><a href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["title"] ?></a></td>
                    <td> <?= $film["sortie_film"] ?> </td>
                    <td> <?= $film["duree_film"] ?> </td>
                </tr>
            <?php } ?>
    </tbody>
</table>

<?php
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
}
$title = "Liste de films d'un realisateur";
$second_title = "Liste de film du realisateur";
$contain = ob_get_clean();
require_once "view/template.php";
?>
