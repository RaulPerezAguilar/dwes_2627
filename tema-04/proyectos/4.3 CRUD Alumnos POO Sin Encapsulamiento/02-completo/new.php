<?php

/**
 * new.php
 *
 * Muestra el formulario para añadir un nuevo alumno al array de alumnos. No se guarda en base de datos, solo en memoria.
 *
 * @package    CRUD Alumnos
 * @author     Raúl Pérez Aguilar
 * @version    1.0
 *
 * Tabla alumnos:
 *  - id
 *  - nombre
 *  - apellidos
 *  - email
 *  - f_nacimiento
 *  - curso
 *  - asignaturas (array)
 */

// Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// Models - no lo necesitamos NO BASE DE DATOS

// 1. Cargar el array de cursos - es  metodo estático, no necesitamos crear un objeto de la clase TablaAlumnos
$cursos = TablaAlumnos::getCursos();

// 2. Cargar el array de asignaturas - es  metodo estático, no necesitamos crear un objeto de la clase TablaAlumnos
$asignaturas = TablaAlumnos::getAsignaturas();

// Views
include __DIR__ . '/views/new.view.php';


