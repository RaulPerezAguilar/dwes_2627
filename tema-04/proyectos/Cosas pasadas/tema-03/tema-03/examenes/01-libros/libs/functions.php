<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de películas.

    Funciones incluidas:
        - get_peliculas(): Devuelve un array con las películas.
        - obtener_id_nueva_pelicula($peliculas): Devuelve el id de la nueva película.
*/

// Función get_peliculas(): Devuelve un array con 6 películas
function get_peliculas() {
    // Array asociativo con los datos de la primera película
    // recaudado: en millones de dólares (M$)
    $pelicula = [
        'id' => 1,
        'titulo' => 'Origen',
        'idioma' => 'Inglés',
        'director' => 'Christopher Nolan',
        'generos' => ['Ciencia ficción', 'Acción'],
        'año' => 2010,
        'duracion' => 148,
        'recaudado' => 836.8
    ];

    // Tabla de películas: índice escalar y subíndice asociativo
    $peliculas = [];
    $peliculas[] = $pelicula;

    // Película 2: a partir del array anterior se modifican los valores
    $pelicula['id'] = 2;
    $pelicula['titulo'] = 'Interstellar';
    $pelicula['idioma'] = 'Inglés';
    $pelicula['director'] = 'Christopher Nolan';
    $pelicula['generos'] = ['Ciencia ficción', 'Drama'];
    $pelicula['año'] = 2014;
    $pelicula['duracion'] = 169;
    $pelicula['recaudado'] = 773.4;
    $peliculas[] = $pelicula;

    // Película 3
    $pelicula['id'] = 3;
    $pelicula['titulo'] = 'Parásitos';
    $pelicula['idioma'] = 'Coreano';
    $pelicula['director'] = 'Bong Joon-ho';
    $pelicula['generos'] = ['Drama', 'Suspense'];
    $pelicula['año'] = 2019;
    $pelicula['duracion'] = 132;
    $pelicula['recaudado'] = 262.6;
    $peliculas[] = $pelicula;

    // Película 4
    $pelicula['id'] = 4;
    $pelicula['titulo'] = 'Titanic';
    $pelicula['idioma'] = 'Inglés';
    $pelicula['director'] = 'James Cameron';
    $pelicula['generos'] = ['Romántica', 'Drama'];
    $pelicula['año'] = 1997;
    $pelicula['duracion'] = 195;
    $pelicula['recaudado'] = 2264.7;
    $peliculas[] = $pelicula;

    // Película 5
    $pelicula['id'] = 5;
    $pelicula['titulo'] = 'Avatar';
    $pelicula['idioma'] = 'Inglés';
    $pelicula['director'] = 'James Cameron';
    $pelicula['generos'] = ['Ciencia ficción', 'Aventura'];
    $pelicula['año'] = 2009;
    $pelicula['duracion'] = 162;
    $pelicula['recaudado'] = 2923.7;
    $peliculas[] = $pelicula;

    // Película 6
    $pelicula['id'] = 6;
    $pelicula['titulo'] = 'Gladiator';
    $pelicula['idioma'] = 'Inglés';
    $pelicula['director'] = 'Ridley Scott';
    $pelicula['generos'] = ['Acción', 'Drama'];
    $pelicula['año'] = 2000;
    $pelicula['duracion'] = 155;
    $pelicula['recaudado'] = 460.5;
    $peliculas[] = $pelicula;

    return $peliculas;
}

// Función obtener_id_nueva_pelicula($peliculas): Devuelve el último id + 1
function obtener_id_nueva_pelicula($peliculas = []) {
    // Obtener la última película del array
    $ultima_pelicula = end($peliculas);

    // Obtener el id de la última película
    $ultimo_id = $ultima_pelicula['id'];

    // Devolver el id de la nueva película (último id + 1)
    return $ultimo_id + 1;
}
