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
        $resta = $a - $b;  
        echo "La resta de $a menos $b es: $resta";
        $division = $a / $b;
        echo "<br> La división de $a entre $b es: $division";
        $mayor = ($a > $b);
        echo "<br> ¿Es $a mayor que $b? La respuesta es: " . var_export($mayor);
        $menor = ($a <= $b);
        echo "<br> ¿Es $a menor o igual que $b? La respuesta es: " . var_export($menor);
        ?>
</body>
</html>