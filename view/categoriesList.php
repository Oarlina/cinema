<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> type de catégories.</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>GENRE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $type) {?>
                <tr>
                    <td><?= $type["id_type"] ?></td>
                    <td><a href="view/categoryList.php?id=<?= $type["id_type"]?>"> <?= $type["name"] ?> </a></td>

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
