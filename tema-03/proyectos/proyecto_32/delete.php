<?php

/**
 * delete.php
 *
 * Elimina el artículo cuyo índice llega por POST (campo oculto) (Fase 04).
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
$q = $campo = $sentido = $mensaje = '';
$errores = [];

// Borrar solo se permite por POST (nunca por un enlace de lectura)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Comprobar que el índice corresponde a un elemento existente
$indice = validar_indice($_POST['indice'] ?? null, $articulos);

if ($indice === null) {
    $errores = ['El artículo que intenta eliminar no existe.'];
} else {
    $eliminado = $articulos[$indice]['descripcion'];

    // Quitar el elemento y reindexar para que los índices sean consecutivos
    unset($articulos[$indice]);
    $articulos = array_values($articulos);

    $mensaje = 'Artículo eliminado: ' . $eliminado;
}

// Views
include 'views/index.view.php';
