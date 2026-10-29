<?php

/*
    actividad 32
    descripcion: formulario de registro con acceso segun perfil de usuario

    formulario de registro:
    - nombre de usuario
    - email
    - contraseña o password
    - perfil de usuario (admin, edit, user)
*/

// models

//negociado
// obtener los detalles del formulario de registro
$usuario = $_POST['usuario'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$perfil = $_POST['perfil'] ?? '';

// vista
include 'views/index.view.php';