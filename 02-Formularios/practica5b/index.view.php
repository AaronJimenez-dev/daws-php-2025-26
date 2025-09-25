<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Catálogo de productos</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <?php foreach($juegos as $juego => $datos):?>
                <tr>
                    <?php foreach($datos as $nombre => $dato):?>
                        <td><?=$dato?></td>
                    <?php endforeach;?>
                    <td><input type="number" name="<?=$juego?>"></td>
                </tr>
            <?php endforeach;?>
        </table>
        <input type="hidden" name="oculto">
        <input type="submit">
    </form>
</body>
</html>