<?php

/*
    librería: functions.php
        - get_articulos(): Devuelve un array con los artículos.
        - obtener_id_nuevo_articulo($articulos): Devuelve el id del nuevo artículo.
*/

// Función get_articulos(): Devuelve un array con los artículos
function get_articulos() {
    $articulos = [
        [
            'id' => 1,
            'descripcion' => 'Portátil - HP 15-DB0074NS',
            'modelo' => 'HP 15-DB0074NS',
            'categorias' => ['Portátil', 'Informática'],
            'unidades' => 120,
            'precio' => 379
        ],
        [
            'id' => 2,
            'descripcion' => 'Portátil AMD A4-9125, 8 GB RAM, 125 GB',
            'modelo' => 'HP 255 G7, 15.6',
            'categorias' => ['Portátil', 'Informática'],
            'unidades' => 200,
            'precio' => 20.5
        ],
        [
            'id' => 3,
            'descripcion' => 'PC sobremesa - Lenovo Intel Core i3-8100',
            'modelo' => 'ideacentre 510S-07ICB',
            'categorias' => ['PC sobremesa', 'Informática'],
            'unidades' => 50,
            'precio' => 12.95
        ],
        [
            'id' => 4,
            'descripcion' => 'PC Sobremesa - HP 290 APU AMD Dual-Core A6',
            'modelo' => 'HP 290-a0002ns',
            'categorias' => ['PC sobremesa'],
            'unidades' => 30,
            'precio' => 15.95
        ]
    ];

    return $articulos;
}

// Función obtener_id_nuevo_articulo($articulos): Devuelve el último id + 1
function obtener_id_nuevo_articulo($articulos) {
    $ultimo = end($articulos);
    return $ultimo['id'] + 1;
}
