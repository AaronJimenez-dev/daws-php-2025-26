<?php
        $alumnos = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];
        function operacion($alumnos) {
            $listaAlumnos = "<ul>";
            for ($i = 0; $i < sizeof($alumnos); $i++) {
                $listaAlumnos .= "<li id=\"$i\">" . $alumnos[$i] . "</li>";
            }
            $listaAlumnos .= "</ul>";
            return $listaAlumnos;
        }
        $resultado = operacion($alumnos);
        require 'index.view.php';
?>