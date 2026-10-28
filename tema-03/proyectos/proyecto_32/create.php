<?php

/**
 * create.php
 *
 * Recibe los datos de new.view.php (POST), valida y añade el artículo (Fase 02).
 *
 * @package    CRUD Artículos
 * @author     Raul Perez Aguilar
 * @version    1.0
 *
 * Tabla articulos:
 *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
 *  - descripcion (VARCHAR(255))
 *  - modelo (VARCHAR(255))
 *  - categorias (array de categorías)
 *  - unidades (INT)
 *  - precio (DECIMAL)
 */

// Cargar librerías
require_once 'libs/functions.php';

// Models

// Negociado
// Solo se procesa si llega por POST; si no, se vuelve al formulario
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: new.php');
    exit;
}

// Validar los datos del formulario
[$nuevo, $errores] = validar_articulo($_POST);

if (!empty($errores)) {
    // Hay errores: se vuelve al formulario conservando lo escrito
    $articulo = $nuevo;
    include 'views/new.view.php';
    exit;
}

// Obtener el array de artículos y el id del nuevo artículo (último id + 1)
$articulos = get_articulos();
$nuevo     = ['id' => obtener_id_nuevo_articulo($articulos)] + $nuevo;

// Añadir el nuevo artículo (solo existe durante esta petición: no hay persistencia)
$articulos[] = $nuevo;

// Datos que necesita la vista
$q       = '';
$campo   = '';
$sentido = '';
$mensaje = 'Artículo añadido correctamente.';

// Views
include 'views/index.view.php';
