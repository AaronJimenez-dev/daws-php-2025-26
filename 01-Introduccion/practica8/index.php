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
        function esMayor($a, $b) {
            return var_export($a > $b);
        }   
        echo "¿Es $a mayor que $b? " . esMayor($a, $b);
    ?>
</body>
</html>