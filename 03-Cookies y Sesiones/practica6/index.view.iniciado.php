<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Ha conseguido iniciar sesion con el usuario 
    <?= $usuario?> y la contraseña 
    <?= $pass?>!!
    </h1>
    <form action="index.php" method="post">
        <p><input type="submit" name="cerrarSesion" value="Cerrar sesion"></p>
    </form>
</body>
</html>