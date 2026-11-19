<?php

/*
    controlador: create.php
    descripción: Añade un nuevo alumno al  array de alumnos.
*/

// Cargamos las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// Cargamos los detalles del formulario
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = (int) $_POST['curso']?? null;
$asignaturas = $_POST['asignaturas'] ?? [];

// Validación no se  hace

// Generar id del nuevo alumno
$id = 6; // En un caso real, se generaría automáticamente

// Creamos un nuevo alumno de la clase Alumno
$alumno = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas
);

// Creamos un objeto de la clase TablaAlumnos
$tabla_alumnos = new TablaAlumnos();

// Cargamos los datos
$tabla_alumnos->addAlumnos();

// Añadimos el nuevo alumno al array de alumnos
$tabla_alumnos->create($alumno);

// Cargamos los arrays de cursos y asignaturas para generar el formulario dinámico
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// Cargamos la tabla de alumnos
$alumnos = $tabla_alumnos->talumnos;

// Cargamos la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';
