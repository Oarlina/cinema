<?php ob_start();?>

<p>
    <b>Introduction</b> Votre vie privée est importante pour nous. Cette politique 
    explique comment nous collectons, utilisons et protégeons vos informations 
    personnelles lorsque vous utilisez notre site web.
    <br>
    <b>Données Collectées</b> Nous collectons des informations personnelles lorsque 
    vous créez un compte, réservez des billets, ou nous contactez. Cela peut inclure :
    <ul>
        <li>Nom et prénom</li>   
        <li>Adresse électronique</li>
        <li>Numéro de téléphone</li>
        <li>Données de paiement</li>
        <li>Historique des réservations</li>
    </ul>

    <b>Utilisation des Données</b>Vos données sont utilisées pour :
    <ul>
        <li>Gérer vos réservations et commandes</li>
        <li>Améliorer nos services</li>
        <li>Vous informer sur nos offres et événements</li>
    </ul>

    <b>Partage des Données</b> Nous ne partageons vos données qu'avec des tiers
     nécessaires (par exemple, prestataires de paiement) et dans le respect de la loi.
    <br>
    <b>Vos Droits</b> Vous pouvez demander l'accès, la modification ou la suppression de 
    vos données en nous contactant.
    <br>
    <b>Contact</b> Pour toute question, veuillez écrire à prenom.nom@gmail.com.
</p>

<?php
$title = "Politique de confidentialité";
$second_title = "Politique de confidentialité";
$contain = ob_get_clean();
require 'view/template.php';

