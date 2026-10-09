<?php

/*
    Ejemplo 32. if, else, esleif y operador ternario
    Descripción: Ejemplo de uso de if, else, elseif y operador ternario

    La calificacion sera:
        - suspenso
        - suficiente
        - bien
        - notable
        - sobresaliente

*/


$nota = 7;
$calificacion = "";

if ($nota < 5 and $nota >= 0) {
        $calificacion = "suspenso";
} elseif ($nota == 5) {
        $calificacion = "suficiente";
} elseif ($nota == 6) {
        $calificacion = "bien";
} elseif ($nota == 7 or $nota == 8) {
        $calificacion = "notable";
} elseif ($nota == 9 or $nota == 10) {
        $calificacion = "sobresaliente";
} else {
        $calificacion = "La nota no esta entre 0 y 10";
}

echo $calificacion;