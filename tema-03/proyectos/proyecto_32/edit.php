<?php

/**
 * edit.php
 *
 * Muestra el formulario para editar un artículo. Recibe el indice por GET (edit.php?indice=0).
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

// Artículo a editar
$articulo = $articulos[$indice];

// Views
include 'views/edit.view.php';
