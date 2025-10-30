<?php
namespace App\Models;

use PDO;
use App\Config\Database;

class User {
    public static function checkUser($email, $password) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $stmt->execute(['email' => $email, 'password' => $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}