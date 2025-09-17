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
            do {
        ?>
        <li><?php echo $coches[$i]; ?></li>
        <?php 
            $i++;
            }while($i < count($coches));
        ?>
    </ul>
</body>
</html>