<?php ob_start();?>

<p>
    <b>Faites de votre événement une expérience unique !</b>
    Nous proposons des solutions de privatisation pour :
    <ul>
        <li>Séances privées</li>
        <li>Avant-premières</li>
        <li>Conférences et séminaires</li>
    </ul>
    <b>Contact</b>
    Pour plus d'informations : [Email] ou [Numéro de téléphone].
</p>

<?php
$title = "Privatisation";
$second_title = "Privatisation";
$contain = ob_get_clean();
require "view/template.php";