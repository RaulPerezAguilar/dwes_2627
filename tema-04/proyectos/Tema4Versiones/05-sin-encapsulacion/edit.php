<?php

/*
    controladdor: edit.php
    
    descripción: muestra el formulario de edición de un artículo y procesa la actualización del mismo.

    parámetro  GET:
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
$articulo = $tabla_articulos->getArticuloById($id);

// 5. Cargar las marcas y categorías para el formulario
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// 6. Carga la vista del formulario de edición
require_once __DIR__ . '/views/edit.view.php';