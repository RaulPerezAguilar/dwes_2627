<?php

/*
    controlador: show.php

    descripción: muestra todos los detalles de un alumno, incluida la edad.

    parámetro  GET:
        - id: identificador del alumno a mostrar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';


// 1. Obtener id del alumno a mostrar desde la URL
$id = $_GET['id'] ?? null;

// 2. Crear objeto de la clase TablaAlumnos
$tabla_alumnos = new TablaAlumnos();

// 3. Cargar los datos en la tabla de  alumnos
$tabla_alumnos->addAlumnos();

// 4. Obtener el indice del alumno a mostrar a partir de su id
$indice = $tabla_alumnos->getIndiceById($id);

// 5. Obtener el alumno a mostrar a partir del indice
$alumno = $tabla_alumnos->read($indice);

// 6. Cargar los cursos y asignaturas para la vista
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 7. Carga la vista con los detalles del alumno
require_once __DIR__ . '/views/show.view.php';
