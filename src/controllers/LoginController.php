<?php
session_start();
require_once __DIR__ . '/../models/User.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = checkUser($email, $password);

    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: ../views/Home.php');
        exit;
    } else {
        header('Location: ../index.php?error=Email ou senha inválidos');
        exit;
    }
}
