<?php

/**
 * create.php
 *
 * Añade una nueva película con los datos enviados por el formulario.
 *
 * @package    CRUD Películas
 * @author     Juan Carlos Moreno
 * @version    1.0
 *
 * Tabla películas:
 *  - id, titulo, idioma, director, generos (array), año, duracion, recaudado
 */

// Cargar librerías
require_once 'libs/functions.php';

// Models

// Negociado
// Extraer los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$idioma = htmlspecialchars($_POST['idioma'] ?? '');
$director = htmlspecialchars($_POST['director'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$anio = $_POST['anio'] ?? 0;
$duracion = $_POST['duracion'] ?? 0;
$recaudado = $_POST['recaudado'] ?? 0;

// Obtener el array de películas y el id de la nueva película
$peliculas = get_peliculas();
$nuevo_id = obtener_id_nueva_pelicula($peliculas);

// Crear el array asociativo de la nueva película (los géneros se separan por comas)
$nueva_pelicula = [
    'id' => $nuevo_id,
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => array_map('trim', explode(',', $generos)),
    'año' => (int) $anio,
    'duracion' => (int) $duracion,
    'recaudado' => (float) $recaudado
];

// Agregar la nueva película al array de películas
$peliculas[] = $nueva_pelicula;

// Views
include 'views/index.view.php';
