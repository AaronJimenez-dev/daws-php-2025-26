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
            <p><b>ERROR: El usuario o la contraseña no son correctos.</b></p>            
    <?php endif;?>
    <form action="index.php" method="post">
        <p>Usuario: <input type="text" name="user"></p>
        <p>Contraseña: <input type="password" name="pass"></p>
        <input type="submit">
    </form>
</body>
</html>