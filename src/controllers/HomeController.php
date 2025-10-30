<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        require_once __DIR__ . '/../Views/home.php';
    }
}