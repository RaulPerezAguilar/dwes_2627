<?php

/*
    controladdor: delete.php
    
    descripción: elimina un articulo de la tabla de artículos. 

    parámetro  URL (GET):
        - id: identificador del artículo a eliminar.
*/


// Cargar las clases necesarias
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';


// 1. Obtener id del artículo a editar desde la URL
$id = $_GET['id'] ?? null;

// 2. Extraer los datos del artículo a eliminar
$tabla_articulos = new Tarticulos();

// 3. Cargar los datos en la tabla de  artículos
$tabla_articulos->addArticulos();

// 4. Obtener el indice del artículo a eliminar
$indice = $tabla_articulos->getIndiceById($id);

// 5. Eliminar el artículo de la tabla
$tabla_articulos->deleteArticulo($indice);

// 6. Cargar la tabla de artículos actualizada (acceso directo al atributo público)
$articulos = $tabla_articulos->tarticulos;

// 7. Cargar la lista de marcas y categorías para la vista principal
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// 8. Cargar la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';