<?php

/*
    Archivo: TablaAlumnos.php
    Descripción: Clase TablaAlumnos, se trata de un array de  objetos de la clase Alumno.
    Caracteristicas: POO sin encapsulamiento.
    Atributos:
        - talumnos []
    Métodos:
        - constructor
        - getCursos()
        - getAsignaturas()
        - addAlumnos()
        - get_indice_asignaturas_a_nombres()
        - create()
        - read()
        - getIndiceById()
        - update()
        - delete()

*/

// Tabla que va a contener una array de objetos de la clase Alumno
class TablaAlumnos
{

    public ?array $talumnos;

    public function __construct()
    {
        $this->talumnos = [];
    }


    /*
        Método getCursos()
        Descripción: Devuelve un array con todos los cursos disponibles
        Con este array tengo que generar el select  dinámico del campo curso.
        Cuando  estemos trabajando con base  de datos: SELECT id, curso FROM cursos order by id.
    */
    static public function getCursos(): ?array
    {
        $cursos = [
            '1SMR',
            '2SMR',
            '1DAW',
            '2DAW',
            '1AD',
            '2AD'
        ];

        return $cursos;
    }

    /*

        Método getAsignaturas()
        Descripción: Devuelve un array con todas las asignaturas disponibles
        Con este array tengo que generar una lista de checbox dinámico del campo asignaturas.
        Cuando  estemos trabajando con base  de datos: SELECT id, asignatura FROM asignaturas order by id.
    */
    public static function getAsignaturas(): ?array
    {
        $asignaturas = [
            'DWES',
            'DWEC',
            'Despliegue Aplicaciones',
            'HLC',
            'EINEM',
            'Diseño Interfaces'
        ];

        return $asignaturas;
    }

    /*
        Método addAlumnos()
        Descripción: Añade a la tabla al menos 4 objetos de la clase Alumno
    */
    public function addAlumnos()
    {

        // Crear un objeto de la clase Alumno
        $alumno = new Alumno(
            1,
            'Juan',
            'García López',
            'juan.garcia@gmail.com',
            '2004-03-15',
            3,
            [0, 1, 2]
        );

        $this->talumnos[] = $alumno;

        // Añadir más alumnos al array
        $alumno = new Alumno(
            2,
            'María',
            'Fernández Ruiz',
            'maria.fernandez@gmail.com',
            '2005-07-22',
            2,
            [0, 1, 5]
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            3,
            'Pedro',
            'Martínez Sánchez',
            'pedro.martinez@gmail.com',
            '2003-11-02',
            3,
            [0, 2, 3, 4]
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            4,
            'Lucía',
            'Romero Díaz',
            'lucia.romero@gmail.com',
            '2006-01-30',
            0,
            [4]
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            5,
            'Carlos',
            'Jiménez Moreno',
            'carlos.jimenez@gmail.com',
            '2002-09-10',
            5,
            [3, 4, 5]
        );

        $this->talumnos[] = $alumno;
    }

    /*
        Método get_indice_asignaturas_a_nombres()
        Descripción: Devuelve un array con los nombres de las asignaturas a partir de los indices
    */
    public function get_indice_asignaturas_a_nombres(array $indices): array
    {
        $asignaturas = self::getAsignaturas();
        $nombres = [];

        foreach ($indices as $indice) {
            if (isset($asignaturas[$indice])) {
                $nombres[] = $asignaturas[$indice];
            }
        }

        return $nombres;
    }


    /*
        método: create()
        Descripción: Añade un nuevo objeto de la clase Alumno a la tabla
    */
    public function create(Alumno $alumno): void
    {
        $this->talumnos[] = $alumno;
    }

    /*
        método: read()
        Descripción: Devuelve un objeto de la clase Alumno a partir del indice
    */
    public function read(int $indice): ?Alumno
    {
        return $this->talumnos[$indice] ?? null;
    }

    /*
        método: getIndiceById()
        Descripción: Devuelve el indice del array de alumnos a partir de su id
    */
    public function getIndiceById(int $id): ?int
    {
        foreach ($this->talumnos as $indice => $alumno) {
            if ($alumno->id === $id) {
                return $indice;
            }
        }
        return null;
    }

    /*
        método: update()
        Descripción: Actualiza los detalles de un alumno, los parámetros son el objeto alumno y el indice
    */
    public function update(Alumno $alumno_actualizado, int $indice): void
    {

        $this->talumnos[$indice] = $alumno_actualizado;

    }

    /*
        método: delete()
        Descripción: Elimina un objeto de la clase Alumno a partir de su indice
    */
    public function delete(int $indice): void
    {
        unset($this->talumnos[$indice]);

        // Reindexar el array para mantener los índices consecutivos
        $this->talumnos = array_values($this->talumnos);
    }
}
