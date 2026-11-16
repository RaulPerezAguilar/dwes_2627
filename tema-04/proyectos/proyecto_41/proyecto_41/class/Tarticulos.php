<?php

/*
    Clase Tarticulos
    Gestiona una colección (array) de objetos Articulo.
    Atributo:
        - tarticulos: array de objetos Articulo (al crear la instancia está vacío)
*/

class Tarticulos {

    private array $tarticulos;

    // Constructor: inicializa el array tarticulos vacío
    public function __construct()
    {
        $this->tarticulos = [];
    }

    // Getter: devuelve el array de artículos
    public function getTarticulos(): array {
        return $this->tarticulos;
    }

    // Setter: actualiza el array de artículos
    public function setTarticulos(array $tarticulos): void {
        $this->tarticulos = $tarticulos;
    }

    // Método estático getMarcas(): devuelve un array de marcas de ejemplo
    // (como si procediera de una tabla de una base de datos)
    public static function getMarcas(): array {
        return ['Samsung', 'Philips', 'LEGO', 'Nike', 'Adidas'];
    }

    // Método estático getCategorias(): devuelve un array de categorías de ejemplo
    // (como si procediera de una tabla de una base de datos)
    public static function getCategorias(): array {
        return ['Electrónica', 'Hogar', 'Juguetes', 'Ropa', 'Deportes'];
    }

    // Crea artículos de prueba, los convierte en objetos Articulo y los añade al array tarticulos
    public function addArticulos(): void {

        $articulos = [
            [
                'id' => 1,
                'descripcion' => 'Televisor LED 55 pulgadas 4K',
                'modelo' => 'UE55CU7105',
                'marca' => 0,
                'categorias' => [0, 1],
                'unidades' => 25,
                'precio' => 549.99
            ],
            [
                'id' => 2,
                'descripcion' => 'Aspiradora sin cable',
                'modelo' => 'PowerPro Aqua',
                'marca' => 1,
                'categorias' => [0, 1],
                'unidades' => 40,
                'precio' => 199.9
            ],
            [
                'id' => 3,
                'descripcion' => 'Set de construcción Ciudad',
                'modelo' => '60337',
                'marca' => 2,
                'categorias' => [2],
                'unidades' => 60,
                'precio' => 79.95
            ],
            [
                'id' => 4,
                'descripcion' => 'Zapatillas de running',
                'modelo' => 'Pegasus 40',
                'marca' => 3,
                'categorias' => [3, 4],
                'unidades' => 120,
                'precio' => 129.99
            ],
            [
                'id' => 5,
                'descripcion' => 'Camiseta técnica de entrenamiento',
                'modelo' => 'Own the Run',
                'marca' => 4,
                'categorias' => [3, 4],
                'unidades' => 1200,
                'precio' => 24.95
            ]
        ];

        foreach ($articulos as $a) {
            $articulo = new Articulo(
                $a['id'],
                $a['descripcion'],
                $a['modelo'],
                $a['marca'],
                $a['categorias'],
                $a['unidades'],
                $a['precio']
            );
            $this->tarticulos[] = $articulo;
        }
    }

    // Añade un único artículo a la colección
    public function addArticulo(Articulo $articulo): void {
        $this->tarticulos[] = $articulo;
    }

    // Recibe un array de índices y devuelve el array de nombres de categorías
    // Ejemplo: [0, 2] devuelve ["Electrónica", "Juguetes"]
    public function indice_categorias_a_nombre_categorias(array $indices): array {
        $categorias = self::getCategorias();
        $nombres = [];

        foreach ($indices as $indice) {
            $nombres[] = $categorias[$indice];
        }

        return $nombres;
    }

}
