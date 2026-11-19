<!doctype html>
<html lang="es">

<head>
    <!-- Cargar HEAD de la página -->
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
                <legend>Formulario Nuevo Alumno</legend>

                <form action="create.php" method="post">
                    <!-- nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <!-- apellidos -->
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                    <!-- email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <!-- fecha de nacimiento -->
                    <div class="mb-3">
                        <label for="f_nacimiento" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" required>
                    </div>
                    <!-- Curso -->
                    <!-- Genera dinámicamente el select de cursos a partir del array $cursos -->
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <button class="form-control combobox-toggle" type="button"
                            data-bs-toggle="combobox"
                            data-bs-name="curso"
                            data-bs-placeholder="Seleccione curso …">
                            <span class="combobox-value">Seleccione Curso ...</span>
                            <svg class="combobox-caret" width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.46967 5.46967C0.762563 5.17678 1.23744 5.17678 1.53033 5.46967L5 8.93934L8.46967 5.46967C8.76256 5.17678 9.23744 5.17678 9.53033 5.46967C9.82322 5.76256 9.82322 6.23744 9.53033 6.53033L5.53033 10.5303C5.23744 10.8232 4.76256 10.8232 4.46967 10.5303L0.46967 6.53033C0.176777 6.23744 0.176777 5.76256 0.46967 5.46967Z" fill="currentcolor" />
                            </svg>
                        </button>
                        <div class="menu">
                            <?php foreach ($cursos as $indice => $curso) : ?>
                                <button class="menu-item" type="button" data-bs-value="<?= htmlspecialchars($indice) ?>"><?= $curso ?></button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Curso -->

                    <!-- Asignaturas -->
                    <!-- Genera dinámicamente una lista checbox de asignaturas a partir del array $asignaturas -->
                    <div class="mb-3">
                        <label for="asignaturas" class="form-label">Asignaturas:</label>
                        <?php foreach ($asignaturas as $indice => $asignatura) : ?>
                            <div class="form-check">
                                <div class="form-field">
                                    <input type="checkbox" id="checkaccent" class="check theme-secondary" name="asignaturas[]" value="<?= htmlspecialchars($indice) ?>" />
                                    <label for="checkaccent"><?= $asignatura ?></label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Crear Alumno</button>
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
