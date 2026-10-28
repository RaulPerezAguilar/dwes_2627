<?php
// Variables esperadas: $articulo (valores del formulario), $errores
include 'partials/head.php';
?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <?php include 'partials/mensajes.php'; ?>

                <legend>Formulario Añadir Artículo</legend>

                <!-- formulario nuevo artículo -->
                <form action="create.php" method="post">
                    <?php include 'partials/form_campos.php'; ?>

                    <a class="btn-solid theme-secondary" href="index.php" role="button">Cancelar</a>
                    <button type="reset" class="btn-solid theme-warning">Reset</button>
                    <button type="submit" class="btn-solid theme-primary">Añadir</button>
                </form>
            </div>
        </main>

<?php include 'partials/footer.php'; ?>
