<?php

// Modelo: carga las funciones y obtiene los datos
require_once "libs/functions.php";

$libros = get_libros();

// Vista: se incluye al final, cuando $libros ya existe
require_once "views/index.view.php";