<?php

/*
 controlador: division.php

 Proyecto: proyecto 2.1 - calculadora básica
 Descripción: Calculadora de operaciones básicas:
    - suma
    - resta
    - multiplicación
    - división
    - potencia
    - ...
 Alumno: [Nombre del alumno]
 Fecha:
 
*/

// Modelo

// Negociado del controlador
// Recoger los valores del formulario

$valor1 = (float) $_POST['valor1'];
$valor2 = (float) $_POST['valor2'];

// Realizar la operación de división
$operacion = "División";
$error = null;

if ($valor2 == 0.0) {
    $resultado = null;
    $error = "No se puede dividir entre cero.";
} else {
    $resultado = $valor1 / $valor2;
}

// Vista
include "views/resultado.view.php";