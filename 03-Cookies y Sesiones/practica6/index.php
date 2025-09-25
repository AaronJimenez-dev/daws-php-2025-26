<?php
    session_start();
    if (!array_key_exists("intentos", $_SESSION)):
        $_SESSION["intentos"] = 0;
    endif;
    if ($_SESSION["intentos"] == 3):
        require 'index.view.fallido.html';
    else:
        if (isset($_POST["cerrarSesion"])):
            session_destroy();
        endif;
        $usuarios =  [
            "aaron" => [
                "pass" => "12345"
            ],
            "unax" => [
                "pass" => "54321"
            ],
        ];

        $usuario = "";
        $pass = "";

        if(isset($_SESSION["usuario"]) && isset($_SESSION["pass"])):
            $usuario = $_SESSION["usuario"];
            $pass = $_SESSION["pass"];
        endif;

        if ($usuario != "" || $pass != ""):
            require 'index.view.iniciado.php';
        else:
            if (isset($_POST["usuario"]) && $_POST["usuario"] != "" && isset($_POST["pass"]) && $_POST["pass"] != ""):

                $usuario = $_POST["usuario"];
                $pass = $_POST["pass"];

                if (array_key_exists($usuario, $usuarios)):

                    if ($usuarios[$usuario]["pass"] == $pass):

                        $_SESSION["usuario"] = $usuario;
                        $_SESSION["pass"] = $pass;
                        require 'index.view.iniciado.php';

                    else:

                        $fallido = true;

                    endif;
                else:
                    $fallido = true;
                endif;
                if ($fallido):
                    $_SESSION["intentos"]++;
                    require 'index.view.php';
                endif;

            else:

                $fallido = false;
                require 'index.view.php';

            endif;
        endif;
    endif;
?>