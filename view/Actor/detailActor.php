<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount()?> role</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>NOM DU FILM</th>
            <th>ROLE</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($requete->fetchAll() as $casting) {?>
            <tr>
                <td> <?= $casting["title"] ?> </td>
                <td> <?= $casting["name"] ?> </td>
            </tr>
            <?php } ?> 
    </tbody>
</table>

<?php 

$title = "Liste de role ";
$second_title = "Liste de role";
$contain = ob_get_clean();
require "view/template.php";
?>
