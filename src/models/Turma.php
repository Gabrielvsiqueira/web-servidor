<?php

namespace App\Models;

use PDO;
use App\Config\Database;
class Turma {
    public static function getAll() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM turmas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM turmas WHERE idTurma = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO turmas (anoTurma, quantidadeAlunos, materias, professor) VALUES (:serie, :totalAlunos, :materia, :professor)");
        $stmt->execute([
            'serie' => $data['serie'],
            'totalAlunos' => $data['totalAlunos'],
            'materia' => $data['materia'],
            'professor' => $data['professor']
        ]);
    }

    public static function update($id, $data) {
        $db = Database::getConnection();
        $stmt = $db->prepare("UPDATE turmas SET anoTurma = :serie, quantidadeAlunos = :totalAlunos, materias = :materia, professor = :professor WHERE idTurma = :id");
        $stmt->execute([
            'id' => $id,
            'serie' => $data['serie'],
            'totalAlunos' => $data['totalAlunos'],
            'materia' => $data['materia'],
            'professor' => $data['professor']
        ]);
    }

    public static function delete($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("DELETE FROM turmas WHERE idTurma = :id");
        $stmt->execute(['id' => $id]);
    }
}