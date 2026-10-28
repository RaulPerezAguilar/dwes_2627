<?php
// Variables esperadas: $articulos, $q, $campo, $sentido, $mensaje, $errores
include 'partials/head.php';
include 'partials/nav.php';

/**
 * Cabecera ordenable: enlace a order.php alternando el sentido.
 * Si la columna ya es la activa en ascendente, el siguiente clic la pone en descendente.
 */
function th_ordenable($clave, $etiqueta, $campo, $sentido, $clase = '') {
    $activa    = ($campo === $clave);
    $siguiente = ($activa && $sentido === 'asc') ? 'desc' : 'asc';
    $icono     = $activa ? ($sentido === 'asc' ? ' <i class="bi bi-caret-up-fill"></i>' : ' <i class="bi bi-caret-down-fill"></i>') : '';

    return '<th scope="col" class="' . $clase . '"><a class="text-reset text-decoration-none" href="order.php?campo='
        . $clave . '&amp;sentido=' . $siguiente . '">' . e($etiqueta) . $icono . '</a></th>';
}
?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <?php include 'partials/mensajes.php'; ?>

                <legend>
                    Tabla Artículos
                    <?php if ($q !== ''): ?>
                        <small class="text-muted fs-6">— resultados para "<?= e($q) ?>" (<a href="index.php">limpiar filtro</a>)</small>
                    <?php elseif ($campo !== ''): ?>
                        <small class="text-muted fs-6">— ordenado por <?= e(CAMPOS_ORDEN[$campo]) ?> (<?= $sentido === 'asc' ? 'ascendente' : 'descendente' ?>) (<a href="index.php">quitar orden</a>)</small>
                    <?php endif; ?>
                </legend>

                <table class="table">
                    <thead>
                        <tr>
                            <?= th_ordenable('id', 'id', $campo, $sentido, 'text-end') ?>
                            <?= th_ordenable('descripcion', 'Descripción', $campo, $sentido) ?>
                            <?= th_ordenable('modelo', 'Modelo', $campo, $sentido) ?>
                            <th scope="col">Categorías</th>
                            <?= th_ordenable('unidades', 'Unidades', $campo, $sentido, 'text-end') ?>
                            <?= th_ordenable('precio', 'Precio', $campo, $sentido, 'text-end') ?>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $indice => $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= e($articulo['id']) ?></th>
                                <td><?= e($articulo['descripcion']) ?></td>
                                <td><?= e($articulo['modelo']) ?></td>
                                <td><?= e(implode(', ', $articulo['categorias'])) ?></td>
                                <td class="text-end"><?= e($articulo['unidades']) ?></td>
                                <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>
                                <!-- botones de acción -->
                                <td>
                                    <!-- editar -->
                                    <a href="edit.php?indice=<?= $indice ?>" class="btn-icon" title="Editar" aria-label="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <!-- eliminar (POST con el índice en un campo oculto) -->
                                    <form action="delete.php" method="post" class="d-inline"
                                        onsubmit="return confirm('¿Seguro que desea eliminar este artículo?');">
                                        <input type="hidden" name="indice" value="<?= $indice ?>">
                                        <button type="submit" class="btn-icon" title="Eliminar" aria-label="Eliminar">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                    <!-- mostrar -->
                                    <a href="show.php?indice=<?= $indice ?>" class="btn-icon" title="Mostrar" aria-label="Mostrar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php if (empty($articulos)): ?>
                            <tr>
                                <td colspan="7" class="text-center">
                                    No se encontraron artículos<?= $q !== '' ? ' para "' . e($q) . '"' : '' ?>.
                                </td>
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

<?php include 'partials/footer.php'; ?>
