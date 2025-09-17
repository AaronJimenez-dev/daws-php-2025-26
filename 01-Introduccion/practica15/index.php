<?php
        $diccionario = [
            "user1" => array(
                "Nombre" => "Aaron",
                "Apellido" => "Jimenez",
                "Email" => "aaron.jimenez.teixeira@ikasle.egibide.org"
            ),
            "user2" => array(
                "Nombre" => "Jon",
                "Apellido" => "Vadillo",
                "Email" => "jvadillo@egibide.org"
            ),
            "user3" => array(
                "Nombre" => "Jaime",
                "Apellido" => "Malvido",
                "Email" => "jmalvido@egibide.org"
            )
        ];
        function getValores($nombre, $palabra){
            global $diccionario;
            return $diccionario[$nombre][$palabra];
        }
        require 'index.view.php';
?>