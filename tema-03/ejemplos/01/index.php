<?php
// Variables de partida
$a = 10;
$b = "10";
$c = 5;
$d = "Hola Pepe";
$e = "Hola Luis";
$f = "Hola";

// Comprobamos las expresiones
var_dump($a == $b); // true, porque el valor es el mismo aunque el
var_dump($a === $b); // false, porque el tipo es diferente (int vs string)
var_dump($a != $b); // false, porque el valor es el mismo
var_dump($a !== $b); // true, porque el tipo es diferente
var_dump($b > $c); // true, porque "10" es mayor que 5
var_dump($a != $c); // true, porque 10 es diferente de 5
var_dump($a <> $c); // 1, porque 10 es mayor que 5
var_dump($d == $e); // false, porque los valores son diferentes

var_dump($d[0] == $e[0]); // true, porque ambos empiezan con "H"
var_dump($d[0] == $f[0]); // true, porque ambos empiezan con "H"

$resultado = ($a > $c) ? 'Es mayor' : 'Es menor'; // Operador ternario
echo $resultado; // Muestra "Es mayor"