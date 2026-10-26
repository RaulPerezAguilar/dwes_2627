<?php

// Modelo: carga las funciones y añade el nuevo libro
require_once "libs/functions.php";
require_once "models/create.model.php";

// Datos actualizados (ya incluyen el libro nuevo)
$libros = get_libros();

// Vista principal: muestra la tabla con el libro introducido
require_once "views/index.view.php";
