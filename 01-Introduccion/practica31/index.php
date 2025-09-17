<?php
        $numeros = [];
        for($i = 0; $i <20; $i++){
                array_push($numeros,random_int(1,999));
        }
        
        function buscarPequeno($numeros){
                $pequeno = 1000;
                foreach ($numeros as $numero) :
                        if ($numero < $pequeno):
                                $pequeno = $numero;
                        endif;
                endforeach;
                return $pequeno;
        }
        function buscarGrande($numeros){
                $grande = 0;
                foreach ($numeros as $numero) :
                        if ($numero > $grande):
                                $grande = $numero;
                        endif;
                endforeach;
                return $grande;
        }
        require 'index.view.php';
?>