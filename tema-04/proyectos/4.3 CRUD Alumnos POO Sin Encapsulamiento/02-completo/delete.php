<?php

/*
    controlador: delete.php

    descripción: elimina un alumno de la tabla a partir de  su id y redirige a la página principal.

    parámetro  URL (GET):

        - id: identificador del alumno a eliminar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';


// 1. Obtener id del alumno a eliminar desde la URL
$id = $_GET['id'] ?? null;

// 2. Crear objeto de la clase TablaAlumnos
$tabla_alumnos = new TablaAlumnos();

// 3. Cargar los datos en la tabla de  alumnos
$tabla_alumnos->addAlumnos();

// 4. Buscar el indice del alumno a eliminar por su id
$indice = $tabla_alumnos->getIndiceById($id);

// 5. Eliminar el alumno de la tabla de alumnos
$tabla_alumnos->delete($indice);

// 6. Cargo la tabla de alumnos actualizada
$alumnos = $tabla_alumnos->talumnos;

// 7. Cargar los cursos y asignaturas para la vista principal
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 8. Cargar la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';
