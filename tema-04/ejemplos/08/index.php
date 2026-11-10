<?php

require_once 'class/producto.php';

$libro = new Libro(1, 'El Quijote', 19.99, 'Novela', 5);

echo $libro->getResumen();
echo $libro->getcategoria();