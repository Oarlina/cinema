<?php ob_start(); ?>

<form action="index.php?action=addFilm" method="post">
    <label for="newType">Nom du film : </label><input type="text" name="title"> <br> 
    <label for="newType">Affiche du film(en jpg) : </label><input type="image" name="img"> <br> 
    <label for="newType">Date de sortie : </label><input type="date" name="release_date"><br> 
    <label for="newType">Durée en minute : </label><input type="text" name="duration"> <br> 
    <label for="newType">Synopsis : </label><input type="textarea" name="synopsis"> <br> 

    <label for="newType">Réalisateur : </label>
    <select name="director_id" >
        <option value="">Choissisez un réalisateur</option>
        <?php foreach($requeteR->fetchAll() as $director)
                { ?>
                    <option value="<?= $director["id_director"]?>"><?= $director["NAMES"]?></option> <?php 
                }?>
    </select>
    <br>
    <label>Choissisez un genre:</label>
    <?php foreach($requeteG->fetchAll() as $type_category)
            { ?>
                <div><input type="checkbox" value="<?= $type_category["id_type"]?>" name="type_id[]"><?= $type_category["name_type"]?></div><?php 
            }?>

    <button type="submit" name="submit">Valider</button>
</form>
 
<?php
$title = "Liste des films";
$second_title = "Liste des films";
$contain = ob_get_clean();
require "view/template.php";
