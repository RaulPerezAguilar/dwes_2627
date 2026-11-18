<?php

/*
    Proyecto 4.1 - CRUD de artículos con POO y encapsulamiento
    Controlador: prepara los datos para mostrar el formulario de nuevo artículo
*/

// 1. Cargar las clases necesarias
require_once 'class/Articulo.php';
require_once 'class/Tarticulos.php';

// 2. Obtener los arrays de marcas y categorías
// se carga el array de marcas para poder generar dinamicamente el select de marcas en el formulario
$marcas = Tarticulos::getMarcas();
// se carga el array de categorías para poder generar dinamicamente el select de categorías en el formulario
$categorias = Tarticulos::getCategorias();

// 3. Incluir la vista new.view.php
include 'views/new.view.php';
