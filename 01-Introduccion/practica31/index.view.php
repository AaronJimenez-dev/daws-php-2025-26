<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <ul>
        <li>El array generado es: <?php echo var_export($numeros) ?></li>
        <li>El mas pequeño es: <?php echo buscarPequeno($numeros) ?></li>
        <li>El mas grande es: <?php echo buscarGrande($numeros) ?></li>
    </ul>
</body>
</html>