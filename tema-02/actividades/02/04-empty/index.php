<?php

/*

 Proyecto: ejercicio 04 - Función empty()
 Descripción: mostrar 3 casos verdaderos y 3 casos falsos de la función empty()
 Alumno: Raul Perez Aguilar
 Fecha: 07/10/2026

*/

// Modelo
$cero      = 0;
$vacia     = "";
$cero_txt  = "0";
$texto     = "hola";
$numero    = 5;
$cero_dec  = "0.0";   // cadena "0.0": NO se considera vacía

$casos = [
    // Tres casos TRUE
    ["empty(0)",        empty($cero)],
    ["empty(\"\")",     empty($vacia)],
    ["empty(\"0\")",    empty($cero_txt)],
    // Tres casos FALSE
    ["empty(\"hola\")", empty($texto)],
    ["empty(5)",        empty($numero)],
    ["empty(\"0.0\")",  empty($cero_dec)],
];

function mostrar(mixed $valor): string
{
    return htmlspecialchars(var_export($valor, true), ENT_QUOTES, 'UTF-8');
}

// Vista
include 'views/index.view.php';
