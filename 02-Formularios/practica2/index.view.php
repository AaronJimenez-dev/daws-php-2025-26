<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        if ($datos):
            if($operacion == "divi" && $numero2 == 0):
    ?>
            <p><b>ERROR: Se ha intentado dividir entre 0.</b></p>
        <?php else:?>
            <p><b>Ultimo resultado: <?= resultado($numero1, $numero2, $operacion) ?></b></p>
    <?php endif; endif;?>
    <form action="index.php" method="post">
        <p>Primer numero: <input type="number" name="numero1"></p>
        <p>Segundo numero: <input type="number" name="numero2"></p>
        <p>Indica la operacion deseada: 
            <select name="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multi">Multiplicacion</option>
                <option value="divi">Division</option>
            </select>
        </p>
        <input type="submit">
    </form>
</body>
</html>