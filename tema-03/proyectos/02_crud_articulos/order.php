<?php

/**
 * order.php
 *
 * Ordena la tabla. Recibe campo y sentido por GET (order.php?campo=precio&sentido=desc).
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
$campo = $_GET['campo'] ?? '';
$sentido = $_GET['sentido'] ?? '';

$articulos = get_articulos();

// Solo se permiten estos valores
$campos_validos = ['id', 'descripcion', 'modelo', 'unidades', 'precio'];
$sentidos_validos = ['asc', 'desc'];

if (in_array($campo, $campos_validos) && in_array($sentido, $sentidos_validos)) {

    // uasort ordena el array manteniendo los índices originales
    uasort($articulos, function ($a, $b) use ($campo, $sentido) {

        if ($campo == 'descripcion' || $campo == 'modelo') {
            // Texto: sin distinguir mayúsculas y minúsculas
            $resultado = strcasecmp($a[$campo], $b[$campo]);
        } else {
            // Números: id, unidades y precio
            $resultado = $a[$campo] <=> $b[$campo];
        }

        // Si es descendente se invierte
        if ($sentido == 'desc') {
            $resultado = -$resultado;
        }

        return $resultado;
    });
}

// Views
include 'views/index.view.php';
