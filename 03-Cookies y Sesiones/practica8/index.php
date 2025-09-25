<?php
session_start();
$juegos = [
    "smg" => [
        "nombre" => "Super Mario Galaxy 1 + 2",
        "descripcion" => "Los 2 mejores plataformas de la historia juntos",
        "precio" => 69.99
    ],
    "mk2" => [
        "nombre" => "Super Mario Kart World",
        "descripcion" => "El juego de mario de karts definitivo",
        "precio" => 79.99
    ],
    "cp" => [
        "nombre" => "CyberPunk 2077",
        "descripcion" => "El mejor RPG de la historia, aunque de salida el mas bugueado",
        "precio" => 49.99
    ],
];
function precioTotal($total, $dato)
{
    $precio = $dato["precio"];
    $total += $precio;
    $_SESSION["total"] = $total;
}
function hayDatos($datos)
{
    if (count($datos) == 0):
        return false;
    else:
        return true;
    endif;
}

if (!isset($_SESSION["datos"])):
    $total = 0;
    $datos = [];
    $_SESSION["datos"] = [];
    $_SESSION["total"] = 0;
else:
    $total = $_SESSION["total"];
    $datos = $_SESSION["datos"];
endif;

if(isset($_COOKIE["idioma"])):
    $idioma = $_COOKIE["idioma"];
else:
    $idioma = "";
endif;

if (count($_POST) != 0):
    if(isset($_POST["idioma"])):
        setcookie("idioma", $_POST["idioma"]);
        $idioma = $_POST["idioma"];
    elseif(isset($_POST["comprar"])):
        $datos = [];
        $_SESSION["datos"] = [];
        $_SESSION["total"] = 0;
    else:
        foreach($_POST as $dato => $valor):
            array_push($_SESSION["datos"], $juegos[$dato]);
            $datos = $_SESSION["datos"];
            precioTotal($total, $juegos[$dato]);
            $total = $_SESSION["total"];
        endforeach;
    endif;
endif;
require 'index.view.php';