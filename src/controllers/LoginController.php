<?php

require_once __DIR__ . '/../models/User.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error = "Erro: preencha todos os campos!";
    } else {
        $user = checkUser($email, $password);
        if ($user) {
        echo "Bem-vindo, {$user['nome']}!";

        } else {
            $error = "Erro: e-mail ou senha inválidos!";
        }
    }
}

require_once __DIR__ . '/../views/Login.php';
