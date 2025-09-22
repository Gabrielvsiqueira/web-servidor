<?php
require_once __DIR__ . '/../models/Turma.php';

$action = $_GET['action'] ?? $_POST['action'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'create') {
    $serie = $_POST['serie'] ?? '';
    $totalAlunos = $_POST['totalAlunos'] ?? '';
    $materia = $_POST['materia'] ?? '';
    $professor = $_POST['professor'] ?? '';

    if ($serie && $totalAlunos && $materia && $professor) {
        addTurma($serie, $totalAlunos, $materia, $professor);
    }
}

if ($action === 'delete') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        deleteTurma($id);
    }
}

if ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['idTurma'];
    $serie = $_POST['serie'];
    $totalAlunos = $_POST['totalAlunos'];
    $materia = $_POST['materia'];
    $professor = $_POST['professor'];

    updateTurma($id, $serie, $totalAlunos, $materia, $professor);
}

$turmas = getTurmas();

$turmaEdit = null;
if ($action === 'edit') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $turmaEdit = getTurmaById($id);
    }
}

include __DIR__ . '/../views/turma.php';
