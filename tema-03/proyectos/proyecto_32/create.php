<?php

/**
 * create.php
 *
 * Añade un nuevo artículo con los datos enviados por el formulario.
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
// Extraer los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$unidades = $_POST['unidades'] ?? 0;
$precio = $_POST['precio'] ?? 0;

// Obtener el array de artículos y el id del nuevo artículo
$articulos = get_articulos();
$nuevo_id = obtener_id_nuevo_articulo($articulos);

// Crear el nuevo artículo (las categorías se separan por comas)
$nuevo_articulo = [
    'id' => $nuevo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => array_map('trim', explode(',', $categorias)),
    'unidades' => (int) $unidades,
    'precio' => (float) $precio
];

// Añadirlo al array
$articulos[] = $nuevo_articulo;

// Views
include 'views/index.view.php';
