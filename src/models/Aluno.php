<?php
    $alunos = [
        [
            'idAluno' => 1,
            'nomeAluno' => 'maria teste',
            'dataNascimento' => '25/02/2001',
            'turma' => '5 ano',

        ],
        [
            'idAluno' => 2,
            'nomeAluno' => 'diogo teste',
            'dataNascimento' => '25/02/2001',
            'turma' => '7 ano',

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