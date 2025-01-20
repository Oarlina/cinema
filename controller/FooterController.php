<?php

namespace Controller;
use Model\Connect;
use PDOException; 

class FooterController {
    
    /* Lister des films*/ 
    public function confidentialite () {
        $pdo = Connect::seConnecter();
        require "view/politique_confidentialite.php"; 
    }
    /* Lister des films*/ 
    public function mention () {
        $pdo = Connect::seConnecter();
        require "view/mentions_legales.php"; 
    }
    /* Lister des films*/ 
    public function vente () {
        $pdo = Connect::seConnecter();
        require "view/condition_vente.php"; 
    }
    /* Lister des films*/ 
    public function utilisation () {
        $pdo = Connect::seConnecter();
        require "view/condition_utilisation.php"; 
    }
    /* Lister des films*/ 
    public function aide () {
        $pdo = Connect::seConnecter();
        require "view/besoin_aide.php"; 
    }
    /* Lister des films*/ 
    public function privatisation () {
        $pdo = Connect::seConnecter();
        require "view/privatisation.php"; 
    }
    /* Lister des films*/ 
    public function cse () {
        $pdo = Connect::seConnecter();
        require "view/espace_cse.php"; 
    }
}