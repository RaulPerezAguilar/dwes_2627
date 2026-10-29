<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2 - CRUD Artículos</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.2 - CRUD Artículos</span>
        </header>

        <!-- menú -->
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Artículos</a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>
                    <div class="drawer-body mb-2 md:mb-0">
                        <ul class="nav navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="new.php">Nuevo</a>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                                    Ordenar
                                </button>
                                <div class="menu">
                                    <a class="menu-item" href="order.php?campo=id&sentido=asc">Id (ascendente)</a>
                                    <a class="menu-item" href="order.php?campo=id&sentido=desc">Id (descendente)</a>
                                    <a class="menu-item" href="order.php?campo=descripcion&sentido=asc">Descripción (A-Z)</a>
                                    <a class="menu-item" href="order.php?campo=descripcion&sentido=desc">Descripción (Z-A)</a>
                                    <a class="menu-item" href="order.php?campo=modelo&sentido=asc">Modelo (A-Z)</a>
                                    <a class="menu-item" href="order.php?campo=modelo&sentido=desc">Modelo (Z-A)</a>
                                    <a class="menu-item" href="order.php?campo=unidades&sentido=asc">Unidades (menor a mayor)</a>
                                    <a class="menu-item" href="order.php?campo=unidades&sentido=desc">Unidades (mayor a menor)</a>
                                    <a class="menu-item" href="order.php?campo=precio&sentido=asc">Precio (menor a mayor)</a>
                                    <a class="menu-item" href="order.php?campo=precio&sentido=desc">Precio (mayor a menor)</a>
                                </div>
                            </li>
                        </ul>
                        <!-- formulario de búsqueda -->
                        <form class="hstack gap-2" role="search" action="filter.php" method="get">
                            <input class="form-control" type="search" name="q" value="<?= $q ?? '' ?>" placeholder="Search" aria-label="Search" />
                            <button class="btn-solid btn-icon theme-secondary" type="submit" aria-label="Buscar">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </dialog>
            </div>
        </nav>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>
                    Tabla Artículos
                    <?php if (!empty($q)): ?>
                        <small class="text-muted fs-6">- resultados para "<?= $q ?>" (<a href="index.php">limpiar</a>)</small>
                    <?php endif; ?>
                </legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">id</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Categorías</th>
                            <th scope="col" class="text-end">Unidades</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $indice => $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $articulo['id'] ?></th>
                                <td><?= $articulo['descripcion'] ?></td>
                                <td><?= $articulo['modelo'] ?></td>
                                <td><?= implode(', ', $articulo['categorias']) ?></td>
                                <td class="text-end"><?= $articulo['unidades'] ?></td>
                                <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>
                                <td>
                                    <!-- editar -->
                                    <a href="edit.php?indice=<?= $indice ?>" class="btn-icon" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <!-- eliminar (por POST con el índice oculto) -->
                                    <form action="delete.php" method="post" class="d-inline" onsubmit="return confirm('¿Eliminar este artículo?');">
                                        <input type="hidden" name="indice" value="<?= $indice ?>">
                                        <button type="submit" class="btn-icon" title="Eliminar">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                    <!-- mostrar -->
                                    <a href="show.php?indice=<?= $indice ?>" class="btn-icon" title="Mostrar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php if (empty($articulos)): ?>
                            <tr>
                                <td colspan="7" class="text-center">No hay artículos.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="text-end">Total</td>
                            <td class="text-end"><?= count($articulos) ?></td>
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

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>
