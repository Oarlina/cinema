<?php ob_start();?>

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
                    <td><?= $film["title"] ?></td>
                    <td> <?= $film["sortie_film"] ?> </td>
                    <td> <?= $film["duree_film"] ?> </td>
                </tr>
            <?php } ?>
    </tbody>
</table>

<?php
$title = "Liste de films d'un realisateur";
$second_title = "Liste de film du realisateur";
$contain = ob_get_clean();
require_once "view/template.php";
?>
