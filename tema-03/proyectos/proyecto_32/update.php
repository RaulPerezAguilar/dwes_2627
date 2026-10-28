<?php

/**
 * update.php
 *
 * Recibe el índice y los campos de edit.view.php (POST) y actualiza el artículo (Fase 03).
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
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$articulos = get_articulos();
$q = $campo = $sentido = $mensaje = '';
$errores = [];

// Validar el índice
$indice = validar_indice($_POST['indice'] ?? null, $articulos);

if ($indice === null) {
    $errores = ['El artículo que intenta actualizar no existe.'];
    include 'views/index.view.php';
    exit;
}

// Validar los datos del formulario (las categorías llegan como texto separado por comas)
[$actualizado, $errores] = validar_articulo($_POST);

if (!empty($errores)) {
    // Se vuelve al formulario de edición conservando lo escrito
    $articulo = $actualizado;
    include 'views/edit.view.php';
    exit;
}

// Construir el artículo actualizado conservando su id y sustituirlo en el array
$articulos[$indice] = ['id' => $articulos[$indice]['id']] + $actualizado;

$mensaje = 'Artículo actualizado correctamente.';

// Views
include 'views/index.view.php';
