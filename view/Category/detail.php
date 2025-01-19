<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> film(s) dans <?= $requete->type["name"]?>.</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php foreach($requete->fetchAll() as $film){  ?>
            <td></td>
            <td><?= $film["title"] ?></td>

            <!-- faire de la ligne un lien cliquable
            le redirection une fonction detail categorie et l'id de la categorie -->
            <?php } ?>
        </tr>
    </tbody>
</table>
 
<?php 

$title = "Liste des films avec categories";
$second_title = "Liste des films avec categories";
$contain = ob_get_clean();

require "view/template.php";
?>
