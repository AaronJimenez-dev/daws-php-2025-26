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
        <p>No hay ningún usuario almacenado</p>
    <?php else:?>
        <p>El ultimo usuario es:<?= $usuario?></p>
    <?php endif;?>
    <form action="index.php" method="post">
        <p>Introduce el texto que deseas almacenar: <input type="text" name="usuario"></p>
        <input type="submit">
    </form>
</body>
</html>