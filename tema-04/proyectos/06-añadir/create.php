<?php

/*
    controlador: create.php
    descripción: Añade un nuevo artículo al array de artículos (POO sin encapsulamiento).

    parámetros POST (desde new.view.php):
        - descripcion, modelo, marca, categorias[], unidades, precio
*/

// Cargamos las clases necesarias
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// 1. Cargamos los detalles del formulario
$descripcion = $_POST['descripcion'] ?? null;
$modelo = $_POST['modelo'] ?? null;
$marca = isset($_POST['marca']) ? (int) $_POST['marca'] : null;
$categorias = $_POST['categorias'] ?? [];
$unidades = isset($_POST['unidades']) ? (int) $_POST['unidades'] : null;
$precio = isset($_POST['precio']) ? (float) $_POST['precio'] : null;

// Validación no se hace

// 2. Creamos un objeto de la clase Tarticulos y cargamos los datos
$tabla_articulos = new Tarticulos();
$tabla_articulos->addArticulos();

// 3. Generamos el id del nuevo artículo (último id + 1)
$id = $tabla_articulos->getNuevoId();

// 4. Creamos un nuevo artículo de la clase Articulo
$articulo = new Articulo(
    $id,
    $descripcion,
    $modelo,
    $marca,
    $categorias,
    $unidades,
    $precio
);

// 5. Añadimos el nuevo artículo al array de artículos
$tabla_articulos->create($articulo);

// 6. Cargamos los arrays de marcas y categorías para la vista
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// 7. Cargamos la tabla de artículos (acceso directo al atributo público)
$articulos = $tabla_articulos->tarticulos;

// 8. Cargamos la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';
