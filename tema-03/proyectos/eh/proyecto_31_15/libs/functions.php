<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
        - get_libros(): Devuelve un array con todos los libros creados.
        - obtener_id_nuevo_libro($libros): Devuelve el id del nuevo libro creado.
        - normalizar_texto($texto): Pasa a minúsculas y quita tildes para comparar.
        - buscar_libros($libros, $q): Filtra los libros por un texto de búsqueda.
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

// Función normalizar_texto($texto): minúsculas y sin tildes, para buscar sin distinguir mayúsculas/acentos.
function normalizar_texto($texto) {
    $texto = mb_strtolower(trim((string) $texto), 'UTF-8');
    return strtr($texto, [
        'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
        'à' => 'a', 'è' => 'e', 'ì' => 'i', 'ò' => 'o', 'ù' => 'u',
        'ä' => 'a', 'ë' => 'e', 'ï' => 'i', 'ö' => 'o', 'ü' => 'u',
    ]);
}

// Función buscar_libros($libros, $q): Devuelve los libros cuyo título, autor,
// editorial o géneros contengan el texto buscado. Se conservan las claves
// originales del array (necesarias para edit.php?indice=...).
function buscar_libros($libros, $q = '') {
    $q = normalizar_texto($q);

    // Sin texto de búsqueda: se devuelven todos
    if ($q === '') {
        return $libros;
    }

    return array_filter($libros, function ($libro) use ($q) {
        $campos = [
            $libro['id'],
            $libro['titulo'],
            $libro['autor'],
            $libro['editorial'],
            implode(' ', $libro['generos']),
        ];
        return str_contains(normalizar_texto(implode(' | ', $campos)), $q);
    });
}
