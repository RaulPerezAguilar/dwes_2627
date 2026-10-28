<?php

/**
 * filter.php
 *
 * Filtra el listado por el término recibido por GET (?q=texto) (Fase 07).
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
$q = trim($_GET['q'] ?? '');

// Si el término está vacío se muestran todos; si no, solo los coincidentes
$articulos = buscar_articulos(get_articulos(), $q);

$campo   = '';
$sentido = '';
$mensaje = '';
$errores = [];

// Views (se pasan el resultado y el término para mantenerlo en el formulario)
include 'views/index.view.php';
