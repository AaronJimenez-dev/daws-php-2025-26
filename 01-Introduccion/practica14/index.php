<?php
        $palabras = [
            "Casa" => "House",
            "Gato" => "Cat",
            "Coche" => "Car",
            "Peón" => "Pawn"
        ];
        function getValores($palabra){
            global $palabras;
            return $palabras[$palabra];
        }
        require 'index.view.php';
?>