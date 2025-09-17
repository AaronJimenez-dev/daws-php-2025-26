<?php
    if (!isset($_POST["temperatura"])):
        $datos = false;
    else: 
        $datos = true;
        $temperatura = $_POST["temperatura"];
        $tipoTemperatura = $_POST["tipoTemperatura"];
    endif;
    function resultado($temperatura, $tipoTemperatura){
        if($tipoTemperatura == "celcius"):
            return ($temperatura * 1.8) + 32;
        else:
            return ($temperatura - 32) /1.8;
        endif;
    }
    require 'index.view.php';
?>