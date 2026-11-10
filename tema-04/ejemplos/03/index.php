<?php

require_once __DIR__ . '/class/Cliente.php';









$c1 = new Cliente('Infosierra','Ubrique','12123456Z');

var_dump($c1);


var_dump($c1);

echo $c1->getNombre();
echo '<br>';
echo $c1->getPoblacion();
echo '<br>';
echo $c1->getDni();
echo '<br>';

$c2 = new Cliente();
var_dump($c2);