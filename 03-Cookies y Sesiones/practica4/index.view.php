<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        if(count($personas) == 0):
    ?>
        <p>No existe ninguna persona</p>
    <?php else:?>
        <p>Lista de asistentes:</p>
        <ul>
            <?php foreach($personas as $p):?>
                <li><?= $p?></li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
    <form action="index.php" method="post">
        <p>Añadir asistente</p> 
        <p> <input type="text" name="persona"><input type="submit"></p>
        <p><input type="submit" value="borrar"></p>
    </form>
</body>
</html>