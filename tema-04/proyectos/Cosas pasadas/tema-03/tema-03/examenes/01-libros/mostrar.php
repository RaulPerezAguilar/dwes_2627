<?php

/**
 * mostrar.php
 *
 * Muestra el formulario con los datos de una película para editarla (GET, mostrar.php?indice=0)
 * y, al enviar el formulario (POST), actualiza la película.
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
$peliculas = get_peliculas();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ---- Actualizar la película (datos enviados por el formulario) ----
    $indice = $_POST['indice'] ?? null;

    // Si el índice no existe, volvemos al listado
    if ($indice === null || !isset($peliculas[$indice])) {
        header('Location: index.php');
        exit;
    }

    // Extraer los datos del formulario
    $titulo = htmlspecialchars($_POST['titulo'] ?? '');
    $idioma = htmlspecialchars($_POST['idioma'] ?? '');
    $director = htmlspecialchars($_POST['director'] ?? '');
    $generos = htmlspecialchars($_POST['generos'] ?? '');
    $anio = $_POST['anio'] ?? 0;
    $duracion = $_POST['duracion'] ?? 0;
    $recaudado = $_POST['recaudado'] ?? 0;

    // Actualizar la película conservando su id (los géneros vuelven a ser un array)
    $peliculas[$indice] = [
        'id' => $peliculas[$indice]['id'],
        'titulo' => $titulo,
        'idioma' => $idioma,
        'director' => $director,
        'generos' => array_map('trim', explode(',', $generos)),
        'año' => (int) $anio,
        'duracion' => (int) $duracion,
        'recaudado' => (float) $recaudado
    ];

    // Views
    include 'views/index.view.php';

} else {

    // ---- Mostrar el formulario con los datos de la película ----
    $indice = $_GET['indice'] ?? null;

    // Si el índice no existe, volvemos al listado
    if ($indice === null || !isset($peliculas[$indice])) {
        header('Location: index.php');
        exit;
    }

    // Película a editar
    $pelicula = $peliculas[$indice];

    // Views
    include 'views/edit.view.php';
}
