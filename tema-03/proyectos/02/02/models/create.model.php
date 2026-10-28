<?php

/*
 Modelo: añade un nuevo libro a la tabla a partir del formulario
 Usa la función create() de libs/functions.php
 Deja preparadas las variables $error, $mensaje y $nuevo para la vista
*/

$error = '';
$mensaje = '';
$nuevo = null;

// Recogida de datos (trim quita espacios de los extremos)
$titulo    = trim($_POST['titulo'] ?? '');
$autor     = trim($_POST['autor'] ?? '');
$editorial = trim($_POST['editorial'] ?? '');
$genero    = trim($_POST['genero'] ?? '');
$precio    = str_replace(',', '.', trim($_POST['precio'] ?? ''));

// Validación
if ($titulo === '' || $autor === '' || $editorial === '' || $genero === '') {
    $error = 'Todos los campos son obligatorios.';
} elseif (!is_numeric($precio) || (float) $precio < 0) {
    $error = 'El precio debe ser un número mayor o igual que 0.';
}

// Alta del libro
if ($error === '') {
    $nuevo = create([
        'titulo'    => $titulo,
        'autor'     => $autor,
        'editorial' => $editorial,
        'genero'    => $genero,
        'precio'    => (float) $precio,
    ]);
    $mensaje = 'Libro añadido correctamente.';
}
