<?php

/**
 * index.php
 *
 * Muestra la tabla de artículos.
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
$articulos = get_articulos();

// Views
include 'views/index.view.php';
