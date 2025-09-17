<?php
        $ciudad = ['Paris', 'Berlin', 'Amsterdam', 'Praga'];
        function getValor($i){
            global $ciudad;
            return $ciudad[$i];
        }
        function setValor($i, $valor){
            global $ciudad;
            $ciudad[$i] = $valor;
        }
        require 'index.view.php';
?>