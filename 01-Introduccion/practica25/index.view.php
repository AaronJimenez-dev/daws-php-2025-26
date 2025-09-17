<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <ul>
        <?php
            $i = 0;
            while ($i < count($alumnos)):
        ?>
        <li><?php echo $alumnos[$i]; ?></li>
        <?php $i++; endwhile;?>
    </ul>
</body>
</html>