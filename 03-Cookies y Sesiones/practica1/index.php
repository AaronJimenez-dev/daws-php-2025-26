<?php
    $existe = false;
    if(isset($_COOKIE['usuario'])):

        $usuario = $_COOKIE['usuario'];

        is_null($usuario) ? $existe = false: $existe = true;
    endif;

    if(isset($_POST["usuario"])):
        setcookie("usuario",$_POST["usuario"]);   
    endif;

    require 'index.view.php';
?>