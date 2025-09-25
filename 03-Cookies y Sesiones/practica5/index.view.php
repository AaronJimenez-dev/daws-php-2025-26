<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php if($fallido):?>
        <h2 style="color: red;">El usuario o la contraseña no son correctos.</h2>
    <?php else:?>
        <h2>Rellene todos los datos</h2>
    <?php endif;?>
    <form action="index.php" method="post">
        <h1>Iniciar sesión</h1> 
        <p><input type="text" name="usuario"></p>
        <p><input type="password" name="pass"></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>