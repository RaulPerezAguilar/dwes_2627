<?php

/*
    controladdor: update.php
    
    descripción: actualiza  los detalles de un artículo en la tabla de artículos.

    parámetro  GET:

        - id: identificador del artículo a editar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';


// 1. Obtener id del artículo a editar desde la URL
$id = $_GET['id'] ?? null;

// 2. Extraemos los datos del formulario de edición enviados por POST
$descripcion = $_POST['descripcion'] ?? null;
$modelo = $_POST['modelo'] ?? null;
$marca = (int) $_POST['marca']?? null;
$categorias = $_POST['categorias'] ?? null;
$unidades = $_POST['unidades']?? null;
$precio = $_POST['precio']?? null;

// 3. Crear un nuevo objeto de la clase Articulo con los datos actualizados
$articulo_actualizado = new Articulo(
    $id,
    $descripcion, 
    $modelo, 
    $marca, 
    $categorias, 
    $unidades, 
    $precio
);

// 4. Crear objeto de la clase Tarticulos
$tabla_articulos = new Tarticulos();    

// 5. Cargar los datos en la tabla de  artículos
$tabla_articulos->addArticulos();

// 5. Obtener indice del articulo a editar
$indice = $tabla_articulos->getIndiceById($id);

// 6. Actualizar el artículo en la tabla de artículos
$tabla_articulos->update($indice, $articulo_actualizado);

// 7. Cargar la tabla de artículos actualizada
$articulos = $tabla_articulos->getTarticulos();

// 8. Cargar la lista de marcas y categorías para la vista principal
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// 9. Cargar la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';