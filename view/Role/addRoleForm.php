
<?php ob_start(); ?>

<form action="index.php?action=addRole" method="post">
    <label for="newType">Nom du role: </label>
    <input type="text" name="name_role"> 
    <button type="submit" name="submit">Valider</button>
</form>

<?php
$title = "Liste des rôles";
$second_title = "Liste des rôles";
$contain = ob_get_clean();
require "view/template.php";
