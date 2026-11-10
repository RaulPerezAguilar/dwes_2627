<?php

// Funcion para devolver las peliculas y primera pelicula
function get_peliculas() {

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

    // Tabla de peliculas y peliculas de 2 a 6
    $peliculas = [];
    $peliculas[] = $pelicula;


    $pelicula['id'] = 2;
    $pelicula['titulo'] = 'Interstellar';
    $pelicula['idioma'] = 'Inglés';
    $pelicula['director'] = 'Christopher Nolan';
    $pelicula['generos'] = ['Ciencia ficción', 'Drama'];
    $pelicula['año'] = 2014;
    $pelicula['duracion'] = 169;
    $pelicula['recaudado'] = 773.4;
    $peliculas[] = $pelicula;


    $pelicula['id'] = 3;
    $pelicula['titulo'] = 'Parásitos';
    $pelicula['idioma'] = 'Coreano';
    $pelicula['director'] = 'Bong Joon-ho';
    $pelicula['generos'] = ['Drama', 'Suspense'];
    $pelicula['año'] = 2019;
    $pelicula['duracion'] = 132;
    $pelicula['recaudado'] = 262.6;
    $peliculas[] = $pelicula;

  
    $pelicula['id'] = 4;
    $pelicula['titulo'] = 'Titanic';
    $pelicula['idioma'] = 'Inglés';
    $pelicula['director'] = 'James Cameron';
    $pelicula['generos'] = ['Romántica', 'Drama'];
    $pelicula['año'] = 1997;
    $pelicula['duracion'] = 195;
    $pelicula['recaudado'] = 2264.7;
    $peliculas[] = $pelicula;

  
    $pelicula['id'] = 5;
    $pelicula['titulo'] = 'Avatar';
    $pelicula['idioma'] = 'Inglés';
    $pelicula['director'] = 'James Cameron';
    $pelicula['generos'] = ['Ciencia ficción', 'Aventura'];
    $pelicula['año'] = 2009;
    $pelicula['duracion'] = 162;
    $pelicula['recaudado'] = 2923.7;
    $peliculas[] = $pelicula;

  
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

// Funcion para dar una id para la pelicula nueva creada
function obtener_id_nueva_pelicula($peliculas = []) {
    // Pillar la ultima pelicula del array
    $ultima_pelicula = end($peliculas);

    // Pillar el id de la ultima pelicula
    $ultimo_id = $ultima_pelicula['id'];

    // Suma al ultimo id de la ultima pelicula 1 y asi tiene un id nuevo para la pelicula
    return $ultimo_id + 1;
}
