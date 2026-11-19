<?php

/*
    fichero: Alumno.php
    @autor: Raúl Pérez Aguilar
    @fecha:
    @proyecto: proyecto43
*/

/**
 * Clase Alumno
 *
 * @description Clase que representa un alumno con propiedades y métodos para manejar su información. NO cumple la propiedad de encapsulamiento
 *
 * @abributos:
 *  - $id: Identificador único del alumno.
 *  - $nombre: nombre del alumno.
 *  - $apellidos: apellidos del alumno
 *  - $email: email del alumno
 *  - $f_nacimiento: fecha de nacimiento del alumno
 *  - $curso: selecciona el curso de una lista desplegable (almacena el índice)
 *  - $asignaturas: selecciona las asignaturas de una lista checbox (almacena array de índices)
 *
 * @métodos:
 *  - constructor: parámetros opcionales
 *  - getEdad(): devuelve la edad del alumno a partir de la fecha de nacimiento
 *
 */

Class Alumno {

    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?string $f_nacimiento;
    public ?int $curso;
    public ?array $asignaturas;

    // Método constructor sin encapsulamiento
    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $email = null,
        ?string $f_nacimiento = null,
        ?int $curso = null,
        ?array $asignaturas = []
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas;
    }

    /*
        método: getEdad()
        Descripción: Devuelve la edad del alumno a partir de la fecha de nacimiento
    */
    public function getEdad(): int
    {
        $fecha_nacimiento = new DateTime($this->f_nacimiento);
        $hoy = new DateTime();

        return $hoy->diff($fecha_nacimiento)->y;
    }

}

