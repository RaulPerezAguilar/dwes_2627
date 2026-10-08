<?php

/*

 Proyecto: ejercicio 02 - Función is_null()
 Descripción: mostrar 3 casos verdaderos y 3 casos falsos de la función is_null()
 Alumno: Raul Perez Aguilar
 Fecha: 07/10/2026

*/

// Modelo
$sin_valor = null;
$datos     = ["clave" => null];
$cero      = 0;
$vacia     = "";

$casos = [
    // Tres casos TRUE
    ["is_null(null)",               is_null(null)],
    ["is_null(\$sin_valor)",        is_null($sin_valor)],
    ["is_null(\$datos[\"clave\"])", is_null($datos["clave"])],
    // Tres casos FALSE
    ["is_null(0)",                  is_null($cero)],
    ["is_null(\"\")",               is_null($vacia)],
    ["is_null(false)",              is_null(false)],
];

function mostrar(mixed $valor): string
{
    return htmlspecialchars(var_export($valor, true), ENT_QUOTES, 'UTF-8');
}

// Vista
include 'views/index.view.php';
