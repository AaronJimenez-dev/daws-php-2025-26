<?php
        $paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

        $pais = $_GET['pais'];
        function operacion($paises, $pais) {
            for ($i = 0; $i < sizeof($paises); $i++) {
                if ($paises[$i] === $pais) {
                    return $i;
                }
            }
            return -1;
        }
        $resultado = operacion($paises, $pais);
        require 'index.view.php';
?>