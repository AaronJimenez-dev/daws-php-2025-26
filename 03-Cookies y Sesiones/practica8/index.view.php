<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php if($idioma == ""):?>
        <h1>Elija un idioma:</h1>
        <form action="index.php"method="post">
            <select name="idioma">
                <option value="es">Español</option>
                <option value="eus">Euskera</option>
            </select>
            <input type="submit">
        </form>
    <?php else: if($idioma == "es"):?>
        <h1>Bienvenido!!</h1>
    <?php else:?>
        <h1>Ongi etorri!!</h1>
    <?php endif;?>
    <h2>Cesta de la compra</h2>
    <?php if(!hayDatos($datos)):?>
        <p>No hay productos en la cesta.</p>
    <?php else:?>
        <form action="index.php" method="post">
            <ul>
                <?php
                    foreach($datos as $comprado):
                ?>
                    <li><?=$comprado["nombre"]?> (<?=$comprado["precio"]?>)</li>
                <?php endforeach;?>
            </ul>
            <h1>Precio total: <?= $total?>€.</h1>
            <input type="submit" name="comprar" value="Realizar compra">
        </form>
    <?php endif;?>
    <h2>Catálogo de productos</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($juegos as $juego => $datos): ?>
            <form action="index.php" method="post">
                <tr>
                    <?php foreach ($datos as $nombre => $dato): ?>
                        <td><?= $dato ?></td>
                    <?php endforeach; ?>
                    <input type="hidden" name="<?= $juego?>">
                    <td><input type="submit" value="Comprar"></td>
                </tr>
            </form>
        <?php endforeach; ?>
    </table>
    <?php endif;?>
</body>

</html>