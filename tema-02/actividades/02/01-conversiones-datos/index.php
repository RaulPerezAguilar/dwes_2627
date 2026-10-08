<?php

/*

 Proyecto: ejercicio 01 - Conversiones de datos en expresiones
 Descripción: mostrar el tipo de dato y el resultado de varias expresiones
    en las que PHP convierte tipos automáticamente.
 Alumno: Raul Perez Aguilar
 Fecha: 07/10/2026

*/

// Modelo
$entero          = 5;
$cadena_numerica = "3 manzanas";   // cadena que empieza por un número
$cadena          = " manzanas";
$decimal         = 2.5;
$booleano        = true;

// El operador @ evita el aviso "A non-numeric value" de PHP 8 con "3 manzanas"
$expresiones = [
    ['Multiplicar entero por cadena con número inicial', '$entero * $cadena_numerica', @($entero * $cadena_numerica)],
    ['Sumar entero y cadena con número inicial',         '$entero + $cadena_numerica', @($entero + $cadena_numerica)],
    ['Sumar entero y float',                             '$entero + $decimal',         $entero + $decimal],
    ['Concatenar entero y cadena',                       '$entero . $cadena',          $entero . $cadena],
    ['Sumar entero y booleano',                          '$entero + $booleano',        $entero + $booleano],
];

function mostrar(mixed $valor): string
{
    return htmlspecialchars(var_export($valor, true), ENT_QUOTES, 'UTF-8');
}

// Vista
include 'views/index.view.php';
