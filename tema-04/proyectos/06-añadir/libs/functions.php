<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de artículos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los artículos creados.
        - obtener_id_nuevo_articulo($articulos): Devuelve el id del nuevo artículo.
        - indice_valido($indice, $articulos): Comprueba que el índice corresponde a un artículo existente.
*/

// Función get_articulos(): Devuelve un array con todos los artículos creados.
function get_articulos() {
    // Array de artículos (simulando una base de datos)
    $articulos = [
        [
            'id' => 1,
            'descripcion' => 'Smartphone 6,5 pulgadas 128 GB',
            'modelo' => 'Galaxy A54',
            'categorias' => ['telefonía', 'fotografía'],
            'unidades' => 25,
            'precio' => 349.99
        ],
        [
            'id' => 2,
            'descripcion' => 'Cámara réflex digital con objetivo 18-55 mm',
            'modelo' => 'EOS 250D',
            'categorias' => ['fotografía'],
            'unidades' => 10,
            'precio' => 579.00
        ],
        [
            'id' => 3,
            'descripcion' => 'Auriculares inalámbricos con cancelación de ruido',
            'modelo' => 'WH-1000XM5',
            'categorias' => ['audio', 'telefonía'],
            'unidades' => 40,
            'precio' => 299.95
        ],
        [
            'id' => 4,
            'descripcion' => 'Portátil 15,6 pulgadas 16 GB RAM 512 GB SSD',
            'modelo' => 'ThinkPad E15',
            'categorias' => ['informática'],
            'unidades' => 8,
            'precio' => 799.90
        ],
        [
            'id' => 5,
            'descripcion' => 'Tablet 10,9 pulgadas con lápiz digital',
            'modelo' => 'iPad 10',
            'categorias' => ['informática', 'telefonía'],
            'unidades' => 15,
            'precio' => 489.00
        ]
    ];

    return $articulos;
}

// Función obtener_id_nuevo_articulo($articulos): Devuelve el id del nuevo artículo (último id + 1).
function obtener_id_nuevo_articulo($articulos = []) {
    if (empty($articulos)) {
        return 1;
    }

    // Obtener el último artículo del array
    $ultimo_articulo = end($articulos);

    // Devolver el id del nuevo artículo (último id + 1)
    return $ultimo_articulo['id'] + 1;
}

// Función indice_valido($indice, $articulos): Comprueba que el índice es un entero y existe en el array.
function indice_valido($indice, $articulos = []) {
    return $indice !== null && ctype_digit((string) $indice) && isset($articulos[(int) $indice]);
}