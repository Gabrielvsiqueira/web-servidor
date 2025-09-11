<?php
    function checkUser($email, $password){
        $mockUsers = [
                'email' => 'teste@gmail.com',
                'password' => 'teste123',
                'nome' => 'Gabriel teste'
            ];

            if($email === $mockUsers['email'] && $password === $mockUsers['password']){
                return $mockUsers;
            } else {
                return null;
            }
    }

