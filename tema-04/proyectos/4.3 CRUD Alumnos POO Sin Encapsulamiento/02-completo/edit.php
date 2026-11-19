<?php

/*
    controlador: edit.php

    descripción: muestra el formulario de edición de un alumno.

    parámetro  GET:
        - id: identificador del alumno a editar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';


// 1. Obtener id del alumno a editar desde la URL
$id = $_GET['id'] ?? null;

// 2. Crear objeto de la clase TablaAlumnos
$tabla_alumnos = new TablaAlumnos();

// 3. Cargar los datos en la tabla de  alumnos
$tabla_alumnos->addAlumnos();

// 4. Obtener el indice del alumno a editar a partir de su id
$indice = $tabla_alumnos->getIndiceById($id);

// 5. Obtener el alumno a editar a partir del indice
$alumno = $tabla_alumnos->read($indice);

// 6. Cargar los cursos y asignaturas para el formulario
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 7. Carga la vista del formulario de edición
require_once __DIR__ . '/views/edit.view.php';
