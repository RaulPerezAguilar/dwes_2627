<?php

/**
 * update.php
 *
 * Actualiza un artículo con los datos enviados por el formulario de edición.
 *
 * @package    CRUD Artículos
 * @author     Raul Perez Aguilar
 * @version    1.0
 *
 * Tabla articulos:
 *  - id, descripcion, modelo, categorias (array), unidades, precio
 */

// Cargar librerías
require_once 'libs/functions.php';

// Models

// Negociado
$indice = $_POST['indice'] ?? null;

$articulos = get_articulos();

// Si el índice no existe, volvemos al listado
if ($indice === null || !isset($articulos[$indice])) {
    header('Location: index.php');
    exit;
}

// Extraer los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$unidades = $_POST['unidades'] ?? 0;
$precio = $_POST['precio'] ?? 0;

// Actualizar el artículo conservando su id
$articulos[$indice] = [
    'id' => $articulos[$indice]['id'],
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => array_map('trim', explode(',', $categorias)),
    'unidades' => (int) $unidades,
    'precio' => (float) $precio
];

// Views
include 'views/index.view.php';
