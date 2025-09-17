<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <ul>
        <?php
            foreach($gruposMusica as $gp):
        ?>
        <h1><?php echo $gp; ?></h1>
        <?php endforeach;?>
    </ul>
</body>
</html>