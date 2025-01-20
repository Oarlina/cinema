<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class FooterController {
    // lien pour les pages du footer
    public function confidentialite () {
        require "view/politique_confidentialite.php"; 
    }
    public function mention () {
        require "view/mentions_legales.php"; 
    }
    public function vente () {
        require "view/condition_vente.php"; 
    }
    public function utilisation () {
        require "view/condition_utilisation.php"; 
    }
    public function aide () {
        require "view/besoin_aide.php"; 
    }
    public function privatisation () {
        require "view/privatisation.php"; 
    }
    public function cse () {
        require "view/espace_cse.php"; 
    }
}