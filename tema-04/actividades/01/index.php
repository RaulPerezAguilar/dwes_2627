<?php

/*
    Ejercicio: clase Alumno
    Crear la clase Alumno con los atributos id, nombre, apellidos, poblacion,
    email, telefono y curso, con encapsulamiento (propiedades privadas).
    Crear el constructor (con parámetros o con atributos a null) y los
    getters y setters.
    Crear dos objetos: uno con atributos a null y otro con valores por parámetros.
    Usar los getters y setters de los objetos.
*/

require_once __DIR__ . '/class/Alumno.php';

// Objeto con los atributos inicializados a null
$a1 = new Alumno();

var_dump($a1);

// Asignamos valores con los setters
$a1->setId(1);
$a1->setNombre('Raúl');
$a1->setApellidos('Pérez Aguilar');
$a1->setPoblacion('Ubrique');
$a1->setEmail('raul@ejemplo.es');
$a1->setTelefono('956000000');
$a1->setCurso('2º DAW');

var_dump($a1);

// Mostramos los valores con los getters
echo $a1->getId();
echo '<br>';
echo $a1->getNombre();
echo '<br>';
echo $a1->getApellidos();
echo '<br>';
echo $a1->getPoblacion();
echo '<br>';
echo $a1->getEmail();
echo '<br>';
echo $a1->getTelefono();
echo '<br>';
echo $a1->getCurso();
echo '<br>';

// Objeto con los valores pasados como parámetros
$a2 = new Alumno(2, 'Laura', 'García Ruiz', 'Grazalema', 'laura@ejemplo.es', '956111111', '1º DAW');

var_dump($a2);

// Modificamos un valor con un setter y mostramos con getters
$a2->setCurso('2º DAW');

echo $a2->getNombre() . ' ' . $a2->getApellidos();
echo '<br>';
echo $a2->getCurso();
echo '<br>';
