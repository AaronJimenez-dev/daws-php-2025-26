<?php
        $n1 = $_GET['numero'];
        function operacion($n1) {
            $resultado = 0;
            for ($i = 1; $i <= $n1; $i++) {
                $resultado += $i;
            }
            return $resultado;
        }
        $resultado = operacion($n1);
        require 'index.view.php';
?>