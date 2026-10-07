<?php

/*
 Proyecto: proyecto 2.2 - calculadora de proyectiles
 Controlador: recoge el formulario, valida, calcula y formatea los resultados
*/

const GRAVEDAD = 9.8;

$error = '';

// Modelo: recogida y validación de datos
if (
    !isset($_POST['velocidad_inicial'], $_POST['angulo_lanzamiento'])
    || !is_numeric($_POST['velocidad_inicial'])
    || !is_numeric($_POST['angulo_lanzamiento'])
) {
    $error = 'Introduce una velocidad inicial y un ángulo válidos.';
} else {
    $velocidad_inicial  = (float) $_POST['velocidad_inicial'];
    $angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'];

    if ($velocidad_inicial < 0 || $angulo_lanzamiento < 0 || $angulo_lanzamiento > 90) {
        $error = 'La velocidad no puede ser negativa y el ángulo debe estar entre 0 y 90 grados.';
    }
}

// Modelo: cálculos
if ($error === '') {
    $angulo_radianes = deg2rad($angulo_lanzamiento);
    $velocidad_x     = $velocidad_inicial * cos($angulo_radianes);
    $velocidad_y     = $velocidad_inicial * sin($angulo_radianes);
    $alcance_maximo  = ($velocidad_inicial ** 2) * sin(2 * $angulo_radianes) / GRAVEDAD;
    $altura_maxima   = ($velocidad_inicial ** 2) * (sin($angulo_radianes) ** 2) / (2 * GRAVEDAD);
    $tiempo_vuelo    = 2 * $velocidad_y / GRAVEDAD;

    // Formato europeo: 9.044,15
    $velocidad_inicial  = number_format($velocidad_inicial, 2, ",", ".");
    $angulo_lanzamiento = number_format($angulo_lanzamiento, fmod($angulo_lanzamiento, 1) == 0 ? 0 : 2, ",", ".");
    $angulo_radianes    = number_format($angulo_radianes, 5, ",", ".");
    $velocidad_x        = number_format($velocidad_x, 2, ",", ".");
    $velocidad_y        = number_format($velocidad_y, 2, ",", ".");
    $alcance_maximo     = number_format($alcance_maximo, 2, ",", ".");
    $tiempo_vuelo       = number_format($tiempo_vuelo, 2, ",", ".");
    $altura_maxima      = number_format($altura_maxima, 2, ",", ".");
}

// Vista
include 'views/resultado.view.php';