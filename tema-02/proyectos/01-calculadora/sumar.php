<?php

/**
 * Proyecto: 2.1 - calculadora basica
 * Autor: Raul Perez Aguilar
 * Fecha: 2026-10-05
 * Descripción: Calculadora de operaciones basicas:
 *  - Suma
 *  - Resta
 *  - Multiplicación
 *  - División
 *  - Potencia
 *  - Raíz cuadrada
 *  - ...
 */

// Modelo

// Negociado
// Recoger los varoles del formulario
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

// Realizar la operación de suma
$resultado = $valor1 + $valor2;

$operacion = "Suma";
// Vista
include 'views/resultado.view.php';