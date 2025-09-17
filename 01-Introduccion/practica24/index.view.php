<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <table border='1'>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>
        <?php
            for ($i = 0; $i < sizeof($agenda); $i++) :
        ?>
            <tr>    
                <td><?php echo $agenda[$i]['nombre']; ?></td>
                <td><?php echo $agenda[$i]['apellido']; ?></td>
                <td><?php echo $agenda[$i]['telefono']; ?></td>
                <td><?php echo $agenda[$i]['email']; ?></td>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>