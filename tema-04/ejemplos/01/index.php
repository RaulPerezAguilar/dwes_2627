<?php

/*
    Ejemplo 1
    Crear la clase Persona con los atributos nombre, edad y sexo.
    Crear metodo constructor que inicialice  los atributos de la clase.
    Crear un metodo que muestre los datos de la persona.
    Crear objeto de la clase Persona y mostrar sus atributos.
*/

class Persona {

    // Propiedad o atributo de la clase
    public ?string $nombre; // El signo de interrogación indica que puede ser nulo
    public ?int $edad;
    public ?string $sexo;

    public function __construct() {
        $this->nombre = null;
        $this->edad = null;
        $this->sexo = null;
    }
    
}

$persona1 = new Persona();

var_dump($persona1);