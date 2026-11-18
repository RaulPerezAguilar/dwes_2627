<?php

/**
 * index.php
 *
 * Muestra la tabla de películas.
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

// Views
include 'views/index.view.php';
