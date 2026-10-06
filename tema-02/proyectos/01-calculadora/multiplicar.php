<?php

/*
 controlador: multiplicar.php
 Proyecto: proyecto 2.1 - calculadora básica
*/

$valor1 = (float) $_POST['valor1'];
$valor2 = (float) $_POST['valor2'];
$resultado = $valor1 * $valor2;
$operacion = "Multiplicación";

include "views/resultado.view.php";
