<?php ob_start(); ?>

<!-- <p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> type de catégories.</p> -->



<p>reussi</p>

<?php 

$title = "Liste des films avec categories";
$second_title = "Liste des films avec categories";
$contain = ob_get_clean();
require "view/template.php";
?>
