<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index.php" method="post">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <tr>
                <td>Super Mario Galaxy 1 + 2</td>
                <td>Los 2 mejores plataformas de la historia juntos</td>
                <td>69.99€</td>
                <td><input type="number" name="smg" min="0"></td>
            </tr>
            <tr>
                <td>Super Mario Kart Workld</td>
                <td>El juego de mario de karts definitivo</td>
                <td>79.99€</td>
                <td><input type="number" name="mkw" min="0"></td>
            </tr>
            <tr>
                <td>CyberPunk 2077</td>
                <td>El mejor RPG de la historia, aunque de salida el mas bugueado</td>
                <td>49.99€</td>
                <td><input type="number" name="cp2077" min="0"></td>
            </tr>
        </table>
        <input type="hidden" name="oculto">
        <input type="submit">
    </form>
</body>
</html>