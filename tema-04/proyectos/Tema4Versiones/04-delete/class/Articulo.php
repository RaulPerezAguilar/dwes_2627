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
 *  - getters y setters
 */

Class Articulo {

    private ?int $id;
    private ?string  $descripcion;
    private ?string $modelo;
    private ?string $marca;
    private ?array $categorias;
    private ?int $unidades;
    private ?float $precio;

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

    // Getters y Setters
    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo(?string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca(): ?string
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca(?string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of categorias
     */
    public function getCategorias(): ?array
    {
        return $this->categorias;
    }

    /**
     * Set the value of categorias
     */
    public function setCategorias(?array $categorias): self
    {
        $this->categorias = $categorias;

        return $this;
    }

    /**
     * Get the value of unidades
     */
    public function getUnidades(): ?int
    {
        return $this->unidades;
    }

    /**
     * Set the value of unidades
     */
    public function setUnidades(?int $unidades): self
    {
        $this->unidades = $unidades;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio(?float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}



