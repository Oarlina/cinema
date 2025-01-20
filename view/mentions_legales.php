<?php ob_start();?>

<p>
    <b>Propriétaire du Site</b>Nom de l'entreprise : [Nom de l'entreprise]
    Adresse : [Adresse postale]  
    Numéro de téléphone : [Numéro] 
    E-mail : [Email] 
    SIRET : [Numéro SIRET] <br>
    <b>Hébergeur</b>Nom : [Nom de l'hébergeur] 
    Adresse : [Adresse de l'hébergeur] 
    Numéro de téléphone : [Numéro] <br>
    <b>Responsable de la publication</b>Nom : [Nom du responsable]
</p>

<?php
$title = "Mentions Légales";
$second_title = "Mentions Légales";
$contain = ob_get_clean();
require "view/template.php";
?>