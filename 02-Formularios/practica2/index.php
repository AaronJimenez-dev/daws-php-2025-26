<?php
    if (!isset($_POST["numero1"])):
        $datos = false;
    else: 
        $datos = true;
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];
    endif;
    function resultado($numero1, $numero2, $operacion){
        switch ($operacion):
            case "suma":
                return $numero1 + $numero2;
                break;
            case "resta":
                return $numero1 - $numero2;
                break;
            case "multi":
                return $numero1 * $numero2;
                break;
            case "divi":
                return $numero1 / $numero2;
                break;
        endswitch;
    }
    require 'index.view.php';
?>