<?php

namespace App\Controllers;

use App\Models\Aluno;

class AlunoController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        $alunos = Aluno::getAll();
        $alunoEdit = null;
        if (isset($_GET['id'])) {
            $alunoEdit = Aluno::getById($_GET['id']);
        }
        require_once __DIR__ . '/../Views/aluno.php';
    }

    public function create() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Aluno::create($_POST);
        header('Location: /alunos');
    }

    public function update($id) {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Aluno::update($id, $_POST);
        header('Location: /alunos');
    }

    public function delete($id) {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        Aluno::delete($id);
        header('Location: /alunos');
    }
}