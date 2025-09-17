<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <ul>
        <?php foreach($coches as $coche):?>
        <li><?php echo $coche; ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>