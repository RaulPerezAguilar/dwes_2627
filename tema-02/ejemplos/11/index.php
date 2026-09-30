<?php

$var = null;

if (is_null($var)) {
    echo "<p>La variable es nula</p>";
} else {
    echo "<p>La variable no es nula</p>";
}

$var1 = null;
if (isset($var1)) {
    echo "<p>La variable está definida</p>";
} else {
    echo "<p>La variable no está definida</p>";
}

if (isset($var2)) {
    echo "<p>La variable está definida</p>";
} else {
    echo "<p>La variable no está definida</p>";
}