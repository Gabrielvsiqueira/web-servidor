<?php
namespace App\Config;

use PDO;
use PDOException;

class Database {
    public static function getConnection() {
        try {
            $db = new PDO('mysql:host=127.0.0.1;port=3306;dbname=gestao_escolar;charset=utf8',
                'root',
                'rootpassword');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }
}