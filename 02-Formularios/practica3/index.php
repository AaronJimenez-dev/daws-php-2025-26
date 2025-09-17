<?php
    if (!isset($_POST["asunto"])):
        $datos = false;
    else: 
        $datos = true;
        $asunto = $_POST["asunto"];
        $email = $_POST["email"];
        $motivo = $_POST["motivo"];
        $mensaje = $_POST["mensaje"];
        if (empty($asunto) || empty($email) ||empty($motivo) ||empty($mensaje)):
            $vacio = true;
        else:
            $vacio = false;
        endif;
    endif;
    require 'index.view.php';
?>