<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class FooterController {
    // lien pour les pages du footer
    public function confidentialite () {
        $pdo = Connect::seConnecter();
        require "view/politique_confidentialite.php"; 
    }
    public function mention () {
        $pdo = Connect::seConnecter();
        require "view/mentions_legales.php"; 
    }
    public function vente () {
        $pdo = Connect::seConnecter();
        require "view/condition_vente.php"; 
    }
    public function utilisation () {
        $pdo = Connect::seConnecter();
        require "view/condition_utilisation.php"; 
    }
    public function aide () {
        $pdo = Connect::seConnecter();
        require "view/besoin_aide.php"; 
    }
    public function privatisation () {
        $pdo = Connect::seConnecter();
        require "view/privatisation.php"; 
    }
    public function cse () {
        $pdo = Connect::seConnecter();
        require "view/espace_cse.php"; 
    }
}