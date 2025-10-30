<?php

namespace App\Controllers;

use App\Models\Turma;

class TurmaController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        $turmas = Turma::getAll();
        $turmaEdit = null;
        if (isset($_GET['id'])) {
            $turmaEdit = Turma::getById($_GET['id']);
        }
        require_once __DIR__ . '/../Views/turma.php';
    }

    public function create() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Turma::create($_POST);
        header('Location: /turmas');
    }

    public function update($id) {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Turma::update($id, $_POST);
        header('Location: /turmas');
    }

    public function delete($id) {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Turma::delete($id);
        header('Location: /turmas');
    }
}