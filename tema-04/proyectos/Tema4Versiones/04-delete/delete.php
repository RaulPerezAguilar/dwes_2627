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