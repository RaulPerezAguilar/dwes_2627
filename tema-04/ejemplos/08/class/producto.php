<?php
class Producto
{
protected ?int $id;
protected ?string $descripcion;
protected ?float $precio;
protected ?string $categoria;
protected ?int $unidades;
public function __construct(
$id = null, 
$descripcion = null, 
$precio = null, 
$categoria = null, 
$unidades = null
)
{
$this->id = $id;
$this->descripcion = $descripcion;
$this->precio = $precio;
$this->categoria = $categoria;
$this->unidades = $unidades;
}
public function getcategoria(): ?string {
return $this->categoria;
}
public function getunidades(): ?int {
return $this->unidades;
}
public function getdescripcion(): ?string {
return $this->descripcion;
}
public function getPrecio(): ?float {
return $this->precio;
}
}
class Libro extends Producto
{
public function getResumen(): string
{
return 'Descripción: ' . $this->getdescripcion()
. ', Precio: ' . $this->getPrecio()
. ', Categoria: ' . $this->getcategoria() . ' ' . $this
>getunidades();
}
}getunidades();
}
