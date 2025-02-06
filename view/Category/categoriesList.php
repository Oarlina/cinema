<?php ob_start(); 
    if ($requete->rowCount() != 0){
?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount();?> type de catégories.</p>

<button><a href="index.php?action=addCategoryForm">Ajouter une catégorie</a></button>
<section class="corps">
    <?php
    foreach ($requete->fetchAll() as $type_category) {
        ?>
    <div class="categorie">
        <a href="index.php?action=detailCategory&id=<?= $type_category["id_type"]?>">
            <img src="public/img/categories/<?= $type_category["name_type"]?>.jpg" alt="image categorie">
            <p> <?= $type_category["name_type"] ?> </p>
        </a>
    </div>
<?php 
    }
?>
    </section>
<?php
}else {
    ?><p>Il n'y a aucun élément!</p>
    <button><a href="index.php?action=addCategoryForm">Ajouter une catégorie</a></button> <?php
}
 
$title = "Liste des categories";
$second_title = "Liste des categories";
$contain = ob_get_clean();
require "view/template.php";
?>
