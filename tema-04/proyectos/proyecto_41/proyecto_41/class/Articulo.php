<?php

/*
    Clase Articulo
    Encapsulamiento: las propiedades son privadas y solo se consultan o
    modifican mediante los getters y setters de la clase.

    - marca: índice de la marca en el array de marcas (una sola marca)
    - categorias: array de índices de las categorías del artículo
*/

class Articulo {

    private int $id;
    private string $descripcion;
    private string $modelo;
    private int $marca;
    private array $categorias;
    private int $unidades;
    private float $precio;

    // Constructor: permite crear un artículo indicando todos sus atributos
    public function __construct(
        int $id,
        string $descripcion,
        string $modelo,
        int $marca,
        array $categorias,
        int $unidades,
        float $precio
    )
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->categorias = $categorias;
        $this->unidades = $unidades;
        $this->precio = $precio;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getMarca(): int {
        return $this->marca;
    }

    public function getCategorias(): array {
        return $this->categorias;
    }

    public function getUnidades(): int {
        return $this->unidades;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setDescripcion(string $descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }

    public function setMarca(int $marca): void {
        $this->marca = $marca;
    }

    public function setCategorias(array $categorias): void {
        $this->categorias = $categorias;
    }

    public function setUnidades(int $unidades): void {
        $this->unidades = $unidades;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }

}
