<?php
    $existe = false;

    if(isset($_COOKIE['idioma'])):

        $idioma = $_COOKIE['idioma'];

        is_null($idioma) ? $existe = false: $existe = true;
    endif;

    if(isset($_POST["idioma"])):
        setcookie("idioma",$_POST["idioma"], time() + 60);
    endif;

    require 'index.view.php';
?>