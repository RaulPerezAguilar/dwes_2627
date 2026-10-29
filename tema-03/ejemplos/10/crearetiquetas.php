<?php

function eti_html($eti = []) {
    // Variables de trabajo para crear la etiqueta HTML
    $contenido = '';
    $etiqueta = 'p';
    $clase = '';
    
    // Si se reciben los argumentos esperados, se asigna su valor
    if (array_key_exists('contenido', $eti)) $contenido = $eti['contenido'];
    if (array_key_exists('etiqueta', $eti))  $etiqueta  = $eti['etiqueta'];
    if (array_key_exists('clase', $eti))     
$eti['clase'] . '"';
    // Imprime la etiqueta HTML con su contenido y la clase CSS
    echo "<$etiqueta $clase>$contenido</$etiqueta>";

}

?>