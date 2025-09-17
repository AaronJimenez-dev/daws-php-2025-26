<?php
        $animal = ['Perro', 'Gato', 'Elefante', 'León'];
        $color = ['Rojo', 'Azul', 'Verde', 'Amarillo'];
        function getCantidad($arr){
            return count($arr);
        }
        function setValorAnimal($valor){
            global $animal;
            array_push($animal, $valor);
        }
        function setValorColor($valor){
            global $color;
            array_unshift($color, $valor);
        }
        function fusionar(){
            global $animal, $color;
            return array_merge($animal, $color);
        }
        require 'index.view.php';
?>