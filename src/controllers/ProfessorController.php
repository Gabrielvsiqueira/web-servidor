<?php
require_once __DIR__ . '/../models/Professor.php';

$action = $_GET['action'] ?? $_POST['action'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'create') {
    $nome = $_POST['nomeProfessor'] ?? '';
    $email = $_POST['emailProfessor'] ?? '';
    $dataNascimento = $_POST['dataNascimento'] ?? '';
    $disciplina = $_POST['disciplina'] ?? '';

    if ($nome && $email && $dataNascimento && $disciplina) {
        addProfessor($nome, $email, $dataNascimento, $disciplina);
    }
}

if ($action === 'delete') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        deleteProfessor($id);
    }
}

if ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['idProfessor'];
    $nome = $_POST['nomeProfessor'];
    $email = $_POST['emailProfessor'];
    $dataNascimento = $_POST['dataNascimento'];
    $disciplina = $_POST['disciplina'];

    updateProfessor($id, $nome, $email, $dataNascimento, $disciplina);
}

$professores = getProfessores();

$professorEdit = null;
if ($action === 'edit') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $professorEdit = getProfessorById($id);
    }
}

include __DIR__ . '/../views/professor.php';
