<?php ob_start();?>


<p>page d'acceuil</p>

<?php
$title = "";
$second_title = "";
$contain = ob_get_clean();
require "view/template.php";
?>
