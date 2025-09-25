<?php
    session_start();
    $existe = false;
    $personas = [];

    if(!isset($_POST["borrar"])):

        if(!isset($_SESSION["persona"])):

            $_SESSION["persona"] = [];

        endif;

        if(isset($_POST["persona"]) && $_POST["persona"] != ""):

            array_push($_SESSION["persona"],$_POST["persona"]);

            /*
                $_SESSION["persona"][] = $_POST["persona"]; 
                Este también funciona, pero no es tan bueno como array_push
            */

        endif;

        $personas = $_SESSION["persona"];

    else:
        session_unset();
    endif;

    require 'index.view.php';
?>