<?php

$valor1 =  $_POST['valor1'];
$valor2 =  $_POST['valor2'];

$resultado = $valor1 - $valor2;

$operacion = "Suma";

include "views/resultado.view.php";