<?php

/**
 * index.php
 *
 * Página principal: muestra el listado de artículos (Fase 01).
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

// Datos que necesita la vista
$q       = '';    // término de búsqueda aplicado
$campo   = '';    // campo de ordenación aplicado
$sentido = '';    // sentido de ordenación aplicado
$mensaje = '';
$errores = [];

// Views
include 'views/index.view.php';
