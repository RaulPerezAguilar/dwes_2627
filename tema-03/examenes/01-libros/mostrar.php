<?php

require_once 'libs/functions.php';

$peliculas = get_peliculas();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $indice = $_POST['indice'] ?? null;

    // Si no existe el indice, volver
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

    // Actualizar la peli pero con su id
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


    include 'views/index.view.php';

} else {

    // Mostrar el formulario
    $indice = $_GET['indice'] ?? null;

    // Si no existe el indice, volver
    if ($indice === null || !isset($peliculas[$indice])) {
        header('Location: index.php');
        exit;
    }

    // Película a editar
    $pelicula = $peliculas[$indice];


    include 'views/edit.view.php';
}
