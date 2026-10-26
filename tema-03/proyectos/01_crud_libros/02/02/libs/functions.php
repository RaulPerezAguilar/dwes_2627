<?php

/*
 Funciones incluidas:
    - get_libros():
        Devuelve un array con todos los libros (libs/libros.json o, si no existe, los iniciales).
    - create($libro):
        Añade un nuevo libro a la tabla y devuelve el libro creado (con su id).
*/

const FICHERO_LIBROS = __DIR__ . '/libros.json';

// Funcion get_libros(): Devuelve un array con todos los libros
function get_libros()
{
    // Si ya se ha añadido algún libro, se leen del fichero JSON
    if (file_exists(FICHERO_LIBROS)) {
        $libros = json_decode(file_get_contents(FICHERO_LIBROS), true);
        if (is_array($libros)) {
            return $libros;
        }
    }

    // Libros iniciales
    return [
        [
            "id" => 1,
            "titulo" => "Los Señores del tiempo",
            "autor" => "García Sénz de Urturi",
            "editorial" => "Anaya",
            "genero" => "Novela",
            "precio" => 19.50
        ],
        [
            "id" => 2,
            "titulo" => "El Rey recibe",
            "autor" => "Eduardo Mendoza",
            "editorial" => "Santillana",
            "genero" => "Novela",
            "precio" => 20.50
        ],
        [
            "id" => 3,
            "titulo" => "Diario de una mujer",
            "autor" => "Eduardo Mendoza",
            "editorial" => "Síntesis",
            "genero" => "Juvenil",
            "precio" => 12.95
        ],
        [
            "id" => 4,
            "titulo" => "El Quijote de la Mancha",
            "autor" => "Miguel de Cervantes",
            "editorial" => "Neptuno",
            "genero" => "Novela",
            "precio" => 15.95
        ]
    ];
}

// Funcion create($libro): Añade un libro a la tabla y lo guarda en el fichero JSON
function create($libro)
{
    $libros = get_libros();

    // Nuevo id: el mayor id existente + 1
    $libro = ["id" => max(array_column($libros, "id") ?: [0]) + 1] + $libro;

    $libros[] = $libro;

    file_put_contents(
        FICHERO_LIBROS,
        json_encode($libros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
        LOCK_EX
    );

    return $libro;
}
