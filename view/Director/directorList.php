<?php ob_start();
if ($requete->rowCount() != 0){?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> réalisateur.</p>
<button><a href="index.php?action=addDirectorForm">Ajouter un réalisateur</a></button>

<section class="corps">
<?php
    foreach ($requete->fetchAll() as $director) {?>   
    <div class="actorsList">
        <img class="imageActeur" src="public/img/acteurs/<?=$director['first_name']?>.<?=$director['forname']?>.jpg" alt="realisateur image">
        <a href="index.php?action=detailDirector&id=<?= $director["id_director"]?>"> <?= $director["NAMES"] ?> </a>
        <button class="BTNacotor"><a href="index.php?action=deleteDirector&id=<?=$director["id_director"] ?>">Supprimer le réalisateur</a></button> 
        <button class="BTNacotor"><a href="index.php?action=deletePerson&id=<?=$director["id_director"] ?>">Supprimer la personne</a></button>               
    </div>    
<?php 
} 
?> 
</section>
<?php
}else {
    ?><p>Il n'y a aucun réalisateur!</p> <?php
}
$title = "Liste des réalisateurs";
$second_title = "Liste des réalisateurs";
$contain = ob_get_clean();
require "view/template.php";
?>
