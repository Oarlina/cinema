<?php ob_start(); 
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> acteurs</p>
<button><a href="index.php?action=addActorForm">Ajouter un rôle</a></button>
<br>

<?php
    foreach ($requete->fetchAll() as $actor) {?>   
    <div class="actorsList">
        <img class="imageActeur" src="public/img/acteurs/<?=$actor['first_name']?>.<?=$actor['forname']?>.jpg" alt="acteur image">
        <a href="index.php?action=detailActor&id=<?= $actor["id_actor"]?>"> <?= $actor["NAMES"] ?> </a>
        <button><a href="index.php?action=deleteActor&id=<?=$actor["id_actor"] ?>">Supprimer l'acteur</a></button> 
        <button><a href="index.php?action=deletePerson&id=<?=$actor["id_actor"] ?>">Supprimer la personne</a></button>               
    </div>    
<?php 
} 
}else {
    ?><p>Il n'y a aucun élément!</p> <?php
}
$title = "Liste des acteurs";
$second_title = "Liste des acteurs";
$contain = ob_get_clean();
require "view/template.php";
?>
