<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de artículos.

    Funciones incluidas:
        - get_articulos():                       Devuelve un array con todos los artículos.
        - obtener_id_nuevo_articulo($articulos): Devuelve el id para un nuevo artículo.
        - categorias_a_array($texto):            Convierte "a, b" en ['a', 'b'].
        - validar_articulo($datos):              Valida y normaliza los datos de un formulario.
        - validar_indice($valor, $articulos):    Comprueba que un índice existe en el array.
        - normalizar_texto($texto):              Minúsculas y sin tildes (para buscar).
        - buscar_articulos($articulos, $q):      Filtra artículos por un texto.
        - ordenar_articulos($articulos, ...):    Ordena una copia del array.
        - e($texto):                             Escapa texto para mostrarlo en HTML.
*/

// Campos por los que se permite ordenar y sentidos válidos (lista blanca)
const CAMPOS_ORDEN = [
    'id'          => 'ID',
    'descripcion' => 'Descripción',
    'modelo'      => 'Modelo',
    'unidades'    => 'Unidades',
    'precio'      => 'Precio',
];
const SENTIDOS_ORDEN = ['asc', 'desc'];

// Función get_articulos(): Devuelve un array con todos los artículos (simula una base de datos).
function get_articulos() {
    $articulos = [
        [
            'id'          => 1,
            'descripcion' => 'Portátil - HP 15-DB0074NS',
            'modelo'      => 'HP 15-DB0074NS',
            'categorias'  => ['Portátil', 'Informática'],
            'unidades'    => 120,
            'precio'      => 379.00
        ],
        [
            'id'          => 2,
            'descripcion' => 'Portátil AMD A4-9125, 8 GB RAM, 125 GB',
            'modelo'      => 'HP 255 G7, 15.6',
            'categorias'  => ['Portátil', 'Informática'],
            'unidades'    => 200,
            'precio'      => 20.50
        ],
        [
            'id'          => 3,
            'descripcion' => 'PC sobremesa - Lenovo Intel® Core™ i3-8100',
            'modelo'      => 'ideacentre 510S-07ICB',
            'categorias'  => ['PC sobremesa', 'Informática'],
            'unidades'    => 50,
            'precio'      => 12.95
        ],
        [
            'id'          => 4,
            'descripcion' => 'PC Sobremesa - HP 290 APU AMD Dual-Core A6',
            'modelo'      => 'HP 290-a0002ns',
            'categorias'  => ['PC sobremesa'],
            'unidades'    => 30,
            'precio'      => 15.95
        ],
    ];

    return $articulos;
}

// Función obtener_id_nuevo_articulo($articulos): último id de la tabla + 1.
function obtener_id_nuevo_articulo($articulos = []) {
    if (empty($articulos)) {
        return 1;
    }
    // Se toma el id más alto (no depende del orden en que estén los elementos)
    return max(array_column($articulos, 'id')) + 1;
}

// Función categorias_a_array($texto): "telefonía, fotografía" => ['telefonía', 'fotografía']
function categorias_a_array($texto) {
    $categorias = array_map('trim', explode(',', (string) $texto));
    // Se descartan vacías y repetidas, y se reindexa
    return array_values(array_unique(array_filter($categorias, fn($c) => $c !== '')));
}

/**
 * Función validar_articulo($datos): valida los datos recibidos de un formulario
 * (new/edit) y los devuelve ya normalizados.
 *
 * @return array [ $articulo (sin id), $errores ]
 */
function validar_articulo($datos) {
    $errores = [];

    $descripcion = trim((string) ($datos['descripcion'] ?? ''));
    $modelo      = trim((string) ($datos['modelo'] ?? ''));
    $categorias  = categorias_a_array($datos['categorias'] ?? '');
    $unidades    = trim((string) ($datos['unidades'] ?? ''));
    // Se admite coma decimal ("12,95")
    $precio      = str_replace(',', '.', trim((string) ($datos['precio'] ?? '')));

    if ($descripcion === '') {
        $errores[] = 'La descripción es obligatoria.';
    }
    if ($modelo === '') {
        $errores[] = 'El modelo es obligatorio.';
    }
    if ($unidades === '' || filter_var($unidades, FILTER_VALIDATE_INT) === false || (int) $unidades < 0) {
        $errores[] = 'Las unidades deben ser un número entero igual o mayor que 0.';
    }
    if ($precio === '' || !is_numeric($precio) || (float) $precio < 0) {
        $errores[] = 'El precio debe ser un número igual o mayor que 0.';
    }

    $articulo = [
        'descripcion' => $descripcion,
        'modelo'      => $modelo,
        'categorias'  => $categorias,
        'unidades'    => (int) $unidades,
        'precio'      => (float) $precio,
    ];

    return [$articulo, $errores];
}

// Función validar_indice($valor, $articulos): devuelve el índice (int) si existe en el array, o null.
function validar_indice($valor, $articulos) {
    if ($valor === null || !ctype_digit((string) $valor)) {
        return null;
    }
    $indice = (int) $valor;
    return array_key_exists($indice, $articulos) ? $indice : null;
}

// Función normalizar_texto($texto): minúsculas y sin tildes.
function normalizar_texto($texto) {
    $texto = mb_strtolower(trim((string) $texto), 'UTF-8');
    return strtr($texto, [
        'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
        'à' => 'a', 'è' => 'e', 'ì' => 'i', 'ò' => 'o', 'ù' => 'u',
        'ä' => 'a', 'ë' => 'e', 'ï' => 'i', 'ö' => 'o', 'ü' => 'u',
    ]);
}

// Función buscar_articulos($articulos, $q): artículos cuya descripción, modelo
// o categorías contengan el texto. Conserva las claves (índices) originales.
function buscar_articulos($articulos, $q = '') {
    $q = normalizar_texto($q);

    if ($q === '') {
        return $articulos;
    }

    return array_filter($articulos, function ($articulo) use ($q) {
        $texto = implode(' | ', [
            $articulo['descripcion'],
            $articulo['modelo'],
            implode(' ', $articulo['categorias']),
        ]);
        return str_contains(normalizar_texto($texto), $q);
    });
}

// Función ordenar_articulos($articulos, $campo, $sentido): ordena una COPIA del array
// (los arrays en PHP se pasan por valor) sin perder los índices originales.
// id, unidades y precio se comparan numéricamente; el resto como texto sin distinguir mayúsculas.
function ordenar_articulos($articulos, $campo = 'id', $sentido = 'asc') {
    if (!array_key_exists($campo, CAMPOS_ORDEN)) {
        $campo = 'id';
    }
    if (!in_array($sentido, SENTIDOS_ORDEN, true)) {
        $sentido = 'asc';
    }

    $numerico = in_array($campo, ['id', 'unidades', 'precio'], true);

    uasort($articulos, function ($a, $b) use ($campo, $sentido, $numerico) {
        if ($numerico) {
            $r = $a[$campo] <=> $b[$campo];
        } else {
            $r = strcmp(normalizar_texto($a[$campo]), normalizar_texto($b[$campo]));
        }
        return $sentido === 'desc' ? -$r : $r;
    });

    return $articulos;
}

// Función e($texto): escapa para HTML (evita XSS al mostrar datos del usuario).
function e($texto) {
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}
