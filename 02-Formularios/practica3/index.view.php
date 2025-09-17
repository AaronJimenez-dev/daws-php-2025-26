<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        if ($datos):
            if($vacio):
    ?>
            <p><b>ERROR: Hay al menos 1 dato vacio, no se pudo enviar el mensaje.</b></p>
        <?php else:?>
            <p><b>Mensaje enviado correctamente:</b></p>
            <ul>
                <li>Asunto: <?= $asunto?></li>
                <li>Email: <?= $email?></li>
                <li>Motivo: <?= $motivo?></li>
                <li>Mensaje: <?= nl2br($mensaje)?></li>
            </ul>
    <?php endif; endif;?>
    <form action="index.php" method="post">
        <p>Asunto: <input type="text" name="asunto"></p>
        <p>Email: <input type="email" name="email"></p>
        <p>Indica el motivo: 
            <select name="motivo">
                <option value="sopor">Soporte tecnico</option>
                <option value="info">Informacion de productos</option>
                <option value="queja">Queja</option>
                <option value="otro">Otro</option>
            </select>
        </p>
        <p>Mensaje: <textarea name="mensaje"></textarea></p>
        <input type="submit">
    </form>
</body>
</html>