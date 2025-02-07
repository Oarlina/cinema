
<?php ob_start(); ?>

<form action="index.php?action=addActor" method="post">
    <label for="newType">Nom : </label><input type="text" name="forname"> 
    <label for="newType">Prénom : </label><input type="text" name="firstname"> <br>
    <label for="newType">Sexe : </label><input type="text" name="sexe"> <br>
    <label for="newType">Date de naissance (a-m-j) : </label><input type="date" name="date_birth"> 
    <button type="submit" name="submit">Valider</button>
</form>
 
<?php
$title = "Liste des acteurs";
$second_title = "Liste des acteurs";
$contain = ob_get_clean();
require "view/template.php";
