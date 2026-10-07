<?php

if (
    !isset($_POST['velocidad_inicial'], $_POST['angulo_lanzamiento'])
    || !is_numeric($_POST['velocidad_inicial'])
    || !is_numeric($_POST['angulo_lanzamiento'])
) {
    http_response_code(400);
    exit('Introduce una velocidad inicial y un ángulo válidos.');
}

$velocidad_inicial = (float) $_POST['velocidad_inicial'];
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'];

if (
    !is_finite($velocidad_inicial)
    || !is_finite($angulo_lanzamiento)
    || $velocidad_inicial < 0
    || $angulo_lanzamiento < 0
    || $angulo_lanzamiento > 90
) {
    http_response_code(400);
    exit('La velocidad debe ser positiva o cero y el ángulo debe estar entre 0 y 90 grados.');
}

// Constante de la gravedad (según el enunciado)
const GRAVEDAD = 9.8;

// Cálculos
$angulo_radianes      = deg2rad($angulo_lanzamiento);
$velocidad_x          = $velocidad_inicial * cos($angulo_radianes);
$velocidad_y          = $velocidad_inicial * sin($angulo_radianes);
$alcance_maximo       = ($velocidad_inicial ** 2) * sin(2 * $angulo_radianes) / GRAVEDAD;
$altura_maxima        = ($velocidad_inicial ** 2) * (sin($angulo_radianes) ** 2) / (2 * GRAVEDAD);
$tiempo_vuelo         = 2 * $velocidad_y / GRAVEDAD;

// Formato español: 9.044,15
$formatear = static fn (float $valor, int $decimales = 2): string =>
    number_format($valor, $decimales, ',', '.');
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lanzamiento Proyectiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <main class="container mt-3">

      <header class="p-4 mb-4 bg-light rounded-0">
        <h1 class="display-4 fw-light">Lanzamiento Proyectiles</h1>
        <p class="lead fw-light text-secondary mb-2">Examen Práctico - 01 - Tema 2 - DWES 20/21</p>
        <hr>
        <p class="mb-4">Resultado</p>
      </header>

      <table class="table">
        <tbody>
          <tr>
            <th colspan="2">Valores Iniciales:</th>
          </tr>
          <tr>
            <td class="w-50">Velocidad Inicial:</td>
            <td><?= $formatear($velocidad_inicial) ?> m/s</td>
          </tr>
          <tr>
            <td>Ángulo Inclinación:</td>
            <td><?= $formatear($angulo_lanzamiento, fmod($angulo_lanzamiento, 1) == 0 ? 0 : 2) ?> º</td>
          </tr>

          <tr>
            <th colspan="2">Resultados:</th>
          </tr>
          <tr>
            <td>Ángulo Radianes:</td>
            <td><?= $formatear($angulo_radianes, 5) ?> Radianes</td>
          </tr>
          <tr>
            <td>Velocidad Inicial X:</td>
            <td><?= $formatear($velocidad_x) ?> m/s</td>
          </tr>
          <tr>
            <td>Velocidad Inicial Y:</td>
            <td><?= $formatear($velocidad_y) ?> m/s</td>
          </tr>
          <tr>
            <td>Alcance Máximo del Proyectil:</td>
            <td><?= $formatear($alcance_maximo) ?> m</td>
          </tr>
          <tr>
            <td>Tiempo de Vuelo del proyectil:</td>
            <td><?= $formatear($tiempo_vuelo) ?> s</td>
          </tr>
          <tr>
            <td>Altura Máxima del Proyectil:</td>
            <td><?= $formatear($altura_maxima) ?> m</td>
          </tr>
        </tbody>
      </table>

      <a class="btn btn-primary" href="index.php">Volver</a>

      <footer class="border-top mt-4 pt-3 text-muted">
        &copy; DEWS - Juan Carlos Moreno - 2º DAW - Curso 20/21
      </footer>
    </main>
  </body>
</html>