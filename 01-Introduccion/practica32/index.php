<?php
        $alumnos = ["Nora" => [9.5,5.8],
                "Aaron" => [8.3,10],
                "Unax" => [4.9,7.8]
                ];
        function calcularMedia($nota1, $nota2){
                return ($nota1 + $nota2) / 2;
        }
        require 'index.view.php';
?>