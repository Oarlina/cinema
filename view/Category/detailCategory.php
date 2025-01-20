<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> film(s) dans <?php $f=$requete->fetch(); $f["name_type"]?>.</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>TITLE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($requete->fetchAll() as $film){  ?>
            <tr>
                <td><a href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["title"] ?></a></td>

                <!-- faire de la ligne un lien cliquable
                le redirection une fonction detail categorie et l'id de la categorie -->
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
