<?php

/*
    fichero: Articulos.php
    @autor: Juan Carlos Moreo
    @fecha: 
    @proyecto: proyecto41
*/

/**
 * Clase Articulo
 *
 * @description Clase que representa un artículo con propiedades  métodos para manejar su información. Tiene que cumplir la propiedad de encapsulamiento
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
 * 
 */

Class Articulo {

    public ?int $id;
    public ?string  $descripcion;
    public ?string $modelo;
    public ?string $marca;
    public ?array $categorias;
    public ?int $unidades;
    public ?float $precio;

    // Método constructor con encapsulamiento
    public function __construct(
        ?int $id = null,
        ?string $descripcion = null,
        ?string $modelo = null,
        ?string $marca = null,
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



