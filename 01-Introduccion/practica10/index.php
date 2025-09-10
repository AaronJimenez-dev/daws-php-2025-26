<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $b = $_GET['b'];
        function frase(string $b, $a = "Hola guapo") {
            return $a . " ". $b;
        }   
        echo frase($b);
    ?>
</body>
</html>