<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2 - CRUD libros</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.2 - CRUD libros</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <!-- menú de la aplicación -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
                    <div class="container-fluid">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="new.php">Nuevo</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ordenar</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Por título</a></li>
                                    <li><a class="dropdown-item" href="#">Por autor</a></li>
                                    <li><a class="dropdown-item" href="#">Por precio</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Buscar</button>
                        </form>
                    </div>
                </nav>

                <!-- mensajes del alta de libros (solo desde create.php) -->
                <?php if (!empty($error)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
                    </div>
                <?php elseif (!empty($mensaje)) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8') ?>
                    </div>
                <?php endif; ?>

                <h4>Tabla Libros</h4>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Genero</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($libros as $libro) : ?>
                            <tr<?= (isset($nuevo) && $libro["id"] === $nuevo["id"]) ? ' class="table-success"' : '' ?>>
                                <th scope="row"><?= $libro["id"] ?></th>
                                <td><?= htmlspecialchars($libro["titulo"]) ?></td>
                                <td><?= htmlspecialchars($libro["autor"]) ?></td>
                                <td><?= htmlspecialchars($libro["editorial"]) ?></td>
                                <td><?= htmlspecialchars($libro["genero"]) ?></td>
                                <td class="text-end"><?= number_format($libro["precio"], 2, ',', '.') ?> €</td>
                                <td>
                                    <a href="#" class="text-primary" title="Borrar"><i class="bi bi-trash-fill"></i></a>
                                    <a href="#" class="text-primary" title="Editar"><i class="bi bi-pencil-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-end fw-bold">Total</td>
                            <td class="text-end fw-bold"><?= number_format(array_sum(array_column($libros, 'precio')), 2, ',', '.') ?> €</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Raul Perez Aguilar - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
</body>

</html>
