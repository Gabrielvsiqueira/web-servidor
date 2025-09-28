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
        ],
        [
            'idProfessor' => 3,
            'nomeProfessor' => 'Ana Paula Costa',
            'emailProfessor' => 'ana.costa@escola.com',
            'dataNascimento' => '1985-04-12',
            'disciplina' => 'Português'
        ],
        [
            'idProfessor' => 4,
            'nomeProfessor' => 'Pedro Henrique',
            'emailProfessor' => 'pedro.henrique@escola.com',
            'dataNascimento' => '1978-09-03',
            'disciplina' => 'Física'
        ],
        [
            'idProfessor' => 5,
            'nomeProfessor' => 'Mariana Oliveira',
            'emailProfessor' => 'mariana.oliveria@escola.com',
            'dataNascimento' => '1992-01-20',
            'disciplina' => 'Química'
        ],
        [
            'idProfessor' => 6,
            'nomeProfessor' => 'Carlos Santos',
            'emailProfessor' => 'carlos.santos@escola.com',
            'dataNascimento' => '1988-07-07',
            'disciplina' => 'Biologia'
        ],
        [
            'idProfessor' => 7,
            'nomeProfessor' => 'Sofia Fernandes',
            'emailProfessor' => 'sofia.fernandes@escola.com',
            'dataNascimento' => '1995-11-28',
            'disciplina' => 'Geografia'
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
                    $professor['disciplina'] = $disciplina;
                    break;
                }
            }
        }
