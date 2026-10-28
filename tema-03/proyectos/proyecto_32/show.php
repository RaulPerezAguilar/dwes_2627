<?php

/**
 * show.php
 *
 * Muestra los datos de un artículo sin poder editarlos. Recibe el indice por GET.
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
$indice = $_GET['indice'] ?? null;

$articulos = get_articulos();

// Si el índice no existe, volvemos al listado
if ($indice === null || !isset($articulos[$indice])) {
    header('Location: index.php');
    exit;
}

// Artículo a mostrar
$articulo = $articulos[$indice];

// Views
include 'views/show.view.php';
