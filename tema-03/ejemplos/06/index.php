<?php

$nota = 7;

// estructura switch

switch(true) {

    case ($nota < 5):
            echo 'Insuficiente';
            break;
    case ($nota < 6):
            echo 'Suficiente';
            break;
    case ($nota < 7):
            echo 'Bien';
            break;
    case ($nota <9):
            echo 'Notable';
            break;
    case ($nota <= 10):
            echo 'Sobresaliente';
            break;
    default:
            echo 'valor no permitido';
}
?>