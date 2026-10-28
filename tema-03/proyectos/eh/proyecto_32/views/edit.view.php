<?php
// Variables esperadas: $articulo, $indice (o $_POST['indice'] si se reenvía con errores), $errores
$indice_actual = $indice ?? ($_POST['indice'] ?? '');
include 'partials/head.php';
?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <?php include 'partials/mensajes.php'; ?>

                <legend>Formulario Actualizar Artículo</legend>

                <!-- formulario editar artículo -->
                <form action="update.php" method="post">
                    <!-- el índice del artículo viaja en un campo oculto -->
                    <input type="hidden" name="indice" value="<?= e($indice_actual) ?>">

                    <?php include 'partials/form_campos.php'; ?>

                    <a class="btn-solid theme-secondary" href="index.php" role="button">Cancelar</a>
                    <button type="reset" class="btn-solid theme-warning">Borrar</button>
                    <button type="submit" class="btn-solid theme-primary">Actualizar</button>
                </form>
            </div>
        </main>

<?php include 'partials/footer.php'; ?>
