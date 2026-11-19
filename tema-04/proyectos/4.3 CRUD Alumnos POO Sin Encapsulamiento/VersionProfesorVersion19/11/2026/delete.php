<?php

/*
    controladdor: delete.php
    
    descripción: elimina un articulo de la tabla a partir de  su id y redirige a la página principal.

    parámetro  URL (GET):

        - id: identificador del artículo a editar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';


// 1. Obtener id del artículo a editar desde la URL
$id = $_GET['id'] ?? null;

// 2. Crear objeto de la clase Tarticulos
$tabla_articulos = new Tarticulos();

// 3. Cargar los datos en la tabla de  artículos
$tabla_articulos->addArticulos();

// 4. Buscar el artículo a editar por su id
$indice = $tabla_articulos->getIndiceById($id);

// 5. Eliminar el artículo de la tabla de artículos
$tabla_articulos->delete($indice);

// 6. Cargo la tabla de artículos actualizada
$articulos = $tabla_articulos->tarticulos;

// 5. Cargar las marcas y categorías para el formulario
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// 6. Carga la vista del formulario de edición
require_once __DIR__ . '/views/index.view.php';