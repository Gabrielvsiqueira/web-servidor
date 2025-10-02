<?php
session_start();
if (!isset($_SESSION['turmas'])) {
    $_SESSION['turmas'] = [
        [
            "idTurma" => 1,
            "anoTurma" => "5º ano",
            "quantidadeAlunos" => 40,
            "materias" => "História",
            "professor" => "Gabriel Siqueira",
        ],
        [
            "idTurma" => 2,
            "anoTurma" => "7º ano",
            "quantidadeAlunos" => 30,
            "materias" => "Matemática",
            "professor" => "João Silva",
        ],
        [
            "idTurma" => 3,
            "anoTurma" => "6º ano",
            "quantidadeAlunos" => 35,
            "materias" => "Português",
            "professor" => "Ana Paula Costa",
        ],
        [
            "idTurma" => 4,
            "anoTurma" => "8º ano",
            "quantidadeAlunos" => 28,
            "materias" => "Física",
            "professor" => "Pedro Henrique",
        ],
        [
            "idTurma" => 5,
            "anoTurma" => "9º ano",
            "quantidadeAlunos" => 32,
            "materias" => "Química",
            "professor" => "Mariana Oliveira",
        ],
        [
            "idTurma" => 6,
            "anoTurma" => "1º ano EM",
            "quantidadeAlunos" => 45,
            "materias" => "Biologia",
            "professor" => "Carlos Santos",
        ],
        [
            "idTurma" => 7,
            "anoTurma" => "2º ano EM",
            "quantidadeAlunos" => 38,
            "materias" => "Geografia",
            "professor" => "Sofia Fernandes",
        ]
    ];
}

function getTurmas() {
    return $_SESSION['turmas'];
}

function getTurmaById($id) {
    foreach ($_SESSION['turmas'] as $turma) {
        if ($turma['idTurma'] == $id) {
            return $turma;
        }
    }
    return null;
}

function addTurma($serie, $totalAlunos, $materia, $professor) {
    $turmas = $_SESSION['turmas'];
    $novo = [
        "idTurma" => count($turmas) + 1,
        "anoTurma" => $serie,
        "quantidadeAlunos" => $totalAlunos,
        "materias" => $materia,
        "professor" => $professor,
    ];
    $_SESSION['turmas'][] = $novo;
}

function deleteTurma($id) {
    foreach ($_SESSION['turmas'] as $key => $turma) {
        if ($turma['idTurma'] == $id) {
            unset($_SESSION['turmas'][$key]);
        }
    }
    $_SESSION['turmas'] = array_values($_SESSION['turmas']);
}

function updateTurma($id, $serie, $totalAlunos, $materia, $professor) {
    foreach ($_SESSION['turmas'] as &$turma) {
        if ($turma['idTurma'] == $id) {
            $turma['anoTurma'] = $serie;
            $turma['quantidadeAlunos'] = $totalAlunos;
            $turma['materias'] = $materia;
            $turma['professor'] = $professor;
            break;
        }
    }
}
