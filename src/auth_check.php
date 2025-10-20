<?php
session_start();

// se o usuário não estiver logado, volta para o login
if (!isset($_SESSION['user'])) {
    header('Location: /src/views/Login.php');
    exit;
}
