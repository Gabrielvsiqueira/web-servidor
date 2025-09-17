<?php
    $alunos = [
        [
            'nomeAluno' => 'maria teste',
            'dataNascimento' => '25/02/2001',
            'turma' => '5 ano',

        ],
        [
            'nomeAluno' => 'diogo teste',
            'dataNascimento' => '25/02/2001',
            'turma' => '5 ano',

        ],
        ];

        function checkProfessor () {
            global $alunos;

            foreach($alunos as $aluno){
                if ($alunos['nomeAluno'] === $nomeAluno && $alunos['turma'] === $turma) {
                    return $alunos;
                }
            }
            return null;
        }