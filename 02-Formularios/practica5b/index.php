<?php
    $juegos = [
        "smg" => [
            "nombre" => "Super Mario Galaxy 1 + 2",
            "descripcion" => "Los 2 mejores plataformas de la historia juntos",
            "precio" => 69.99
        ],
       "mk2" => [
            "nombre" => "Super Mario Kart World",
            "descripcion" => "El juego de mario de karts definitivo",
            "precio" => 79.99
        ],
        "cp" => [
            "nombre" => "CyberPunk 2077",
            "descripcion" => "El mejor RPG de la historia, aunque de salida el mas bugueado",
            "precio" => 49.99
        ],
    ];
    if (isset($_POST["oculto"])):
        $total = 0;
        $datos = [];

        function precioTotal (&$total, $juegos, &$datos){
            foreach($_POST as $nombre => $cantidad):
                if (isset($juegos[$nombre]) && $cantidad > 0):
                    $nombreDatos = $juegos[$nombre]["nombre"];
                    $precio = $juegos[$nombre]["precio"];
                    $total += $precio * $cantidad;
                    array_push($datos,["nombre" => $nombreDatos, "cantidad" => $cantidad]);
                endif;
            endforeach;
        }

        function hayDatos($total){
            if ($total == 0):
                return false;
            else:
                return true;
            endif;
        }

        precioTotal($total, $juegos, $datos);
        require 'index.view.comprado.php';
    else:
        require 'index.view.php';
    endif;
?>