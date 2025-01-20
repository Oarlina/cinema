<?php ob_start();?>

<p>
    <b>Avantages pour les comités d'entreprise</b>
    Profitez d'offres privilégiées pour vos collaborateurs :
    <ul>
        <li>Tarifs réduits</li>
        <li>Réservations prioritaires</li>
        <li>Organisation d'événements d'entreprise</li>
    </ul>
    <b>Contactez-nous</b>
    <ul>
        <li>Par e-mail : [Email]</li>
        <li>Par téléphone : [Numéro]</li>
    </ul>
</p>

<?php
$title = "Espace CSE";
$second_title = "Espace CSE";
$contain = ob_get_clean();
require "view/template.php";