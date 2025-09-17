<?php
    $usuarios = [
        "aaron" => [
            "nombre" => "Aaron",
            "apellidos" => "Jimenez",
            "contraseña" => "12345"
        ],
        "unax" => [
            "nombre" => "Unax",
            "apellidos" => "Iriondo",
            "contraseña" => "54321"
        ]
    ];
    if (!isset($_POST["user"])):
        $datos = false;
    else: 
        $datos = true;
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        if (array_key_exists($user, $usuarios)):    
            if ($usuarios[$user]['contraseña'] == $pass):
                $nombre = $usuarios[$user]['nombre'];
                $apellidos = $usuarios[$user]['apellidos'];
                $correctos = true;
            else:
                $correctos = false;
            endif;
        else:
            $correctos = false;
        endif;
    endif;
    if(!$correctos):
        require 'index.view.php';
    else:
        require 'index.view.login.php';
    endif;
?>