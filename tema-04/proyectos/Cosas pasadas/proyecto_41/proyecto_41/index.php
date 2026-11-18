<?php

/*
    Proyecto 4.1 - CRUD de artículos con POO y encapsulamiento
    Controlador principal: muestra el listado de artículos
*/

// Cargar las clases (antes de iniciar la sesión)
require_once 'class/Articulo.php';
require_once 'class/Tarticulos.php';

session_start();

// 1. Instanciar la clase Tarticulos
$tarticulos = new Tarticulos();

// 2. Cargar los artículos de prueba con addArticulos()
//    (si ya hay una colección guardada en la sesión, se utiliza esa)
if (isset($_SESSION['tarticulos'])) {
    $tarticulos = $_SESSION['tarticulos'];
} else {
    $tarticulos->addArticulos();
    $_SESSION['tarticulos'] = $tarticulos;
}

// 3. Obtener el array de artículos
$articulos = $tarticulos->getTarticulos();

// 4. Obtener los arrays de marcas y categorías
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// 5. Pasar los artículos, las marcas y las categorías a la vista
include 'views/index.view.php';
