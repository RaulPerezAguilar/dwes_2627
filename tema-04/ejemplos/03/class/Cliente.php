<?php


Class Cliente {

    private ?string $nombre;
    private ?string $poblacion;
    private ?string $dni;

    public function __construct(
        ?string $nombre = null, 
        ?string $poblacion = null, 
        ?string $dni = null
    )
    {
        $this->$nombre = $nombre;
        $this->$poblacion = $poblacion;
        $this->$dni = $dni;
    }

    public function getNombre():string {
        return $this->nombre;
    }

    public function getPoblacion():string {
        return $this->poblacion;
    }

    public function getDni():string {
        return $this->dni;
    }

    public function setNombre(String $nombre):void {
        $this->nombre = $nombre; 
    }

    public function setPoblacion(String $poblacion):void {
        $this->poblacion = $poblacion; 
    }

    public function setDni(String $dni):void {
        $this->dni = $dni; 
    }

}