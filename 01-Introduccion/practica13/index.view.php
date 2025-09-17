<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Cantidad Animal: <?php echo getCantidad($animal); ?></h1>
    <h1>Cantidad Color: <?php echo getCantidad($color); ?></h1>
    <h1>Antes del cambio: <?php var_export($animal); ?></h1>
    <h1><?php echo setValorAnimal('Tigre'); ?></h1>
    <h1>Despues del cambio: <?php var_export($animal); ?></h1>
    <h1>Antes del cambio: <?php var_export($color); ?></h1>
    <h1><?php echo setValorColor('Rosa'); ?></h1>
    <h1>Despues del cambio: <?php var_export($color); ?></h1>
    <h1>Todos los animales y colores: <?php echo var_export(fusionar()); ?></h1>
</body>
</html>