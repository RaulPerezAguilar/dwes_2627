<?php

/*

 Proyecto: ejercicio 03 - Función isset()
 Descripción: mostrar 3 casos verdaderos y 3 casos falsos de la función isset()
 Alumno: Raul Perez Aguilar
 Fecha: 07/10/2026

*/

// Modelo
$texto     = "Hola";
$cero      = 0;
$vacia     = "";
$sin_valor = null;
$datos     = ["nombre" => "Raul"];

$casos = [
    // Tres casos TRUE
    ["isset(\$texto)",              isset($texto)],
    ["isset(\$cero)",               isset($cero)],
    ["isset(\$vacia)",              isset($vacia)],
    // Tres casos FALSE
    ["isset(\$sin_valor)",          isset($sin_valor)],
    ["isset(\$no_existe)",          isset($no_existe)],
    ["isset(\$datos[\"edad\"])",    isset($datos["edad"])],
];

function mostrar(mixed $valor): string
{
    return htmlspecialchars(var_export($valor, true), ENT_QUOTES, 'UTF-8');
}

// Vista
include 'views/index.view.php';
