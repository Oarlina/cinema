
<?php ob_start(); ?>

<form action="index.php?action=addCasting" method="post">

    <label for="newType">Film : </label>
    <select name="film_id" >
        <option value="">Choissisez un film</option>
        <?php foreach($requeteF->fetchAll() as $film)
                { ?>
                    <option value="<?= $film["id_film"]?>"><?= $film["title"]?></option> <?php 
                }?>
    </select>

    <label for="newType">Acteur : </label>
    <select name="actor_id" >
        <option value="">Choissisez un acteur</option>
        <?php foreach($requeteA->fetchAll() as $actor)
                { ?>
                    <option value="<?= $actor["id_actor"]?>"><?= $actor["NAMES"]?></option> <?php 
                }?>
    </select>

    <label for="newType">Role : </label>
    <select name="role_id" >
        <option value="">Choissisez un role</option>
        <?php foreach($requeteR->fetchAll() as $role)
                { ?>
                    <option value="<?= $role["id_role"]?>"><?= $role["name_role"]?></option> <?php 
                }?>
    </select>
    <button type="submit" name="submit">Valider</button>
</form>

<?php
$title = "Liste des casting";
$second_title = "Liste des casting";
$contain = ob_get_clean();
require "view/template.php";
  