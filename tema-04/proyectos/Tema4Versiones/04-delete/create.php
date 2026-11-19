<?php

/*
    controlador: create.php
    descripción: Añade un nuevor artículo al  array de artículos.
*/

// Cargamos las clases necesarias
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Cargamos los detalles del formulario
$descripcion = $_POST['descripcion'] ?? null;
$modelo = $_POST['modelo'] ?? null;
$marca = (int) $_POST['marca']?? null;
$categorias = $_POST['categorias'] ?? null;
$unidades = $_POST['unidades']?? null;
$precio = $_POST['precio']?? null;

// Validación no se  hace

// Generar id del nuevo artículo
$id = 6; // En un caso real, se generaría automáticamente

// Creamos un nuevo artículo de la clase Articulo
$articulo = new Articulo(
    $id,
    $descripcion, 
    $modelo, 
    $marca, 
    $categorias, 
    $unidades, 
    $precio
);

// Creamos un objeto de la clase Tarticulos
$tabla_articulos = new Tarticulos();

// Cargamos los datos
$tabla_articulos->addArticulos();

// Añadimos el nuevo artículo al array de artículos
$tabla_articulos->create($articulo);

// Cargamos los arrays de marcas y categorías para generar el formulario dinámico
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// Cargamos la tabla de artículos
$articulos = $tabla_articulos->getTarticulos();

// Cargamos la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';