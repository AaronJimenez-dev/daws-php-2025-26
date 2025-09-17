<?php
        $b = $_GET['b'];
        function frase(string $b, $a = "Hola guapo") {
            return $a . " ". $b;
        }   
        $frase = frase($b);
        require 'index.view.php';
?>