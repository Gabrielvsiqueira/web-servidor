<?php

namespace App\Controllers;

use App\Models\User;

class AuthController {
    public function showLoginForm() {
        require_once __DIR__ . '/../Views/login.php';
    }

    public function login() {
        session_start();
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = User::checkUser($email, $password);

        if ($user) {
            $_SESSION['user'] = $user;
            header('Location: /home');
            exit;
        } else {
            header('Location: /login?error=Email ou senha inválidos');
            exit;
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /login');
        exit;
    }
}