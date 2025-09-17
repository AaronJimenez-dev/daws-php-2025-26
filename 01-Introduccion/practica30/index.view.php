<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <ul>
        <?php
            foreach ($alumnos as $alumno => $nota) :
        ?>  
        <li>La nota media de <?php echo $alumno; ?> es <?php echo $nota; ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>