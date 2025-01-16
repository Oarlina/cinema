<?php

namespace Model;

abstarct class Connect {
    const HOST = "localhost";
    const DB = "cinema";
    const USER = "root";
    const PASS = "";
    /* self:: -> permet d'insdtancier la connexion a la BDD*/
    public static function seConnecter() {
        try{
            return new \PDO(
                "mysql:host=".self::HOST.";dbname=".self::DB.";charset=utf8", self:::USER, self::PASS);
        } catch (\PDOExeption $ex) {
            return $ex->getMessage();        
        }
    }
}
