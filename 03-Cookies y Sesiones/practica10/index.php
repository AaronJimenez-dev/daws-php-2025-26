<?php
session_start();
$juegos = [
    "smg" => [
        "nombre" => "Super Mario Galaxy 1 + 2",
        "descripcion" => "Los 2 mejores plataformas de la historia juntos",
        "precio" => 69.99
    ],
    "mkw" => [
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
$descripcionExtendida = [
    "smg" => [
        "descripcion" => "Super Mario Galaxy 1 + 2, un recopilatorio que celebra el 40 aniversario de Super Mario, se lanzará el 2 de octubre de 2025 en Nintendo Switch y Nintendo Switch 2.
 El paquete incluye una remasterización de ambos juegos originales de Wii, con mejoras visuales como una resolución de 1080p en Nintendo Switch y una actualización gratuita para alcanzar 4K en Nintendo Switch 2.
 Además, se incluirán nuevas funciones, como un modo de ayuda que aumenta la salud de Mario de 3 a 6 puntos y permite su regreso a la posición original tras una caída.
 También se añadirá un modo multijugador local con Joy-Con compartidos, donde un segundo jugador puede recoger objetos y paralizar enemigos 
 , y un reproductor de música integrado para escuchar las 154 melodías de los juegos.",
        "codigoReferencia" => 0001
    ],
    "mkw" => [
        "descripcion" => "Mario Kart World es un videojuego de carreras de karts desarrollado y publicado por Nintendo para la Nintendo Switch 2. Al igual que en anteriores juegos Mario Kart, los jugadores controlan a los personajes de Mario mientras compiten contra oponentes. World introduce un diseño y un modo de mundo abierto, técnicas todoterreno, un modo de eliminación y trajes desbloqueables para los personajes jugables. Las carreras admiten hasta 24 jugadores, el doble que en anteriores juegos de Mario Kart.",
        "codigoReferencia" => 0002
    ],
    "cp" => [
        "descripcion" => "Cyberpunk 2077 es un videojuego de rol de acción de disparos en primera persona desarrollado por CD Projekt RED y publicado por CD Projekt que se lanzó para Microsoft Windows, PlayStation 4 y Xbox One el 10 de diciembre de 2020, y posteriormente en PlayStation 5, Xbox Series X|S y Google Stadia el 15 de febrero de 2022 y finalmente en Nintendo Switch 2 el 5 de junio de 2025. Siendo una adaptación del juego de rol Cyberpunk 2020 de Mike Pondsmith, se establece cincuenta y siete años más tarde en la ciudad distópica de Night City, California. Es un mundo abierto con seis distritos diferentes, con una perspectiva de primera persona y los jugadores asumen el papel del personaje personalizable llamado V, quienes pueden mejorar sus estadísticas con experiencia. V tiene un arsenal de armas y opciones para combate cuerpo a cuerpo, los cuales pueden ser modificados.[1]​",
        "codigoReferencia" => 0003
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
function descripcion($verDetalles, $descripcionExtendida){
    if(array_key_exists($verDetalles, $descripcionExtendida)):
        return $descripcionExtendida[$verDetalles]["descripcion"];
    endif;
}
function codigoReferencia($verDetalles, $descripcionExtendida){
    if(array_key_exists($verDetalles, $descripcionExtendida)):
        return $descripcionExtendida[$verDetalles]["codigoReferencia"];
    endif;
}
function esFavorito($juego){
    if(isset($_COOKIE["favoritos"])):
        $arrayFavoritos = explode("|", $_COOKIE["favoritos"]);
        foreach($arrayFavoritos as $favorito):
            if ($juego == $favorito):
                return true;
            endif;
        endforeach;
    endif;
    return false;
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

if(!isset($verDetalles)):
    $verDetalles = "";
endif;
if(!isset($favorito)):
    $favorito = "";
endif;

if (count($_POST) != 0):
    if(isset($_POST["idioma"])):
        setcookie("idioma", $_POST["idioma"]);
        $idioma = $_POST["idioma"];
    elseif(isset($_POST["detalles"])):
        $verDetalles = array_key_first($_POST);
    elseif(isset($_POST["favorito"])):
        $favorito = array_key_first($_POST);
        isset($_COOKIE["favoritos"])? $cookies = $_COOKIE["favoritos"]: $cookies = "";
        echo $cookies;
        $cookies == "" ? setcookie("favoritos", $favorito) : setcookie("favoritos", $cookies . "|" . $favorito);
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