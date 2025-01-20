<?php ob_start();?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> films</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>ANNEE SORTIE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $film) { ?>
                <tr>
                    <td> <a href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["title"] ?> </a></td>
                    <td> <?= $film["sortie_film"] ?> </td>
                </tr>
            <?php } ?>
    </tbody>
</table>

<?php
$title = "Liste des films avec categories";
$second_title = "Liste des films avec categories";
$contain = ob_get_clean();
require "view/template.php";
?>