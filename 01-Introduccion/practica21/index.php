<?php
        $n1 = $_GET['numero'];
        function operacion($n1) {
            $resultado = 0;
            for ($i = 1; $i <= $n1 && $resultado <= 100; $i++) {
                $resultadoAnterior = $resultado;
                if ($i % 2 == 0) {
                    $resultado += $i;
                }
            }
            if ($resultado > 100) {
                return $resultadoAnterior;
            }else{
                return $resultado;
            }
        }
        $resultado = operacion($n1);
        require 'index.view.php';
?>