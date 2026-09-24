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

    <!--Muestro los detalles del alumno-->
    <h1>Ficha Alumnos:</h1>
    <p>Nombre: <?= $nombre; ?></p>
    <p>Apellido: <?= $apellido; ?></p>
</body>
</html>