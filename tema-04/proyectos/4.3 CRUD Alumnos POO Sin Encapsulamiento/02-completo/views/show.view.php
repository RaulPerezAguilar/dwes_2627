<!doctype html>
<html lang="es">

<head>
    <!-- Cargar HEAD, meta etiquetas y diseño de la aplicación -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.3 - CRUD Alumnos - POO Sin Encapsulamiento</title>
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera HEADER de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Mostrar Alumno</legend>

                <!-- formulario de solo lectura con todos los detalles del alumno -->
                <form>
                    <!-- id -->
                    <div class="mb-3">
                        <label for="id" class="form-label">Id:</label>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $alumno->id ?>" disabled>
                    </div>
                    <!-- nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $alumno->nombre ?>" disabled>
                    </div>
                    <!-- apellidos -->
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $alumno->apellidos ?>" disabled>
                    </div>
                    <!-- email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $alumno->email ?>" disabled>
                    </div>
                    <!-- fecha de nacimiento -->
                    <div class="mb-3">
                        <label for="f_nacimiento" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" value="<?= $alumno->f_nacimiento ?>" disabled>
                    </div>
                    <!-- edad - se obtiene con el método getEdad() -->
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="text" class="form-control" id="edad" name="edad" value="<?= $alumno->getEdad() ?>" disabled>
                    </div>
                    <!-- Curso -->
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <input type="text" class="form-control" id="curso" name="curso" value="<?= $cursos[$alumno->curso] ?>" disabled>
                    </div>
                    <!-- Asignaturas -->
                    <!-- Genera dinámicamente una lista checbox de asignaturas a partir del array $asignaturas -->
                    <div class="mb-3">
                        <label for="asignaturas" class="form-label">Asignaturas:</label>
                        <?php foreach ($asignaturas as $indice => $asignatura) : ?>
                            <div class="form-check">
                                <div class="form-field">
                                    <input type="checkbox" id="checkaccent" class="check theme-secondary" name="asignaturas[]" value="<?= $indice ?>" <?= in_array($indice, $alumno->asignaturas)? 'checked': null ?> disabled />
                                    <label for="checkaccent"><?= $asignatura ?></label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn-solid theme-primary" href="index.php" role="button">Volver</a>
                    </div>

                </form>
            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>
