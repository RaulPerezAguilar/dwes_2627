<?php
// Variables esperadas: $articulo
include 'partials/head.php';
?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Ficha del Artículo</legend>

                <!-- datos en solo lectura -->
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">id</th>
                            <td><?= e($articulo['id']) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Descripción</th>
                            <td><?= e($articulo['descripcion']) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Modelo</th>
                            <td><?= e($articulo['modelo']) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Categorías</th>
                            <td><?= e(implode(', ', $articulo['categorias'])) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Unidades</th>
                            <td><?= e($articulo['unidades']) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Precio</th>
                            <td><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>
                        </tr>
                    </tbody>
                </table>

                <a class="btn-solid theme-primary" href="index.php" role="button">
                    <i class="bi bi-arrow-left"></i> Volver al listado
                </a>
            </div>
        </main>

<?php include 'partials/footer.php'; ?>
