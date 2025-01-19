<?php ob_start(); ?>


<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>SEXE</th>
            <th>DATE_DE_NAISSANCE</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($requete->fetchAll() as $person) {?>
            <tr>
                <td> <?= $person["names"] ?> </td>
                <td> <?= $person["gender"] ?> </td>
                <td> <?= $person["YEAR(date_birth)"] ?> </td> -->
            </tr>
            <?php } ?> 
    </tbody>
</table>

<?php 

$title = "Liste des acteurs";
$second_title = "Liste des acteurs";
$contain = ob_get_clean();
require "view/template.php";
?>
