<?php

/*
    fichero: Articulo.php
    @autor: Juan Carlos Moreo
    @fecha:
    @proyecto: proyecto 4.5 - sin encapsulación
*/

/**
 * Clase Articulo
 *
 * @description Clase que representa un artículo. NO cumple la propiedad de encapsulamiento:
 *              todos los atributos son públicos y se accede a ellos directamente
 *              ($articulo->descripcion), por lo que no son necesarios getters ni setters.
 *
 * @abributos:
 *  - $id: Identificador único del artículo.
 *  - $descripcion: descripción del artículo.
 *  - $modelo: modelo del artículo
 *  - $marca: selecciona la marca de una lista
 *  - $categorias: selecciona las categorias de una lista checbox
 *  - $unidades: stock en almacén de este artículo
 *  - $precio: precio del artículo
 *
 * @métodos:
 *  - constructor: parámetros opcionales
 */

class Articulo
{

    public ?int $id;
    public ?string $descripcion;
    public ?string $modelo;
    public ?int $marca;
    public ?array $categorias;
    public ?int $unidades;
    public ?float $precio;

    // Método constructor
    public function __construct(
        ?int $id = null,
        ?string $descripcion = null,
        ?string $modelo = null,
        ?int $marca = null,
        ?array $categorias = [],
        ?int $unidades = null,
        ?float $precio = null
    ) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->categorias = $categorias;
        $this->unidades = $unidades;
        $this->precio = $precio;
    }
}
