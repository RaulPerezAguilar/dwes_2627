<?php

// Parametro por valor
function sumar_uno($x)
{

    $x++;
    return $x;

}
$a = 2;
echo sumar_uno($a); // devuelve 3
echo $a; // el valor de $a no cambia, sigue siendo 2

// Parametro por referencia
function sumar_dos(&$x)
{

    $x++;
    return $x;

}
$a = 2;
echo sumar_dos($a); // devuelve 3
echo $a; // el valor de $a cambia, ahora es 3


?>