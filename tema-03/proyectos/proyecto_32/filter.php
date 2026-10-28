<?php

/**
 * filter.php
 *
 * Filtra la tabla por el texto recibido por GET (filter.php?q=texto).
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
$q = htmlspecialchars(trim($_GET['q'] ?? ''));

$articulos = get_articulos();

// Si hay texto, nos quedamos solo con los artículos que coincidan
if ($q != '') {
    $resultado = [];

    foreach ($articulos as $indice => $articulo) {
        $texto = $articulo['descripcion'] . ' ' . $articulo['modelo'] . ' ' . implode(' ', $articulo['categorias']);

        // mb_stripos busca sin distinguir mayúsculas y minúsculas
        if (mb_stripos($texto, $q) !== false) {
            $resultado[$indice] = $articulo;
        }
    }

    $articulos = $resultado;
}

// Views
include 'views/index.view.php';
