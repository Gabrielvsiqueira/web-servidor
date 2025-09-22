<?php
    $professores = [
        [
            'idProfessor' => 1,
            'nomeProfessor' => 'Gabriel Siqueira',
            'emailProfessor' => 'gabriel@teste.com',
            'dataNascimento' => '2001-02-25',
            'disciplina' => 'História'
        ],
        [
            'idProfessor' => 2,
        'nomeProfessor' => 'João Silva',
        'emailProfessor' => 'joao@teste.com',
        'dataNascimento' => '1990-06-31',
        'disciplina' => 'Matemática'
        ]
        ];


        function getProfessores() {
            global $professores;
            return $professores;
        }

        function getProfessorById($id) {
            global $professores;
            foreach ($professores as $professor) {
                if ($professor['idProfessor'] == $id) {
                    return $professor;
                }
            }
            return null;
        }

        function addProfessor($nome, $email, $dataNascimento, $disciplina) {
            global $professores;
            $novo = [
                'idProfessor' => count($professores) + 1,
                'nomeProfessor' => $nome,
                'emailProfessor' => $email,
                'dataNascimento' => $dataNascimento,
                'disciplina' => $disciplina
            ];
            $professores[] = $novo;
        }

        function deleteProfessor($id) {
            global $professores;
            foreach ($professores as $key => $prof) {
                if ($prof['idProfessor'] == $id) {
                    unset($professores[$key]);
                }
            }
            $professores = array_values($professores);
        }

        function updateProfessor($id, $nome, $email, $dataNascimento, $disciplina) {
            global $professores;
            foreach ($professores as &$professor) {
                if ($professor['idProfessor'] == $id) {
                    $professor['nomeProfessor'] = $nome;
                    $professor['emailProfessor'] = $email;
                    $professor['dataNascimento'] = $dataNascimento;
                    $pprofessorof['disciplina'] = $disciplina;
                    break;
                }
            }
        }
