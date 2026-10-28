<?php

/**
 * edit.php
 *
 * Muestra el formulario de edición precargado (Fase 03). Recibe ?indice=N.
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

// Validar el índice recibido por la URL (edit.php?indice=0 edita el primero)
$indice = validar_indice($_GET['indice'] ?? null, $articulos);

if ($indice === null) {
    // Índice inexistente: se muestra el listado con un error
    $q = $campo = $sentido = $mensaje = '';
    $errores = ['El artículo que intenta editar no existe.'];
    include 'views/index.view.php';
    exit;
}

// Artículo a editar y errores (vacíos la primera vez)
$articulo = $articulos[$indice];
$errores  = [];

// Views
include 'views/edit.view.php';
