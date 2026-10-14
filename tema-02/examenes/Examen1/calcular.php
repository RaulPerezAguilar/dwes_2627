<?php
// Controlador de cálculo: valida los datos, calcula las magnitudes y muestra la vista.

// Solo se acepta el envío del formulario por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$campos = [
    'v0' => 'Velocidad inicial',
    'a' => 'Aceleración',
    't' => 'Tiempo',
    'm' => 'Masa',
];

$datos = [];
$errores = [];
$valores = [];

foreach ($campos as $clave => $nombre) {
    $entrada = trim($_POST[$clave] ?? '');
    $datos[$clave] = $entrada;

    if ($entrada === '') {
        $errores[] = "El campo «$nombre» es obligatorio.";
        continue;
    }

    $valores[$clave] = (float) str_replace(',', '.', $entrada);
}

// Validaciones de rango físico
if (isset($valores['t']) && $valores['t'] < 0) {
    $errores[] = 'El tiempo no puede ser negativo.';
}
if (isset($valores['m']) && $valores['m'] <= 0) {
    $errores[] = 'La masa debe ser mayor que cero.';
}

// Si hay errores, se vuelve al formulario conservando lo introducido
if (!empty($errores)) {
    include 'views/view.index.php';
    exit;
}

$v0 = $valores['v0'];
$a = $valores['a'];
$t = $valores['t'];
$m = $valores['m'];

// Cálculos
$v = $v0 + $a * $t;                      // Velocidad final
$e = $v0 * $t + 0.5 * $a * $t ** 2;      // Espacio recorrido
$f = $m * $a;                            // Fuerza neta
$ec = 0.5 * $m * $v ** 2;                // Energía cinética final

// Formato europeo: coma decimal y punto de millares
function formatear(float $numero): string
{
    return number_format($numero, 2, ',', '.');
}

$entrada = [
    ['Velocidad inicial', formatear($v0), 'm/s'],
    ['Aceleración', formatear($a), 'm/s²'],
    ['Tiempo', formatear($t), 's'],
    ['Masa', formatear($m), 'kg'],
];

$resultados = [
    ['Velocidad final', formatear($v), 'm/s'],
    ['Espacio recorrido', formatear($e), 'm'],
    ['Fuerza neta', formatear($f), 'N'],
    ['Energía cinética final', formatear($ec), 'J'],
];

include 'views/view.resultados.php';
