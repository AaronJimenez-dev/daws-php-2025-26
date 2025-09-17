<?php
        $usuarios = [
            "user1" => [
                "nombre" => "Nora",
                "password" => "123123",
                "email" => "nora@php.net"
            ],
            "user2" => [
                "nombre" => "Pepe",
                "password" => "456456",
                "email" => "pepe@php.net"
            ]
        ];

        $user = $_GET['user'];
        $pass = $_GET['pass'];
        function operacion($usuarios, $user, $pass) {
            foreach($usuarios as $u){
                if($user == $u['nombre'] && $pass == $u['password']){
                    return "Login exitoso";
                }
            }
            return "El usuario no existe o la contraseña es incorrecta";
        }   
        $resultado = operacion($usuarios, $user, $pass);
        require 'index.view.php';
?>