<?php

$email = htmlspecialchars($_GET['email']);
$password = htmlspecialchars($_GET['password']);

echo "<h1>Datos recibidos</h1>";
echo "<p>Email: $email <br></p>";
echo "<p>Password: $password <br></p>";