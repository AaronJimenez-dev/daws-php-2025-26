<?php
    $juegos = [
        "smg" => "69.99",
        "mkw" => "69.99",
        "cp2077" => "49.99",
    ];
    if (isset($_POST["oculto"])):
        $smg = intval($_POST["smg"]);
        $mkw = intval($_POST["mkw"]);
        $cp2077 = intval($_POST["cp2077"]);

        if (empty($smg) && empty($mkw) && empty($cp2077)):
            $hayDatos = false;
        else:
            $hayDatos = true;
        endif;

        function precio($juegos,$smg,$mkw,$cp2077){
            $tsmg = $smg * $juegos["smg"];
            $tmkw = $mkw * $juegos["mkw"];
            $tcp = $cp2077 * $juegos["cp2077"];
            return $tsmg + $tmkw + $tcp;
        }
        function compradoSmg($smg){
            return $smg > 0;
        }
        function compradoMkw($mkw){
            return $mkw > 0;
        }
        function compradoCp2077($cp2077){
            return $cp2077 > 0;
        }
        require 'index.view.comprado.php';
    else:
        require 'index.view.php';
    endif;
?>