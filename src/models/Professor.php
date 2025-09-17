<?php
    $professores = [
        [
            'nomeProfessor' => 'Gabriel Siqueira',
            'dataNascimento' => '25/02/2001',
            'telefone' => '42 XXXX - XXXX',
            'disciplina' => 'História',
            'turma' => '5 ano'

        ],
        [
            'nomeProfessor' => 'João Silva',
            'dataNascimento' => '31/06/1990',
            'telefone' => '43 XXXX - XXXX',
            'disciplina' => 'Matemática',
            'turma' => '1 EM'
        ]
        ];

        function checkProfessor () {
            global $professores;

            foreach($professores as $professor){
                if ($professores['nomeProfessor'] === $nomeProfessor && $professores['Disciplina'] === $disciplina) {
                    return $professor;
                }
            }
            return null;
        }