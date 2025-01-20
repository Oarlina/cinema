<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount();?> type de catégories.</p>

<button><a href="index.php?action=addCategoryForm">Ajouter une catégorie</a></button>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>GENRE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $type_category) {?>
                <tr>
                    <td><?= $type_category["id_type"] ?></td>
                    <td><a href="index.php?action=detailCategory&id=<?= $type_category["id_type"]?>"> <?= $type_category["name_type"] ?> </a></td>
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
