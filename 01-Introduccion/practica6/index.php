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
        function multiplicar($a, $b) {
            echo "La multiplicación de $a por $b es: " . $a * $b;
        }   
    ?>
</body>
</html>