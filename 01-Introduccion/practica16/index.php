<?php
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];
        function operacion($n1, $n2) {
            if($n1 != $n2){
                return $n1 + $n2;
            } else {
                return $n1 * $n2;
            }
        }   
        $resultado = operacion($n1, $n2);
        require 'index.view.php';
?>