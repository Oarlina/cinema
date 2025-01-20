<?php ob_start();?>

<p>
    Nous sommes là pour vous aider !
    <b>Contactez-nous</b>
    <ul>
        <li>Par téléphone : [Numéro]</li>
        <li>Par téléphone : [Numéro]</li>
        <li>Par téléphone : [Numéro]</li>
    </ul>
    Nos horaires :
    <ul>
        <li>Par téléphone : [Numéro]</li>
        <li>Par téléphone : [Numéro]</li>
    </ul>
</p>

<?php
$title = "Besoin d'aide ?";
$second_title = "Besoin d'aide ?";
$contain = ob_get_clean();
require "view/template.php";