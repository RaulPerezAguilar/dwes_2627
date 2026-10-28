<?php

/**
 * new.php
 *
 * Muestra el formulario en blanco para añadir un artículo (Fase 02).
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
$articulo = ['descripcion' => '', 'modelo' => '', 'categorias' => [], 'unidades' => '', 'precio' => ''];
$errores  = [];

// Views
include 'views/new.view.php';
