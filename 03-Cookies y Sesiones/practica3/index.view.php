<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        if(!$existe):
    ?>
        <p>No se ha seleccionado ningún idioma</p>
    <?php else:?>
        <p>Idioma:<?= $idioma?></p>
    <?php endif;?>
    <form action="index.php" method="post">
        <p>Introduce tu idioma: 
            <select name="idioma">
                <option value="es">Español</option>
                <option value="eus">Euskera</option>
            </select>
        </p>
        <input type="submit">
    </form>
</body>
</html>