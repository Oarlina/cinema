<?php ob_start(); 
if ($requete->rowCount() != 0){
    ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount();?> type de catégories.</p>

<button><a href="index.php?action=addCategoryForm">Ajouter une catégorie</a></button>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>GENRE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $type_category) {?>
                <tr>
                    <td><a href="index.php?action=detailCategory&id=<?= $type_category["id_type"]?>"> <?= $type_category["name_type"] ?> </a></td>
                    <!-- faire de la ligne un lien cliquable
                    le redirection une fonction detail categorie et l'id de la categorie -->
            
                </tr>
            <?php } ?>
    </tbody>
</table>

<?php 
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
}
 
$title = "Liste des categories";
$second_title = "Liste des categories";
$contain = ob_get_clean();
require "view/template.php";
?>
