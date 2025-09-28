<?php
    $alunos = [
        [
            'idAluno' => 1,
            'nomeAluno' => 'Maria Silva',
            'dataNascimento' => '25/02/2001',
            'turma' => '5º ano',
        ],
        [
            'idAluno' => 2,
            'nomeAluno' => 'Diogo Oliveira',
            'dataNascimento' => '10/08/2003',
            'turma' => '7º ano',
        ],
        [
            'idAluno' => 3,
            'nomeAluno' => 'Ana Paula Santos',
            'dataNascimento' => '15/11/2002',
            'turma' => '6º ano',
        ],
        [
            'idAluno' => 4,
            'nomeAluno' => 'Lucas Ferreira',
            'dataNascimento' => '03/04/2004',
            'turma' => '8º ano',
        ],
        [
            'idAluno' => 5,
            'nomeAluno' => 'Juliana Costa',
            'dataNascimento' => '20/07/2001',
            'turma' => '5º ano',
        ],
        [
            'idAluno' => 6,
            'nomeAluno' => 'Pedro Rocha',
            'dataNascimento' => '08/01/2003',
            'turma' => '7º ano',
        ],
        [
            'idAluno' => 7,
            'nomeAluno' => 'Fernanda Lima',
            'dataNascimento' => '29/09/2002',
            'turma' => '6º ano',
        ],
    ];

        function getAunos(){
            global $alunos;
            return $alunos;
        }

        function getAlunoById($id){
            global $alunos;
            foreach ($alunos as $aluno){
                if ($aluno['idAluno'] == $id){
                    return $aluno;
                }
            }
            return null;
        }

        function addAluno($nome, $dataNascimento, $turma){
            global $alunos;
            $novo = [
                'idAluno' => count($alunos) + 1,
                'nomeAluno' => $nome,
                'dataNascimento' => $dataNascimento,
                'turma' => $turma
            ];
            $alunos[] = $novo;
        }

        function deleteAluno($id) {
            global $alunos;
            foreach ($alunos as $key => $aluno) {
                if($aluno['idAluno'] == $id){
                    unset($alunos[$key]);
                }
            }
            $alunos = array_values($alunos);
        }

        function updateAluno($id, $nome, $dataNascimento, $turma) {
            global $alunos;
            foreach ($alunos as &$aluno){
                if($aluno['idAluno'] == $id) {
                    $aluno['nomeAluno'] = $nome;
                    $aluno['dataNascimento'] = $dataNascimento;
                    $aluno['turma'] = $turma;
                    break;
                }
            }
        }