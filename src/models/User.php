<?php
        $users = [
                [
                    'nome' => 'Gabriel Siqueira',
                    'email' => 'teste@gmail.com',
                    'password' => '12345'
                ],
                [
                    'nome' => 'Joãozinho',
                    'email' => 'joaozinho@gmail.com',
                    'password' => '12345'
                ],
                [
                    'nome' => 'Maria',
                    'email' => 'maria123@gmail.com',
                    'password' => '12345'
                ]
            ];

    function checkUser($email, $password){
        global $users;

        foreach($users as $user){

            if ($user['email'] === $email && $user['password'] === $password){
                return $user;
            }
        }
        return null;
    }
