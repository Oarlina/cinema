<?php ob_start();?>

<p>
    <b>Acceptation des CGU</b>
    En utilisant ce site, vous acceptez les présentes conditions.
    <br>
    <b>Acceptation des CGU</b>
    Vous vous engagez à :
    <ul>
        <li>Acceptation des CGU</li>
        <li>Ne pas utiliser le site à des fins illégales</li>
    </ul>
    <b>Propriété Intellectuelle</b>
    Tout contenu est protégé par des droits d'auteur. 
    Toute reproduction est interdite sans autorisation.
</p>

<?php
$title = "Conditions Générales d'Utilisation (CGU)";
$second_title = "Conditions Générales d'Utilisation (CGU)";
$contain = ob_get_clean();
require "view/template.php";