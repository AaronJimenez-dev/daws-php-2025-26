<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        if(!$hayDatos):
    ?>
        <h1>No se ha comprado nada</h1>
    <?php else: ?>
        <h1>Precio total:</h1>
        <p>El importe total de la compra es <?= precio($juegos,$smg,$mkw,$cp2077)?>€.</p>
        <h1>Detalle de la compra:</h1>
        <ul>
            <?php
                if ($smg > 0):
                ?>
                <li>Super Mario Galaxy 1 + 2 (<?= $smg?>)</li>
                <?php
                endif;
                if ($mkw > 0):
                ?>
                <li>Super Mario Kart Workld (<?= $mkw?>)</li>
                <?php
                endif;
                if ($cp2077 > 0):
                ?>
                <li>CyberPunk 2077 (<?= $cp2077?>)</li>
                <?php
                endif;
            ?>
        </ul>
    <?php endif;?>
    <h2><a href="./index.php">Volver</a></h2>
</body>
</html>