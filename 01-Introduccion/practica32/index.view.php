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
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota Media</th>
        </tr>
        <?php
            foreach ($alumnos as $alumno => $notas) :
        ?>
            <tr>    
                <td><?php echo $alumno; ?></td>
                <td <?php if($notas[0] < 5): echo "style=\"color: red;\""; endif;?>><?= $notas[0]; ?></td>
                <td <?php if($notas[1] < 5): echo "style=\"color: red;\""; endif;?>><?= $notas[1]; ?></td>
                <td <?php if(calcularMedia($notas[0],$notas[1]) < 5): echo "style=\"color: red;\""; endif;?>><?= calcularMedia($notas[0],$notas[1]); ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>