<?php
class Coche
{
    private int $velocidad;
    public function __construct()
    {
        $this->velocidad = 0;
    }
    public function aumentarVelocidad(): void
    {
        $this->velocidad++;
    }
    public function parar(): void
    {
        $this->velocidad = 0;
    }
}
$coche = new Coche();

$coche->velocidad = 100;
echo $coche->velocidad; // 100