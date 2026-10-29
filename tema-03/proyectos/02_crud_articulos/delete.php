<?php

/**
 * delete.php
 *
 * Elimina el artículo cuyo indice se envía por POST.
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

// Si el índice existe, se elimina y se reindexa el array
if ($indice !== null && isset($articulos[$indice])) {
    unset($articulos[$indice]);
    $articulos = array_values($articulos);
}

// Views
include 'views/index.view.php';
