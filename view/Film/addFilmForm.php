<?php ob_start(); ?>

<form action="index.php?action=addFilm" method="post">
    <label for="newType">Nom du film : </label><input type="string" name="title"> 
    <label for="newType">Date de sortie : </label><input type="date" name="release_date"><br> 
    <label for="newType">Durée en minute : </label><input type="int" name="duration"> 
    <label for="newType">Synopsis : </label><input type="textarea" name="synopsis"> 

    <label for="newType">Réalisateur : </label>
    <select name="director_id" >
        <option value="">Choissisez un réalisateur</option>
        <?php foreach($requeteR->fetchAll() as $director)
                { ?>
                    <option value="<?= $director["id_director"]?>"><?= $director["NAMES"]?></option> <?php 
                }?>
    </select>

    <fieldset>
        <legend>Choissisez un genre:</legend>
        <?php foreach($requeteG->fetchAll() as $type_category)
                { ?>
                    <div><input type="checkbox" id="<?= $type_category["id_type"]?>" name="gender[]"><?= $type_category["name_type"]?></div><?php
                }?>
    </fieldset>
    <button type="submit" name="submit">Valider</button>
</form>
 
<?php
$title = "Liste des films";
$second_title = "Liste des films";
$contain = ob_get_clean();
require "view/template.php";
