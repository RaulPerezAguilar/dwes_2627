<?php

/*
 controlador: potencia.php
 Proyecto: proyecto 2.1 - calculadora básica
*/

$valor1 = (float) $_POST['valor1'];
$valor2 = (float) $_POST['valor2'];
$resultado = $valor1 ** $valor2;
$operacion = "Potencia";
$error = null;

if (!is_finite($resultado)) {
    $resultado = null;
    $error = "La potencia indicada no tiene un resultado real finito.";
}

include "views/resultado.view.php";
