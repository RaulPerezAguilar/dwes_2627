<?php

$valor1 = $_POST['valor1'] ?? 0;
$valor2 = $_POST['valor2'] ?? 0;
$suma = $valor1 + $valor2;

require 'views/resultado.view.php';
