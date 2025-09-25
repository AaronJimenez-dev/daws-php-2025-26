<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        if(!hayDatos($total)):
    ?>
        <h1>No se ha comprado nada</h1>
    <?php else: ?>
        <h1>Precio total:</h1>
        <p>El importe total de la compra es <?= $total?>€.</p>
        <h1>Detalle de la compra:</h1>
        <ul>
            <?php
                foreach($datos as $comprado):
            ?>
                <li><?=$comprado["nombre"]?> (<?=$comprado["cantidad"]?>)</li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
    <h2><a href="./index.php">Volver</a></h2>
</body>
</html>