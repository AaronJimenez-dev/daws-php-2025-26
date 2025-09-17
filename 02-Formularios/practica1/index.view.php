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
    ?>
        <p><b>Resultado de la conversion (<?= $temperatura . " " . $tipoTemperatura?>): <?= resultado($temperatura, $tipoTemperatura) ?></b></p>
    <?php endif;?>
    <form action="index.php" method="post">
        <p>Introduce la temperatura: <input type="text" name="temperatura"></p>
        <p>Indica la unidad de la temperatura: 
            <select name="tipoTemperatura">
                <option value="celcius">Celcius</option>
                <option value="farenheit">Farenheit</option>
            </select>
        </p>
        <input type="submit">
    </form>
</body>
</html>