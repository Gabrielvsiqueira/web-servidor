<?php

namespace App\Models;

use PDO;
use App\Config\Database;
class Professor {
    public static function getAll() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM professores");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM professores WHERE idProfessor = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO professores (nomeProfessor, emailProfessor, dataNascimento, disciplina) VALUES (:nome, :email, :dataNascimento, :disciplina)");
        $stmt->execute([
            'nome' => $data['nomeProfessor'],
            'email' => $data['emailProfessor'],
            'dataNascimento' => $data['dataNascimento'],
            'disciplina' => $data['disciplina']
        ]);
    }

    public static function update($id, $data) {
        $db = Database::getConnection();
        $stmt = $db->prepare("UPDATE professores SET nomeProfessor = :nome, emailProfessor = :email, dataNascimento = :dataNascimento, disciplina = :disciplina WHERE idProfessor = :id");
        $stmt->execute([
            'id' => $id,
            'nome' => $data['nomeProfessor'],
            'email' => $data['emailProfessor'],
            'dataNascimento' => $data['dataNascimento'],
            'disciplina' => $data['disciplina']
        ]);
    }

    public static function delete($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("DELETE FROM professores WHERE idProfessor = :id");
        $stmt->execute(['id' => $id]);
    }
}