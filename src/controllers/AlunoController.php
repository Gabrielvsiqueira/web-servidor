<?php
require_once __DIR__. '/../models/Aluno.php';

$action = $_GET['action'] ?? $_POST['action'] ?? '';

if($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'create'){
    $nome = $_POST['nomeAluno'] ?? '';
    $dataNascimento = $_POST['dataNascimento'] ?? '';
    $turma = $_POST['turma'] ?? '';

    if($nome && $dataNascimento && $turma != ''){
        addAluno($nome, $dataNascimento, $turma);
    }

}

if ($action === 'delete') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        deleteAluno($id);
    }
}

if ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['idAluno'];
    $nome = $_POST['nomeAluno'];
    $dataNascimento = $_POST['dataNascimento'];
    $turma = $_POST['turma'];

    updateAluno($id, $nome, $dataNascimento, $turma);
}

$alunos = getAunos();

$alunoEdit = null;
if ($action === 'edit') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $alunoEdit = getAlunoById($id);
    }
}

require_once __DIR__. '/../views/Aluno.php';