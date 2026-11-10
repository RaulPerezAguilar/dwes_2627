<?php
class Coche
{
    private int $velocidad;
    public function __construct()
    {
        $this->velocidad = 0;
    }

    
    // Getter
    public function getVelocidad(): int
    {
        return $this->velocidad;
    }

    // Setter
    public function setVelocidad(int $velocidad): void
    {
        if ($velocidad < 0) {
            $velocidad = 0;
        }
        $this->velocidad = $velocidad;
    }

    public function aumentarVelocidad(): void
    {
        $this->velocidad++;
    }
    public function parar(): void
    {
        $this->velocidad = 0;
    }

    class Deportivo extends Coche
    {
        $this->velocidad = $this->velocidad * 2;
    }
}
$coche = new Coche();

$coche->setVelocidad(100);
echo $coche->getVelocidad(); // 100
