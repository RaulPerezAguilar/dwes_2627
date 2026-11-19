<?php

/*
    controlador: update.php

    descripción: actualiza  los detalles de un alumno en la tabla de alumnos.

    parámetro  GET:

        - id: identificador del alumno a editar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';


// 1. Obtener id del alumno a editar desde la URL
$id = $_GET['id'] ?? null;

// 2. Extraemos los datos del formulario de edición enviados por POST
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = (int) $_POST['curso']?? null;
$asignaturas = $_POST['asignaturas'] ?? [];

// 3. Crear un nuevo objeto de la clase Alumno con los datos actualizados
$alumno_actualizado = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas
);

// 4. Crear objeto de la clase TablaAlumnos
$tabla_alumnos = new TablaAlumnos();

// 5. Cargar los datos en la tabla de  alumnos
$tabla_alumnos->addAlumnos();

// 6. Obtener indice del alumno a editar
$indice = $tabla_alumnos->getIndiceById($id);

// 7. Actualizar el alumno en la tabla de alumnos
$tabla_alumnos->update($alumno_actualizado, $indice);

// 8. Cargar la tabla de alumnos actualizada
$alumnos = $tabla_alumnos->talumnos;

// 9. Cargar la lista de cursos y asignaturas para la vista principal
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 10. Cargar la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';
