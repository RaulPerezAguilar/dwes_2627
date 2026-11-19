<?php

/*
    Archivo: Tarticulos.php
    Descripción: Clase Tarticulos, se trata de un array de  objetos de la clase Articulo.
    Caracteristicas: POO sin encapsulamiento (atributos públicos).
    Atributos:
        - tarticulos []
    Métodos: 
        - constructor
        - getMarcas()
        - getCategorias()

*/

// Tabla que va a contener una array de objetos de la clase Articulo
class Tarticulos
{

    public ?array $tarticulos;

    public function __construct()
    {
        $this->tarticulos = [];
    }

    /*
        Método getMarcas()
        Descripción: Devuelve un array con todas las marcas de artículos disponibles
        Con este array tengo que generar el select  dinámico del campo marca.
        Cuando  estemos trabajando con base  de datos: SELECT id, marca FROM marcas order by id.
    */
    static public function getMarcas(): ?array
    {
        $marcas = [
            'Samsung',
            'LG',
            'Sony',
            'Apple',
            'Xiaomi',
            'Huawei',
            'Motorola',
            'Nokia',
            'Oppo'
        ];

        return $marcas;
    }

    /*  
    
        Método getCategorias()
        Descripción: Devuelve un array con todos los tipos de categorias disponibles
        Con este array tengo que generar una lista de checbox dinámico del campo categoria.
        Cuando  estemos trabajando con base  de datos: SELECT id, categoria FROM categorias order by id.
    */
    public static function getCategorias(): ?array
    {
        $categorias = [
            'Electrónica',
            'Tablet',
            'Laptop',
            'Smartwatch',
            'Television',
            'Audio',
            'Cámara',
            'Accesorios'
        ];

        return $categorias;
    }

    /*
        Método addArticulos()
        Descripción: Devuelve un array con todos los artículos disponibles
    */
    public function addArticulos()
    {

        // Creaer un objeto de la clase Articulo
        $articulo = new Articulo(
            1,
            'Smartphone Smasun Galaxy s21',
            'S21',
            0,
            [0, 2, 3],
            5,
            12.45
        );

        $this->tarticulos[] = $articulo;

        // Añadir más artículos al array
        $articulo = new Articulo(
            2,
            'Tablet Samsung Galaxy Tab S7',
            'Tab S7',
            0,
            [0, 1, 3],
            10,
            15.99
        );

        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            3,
            'Laptop LG Gram 17',
            'Gram 17',
            1,
            [0, 2, 4],
            3,
            25.99
        );

        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            4,
            'Smartwatch Sony Smartwatch 3',
            'Smartwatch 3',
            2,
            [0, 3, 5],
            7,
            9.99
        );

        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            5,
            'Television Apple TV 4K',
            'TV 4K',
            3,
            [0, 4, 6],
            2,
            19.99
        );

        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            6,
            'Audio Xiaomi Mi Soundbar',
            'Mi Soundbar',
            4,
            [0, 5, 7],
            8,
            14.99
        );

        $this->tarticulos[] = $articulo;
    }

    /*
        Método get_indice_categorias_a_nombres()
        Descripción: Devuelve un array con los nombres de las categorias a partir de los indices
    */
    public function get_indice_categorias_a_nombres(array $indices): array
    {
        $categorias = self::getCategorias();
        $nombres = [];

        foreach ($indices as $indice) {
            if (isset($categorias[$indice])) {
                $nombres[] = $categorias[$indice];
            }
        }

        return $nombres;
    }


    public function create(Articulo $articulo): void
    {
        $this->tarticulos[] = $articulo;
    }

    /*
        método: getArticuloById()
        Descripción: Devuelve un objeto de la clase Articulo a partir de su id
    */
    public function getArticuloById(int $id): ?Articulo
    {
        foreach ($this->tarticulos as $articulo) {
            if ($articulo->id === $id) {
                return $articulo;
            }
        }
        return null;
    }

    /*
        método: getIndiceById()
        Descripción: Devuelve el indice del array de artículos a partir de su id
    */
    public function getIndiceById(int $id): ?int
    {
        foreach ($this->tarticulos as $indice => $articulo) {
            if ($articulo->id === $id) {
                return $indice;
            }
        }
        return null;
    }

    /*
        método: update()
        Descripción: Actualiza un objeto de la clase Articulo a partir de su indice
    */
    public function update(int $indice, Articulo $articulo_actualizado): void
    {
        
        $this->tarticulos[$indice] = $articulo_actualizado;
       
    }

    /*
        método: deleteArticulo()
        Descripción: Elimina un objeto de la clase Articulo a partir de su indice
    */
    public function deleteArticulo(int $indice): void
    {
        unset($this->tarticulos[$indice]);
        // Reindexar el array para evitar huecos en los índices
        $this->tarticulos = array_values($this->tarticulos);
    }
}
