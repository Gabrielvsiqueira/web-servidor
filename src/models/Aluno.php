<?php

namespace App\Models;

use PDO;
use App\Config\Database;
class Aluno {
    public static function getAll() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM alunos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM alunos WHERE idAluno = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO alunos (nomeAluno, dataNascimento, turma) VALUES (:nome, :dataNascimento, :turma)");
        $stmt->execute([
            'nome' => $data['nomeAluno'],
            'dataNascimento' => $data['dataNascimento'],
            'turma' => $data['turma']
        ]);
    }

    public static function update($id, $data) {
        $db = Database::getConnection();
        $stmt = $db->prepare("UPDATE alunos SET nomeAluno = :nome, dataNascimento = :dataNascimento, turma = :turma WHERE idAluno = :id");
        $stmt->execute([
            'id' => $id,
            'nome' => $data['nomeAluno'],
            'dataNascimento' => $data['dataNascimento'],
            'turma' => $data['turma']
        ]);
    }

    public static function delete($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("DELETE FROM alunos WHERE idAluno = :id");
        $stmt->execute(['id' => $id]);
    }
}