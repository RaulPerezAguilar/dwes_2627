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
// crear lista de variables
$perfiles = ['admin', 'edit', 'user'];

// vista
include 'views/index.view.php';