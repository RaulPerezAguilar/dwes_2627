<!doctype html>
<html lang="es">

<head>
    <!-- Cargar la cabecera de la apliación -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.2 - CRUD Artículos - POO SIN Encapsulación</title>
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
                <legend>Tabla de artículos - POO</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Categorías</th>
                            <th scope="col" class="text-end">Unidades</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $indice => $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $articulo->id ?></th>
                                <td><?= $articulo->descripcion ?></td>
                                <td><?= $articulo->modelo ?></td>
                                <td><?= $marcas[$articulo->marca] ?></td>
                                <td><?= implode(', ', $tabla_articulos->get_indice_categorias_a_nombres($articulo->categorias)) ?></td>
                                <td class="text-end"><?= $articulo->unidades ?></td>
                                <td class="text-end"><?= number_format($articulo->precio, 2, ',', '.') ?> €</td>
                                <!-- botones de acción -->
                                <td>
                                    <!--  editar -->
                                    <a href="edit.php?id=<?= $articulo->id ?>" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!--  borrar -->
                                    <a href="delete.php?id=<?= $articulo->id ?>" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <!--  mostrar -->
                                    <a href="show.php?id=<?= $articulo->id ?>" class="btn btn-sm btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td colspan="7"><?= count($articulos) ?></td>
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