<?php



function sumar(int $a, int $b){
    return $a + $b;
}


function restar(int $a, int $b){
    return $a - $b;
}

function multiplicar(int $a, int $b){
    return $a * $b;
}

$sumar = sumar(3, 4);
echo $sumar;

$restar = restar(3, 4);
echo $restar;

$multiplicar = multiplicar(3, 4);
echo $multiplicar;

?>