
<?php ob_start(); ?>

<form action="index.php?action=addCategory" method="post">
    <label for="newType">Nom de la catégorie: </label>
    <input type="text" name="name_type"> 
    <button type="submit" name="submit">Valider</button>
</form>

<?php
$title = "Liste des categories";
$second_title = "Liste des categories";
$contain = ob_get_clean();
require "view/template.php";
