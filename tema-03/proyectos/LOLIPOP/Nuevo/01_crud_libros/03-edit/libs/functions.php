<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
        - get_libros(): Devuelve un array con todos los libros creados.
        - obtener_id_nuevo_libro($libros): Devuelve el id del nuevo libro creado.
*/

// Función get_libros(): Devuelve un array con todos los libros creados.
function get_libros() {
    // Array de libros (simulando una base de datos)
    $libros = [
        [
            'id' => 1,
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'editorial' => 'Editorial Sudamericana',
            'generos' => ['Realismo mágico', 'Novela'],
            'precio' => 19.99
        ],
        [
            'id' => 2,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Secker & Warburg',
            'generos' => ['Distopía', 'Ciencia ficción'],
            'precio' => 14.99
        ],
        [
            'id' => 3,
            'titulo' => 'El gran Gatsby',
            'autor' => 'F. Scott Fitzgerald',
            'editorial' => 'Charles Scribner\'s Sons',
            'generos' => ['Novela', 'Literatura estadounidense'],
            'precio' => 12.99
        ],
        [
            'id' => 4,
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'editorial' => 'Francisco de Robles',
            'generos' => ['Novela', 'Literatura española'],
            'precio' => 24.99
        ],
        [
            'id' => 5,
            'titulo' => 'El señor de los anillos',
            'autor' => 'J.R.R. Tolkien',
            'editorial' => 'Allen & Unwin',
            'generos' => ['Fantasía', 'Aventura'],
            'precio' => 29.99
        ]
    ];

    return $libros;
}

// Función obtener_id_nuevo_libro($libros): Devuelve el id del nuevo libro creado.

function obtener_id_nuevo_libro($libros = []) {
    // Obtener el último libro del array
    $ultimo_libro = end($libros);

    // Obtener el id del último libro
    $ultimo_id = $ultimo_libro['id'];

    // Devolver el id del nuevo libro (último id + 1)
    return $ultimo_id + 1;
}
