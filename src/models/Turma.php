<?php
$turmas = [
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
];

function getTurmas() {
    global $turmas;
    return $turmas;
}

function getTurmaById($id) {
    global $turmas;
    foreach ($turmas as $turma) {
        if ($turma['idTurma'] == $id) {
            return $turma;
        }
    }
    return null;
}

function addTurma($serie, $totalAlunos, $materia, $professor) {
    global $turmas;
    $novo = [
        "idTurma" => count($turmas) + 1,
        "anoTurma" => $serie,
        "quantidadeAlunos" => $totalAlunos,
        "materias" => $materia,
        "professor" => $professor,
    ];
    $turmas[] = $novo;
}

function deleteTurma($id) {
    global $turmas;
    foreach ($turmas as $key => $turma) {
        if ($turma['idTurma'] == $id) {
            unset($turmas[$key]);
        }
    }
    $turmas = array_values($turmas);
}

function updateTurma($id, $serie, $totalAlunos, $materia, $professor) {
    global $turmas;
    foreach ($turmas as &$turma) {
        if ($turma['idTurma'] == $id) {
            $turma['anoTurma'] = $serie;
            $turma['quantidadeAlunos'] = $totalAlunos;
            $turma['materias'] = $materia;
            $turma['professor'] = $professor;
            break;
        }
    }
}
