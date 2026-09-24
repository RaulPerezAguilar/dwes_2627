<!-- 
    Autor: Raul Perez
    Fecha: 2024-06-15
    Descripción: Ejemplo básico de un script PHP que muestra "Hola Mundo".
-->
<?php
    $nombre = "Raul";
    $apellido = "Perez";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar valor de una variable</title>
</head>
<body>
    <h1>Mostrar valor de una variable</h1>
    <?php
    // Este es un comentario en PHP
    /*
        Este es un comentario de varias líneas en PHP
    */
    echo "<b>Nombre:</b> " . $nombre . "<br>";
    echo "<b>Apellido:</b> " . $apellido . "<br>";
    ?>
</body>
</html>