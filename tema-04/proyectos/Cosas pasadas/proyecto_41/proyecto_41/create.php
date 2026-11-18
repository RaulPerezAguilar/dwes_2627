<?php

/*
    Proyecto 4.1 - CRUD de artículos con POO y encapsulamiento
    Controlador: procesa el envío del formulario de nuevo artículo
*/

// 1. Comprobar que la petición se ha enviado mediante POST; en caso contrario, se vuelve al formulario
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: new.php');
    exit;
}

// 2. Cargar las clases necesarias (antes de iniciar la sesión)
require_once 'class/Articulo.php';
require_once 'class/Tarticulos.php';

session_start();

$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// Datos del formulario
$descripcion = trim($_POST['descripcion'] ?? '');
$modelo = trim($_POST['modelo'] ?? '');
$marca = $_POST['marca'] ?? '';
$categorias_sel = $_POST['categorias'] ?? [];
$unidades = trim($_POST['unidades'] ?? '');
$precio = str_replace(',', '.', trim($_POST['precio'] ?? ''));

// Validación
$errores = [];

if ($descripcion === '') {
    $errores[] = 'La descripción es obligatoria.';
}

if ($modelo === '') {
    $errores[] = 'El modelo es obligatorio.';
}

$marca_valida = filter_var($marca, FILTER_VALIDATE_INT);
if ($marca_valida === false || !array_key_exists($marca_valida, $marcas)) {
    $errores[] = 'Debe seleccionar una marca de la lista.';
}

$indices_categorias = [];
if (!is_array($categorias_sel)) {
    $errores[] = 'Las categorías no son válidas.';
} else {
    foreach ($categorias_sel as $c) {
        $c_valida = filter_var($c, FILTER_VALIDATE_INT);
        if ($c_valida === false || !array_key_exists($c_valida, $categorias)) {
            $errores[] = 'Alguna de las categorías seleccionadas no es válida.';
            break;
        }
        $indices_categorias[] = $c_valida;
    }
}

$unidades_validas = filter_var($unidades, FILTER_VALIDATE_INT);
if ($unidades_validas === false || $unidades_validas < 0) {
    $errores[] = 'Las unidades son obligatorias y deben ser un número entero igual o mayor que cero.';
}

if ($precio === '' || !is_numeric($precio) || (float) $precio < 0) {
    $errores[] = 'El precio es obligatorio y debe ser un número igual o mayor que cero.';
}

// Si hay errores, se vuelve al formulario con los mensajes y los datos introducidos
if (!empty($errores)) {
    $datos = [
        'descripcion' => $descripcion,
        'modelo' => $modelo,
        'marca' => $marca,
        'categorias' => is_array($categorias_sel) ? $categorias_sel : [],
        'unidades' => $unidades,
        'precio' => $_POST['precio'] ?? ''
    ];

    include 'views/new.view.php';
    exit;
}

// Colección de artículos (la guardada en la sesión o, si no existe, la de prueba)
if (isset($_SESSION['tarticulos'])) {
    $tarticulos = $_SESSION['tarticulos'];
} else {
    $tarticulos = new Tarticulos();
    $tarticulos->addArticulos();
}

// El identificador se genera automáticamente: último id + 1
$articulos = $tarticulos->getTarticulos();
$ultimo = end($articulos);
$id = $ultimo ? $ultimo->getId() + 1 : 1;

// 3. Crear el objeto Articulo con todos sus atributos y añadirlo a la colección
sort($indices_categorias);
$articulo = new Articulo(
    $id,
    $descripcion,
    $modelo,
    $marca_valida,
    $indices_categorias,
    $unidades_validas,
    (float) $precio
);
$tarticulos->addArticulo($articulo);

// 4. Guardar la colección actualizada en la sesión y cargar la vista del listado
$_SESSION['tarticulos'] = $tarticulos;
$articulos = $tarticulos->getTarticulos();

include 'views/index.view.php';
