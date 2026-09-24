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
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Apellido: <?php echo $apellido; ?></p>

    <?php
    
    // Comillas dobles
    echo "<b>Nombre:</b> $nombre<br>";

    // Comillas simples
    echo '<b>Apellido:</b> $apellido<br>';

    // Solucion uso comillas simples y concatenación
    echo '<b>Apellido:</b> ' . $apellido . '<br>';
    
    ?>
</body>
</html>