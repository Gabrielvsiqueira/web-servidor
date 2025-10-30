<?php

namespace App\Controllers;

use App\Models\Professor;

class ProfessorController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        $professores = Professor::getAll();
        $professorEdit = null;
        if (isset($_GET['id'])) {
            $professorEdit = Professor::getById($_GET['id']);
        }
        require_once __DIR__ . '/../Views/professor.php';
    }

    public function create() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Professor::create($_POST);
        header('Location: /professores');
    }

    public function update($id) {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Professor::update($id, $_POST);
        header('Location: /professores');
    }

    public function delete($id) {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Professor::delete($id);
        header('Location: /professores');
    }
}