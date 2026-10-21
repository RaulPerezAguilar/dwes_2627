<?php

    /*
    Funciones incluidas:
        - get_libros():
            Devuelve un array con todos los libros del archivo JSON.
    */


// Funcion get_libros(): Devuelve un array con todos los libros del archivo JSON.
function get_libros() {

$libros = [
    [
        
        "id" => 1,
        "titulo" => "El Quijote",
        "autor" => "Miguel de Cervantes",
        "anio" => 1605,
        "generos" => ["Novela", "Aventura", "Comedia"],
        "precio" => 15.99
    ],
    [
        "id" => 2,
        "titulo" => "Cien años de soledad",
        "autor" => "Gabriel García Márquez",
        "anio" => 1967,
        "generos" => ["Ficción", "Realismo mágico"],
        "precio" => 18.99
    ],
    [
        "id" => 3,
        "titulo" => "1984",
        "autor" => "George Orwell",
        "anio" => 1949,
        "generos" => ["Ciencia ficción", "Drama"],
        "precio" => 12.99
    ],
    [
        "id" => 4,
        "titulo" => "El Principito",
        "autor" => "Antoine de Saint-Exupéry",
        "anio" => 1943,
        "generos" => ["Ficción", "Aventura"],
        "precio" => 10.99
    ],
    [
        "id" => 5,
        "titulo" => "Orgullo y prejuicio",
        "autor" => "Jane Austen",
        "anio" => 1813,
        "generos" => ["Ficción", "Romance"],
        "precio" => 14.99
    ]
];

    return $libros;
}
?>