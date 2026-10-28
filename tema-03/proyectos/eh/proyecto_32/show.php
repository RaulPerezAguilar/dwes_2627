<?php

/**
 * show.php
 *
 * Muestra la ficha de un artículo en modo solo lectura (Fase 05). Recibe ?indice=N.
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
$indice    = validar_indice($_GET['indice'] ?? null, $articulos);

if ($indice === null) {
    $q = $campo = $sentido = $mensaje = '';
    $errores = ['El artículo que intenta consultar no existe.'];
    include 'views/index.view.php';
    exit;
}

$articulo = $articulos[$indice];

// Views
include 'views/show.view.php';
