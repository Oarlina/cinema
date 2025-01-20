<?php ob_start();?>

<p>
    <b>Objet</b>
    Les présentes CGV régissent les conditions de réservation et d'achat de billets via notre site.
    <br>
    <b>Prix et Paiement</b>
    Les prix sont indiqués en euros TTC. Le paiement s'effectue en ligne par carte bancaire.
    <br>
    <b>Annulation et Remboursement</b>
    Les billets ne sont ni échangés ni remboursés, sauf en cas d'annulation de la séance par nos soins.
    <br>
    <b>Responsabilité</b>
    Nous ne pouvons être tenus responsables des perturbations dues à des événements hors de notre contrôle.
</p>

<?php
$title = "Conditions Générales de Vente (CGV)";
$second_title = "Conditions Générales de Vente (CGV)";
$contain = ob_get_clean();
require "view/template.php";