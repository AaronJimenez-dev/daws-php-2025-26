<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        function frase(string $a, string $b) {
            return $a . " ". $b;
        }   
        echo frase($a, $b);
    ?>
</body>
</html>