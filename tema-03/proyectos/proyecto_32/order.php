<?php

/**
 * order.php
 *
 * Ordena el listado por campo y sentido recibidos por GET (Fase 06). Ej: order.php?campo=precio&sentido=desc
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
$articulos = get_articulos();

// Validar los parámetros contra la lista blanca
$campo   = $_GET['campo'] ?? '';
$sentido = strtolower($_GET['sentido'] ?? '');

if (array_key_exists($campo, CAMPOS_ORDEN) && in_array($sentido, SENTIDOS_ORDEN, true)) {
    // Se ordena una copia; los datos originales no se modifican
    $articulos = ordenar_articulos($articulos, $campo, $sentido);
} else {
    // Parámetros ausentes o no válidos: listado sin ordenar
    $campo = $sentido = '';
}

$q       = '';
$mensaje = '';
$errores = [];

// Views
include 'views/index.view.php';
