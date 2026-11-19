<!doctype html>
<html lang="es">

<head>
    <!-- Cargar la cabecera de la apliación -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.3 - CRUD Alumnos - POO SIN Encapsulación</title>
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- Menú principal de la aplicación -->
        <?php require_once __DIR__ . '/partials/menu.partial.php'; ?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Tabla de alumnos - POO</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Alumno</th>
                            <th scope="col">Email</th>
                            <th scope="col">F. Nacimiento</th>
                            <th scope="col" class="text-end">Edad</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Asignaturas</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $indice => $alumno): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $alumno->id ?></th>
                                <td><?= $alumno->apellidos . ', ' . $alumno->nombre ?></td>
                                <td><?= $alumno->email ?></td>
                                <td><?= $alumno->f_nacimiento ?></td>
                                <td class="text-end"><?= $alumno->getEdad() ?></td>
                                <td><?= $cursos[$alumno->curso] ?></td>
                                <td><?= implode(', ', $tabla_alumnos->get_indice_asignaturas_a_nombres($alumno->asignaturas)) ?></td>
                                <!-- botones de acción -->
                                <td>
                                    <!--  editar -->
                                    <a href="edit.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!--  borrar -->
                                    <a href="delete.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <!--  mostrar -->
                                    <a href="show.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td colspan="7"><?= count($alumnos) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>
